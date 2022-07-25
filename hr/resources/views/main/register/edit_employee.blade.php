@extends('layouts.innerpages')

@section('template_title')
    Edit Employee
@endsection

@section('content')


    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Edit Employee</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Edit Employee</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
    <!-- Row -->
    <form action="" id="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <input type="hidden" name="user_id" value="{{$data2->id}}">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Profile</div>
                    </div>
                    <div class="card-body">
                        <div class="card-title font-weight-bold">Basic info:</div>
                        <div class="row">
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" value="{{$data2->name}}" required name="first_name"
                                           class="form-control"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" value="{{$data2->email}}" required name="email"
                                           class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" required value="{{$data2->phone}}" name="phone_number"
                                           class="form-control"
                                           placeholder="Number">
                                </div>
                            </div>

                            <?php
                            //user access phone quote
                            $emp_access_phone = $data2->emp_access_phone;
                            $emp_access_phone = explode(",", $emp_access_phone);
                            //user access website quote
                            ?>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Employee Access</label>
                                    <select multiple="multiple" name="emp_access_phone[]" class="multi-select">
                                        <option @if(in_array("0", $emp_access_phone)){{ "selected='selected'" }} @endif value="0">Customer</option>
                                        <option @if(in_array("5", $emp_access_phone)){{ "selected='selected'" }} @endif value="5">Customers (Active/Delete) </option>
                                        <option @if(in_array("1", $emp_access_phone)){{ "selected='selected'" }} @endif  value="1">Package</option>
                                        <option @if(in_array("2", $emp_access_phone)){{ "selected='selected'" }} @endif  value="2">Invoice Create/Edit (Personal Use)</option>
                                        <option @if(in_array("4", $emp_access_phone)){{ "selected='selected'" }} @endif  value="4">Invoices Grand Access</option>
                                        <option @if(in_array("3", $emp_access_phone)){{ "selected='selected'" }} @endif  value="3">Expense (Personal Use)</option>
                                        <option @if(in_array("6", $emp_access_phone)){{ "selected='selected'" }} @endif  value="6">Expense Grand Access</option>
                                    </select>
                                </div>


                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" >JOB TYPE</label>
                                    <select class="form-control select2" name="job_type">
                                        <optgroup label="job type">
                                            @foreach ($data as $val)
                                                @if($data2->role == $val->id)
                                                    <option selected="selected"
                                                            value="{{ $val->id }}">{{ $val->name }}</option>
                                                @else
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>



                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">Password </label>
                                    <input type="password"  name="password"  class="form-control"
                                           placeholder="(Keep Password Empty, Until You need to change the password) ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" required name="address" value="{{$data2->address}}" class="form-control"
                                           placeholder="Home Address">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button id="sv_btn" type="submit" class="btn  btn-info">UPDATE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-->
    </form>


    <div class="modal" id="modaldemo4">
        <div class="modal-dialog modal-dialog-centered text-center " role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                    <i class="fe fe-check-circle fs-100 text-success lh-1 mb-5 d-inline-block"></i>
                    <h4 class="text-success tx-semibold" id="success"></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modaldemo5">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                    <i class="fe fe-x-circle fs-100 text-danger lh-1 mb-5 d-inline-block"></i>
                    <h4 class="text-danger" id="not_success"></h4>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extraScript')
    <script>

        document.body.style.zoom = "90%";
        $(document).ready(function (e) {
            $("#form").on('submit', (function (e) {
                e.preventDefault();
                $.ajax({
                    url: "/hr/update_employee",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {

                    },
                    success: function (data) {

                        // view uploaded file.
                        //$("#preview").html(data).fadeIn();

                        let test = data.toString();
                        let test2 = $.trim(test);
                        let text = "SUCCESS";
                        if (test2 == text) {
                            $('#success').html(data);
                            $('#modaldemo4').modal('show');
                            window.location.href = "/hr/view_employee";
                        } else {
                            $('#not_success').html(data);
                            $('#modaldemo5').modal('show');
                        }
                    },
                    error: function (e) {
                        $("#err").html(e).fadeIn();
                    }
                });
            }));
        });

    </script>

@endsection

