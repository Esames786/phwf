@extends('front.layouts.front_dashboard')

@section('template_title')
    Home
@endsection

@section('content')


    <!-- CONTENT START -->
    <div class="page-content">

        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <!-- START REVOLUTION SLIDER 5.4.1 -->
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                         data-alias="typewriter-effect" data-source="gallery">
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;"
                             data-version="5.4.1">
                            <ul>

                                @php $i=0; @endphp
                                @foreach($home as $val)
                                <li data-index="rs-{{$i}}000" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="{{ url('storage/home')}}/{{$val->home_banner}}" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">

                                    <!-- MAIN IMAGE -->
                                    <img src="{{ url('storage/home')}}/{{$val->home_banner}}"  alt=""
                                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                         class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper "
                                         id="slide-200-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="nowrap"
                                         data-type="shape"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         data-responsive="off"
                                         data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                    </div>

                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-200-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                         data-fontsize="['60','60','60','50']"
                                         data-lineheight="['70','70','70','60']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                        <span class="text-uppercase" style="font-family:'Roboto' ;"><span
                                                    class="text-primary">Laado </span> You Say We Do</span>
                                    </div>

                                    <!-- LAYER NR. 3 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme"
                                         id="slide-200-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['18','18','18','30']"
                                         data-lineheight="['30','30','30','40']"
                                         data-width="['650','650','650','650']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                        <span style="font-family:'Roboto';"><br><br> {{$val->banner_text}}
                                        </span>
                                    </div>

                                    <!-- LAYER NR. 4 [ for readmore botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-200-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index:13; text-transform:uppercase; font-weight:700;">
                                        <a href="javascript:;" class="site-button button-lg  m-r15">Read more <i
                                                    class="fa fa-angle-double-right"></i></a>
                                    </div>

                                    <!-- LAYER NR. 5 [ for botton ] -->
                                    <div class="tp-caption tp-resizeme"
                                         id="slide-200-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['230','230','230','230']"
                                         data-y="['top','top','top','top']" data-voffset="['490','490','490','600']"
                                         data-fontsize="['none','none','none','none']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']"

                                         data-type="text"
                                         data-responsive_offset="on"
                                         data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 13; text-transform:uppercase; font-weight:700;">
                                        <!--<a href="javascript:;" class="site-button button-lg  m-r15" >Read More<i class="fa fa-arrow-circle-o-right"></i></a>-->
                                    </div>

                                </li>
                                @php $i++; @endphp
                                @endforeach



                                    {{--<li data-index="rs-1000" data-transition="slidingoverlayhorizontal"--}}
                                        {{--data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"--}}
                                        {{--data-easein="default" data-easeout="default" data-masterspeed="default"--}}
                                        {{--data-thumb="{{ url('storage/home')}}/home1.png" data-rotate="0"--}}
                                        {{--data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""--}}
                                        {{--data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""--}}
                                        {{--data-param8="" data-param9="" data-param10="" data-description="">--}}

                                        {{--<!-- MAIN IMAGE -->--}}
                                        {{--<img src="{{ url('storage/home')}}/home1.png" alt=""--}}
                                             {{--data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"--}}
                                             {{--class="rev-slidebg" data-no-retina/>--}}
                                        {{--<!-- LAYERS -->--}}

                                        {{--<!-- LAYER NR. 1 [ for overlay ] -->--}}
                                        {{--<div class="tp-caption tp-shape tp-shapewrapper "--}}
                                             {{--id="slide-100-layer-1"--}}
                                             {{--data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"--}}
                                             {{--data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"--}}
                                             {{--data-width="full"--}}
                                             {{--data-height="full"--}}
                                             {{--data-whitespace="nowrap"--}}
                                             {{--data-type="shape"--}}
                                             {{--data-basealign="slide"--}}
                                             {{--data-responsive_offset="off"--}}
                                             {{--data-responsive="off"--}}
                                             {{--data-frames='[--}}
                                        {{--{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},--}}
                                        {{--{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}--}}
                                        {{--]'--}}
                                             {{--data-textAlign="['left','left','left','left']"--}}
                                             {{--data-paddingtop="[0,0,0,0]"--}}
                                             {{--data-paddingright="[0,0,0,0]"--}}
                                             {{--data-paddingbottom="[0,0,0,0]"--}}
                                             {{--data-paddingleft="[0,0,0,0]"--}}

                                             {{--style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">--}}
                                        {{--</div>--}}

                                        {{--<!-- LAYER NR. 2 [ for title ] -->--}}
                                        {{--<div class="tp-caption   tp-resizeme"--}}
                                             {{--id="slide-100-layer-2"--}}
                                             {{--data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"--}}
                                             {{--data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"--}}
                                             {{--data-fontsize="['60','60','60','50']"--}}
                                             {{--data-lineheight="['70','70','70','60']"--}}
                                             {{--data-width="['700','700','700','700']"--}}
                                             {{--data-height="['none','none','none','none']"--}}
                                             {{--data-whitespace="['normal','normal','normal','normal']"--}}

                                             {{--data-type="text"--}}
                                             {{--data-responsive_offset="on"--}}
                                             {{--data-frames='[--}}
                                        {{--{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},--}}
                                        {{--{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}--}}
                                        {{--]'--}}
                                             {{--data-textAlign="['left','left','left','left']"--}}
                                             {{--data-paddingtop="[0,0,0,0]"--}}
                                             {{--data-paddingright="[0,0,0,0]"--}}
                                             {{--data-paddingbottom="[0,0,0,0]"--}}
                                             {{--data-paddingleft="[0,0,0,0]"--}}

                                             {{--style="z-index: 13;--}}
                                        {{--white-space: normal;--}}
                                        {{--font-weight: 700;--}}
                                        {{--color: rgba(255, 255, 255, 1.00);--}}
                                        {{--border-width:0px;">--}}
                                        {{--<span class="text-uppercase" style="font-family:'Roboto' ;"><span--}}
                                                    {{--class="text-primary">Laado </span> You Say We Do</span>--}}
                                        {{--</div>--}}

                                        {{--<!-- LAYER NR. 3 [ for paragraph] -->--}}
                                        {{--<div class="tp-caption  tp-resizeme"--}}
                                             {{--id="slide-100-layer-3"--}}
                                             {{--data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"--}}
                                             {{--data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"--}}
                                             {{--data-fontsize="['18','18','18','30']"--}}
                                             {{--data-lineheight="['30','30','30','40']"--}}
                                             {{--data-width="['650','650','650','650']"--}}
                                             {{--data-height="['none','none','none','none']"--}}
                                             {{--data-whitespace="['normal','normal','normal','normal']"--}}

                                             {{--data-type="text"--}}
                                             {{--data-responsive_offset="on"--}}
                                             {{--data-frames='[--}}
                                        {{--{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},--}}
                                        {{--{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}--}}
                                        {{--]'--}}
                                             {{--data-textAlign="['left','left','left','left']"--}}
                                             {{--data-paddingtop="[0,0,0,0]"--}}
                                             {{--data-paddingright="[0,0,0,0]"--}}
                                             {{--data-paddingbottom="[0,0,0,0]"--}}
                                             {{--data-paddingleft="[0,0,0,0]"--}}

                                             {{--style="z-index: 13;--}}
                                        {{--font-weight: 500;--}}
                                        {{--color: rgba(255, 255, 255, 0.85);--}}
                                        {{--border-width:0px;">--}}
                                        {{--<span style="font-family:'Roboto';">--}}
                                            {{--<br><br>--}}
                                            {{--We are one of Canada’s leading construction Companies, known for our well-recognized ability to deliver projects with exceptional quality on time and budget.--}}

                                        {{--</span>--}}
                                        {{--</div>--}}

                                        {{--<!-- LAYER NR. 4 [ for readmore botton ] -->--}}
                                        {{--<div class="tp-caption tp-resizeme"--}}
                                             {{--id="slide-100-layer-4"--}}
                                             {{--data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"--}}
                                             {{--data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"--}}
                                             {{--data-lineheight="['none','none','none','none']"--}}
                                             {{--data-width="['300','300','300','300']"--}}
                                             {{--data-height="['none','none','none','none']"--}}
                                             {{--data-whitespace="['normal','normal','normal','normal']"--}}

                                             {{--data-type="text"--}}
                                             {{--data-responsive_offset="on"--}}
                                             {{--data-frames='[--}}
                                        {{--{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},--}}
                                        {{--{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}--}}
                                        {{--]'--}}
                                             {{--data-textAlign="['left','left','left','left']"--}}
                                             {{--data-paddingtop="[0,0,0,0]"--}}
                                             {{--data-paddingright="[0,0,0,0]"--}}
                                             {{--data-paddingbottom="[0,0,0,0]"--}}
                                             {{--data-paddingleft="[0,0,0,0]"--}}

                                             {{--style="z-index:13; text-transform:uppercase; font-weight:700;">--}}
                                            {{--<a href="javascript:;" class="site-button button-lg  m-r15">Read more <i--}}
                                                        {{--class="fa fa-angle-double-right"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</li>--}}
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- Slider END -->


        <!-- SERVICES START  -->
        <div class="section-full bg-white p-t80 p-b50 scale-bg-top scale-bg-bottom">
            <div class="container">
                <!-- IMAGE CAROUSEL START -->

                <!-- TITLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Our Services</h2>

                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <p>{{$service_intro}}</p>
                </div>
                <!-- TITLE END -->

                <!-- CAROUSEL -->
                <div class="section-content">

                    <div class="owl-carousel Home-services-carousel owl-btn-vertical-center">
                        @foreach($service as $val)
                        <div class="item">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{url('/storage/service')}}{{"/".$val->service_image}}" alt=""></a>
                                </div>
                                <div class="wt-info p-tb30">
                                    <h4 class="wt-title m-t0 m-b5"><a href="javascript:void(0);">{{$val->service_title}}</a></h4>

                                    <p>{{$val->service_text}} </p>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
        <!-- SERVICES CONTENT END -->

        <!-- LATEST BLOG SECTION START -->
        <div class="section-full latest-blog bg-gray p-t80 p-b50">
            <div class="container">
                <!-- TITLE -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Latest blog post</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                    <p>For Daily Updates you can see our blogs to find out more about what's happening in our company.For more details click one of the post. </p>
                </div>
                <!-- TITLE -->

                @foreach($blog2 as $val)

                    <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-post blog-grid date-style-3">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="/blog_detail/{{$val->id}}"><img style="width: 500px;height: 250px"   src="{{url('/storage/blog')}}{{"/".$val->blog_image}}" alt=""></a>
                            </div>
                            <div class="wt-post-info p-tb30 p-m30">
                                <div class="wt-post-title ">
                                    <h3 class="post-title"><a href="/blog_detail/{{$val->id}}">{{$val->blog_title}}</a>
                                    </h3>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        @php $dat = strtotime($val->created_at); $dat1 = date('Y',$dat); $dat2 = date('d m',$dat); @endphp
                                        <li class="post-date"><i class="fa fa-calendar"></i><strong>{{$dat2}}</strong>
                                            <span>{{$dat1}}</span></li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>{{$val->blog_quote}}</p>
                                </div>
                                <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                        <a  href="/blog_detail/{{$val->id}}" title="READ MORE" rel="bookmark"
                                            class="site-button-link">Read More</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <!-- LATEST BLOG SECTION END -->


        <!-- COMPANY DETAIL SECTION START -->
        <div class="section-full p-t50 bg-primary">
            <div class="container">
                <div class="section-content">
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                        <i class="fa fa-building"></i>
                                    </span>

                                <div class="icon-content">
                                    <div class="font-26 font-weight-800 text-black m-b5"><span
                                                class="counter">1000</span><b>+</b></div>
                                    <span class="text-uppercase">PROJECT COMPLETED</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-users"></i>
                                    </span>

                                <div class="icon-content">
                                    <div class="font-26 font-weight-800 text-black m-b5"><span
                                                class="counter">1500</span><b>+</b></div>
                                    <span>HAPPY CLIENTS</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-user-plus"></i>
                                    </span>

                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 text-black m-b5">4500</div>
                                    <span>WORKERS EMPLOYED</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-black m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-trophy"></i>
                                    </span>

                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 text-black m-b5">260</div>
                                    <span>AWARDS WON</span>
                                </div>
                            </div>
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
        <!-- OUR TEAM MEMBER SECTION END -->



        <!-- TESTIMONIAL SECTION START -->

        {{--<div class="section-full p-t80 p-b50 bg-white scale-bg-bottom scale-bg-top">--}}
            {{--<div class="overlay-main"></div>--}}
            {{--<div class="container">--}}
                {{--<!-- TITLE START -->--}}
                {{--<div class="section-head text-center">--}}
                    {{--<h2 class="text-uppercase">What Our Client Say</h2>--}}

                    {{--<div class="wt-separator-outer">--}}
                        {{--<div class="wt-separator style-square">--}}
                            {{--<span class="separator-left bg-primary"></span>--}}
                            {{--<span class="separator-right bg-primary"></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<!-- TITLE END -->--}}

                {{--<!-- TESTIMONIAL 1 START ON BACKGROUND -->--}}
                {{--<div class="section-content">--}}
                    {{--<div class="owl-carousel testimonial-one">--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimonial-1 ">--}}
                                {{--<div class="testimonial-pic  radius shadow"><img src="{{ url('assets2')}}/images/testimonials/pic1.jpg"--}}
                                                                                 {{--width="100" height="100" alt=""></div>--}}
                                {{--<div class="testimonial-detail">--}}
                                    {{--<strong class="testimonial-name">Alex</strong>--}}
                                    {{--<span class="testimonial-position">Cfo Loop Inc</span>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-text">--}}
                                    {{--<p> Excellent Customer support!.The Company itself is very extended. and vast verity of ideas to make your work done with high priority and excellency. With this kind of solutions any company can grow with them with smooth pace in future.</p>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimonial-1 ">--}}
                                {{--<div class="testimonial-pic  radius shadow"><img src="{{ url('assets2')}}/images/testimonials/pic2.jpg"--}}
                                                                                 {{--width="100" height="100" alt=""></div>--}}
                                {{--<div class="testimonial-detail">--}}
                                    {{--<strong class="testimonial-name">Peter</strong>--}}
                                    {{--<span class="testimonial-position">Cto Loop Inc</span>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-text">--}}
                                    {{--<p> Excellent Customer support!.The Company itself is very extended. and vast verity of ideas to make your work done with high priority and excellency. With this kind of solutions any company can grow with them with smooth pace in future.</p>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="testimonial-1 ">--}}
                                {{--<div class="testimonial-pic  radius shadow"><img src="{{ url('assets2')}}/images/testimonials/pic3.jpg"--}}
                                                                                 {{--width="100" height="100" alt=""></div>--}}
                                {{--<div class="testimonial-detail">--}}
                                    {{--<strong class="testimonial-name">Maria </strong>--}}
                                    {{--<span class="testimonial-position">Ceo Inc</span>--}}
                                {{--</div>--}}
                                {{--<div class="testimonial-text">--}}
                                    {{--<p> Excellent Customer support!.The Company itself is very extended. and vast verity of ideas to make your work done with high priority and excellency. With this kind of solutions any company can grow with them with smooth pace in future.</p>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <!-- TESTIMONIAL SECTION START -->

        <!-- OUR CLIENT SLIDER START -->
        {{--<div class="section-full overlay-wraper bg-cover bg-repeat-x bg-primary"--}}
             {{--style="background-image:url({{ url('assets2')}}/images/background/bg7.png)">--}}
            {{--<div class="container">--}}

                {{--<!-- IMAGE CAROUSEL START -->--}}
                {{--<div class="section-content">--}}
                    {{--<div class="owl-carousel home4-logo-carousel">--}}

                        {{--<!-- COLUMNS 1 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w1.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 2 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w2.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 3 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w3.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 4 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w4.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 5 -->--}}

                        {{--<!-- COLUMNS 6 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w6.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 7 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w1.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 8 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w2.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 9 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w3.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 10 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w4.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- COLUMNS 11 -->--}}

                        {{--<!-- COLUMNS 12 -->--}}
                        {{--<div class="item">--}}
                            {{--<div class="ow-client-logo">--}}
                                {{--<div class="client-logo wt-img-effect on-color">--}}
                                    {{--<a href="#"><img src="{{ url('assets2')}}/images/client-logo/w6.png" alt=""></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- IMAGE CAROUSEL START -->--}}
            {{--</div>--}}

        {{--</div>--}}
        <!-- OUR CLIENT SLIDER END -->

    </div>
    <!-- CONTENT END -->


@endsection
@section('extraScript')


@endsection
