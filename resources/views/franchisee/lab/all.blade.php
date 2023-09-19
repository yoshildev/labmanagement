@extends('franchisee.components.layout')
@php
    $page_title = 'Lab';
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
                                                                    <th>Lab Name</th>
                                                                    <th>Address </th>
                                                                    <th>Date Added</th>
                                                                    <th>Action </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($labs as $lab )
                                                                <tr role="row" class="odd">
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{"$lab->name"}}</td>
                                                                    <td>{{$lab->address ?? null}}</td>
                                                                    <td>{{date_format(date_create($lab->created_at),"d F , Y , h:i")}}</td>
                                                                    <td>
                                                                    <a href="{{route('franchisee.lab.update',['id'=>$lab->id])}}" class="btn waves-effect waves-light btn-info btn-icon">
                                                                    <label class="fas fa-edit"></label></a>
                                                                    <a href="{{route('franchisee.lab.delete',['lab'=>$lab->id])}}"  class="d-none"></a>
                                                                        <a  onclick="openDeleteWarning(this)" class="btn waves-effect waves-light btn-danger btn-icon">
                                                                    
                                                                        <label class="fas fa-trash"></label></a>
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
