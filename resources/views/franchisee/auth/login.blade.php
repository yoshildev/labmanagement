<!DOCTYPE html>
<html lang="zxx">
<title>Franchisee Login | Hypatho Lab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<!-- External CSS libraries -->
<link type="text/css" rel="stylesheet"
    href="{{asset('franchisee_assets/loginassets/css/bootstrap.min.css')}}">
<link type="text/css" rel="stylesheet"
    href="{{asset('franchisee_assets/loginassets/fonts/font-awesome/css/font-awesome.min.css')}}">
<link type="text/css" rel="stylesheet"
    href="{{asset('franchisee_assets/loginassets/fonts/flaticon/font/flaticon.css')}}">
<!-- Favicon icon -->
<link rel="shortcut icon" href="https://hypatholab.com/crm/lab/resources/logo/favicon.png" type="image/x-icon">
<!-- Google fonts -->
<link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
<!-- Custom Stylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('franchisee_assets/loginassets/css/style.css')}}">
<link rel="stylesheet" type="text/css" id="style_sheet"
    href="{{asset('franchisee_assets/loginassets/css/skins/default.css')}}">
<style>
    body::-webkit-scrollbar {
        width: 0em;
    }
    body::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }
    body::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
    }
</style>
</head>
<body id="top"
    style="background-image:url('https://hypatholab.com/crm/lab/resources/logo/bg_min.png');background-size:cover;">
    <div class="page_loader"></div>
    <div class="login-5">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992" style="padding: 100px 30px 40px">
                    <a href="https://hypatholab.com/crm">
                        <img src="https://hypatholab.com/crm/lab/resources/logo/logo.png" class="logo" alt="logo">
                    </a>
                    <h3>Welcome Back</h3>
                    <p>To Keep Connected with us Please Login Now with your Login
                        Details<!--<br/><a href="https://hypatholab.com/crm" class="text-white"><i class="fa fa-external-link"></i> Visit Website</a>-->
                    </p>
                    <a href="#" id="loginText" class="btn-outline">FRANCHISEE</a>
                    <p>
                        <br />
                        <b><i class="fa fa-circle text-success"></i> LIVE</b>
                    </p>
                    <!--<ul class="social-list clearfix">
                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                </ul>-->
                </div>
                <div class="col-lg-7 col-md-12 col-pad-0 align-self-center">
                    <div class="login-inner-form">
                        <div class="details">
                            <h3>Sign into your account</h3>
                            <form action="{{route('franchisee.loginSubmit')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="input-text" placeholder="Username" value="{{old('username')}}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="input-text" placeholder="Password">
                                </div>
                                <div class="form-group" style="display:none">
                                    <select class="form-control" name="logintype" id="logintype">
                                        <option value="4">Super Franchisee</option>
                                        <option value="1" selected>Franchisee</option>
                                        <option value="2">Sub Franchisee</option>
                                        <option value="3">Staff</option>
                                    </select>
                                </div>
                                <!--<div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                            </div>-->
                                <div class="form-group">
                                    <button type="submit" name="loginnow" class="btn-md btn-theme">Login</button>
                                </div>
                            </form>
                            <hr />
                            <h6 class="text-left" style="font-size:13px">BANK DETAILS : HYPATHO LAB PVT LTD,<br />A/C No
                                - 922020022206506, IFSC - UTIB0000644, AXIS BANK, BRANCH - NARAINA, NEW DELHI</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- External JS libraries -->
    <script src="{{asset('franchisee_assets/loginassets/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('franchisee_assets/loginassets/js/popper.min.js')}}"></script>
    <script src="{{asset('franchisee_assets/loginassets/js/bootstrap.min.js')}}"></script>
    <!-- Custom JS Script -->
    <script>
        $('#logintype').change(function() {
            myVal = $('#logintype option:selected').html();
            if (myVal == "Sub Franchisee") {
                $('#loginText').html(myVal);
            } else if (myVal == "Super Franchisee") {
                $('#loginText').html(myVal);
            } else {
                $('#loginText').html(myVal + ' Login');
            }
        });
    </script>
    @include('franchisee.components.messages')
</body>
</html>
