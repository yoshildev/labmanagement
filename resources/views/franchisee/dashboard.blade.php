@extends('franchisee.components.layout')
@section('page_title',"Dashboard | ". config('app.name'))
@section('content')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Welcome to {{config('app.name')}}</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="https://hypatholab.com/crm/franchisee">
                                <i class="feather icon-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="https://hypatholab.com/crm/franchisee">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-9 col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-xl-5 col-md-5">
                                            <div class="card stat-rev-card">
                                                <div class="card-block">
                                                    <div class="rev-icon bg-c-red"><i
                                                            class="fas fa-money-bill-alt text-white"></i><span
                                                            class="ring-sm"></span><span
                                                            class="ring-lg"></span></div>
                                                    <h2 class="text-c-green">{{$franchiseeDetails->credits}}</h2>
                                                    <p>Available Balance</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <a href="booking/inprogress">
                                                <div class="card o-hidden bg-c-green web-num-card">
                                                    <div class="card-block text-white">
                                                        <h5 class="m-t-15">In Progress</h5>
                                                        <h3 class="m-b-15">3</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card o-hidden bg-c-red web-num-card">
                                                <a href="booking/pending2">
                                                    <div class="card-block text-white">
                                                        <h5 class="m-t-15">Pending</h5>
                                                        <h3 class="m-b-15">1</h3>
                                                    </div>
                                            </div>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5><i class="fa fa-headphones"></i> HELPDESK SUPPORT</h5>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0 without-header">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><i class="fa fa-phone"></i>
                                                                    DELHI</h6>
                                                                <p class="text-muted m-b-0"></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <button
                                                            class="btn btn-success waves-effect waves-light btn-sm font-weight-bold">011-46577957</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><i class="fa fa-phone"></i>
                                                                    MUMBAI</h6>
                                                                <p class="text-muted m-b-0"></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <button
                                                            class="btn btn-primary waves-effect waves-light btn-sm font-weight-bold">9324075976</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><i class="fa fa-phone"></i>
                                                                    PATNA</h6>
                                                                <p class="text-muted m-b-0"></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <button
                                                            class="btn btn-primary waves-effect waves-light btn-sm font-weight-bold">9263402255
                                                            / 9263323099</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><i class="fa fa-phone"></i>
                                                                    KANPUR</h6>
                                                                <p class="text-muted m-b-0"></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <button
                                                            class="btn btn-primary waves-effect waves-light btn-sm font-weight-bold">9335260316</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><i class="fa fa-phone"></i>
                                                                    RANCHI</h6>
                                                                <p class="text-muted m-b-0"></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <button
                                                            class="btn btn-primary waves-effect waves-light btn-sm font-weight-bold">6207893351</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><i class="fa fa-phone"></i>
                                                                    PUNE</h6>
                                                                <p class="text-muted m-b-0"></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <button
                                                            class="btn btn-primary waves-effect waves-light btn-sm font-weight-bold">8799845511</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr class="btn-grd-info text-white">
                                                    <th><i class="fa fa-calendar"></i> Date</th>
                                                    <th>Booking</th>
                                                    <th>Samples</th>
                                                    <th>Received</th>
                                                    <th>Pending</th>
                                                    <th>Rejected</th>
                                                    <th>Tests</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                         <tbody>
                                            <tr>
                                                <td class="text-left font-weight-bold">
                                                    <a class="text-primary"
                                                        style="cursor:pointer"
                                                        onclick="sampleDetails('2023-08-28', 'FR000007')">
                                                        <u><i
                                                                class="fa fa-external-link-alt"></i>
                                                            28 Aug, 2023 (Mon)</u>
                                                    </a>
                                                </td>
                                                <td class="font-weight-bold"
                                                    style="font-size:18px">3</td>
                                                <td class="font-weight-bold"
                                                    style="font-size:18px">5</td>
                                                <td class="text-success font-weight-bold">
                                                    5 / <span class="text-dark">5</span>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success"
                                                            role="progressbar"
                                                            style="width:100%"
                                                            aria-valuenow="100"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-danger font-weight-bold">
                                                    0 / <span class="text-dark">5</span>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger"
                                                            role="progressbar"
                                                            style="width:0%" aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-secondary font-weight-bold">
                                                    0 / <span class="text-dark">5</span>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-secondary"
                                                            role="progressbar"
                                                            style="width: 0%"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-bold"
                                                    style="font-size:18px">6</td>
                                                <td class="font-weight-bold"
                                                    style="font-size:18px">
                                                    Rs. 480 </td>
                                            </tr>
                                         </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5 class="">Recent Barcodes Mismatch &nbsp; <a
                                            href="clinical/barcodes"
                                            class="btn btn-primary text-white btn-sm"><i
                                                class="fa fa-list"></i> View All</a></h5>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="comtable table table-hover m-b-0">
                                            <thead>
                                                <tr class="">
                                                    <th>#</th>
                                                    <th>Franchisee ID</th>
                                                    <th>Message Title</th>
                                                    <th>Last Activity</th>
                                                    <th>Replies</th>
                                                    <th>Date Added</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
    <div class="modal fade" id="modalCertification" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="POST" action="generatebill" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Welcome to HypathoLab</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <ul class="list-view">
                                <li>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img class="media-object card-list-img"
                                                width="200"
                                                src="{{ asset('franchisee_assets/logo/logot.png') }}"
                                                alt="Thank You">
                                        </a>
                                        <div class="media-body">
                                            <div class="col-xs-12">
                                                <h6 class="d-inline-block">Thank You for being
                                                    with Us</h6>
                                            </div>
                                            <div class="f-13 text-muted m-b-15">
                                                Dear HY PATHO LAB .,
                                            </div>
                                            <p>We, <span
                                                    class="font-weight-bold">HypathoLab,</span>
                                                the Largest Diagnostics Company in India wish to
                                                express our warm appreciation and sincere gratitude
                                                for your outstanding support and encouragement. Each
                                                franchisee and user are equally important to us.
                                                <br /><br />Today HYPATHOLAB is recognised as a
                                                leading diagnostic chain having numerous Collection
                                                Centres across all over India. <br />For this, we
                                                are ever grateful to you. Keep Supporting Us!
                                            </p>
                                            <div class="m-t-15">
                                                <a type="button" title=""
                                                    href="https://hypatholab.com/crm/franchisee/settings/generatecertificate"
                                                    class="btn btn-danger btn-mini waves-effect waves-light">
                                                    <i class="fas fa-download"></i> Generate
                                                    Certificate</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalWarning" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">WARNING</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <ul class="list-view">
                            <li>
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object card-list-img" width="200"
                                            src="{{ asset('franchisee_assets/logo/warning.png') }}"
                                            alt="Warning">
                                    </a>
                                    <div class="media-body">
                                        <div class="col-xs-12">
                                            <h6 class="d-inline-block">Your Sub Franchisee A/C
                                                balance is DUE</h6>
                                        </div>
                                        <div class="f-13 text-muted m-b-15">
                                            Dear HY PATHO LAB .,
                                        </div>
                                        <p>Please have a look on it and get clear the dues.</p>
                                        <div class="m-t-15">
                                            <a type="button" title=""
                                                href="https://hypatholab.com/crm/franchisee/subfranchisee/account"
                                                class="buttonWarning waves-effect waves-light">
                                                <i class="fas fa-rupee-sign"></i> DUE : 0 | View
                                                Account</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODALS ------------------>
    <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sample Details</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect "
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNotice" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document"
            style="max-width: none;width: 80%!important;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORTANT NOTICE</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <ul class="list-view">
                            <li>
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object card-list-img"
                                            src="{{ asset('franchisee_assets/logo/construction.png') }}"
                                            alt="Warning" style="max-width: 300px;">
                                    </a>
                                    <div class="media-body">
                                        <div class="col-xs-12">
                                            <h2 class="d-inline-block">KINDLY COOPERATE</h2>
                                        </div>
                                        <div class="f-13 text-muted m-b-15">
                                            <b>Dear HY PATHO LAB .,</b>
                                        </div>
                                        <p style="font-size:15px;font-weight:600;color:#ffb715">
                                            Test Processing will not be available after 4PM today
                                            (4/11/2021). <br />All further reports will be processed
                                            <u><span style="color:#ff0707">tomorrow morning after
                                                    10 AM.</span></u><br /><br />
                                        </p>
                                        <p style="font-size:15px;font-weight:600;color:#3f1daa">We
                                            request you to kindly bear with us and co-operate for
                                            same.</p>
                                        <div class="m-t-15"><br />
                                            <a type="button" style="color:#ffffff"
                                                class="buttonWarning waves-effect waves-light">WISHING
                                                YOU HAPPY DIWALI FROM TEAM HYPATHOLAB</a>
                                        </div>
                                        <br /><br />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNotice2" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Greetings from Hypatholab!</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-xl-12">
                        <!-- Owl corousel style 2 card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>New Authorised Collection Center in Mumbai! Team HY PATHO LAB!
                                </h5>
                            </div>
                            <div class="card-blocks">
                                <div class="owl-carousel carousel-dot owl-theme">
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/collection_center_1.jpeg') }}"
                                            alt="Home Collection Center">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/collection_center_2.jpeg') }}"
                                            alt="Home Collection Center">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/collection_center_3.jpeg') }}"
                                            alt="Home Collection Center">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/collection_Center_4.jpeg') }}"
                                            alt="Home Collection Center">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/colllection_center_6.jpeg') }}"
                                            alt="Home Collection Center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Owl corousel style 2 card end -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalBookingNotice" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sample Instructions</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5><i class="fa fa-info-circle"></i> Sample Barcodes must be placed
                                properly as shown below.</h5>
                            <hr />
                            <img class="img-responsive" style="width:100%"
                                src="{{ asset('franchisee_assets/logo/sample_pasting.png') }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNotice3" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Greetings from Hypatholab!</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>HY PATHO LAB Calendar 2023 : Rs 25 /-
                                    <a
                                        href="https://hypatholab.com/crm/franchisee/inventory/order_now"><span
                                            class="text-danger text-underline">** Click to Order
                                            Now</span></a>
                                    <br /><span class="text-danger font-weight-bold"
                                        style="font-size:18px">Last Date to Order : 8 December,
                                        2022</span>
                                </h5>
                            </div>
                            <div class="card-block">
                                <div class="owl-carousel carousel-dots owl-theme">
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_1.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_2.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_3.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_4.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_5.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_6.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_7.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_8.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_9.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_10.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_11.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/calendar/calendar_23_page_12.jpeg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNotice4" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Greetings from Hypatholab!</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-xl-12">
                        <!-- Owl corousel style 2 card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Authorised Collection Center in Bihar Sharif! Team HY PATHO LAB!
                                </h5>
                            </div>
                            <div class="card-block">
                                <iframe style="width:100%;min-height:400px"
                                    src="https://www.youtube.com/embed/E3CAeXTQVTU"
                                    title="HY PATHO LAB" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Owl corousel style 2 card end -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNotice5" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Greetings from Hypatholab!</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>To Avail Offer : <a
                                        class="text-underline font-weight-bold text-danger"
                                        href="https://hypatholab.com/crm/franchisee/booking/new_discount">Click
                                        to Book Now</a></h5>
                            </div>
                            <div class="card-block">
                                <div class="owl-carousel carousel-dots owl-theme">
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/offer_1.jpg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                    <div class="item">
                                        <img class="d-block img-fluid"
                                            src="{{ asset('franchisee_assets/uploads/offer_2.jpg') }}"
                                            alt="HY PATHO LAB CALENDAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalOfferAug" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-gift"></i> INDPENDENCE DAY OFFER
                    </h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body offerbg_1" style="overflow: hidden;">
                    <div class="card-header">
                        <h6 style="width:80%">We have come up with special offer, <br />for Our
                            <span class="font-weight-bold">HY PATHO LAB FAMILY</span> on this
                            Independence Day Week.
                        </h6>
                    </div>
                    <br />
                    <div class="col-lg-12 col-xl-12">
                        <div class="offer-img"
                            style="position:absolute;display:inline-block;right:0;top:-160px">
                            <img
                                src="{{ asset('franchisee_assets/modal/republic_i1.png') }}"></img>
                        </div>
                        <div class="offer" style="">
                            <span class="font-weight-bold">HY INDEPENDENT PROFILE 1 (Profile) -
                            </span>
                            <a target="_blank"
                                href="https://hypatholab.com/crm/franchisee/booking/new_discount">
                                <span class="font-weight-bold text-primary text-underline">Rs. 169
                                    /- Only</span>
                            </a>
                            <br />
                            1. Complete Blood Count (CBC)<br />
                            2. THYROID PROFILE -3 (T3 T4 TSH)<br />
                            3. LIVER FUNCTION TESTS<br />
                            4. Kidney Profile<br />
                            5. GFR (GLOMERULAR FILTRATION RATE)<br />
                            6. Lipid Profile<br />
                        </div>
                        <br />
                        <span class="font-weight-bold">HY INDEPENDENT PROFILE 2 (Profile) -
                        </span>
                        <a target="_blank"
                            href="https://hypatholab.com/crm/franchisee/booking/new_discount">
                            <span class="font-weight-bold text-primary text-underline">Rs. 349 /-
                                Only</span>
                        </a>
                        <br /><br />
                        <span class="font-weight-bold text-danger" style="font-size:16px">**
                            booking for above offer will be available from <br />01 Aug, 2023 to 30
                            Aug, 2023</span>
                        <br /><br />
                        <span class="font-weight-bold text-primary" style="font-size:16px">**
                            click below to avail offer</span>
                        <br /><br />
                        <div class="offer" style="">
                            <a class="btn btn-danger" target="_blank"
                                href="https://hypatholab.com/crm/franchisee/booking/new_discount"><i
                                    class="fa fa-gift"></i> BOOK OFFER</a>
                        </div>
                        <br /><br />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalOffer1" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-gift"></i> HOLI OFFER</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body offerbg_1" style="overflow: hidden;">
                    <div class="card-header">
                        <h6 style="width:80%">We have come up with special offer, <br />for Our
                            <span class="font-weight-bold">HY PATHO LAB FAMILY</span> on this Holi
                            Special.
                        </h6>
                    </div>
                    <br />
                    <div class="col-lg-12 col-xl-12">
                        <div class="offer-img"
                            style="position:absolute;display:inline-block;right:0;top:-160px">
                            <img src="{{ asset('franchisee_assets/modal/holi_i1.png') }}"></img>
                        </div>
                        <div class="offer" style="">
                            <span class="font-weight-bold">HY HOLI PROFILE-1 - </span>
                            <a target="_blank"
                                href="https://hypatholab.com/crm/franchisee/booking/new_discount">
                                <span class="font-weight-bold text-primary text-underline">Rs. 199
                                    /- Only</span>
                            </a>
                            <br />
                            1. THYROID PROFILE -3 (T3 T4 TSH)<br />
                            2. Complete Blood Count (CBC)<br />
                            3. Kidney Profile<br />
                            4. GFR (GLOMERULAR FILTRATION RATE)<br />
                            5. LIVER FUNCTION TESTS<br />
                            6. Lipid Profile<br />
                            7. IRON PROFILE<br />
                        </div>
                        <br />
                        <div class="offer" style="">
                            <span class="font-weight-bold">HY HOLI PROFILE-2 - </span>
                            <a target="_blank"
                                href="https://hypatholab.com/crm/franchisee/booking/new_discount">
                                <span class="font-weight-bold text-primary text-underline">Rs. 149
                                    /- Only</span>
                            </a>
                        </div>
                        <br /><br />
                        <span class="font-weight-bold text-danger" style="font-size:16px">**
                            booking for above offer will be available from <br />10 Mar, 2023 to 20
                            Mar, 2023</span>
                        <br /><br />
                        <span class="font-weight-bold text-primary" style="font-size:16px">**
                            click below to avail offer</span>
                        <br /><br />
                        <div class="offer" style="">
                            <a class="btn btn-danger" target="_blank"
                                href="https://hypatholab.com/crm/franchisee/booking/new_discount"><i
                                    class="fa fa-gift"></i> CLICK TO BOOK TEST</a>
                        </div>
                        <br /><br />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalOfferHoli1" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-gift"></i> HAPPY HOLI</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body offerbg_1" style="overflow: hidden;">
                    <div class="card-header">
                        <h6 style="width:80%">WISHING HAPPY HOLI TO ALL OUR HY PATHO LAB FAMILY
                        </h6>
                    </div>
                    <br />
                    <div class="col-lg-12 col-xl-12">
                        <div class="offer-img"
                            style="position:absolute;display:inline-block;right:0;top:-160px">
                            <img src="{{ asset('franchisee_assets/modal/holi_i1.png') }}"></img>
                        </div>
                        <p style="font-size:15px;color:#3f1daa">Due to special occasion of Holi
                            Festival, <br /><span class="font-weight-bold">All centres of our HY
                                PATHO LAB will be closed.<br /> Timing : 7 March. </span></p>
                        <br />
                        <p style="font-size:15px;font-weight:600;color:#3f1daa">No Reports will be
                            processed on following date.<br />We request you to kindly co-operate
                            for same.</p>
                        <div class="m-t-15">
                            <a type="button" style="color:#ffffff;font-size:12px"
                                class="buttonWarning waves-effect waves-light">7 March |
                                CLOSED</a>
                        </div>
                        <br /><br />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalOfferHoli2" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-gift"></i> HAPPY HOLI</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body offerbg_1" style="overflow: hidden;">
                    <div class="card-header">
                        <h6 style="width:80%">WISHING HAPPY HOLI TO ALL OUR HY PATHO LAB FAMILY
                        </h6>
                    </div>
                    <br />
                    <div class="col-lg-12 col-xl-12">
                        <div class="offer-img"
                            style="position:absolute;display:inline-block;right:0;top:-160px">
                            <img src="{{ asset('franchisee_assets/modal/holi_i1.png') }}"></img>
                        </div>
                        <p style="font-size:15px;color:#3f1daa">Due to special occasion of Holi
                            Festival, <br /><span class="font-weight-bold">All centres of our HY
                                PATHO LAB will be closed.<br /> Timing : 7 March & 8 March. </span>
                        </p>
                        <br />
                        <p style="font-size:15px;font-weight:600;color:#3f1daa">No Reports will be
                            processed on following date.<br />We request you to kindly co-operate
                            for same.</p>
                        <div class="m-t-15">
                            <a type="button" style="color:#ffffff;font-size:12px"
                                class="buttonWarning waves-effect waves-light">7 March & 8 March |
                                CLOSED</a>
                        </div>
                        <br /><br />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalOfferHoli3" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-gift"></i> HAPPY HOLI</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body offerbg_1" style="overflow: hidden;">
                    <div class="card-header">
                        <h6 style="width:80%">WISHING HAPPY HOLI TO ALL OUR HY PATHO LAB FAMILY
                        </h6>
                    </div>
                    <br />
                    <div class="col-lg-12 col-xl-12">
                        <div class="offer-img"
                            style="position:absolute;display:inline-block;right:0;top:-160px">
                            <img src="{{ asset('franchisee_assets/modal/holi_i1.png') }}"></img>
                        </div>
                        <p style="font-size:15px;color:#3f1daa">Due to special occasion of Holi
                            Festival, <br /><span class="font-weight-bold">All centres of our HY
                                PATHO LAB will be closed.<br /> Timing : 7 March (12 PM) to 9 March
                                (12 PM). </span></p>
                        <br />
                        <p style="font-size:15px;font-weight:600;color:#3f1daa">No Reports will be
                            processed on following date.<br />We request you to kindly co-operate
                            for same.</p>
                        <div class="m-t-15">
                            <a type="button" style="color:#ffffff;font-size:12px"
                                class="buttonWarning waves-effect waves-light">7 March (12 PM) to
                                9 March (12 PM) | CLOSED</a>
                        </div>
                        <br /><br />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNoticeFinal" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" styles="max-width: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORTANT NOTICE</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="media-left" href="#">
                                    <img class="media-object card-list-img"
                                        src="{{ asset('franchisee_assets/logo/construction.png') }}"
                                        alt="Warning" style="max-width: 200px;">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <h2 class="d-inline-block">KINDLY NOTE</h2>
                                <div class="f-13 text-muted m-b-15">
                                    <b>Dear HY PATHO LAB .,</b>
                                </div>
                                <p style="font-size:15px;font-weight:600;color:#ffb715">
                                    <i class="fa fa-exclamation-triangle"></i> Due to Server
                                    Maintenance, New Booking will be closed till 15 March, 3
                                    AM<br /><br />
                                    <span style="color:#ca4f35">
                                        BOOKING CLOSED TILL 15 March, 3 AM<br /><br />
                                    </span>
                                </p>
                                <p style="font-size:15px;font-weight:600;color:#3f1daa">We request
                                    you to kindly bear with us and co-operate for same.</p>
                                <div class="m-t-15"><br />
                                    <a type="button" style="color:#ffffff;font-size:12px"
                                        class="buttonWarning waves-effect waves-light">New Booking
                                        will be started therafter mentioned time.</a>
                                </div>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNoticeStop" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="max-width: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORTANT NOTICE</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="media-left" href="#">
                                    <img class="media-object card-list-img"
                                        src="{{ asset('franchisee_assets/logo/construction.png') }}"
                                        alt="Warning" style="max-width: 200px;">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <h2 class="d-inline-block">KINDLY NOTE</h2>
                                <div class="f-13 text-muted m-b-15">
                                    <b>Dear HY PATHO LAB .,</b>
                                </div>
                                <p style="font-size:15px;font-weight:600;" class="text-primary">
                                    For all logistic related queries, kindly contact our new
                                    incharge :<br />
                                    Vijay Dubey : 9905254538<br />
                                    Vijay Mangalam : 8490066995
                                </p>
                                <br />
                                <p style="font-size:15px;font-weight:600;color:#ffb715">
                                    <a type="button" style="color:#ffffff;font-size:14px"
                                        class="buttonWarning waves-effect waves-light">
                                        <i class="fa fa-exclamation-triangle"></i> Previous
                                        Logistic Incharge RK Jat has left the position.
                                    </a><br /><br />
                                    <span style="color:#ca4f35;font-weight:800">
                                        ** KINDLY CONTACT OUR NEW LOGISTIC INCHARGE<br /><br />
                                    </span>
                                </p>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNoticeWish" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="max-widths: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">FROM HYPATHOLAB FAMILY</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="media-left" href="#">
                                    <img class="media-object card-list-img"
                                        src="{{ asset('franchisee_assets/logo/cake.gif') }}"
                                        alt="Warning" style="max-width: 200px;">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <h2 class="d-inline-block" style="font-size:14px">Dear Ambuj
                                    Verma,</h2>
                                <div class="f-13 text-muted m-b-15">
                                </div>
                                <p style="font-size:15px;font-weight:600;" class="text-primary">
                                    On this auspicious day, we from Hypatholab Team, would like to
                                    wish you a very <span
                                        style="font-size:16px;color:green"><u>Happy
                                            Birthday</u></span> and many many returns of the
                                    day.<br />
                                </p>
                                <br />
                                <p style="font-size:15px;font-weight:600;color:#ffb715">
                                    <a type="button" style="color:#ffffff;font-size:14px"
                                        class="buttonWarning waves-effect waves-light"><i
                                            class="fa fa-birthday-cake"></i> HAPPY BIRTHDAY MR.
                                        AMBUJ VERMA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNoticePay" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="max-width: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORTANT NOTICE</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <img class="media-object card-list-img"
                                    src="{{ asset('franchisee_assets/logo/onlinepay.png') }}"
                                    alt="Warning" style="max-width: 200px;">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="f-13 text-muted m-b-15">
                                <b>Dear HY PATHO LAB .,</b>
                            </div>
                            <p style="font-size:15px;font-weight:600;color:#ffb715">
                            <h4 class="d-inline-block"><i class="fa fa-check"></i> ONLINE
                                PAYMENT IS AVAILABLE with no additional charges.</h4><br /> You can
                            now use the <span class="font-weight-bold">Online Payment
                                Option</span> to add credits to your account directly.
                            </p>
                            <p style="font-size:15px;font-weight:600;color:#ffb715;displays:none">
                                KINDLY NOTE : For Offline Payments, Bank A/C No has been updated.
                                Previous HDFC Bank with A/C No - 50200036371042 is been closed and
                                no longer available. Kindly, please use the updated Axis Bank A/C No
                                - 922020022206506, IFSC - UTIB0000644.
                            </p>
                            <div class="m-t-15">
                                <a class="btn btn-danger"
                                    href="https://hypatholab.com/crm/franchisee/online/payments"><i
                                        class="fa fa-rupee-sign"></i> CLICK FOR ONLINE PAYMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalVideo2" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Greetings from Hypatholab!</h5>
                    <button type="button" class="close closeVideoNext" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-xl-12">
                        <iframe style="width:100%;"
                            src="https://www.youtube.com/embed/EQ29KKG0U7s?modestbranding=1&rel=0&loop=1&controls=0"
                            title="HY PATHO LAB" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <!-- Owl corousel style 2 card end -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeVideoNext"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalVideo1" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Greetings from Hypatholab!</h5>
                    <button type="button" class="close closeVideoNext" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-xl-12">
                        <iframe style="width:100%;"
                            src="https://www.youtube.com/embed/y-FGVQM_djM?modestbranding=1&rel=0&loop=1&controls=0"
                            title="HY PATHO LAB" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <!-- Owl corousel style 2 card end -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeVideoNext"
                        data-dismiss="modal">Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNoticeInfo" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="max-width: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">IMPORTANT NOTICE</h5>
                    <button type="button" class="close closeVideoNext" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#">
                                    <img class="media-object card-list-img"
                                        src="{{ asset('franchisee_assets/logo/dues_2.jpg') }}"
                                        alt="Warning" style="max-width: 200px;">
                                </a>
                                <br /><br />
                            </div>
                            <div class="col-md-8">
                                <div class="f-13 text-muted m-b-15">
                                    <b>Dear HY PATHO LAB .,</b>
                                </div>
                                <p style="font-size:15px;font-weight:600;color:#ffb715">
                                <h4 class="d-inline-block"><i
                                        class="fa fa-exclamation-triangle"></i> Booking will be
                                    disabled for Accounts having less than 0 Balance.</h4><br />
                                Kindly, keep your dues clear and account balance in positive.
                                </p>
                                <div class="m-t-15">
                                    <a style="font-size:14px" class="btn btn-danger"
                                        href="#"><i class="fa fa-rupee-sign"></i>
                                        EFFECTIVE from 15 June, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeVideoNext"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--<div id="styleSelector"></div>-->
</div>
@endsection