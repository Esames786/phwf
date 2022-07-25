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

                <!-- BLOG GRID START -->
                <div class="portfolio-wrap wt-blog-grid-3">
                    @foreach($blog as $val)

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
                <!-- BLOG GRID END -->


            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->



@endsection
@section('extraScript')


@endsection