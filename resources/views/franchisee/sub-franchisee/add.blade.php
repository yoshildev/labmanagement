@extends('franchisee.components.layout')
@php
    $type = (empty($sub_franchisee->id)) ? 'Add' : "Update";
    $page_title = 'Sub Franchisee';
    $page_title_full = "$type $page_title";
@endphp
@section('page_title', "$page_title_full | " . config('app.name'))
@section('content')
    <div class="pcoded-content">
        @include('franchisee.components.breadcrumb')
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Personal Details</h5>
                                    </div>
                                    <form method="POST"  autocomplete="off" action="{{route('franchisee.sub-franchisee.addSubmit')}}" class="form-material">
                                    @csrf
                                        <div class="card-block">
                                            <input type="hidden" name="id" value="{{ $sub_franchisee->id ?? '' }}">
                                            <div class="form-group form-default ">
                                                <input type="text" name="first_name" class="form-control fill" value="{{ $sub_franchisee->first_name ?? old('first_name') }}" maxlength="20" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Firstname</label>
                                            </div>
                                            <div class="form-group form-default">
                                                <input type="text" name="last_name" class="form-control fill" value="{{ $sub_franchisee->last_name ?? old('last_name') }}" maxlength="20">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Lastname</label>
                                            </div>
                                            <div class="form-group form-default">
                                                <input type="email" name="email" value="{{ $sub_franchisee->email ?? old('email') }}" class="form-control fill">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Email ID</label>
                                            </div>
                                            <div class="form-group form-default">
                                                <input type="text" name="mobile" value="{{ $sub_franchisee->mobile ?? old('mobile') }}"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    class="form-control fill" maxlength="10">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Phone No</label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Area Information</h5>
                                    </div>
                                    <div class="card-block">
                                        @if (empty($sub_franchisee->id))
                                        <div class="form-group row loginCodeChek">
                                            <div class="col-sm-12 loginCodeChekAlert">
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="float-label font-weight-bold">Enter Username *</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text">{{strtoupper($franchiseeDetails->username)}}/</label>
                                                    </span>
                                                    <input type="text" name="username" id="username" value="{{ $sub_franchisee->username ?? old('username') }}"
                                                        oninput="this.value = this.value.replace(/\s+/g, '').toUpperCase()"
                                                        pattern="[A-Z0-9]*.{3,}" class="form-control fill" value=""
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="float-label font-weight-bold">Enter Password *</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text"><i class="fas fa-lock"></i></label>
                                                    </span>
                                                    <input type="text" name="password" id="password" class="form-control" {{(!empty($sub_franchisee->password))? '' : 'required' }}>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="float-label">Select State *</label>
                                                <select onchange="handleStateChange(this.value)" class="select2  col-sm-12 " name="state_id" id="state"
                                                    required="" tabindex="-1" aria-hidden="true">
                                                    <option value="">-- Select State --</option>
                                                    @foreach ($states as $state )
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="float-label">Select City *</label>
                                                <select class="select2 col-sm-12" name="city_id" id="city"
                                                    required="" tabindex="-1" aria-hidden="true">
                                                    <option value="">-- Select City --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="float-label">Enter Pincode</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></label>
                                                    </span>
                                                    <input type="text" name="pincode" value="{{ $sub_franchisee->pincode ?? old('pincode') }}" id="pincode"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label class="float-label">Enter Address</label>
                                                <textarea rows="5" cols="5" class="form-control"  name="address" id="address"
                                                    placeholder="Enter Address">{{ $sub_franchisee->address ?? old('address') }}</textarea>
                                                <span class="form-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Submission</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text"><i
                                                                class="fa fa-calendar"></i></label>
                                                    </span>
                                                    <input id="dropper-default1" class="form-control fill"
                                                        name="date" type="date"
                                                        value="{{date('Y-m-d')}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="submit" name="formsubmission"
                                                    class="btn waves-effect waves-light btn-danger"><i
                                                        class="fas fa-sign-in-alt"></i> {{empty($sub_franchisee->id) ? 'Submit' : 'Update'}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    @php
    $citiesAll = json_encode($cities);
@endphp
    <script>
        let stateOption = document.querySelector("#state");
        let cityOption = document.querySelector("#city");
        const citiesAll = {!! $citiesAll !!};
        const handleStateChange = (value) => {
            let findCities = citiesAll.filter((city => city.state_id == value))
            cityOption.innerHTML = "";
            findCities.forEach(function(element, index) {
                cityOption.innerHTML += `
            <option value="${element.id}">${element.name}</option>
            `
            });
        }
    </script>
    @if (!empty($sub_franchisee->id))
        <script>
           stateOption.value = `{{$sub_franchisee->state_id}}`
           handleStateChange({{$sub_franchisee->state_id}});
           cityOption.value = `{{$sub_franchisee->city_id}}`
        </script>
    @endif
    @include('franchisee.components.select2')
@endsection
