<?php
namespace App\Livewire\Franchisee\Credits;
use App\Models\CreditRecord;
use App\Models\Franchisee;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;
use Razorpay\Razorapay;
use Livewire\Component;
class Add extends Component
{
    public $franchisees, $selectedFranchisee, $franchiseeAccount, $amount, $paymentId;
    public function render()
    {
        // dd(Session::get('FRANCHISEE_ID'));
        $this->franchisees = Franchisee::whereId(Session::get('FRANCHISEE_ID'))->with('state')->get();
        return view('livewire.franchisee.credits.add');
    }
    public function loadFranchiseeDetails()
    {
        // dd("4ds");
        $this->selectedFranchisee = Franchisee::whereId($this->franchiseeAccount)->with('state', 'city')->first();
    }
    public function makePayment()
    {
        // $this->dispatch('paymentSuccess','Payment Success. Credits Added To Your Account'); 
        $this->validate([
            'amount' => 'required|numeric|min:100',
            'franchiseeAccount' => 'required',
        ]);
        //dd($this->franchiseeAccount);
        // dd(env('RAZORPAY_KEY'));
        //  dd($_ENV['RAZORPAY_KEY']);
        // Create a Razorpay order
        // $api = new Api($_ENV['RAZORPAY_KEY'], $_ENV['RAZORPAY_SECRET']);
        // dd($this->franchiseeAccount);
        $this->paymentId = CreditRecord::create([
            'franchiseeId' => $this->franchiseeAccount,
            'amount' => $this->amount,
            'type' => 'credit',
            'addedBy' => Session::get('FRANCHISEE_ID'),
            'status' => 'pending',
        ]);
        $this->dispatch('openRazorpayDialog', [
            'key' => $_ENV['RAZORPAY_KEY'],
            'amount' => $this->amount * 100,
            'name' => $_ENV['APP_NAME'],
            'description' => 'Payment for Franchisee',
            'prefill' => [
                'contact' => $this->selectedFranchisee->mobile,
            ],
        ]);
    }
    public function paymentSuccess($paymentId)
    {
        // dd($paymentId);
        $api = new Api($_ENV['RAZORPAY_KEY'], $_ENV['RAZORPAY_SECRET']);
        $paymentInfo = $api->payment->fetch($paymentId);
        $creditRecord = CreditRecord::find($this->paymentId->id);
        // dd($creditRecord);
        if ($creditRecord) {
            $creditRecord->transactionDetails = json_encode($paymentInfo->toArray());
            if ($paymentInfo->status == "authorized") {
                $creditRecord->status = 'paid';
                $franchisee = Franchisee::find($creditRecord->franchiseeId);
                $franchisee->credits += $creditRecord->amount;
                $franchisee->save();
                $this->dispatch('paymentSuccess','Payment Success. Credits Added To Your Account'); 
                // dd($franchisee->credit, $creditRecord->amount);
            } else {
                $creditRecord->status = 'cancelled';
                $this->dispatch('paymentError','Payment Failed. Failed to add account please contact support'); 

            }
            $creditRecord->save();
        }
        // dd($rj);
    }
}
