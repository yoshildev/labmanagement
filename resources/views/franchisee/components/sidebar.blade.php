<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">{{labName()}} . <br /><span class="text-warning">({{($franchiseeDetails->owner_id==0)? 'Super' : ''}} Franchisee)</span>
            </div>
            <ul class="pcoded-item pcoded-left-item">
                <li id="m_dashboard" class="{{setActiveRoute('franchisee.dashboard')}}">
                    <a href="{{route('franchisee.dashboard')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li id="m_dashboard">
                    <a href="https://hypatholab.com/crm/franchisee/settings/business" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Analytics</span>
                    </a>
                </li>
                <div class="pcoded-navigation-label">Booking</div>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Manage Booking</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/new" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Booking</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/list2"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Booking</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/pending2"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pending Booking</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/inprogress2"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Test in Progress</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/reportcomplete"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Report Complete</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/test_addition"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Test Addition</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Manage Reports</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/reports/list"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Download Reports</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/reports/alllist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Reports</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/searchbooking"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Search booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">Notifications</div>
                <li class="">
                    <a href="https://hypatholab.com/crm/franchisee/barcode_recheck/mismatch"
                        class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-cpu"></i>
                        </span>
                        <span class="pcoded-mtext">Barcode Mismatch</span>
                        <span class="pcoded-badge label label-success">0</span> </a>
                </li>
                <li class="">
                    <a href="https://hypatholab.com/crm/franchisee/clinical/onhold" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-cpu"></i>
                        </span>
                        <span class="pcoded-mtext">Hold</span>
                        <span class="pcoded-badge label label-success">0</span> </a>
                </li>
                <li class="">
                    <a href="https://hypatholab.com/crm/franchisee/clinical/pending" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-cpu"></i>
                        </span>
                        <span class="pcoded-mtext">Clinincal</span>
                        <span class="pcoded-badge label label-success">0</span> </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Cancellations</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/booking/cancelled"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Test Cancelled</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">Billing</div>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Generate Bill</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/bill/generatebill"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Bill</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/bill/billinglist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Billing List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="m_dashboard">
                    <a href="{{route('franchisee.credits.add')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon text-warning"><i class="fas fa-rupee-sign"></i></span>
                        <span class="pcoded-mtext text-warning">Online Payment</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Payment History</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li id="m_dashboard">
                            <a href="https://hypatholab.com/crm/franchisee/credits/online_payments_rz"
                                class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-rupee-sign"></i></span>
                                <span class="pcoded-mtext">Razor Pay</span>
                            </a>
                        </li>
                        <li id="m_dashboard">
                            <a href="https://hypatholab.com/crm/franchisee/credits/online_payments_paytmpg"
                                class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-rupee-sign"></i></span>
                                <span class="pcoded-mtext">Paytm Payments</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Track Ledger</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/credits/fullledger"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Account Summary</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/ledger/ledgerlist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Ledger List</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/ledger/billinglist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Billing List</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/overview/report_usage"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Report Usage</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{setActiveRoute('franchisee.doctors')}}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Manage Doctors</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('franchisee.doctor.add')}}"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Doctor</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('franchisee.doctor.all')}}"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Doctor</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Manage Lab</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('franchisee.lab.add')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Lab</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('franchisee.lab.all')}}"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Lab</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Test Portfolio</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/portfolio/testportfolio"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Test List</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/portfolio/profilelist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Test Profile</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/portfolio/sample_report"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Sample Report</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Commission</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/commission/showcommission"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">My Commission</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/commission/list"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Commission</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/commission/ledgerlist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Commission Ledger</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">Invenotry</div>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Inventory</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/inventory/requeststock"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Request Stock</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/inventory/requestlist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Request List</span>
                                <span class="pcoded-badge label label-success">0</span> </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/inventory/pendingcourier"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Receive Stock</span>
                                <span class="pcoded-badge label label-success">0</span> </a>
                        </li>
                        <li class="">

                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/inventory/supplyrecords"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Supply Materials</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Slide/Request</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/biopsy/request"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Request</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/biopsy/requestlist"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Request Pending</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/biopsy/requestall"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Requests</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">My Franchisee</div>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">My Franchisee</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('franchisee.sub-franchisee.add')}}"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Franchisee</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('franchisee.sub-franchisee.all')}}"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Franchisee</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/franchisee/account"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Accounts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Franchisee Pricing</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/addpricing"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Assign Price</span>
                            </a>
                        </li>
                        -<li class="">

                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/rate_pricing"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bulk Pricing</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/transfer_pricing"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Transfer Pricing</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Franchisee Credits</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/credits/superpasttransactions"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Credits History</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">Staff</div>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">My Staff</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/staff/add" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Staff</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/staff/list"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Staff</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">Sub Franchisee</div>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Sub Franchisee</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/subfranchisee/add"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Franchisee</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/subfranchisee/list"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">List Franchisee</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/subfranchisee/account"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Accounts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">SubFranchisee Pricing</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/addpricing_sub"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Assign Test</span>
                            </a>
                        </li>
                        <li class="">

                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/rate_pricing_sub"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bulk Pricing</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/rate_pricing_sub_all"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bulk All Pricing</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/pricing/transfer_pricing_sub"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Transfer Pricing</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">SubFranchisee Credits</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="https://hypatholab.com/crm/franchisee/credits/pasttransactions"
                                class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Credits History</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="pcoded-navigation-label">Settings</div>
                <li id="m_dashboard">
                    <a href="https://hypatholab.com/crm/franchisee/settings/generatecertificate"
                        class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                        <span class="pcoded-mtext">Generate Certificate</span>
                    </a>
                </li>
                <li id="m_dashboard">
                    <a href="https://hypatholab.com/crm/franchisee/kyc/kyc_verification"
                        class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                        <span class="pcoded-mtext">KYC Verification</span>
                    </a>
                </li>
                <li id="m_dashboard">
                    <a href="https://hypatholab.com/crm/franchisee/settings/changedetails"
                        class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                        <span class="pcoded-mtext">Update Profile</span>
                    </a>
                </li>
                <li id="m_dashboard">
                    <a href="https://hypatholab.com/crm/franchisee/settings/changepassword"
                        class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                        <span class="pcoded-mtext">Change Password</span>
                    </a>
                </li>
                <li id="m_dashboard">
                    <a href="{{route('franchisee.logout')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-log-in"></i></span>
                        <span class="pcoded-mtext">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
