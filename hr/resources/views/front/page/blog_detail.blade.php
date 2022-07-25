@extends('front.layouts.front_layout')

@section('template_title')
    Blog
@endsection

@section('content')


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
         style="background-image:url({{ url('/storage/blog')}}/retail-industry-main2.png)">
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

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">

                <!-- SIDE BAR START -->
                <div class="col-md-3">

                    <aside class="side-bar">

                        <div class="widget bg-white  recent-posts-entry">
                            <h4 class="widget-title">Posts</h4>
                            <div class="section-content">
                                <div class="wt-tabs tabs-default border">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#web-design-1">Recent</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="web-design-1" class="tab-pane active ">
                                            @foreach($blog2 as $val)

                                            <div class="widget-post-bx">
                                                <div class="widget-post clearfix bg-gray">
                                                    <div class="wt-post-media">
                                                        <a href="/blog_detail/{{$val->id}}"><img class="radius-bx"  src="{{url('/storage/blog')}}{{"/".$val->blog_image}}" alt=""></a>
                                                    </div>
                                                    <div class="wt-post-info">
                                                        <div class="wt-post-header">
                                                            <h6 class="post-title">{{$val->blog_title}}</h6>
                                                        </div>
                                                        <div class="wt-post-meta">
                                                            <ul>
                                                                @php $dat = strtotime($val->created_at); $dat1 = date('Y',$dat); $dat2 = date('d m',$dat); @endphp
                                                                <li class="post-author">{{$dat2}} {{$dat1}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>
                <!-- SIDE BAR END -->

                <!-- RIGHT PART START -->
                <div class="col-md-9">


                    <!-- BLOG START -->
                    <div class="blog-post date-style-3 blog-post-single">
                        <div class="wt-post-media wt-img-effect">
                            <a href="javascript:void(0);"><img style="width: 900px;height: 500px" src="{{url('/storage/blog')}}{{"/".$val->blog_image}}" alt=""></a>
                        </div>
                        <div class="post-description-area p-t30">
                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="javascript:void(0);">{{$blog->blog_title}}</a></h3>
                            </div>

                            <div class="wt-post-text">
                                <p>{{$blog->blog_text}}</p>

                                <blockquote>
                                    {{$blog->blog_quote}}
                                    <div class="p-t15"><p> – LAADO </p></div>
                                </blockquote>

                                <p class="clearfix">
                                    {{$blog->blog_text2}}.</p>

                            </div>
                            @php $url_name = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                 $fb= "https://www.facebook.com/sharer.php?u=";
                                 $tw = "https://twitter.com/share?text=text&url=";
                            @endphp
                            <div class="wt-box">
                                <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                                <div class="row  p-lr15">
                                    <h4 class="tagcloud pull-left m-t5 m-b0">Share this Post:</h4>
                                    <div class="widget_social_inks pull-right">
                                        <ul class="social-icons social-md social-square social-dark m-b0">
                                            <li><a href="{{$fb.$url_name}}" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="section-content p-t50">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <h2 class="text-uppercase">Related Blog Post</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <!-- CAROUSEL -->
                        <div class="portfolio-wrap wt-blog-grid-3">
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


                    <!-- BLOG END -->

                </div>
                <!-- RIGHT PART END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->



@endsection
@section('extraScript')


@endsection