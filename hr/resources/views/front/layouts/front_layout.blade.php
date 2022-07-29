<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    @include('front.partials.mainsite_pages.head')
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
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-white" style="background: black">
                <div class="container">
                    <div class="logo-header">
                        <a href="index.php">
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
                    @include('front.partials.mainsite_pages.nav')
                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">




        @yield('content')


        @include('front.partials.mainsite_pages.foot')

    </div>

    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

</div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

@yield('extraScript')


</body>
</html>
