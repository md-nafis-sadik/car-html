
<!DOCTYPE html>
<html lang="en_GB">
<head>
    <meta charset="utf-8">
    <!-- meta http-equiv="X-UA-Compatible" content="IE=edge" -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if($vhc->car)
        <title>Vehicle Health Check ({{ $vhc->car->reg }}) - {{ config('app.name') }}</title>
    @else
        <title>Vehicle Health Check - {{ config('app.name') }}</title>
    @endif
    <link href="/css/vhc/bootstrap.3.3.7.min.css" rel="stylesheet">
    <link href="/css/vhc/Style.css" rel="stylesheet">
    <link href="/css/vhc/font-awesome.min.css" rel="stylesheet">
    <link href="/css/vhc/callouts.css" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" />
</head>
<body>
<script src="/js/vhc/jquery-bootstrap.js"></script>
<script src="/js/vhc/vue.min.js"></script>
<!-- Stripe -->
<script src="https://js.stripe.com/v3/"></script>
<div class="bodybox">

    <!-- -->
    <div class="navbar hidden-xs" style="padding-top: 10pt; padding-bottom: 10px; background-color: #2e3232; color: white; border-bottom:solid 1px #999;">
        <div class="container" style="display: flex;align-items: center; padding: 0 0 10px;">
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
    <div class="navbar visible-xs" style="padding-top: 10px; padding-bottom: 10px; background-color: #2e3232;">
        <h4 class="text-center">{{ config('app.name') }} - Vehicle Health Check</h4>
    </div>

    <!-- -->
    <style>
        .regplate
        {
            border-radius: 10px;
            border: solid 1px #697FB1;
            /*box-shadow: 3px 3px 3px rgba(0,0,0,0.5);*/
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
            background: #FED500 url(/images/vhc/GBEuroYellow.png) no-repeat top left;
        }
        .regplate-en-GB{}
        .regplate-en-AU
        {
            background: #EEE;
        }
    </style>

    <div class="container">
        <div class="row">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <div class="col-md-12">
                        <div class="flash-message margin-bottom-10">
                            <b><p class="alert alert-{{ $msg }}">{!! Session::get('alert-' . $msg) !!}</p></b>
                        </div>
                        <br class="clear" />
                    </div>
                @endif
            @endforeach
            <div class="col-md-4 col-sm-5" style="vertical-align: middle; text-align: center;">
                @if($vhc->customercar)
                <div class="regplate regplate-en-GB col-md-12">{{ $vhc->customercar->reg }}</div>
                @endif
            </div>
            <div class="col-md-8 col-sm-7 hidden-xs" style="vertical-align: top;">
                <h2 style="margin-top: 0;">Your Vehicle Health Check</h2>
                @if($vhc->admin)
                <h4>{{ \App\VHC::mapStatusText($vhc->status) }}</h4>
                @endif

            </div>
            <div class="visible-xs" style="text-align: center;">
                <h3 style="margin-top: 0;">Your Vehicle Health Check</h3>
                @if($vhc->admin)
                    <h5>{{ \App\VHC::mapStatusText($vhc->status) }}</h5>
{{--                    <h5>Worked on by {{ $vhc->admin->name }} | {{ \App\VHC::mapStatusText($vhc->status) }}</h5>--}}
                @endif
            </div>
        </div>
    </div>
    <script src="/js/vhc/carousel.js"></script>
{{--    <form action="/Save" method="post" onsubmit="return validateForm()">--}}
{{--        <div id="cancun">--}}
{{--            <input id="UID" name="UID" type="hidden" value="AE5752A9-75E5-400E-AE31-E9BD972E4B59" />--}}
{{--            <input id="regno" name="regno" type="hidden" value="{{ $vhc->car->reg }}" />--}}
{{--            <input id="dealer" name="dealer" type="hidden" value="TLRM - Taggarts Land Rover Motherwell" />--}}
{{--            <input id="sitename" name="sitename" type="hidden" value="Lookers" />--}}
{{--            <input id="mode" name="mode" type="hidden" value="" />--}}
{{--            <input id="emailorsms" name="emailorsms" type="hidden" value="email" />--}}
{{--            <input id="financeorderid" name="financeorderid" type="hidden" value="1047-4246003-214926" />--}}
{{--            <input type="hidden" :value="ASF.PayNowClicked" name="ispaynow" />--}}
{{--            <input type="hidden" :value="grandTotal" name="grandtotalpost" />--}}
            <div class="container">
                <div class="row">
                    <!-- Left Bar -->
                    <section class="col-md-4 col-sm-5">



                        @if($vhc->media_attachments)
                        <!-- Carousel -->
                        <div id="carousel-small" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($vhc->media_attachments as $attachment)
                                    <li data-target="#carousel-small" data-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif"></li>
                                @endforeach
                            </ol>
                            <!-- End Indicators -->
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="height: 240px;">
                            @foreach($vhc->media_attachments as $attachment)
                                <div class="item @if($loop->first) active @endif" data-index="{{ $loop->index }}" data-itemid="{{ $loop->index }}" onclick="modalise(this);">
                                        @if(\App\VHC::getFileType($attachment) == "video/mp4")

                                        <div style="text-align: center; position: relative; display: block;">
                                        <span class="fa fa-film fa-2x" style="position: absolute; z-index: 2; top: 0; left: 0; width: 100%; margin-top: 100px; color: white;"></span>
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 240px; background-color: rgba(0,0,0,0.3); height: 240px; z-index: 1;"></div>

                                        <video style="width: 100%; position: absolute; z-index: 0; left: 0;">
                                            <source src="{{ \App\VHC::getFileURL($attachment) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                        @else
                                            <img src="{{ \App\VHC::getFileURL($attachment) }}" />
                                        @endif
                                </div>
                                @endforeach
                            </div>
                            <!-- End Wrapper for slides -->
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-small" data-slide="prev" style="z-index: 3;">
                                <span class="fa fa-chevron-left fa-2x" style="position: absolute; top: 40%; left: 7%;"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-small" data-slide="next" style="z-index: 3;">
                                <span class="fa fa-chevron-right fa-2x" style="position: absolute; top: 40%;"></span>
                            </a>
                            <!-- End Controls -->
                        </div>
                        <!-- End Carousel -->

                            <!-- Modal -->
                            <div class="modal fade" id="mdlCarousel" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true" style="background-color: rgba(0,0,0,0.8);">
                                <div class="modal-dialog" style="width: 100%; max-height: 100%;">
                                    <div id="carousel-large" class="carousel slide" style="background-color: black; max-width: 850px; margin: 0 auto; border: dashed 1px transparent; width: 100%; max-height: 100%;">
                                        <button type="button" class="close" style="position: absolute; color: #428BCA; opacity: 0.8; font-size: 4em; z-index: 100; left: calc(100% - 40px);" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            @foreach($vhc->media_attachments as $attachment)
                                                <li data-target="#carousel-small" data-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif"></li>
                                            @endforeach
                                        </ol>
                                        <!-- End Indicators -->
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" style="height: 100%; background-color: none; width: 100%; margin: 0 auto;">
                                            @foreach($vhc->media_attachments as $attachment)
                                                    @if(\App\VHC::getFileType($attachment) == "video/mp4")
                                                    <div class="item @if($loop->first) active @endif" data-index="{{ $loop->index }}" data-itemid="{{ $loop->index }}" data-special-role="carousel-large-video">
                                                        <div style="text-align: center;">
                                                            <video style="width: 100%; max-height: 100%;" controls>
                                                                <source src="{{ \App\VHC::getFileURL($attachment) }}" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </div>
                                                    </div>

                                                @else
                                                    <div class="item @if($loop->first) active @endif" data-index="{{ $loop->index }}" data-itemid="{{ $loop->index }}" data-special-role="carousel-large-photo">

                                                    <img src="{{ \App\VHC::getFileURL($attachment) }}" />
                                                    </div>

                                                @endif
                                            @endforeach

                                        </div>
                                        <!-- End Wrapper for slides -->
                                        <!-- Controls -->
                                        <a class="left xcarousel-control" href="#carousel-large" data-slide="prev">
                                            <span class="fa fa-chevron-left fa-4x" style="position: absolute; top: calc(50% - 10px); left: 5px;"></span>
                                        </a>
                                        <a class="right xcarousel-control" href="#carousel-large" data-slide="next">
                                            <span class="fa fa-chevron-right fa-4x" style="position: absolute; top: calc(50% - 10px); left: calc(100% - 38px);"></span>
                                        </a>
                                        <!-- End Controls -->
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('.carousel').carousel();
                                    var vids = document.getElementsByTagName("video");
                                    var vidStatus = 0;
                                    for (var i = 0; i < vids.length; i++) {
                                        if (vids[i].children.length > 1) {
                                            vids[i].addEventListener('ended', function (e) {
                                                if (vidStatus == 0 && e.target.children.length > 1) {
                                                    e.target.src = e.target.children[1].src;
                                                    vidStatus = 1;
                                                    e.target.play();
                                                }
                                                else if (vidStatus == 1 && e.target.children.length > 2) {
                                                    e.target.src = e.target.children[2].src;
                                                    vidStatus = 2;
                                                    e.target.play();

                                                }
                                                else {
                                                    e.target.src = e.target.children[0].src;
                                                    vidStatus = 0;
                                                }
                                            });
                                        }
                                    }
                                });

                                //$("#mdlCarousel").modal("show");
                                //$("#carousel-large").carousel("pause");

                                function modalise(item) {
                                    var onthis = $(item).data("index");
                                    onthis = parseInt(onthis);
                                    if (!isNaN(onthis)) {
                                        if (onthis > 0) onthis--;
                                        $("#carousel-large").carousel(onthis);
                                    }
                                    $("#mdlCarousel").modal("show");
                                    $("#carousel-small").carousel("pause");
                                    $("#carousel-large").carousel("pause");
                                }
                                function popCarousel(itemId, type) {
                                    var thingies = $("div[data-itemid='" + itemId + "'][data-special-role='carousel-large-" + type + "']");
                                    if (thingies != null) {
                                        if (thingies.length >= 0) {
                                            var idx = $(thingies[0]).data("index");
                                            idx = parseInt(idx);
                                            if (!isNaN(idx)) {
                                                if (idx > 0) idx--;
                                                // alert("itemId=" + itemId + ", type=" + type + ", index=" + idx);
                                                $("#carousel-large").carousel(idx);
                                            }
                                            $("#mdlCarousel").modal("show");
                                            $("#carousel-small").carousel("pause");
                                            $("#carousel-large").carousel("pause");
                                        }
                                    }
                                    return false;
                                }
                            </script>

                            @endif
                        <br />

                            <div class="well hidden-xs text-center">
                                @if($vhc->status == "ready_for_collection" || $vhc->status == "work_approved" || $vhc->status == "work_declined")
                                    <b><p>Billing Total (Work Approved):</p></b>
                                    <b><h4 style="margin-bottom: 0;">£{{ number_format($vhc->billing_total, 2) }}</h4></b>
                                    @if($vhc->billing_discount)
                                        <br>
                                        <b><p>Includes Discount:</p></b>
                                        <b><h4 style="margin-bottom: 0;">£{{ number_format($vhc->billing_discount, 2) }}</h4></b>                                    @endif
                                @else
{{--                                    @if($vhc->user->account_type == "company")--}}
{{--                                        <p><b>Selected Work Cost: </b></p>--}}
{{--                                        <b><h4 style="margin-bottom: 0;" id="selectedWorkTotal" name="selectedWorkTotal">£0.00</h4></b><br>--}}

