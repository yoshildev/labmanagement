@extends('franchisee.components.layout')
@php
    $type = (empty($staff->id)) ? 'Add' : "Update";
    $page_title = 'Staff';
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
                                            <input type="hidden" name="id" value="{{ $staff->id ?? '' }}">
                                            <div class="form-group form-default ">
                                                <input type="text" name="first_name" class="form-control fill" value="{{ $staff->first_name ?? old('first_name') }}" maxlength="20" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Firstname</label>
                                            </div>
                                            <div class="form-group form-default">
                                                <input type="text" name="last_name" class="form-control fill" value="{{ $staff->last_name ?? old('last_name') }}" maxlength="20">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Lastname</label>
                                            </div>
                                            <div class="form-group form-default">
                                                <input type="email" name="email" value="{{ $staff->email ?? old('email') }}" class="form-control fill">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Email ID</label>
                                            </div>
                                            <div class="form-group form-default">
                                                <input type="text" name="mobile" value="{{ $staff->mobile ?? old('mobile') }}"
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
                                        @if (empty($staff->id))
                                        <div class="form-group row loginCodeChek">
                                            <div class="col-sm-12 loginCodeChekAlert">
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="float-label font-weight-bold">Enter Username *</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text">{{strtoupper($franchiseeDetails->username)}}/</label>
                                                    </span>
                                                    <input type="text" name="username" id="username1" value="{{ old('username') ?? "STAFF/$staffCount" }}"
                                                        class="form-control fill" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="float-label font-weight-bold">Enter Password *</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text"><i class="fas fa-lock"></i></label>
                                                    </span>
                                                    <input type="text" name="password" id="password" class="form-control" {{(!empty($staff->password))? '' : 'required' }}>
                                                </div>
                                            </div>
                                       
                                        @endif
                                        <div class="col-sm-12">
                                            <label class="float-label font-weight-bold">Staff Type</label>
                                            <select name="staff_type" class="form-control fill">
                                                <option value="staff">Staff</option>
                                            </select>
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
                                                        value="{{$staff->date ?? date('Y-m-d')}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button type="submit" name="formsubmission"
                                                    class="btn waves-effect waves-light btn-danger"><i
                                                        class="fas fa-sign-in-alt"></i> {{empty($staff->id) ? 'Submit' : 'Update'}}</button>
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
    
   
    @include('franchisee.components.select2')
@endsection
