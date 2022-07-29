@extends('layouts.innerpages')

@section('template_title')
    Register
@endsection

@section('content')
    <!-- Row -->
    @include('partials.mainsite_pages.return_function')
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
                    <div class="card-title"><a type="button" href="{{url('add_employee')}}"
                                               class="btn btn-icon btn-primary"><i class="fe fe-plus"></i>Add Employee</a></div>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                <thead>
                                <tr>
                                    <th class="border-bottom-0">JOINING DATE</th>
                                    <th class="border-bottom-0">NAME</th>
                                    <th class="border-bottom-0">EMAIL</th>
                                    <th class="border-bottom-0">ROLE</th>
                                    <th class="border-bottom-0">PHONE</th>
                                    <th class="border-bottom-0">STATUS</th>
                                    <th class="border-bottom-0">EDIT</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $val)
                                    <tr>
                                        <td>{{$val->created_at}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->email}}</td>
                                        <td>{{ get_role($val->role,'name')}}</td>
                                        <td>{{$val->phone}}</td>
                                        <td>@if($val->status == "1"){{"Active"}} @else{{"Not Active"}}@endif</td>
                                        <td>
                                            <a class="dropdown-item" href="{{url('check_expense'.'/'.$val->id)}}">Check Expense</a>
                                            <a class="dropdown-item" href="{{url('edit_employee'.'/'.$val->id)}}">Edit</a>
                                            @if($val->status == "1")
                                            <a class="dropdown-item " href="{{url('user_deactive'.'/'.$val->id)}}">Deactivate</a>
                                            @else
                                                <a class="dropdown-item " href="{{url('user_active'.'/'.$val->id)}}">Active</a>
                                            @endif

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

