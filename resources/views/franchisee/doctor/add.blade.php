@extends('franchisee.components.layout')
@php
    $page_title = 'Doctor';
    $page_title_full = 'Add Doctor';
@endphp
@section('page_title', "$page_title_full | " . config('app.name'))
@section('content')
    <div class="pcoded-content">
        @include('franchisee.components.breadcrumb')
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <form method="POST" action="{{ route('franchisee.doctor.addSubmit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>{{ $page_title }} Information</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label class="float-label">Firstname *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="fas fa-user"></i></label>
                                                        </span>
                                                        <input type="text" name="first_name" id="firstname"
                                                            value="{{ $doctor->first_name ?? old('first_name') }}"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>

                                                <input class="" name="id" type="hidden" value="{{ $doctor->id ?? '' }}">
                                                <div class="col-sm-12">
                                                    <label class="float-label">Lastname *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="fas fa-user"></i></label>
                                                        </span>
                                                        <input type="text" name="last_name" id="lastname"
                                                            value="{{ $doctor->last_name ?? old('last_name') }}"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="float-label">Date of Birth</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="fa fa-calendar"></i></label>
                                                        </span>
                                                        <input class="form-control fill" name="dob" id="dob"
                                                            type="date" value="{{ $doctor->dob ?? old('dob') }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="float-label">Gender</label>
                                                    <select class="js-example-basic-single1 form-control" name="gender">
                                                        <option
                                                            {{ !empty($doctor->id) && $doctor->gender == 'male' ? 'selected' : '' }}
                                                            value="male">Male</option>
                                                        <option
                                                            {{ !empty($doctor->id) && $doctor->gender == 'female' ? 'selected' : '' }}
                                                            value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Professional Details</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label class="float-label">Doctor Specialization *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="fas fa-stethoscope"></i></label>
                                                        </span>
                                                        <input type="text" name="specialization" id="specialization"
                                                            value="{{ $doctor->specialization ?? old('specialization') }}"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="float-label">Remarks</label>
                                                    <textarea rows="3" cols="3" class="form-control" name="remark" id="remarks" placeholder="Enter Remarks">{{ $doctor->remark ?? old('remark') }}</textarea>
                                                    <span class="form-bar"></span>
                                                </div>
                                                <div class="col-sm-12"><br>
                                                    <label class="float-label">Address</label>
                                                    <textarea rows="3" cols="3" class="form-control" name="address" id="address"
                                                        placeholder="Enter Address Details">{{ $doctor->address ?? old('address') }}</textarea>
                                                    <span class="form-bar"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="formsubmission"
                                                        class="btn waves-effect waves-light btn-danger">
                                                        <i class="fas fa-sign-in-alt"></i> {{(!empty($doctor->id))? 'Update' : 'Submit'}} </button>
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
    </div>
@endsection
