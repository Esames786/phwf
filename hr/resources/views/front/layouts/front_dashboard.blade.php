<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    @include('front.partials.dashboard.head')
</head>


<body id="bg">

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-1 ">

        <div class="top-bar bg-primary">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="wt-topbar-left">
                            <ul class="list-unstyled e-p-bx pull-left">
                                <li><i class="fa fa-envelope"></i>info@laa-do.com</li>
                                <li><i class="fa fa-phone"></i>(+1) 14387959532</li>
                            </ul>
                        </div>

                        <!--<div class="wt-topbar-right">
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><a href="#" data-toggle="modal" data-target="#Login-form"><i class="fa fa-user"></i>Login</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#Register-form"><i
                                            class="fa fa-sign-in"></i>Register</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-white" style="background: black">
                <div class="container">
                    <div class="logo-header">
                        <a href="{{url('home')}}">
                            <img src="{{ url('assets2')}}/images/laddo_logo.jpg" style="height:100px;width: 200px;padding: 10px;border-radius: 20px"  alt=""/>
                        </a>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- MAIN Vav -->
                    @include('front.partials.dashboard.nav')
                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -->
    <!-- HEADER END -->

    @yield('content')


    @include('front.partials.dashboard.foot')


    <!-- SCROLL TOP BUTTON -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

    <!-- MODAL  LOGIN -->
    <div id="Login-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Login Your Account</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="log-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit
                        </button>
                        <span class="font-12">Don't have an account? <a href="javascript:;" class="text-primary">Register
                                Here</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="{{ url('assets2')}}/images/logo-dark.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL  REGISTER -->
    <div id="Register-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Register here</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="reg-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Enter Password" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit
                        </button>
                        <span class="font-12">Already Have an Account? <a href="javascript:;"
                                                                          class="text-primary">Login</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="{{ url('assets2')}}/images/logo-dark.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>



</div>

@include('front.partials.dashboard.foot_script')

@yield('extraScript')


</body>
</html>
