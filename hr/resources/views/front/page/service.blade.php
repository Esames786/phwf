@extends('front.layouts.front_layout')

@section('template_title')
    Services
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
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <div class="section-full p-t80 p-b50  ">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Our Services</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <div class="row">
                    @foreach($service as $val)
                    <div class="col-md-4 col-sm-4 p-tb15">
                        <div class="wt-box bg-white">
                            <div class="wt-media">
                                <a href=""><img  src="{{url('/storage/service')}}{{"/".$val->service_image}}" alt=""></a>
                            </div>
                            <div class="wt-info p-tb30">
                                <h4 class="wt-title m-t0"><a href="javascript:void(0);">{{$val->service_title}}</a></h4>
                                <p>{{$val->service_text}} </p>
                                {{--<a href="javascript:void(0);" class="site-button outline   black"><strong class="text-center">Read More</strong></a>--}}
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>



@endsection
@section('extraScript')


@endsection