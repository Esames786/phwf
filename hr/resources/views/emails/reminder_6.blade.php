@extends('layouts.email')

@section('template_title')
    Reminder
@endsection

@section('content')

    <tr>
        <td valign="top" align="center">
            <table width="600" bgcolor="#ffffff" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                <tbody>
                <tr>
                    <td valign="top" bgcolor="#ffffff" align="center">

                        <!-- Start Space -->
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width">
                            <tbody>
                            <tr>
                                <td height="26">&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Space -->

                        <!-- Section 1 Starts / Logo & Menu -->
                        <table align="center" cellspacing="0" cellpadding="0" border="0" class="content-width-menu">
                            <tbody>
                            <tr>
                                <td height="25" valign="middle">

                                    <!-- Start Logo -->
                                    <table align="center" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                        <tbody>
                                        <tr>
                                            <td height="30" valign="middle" align="left" class="center-stack"  style="font-family: Open Sans, sans-serif;font-size: 18px;font-weight:bold;" ><a href="#" style="color: #1E9FF2;"><span style="font-size: 35px;font-weight:bold;font-family: 'Lato', sans-serif;">All State To State Auto Transport</span></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Logo -->
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- Section 1 Ends / Logo & Menu -->

                        <!-- Start Space -->
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width">
                            <tbody>
                            <tr>
                                <td height="25">&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Space -->

                        <!-- After Menu Start -->
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                            <tbody>
                            <tr>
                                <td align="center">

                                @if($id == 1)
                                    @if($order->vtype == 1 || $order->vtype == '')
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/veh.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @elseif($order->vtype == 2)
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/moto.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @elseif($order->vtype == 3)
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/heavy-equipment.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @endif
                                @elseif($id == 2)
                                    @if($order->stype == 1 || $order->stype == '')
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/veh.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @elseif($order->stype == 2)
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/moto.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @elseif($order->stype == 3)
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/heavy-equipment.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @endif
                                @elseif($id == 3)
                                    @if($order->htype == 1 || $order->htype == '')
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/veh.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @else
                                        <!-- Section 2 Start / Start Block Content -->
                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="{{ url('images/email/heavy-equipment.jpg') }}" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                <tbody>
                                                <!--<tr style="background: #00000085;">-->
                                                <!--<td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center">HEAVY EQUIPMENT</td>-->
                                                <!--</tr>-->
                                                <!--<tr>-->
                                                <!--<td class="front" height="150" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td class="front" height="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="front" height="50">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 2 End / End Block Content -->
                                    @endif
                                @endif

                                <!-- Section 3 Start -->
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                        <tbody>
                                        <tr>
                                            <td align="center">
                                                <!-- Left Part Start -->
                                                <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                    <tbody>
                                                    <tr>
                                                        <td align="center">

                                                            <!-- Start Block Content -->
                                                            <table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                                <tbody>
                                                                <tr>
                                                                    <td valign="top" align="center">

                                                                        <!-- Start Column 1 -->
                                                                        <table align="left" cellspacing="0" cellpadding="0" border="0" class="midaling">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td style=" mso-line-height-rule:exactly; line-height:50px; height:50px">&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="left" style="font-size:15px; mso-line-height-rule:exactly; line-height:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">HELLO {{ strtoupper($order->cname) }}!</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height="30" align="left"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                            </tr>
                                                                            @if($id == 1)
                                                                                @if($order->vtype != 3)
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            Whether you are still looking around for reliable auto transport, or your
                                                                                            <strong style="color: #000">
                                                                                                @if($order->vtype == 1 || $order->vtype == '')
                                                                                                    @if($order->vyear)
                                                                                                        {{ $order->vyear }} {{ $order->vmake }} {{ $order->vmodel }}
                                                                                                    @else
                                                                                                        {{ $order->vmake }} {{ $order->vmodel }}
                                                                                                    @endif
                                                                                                @else
                                                                                                    {{ $order->heading }}
                                                                                                @endif
                                                                                            </strong>
                                                                                             is almost ready to be picked up from <strong style="color: #000">{{ $order->ocity }}, {{ $order->ostate }} {{ $order->ozip }}</strong>, we’ve got some final tips for you.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            We have already shared with you some important tips on the path to choosing your provider and setting up your order. Here are some great last minute tips to remember when your vehicle is being picked up:
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left">
                                                                                            <table class="table">
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <ol>
                                                                                                            <li style="height: 150px;font-size: 13px;text-align: justify">
                                                                                                                Prepare your car for shipping.
                                                                                                                <div style="height: 10px"></div>
                                                                                                                <ul>
                                                                                                                    <li style="height: 40px">Leave about ¼ of a tank with fuel if possible</li>
                                                                                                                    <li style="height: 40px">Take pictures from all sides and keep them for your records. Timestamps on the pictures are always good</li>
                                                                                                                    <li style="height: 40px">If you plan to put personal belongings in the car make sure your transport specialist is aware of them. Don’t put anything valuable, fragile or illegal</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                            <li style="height: 100px;font-size: 13px;text-align: justify">
                                                                                                                Make sure you get your paperwork.
                                                                                                                <div style="height: 10px"></div>
                                                                                                                <p style="line-height: 17px;">
                                                                                                                    When the trucker shows up to pick up the vehicle, make sure that he performs a detailed inspection to note the condition of your vehicle before transport, and make sure you get a signed copy on the inspections sheet (Bill of Lading) at the pickup and delivery.
                                                                                                                </p>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            Still need your vehicle shipped? Give us a call or continue online.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                                    </tr>
                                                                                @else
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">Thank you for your interest in using
                                                                                            <strong style="color: #000">All State To State Auto Transport.</strong>
                                                                                            Shipping quote <strong style="color: #000">#{{ $order->id }}</strong> to transport your
                                                                                            <strong style="color: #000">
                                                                                                {{ $order->heading }}
                                                                                            </strong> from
                                                                                            <strong style="color: #000">{{ $order->ocity }}, {{ $order->ostate }} {{ $order->ozip }}</strong> to
                                                                                            <strong style="color: #000">{{ $order->dcity }}, {{ $order->dstate }} {{ $order->dzip }}</strong> of
                                                                                            <strong style="color: #000">${{ $order->payment }}</strong>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            In order to prepare a unique estimate for you,
                                                                                            <strong style="color: #000">we gladly welcome you to talk to one of our Shipping specialists to discuss all the steps needed for a smooth shipping experience</strong>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-size:15px; mso-line-height-rule:exactly; line-height:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">For a faster service please reference Order #{{ $order->id }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center">
                                                                                            <h3>
                                                                                                <strong style="color: #000">OR</strong>
                                                                                            </h3>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @elseif($id == 2)
                                                                                @if($order->stype != 3)
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            Whether you are still looking around for reliable auto transport, or your
                                                                                            <strong style="color: #000">
                                                                                                @if($order->stype == 1 || $order->stype == "")
                                                                                                    @if(strpos($order->vmake, '^*-') !== false)
                                                                                                        <?php
                                                                                                        $make = explode('^*-',$order->vmake);
                                                                                                        $model = explode('^*-',$order->vmodel);
                                                                                                        $i = 0;
                                                                                                        $len = count($make);
                                                                                                        $heading = "";
                                                                                                        foreach($make as $key => $m) {
                                                                                                            if (++$i == $len) {
                                                                                                                $heading .= $m .' '. $model[$key];
                                                                                                            } else {
                                                                                                                $heading .= $m .' '. $model[$key] . '^*-';
                                                                                                            }

                                                                                                        }
                                                                                                        ?>
                                                                                                    @else
                                                                                                        <?php
                                                                                                        $heading = $order->vmake . ' ' . $order->vmodel;
                                                                                                        ?>
                                                                                                    @endif
                                                                                                    {{ Common::getMultiDataWOTooltipMail($heading) }}
                                                                                                @else
                                                                                                    {{ Common::getMultiDataWOTooltipMail($order->heading) }}
                                                                                                @endif
                                                                                            </strong>
                                                                                             is almost ready to be picked up from <strong style="color: #000">{{ $order->ocity }}, {{ $order->ostate }} {{ $order->ozip }}</strong>, we’ve got some final tips for you.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            We have already shared with you some important tips on the path to choosing your provider and setting up your order. Here are some great last minute tips to remember when your vehicle is being picked up:
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left">
                                                                                            <table class="table">
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <ol>
                                                                                                            <li style="height: 150px;font-size: 13px;text-align: justify">
                                                                                                                Prepare your car for shipping.
                                                                                                                <div style="height: 10px"></div>
                                                                                                                <ul>
                                                                                                                    <li style="height: 40px">Leave about ¼ of a tank with fuel if possible</li>
                                                                                                                    <li style="height: 40px">Take pictures from all sides and keep them for your records. Timestamps on the pictures are always good</li>
                                                                                                                    <li style="height: 40px">If you plan to put personal belongings in the car make sure your transport specialist is aware of them. Don’t put anything valuable, fragile or illegal</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                            <li style="height: 100px;font-size: 13px;text-align: justify">
                                                                                                                Make sure you get your paperwork.
                                                                                                                <div style="height: 10px"></div>
                                                                                                                <p style="line-height: 17px;">
                                                                                                                    When the trucker shows up to pick up the vehicle, make sure that he performs a detailed inspection to note the condition of your vehicle before transport, and make sure you get a signed copy on the inspections sheet (Bill of Lading) at the pickup and delivery.
                                                                                                                </p>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            Still need your vehicle shipped? Give us a call or continue online.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                                    </tr>
                                                                                @else
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">Thank you for your interest in using
                                                                                            <strong style="color: #000">All State To State Auto Transport.</strong>
                                                                                            Shipping quote <strong style="color: #000">#{{ $order->id }}</strong> to transport your
                                                                                            <strong style="color: #000">
                                                                                                @if($order->stype == 1 || $order->stype == "")
                                                                                                    @if(strpos($order->vmake, '^*-') !== false)
                                                                                                        <?php
                                                                                                        $make = explode('^*-',$order->vmake);
                                                                                                        $model = explode('^*-',$order->vmodel);
                                                                                                        $i = 0;
                                                                                                        $len = count($make);
                                                                                                        $heading = "";
                                                                                                        foreach($make as $key => $m) {
                                                                                                            if (++$i == $len) {
                                                                                                                $heading .= $m .' '. $model[$key];
                                                                                                            } else {
                                                                                                                $heading .= $m .' '. $model[$key] . '^*-';
                                                                                                            }

                                                                                                        }
                                                                                                        ?>
                                                                                                    @else
                                                                                                        <?php
                                                                                                        $heading = $order->vmake . ' ' . $order->vmodel;
                                                                                                        ?>
                                                                                                    @endif
                                                                                                    {{ Common::getMultiDataWOTooltipMail($heading) }}
                                                                                                @else
                                                                                                    {{ Common::getMultiDataWOTooltipMail($order->heading) }}
                                                                                                @endif
                                                                                            </strong> from
                                                                                            <strong style="color: #000">{{ $order->ocity }}, {{ $order->ostate }} {{ $order->ozip }}</strong> to
                                                                                            <strong style="color: #000">{{ $order->dcity }}, {{ $order->dstate }} {{ $order->dzip }}</strong> of
                                                                                            <strong style="color: #000">${{ $order->payment }}</strong>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            In order to prepare a unique estimate for you,
                                                                                            <strong style="color: #000">we gladly welcome you to talk to one of our Shipping specialists to discuss all the steps needed for a smooth shipping experience</strong>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-size:15px; mso-line-height-rule:exactly; line-height:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">For a faster service please reference Order #{{ $order->id }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center">
                                                                                            <h3>
                                                                                                <strong style="color: #000">OR</strong>
                                                                                            </h3>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @elseif($id == 3)
                                                                                @if($order->htype == 1 || $order->htype == "")
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            Whether you are still looking around for reliable auto transport, or your
                                                                                            <strong style="color: #000">
                                                                                                @if($order->htype == 1 || $order->htype == "")
                                                                                                    @if(strpos($order->vmake, '^*-') !== false)
                                                                                                        <?php
                                                                                                        $make = explode('^*-',$order->vmake);
                                                                                                        $model = explode('^*-',$order->vmodel);
                                                                                                        $i = 0;
                                                                                                        $len = count($make);
                                                                                                        $heading = "";
                                                                                                        foreach($make as $key => $m) {
                                                                                                            if (++$i == $len) {
                                                                                                                $heading .= $m .' '. $model[$key];
                                                                                                            } else {
                                                                                                                $heading .= $m .' '. $model[$key] . '^*-';
                                                                                                            }

                                                                                                        }
                                                                                                        ?>
                                                                                                    @else
                                                                                                        <?php
                                                                                                        $heading = $order->vmake . ' ' . $order->vmodel;
                                                                                                        ?>
                                                                                                    @endif
                                                                                                    {{ Common::getMultiDataWOTooltipMail($heading) }}
                                                                                                @else
                                                                                                    {{ Common::getMultiDataWOTooltipMail($order->heading) }}
                                                                                                @endif
                                                                                            </strong>
                                                                                             is almost ready to be picked up from <strong style="color: #000">{{ $order->ocity }}, {{ $order->ostate }} {{ $order->ozip }}</strong>, we’ve got some final tips for you.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            We have already shared with you some important tips on the path to choosing your provider and setting up your order. Here are some great last minute tips to remember when your vehicle is being picked up:
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left">
                                                                                            <table class="table">
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <ol>
                                                                                                            <li style="height: 150px;font-size: 13px;text-align: justify">
                                                                                                                Prepare your car for shipping.
                                                                                                                <div style="height: 10px"></div>
                                                                                                                <ul>
                                                                                                                    <li style="height: 40px">Leave about ¼ of a tank with fuel if possible</li>
                                                                                                                    <li style="height: 40px">Take pictures from all sides and keep them for your records. Timestamps on the pictures are always good</li>
                                                                                                                    <li style="height: 40px">If you plan to put personal belongings in the car make sure your transport specialist is aware of them. Don’t put anything valuable, fragile or illegal</li>
                                                                                                                </ul>
                                                                                                            </li>
                                                                                                            <li style="height: 100px;font-size: 13px;text-align: justify">
                                                                                                                Make sure you get your paperwork.
                                                                                                                <div style="height: 10px"></div>
                                                                                                                <p style="line-height: 17px;">
                                                                                                                    When the trucker shows up to pick up the vehicle, make sure that he performs a detailed inspection to note the condition of your vehicle before transport, and make sure you get a signed copy on the inspections sheet (Bill of Lading) at the pickup and delivery.
                                                                                                                </p>
                                                                                                            </li>
                                                                                                        </ol>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="15">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            Still need your vehicle shipped? Give us a call or continue online.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center"><img src="{{ url('images/email/green_line.jpg') }}" /></td>
                                                                                    </tr>
                                                                                @else
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">Thank you for your interest in using
                                                                                            <strong style="color: #000">All State To State Auto Transport.</strong>
                                                                                            Shipping quote <strong style="color: #000">#{{ $order->id }}</strong> to transport your
                                                                                            <strong style="color: #000">
                                                                                                @if($order->htype == 1 || $order->htype == "")
                                                                                                    @if(strpos($order->vmake, '^*-') !== false)
                                                                                                        <?php
                                                                                                        $make = explode('^*-',$order->vmake);
                                                                                                        $model = explode('^*-',$order->vmodel);
                                                                                                        $i = 0;
                                                                                                        $len = count($make);
                                                                                                        $heading = "";
                                                                                                        foreach($make as $key => $m) {
                                                                                                            if (++$i == $len) {
                                                                                                                $heading .= $m .' '. $model[$key];
                                                                                                            } else {
                                                                                                                $heading .= $m .' '. $model[$key] . '^*-';
                                                                                                            }

                                                                                                        }
                                                                                                        ?>
                                                                                                    @else
                                                                                                        <?php
                                                                                                        $heading = $order->vmake . ' ' . $order->vmodel;
                                                                                                        ?>
                                                                                                    @endif
                                                                                                    {{ Common::getMultiDataWOTooltipMail($heading) }}
                                                                                                @else
                                                                                                    {{ Common::getMultiDataWOTooltipMail($order->heading) }}
                                                                                                @endif
                                                                                            </strong> from
                                                                                            <strong style="color: #000">{{ $order->ocity }}, {{ $order->ostate }} {{ $order->ozip }}</strong> to
                                                                                            <strong style="color: #000">{{ $order->dcity }}, {{ $order->dstate }} {{ $order->dzip }}</strong> of
                                                                                            <strong style="color: #000">${{ $order->payment }}</strong>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-size:13px; line-height: 20px; mso-line-height-rule:exactly; color:#414848; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">
                                                                                            In order to prepare a unique estimate for you,
                                                                                            <strong style="color: #000">we gladly welcome you to talk to one of our Shipping specialists to discuss all the steps needed for a smooth shipping experience</strong>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="32" style="font-size:32px; mso-line-height-rule:exactly; line-height:32px;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-size:15px; mso-line-height-rule:exactly; line-height:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">For a faster service please reference Order #{{ $order->id }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="30" align="center">
                                                                                            <h3>
                                                                                                <strong style="color: #000">OR</strong>
                                                                                            </h3>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endif

                                                                            <tr>
                                                                                <td>
                                                                                    <table align="center" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            @if($id == 1)
                                                                                                <td style="border:#1E9FF2 solid 1px; border-radius:4px; color:#1E9FF2; display:block; font-family: Open Sans, sans-serif; font-size:12px; font-weight:bold; mso-line-height-rule:exactly; line-height:12px; text-align:center; text-decoration:none; padding-top: 10px; padding-bottom: 10px; width:200px; -webkit-text-size-adjust:none;"><a style="color:#1E9FF2;font-family: Open Sans, sans-serif; font-size:13px; font-weight:800;" href="{{ url('order/'.base64_encode($order->id)) }}">COMPLETE BOOKING</a></td>
                                                                                            @elseif($id == 2)
                                                                                                <td style="border:#1E9FF2 solid 1px; border-radius:4px; color:#1E9FF2; display:block; font-family: Open Sans, sans-serif; font-size:12px; font-weight:bold; mso-line-height-rule:exactly; line-height:12px; text-align:center; text-decoration:none; padding-top: 10px; padding-bottom: 10px; width:200px; -webkit-text-size-adjust:none;"><a style="color:#1E9FF2;font-family: Open Sans, sans-serif; font-size:13px; font-weight:800;" href="{{ url('ship/order/'.base64_encode($order->id)) }}">COMPLETE BOOKING</a></td>
                                                                                            @elseif($id == 3)
                                                                                                <td style="border:#1E9FF2 solid 1px; border-radius:4px; color:#1E9FF2; display:block; font-family: Open Sans, sans-serif; font-size:12px; font-weight:bold; mso-line-height-rule:exactly; line-height:12px; text-align:center; text-decoration:none; padding-top: 10px; padding-bottom: 10px; width:200px; -webkit-text-size-adjust:none;"><a style="color:#1E9FF2;font-family: Open Sans, sans-serif; font-size:13px; font-weight:800;" href="{{ url('heavy/order/'.base64_encode($order->id)) }}">COMPLETE BOOKING</a></td>
                                                                                            @endif
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height="50">&nbsp;</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <!-- End Column 1 -->

                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- Section 3 End -->

                                    <!-- Section 4 Start -->

                                    <!-- Section 6 Start -->
                                @include('partials.email.footer')
                                <!-- Section 6 End -->
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Space -->
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

@endsection