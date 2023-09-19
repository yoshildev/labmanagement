@extends('franchisee.components.layout')
@php
    // $type = empty($staff->id) ? 'Add' : 'Update';
    $page_title = 'Online Payments';
    $page_title_full = "$page_title";
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Select Payment Mode</h5>
                                    </div>
                                    <div class="card-block" id="franchiseedetails">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="{{route('franchisee.credits.addCredit')}}">
                                                    <img alt="Razor Pay"
                                                        src="{{ asset('franchisee_assets/online/pg_razor_pay.png') }}"
                                                        style="width:200px">
                                                </a>
                                            </div>
                                        </div>
                                        <br><hr><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('franchisee.components.select2')
@endsection
