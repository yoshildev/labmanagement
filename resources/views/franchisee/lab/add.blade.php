@extends('franchisee.components.layout')
@php
    $type = (empty($lab->id)) ? 'Add' : "Update";
    $page_title = 'Lab';
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
                        <form method="POST" action="{{ route('franchisee.lab.addSubmit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>{{ $page_title }} Details</h5>
                                        </div>
                                        <div class="card-block">
                                            <input type="hidden" name="id" value="{{ $lab->id ?? '' }}">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label class="float-label">{{ $page_title }} Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="fas fa-stethoscope"></i></label>
                                                        </span>
                                                        <input type="text" name="labname" id="labname" value="{{ $lab->name ?? old('labname') }}" value=""
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="float-label">Address</label>
                                                    <textarea rows="3" cols="3" class="form-control" name="address" id="address" placeholder="Enter Address">{{ $lab->address ?? old('address') }}</textarea>
                                                    <span class="form-bar"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="formsubmission"
                                                        class="btn waves-effect waves-light btn-danger"><i
                                                            class="fas fa-sign-in-alt"></i> {{empty($lab->id) ? 'Submit' : 'Update'}}</button>
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
