<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="LA5 Digital">
    <!-- Site Title -->
    <title>Job Sheet</title>
    <link rel="stylesheet" href="{{ asset('css/templates/invoices/garage/style.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<div class="tm_container">
    <div class="tm_invoice_wrap">
        <div class="tm_invoice tm_style1" id="tm_download_section">
            <div class="tm_invoice_in">
                <div class="tm_invoice_head tm_align_center tm_mb20">
                    <div class="tm_invoice_left">
                        <div class="tm_logo"><img src="{{ asset('images/af-logo-black.svg') }}" alt="Logo" width="80px"></div>
                    </div>
                    <div class="tm_invoice_right tm_text_right">
                        <div class="tm_primary_color tm_f20 tm_text_uppercase">Job Sheet</div>
                    </div>
                </div>
                <div class="tm_invoice_info tm_mb20">
                    <div class="tm_invoice_seperator tm_gray_bg"></div>
                    <div class="tm_invoice_info_list">
                        <p class="tm_invoice_number tm_m0">Tech Assigned: <b class="tm_primary_color">{{ $data['techAssigned'] }}</b></p>
                        <p class="tm_invoice_date tm_m0">Date: <b class="tm_primary_color">{{ $data['bDate'] }}</b></p>
                    </div>
                </div>
                <div class="tm_invoice_head tm_mb10">
                    <div class="tm_invoice_left">
                        <p class="tm_mb2"><b class="tm_primary_color">Customer Details</b></p>
                        <p>
                            {{ $data['customerName'] }} <br>
                            @if($data['customer_addr_line_2'] && $data['customer_addr_line_2'] !== 'N/A')
                                {{ $data['customer_addr_line_1'] }}, {{ $data['customer_addr_line_2'] }} <br>{{ $data['customer_addr_town'] }} <br>
                            @else
                                {{ $data['customer_addr_line_1'] }} <br>{{ $data['customer_addr_town'] }} <br>
                            @endif
                            {{ $data['customer_addr_postcode'] }}<br>
                            {{ $data['customerPhone'] }}
                        </p>
                    </div>
{{--                    <div class="tm_invoice_right tm_text_right">--}}
{{--                        <p class="tm_mb2"><b class="tm_primary_color">Autofusion Repairs</b></p>--}}
{{--                        <p>--}}
{{--                            404 Glasgow Road,--}}
{{--                            Clydebank, G81 1PW<br>--}}
{{--                            Telephone: 0141 237 5050<br>--}}
{{--                            Email: enquiries@autofusionrepairs.co.uk--}}
{{--                            <br>--}}
{{--                            www.autofusionrepairs.co.uk--}}
{{--                            <br>--}}
{{--                            VAT: GB391 764 170--}}
{{--                        </p>--}}
{{--                    </div>--}}
                </div>

                <div class="tm_grid_row tm_col_4 tm_col_2_md tm_invoice_info_in tm_round_border tm_mb30 tm_radius_0 tm_padd_10">
                        <div>
                            <span>Make & Model</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['vehicleMake'] }}</b>
                        </div>
                        <div>
                            <span>Chassis No</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['vehicleChassis'] }}</b>
                        </div>
                        <div>
                            <span>Engine No</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['vehicleEngine'] }}</b>
                        </div>
                        <div>
                            <span>Mileage</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['vehicleMileage'] }}</b>
                        </div>
                        <div>
                            <span>Fuel Type</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['fuelType'] }}</b>
                        </div>
                        <div>
                            <span>Registration</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['vehicleReg'] }}</b>
                        </div>
                        <div>
                            <span>Booking Reference</span> <br>
                            <b class="tm_primary_color tm_medium">{{ $data['bRef'] }}</b>
                        </div>
                </div>
                <div class="tm_table tm_style1 tm_mb30">
                    <div class="tm_round_border">
                        <div class="tm_table_responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="tm_width_12 tm_semi_bold tm_primary_color tm_gray_bg">Job Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($data['jobNotes'])
                                    <tr>
                                        <td class="tm_width_12">Job Notes:
                                            <br>{!! nl2br(e($data['jobNotes'])) !!}</td>
                                    </tr>
                                @endif
{{--                                @if(isset($data['products']) && count($data['products']) > 0)--}}
{{--                                    @php--}}
{{--                                        $groupedProducts = [];--}}
{{--                                        $individualProducts = [];--}}

{{--                                        foreach ($data['products'] as $product) {--}}
{{--                                            if (in_array($product['productCategoryID'], [3, 14])) {--}}
{{--                                                $groupedProducts[] = $product['productName'];--}}
{{--                                            } else {--}}
{{--                                                $individualProducts[] = $product['productName'];--}}
{{--                                            }--}}
{{--                                        }--}}
{{--                                    @endphp--}}

{{--                                    @if(count($groupedProducts) > 0)--}}
{{--                                        <tr>--}}
{{--                                            <td class="tm_width_12">Tracker:<br>{!! implode('<br>', $groupedProducts) !!}</td>--}}
{{--                                        </tr>--}}
{{--                                    @endif--}}

{{--                                    @if(count($individualProducts) > 0)--}}
{{--                                        @foreach($individualProducts as $product)--}}
{{--                                            <tr>--}}
{{--                                                <td class="tm_width_12">Product: <br>{{ $product }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                @endif--}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tm_invoice_footer">
                        <div class="tm_left_footer">
                            <!-- <p class="tm_mb2"><b class="tm_primary_color">Payment info:</b></p> -->
                            <!-- <p class="tm_m0">Credit Card - 236***********928 <br>Amount: $1732</p> -->
                        </div>
{{--                        <div class="tm_right_footer tm_round_border tm_radius_0" style="--}}
{{--    margin-top: 10px;--}}
{{--">--}}
{{--                            <table>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_bold">Net</td>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold">£{{ $data['priceNet'] }}</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0">VAT <span class="tm_ternary_color">(20%)</span></td>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0">£{{ $data['priceVat'] }}</td>--}}
{{--                                </tr>--}}
{{--                                <tr class="tm_border_top tm_border_bottom">--}}
{{--                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color">Total	</td>--}}
{{--                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color tm_text_right">£{{ $data['priceTotal'] }}</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_bold">Balance</td>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold">£{{ $data['totalOwed'] }}</td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
                    </div>
                </div>
                {{--                <div class="tm_padd_15_20 tm_round_border">--}}
                {{--                    <p class="tm_mb5"><b class="tm_primary_color">Accepted Payment Methods</b></p>--}}
                {{--                    <ul class="tm_m0 tm_note_list">--}}

                {{--                        <li>Bank Transfer</li>--}}
                {{--                        <li>Card Payments</li><li>Cash</li></ul>--}}
                {{--                </div><!-- .tm_note -->--}}
            </div>
        </div>
        <div class="tm_invoice_btns tm_hide_print">
            <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24" fill="currentColor"></circle></svg>
          </span>
                <span class="tm_btn_text">Print</span>
            </a>
            <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
          </span>
                <span class="tm_btn_text">Download</span>
            </button>
        </div>
    </div>
</div>
{{--<script src="{{ asset('js/templates/invoices/garage/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/templates/invoices/garage/jspdf.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/templates/invoices/garage/html2canvas.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/templates/invoices/garage/main.js') }}"></script>--}}

</body></html>
