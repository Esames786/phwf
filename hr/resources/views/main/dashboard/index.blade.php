@extends('layouts.mainsite')

@section('template_title')
    Dashboard
@endsection

@section('content')
    @php
        $phoneaccess=explode(',',Auth::user()->emp_access_phone)
    @endphp
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Hi! Welcome Back</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">PHWF
                        Dashboard</a></li>
            </ol>
        </div>
        <div class="page-rightheader">
        </div>
    </div>
    <!--End Page header-->



    <!-- Row-3 -->
    <div class="row">
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div style="cursor: pointer" class="card-header" onclick="window.location.href= '{{url("customer")}}'">
                    <h3 class="card-title">JOB CARD</h3>
                    <div class="card-options">
                        <a href="{{url('customer')}}" class="option-dots" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i
                                    class="fe fe-more-horizontal fs-20"></i></a>
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>

    </div>
    <!-- End Row-3 -->
@endsection

@section('extraScript')


@endsection

