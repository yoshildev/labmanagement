<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Hypatholab" />
    <meta name="keywords" content="Hypatholab, Pathology">
    <meta name="author" content="Hypatholab" />
    <link rel="icon" href="{{ asset('franchisee_assets/logo/favicon.png') }}" type="image/x-icon">
    <script type="text/javascript" src="{{ asset('franchisee_assets/bower_components/jquery/js/jquery.min.js') }}?v=1.1">
    </script>
    <script type="text/javascript" src="{{ asset('franchisee_assets/assets/js/pace.min.js') }}?v=1.1"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/bootstrap/css/bootstrap.min.css') }}?v=1.1">
    <link rel="stylesheet" href="{{ asset('franchisee_assets/assets/pages/waves/css/waves.min.css') }}?v=1.1"
        type="text/css" media="all">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/assets/icon/feather/css/feather.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/bootstrap-daterangepicker/css/daterangepicker.css') }}?v=1.1" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/datedropper/css/datedropper.min.css') }}?v=1.1" />
    <link rel="stylesheet" href="{{ asset('franchisee_assets/bower_components/select2/css/select2.min.css') }}?v=1.1" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') }}?v=1.1" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/multiselect/css/multi-select.css') }}?v=1.1" />
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/assets/pages/data-table/css/buttons.dataTables.min.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/bower_components/sweetalert/css/sweetalert.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('franchisee_assets/assets/css/font-awesome-n.min.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css" href="{{ asset('franchisee_assets/assets/css/style.css') }}?v=1.3">
    <link rel="stylesheet" type="text/css" href="{{ asset('franchisee_assets/assets/css/custom.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css" href="{{ asset('franchisee_assets/assets/css/pages.css') }}?v=1.1">
    <link rel="stylesheet" type="text/css" href="{{ asset('franchisee_assets/assets/css/widget.css') }}?v=1.1">
    
    <style>
        .datepicker {
            z-index: 999999 !important;
        }
        .slimScrollBar {
            width: 10px !important;
            opacity: 0.6 !important;
            border-radius: 4px !important;
        }
    </style>
    {{-- <link rel="stylesheet"
        href="{{ asset('franchisee_assets/bower_components/owl.carousel/css/owl.carousel.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('franchisee_assets/bower_components/owl.carousel/css/owl.theme.default.css') }}" /> --}}
    <style>
        .btnbill {
            font-size: 16px;
            font-weight: 600;
        }
        .select2-container--default .select2-selection--single {
            margin-bottom: 0em;
        }
        .comtable .table th {
            padding: 6px 8px !important;
        }
        .comtable td {
            font-size: 12px !important;
            padding: 6px 8px !important;
        }
        .table-warning {
            height: 0px !important;
            display: none;
        }
        .dataTable.table th {
            padding: 6px 8px !important;
        }
        .table-dark th {
            background-color: #000;
        }
        .table-dark th {
            background-color: #000;
        }
        .datarecord td,
        .datarecord td a {
            font-size: 12px !important;
            padding: 6px 8px !important;
        }
        div.dataTables_wrapper div.dataTables_filter {
            text-align: right;
        }
        div.dataTables_wrapper div.dataTables_filter input {
            width: 100%;
        }
        .dataTables_wrapper .row:nth-child(1) .col-md-6:nth-child(1) {
            display: none;
        }
        .datarecord .form-control {
            margin-bottom: 0px;
        }
        .smallbtn {
            padding: 2px 5px;
        }
        .buttonWarning {
            background-color: #004A7F;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            border: none;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Arial;
            font-size: 20px;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            -webkit-animation: glowing 1500ms infinite;
            -moz-animation: glowing 1500ms infinite;
            -o-animation: glowing 1500ms infinite;
            animation: glowing 1500ms infinite;
        }
        @-webkit-keyframes glowing {
            0% {
                background-color: #B20000;
                -webkit-box-shadow: 0 0 3px #B20000;
            }
            50% {
                background-color: #FF0000;
                -webkit-box-shadow: 0 0 40px #FF0000;
            }
            100% {
                background-color: #B20000;
                -webkit-box-shadow: 0 0 3px #B20000;
            }
        }
        @-moz-keyframes glowing {
            0% {
                background-color: #B20000;
                -moz-box-shadow: 0 0 3px #B20000;
            }
            50% {
                background-color: #FF0000;
                -moz-box-shadow: 0 0 40px #FF0000;
            }
            100% {
                background-color: #B20000;
                -moz-box-shadow: 0 0 3px #B20000;
            }
        }
        @-o-keyframes glowing {
            0% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }
            50% {
                background-color: #FF0000;
                box-shadow: 0 0 40px #FF0000;
            }
            100% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }
        }
        @keyframes glowing {
            0% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }
            50% {
                background-color: #FF0000;
                box-shadow: 0 0 40px #FF0000;
            }
            100% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }
        }
        #modalNotice2,
        #modalNotice3,
        #modalNotice,
        #modalNotice4 {
            overflow-y: scroll;
        }
        .phoneCard:hover {
            background-color: #a083d4 !important;
        }
        #modalNoticePay .modal-dialog {
            width: 60%;
        }
        #modalNoticeStop .modal-dialog {
            width: 60%;
        }
        #modalNoticeInfo .modal-dialog {
            width: 60%;
        }
        #modalVideo1 .modal-dialog {
            width: 60%;
        }
        #modalVideo1 iframe,
        #modalVideo2 iframe {
            min-height: 400px !important;
        }
        @media only screen and (max-width: 800px) {
            .offer-img {
                display: none !important;
            }
            #modalNoticePay .modal-dialog {
                width: 100% !important;
            }
            #modalNoticeStop .modal-dialog {
                width: 100% !important;
            }
            #modalNoticeInfo .modal-dialog {
                width: 100% !important;
            }
            #modalVideo1 .modal-dialog {
                width: 100%;
            }
            #modalVideo1 iframe,
            #modalVideo2 iframe {
                min-height: 200px !important;
            }
            #modalVideo1 .modal-body,
            #modalVideo2 .modal-body {
                padding: 20px 10px;
            }
        }
    </style>
    @include('franchisee.components.messages')
