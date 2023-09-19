<div class="test" wire:poll>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Request Material</h5>
                </div>
                <div class="card-block">
                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="FR000007"
                        required="">
                    <input type="hidden" name="user_type" id="user_type" class="form-control" value="franchisee"
                        required="">
                    <div id="materialAppend">
                        <hr>
                        <div class="form-group row materialBlock">
                            <div class="col-sm-8">
                                <label class="float-label">Materials</label>
                                <select wire:model="material" wire:change="loadMaterial" class="form-control select2" required="" tabindex="-1" aria-hidden="true">
                                    <option value="">--- SELECT MATERIAL ----</option>
                                    @foreach ($allMaterials as $allMaterial )
                                    <option value="{{$allMaterial->id}}">{{$allMaterial->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="float-label">Available (in Stock)</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-tag"></i></label>
                                    </span>
                                    <input type="number" class="form-control" wire:model="stock" value="0"  readonly="" required="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="float-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-tag"></i></label>
                                    </span>
                                    <input type="number" name="material_price" class="form-control" value="{{$price ?? ''}}"
                                        readonly="" required="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="float-label">Enter Quantity</label>
                                <input type="number" wire:model="quantity"  class="form-control" wire:change="priceCalculation" wire:keyup="priceCalculation"
                                    value="" required="">
                            </div>
                            <div class="col-sm-4">
                                <label class="float-label">Total Amount</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-tag"></i></label>
                                    </span>
                                    <input type="text" wire:model="totalAmt" class="form-control"
                                        value="" readonly="" required="">
                                </div>
                            </div>
                            <!--<div class="col-sm-4">
                                <label class="float-label"></label>
                                <button type="button" onclick="$(this).closest('.row').remove()" class="btn waves-effect waves-light btn-danger btn-sm removeBtn hide"><i class="fas fa-times"></i> Remove</button>
                            </div>-->
                        </div>
                    </div>
                    <!--<hr/>
                        <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" onclick="addMore()" class="btn waves-effect waves-light btn-danger btn-sm"><i class="fas fa-plus"></i> Add More</button>
                        </div>
                        </div>-->
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label class="float-label">Enter Remarks *</label>
                            <textarea type="text" wire:model='remark' name="remarks" class="form-control" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" wire:submit="saveData" name="formsubmission"
                                class="btn waves-effect waves-light btn-success"><i class="fas fa-sign-in-alt"></i>
                                Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            Livewire.on('openRazorpayDialog', function(options) {
                console.log("wergh");
                options[0].handler = function(response) {
                    if (response.razorpay_payment_id) {
                        console.log("wergh");
                        @this.call('paymentSuccess', response.razorpay_payment_id)
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
        {{-- <script>
            document.addEventListener('livewire:load', function () {
                $('.select2').select2();
    
                Livewire.on('refreshSelect2', function () {
                    $('.select2').select2();
                });
            });
        </script> --}}
    @endpush
</div>
