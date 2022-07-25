@extends('layouts.order')
@section('template_title')
    Print Invoice
@endsection
@section('content')

    <style> .example-table td:nth-child(n+2) { border-left: 2px solid green; } </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="card-body pl-0 pr-0">
                        <div class="row">
                            <div class="col-sm-10">
                                <h2 class="font-weight-bold">INVOICE</h2>
                                <div class="">
                                    <h5 class="mb-1">Hi <strong>{{ strtoupper($row->customer->name) }} !</strong></h5>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ url('public/assets/images/logo.pngg')}}" width="150" alt="Logo">
                            </div>
                        </div>
                    </div>

                    <div class="card-body pl-0 pr-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Payment No.</span><br>
                                <strong>INV{{ $row->id }}</strong>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Invoice Date</span><br>
                                <strong>{{ date('F d, Y', strtotime($row->date)) }}</strong><br>
                                <span>Payment Date</span><br>
                                <strong>{{ date('F d, Y - h:i A', strtotime($row->created_at)) }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row pt-4">
                        <div class="col-lg-6 ">
                            <p class="h5 font-weight-bold">Bill From</p>
                            <address>
                                <h5>Asia Enterprises</h5><br>
                                Block 10, Gulistan-e-Johar, Karachi.<br>
                                Email: info@asiaenterprises.org<br>
                                Phone: +923009262041
                            </address>
                        </div>
                        <div class="col-lg-6 text-right">
                            <p class="h5 font-weight-bold">Bill To</p>
                            <address>
                                <h5>{{ $row->customer->name }}</h5><br>
                                Address : {{ $row->customer->address }}<br>
                                Email: {{ $row->customer->email }}<br>
                                Phone: {{ $row->customer->contact }}
                            </address>
                        </div>
                    </div>
                    <div class="table-responsive push">
                        @php
                            $total = 0;
                            $pack = 0;
                            $diff = 0;
                            $packages = explode( '^*' , $row->package_id);
                            $amount = explode( '^*' , $row->amount);
                            foreach ($amount as $key => $am){
                                $id = $packages[$key];
                                $package = \App\Package::findOrFail($id);
                                $pack += $package->amount;

                            }

                             foreach($row->log as $log2){

                              $total += (int)$log2->amount;
                             }

                            $diff = $pack - $total;
                        @endphp
                        <table class="table table-bordered table-hover text-nowrap">
                            <tr class=" ">
                                <th class="text-center " style="width: 1%"></th>
                                <th>Package</th>
                                <th class="text-center" style="width: 1%">Amount</th>
                            </tr>
                            @foreach($packages as $key => $val2)
                                @php
                                    $package = \App\Package::findOrFail($val2);
                                    $dif  = $package->amount - $amount[$key];
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td>
                                        <p class="font-weight-semibold mb-1">{{ $package->title }}</p>
                                    </td>
                                    <td class="text-center">{{ $package->amount }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" class="font-weight-semibold text-right">Sum Amount</td>
                                <td class="text-right">{{ $pack }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="font-weight-semibold text-right">Total Paid</td>
                                <td class="text-right">{{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="font-weight-bold text-uppercase text-right h4 mb-0">Due</td>
                                <td class="font-weight-bold text-right h4 mb-0">{{ $diff }}</td>
                            </tr>
                        </table>
                        <h3>Invoice Log</h3>
                        <table class="table table-bordered table-hover text-nowrap">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Amount</th>
                            </tr>
                            @foreach($row->log as $log)
                                <tr>
                                    <td>{{ $log->date }}</td>
                                    <td>{{ $log->title }}</td>
                                    <td>{{ $log->amount }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                </div>
            </div>
        </div>
    </div>
@endsection


