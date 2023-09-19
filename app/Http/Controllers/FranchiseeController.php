<?php
namespace App\Http\Controllers;
use App\Models\Cities;
use App\Models\Franchisee;
use App\Models\State;
use App\Models\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Exception;
class FranchiseeController extends Controller
{
    public function login()
    {
        return view('franchisee.auth.login');
    }
    public function loginSubmit(Request $r)
    {
        $r->validate([
            'username' => 'required|exists:franchisees,username',
            'password' => 'required'
        ]);
        $franchisee = Franchisee::where('username', $r->username)->first();
        if ($franchisee) {
            if (Hash::check($r->password, $franchisee->password)) {
                Session::put('FRANCHISEE_ID', $franchisee->id);
                return to_route('franchisee.dashboard');
            } else {
                return error('Incorrect Passowrd');
            }
        } else {
            return error('No Username Found With This Username');
        }
    }
    public function logout()
    {
        Session::flush();
        return to_route('franchisee.login');
    }
    public function dashboard()
    {
        return view('franchisee.dashboard');
    }
    public function add($id=null)
    {
        // return view('franchisee.sub-franchisee.add',compact('states','cities'));
        try {
            $states = States::where('country_id',101)->get();
            $cities  = Cities::WhereIn('state_id',$states->pluck('id'))->get();
            if ($id) {
                $sub_franchisee = Franchisee::find($id);
                if ($sub_franchisee) {
                    return view('franchisee.sub-franchisee.add', compact('sub_franchisee','states','cities'));
                }
            } else {
                return view('franchisee.sub-franchisee.add',compact('states','cities'));
            }
        } catch (Exception $e) {
            return error($e->getMessage());
        }
    }
    public function addSubmit(Request $r)
    {
        $r->validate([
            // 'username' => "required|unique:franchisees,username," . ($r->id ?? ''),
            'first_name' => "required",
            'last_name' => "required",
            'email' => "required",
            'mobile' => "required",
            'state_id' => "required",
            'city_id' => "required",
            'pincode' => "required",
            'address' => "required",
            'date' => "required",
        ]);
        try {
            $franchiseeDetails = Franchisee::find(Session::get('FRANCHISEE_ID'));
            if (empty($r->id)) {
                $franchisee = new Franchisee();
                $message = "Added";
            } else {
                $franchisee = Franchisee::find($r->id);
                $message = "Updated";
            }
            if(empty($r->id)){
            $franchisee->username = ("$franchiseeDetails->username$r->username");
            $franchisee->password = Hash::make($r->password);
            }
            $franchisee->first_name = $r->first_name;
            $franchisee->clinic_name = $r->first_name;
            $franchisee->last_name = $r->last_name;
            $franchisee->email = $r->email;
            $franchisee->mobile = $r->mobile;
            $franchisee->state_id = $r->state_id;
            $franchisee->city_id = $r->city_id;
            $franchisee->pincode = $r->pincode;
            $franchisee->address = $r->address;
            $franchisee->date = $r->date;
            $franchisee->owner_id = Session::get('FRANCHISEE_ID');
            $franchisee->save();
            return success("Sub Franchisee $message Successfully");
        } catch (Exception $e) {
            // dd($r->all());   
            // dd($e->getMessage());
            return error($e->getMessage());
        }
    }
    public function all()
    {
        $sub_franchisees  = Franchisee::where('owner_id', Session::get('FRANCHISEE_ID'))->get();
        return view('franchisee.sub-franchisee.all', compact('sub_franchisees'));
    }
    // public function delete(Lab $lab)
    // {
    //     try {
    //         $lab->delete();
    //         return success("Lab Deleted Successfully");
    //     } catch (Exception $e) {
    //         return error($e->getMessage());
    //     }
    // }
}
