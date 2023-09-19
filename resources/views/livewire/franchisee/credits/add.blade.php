<div class="test" wire:poll.2s>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>My A/C Details</h5>
                </div>
                @if ($selectedFranchisee != null)
                    <div class="card-block" id="franchiseedetails">
                        <h4>{{ $selectedFranchisee->first_name }} .</h4>
                        <span class="font-weight-bold text-danger">Balance : {{ $selectedFranchisee->credits }}
                            Credits</span>
                        <br>
                        <br>
                        {{-- Last Credited Amount : <br>
                    <span class="text-success font-weight-bold">
                        15 Mar, 2023 01:27 AM | Rs. 35529459</span>
                    <br><br> --}}
                        <span class="font-weight-bold">Franchisee ({{ $selectedFranchisee->username }})</span><br>
                        State : {{ $selectedFranchisee->state->name ?? 'NA' }} <br>
                        City : {{ $selectedFranchisee->city->name ?? 'NA' }} <br>
                        Pincode : {{ $selectedFranchisee->pincode ?? 'NA' }} <br><br>
                        Address : {{ $selectedFranchisee->address ?? 'NA' }} <br>
                        Email : {{ $selectedFranchisee->email ?? 'NA' }}<br>
                        Mobile : {{ $selectedFranchisee->mobile ?? 'NA' }}
                    </div>
                @else
                    <div class="card-block" id="franchiseedetails">
                        No Details Found
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Add Credits to My A/C</h5>
                    @if (session()->has('errors'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Warning:</strong>
                            <ul>
                                @foreach (session('errors')->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <a class="btn btn-danger btn-sm pull-right float-right text-right"
                        href="https://hypatholab.com/crm/franchisee/credits/online_payments_rz">View Payment History</a>
                </div>
                <div class="card-block depositAddBlock">
                    <form method="POST" wire:submit="makePayment">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label class="float-label font-weight-bold">Select A/C *</label>
                                <select wire:model="franchiseeAccount" wire:change="loadFranchiseeDetails()"
                                    class="col-sm-12 select2" name="selectfranchisee" id="selectfranchisee"
                                    required="" tabindex="-1" aria-hidden="true">
                                    <option value="">-- Select --</option>
                                    @foreach ($franchisees as $franchisee)
                                        <option value="{{ $franchisee->id }}">
                                            {{ $franchisee->username . ' ' . $franchisee->first_name . ' ' . $franchisee->last_name ?? '' . ' ,' . $franchisee->state->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('franchiseeAccount')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="float-label">Transaction Type *</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-exchange-alt"></i></label>
                                    </span>
                                    <select name="transactiontype" id="transactiontype" class="form-control form-full"
                                        required="">
                                        <option value="credit">Credit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="float-label font-weight-bold">Enter Amount to be Credited *</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-user"></i></label>
                                    </span>
                                    <input type="number" wire:model="amount" name="noofcredits" id="noofcredits"
                                        class="form-control" min="100" max="25000" required="">
                                    @error('amount')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label class="float-label">Remarks</label>
                                <textarea rows="5" cols="5" class="form-control" wire:model="remark" name="remarks" id="remarks"
                                    placeholder="Enter Payment Remarks"></textarea>
                                <span class="form-bar"></span>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label class="float-label">Payment Mode *</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-globe"></i></label>
                                    </span>
                                    <select name="payment_mode" id="payment_mode" class="form-control form-full"
                                        required="">
                                        <option value="razorpay">Razor Pay</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row paymentInfo">
                            <div class="col-sm-12">
                                <label class="float-label">Transaction Info *</label>
                                <p class="font-weight-bold">
                                    @if ($amount != null)
                                        Add Amount : {{ $amount }}
                                        <br>
                                        @if ($amount < 100)
                                            <span class="text-danger">Please Enter Minimum Amount of 100</span>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <p class="font-weight-bold">
                                    NOTE : Pay using UPI / QR Codes for no Transaction Fee
                                </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="formsubmission"
                                    class="btn waves-effect waves-light btn-danger">
                                    <i class="fas fa-sign-in-alt"></i>
                                    Pay Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            // Listen for the Livewire event and open the Razorpay payment dialog
            Livewire.on('openRazorpayDialog', function(options) {
                console.log("wergh");
                options[0].handler = function(response) {
                    if (response.razorpay_payment_id) {
                        console.log("wergh");
                        @this.call('paymentSuccess',response.razorpay_payment_id)
                        // window.livewire.emit('paymentSuccess', response.razorpay_payment_id);
                        // Livewire.emit('paymentSuccess', response.razorpay_payment_id);
                        // wire('paymentSuccess',response.razorpay_payment_id)
                    } else {
                        //error
                    }
                }
                var rzp = new Razorpay(options[0]);
                rzp.on('payment.success', function(response) {
                    console.log('Payment successful:', response);
                });
                rzp.on('payment.error', function(error) {
                    console.error('Payment failed:', error);
                });
                rzp.open();
            });

            Livewire.on('paymentSuccess', function(message) {
                success(message)
            });

            Livewire.on('paymentError', function(message) {
                error(message)
            });
        </script>
    @endpush
</div>