</head>
<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('franchisee.components.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('franchisee.components.sidebar')
                    @yield('content')
                </div>
            </div>
        </div>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}?v=1.1"></script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/popper.js/js/popper.min.js') }}?v=1.1"></script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/bootstrap/js/bootstrap.min.js') }}?v=1.1"></script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/select2/js/select2.full.min.js') }}?v=1.1"></script>
        <!-- Multiselect js -->
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') }}?v=1.1">
        </script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/multiselect/js/jquery.multi-select.js') }}?v=1.1"></script>
        <script type="text/javascript" src="{{ asset('franchisee_assets/assets/js/jquery.quicksearch.js') }}?v=1.1"></script>
        <!-- waves js -->
        <script src="{{ asset('franchisee_assets/assets/pages/waves/js/waves.min.js') }}?v=1.1"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}?v=1.1"></script>
        <!-- datepicker js --->
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/assets/pages/advance-elements/moment-with-locales.min.js') }}?v=1.1"></script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}?v=1.1">
        </script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}?v=1.1">
        </script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/bootstrap-daterangepicker/js/daterangepicker.js') }}?v=1.1">
        </script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/datedropper/js/datedropper.min.js') }}?v=1.1"></script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/sweetalert/js/sweetalert.min.js') }}?v=1.1"></script>
        <!-- data-table js -->
        <script src="{{ asset('franchisee_assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}?v=1.1">
        </script>
        <script
            src="{{ asset('franchisee_assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}?v=1.1">
        </script>
        <script src="{{ asset('franchisee_assets/assets/pages/data-table/js/jszip.min.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/data-table/js/pdfmake.min.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/data-table/js/vfs_fonts.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}?v=1.1">
        </script>
        <script src="{{ asset('franchisee_assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}?v=1.1">
        </script>
        <script
            src="{{ asset('franchisee_assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}?v=1.1">
        </script>
        <script
            src="{{ asset('franchisee_assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}?v=1.1">
        </script>
        <script
            src="{{ asset('franchisee_assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}?v=1.1">
        </script>
        <!-- Custom js -->
        <!-- Float Chart js -->
        <script src="{{ asset('franchisee_assets/assets/pages/chart/float/jquery.flot.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/chart/float/jquery.flot.categories.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/chart/float/curvedLines.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}?v=1.1"></script>
        <!-- amchart js -->
        <script src="{{ asset('franchisee_assets/assets/pages/widget/amchart/amcharts.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/widget/amchart/serial.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/pages/widget/amchart/light.js') }}?v=1.1"></script>
        <!-- Custom js -->
        <script src="{{ asset('franchisee_assets/assets/js/pcoded.min.js') }}?v=1.1"></script>
        <script src="{{ asset('franchisee_assets/assets/js/vertical/vertical-layout.min.js') }}?v=1.1"></script>
        <script type="text/javascript"
            src="{{ asset('franchisee_assets/assets/pages/dashboard/custom-dashboard.min.js') }}?v=1.1"></script>
        <script type="text/javascript" src="{{ asset('franchisee_assets/assets/js/script.js') }}?v=1.1"></script>
        <script>
            function showTestPortfolio(fid) {
                $.ajax({
                    type: 'POST',
                    url: 'https://hypatholab.com/crm/franchisee/portfolio/ajax_testlist',
                    data: 'fid=' + fid,
                    cache: false,
                    dataType: "text",
                    success: function(data) {
                        $('#universalModal .modal-body').html(data);
                        $('#universalModal').modal();
                    }
                });
            }
            function showQRCode() {
                $('#universalModal2').modal();
            }
        </script>
        <div class="modal fade" id="universalModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" id="universalModal_testPortal">
                    <div class="modal-header">
                        <h5 class="modal-title">Test Portfolio <a class="btn btn-danger btn-sm"
                                href="https://hypatholab.com/crm/franchisee/portfolio/generateTest?downloadTest=1&fid=FR000007"><i
                                    class="fa fa-download"></i> Download Test Portfolio</a></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="universalModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" id="universalModal2_testPortal">
                    <div class="modal-header">
                        <h5 class="modal-title">Scan QR Code
                            <a class="btn btn-danger btn-sm"
                                href="{{ asset('franchisee_assets/logo/phonepe_outline.png') }}"
                                download="phonepe_qr_code_HY_LAB.png')}}"><i class="fa fa-download"></i> Download QR
                                Code</a>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img style="width:100%" src="{{ asset('franchisee_assets/logo/phonepe_qr.jpg') }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script type="text/javascript"
            src="{{ asset('franchisee_assets/bower_components/owl.carousel/js/owl.carousel.min.js') }}?v=1.1"></script> --}}
        <script>
            function datatablemake() {
                $('.scr-vtr-dynamic').DataTable({
                    scrollY: '60vh',
                    scrollCollapse: true,
                    ordering: false,
                    paging: false
                });
            }
            function sampleDetails(date, franchiseeid) {
                $('.scr-vtr-dynamic').DataTable().clear().destroy();
                $('#default-Modal .modal-title').html('Samples - ' + date);
                $.ajax({
                    url: 'https://hypatholab.com/crm/lab/sample/ajax/ajax_sampleViewAll',
                    data: 'date=' + date + '&fid=' + franchiseeid,
                    cache: false,
                    success: function(data) {
                        $('#default-Modal .modal-body').html(data);
                        datatablemake();
                        $('#default-Modal').modal();
                    }
                });
            }
            $('#modalVideo1 .closeVideoNext').click(function() {
                //$('#modalVideo2 iframe').attr('src', 'https://www.youtube.com/embed/EQ29KKG0U7s?autoplay=1&modestbranding=1&rel=0&loop=1&controls=0');
                //$('#modalVideo1 iframe').attr('src', '');
            });
            $('#modalNoticeInfo .closeVideoNext').click(function() {
                //$('#modalVideo1 iframe').attr('src', 'https://www.youtube.com/embed/y-FGVQM_djM?autoplay=1&modestbranding=1&rel=0&loop=1&controls=0');
            });
            $('#modalVideo2 .closeVideoNext').click(function() {
                //$('#modalVideo2 iframe').attr('src', '');
            });
            //$('#modalNotice3').modal();
            //$('#modalNotice2').modal();
            //$('#modalNotice4').modal();
            // $('.carousel-dot').owlCarousel({
            //     items: 1,
            //     loop: true,
            //     autoplay: true,
            //     nav: false
            // });
            // $('.carousel-dots').owlCarousel({
            //     items: 1,
            //     loop: true,
            //     autoplay: true,
            //     nav: false
            // });
            // $('.carousel-dots2').owlCarousel({
            //     items: 1,
            //     loop: true,
            //     autoplay: true,
            //     nav: false
            // });
            // $('#modalOfferAug').modal('show');
        </script>
    @stack("js")
</body>
</html>
