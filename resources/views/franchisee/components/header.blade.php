<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="https://hypatholab.com/crm/franchisee">
                <img class="img-fluid" src="{{asset('franchisee_assets/logo/logo.png')}}"
                    width="160px" alt="Hypatholab" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()"
                        class="waves-effect waves-light">
                        <i class="full-screen feather icon-maximize"></i>
                    </a>
                </li>
                <li class="header-search">
                    <form method="GET"
                        action="https://hypatholab.com/crm/franchisee/booking/searchbooking"
                        enctype="multipart/form-data">
                        <div class="main-search morphsearch-search">
                            <div class="input-group">
                                <span class="input-group-prepend search-close">
                                    <i class="feather icon-x input-group-text"></i>
                                </span>
                                <input type="text" name="keywordq" class="form-control"
                                    placeholder="Enter Keyword">
                                <span class="input-group-append search-btn">
                                    <i class="feather icon-search input-group-text"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </li>
                <li>
                    <span class="text-danger font-weight-bold">Credits : {{$franchiseeDetails->credits}}</span>
                </li>
                <li>
                    <a href="#" onclick="showTestPortfolio('FR000007')"
                        class="waves-effect waves-light">
                        <i class="fa fa-clipboard"></i>
                    </a>
                </li>
                <li style="padding: 0px;">
                    <a href="https://hypatholab.com/crm/franchisee/online/payments"
                        style="font-size: 12px;padding-top: 8px;color: #eb994a;font-weight: 800;"
                        class="waves-effect waves-light">
                        <i class="fa fa-rupee-sign"></i> Online Payment
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span class="badge bg-c-red">5</span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Welcome to {{config('app.name')}}!</h6>
                                <label class="label label-danger">{{date("Y")}}</label>
                            </li>
                            <li>
                                <div class="media">
                                    <!--<img class="img-radius" src="{{asset('franchisee_assets/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">-->
                                    <div class="media-body">
                                        <h5 class="notification-user">{{"$franchiseeDetails->first_name $franchiseeDetails->last_name"}} .</h5>
                                        <p class="notification-msg">Username : {{$franchiseeDetails->username}}</p>
                                        <span class="notification-time">ID : {{franchiseeId($franchiseeDetails->id)}}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-notification customerCareNav">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle text-primary font-weight-bold" data-toggle="dropdown">
                            <i class="fa fa-headphones"></i> Customer Care
                            <span class="badge bg-c-red"></span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Helpline & Support</h6>
                                <label class="label label-danger"><i class="fa fa-headphones"></i>
                                    24X7</label>
                            </li>
                            <li>
                                <div class="media">
                                    <!--<img class="img-radius" src="{{asset('franchisee_assets/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">-->
                                    <div class="media-body">
                                        @if (!empty(customerCareNumber()))
                                        <h5 class="notification-user"><i class="fa fa-phone"></i> Customer
                                            Care (24X7)<br />+91 {{customerCareNumber()}}</h5><br />
                                        @endif
                                        @if (!empty(helpDeskNumber()))
                                        <h5 class="notification-user"><i class="fa fa-phone"></i>Helpdesk
                                            (7AM - 7PM)<br />+91 {{helpDeskNumber()}}</h5>
                                        @endif
                                        <hr />
                                       {!!bankAccountDetails()!!}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle font-weight-bold text-danger" data-toggle="dropdown">
                            <i class="fa fa-power-off"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="drp-u-details">
                                <img src="https://cdn-icons-png.flaticon.com/512/219/219959.png"
                                    class="img-radius" alt="{{labName()}}  .">
                                <span>{{labName()}} .</span>
                                <a href="{{route('franchisee.logout')}}" class="dud-logout"
                                    title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </li>
                            <li>
                                <a href="settings/changedetails">
                                    <i class="feather icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{route('franchisee.logout')}}">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>