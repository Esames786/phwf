@extends('layouts.innerpages')

@section('template_title')
    Customer Documents
@endsection

@section('content')

    @php
        $phoneaccess=explode(',',Auth::user()->emp_access_phone)
    @endphp
    <!-- Row -->
    @include('partials.mainsite_pages.return_function')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Documents</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Documents</a></li>
            </ol>
        </div>
        <div class="page-rightheader">
            {{--<div class="btn btn-list">--}}
            {{--<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>--}}
            {{--<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if(session('flash_message'))
                <div class="alert alert-success">
                    {{session('flash_message')}}
                </div>
        @endif
        <!--div-->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a type="button" href="{{ route('customer.index') }}"
                           class="btn btn-icon btn-success btn-sm"><i class="fe fe-plus"></i>
                            All Customers
                        </a>

                        <a type="button" href="{{route('customer.edit',$data->id)}}"
                           class="btn btn-icon btn-info btn-sm"><i class="fe fe-plus"></i>
                            Upload More Documents
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        @if(isset($data->filess))
                            @foreach($data->filess as $val)
                                <div class="col-md-3">

                                    <a style="cursor: pointer" target="_blank"
                                       href="{{url('uploadedfiles/'.$val->customer_id.'_'.$val->id.'.'.$val->filename)}}">
                                        <span class="fa fa-eye"> {{ strtoupper($val->upladfiletype->name) }} View</span>
                                    </a>

                                </div>
                            @endforeach
                        @else
                            <div class="col-md-3">
                                <h4> No Document Found</h4>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
            <!--/div-->

        </div>
    </div>
    <!-- /Row -->
@endsection
@section('extraScript')
@endsection

