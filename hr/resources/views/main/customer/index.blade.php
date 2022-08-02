@extends('layouts.innerpages')

@section('template_title')
    Job Card Form
@endsection

@section('content')

    @php
        $phoneaccess=explode(',',Auth::user()->emp_access_phone)
    @endphp
    <!-- Row -->
    @include('partials.mainsite_pages.return_function')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{$title}}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$title}}</a></li>
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
                        <a type="button" href="{{route('customer.create')}}"
                           class="btn btn-icon btn-info btn-sm"><i class="fe fe-plus"></i>
                            Add Job Employee
                        </a>

                        {{--<a type="button" href="{{ route('customer.index') }}"--}}
                           {{--class="btn btn-icon btn-success btn-sm"><i class="fe fe-plus"></i>--}}
                            {{--Show Active Customer--}}
                        {{--</a>--}}

                        @if (in_array("5", $phoneaccess))
                            {{--<a type="button" href="{{ url('deleted_customer') }}"--}}
                               {{--class="btn btn-icon btn-danger btn-sm"><i class="fe fe-plus"></i>--}}
                                {{--Show Delete Customer--}}
                            {{--</a>--}}
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">CREATED DATE</th>
                                    <th class="border-bottom-0">NAME</th>
                                    <th class="border-bottom-0">EMAIL</th>
                                    <th class="border-bottom-0">PHONE</th>
                                    <th class="border-bottom-0">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $val)
                                    <tr>
                                        <td>{{ $val->created_at }}</td>
                                        <td>{{ $val->name }}</td>
                                        <td>{{ $val->email }}</td>
                                        <td>{{ $val->contact }}</td>
                                        <td>
                                            <a class="dropdown-item" href="{{route('customer.edit',$val->id)}}">Edit</a>
                                            <a class="dropdown-item" href="{{url('employee_card',base64_encode($val->id))}}">Print Card</a>
                                            <a class="dropdown-item" href="{{url('employee_form',base64_encode($val->id))}}">Print Form</a>
                                            <a class="dropdown-item" href="{{route('view_doc',$val->id)}}">View Document</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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

