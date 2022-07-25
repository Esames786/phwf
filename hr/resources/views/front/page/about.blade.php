@extends('front.layouts.front_layout')

@section('template_title')
    About-Us
@endsection

@section('content')

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
         style="background-image:url({{ url('/storage')}}{{"/about_us/".$about->about_banner}});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">@if (trim($__env->yieldContent('template_title')))@yield('template_title')@endif</h1>


            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->


    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-t80 p-b70">
        <div class="container">
            <!-- TITTLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">About Company</h2>

                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
                <p>{{$about->about_title}}</p>

            </div>
            <!-- TITLE END -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                    <!--Fade slider-->
                    <div class="owl-carousel about-us-carousel owl-btn-vertical-center owl-dots-bottom-center">
                        @foreach($about_detaill as $val2)
                            @if(!empty($val2))
                                <div class="item">
                                    <div class="aon-thum-bx">
                                        <img style="width: 600px;height:300px"
                                             src="{{ url('/storage')}}{{"/about_detail/".$val2->img_1}}" alt="">
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <!--fade slider END-->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                    <!-- ACCORDIAN  BG DARK -->
                    <div class="section-content">
                        <div class="wt-accordion acc-bg-dark" id="accordion9">
                            @php $i=0; @endphp
                            @foreach($about_detaill as $val2)
                                @if(!empty($val2))
                                    <div class="panel wt-panel">
                                        <div class="acod-head  @if($i == 0) acc-actives @endif">
                                            <h6 class="acod-title text-uppercase">
                                                <a data-toggle="collapse" href="#collapseOne{{$i}}"
                                                   data-parent="#accordion9"><i
                                                            class="fa fa-globe"></i>
                                                    {{$val2->detail_title}}
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapseOne{{$i}}" class="acod-body collapse @if($i == 0) in @endif">
                                            <div class="acod-content p-tb15">   {{$val2->details}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @php $i++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->

    <!-- COMPANY DETAIL SECTION START -->
    <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5"
         style="background-image:url({{ url('/storage')}}{{"/about_us/".$about->fact_banner}});">
        <div class="overlay-main opacity-07 bg-black"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="text-right text-white">
                        <h3 class="font-24">{{$about->facts_title}}</h3>

                        <h1 class="font-60">{{$about->facts_title2}}</h1>

                        <p>{{$about->facts}}</p>
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2 col-sm-4">
                    <div class="status-marks  text-white m-tb10">
                        <div class="status-value text-right">
                            <span class="counter">1150</span>
                            <i class="fa fa-building font-26 m-l15"></i>
                        </div>
                        <h6 class="text-uppercase text-white text-right">PROJECT COMPLETED</h6>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="status-marks  text-white m-tb10">
                        <div class="status-value text-right">
                            <span class="counter">5223</span>
                            <i class="fa fa-users font-26 m-l15"></i>
                        </div>
                        <h6 class="text-uppercase text-white text-right">HAPPY CLIENTS</h6>
                    </div>
                </div>
                <div class="col-md-2 col-sm-">
                    <div class="status-marks  text-white m-tb10">
                        <div class="status-value text-right">
                            <span class="counter">4522</span>
                            <i class="fa fa-user-plus font-26 m-l15"></i>
                        </div>
                        <h6 class="text-uppercase text-white text-right">WORKERS EMPLOYED</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COMPANY DETAIL SECTION End -->



    <!-- OUR TEAM MEMBER SECTION START -->

    <div class="section-full text-center wt-our-team bg-white p-tb80 bg-no-repeat bg-bottom-center"
         style="background-image:url({{ url('assets2')}}/images/background/bg-8.jpg);">
        <div class="container">

            <!-- TITTLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Our team</h2>

                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
                <p>{{$team_member_title}}</p>
            </div>
            <!-- TITLE END -->

            <div class="section-content">
                <div class="row">

                @foreach($team_member as $val)
                    @if(!empty($val))
                        <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4  m-tb15">
                                <div class="wt-team-one bg-white">
                                    <div class="wt-team-media">
                                        <a href="javascript:void(0);"><img
                                                    src="{{url('/storage/team_member')}}{{"/".$val->team_img}}" class=""
                                                    alt=""></a>
                                    </div>
                                    <div class="wt-team-info text-center bg-white p-a10">
                                        <h4 class="wt-team-title"><a href="javascript:void(0);">{{$val->name}} </a></h4>

                                        <p>{{$val->position}} </p>
                                        <ul class="social-icons social-square social-dark">
                                            <li><a target="_blank" href="{{$val->fb_link}}" class="fa fa-facebook"></a></li>
                                            <li><a  target="_blank" href="{{$val->twitter_link}}" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection
@section('extraScript')


@endsection
