<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- meta http-equiv="X-UA-Compatible" content="IE=edge" -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="/css/vhc/bootstrap.3.3.7.min.css" rel="stylesheet">
    <link href="/css/vhc/Style.css" rel="stylesheet">
    <link href="/css/vhc/font-awesome.min.css" rel="stylesheet">
    <link href="/css/vhc/callouts.css" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" />
</head>
<body>
<script src="/js/vhc/jquery-bootstrap.js"></script>
<script src="/js/vhc/vue.min.js"></script>

<div class="bodybox">
    <script src="/js/vhc/carousel.js"></script>
    <div class="navbar hidden-xs" style="padding-top: 10pt; padding-bottom: 10px; background-color: #2e3232; color: white; border-bottom:solid 1px #999;">
        <div class="container" style="display: flex;align-items: center; padding: 10px 0 20px;">
            <div class="col-md-3 col-sm-4 hidden-xs">
                <a href="{{ config('app.url') }}/vhc/{{ $vhc->uuid }}">
                    <img src="{{ config('app.url') }}/images/logo-white.svg" height="24" style="margin: 20px 0;" />
                </a>
            </div>
            <div class="col-md-12">
                <h3 class="text-center">{{ config('app.name') }} - Vehicle Health Check</h3>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
            </div>
        </div>
    </div>
    <div class="navbar visible-xs color-black" style="padding-top: 10px; padding-bottom: 10px;">
        <h4 class="text-center">{{ config('app.name') }} - Vehicle Health Check</h3>
    </div>

    <!-- -->
    <style>
        .regplate
        {
            border-radius: 10px;
            border: solid 1px #697FB1;
            box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
            display: inline-block;
            font-size: 3.1em;
            font-family: Helvetica, Verdana, Ariel;
            font-weight: bold;
            height:65px;
            line-height: 60px;
            margin-bottom: -0px;
            min-width: 275px;
            margin-bottom: 10px;
            padding-left: 27px;
            text-align: center;
            vertical-align: baseline;
            background: #FED500 url(/OnlineEVHC/content/Images/GBEuroYellow.png) no-repeat top left;
        }
        .regplate-en-GB{}
        .regplate-en-AU
        {
            background: #EEE;
        }
    </style>
    <div class="container">
        <div class="row">
            @if($vhc->customercar)
            <div class="col-md-4 col-sm-5" style="vertical-align: middle; text-align: center;">
                <div class="regplate regplate-en-GB col-md-12">{{ $vhc->customercar->reg }}</div>
            </div>
            @endif
            <div class="col-md-8 col-sm-7 hidden-xs" style="vertical-align: top;">
                <h2 style="margin-top: 0;">Your Vehicle Health Check</h2>
                @if($vhc->admin)
                    <h4 style="margin-top: 0;">Worked on by {{ $vhc->admin->name }}</h4>
                @endif
            </div>
            <div class="visible-xs" style="text-align: center;">
                <h3 style="margin-top: 0;">Your Vehicle Health Check</h3>
                @if($vhc->admin)
                    <h5 style="margin-top: 0;">Worked on by {{ $vhc->admin->name }}</h5>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-2">
            Report Key:
        </div>
        <div class="col-sm-2">
            <div class="circle color-red"></div>
            Urgent
        </div>
        <div class="col-sm-2">
            <div class="circle color-amber"></div>
            Advisory
        </div>
        <div class="col-sm-2">
            <div class="circle color-green"></div>
            Visually Okay
        </div>
{{--        <div class="col-sm-2">--}}
{{--            <div class="circle color-black"></div>--}}
{{--            Not Checked--}}
{{--        </div>--}}
        <br />
        <br />


        <div class="col-sm-6">
            <table style="width: 100%;" class="table table-condensed table-noborder">

                <thead>
                <tr>
                    <th style="width: 68%;"><br />Lights / Electrics</th>
                    <th style="width: 10%;"><br />Status</th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>

                <tr>
                    <td>Mandatory Lights (External)</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "electrics_checks", "mandatory_lights_external") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "electrics_checks", "mandatory_lights_external") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Horn / wipers / washers</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "electrics_checks", "horn_wipers_washers") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "electrics_checks", "horn_wipers_washers") == "advisory")color-amber @else color-red @endif"></div>

                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Other</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "electrics_checks", "other") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "electrics_checks", "other") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <thead>
                <tr>
                    <th style="width: 68%;"><br />External / Internal</th>
                    <th style="width: 10%;"><br /></th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>


                <tr>
                    <td>Brake noise / feel</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "brake_noise_feel") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "brake_noise_feel") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Clutch / transmission operation</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "clutch_transmission_operation") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "clutch_transmission_operation") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Engine noise / smoke</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "engine_noise_smoke") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "engine_noise_smoke") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Glass / mirrors</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "glass_mirrors") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "glass_mirrors") == "advisory")color-amber @else color-red @endif"></div>
{{--                        <span class="fa fa-check" style="font-size: 1.4em;"></span>--}}
                    </td>
                    <td></td>
{{--                    <td>--}}
{{--                        <a title="Click here to view notes" class="badge" data-toggle="modal" data-target="#modal_32" href="#">--}}
{{--                            <span class="fa fa-info"></span>--}}
{{--                        </a>--}}
{{--                        <div class="modal fade" id="modal_32" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                                        <h4 class="modal-title" id="myModalLabel">Further Information</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        Wiper - Rear  Worn/Split--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
                </tr>


                <tr>
                    <td>Seat belts - security &amp; operation</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "seat_belts_security_operation") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "seat_belts_security_operation") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Other</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "other") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "internal_external_checks", "other") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <thead>
                <tr>
                    <th style="width: 68%;"><br />Underbonnet</th>
                    <th style="width: 10%;"><br /></th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>


                <tr>
                    <td>Fluid levels - oil / water / coolant / screenwash</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "fluid_levels_oil_water_coolant_screenwash") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "fluid_levels_oil_water_coolant_screenwash") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Fluid leaks - oil / water</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "fluid_leaks_oil_water") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "fluid_leaks_oil_water") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Battery condition / drive belts</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "battery_condition_drive_belts") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "battery_condition_drive_belts") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Other</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "other") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underbonnet_checks", "other") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <thead>
                <tr>
                    <th style="width: 68%;"><br />Brakes / Hubs</th>
                    <th style="width: 10%;"><br /></th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>


                <tr>
                    <td>Brake fluid condition / temperature</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "brake_fluid_condition_temperature") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "brake_fluid_condition_temperature") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Master cylinder / servo</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "master_cylinder_servo") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "master_cylinder_servo") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Linings - pads/shoes - Front</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "linings_pads_shoes_front") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "linings_pads_shoes_front") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td></td>
{{--                    <td>--}}
{{--                        <a title="Click here to view notes" class="badge" data-toggle="modal" data-target="#modal_33" href="#">--}}
{{--                            <span class="fa fa-info"></span>--}}
{{--                        </a>--}}
{{--                        <div class="modal fade" id="modal_33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                                        <h4 class="modal-title" id="myModalLabel">Further Information</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        10% Front Pads Approx 10 % Worn--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
                </tr>


                <tr>
                    <td>Discs / drums - Front</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "discs_drums_front") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "discs_drums_front") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Discs / drums - Rear</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "discs_drums_rear") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "discs_drums_rear") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Hoses/pipes/cables/wheel bearings</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "hoses_pipes_cables_wheel_bearings") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "hoses_pipes_cables_wheel_bearings") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Other</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "other") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "other", "") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Linings - pads/shoes - Rear</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "brakes_checks", "linings_pads_shoes_rear") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "brakes_checks", "linings_pads_shoes_rear") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>

            </table></div><div class='col-sm-6'><table style='width: 100%;' class='table table-condensed table-noborder'>
                <thead>
                <tr>
                    <th style="width: 68%;"><br />Underside</th>
                    <th style="width: 10%;"><br />Status</th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>


                <tr>
                    <td>Exhaust system / catalyst</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underside_checks", "exhaust_system_catalyst") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underside_checks", "exhaust_system_catalyst") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Steering / suspension</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underside_checks", "steering_suspension") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underside_checks", "steering_suspension") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Drive shafts / Gaitors</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underside_checks", "drive_shafts_gaitors") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underside_checks", "drive_shafts_gaitors") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Fluid Leaks – Oil/Water</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underside_checks", "oil_leaks") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underside_checks", "oil_leaks") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Other</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "underside_checks", "other") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "underside_checks", "other") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <thead>
                <tr>
                    <th style="width: 68%;"><br />Wheels / Tyres</th>
                    <th style="width: 10%;"><br /></th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>


                <tr>
                    <td>Nearside front</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "tyres_checks", "nearside_front") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "tyres_checks", "nearside_front") == "advisory")color-amber @else color-red @endif"></div>
{{--                        <span class="fa fa-check" style="font-size: 1.4em;"></span>--}}
                    </td>
                <td></td>
{{--                    <td>--}}
{{--                        <a title="Click here to view notes" class="badge" data-toggle="modal" data-target="#modal_34" href="#">--}}
{{--                            <span class="fa fa-info"></span>--}}
{{--                        </a>--}}
{{--                        <div class="modal fade" id="modal_34" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                                        <h4 class="modal-title" id="myModalLabel">Further Information</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        2.0 MM Tyre is Approx 94% Worn / Checked--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
                </tr>


                <tr>
                    <td>Offside front</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "tyres_checks", "offside_front") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "tyres_checks", "offside_front") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td></td>
{{--                    <td>--}}
{{--                        <a title="Click here to view notes" class="badge" data-toggle="modal" data-target="#modal_35" href="#">--}}
{{--                            <span class="fa fa-info"></span>--}}
{{--                        </a>--}}
{{--                        <div class="modal fade" id="modal_35" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                                        <h4 class="modal-title" id="myModalLabel">Further Information</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        6.0 MM Tyre is Approx 31% Worn / Checked--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
                </tr>


                <tr>
                    <td>Nearside rear</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "tyres_checks", "nearside_rear") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "tyres_checks", "nearside_rear") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>

                    <td>Offside rear</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "tyres_checks", "offside_rear") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "tyres_checks", "offside_rear") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <tr>
                    <td>Spare</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "tyres_checks", "spare") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "tyres_checks", "spare") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>


                <thead>
                <tr>
                    <th style="width: 68%;"><br />Other Items</th>
                    <th style="width: 10%;"><br /></th>
                    <th style="width: 5%;">&nbsp;</th>
                </tr>
                </thead>


                <tr>
                    <td>Other</td>
                    <td>
                        <div class="circle @if(\App\VHC::getCheckStatus($vhc, "other_checks", "") == "normal")color-green @elseif(\App\VHC::getCheckStatus($vhc, "other_checks", "") == "advisory")color-amber @else color-red @endif"></div>
                    </td>
                    <td>
                    </td>
                </tr>

            </table>
            <br />
            <a class="btn btn-block btn-green" href="/vhc/{{ $vhc->uuid }}" style="font-weight: bold;">Return to work selection screen</a>
        </div>
    </div>

</div>
<div class="footer">
    <a href="{{ config('app.url') }}">back to Home</a>
</div>
</body>
</html>