{{--                                        <b>Discount: <span id="selectedWorkDiscountPercentage" name="selectedWorkDiscountPercentage"></span>--}}
{{--                                        <h4 style="margin-bottom: 0;" id="selectedWorkDiscount" name="selectedWorkDiscount">£0.00</h4></b>--}}
{{--                                    @else--}}
                                        <p><b>Selected Work Cost: </b></p>
                                        <b><h4 style="margin-bottom: 0;" id="selectedWorkTotal" name="selectedWorkTotal">£0.00</h4></b><br>
{{--                                    @endif--}}
                                @endif
                            </div>

                        <div class="well hidden-xs">
                            @if($vhc->status == "ready_for_collection" || $vhc->status == "work_approved" || $vhc->status == "work_declined")

                                @else
{{--                            <p>--}}
{{--                                <button type="button" class="btn btn-block btn-primary" style="font-weight: bold;" data-target="#mdlCallBack" data-toggle="modal">I would like a call back</button>--}}
{{--                            </p>--}}
                            <button class="btn btn-block btn-success" href="#" style="font-weight: bold;" disabled="disabled" id="payByCardBtn" name="payByCardBtn" data-target="#mdlCardPayment" data-toggle="modal">Pay by Card</button>
                            <button class="btn btn-block btn-success" href="#" style="font-weight: bold;" disabled="disabled" id="payByPABtn" name="payByPABtn"data-target="#mdlPaymentAssistPayment" data-toggle="modal">Spread The Cost</a>
                            <button class="btn btn-block btn-danger" href="#" style="font-weight: bold; display: block;" id="collectVehicleBtn" name="collectVehicleBtn" data-target="#mdlCollectVehicle" data-toggle="modal">Collect Vehicle</button>
                            <button class="btn btn-block btn-primary" href="#" style="font-weight: bold; display: none;" id="payAtStoreBtn" name="payAtStoreBtn" data-target="#mdlPayAtStore" data-toggle="modal">Pay at Store</button>
                            @endif
                            <a class="btn btn-block btn-primary" href="/vhc/{{ $vhc->uuid }}/report" style="font-weight: bold;">View complete report</a>
                        </div>
                        @if($vhc->admin)
                            <div class="well well-white" style="border: 2px solid #2e3232 !important;">
                                <div class="row display-flex">
                                    @if($vhc->admin->avatar)
                                    <div class="col-md-4">
                                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($vhc->admin->avatar) }}" alt="Avatar" class="avatar">
                                    </div>
                                    @endif
                                    <div class="col-md-6 text-left">
                                        <h4 class="text-red">Your Technician</h4>
                                        <h5 class="text-black">
                                           {{ $vhc->admin->name }}
                                        </h5>
                                    </div>
                                </div>
                        </div>
                        @endif

                        <div class="well hidden-xs">
                            <h4>Contact Us</h4>
                            <p>
                                <a href="tel:0141 237 5050" style="text-align:left; padding-left: 10px;">
                                    <i class="fa fa-phone" style="font-size: 1.3em; vertical-align: top;"></i>
                                    <span style="font-size: 11pt;">0141 237 5050</span>
                                </a>
                            </p>
                            <p>
                                <a href="mailto:enquiries@autofusionrepairs.co.uk" style="text-align:left; padding-left: 10px;">
                                    <i class="fa fa-envelope" style="font-size: 1.2em; vertical-align: top;"></i>
                                    <span style="font-size: 10pt;">enquiries@autofusionrepairs.co.uk</span>
                                </a>
                            </p>
                        </div>
                    </section>
                    <!-- End Left Bar -->
                    <section class="col-md-8 col-sm-7">
                    @if($vhc->media_attachments)

                        <!-- 360 Media-->
                        <div class="panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    360 Media
                                    <span class="pull-right">

                                                <a href="javascript: return false;" onclick="popCarousel('0','video');"><span class="fa fa-film" style="color: white ; font-size: 1.3em; padding-top: 2px;"></span></a>

                                                                            </span>
                                </h3>
                            </div>
                        </div>
                        <br />
                        <!-- ...360 Media-->
                    @endif
                        <!-- Red - Urgent -->

                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Red - Urgent</h3>
                            </div>
                            <div class="panel-body" style="position: relative;">
                                @if((count(array_filter(\App\VHC::getAllAdvisories($vhc, "urgent"))) > 0))
{{--                                    {{ json_encode(\App\VHC::getAllAdvisories($vhc, "urgent")) }}--}}
                                <p>The following items have been identified as requiring urgent attention and can be viewed by clicking on the icon.  Please select the items for approval.</p>
                                @else
                                    <div class="media">
                                        <div class="media-body pull-left">
                                            <h2>Great News!</h2>
                                            <p>We have not identified any Red – Urgent work for your vehicle.</p>
                                            <p><a href="/vhc/{{ $vhc->uuid }}/report">Click here</a> for your full report.</p>
                                        </div>
                                        <img src="/images/vhc/smiley-large.png" class="media-object pull-right">
                                    </div>
                                @endif
                                    <div class="row">
                                    <div class="col-md-10" style="padding-left: 0px;">
                                        <table class="table table-condensed table-noborder">
{{--                                            {{ json_encode(\App\VHC::getAllAdvisories($vhc, "urgent")) }}--}}

                                            @if(\App\VHC::getAllAdvisories($vhc, "urgent"))
                                                @foreach(\App\VHC::getAllAdvisories($vhc, "urgent") as $key => $advisoryCategory)
                                                    @if(!empty($advisoryCategory))

                                                        <tr>
                                                            <th style="vertical-align: top;" colSpan="2">
                                                                <br />{{ \App\VHC::mapCheckTypeText($key) }}
                                                            </th>
                                                            <th style="vertical-align: top; width: 70px; text-align: right;"><br /> Price</th>
                                                            <th style=""></th>
                                                            <th style="width: 10px;"></th>
                                                            <th style="width: 10px;"></th>
                                                        </tr>

                                                    @foreach($advisoryCategory as $advisory)
                                                <tr>
                                                    <td style="width:0.5%;" class="nohover">
                                                        <a title="Click here to view notes" class="badge hidden-lg hidden-md hidden-sm" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                            <span class="fa fa-info"></span>
                                                        </a>
                                                    </td>
                                                    <td class="hoverable">
                                                        <label for="isitem_tyre_checks_{{ $loop->index }}" style="font-weight: normal; display: block;">
                                                            {{ \App\VHC::mapItemTypeText($advisory['attributes']['type']) }}
                                                            <span data-id="description_5">
                                        </span>
                                                        </label>
                                                        @if(isset($advisory['attributes']['tyre_tread']))
                                                        <div class="visible-lg visible-md text-muted" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:30em; margin-left:5px;">
                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['tyre_tread'] }}mm / {{  \App\VHC::mapTyreCheckText($advisory['attributes']['tyre_check']) }}
                                                            </a>
                                                        </div>
                                                        <div class="visible-sm text-muted small" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:15em; margin-left:5px;">
                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['tyre_tread'] }}mm / {{  \App\VHC::mapTyreCheckText($advisory['attributes']['tyre_check']) }}
                                                            </a>
                                                        </div>
                                                        @elseif(isset($advisory['attributes']['brake_thickness']))
                                                        <div class="visible-lg visible-md text-muted" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:30em; margin-left:5px;">
                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['brake_thickness'] }}mm
                                                            </a>
                                                        </div>
                                                        <div class="visible-sm text-muted small" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:15em; margin-left:5px;">
                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['brake_thickness'] }}mm
                                                            </a>
                                                        </div>
                                                        @else
                                                        <div class="visible-lg visible-md text-muted" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:30em; margin-left:5px;">
                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                <span class="fa fa-info"></span>&nbsp;Additional Information
                                                            </a>
                                                        </div>
                                                        <div class="visible-sm text-muted small" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:15em; margin-left:5px;">
                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                <span class="fa fa-info"></span>&nbsp;Additional Information
                                                            </a>
                                                        </div>
                                                        @endif
                                                        <div class="modal fade" id="modal_{{$key}}_{{ $loop->index }}_urgent" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="vhcModal">Further Information</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @if($advisory['attributes']['comment'])
                                                                        <b>Comment: </b>{{ $advisory['attributes']['comment'] }}
                                                                            @if($advisory['attributes']['product_name'])
                                                                                <br><b>Recommendation: </b>{{ $advisory['attributes']['product_name'] }} @if($advisory['attributes']['product_price'])(£{{ number_format($advisory['attributes']['product_price'], 2) }})@endif
                                                                                @if($advisory['attributes']['labour_charged'])
                                                                                    <br><b>Labour: </b>£{{ number_format($advisory['attributes']['labour_charged'] * $advisory['attributes']['labour_rate'], 2) }} ({{ $advisory['attributes']['labour_charged'] }} hrs)
                                                                                @endif

                                                                                @if($advisory['attributes']['total_price'])
                                                                                    <br><b>Total: </b>£{{ number_format($advisory['attributes']['total_price'], 2) }}
                                                                                @endif
                                                                            @endif
                                                                        @else
                                                                        No further information.
                                                                        @endif
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="hoverable" style="text-align: right;" id="{{ $key}}_{{$loop->index}}_urgent }}">£{{ number_format($advisory['attributes']['total_price'], 2) }}
                                                    </td>
                                                    <td class="hoverable" style="width: 30px;">
                                                        @if($vhc->status == "awaiting_authorisation")
                                                            <input type="checkbox" id="checkbox_{{ $key }}_{{ $advisory['key'] }}" name="checkbox_{{ $key }}_{{ $advisory['key'] }}" data-price="{{ number_format($advisory['attributes']['total_price'], 2) }}" data-product="{{ $advisory['attributes']['product_name'] }}" data-status="{{ $advisory['attributes']['status'] }}" />
                                                        @endif
                                                        @if($advisory['attributes']['selected'])
                                                            <span class="fa fa-check" style="font-size: 1.4em;"></span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                    @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                            <tr class="hidden-lg hidden-md hidden-sm">
                                                <td></td>
                                                <td colSpan="3">
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table>
                                    </div>
                                    <!-- -->
                                </div>
                                <!-- -->
                            </div>
                        </div>

                        <!-- ...Red - Urgent -->
                        <!-- Amber - Recommended -->

                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Amber – Advisory</h3>
                            </div>
                            <div class="panel-body" style="position: relative;">
                                @if((count(array_filter(\App\VHC::getAllAdvisories($vhc, "advisory"))) > 0))
                                    <p>The following items may require replacement in the near future and can be viewed by clicking on the icon. If you would like this work completed now please select for approval.</p>
                                @else
                                    <div class="media">
                                        <div class="media-body pull-left">
                                            <h2>Great News!</h2>
                                            <p>We have not identified any Amber – Advisory work for your vehicle.</p>
                                            <p><a href="/vhc/{{ $vhc->uuid }}/report">Click Here</a> for your full report</p>
                                        </div>
                                        <img src="/images/vhc/smiley-large.png" class="media-object pull-right">
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-10" style="padding-left: 0px;">
                                        <table class="table table-condensed table-noborder">
                                            {{--                                            {{ json_encode(\App\VHC::getAllAdvisories($vhc, "urgent")) }}--}}

                                            @if(\App\VHC::getAllAdvisories($vhc, "advisory"))
                                                @foreach(\App\VHC::getAllAdvisories($vhc, "advisory") as $key => $advisoryCategory)
                                                    @if(!empty($advisoryCategory))

                                                        <tr>
                                                            <th style="vertical-align: top;" colSpan="2">
                                                                <br />{{ \App\VHC::mapCheckTypeText($key) }}
                                                            </th>
                                                            <th style="vertical-align: top; width: 70px; text-align: right;"><br /> Price</th>
                                                            <th style=""></th>
                                                            <th style="width: 10px;"></th>
                                                            <th style="width: 10px;"></th>
                                                        </tr>

                                                        @foreach($advisoryCategory as $advisory)
                                                            <tr>
                                                                <td style="width:0.5%;" class="nohover">
                                                                    <a title="Click here to view notes" class="badge hidden-lg hidden-md hidden-sm" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_advisory" href="#">
                                                                        <span class="fa fa-info"></span>
                                                                    </a>
                                                                </td>
                                                                <td class="hoverable">
                                                                    <label for="isitem_tyre_checks_{{ $loop->index }}" style="font-weight: normal; display: block;">
                                                                        {{ \App\VHC::mapItemTypeText($advisory['attributes']['type']) }}
                                                                        <span data-id="description_5">
                                        </span>
                                                                    </label>
                                                                    @if(isset($advisory['attributes']['tyre_tread']))
                                                                        <div class="visible-lg visible-md text-muted" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:30em; margin-left:5px;">
                                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_advisory" href="#">
                                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['tyre_tread'] }}mm / {{  \App\VHC::mapTyreCheckText($advisory['attributes']['tyre_check']) }}
                                                                            </a>
                                                                        </div>
                                                                        <div class="visible-sm text-muted small" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:15em; margin-left:5px;">
                                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_advisory" href="#">
                                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['tyre_tread'] }}mm / {{  \App\VHC::mapTyreCheckText($advisory['attributes']['tyre_check']) }}
                                                                            </a>
                                                                        </div>
                                                                    @elseif(isset($advisory['attributes']['brake_thickness']))
                                                                        <div class="visible-lg visible-md text-muted" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:30em; margin-left:5px;">
                                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_advisory" href="#">
                                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['brake_thickness'] }}mm
                                                                            </a>
                                                                        </div>
                                                                        <div class="visible-sm text-muted small" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:15em; margin-left:5px;">
                                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_urgent" href="#">
                                                                                <span class="fa fa-info"></span>&nbsp;{{ $advisory['attributes']['brake_thickness'] }}mm
                                                                            </a>
                                                                        </div>
                                                                    @else
                                                                        <div class="visible-lg visible-md text-muted" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:30em; margin-left:5px;">
                                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_advisory" href="#">
                                                                                <span class="fa fa-info"></span>&nbsp;Additional Information
                                                                            </a>
                                                                        </div>
                                                                        <div class="visible-sm text-muted small" style="overflow: hidden; text-overflow: ellipsis;  white-space: nowrap; width:15em; margin-left:5px;">
                                                                            <a title="Click here to view notes" class="small" data-toggle="modal" data-target="#modal_{{$key}}_{{ $loop->index }}_advisory" href="#">
                                                                                <span class="fa fa-info"></span>&nbsp;Additional Information
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                    <div class="modal fade" id="modal_{{$key}}_{{ $loop->index }}_advisory" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                    <h4 class="modal-title" id="vhcModal">Further Information</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    @if($advisory['attributes']['comment'])
                                                                                        <b>Comment: </b>{{ $advisory['attributes']['comment'] }}
                                                                                        @if($advisory['attributes']['product_name'])
                                                                                            <br><b>Recommendation: </b>{{ $advisory['attributes']['product_name'] }} @if($advisory['attributes']['product_price'])(£{{ number_format($advisory['attributes']['product_price'], 2) }})@endif
                                                                                            @if($advisory['attributes']['labour_charged'])
                                                                                                <br><b>Labour: </b>£{{ number_format($advisory['attributes']['labour_charged'] * $advisory['attributes']['labour_rate'], 2) }} ({{ $advisory['attributes']['labour_charged'] }} hrs)
                                                                                            @endif

                                                                                            @if($advisory['attributes']['total_price'])
                                                                                                <br><b>Total: </b>£{{ number_format($advisory['attributes']['total_price'], 2) }}
                                                                                            @endif
                                                                                        @endif
                                                                                    @else
                                                                                        No further information.
                                                                                    @endif
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="hoverable" style="text-align: right;" id="{{ $key}}_{{$loop->index}}_advisory }}">£{{ number_format($advisory['attributes']['product_price'], 2) }}
                                                                </td>
                                                                <td class="hoverable" style="width: 30px;">
                                                                    @if($vhc->status == "awaiting_authorisation")
                                                                        <input type="checkbox" id="checkbox_{{ $key }}_{{ $advisory['key'] }}" name="checkbox_{{ $key }}_{{ $advisory['key'] }}" data-price="{{ number_format($advisory['attributes']['product_price'], 2) }}" data-product="{{ $advisory['attributes']['product_name'] }}" data-status="{{ $advisory['attributes']['status'] }}" />
                                                                    @endif
                                                                    @if($advisory['attributes']['selected'])
                                                                        <span class="fa fa-check" style="font-size: 1.4em;"></span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif

                                            <tr class="hidden-lg hidden-md hidden-sm">
                                                <td></td>
                                                <td colSpan="3">
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table>
                                    </div>
                                    <!-- -->
                                </div>
                                <!-- -->
                            </div>
                        </div>

                        <!-- ...Amber - Recommended -->
                        <!-- Tyres -->
                        <!-- Gray- Tyres -->

                        <div class="panel panel-info" id="pnlTyres">
                            <div class="panel-heading color-gray">
                                <h3 class="panel-title">Tyres</h3>
                            </div>
                            <div class="panel-body">

                                @if($vhc->tyres_checks)
                                @foreach($vhc->tyres_checks as $tyre)
{{--                                    {{  $loop->index }}--}}
                                @if($loop->odd)
{{--                                        <br />--}}
{{--                                        <div class="row">--}}
                                @endif

                                            <div class="col-sm-6 media" style="margin-top: 0px;">

                                                <img src="/images/vhc/{{ $tyre['attributes']['status'] }}-tyre.png" class="media-object pull-left" style="max-height: 86px;" />

                                                <div class="media-body">
                                                    <div class="media-heading"><b>{{ \App\VHC::mapItemTypeText($tyre['attributes']['type']) }}</b></div>
                                                    <small>
                                                        {{ $tyre['attributes']['tyre_tread'] }} MM<br />
{{--                                                        6.7 mm<br />--}}
                                                        {{ \App\VHC::mapTyreCheckText($tyre['attributes']['tyre_check']) }}<br/>
                                                        Pressure Checked<br />
{{--                                                        6.7mm  inner tread depth<br />--}}
{{--                                                        6.7mm middle tread depth<br />--}}
{{--                                                        6.7mm outer tread depth--}}
                                                    </small>
                                                </div>
                                                <br />
                                            </div>
                                        @if($loop->odd)
{{--                                        </div>--}}
                                            @endif
                                @endforeach
                                    @else
                                <p>No tyre checks completed.</p>
                                @endif
                            </div>
                        </div>


                        <!-- -->
                    </section>
                </div>
            </div>
            <div class="centered visible-xs">
                <div class="well visible-xs text-center">
                    @if($vhc->status == "ready_for_collection" || $vhc->status == "work_approved" || $vhc->status == "work_declined")
                        <b><p>Billing Total (Work Approved):</p></b>
                        <b><h4 style="margin-bottom: 0;">£{{ number_format($vhc->billing_total, 2) }}</h4></b>
                    @else
                        <b><p>Selected Work Cost:</p></b>
                        <b><h4 style="margin-bottom: 0;" id="selectedWorkTotal_mobile" name="selectedWorkTotal_mobile">£0.00</h4></b>
                    @endif
                </div>
{{--                @if($vhc->admin)--}}
{{--                    <div class="well well-white">--}}
{{--                        <div class="row display-flex">--}}
{{--                            @if($vhc->admin->avatar)--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($vhc->admin->avatar) }}" alt="Avatar" class="avatar">--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            <div class="col-md-6 text-left">--}}
{{--                                <h4 class="text-red">Your Technician</h4>--}}
{{--                                <h5 class="text-black">--}}
{{--                                    {{ $vhc->admin->name }}--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
                <div class="well">
                    <p>
                        @if($vhc->status == "ready_for_collection" || $vhc->status == "work_approved" || $vhc->status == "work_declined")

                        @else
                            {{--                            <p>--}}
                            {{--                                <button type="button" class="btn btn-block btn-primary" style="font-weight: bold;" data-target="#mdlCallBack" data-toggle="modal">I would like a call back</button>--}}
                            {{--                            </p>--}}
                            <button class="btn btn-block btn-success" href="#" style="font-weight: bold;" disabled="disabled" id="payByCardBtn_mobile" name="payByCardBtn_mobile" data-target="#mdlCardPayment" data-toggle="modal">Pay by Card</button>
                            <button class="btn btn-block btn-success" href="#" style="font-weight: bold;" disabled="disabled" id="payByPABtn_mobile" name="payByPABtn_mobile"data-target="#mdlPaymentAssistPayment" data-toggle="modal">Spread The Cost</a>
                                <button class="btn btn-block btn-danger" href="#" style="font-weight: bold; display: block;" id="collectVehicleBtn_mobile" name="collectVehicleBtn_mobile" data-target="#mdlCollectVehicle" data-toggle="modal">Collect Vehicle</button>
                                <button class="btn btn-block btn-primary" href="#" style="font-weight: bold; display: none;" id="payAtStoreBtn_mobile" name="payAtStoreBtn_mobile" data-target="#mdlPayAtStore" data-toggle="modal">Pay at Store</button>
                                @endif
                                <a class="btn btn-block btn-primary" href="/vhc/{{ $vhc->uuid }}/report" style="font-weight: bold;">View complete report</a>
                    </p>
                    <br />
                    <p>
                        <strong>Contact Us</strong>
                    </p>
                    <p>
                        <a href="tel:0141 237 5050">
                            <i class="fa fa-phone" style="font-size: 1.4em; vertical-align: top;"></i>
                            <span>0141 237 5050</span>
                        </a>
                    </p>
                    <p>
                        <a href="mailto:enquiries@autofusionrepairs.co.uk">
                            <i class="fa fa-envelope" style="font-size: 1.2em; vertical-align: top;"></i>
                            <span>enquiries@autofusionrepairs.co.uk</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Approve ... -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title" id="vhcModal">Authority Confirmation</h3>
                        </div>
                        <div class="modal-body">
                            <div class="h4">
                                You have selected work to the value of (including VAT) : <div style="display: inline-block;" class="h4" name="grandTotal">£10.00</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="approve" value="approve" v-on:click="isPay = false">Authorise</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Approve ... -->

            <!-- ASF Approve & Pay... -->
            <div class="modal fade" id="myModalPayASF" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title" id="vhcModal">Confirmation</h3>
                        </div>
                        <div class="modal-body">
                            <div class="h4">
                                You have chosen to approve and pay for the following
                            </div>
                            <table class="table-condensed" width="100%">
                                <tr v-for="[key, val] of checkedItemsMap">
                                    <td>val.Description</td>
                                    <td width="10%" align="right">£val.Price</td>
                                </tr>
                                <tr>
                                    <th>Your total bill (including VAT) :</th>
                                    <th align="right" style="border-top: solid 1px silver;">(grandTotal)</th>
                                </tr>
                            </table>
                            <div class="h5" v-if="!ASF.PayNowClicked">
                                To spread the cost interest free you will need to complete an application (takes just 2 mins) at Bumper and authorise the work by clicking below.
                            </div>
                            <div class="h5" v-if="ASF.PayNowClicked">
                                To pay for the required work now please click “Authorise & Pay” below.
                            </div>
                            <div v-if="!ASF.PayNowClicked">
                                <div class="h5">
                                    Please complete the following contact details:
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="customeremailASF">Email</label>
                                    <input  v-if="!ASF.PayNowClicked" type="text" class="form-control" id="customeremailASF" name="customeremail" placeholder="Email" value="qsmon_786@hotmaill.com" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="customerfirstnameASF">First Name</label>
                                    <input  v-if="!ASF.PayNowClicked" type="text" class="form-control" id="customerfirstnameASF" name="customerfirstname" placeholder="First Name" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="customerlastnameASF">Last Name</label>
                                    <input  v-if="!ASF.PayNowClicked" type="text" class="form-control" id="customerlastnameASF" name="customerlastname" placeholder="Last Name" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="customerphoneASF">Phone/Mobile</label>
                                    <input  v-if="!ASF.PayNowClicked" type="text" class="form-control" id="customerphoneASF" name="customerphone" placeholder="Phone/Mobile" value="" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="customerpostcode1">Post code</label>
                                    <input  v-if="!ASF.PayNowClicked" type="text" class="form-control" id="customerpostcodeASF" name="customerpostcode" placeholder="Post Code" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="approveandpay" value="newvalue" v-on:click="isPay = true">Authorise &amp; Pay</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... ASF Approve & Pay-->
            <!-- Callback ... -->
            <div class="modal fade" id="mdlCallBack" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Further Information</h3>
                        </div>
                        <div class="modal-body">
                            <h4>Please call me back to discuss further.</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="callback" value="callback">Send Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... Callback -->
            <!-- Collect Vehicle ... -->
            <div class="modal fade" id="mdlCollectVehicle" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Are you sure you want to submit this choice?</h3>
                        </div>
                        <div class="modal-body">
                            <h4>Your authorised total is £0.00 (Inc VAT).</h4>
                            <p>This does not include the value of work previously agreed (if applicable).</p>
                            <p>By proceeding, you agree to our <b><a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf" target="_blank">terms and conditions</a></b>.</p>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{ request()->url() }}">
                                @csrf
                              <button type="button" class="btn btn-default" data-dismiss="modal">No Thanks</button>
                              <button type="submit" class="btn btn-danger" name="action" value="collectVehicle">Send Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... Collect Vehicle -->

            <!-- Pay At Store ... -->
            <div class="modal fade" id="mdlPayAtStore" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Are you sure you want to submit this choice? (Store Payment)</h3>
                        </div>
                        <div class="modal-body">
                            <h4>Your authorised total is <span id="payAtStoreAmount">£0.00</span> (Inc VAT).</h4>
                            <p>You will be asked to pay in store. This does not include the value of work previously agreed (if applicable).</p>
                            <p>By proceeding, you agree to our <b><a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf" target="_blank">terms and conditions</a></b>.</p>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{ request()->url() }}">
                                @csrf
                                <input type="hidden" id="payAtStoreProducts" name="payAtStoreProducts"/>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">No Thanks</button>
                              <button type="submit" class="btn btn-success" name="action" value="payAtStore">Send Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... Pay At Store-->

            <!-- Payment Assist ... -->
            <div class="modal fade" id="mdlPaymentAssistPayment" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Monthly Installments (via Payment Assist)</h3>
                        </div>
                        <div class="modal-body">
                            <h4>Your authorised total is <span id="paymentAssistAmount">£0.00</span> (Inc VAT).</h4>
                            <p>Your <a href="{{ route('account') }}">account details</a> will be sent to Payment Assist. This does not include the value of work previously agreed (if applicable).</p>
                            <p>Upon submission, you will be redirected to Payment Assist to continue with the application.</p>
                            <p>By proceeding, you agree to our <b><a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf" target="_blank">terms and conditions</a></b>.</p>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" id="paymentAssistForm" name="paymentAssistForm" action="{{ request()->url() }}">
                                @csrf
                                <input type="hidden" id="paymentAssistRedirectURL" name="paymentAssistRedirectURL" />
                                <input type="hidden" id="paymentAssistProducts" name="paymentAssistProducts" />
                                <input type="hidden" id="paymentAssistChargeAmount" name="paymentAssistChargeAmount" />
                                <input type="hidden" id="action" name="action" value="paymentAssist"/>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">No Thanks</button>
                              <button type="submit" class="btn btn-success" id="paymentAssistPaymentBtn">Send Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... Payment Assist  -->

            <!-- Card Payment ... -->
            <div class="modal fade" id="mdlCardPayment" tabindex="-1" role="dialog" aria-labelledby="vhcModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Card Payment</h3>
                        </div>
                        <div class="modal-body">
                            <h4>Your authorised total is <span id="cardPaymentAmount">£0.00</span> (Inc VAT).</h4>
                            <h4 style="margin: 15px 0px 15px 0px;">Card Payment</h4>

                            <div class="col-md-12" style="margin: 15px 0px 25px 0px;">

                                <div class="form-row">
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                            </div>


                            <p>This does not include the value of work previously agreed (if applicable).</p>
                            <p>By proceeding, you agree to our <b><a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf" target="_blank">terms and conditions</a></b>.</p>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{ request()->url() }}" id="cardPaymentForm" name="cardPaymentForm">
                                @csrf
                                <input type="hidden" id="cardPaymentProducts" name="cardPaymentProducts"/>
                                <input type="hidden" id="action" name="action" value="cardPayment">
                                <input type="hidden" id="cardPaymentChargeAmount" name="cardPaymentChargeAmount"/>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">No Thanks</button>
                              <button type="submit" class="btn btn-success" name="payment-button" id="payment-button">Complete Payment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... Card Payment -->
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
    <script type="text/javascript">
        var app = {
            data: {
                currency: "£",
                pAButtonEnabled: false,
                cardPaymentButtonEnabled: false,
                preAgreedVal: 0,
                grandTotal: 0,
                approveButtonShow: false,
                isPay: false,
                checkedItemsMap: new Map(),
                financeOrderId: '',
{{--                @if($vhc->user->account_type == "company")--}}
{{--                discountPercentage: {{ $vhc->user->discount_amount }},--}}
{{--                @else--}}
                discountPercentage: 0.0,
{{--                @endif--}}
                pA:
                    {
                        firstInstalment: 0.0,
                        ButtonEnabled: false,
                        ButtonText: 'Pay monthly - interest free',
                        PayNowClicked: false,
                        PayNowButtonText: 'Pay Now',
                        MinimumAmount: parseFloat('250'),
                        isTrackerEnabled: false,
                        isDebounced: false
                    },
                totals:
                    {
                        redTotal: 0.0,
                        amberTotal: 0.0,
                        selectedTotal: 0.0,
                        subtotalTotal: 0.0,
                        discountTotal: 0.0,
                        grandTotal: 0,
                        possibleItemsTotal: 0.0
                },
            },
            elements: {
                pABtn: $('#payByPABtn'),
                cardPaymentBtn: $('#payByCardBtn'),
                payAtStoreBtn: $('#payAtStoreBtn'),
                collectVehicleBtn: $('#collectVehicleBtn'),
                selectedWorkTotal: $('#selectedWorkTotal'),
                selectedWorkDiscount: $('#selectedWorkDiscount'),
                selectedWorkDiscountPercentage: $('#selectedWorkDiscountPercentage'),

                pABtn_mobile: $('#payByPABtn_mobile'),
                cardPaymentBtn_mobile: $('#payByCardBtn_mobile'),
                payAtStoreBtn_mobile: $('#payAtStoreBtn_mobile'),
                collectVehicleBtn_mobile: $('#collectVehicleBtn_mobile'),
                selectedWorkTotal_mobile: $('#selectedWorkTotal_mobile'),

                cardPaymentAmount: $('#cardPaymentAmount'),
                payAtStoreAmount: $('#payAtStoreAmount'),
                paymentAssistAmount: $('#paymentAssistAmount'),

                payAtStoreProducts: $('#payAtStoreProducts'),
                cardPaymentProducts: $('#cardPaymentProducts'),
                paymentAssistProducts: $('#paymentAssistProducts'),

                paymentAssistChargeAmount: $('#paymentAssistChargeAmount'),
                cardPaymentChargeAmount: $('#cardPaymentChargeAmount'),
            },
            getCurrency: function (val) {
                if (val == isNaN) return this.currency + "0.00";
                else return this.data.currency + val.toFixed(2);
            },
            toggleBtns: function(btn, toggle) {
                if(toggle == "show") {

                } else {

                }
            },
            updateTotals: function() {
                let checkboxes = $("input[type=checkbox]");
                checkboxes.on("change", function(ev) {
                    item = $(this);
                    var id = item.attr("id");
                    var product = item.data("product");
                    var price = parseFloat(item.data("price"));
                    var status = parseFloat(item.data("status"));

                    if (this.checked) {
                        // console.log("checked");
                        app.data.checkedItemsMap.set(id, { product: product, price: price, status: status  });
                        // console.log(app.data.checkedItemsMap);
                        // Update price
                        app.data.totals.selectedTotal = app.data.totals.selectedTotal + price;

                    } else {
                        // console.log("unchecked");
                        app.data.checkedItemsMap.delete(id);
                        app.data.totals.selectedTotal = app.data.totals.selectedTotal - price;
                        // console.log(app.data.checkedItemsMap);
                        // remove
                    }

                    if(app.data.discountPercentage > 0) {
                        app.data.totals.discountTotal = app.data.totals.selectedTotal / 100 * app.data.discountPercentage;
                    }

                    if(app.data.totals.selectedTotal > 0) {
                        app.elements.cardPaymentBtn.show();
                        app.elements.cardPaymentBtn.attr('disabled', false);

                        app.elements.cardPaymentBtn_mobile.show();
                        app.elements.cardPaymentBtn_mobile.attr('disabled', false);


                        app.elements.payAtStoreBtn.show();
                        app.elements.collectVehicleBtn.hide();


                        app.elements.payAtStoreBtn_mobile.show();
                        app.elements.collectVehicleBtn_mobile.hide();

                        if(app.data.totals.selectedTotal >= {{ config('services.payment_assist.minimum_order_value') }}  && app.data.totals.selectedTotal <= {{ config('services.payment_assist.maximum_order_value') }})
                        {
                            app.elements.pABtn.show();
                            app.elements.pABtn.attr('disabled', false);
                            app.elements.pABtn_mobile.show();
                            app.elements.pABtn_mobile.attr('disabled', false);
                        }

                    } else {
                        app.elements.cardPaymentBtn.attr('disabled', true);
                        app.elements.pABtn.attr('disabled', true);
                        app.elements.payAtStoreBtn.hide();
                        app.elements.collectVehicleBtn.show();

                        app.elements.cardPaymentBtn_mobile.attr('disabled', true);
                        app.elements.pABtn_mobile.attr('disabled', true);
                        app.elements.payAtStoreBtn_mobile.hide();
                        app.elements.collectVehicleBtn_mobile.show();
                    }

                    app.elements.selectedWorkDiscount.text(app.getCurrency(app.data.totals.discountTotal));
                    app.elements.selectedWorkDiscountPercentage.text(app.data.discountPercentage + "%");

                    // Update amounts, products
                    app.elements.selectedWorkTotal.text(app.getCurrency(app.data.totals.selectedTotal));
                    app.elements.selectedWorkTotal_mobile.text(app.getCurrency(app.data.totals.selectedTotal));
                    app.elements.payAtStoreAmount.text(app.getCurrency(app.data.totals.selectedTotal - app.data.totals.discountTotal));
                    app.elements.cardPaymentAmount.text(app.getCurrency(app.data.totals.selectedTotal - app.data.totals.discountTotal));
                    app.elements.cardPaymentChargeAmount.val(app.getCurrency(app.data.totals.selectedTotal - app.data.totals.discountTotal));
                    app.elements.payAtStoreProducts.val(JSON.stringify(Object.fromEntries(app.data.checkedItemsMap)));
                    app.elements.cardPaymentProducts.val(JSON.stringify(Object.fromEntries(app.data.checkedItemsMap)));

                    // Payment Assist
                    app.elements.paymentAssistAmount.text(app.getCurrency(app.data.totals.selectedTotal - app.data.totals.discountTotal));
                    app.elements.paymentAssistChargeAmount.val(app.data.totals.selectedTotal - app.data.totals.discountTotal);
                    app.elements.paymentAssistProducts.val(JSON.stringify(Object.fromEntries(app.data.checkedItemsMap)));

                });
            },
        }

        $(document).ready(function () {
            app.updateTotals();
        });

    </script>

    <script type="text/javascript">
        var paymentAssistForm = document.getElementById('paymentAssistForm');
        paymentAssistForm.addEventListener('submit', function(ev) {
            var payment_button = document.getElementById('paymentAssistPaymentBtn');
            var redirect_url = document.getElementById('paymentAssistRedirectURL');
            payment_button.disabled = true;
            payment_button.innerHTML = "<i id=\"search-button\" class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Processing Application";

            ev.preventDefault();

            $.ajax({
                type: "POST",
                url: "{{ config('app.url') }}/api/book/payments/payment_assist/begin",
                data: {
                    first_name: "{{ $vhc->user->first_name }}",
                    last_name: "{{ $vhc->user->last_name }}",
                    address_line_1: "{{ $vhc->user->address_line_1 }}",
                    address_postcode: "{{ $vhc->user->address_postcode }}",
                    order_id: "{{ $vhc->reservation?->reference ??  $vhc->uuid }}",
                    amount: document.getElementById('paymentAssistChargeAmount').value,
                },
                success: function (response) {
                    data = response['data'];
                    if(data['order_id'] === "Not unique") {
                        alert("Error: Order ID is not unique, do you already have a Payment Assist plan? Please contact {{ config('app.name') }} staff.");
                        return false;
                    }
                    if(response['status'] === "error") {
                        alert("Error: An error occurred with Payment Assist.");
                        alert(response.msg);
                        return false;
                    } else {
                        //Confirm payment
                        payment_button.disabled = true;
                        payment_button.innerHTML = "<i id=\"search-button\" class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Completing Application";

                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'paymentAssistToken');
                        hiddenInput.setAttribute('id', 'paymentAssistToken');
                        hiddenInput.setAttribute('value', data['token']);
                        redirect_url.setAttribute('value', data['url']);
                        paymentAssistForm.appendChild(hiddenInput);
                        paymentAssistForm.submit();
                    }
                },
                error: function (er) {
                    alert("Unable to proceed with checkout. Error #{{ config('app.name') }}-ERR-V-2");
                    return false;
                }
            });

        });
    </script>

    <script type='text/javascript'>
        var stripe = Stripe('{{ config('services.stripe.garage_key') }}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    // color: '#aab7c4'
                    color: '#8c8c8c'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style,  hidePostalCode : true});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');


        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.

        var form = document.getElementById('cardPaymentForm');
        form.addEventListener('submit', function(ev) {
            var payment_button = document.getElementById('payment-button');
            payment_button.disabled = true;
            payment_button.innerHTML = "<i id=\"search-button\" class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Processing Payment";

            ev.preventDefault();
            //https://autofusionrepairs.co.uk/api/book/payments/stripe/intent?amount=150
            $.ajax({
                type: "POST",
                url: "{{ config('app.url') }}/api/book/payments/stripe/intent",
                data: { amount: document.getElementById('cardPaymentChargeAmount').value},
                // data: { email: enteredEmail.value},
                success: function (response) {
                    // console.log(response);
                    if(response.error == true) {
                        // var errEL = document.getElementById('val-errors');
                        // errEL.style.display = "block";
                        // errorText.innerHTML = response.message;
                        // continueBtn.setAttribute('disabled', 'disabled');
                        alert("An error occured with Stripe");
                        return false;
                    } else {
                        //Confirm payment
                        stripe.confirmCardPayment(response.client_secret, {
                            payment_method: {
                                card: card
                            },
                            {{--receipt_email: "{{ request()->user()->email }}",--}}
                        }).then(function(result) {
                            if (result.error) {
                                console.log(result.error.message);
                                var errorElement = document.getElementById('card-errors');
                                errorElement.textContent = result.error.message;

                                payment_button.disabled = false;
                                payment_button.innerHTML = "Confirm Payment";
                            } else {
                                // The payment has been processed!
                                if (result.paymentIntent.status === 'succeeded') {
                                    payment_button.disabled = true;
                                    payment_button.innerHTML = "<i id=\"search-button\" class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Completing Payment";

                                    var hiddenInput = document.createElement('input');
                                    hiddenInput.setAttribute('type', 'hidden');
                                    hiddenInput.setAttribute('name', 'chargeToken');
                                    hiddenInput.setAttribute('value', result.paymentIntent.id);
                                    form.appendChild(hiddenInput);
                                    form.submit();
                                }
                            }
                        });

                        // form.submit();
                    }
                },
                error: function (er) {
                    alert("Unable to proceed with checkout. Error #{{ config('app.name') }}-ERR-V-1");
                    return false;
                }
            });

        });
    </script>


    <script type="text/javascript">
        var oldApp = new Vue({
            el: '#cancun',
            data: {
                currency: "£",
                paButtonEnabled: false,
                preAgreedVal: 0,
                grandTotal: 0,
                approveButtonShow: false,
                isPay: false,
                checkedItemsMap: new Map(),
                financeOrderId: '1047-4246003-214926',
                ASF:
                    {
                        firstInstalment: 0.0,
                        ButtonEnabled: false,
                        ButtonText: 'Pay monthly - interest free',
                        PayNowClicked: false,
                        PayNowButtonText: 'Pay Now',
                        MinimumAmount: parseFloat('250'),
                        isTrackerEnabled: false,
                        isDebounced: false
                    },
                Totals:
                    {
                        redTotal: 0.0,
                        amberTotal: 0.0,
                        selectedTotal: 0.0,
                        subtotalTotal: 0.0,
                        discountTotal: 0.0,
                        grandTotal: 0,
                        possibleItemsTotal: 0.0
                    }
            },
            methods: {
                getCurrency: function (val) {
                    if (val == isNaN) return this.currency + "0.00";
                    else return this.currency + val.toFixed(2);
                },
                logFinanceTracker: function (financeProvider, whichStep) {

                    if (financeProvider === 'ASF') {
                        baseURL = 'https://www.autoservicefinance.com/core/api/supplier/track/3/?id=' + this.financeOrderId + '&type=' + whichStep

                        fetch(baseURL);

                    }
                    else if (financeProvider == 'PA') {

                    }
                }
            },
            mounted: function () {
                let self = this;
                $('#myModalPayASF').on('show.bs.modal', function (event) {
                    self.ASF.PayNowClicked = $(event.relatedTarget).data("paynow") == true;
                    console.log("PayNowClicked=" + self.ASF.PayNowClicked);
                    self.logFinanceTracker('ASF','application2');
                })
            },
            watch: {
                grandTotal: function () {
                    console.log("watch: grandTotal triggered");
                    let self = this;
                    if (self.ASF.isTrackerEnabled && self.grandTotal >= self.ASF.MinimumAmount && !self.ASF.isDebounced) {
                        self.logFinanceTracker('ASF','application1');
                        self.ASF.isDebounced = true; // Debounce
                    }
                }
            }

        });
    </script>
    <script>

        $(document).ready(function () {
            updateTotal();
            oldApp.Totals.possibleItemsTotal = getMaxTotal();
        });

        function updateTotal(chkbox) {
            if (chkbox) {
                var item = $(chkbox);
                //console.log(`isTyre=${item.data("istyre")}, price=${item.data("price")}, :checkbox=${item.is(":checkbox")}`);
                if (item.length > 0 && item.is(':checkbox')) {
                    if (item.data("istyre") == "True") {
                        if (item.is(":checked")) {
                            item.prop('checked', false);
                        }
                        else {
                            item.prop('checked', true);
                        }
                        alert("Please select tyre below");
                        $('html, body').animate({ scrollTop: $('#pnlTyres').offset().top }, 1000);
                    }
                    else {
                        if (item.prop('checked')) {
                            oldApp.checkedItemsMap.set(item.attr("id"), { Description: item.data("description"), Price: item.data("price") });
                        }
                        else {
                            oldApp.checkedItemsMap.delete(item.attr("id"));
                        }
                    }
                }
            }

            oldApp.Totals.selectedTotal = 0.00;
            oldApp.Totals.redTotal = 0.00;
            oldApp.Totals.amberTotal = 0.00;

            var price = 0.00;
            var status = "";

            var prices = $("input:checkbox:checked").map(function () { return this }).get();

            for (var i = 0; i < prices.length; i++) {
                status = $(prices[i]).data("status");
                price = parseFloat($(prices[i]).data("price"));
                oldApp.Totals.selectedTotal = oldApp.Totals.selectedTotal + price;

                if (status == 'Urgent') {
                    oldApp.Totals.redTotal = oldApp.Totals.redTotal + price;
                }
                else if (status == 'Advisory') {
                    oldApp.Totals.amberTotal = oldApp.Totals.amberTotal + price;
                }
            }

            oldApp.grandTotal = oldApp.Totals.selectedTotal + oldApp.preAgreedVal;

            if (oldApp.grandTotal <= 0) {
                oldApp.ASF.ButtonText = "Pay monthly - interest free";
                oldApp.ASF.ButtonEnabled = false;
                oldApp.paButtonEnabled = false;
            }
            else {
                oldApp.ASF.firstInstalment = oldApp.currency + (oldApp.grandTotal / 4).toFixed(2);
                oldApp.ASF.ButtonText = "Pay Just " + oldApp.ASF.firstInstalment + " today";
                oldApp.ASF.ButtonEnabled = true;
                oldApp.paButtonEnabled = true;
            }
        }

        function updateTyre(radio) {
            if (radio) {
                var tyreRadio = $(radio);
                var itemId = tyreRadio.data("itemid");
                var priceSource = parseFloat(tyreRadio.data("price"));
                var descriptionSource = tyreRadio.data("description");

                var descriptionTarget = $("span[data-id='description_" + itemId + "']")[0];
                var priceTarget = $("label[data-id='price_" + itemId + "']")[0];
                var chkTarget = $("input[data-id='item_" + itemId + "']")[0];

                descriptionTarget.innerHTML = " (" + descriptionSource + ")";
                priceTarget.innerHTML = oldApp.currency + priceSource.toFixed(2);

                $(chkTarget).val(priceSource.toFixed(2));
                $(chkTarget).data("price", priceSource.toFixed(2));

                if (priceSource > 0.0) {
                    chkTarget.checked = true;
                    oldApp.checkedItemsMap.set(tyreRadio.attr("name"), { Description: $(chkTarget).data("description"), Price: tyreRadio.data("price") });
                }
                else {
                    chkTarget.checked = false;
                    oldApp.checkedItemsMap.delete(tyreRadio.attr("name"));
                }
            }
            updateTotal();
        }

        function getMaxTotal() {
            total = 0.0;
            var allCheckBoxes = $("form input:checkbox");
            for(i=0; i<allCheckBoxes.length; i++)
            {
                var item = $(allCheckBoxes[i]);
                if(item.data("istyre") !== "True")
                {
                    total += parseFloat(item.data("price"));
                    //console.log(`nontyre ${item.data("price")}`);
                }
            }
            var allRadios = $("form input:radio");
            var maxValues = {};
            var groupName = "";
            var groupMax = 0.0;
            for(i=0; i<allRadios.length; i++)
            {
                var name = allRadios[i].name;
                var price = parseFloat($(allRadios[i]).data("price"));

                if (groupName !== name)
                {
                    groupName = name;
                    groupMax = price;
                    maxValues[groupName] = groupMax;
                    //console.log(`........ ${groupName} and ${groupMax}`);
                }
                else if(price > groupMax)
                {
                    groupMax = price;
                    maxValues[groupName] = groupMax;
                    //console.log(`topping up ...`);
                }
                //console.log(`${name} ...  ${price}`);
            }

            for(var thingy in maxValues)
            {
                total += maxValues[thingy];
                //console.log(`tyre ${maxValues[thingy]}`);
            }
            //console.log(total);
            return Math.round(total* 100) / 100;
        }

        function validateForm() {
            var flag = false;
            if (oldApp.isPay && !oldApp.ASF.PayNowClicked) {
                var custEmail = $('[name="customeremail"]');
                if (custEmail) {
                    if (custEmail.length > 0) {
                        if (custEmail.val() !== "") {
                            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            flag = regex.test(custEmail.val());
                        }
                    }

                    if (!flag) {
                        custEmail.parent().addClass("has-error");
                        console.log("email error");
                    }
                    else {
                        custEmail.parent().removeClass("has-error");
                    }
                }
                else {
                    flag = true;
                }

                if (!EmptyValidate("customerfirstname")) flag = false;
                if (!EmptyValidate("customerlastname")) flag = false;
                if (!EmptyValidate("customeraddress1")) flag = false;
                if (!EmptyValidate("customeraddress2")) flag = false;
                if (!EmptyValidate("customeraddress3")) flag = false;
                if (!EmptyValidate("customeraddress4")) flag = false;
                if (!EmptyValidate("customerpostcode")) flag = false;
                if (!EmptyValidate("customerphone")) flag = false;
            }
            else {
                flag = true;
            }

            if (!flag) alert("Please provide contact details.");
            return flag;
        }

        function EmptyValidate(ctrlName) {
            var flag = false;
            var ctrl = $(`[name=${ctrlName}]`);
            if (ctrl) {
                if (ctrl.val() == "") {
                    ctrl.parent().addClass("has-error");
                    flag = false;
                    console.log(ctrlName);
                }
                else {
                    ctrl.parent().removeClass("has-error");
                    flag = true;
                }
            }
            else {
                flag = true;
            }
            return flag;
        }

    </script>
</div>
<div class="footer">
    <a href="{{ config('app.url') }}">back to Home</a>
</div>
</body>
</html>
