@extends('layouts.innerpages')
@section('template_title')
    Add Job Employee
@endsection
@section('content')
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0"> Add Job Employee</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#"> Add Job Employee</a></li>
            </ol>
        </div>
        <div class="page-rightheader">
            {{--<div class="btn btn-list">--}}
                {{--<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>--}}
                {{--<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>--}}
                {{--<a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>--}}
            {{--</div>--}}
        </div>
    </div>
    <!--End Page header-->
    <!-- Row -->
    <form action="{{ route('customer.store') }}" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Add Job Employee</div>
                    </div>
                    <div class="card-body">
                        <div class="card-title font-weight-bold">Basic info:</div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" required name="name" class="form-control"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" required name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" required name="contact" class="form-control"
                                           placeholder="Number">
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Job title</label>
                                    <input type="text" required name="job_title" class="form-control"
                                           placeholder="Job title">
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Joining Date</label>
                                    <input type="date" required name="joining_date" class="form-control"
                                           placeholder="Joining Date">
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" required name="expiration_date" class="form-control"
                                           placeholder="Expiry Date">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select  required name="gender" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" required name="address" class="form-control"
                                           placeholder="Home Address">
                                </div>
                            </div>

                            <div class="col-md-12" >
                                <div class="form-group">
                                    <div class="row">
                                        <table id="glTable1" class="table table-striped table-bordered dt-responsive nowrap"
                                       cellspacing="3" width="auto"  style="line-height: 2.4px;">
                                            <thead>
                                            <tr>
                                                <th colspan="4" class="text-center" style="background-color: #d0cfcf; text-align: center;">Attach
                                                    Documents
                                                    <a type="button" id="addRowBtn" class="btn btn-sm btn-primary" style="float: right;"><i style="color: white" class="text-center fa fa-plus" aria-hidden="true"></i></a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="background-color: #d0cfcf; text-align: center;">File Type</th>
                                                <th class="productnametd" style="background-color: #d0cfcf; text-align: center;"> Select
                                                    File
                                                </th>
                                                <th class="productnametd" style="background-color: #d0cfcf; text-align: center;"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr style="background-color: #fff; text-align: center;">
                                                <td class="catclass">
                                                    <select
                                                            class="select2_single form-control @if ($errors->has('filetype')) border_alert @endif"
                                                            name="filetype[]" tabindex="-1" value="22">
                                                        <option value="">Select File Type</option>
                                                        @foreach($filetypes as $filetype)
                                                            <option value="{{ $filetype->id }}">{{ $filetype->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="productnametd">
                                                    <input type="file" class="form-control" id="fileup[]" name="fileup[]">
                                                </td>
                                                <td style="width: 5%">
                                                    <a type="button" class="trashAnchor btn btn-danger" id="removeRowBtn"><i style="color: white" class="text-center fa fa-minus" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn  btn-primary">SAVE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-->
    </form>
@endsection
@section('extraScript')
    <script>
        $(document).ready(function () {
            $('#addRowBtn').click(function () {
                $('#glTable1 tbody').append(`<tr><td> <select class="select2_single form-control @if ($errors->has('filetype')) border_alert @endif" name="filetype[]" tabindex="-1" value="22" required><option value="">Select File Type</option>@foreach($filetypes as $filetype)<option value="{{ $filetype->id }}" >{{ $filetype->name }}</option>@endforeach</select></td><td class="productnametd"><input type="file"  class="form-control" id="fileup[]" name="fileup[]"></td><td style="width: 5%"><a type="button" class="trashAnchor btn btn-danger" id="removeRowBtn"><i style="color: white" class="text-center fa fa-minus" aria-hidden="true"></i></a></td></tr>`);
            });
        });
        $('table').on('click', '.trashAnchor', function () {
            if ($(this).closest('tbody').find('tr').length > 1) {
                $(this).closest('tr').remove();
            } else {
                alert('Rows should be greater than one');
            }
        });
        function loadFile(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', "mr-3").attr('width', 200).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
    </script>
@endsection