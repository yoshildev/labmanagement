@extends('franchisee.components.layout')
@php
    $page_title = 'Sub Franchisee';
    $page_title_full = "All $page_title";
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
                                        <h5>{{$page_title}} List</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <div id="scr-vtr-dynamic_wrapper"
                                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12">
                                                        <table id="scr-vtr-dynamic"
                                                            class="table table-bordered nowrap dataTable no-footer">
                                                            <thead>
                                                                <tr style="background-color:#FFEEBA;" role="row">
                                                                    <th>#</th>
                                                                    <th>Franchisee Name</th>
                                                                    <th>Contact </th>
                                                                    <th>City</th>
                                                                    <th>State</th>
                                                                    <th>Address</th>
                                                                    <th>Login</th>
                                                                    <th>Action </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($sub_franchisees as $sub_franchisee )
                                                                <tr role="row" class="odd">
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{"$sub_franchisee->first_name  $sub_franchisee->last_name"}}</td>
                                                                    <td>{{$sub_franchisee->mobile ?? null}}</td>
                                                                    <td>{{$sub_franchisee->city->name ?? null}}</td>
                                                                    <td>{{$sub_franchisee->state->name ?? null}}</td>
                                                                    <td>{{$sub_franchisee->address ?? null}}</td>
                                                                    <td><a href="#" class="btn btn-primary">Login Now </a></td>
                                                                    <td>
                                                                    <a href="{{route('franchisee.sub-franchisee.update',['id'=>$sub_franchisee->id])}}" class="btn waves-effect waves-light btn-info btn-icon">
                                                                    <label class="fas fa-edit"></label></a>
                                                                  
                                                                    </td>
                                                                </tr>
                                                                @empty
                                                                    
                                                                @endforelse
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('franchisee.components.datatable')
@endsection
