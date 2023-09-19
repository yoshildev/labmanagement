@extends('franchisee.components.layout')
@php
    $page_title = 'Doctors';
    $page_title_full = 'All Doctors';
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
                                        <h5>Doctors List</h5>
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
                                                                    <th>Doctor Name</th>
                                                                    <th>Gender </th>
                                                                    <th> Specialization</th>
                                                                    <th>Address  </th>
                                                                    <th>Remarks</th>
                                                                    <th>Date Added</th>
                                                                    <th>Action </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($doctors as $doctor )
                                                                <tr role="row" class="odd">
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{"$doctor->first_name $doctor->last_name "}}</td>
                                                                    <td>{{$doctor->gender ?? null}}<br>{{$loop->dob ?? null}}</td>
                                                                    <td>{{$doctor->specialization ?? null}}</td>
                                                                    <td>{{$doctor->address ?? null}}</td>
                                                                    <td>{{$doctor->remark ?? null}}</td>
                                                                    <td>{{date_format(date_create($doctor->created_at),"d F , Y , h:i")}}</td>
                                                                    <td>
                                                                    <a href="{{route('franchisee.doctor.update',['id'=>$doctor->id])}}" class="btn waves-effect waves-light btn-info btn-icon">
                                                                    <label class="fas fa-edit"></label></a>
                                                                    <a href="{{route('franchisee.doctor.delete',['doctor'=>$doctor->id])}}"  class="d-none"></a>
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
