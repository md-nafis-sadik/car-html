\<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Tags -->

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="LA5 Digital">
    <!-- Site Title -->
    <title>Invoice</title>
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
                        <div class="tm_primary_color tm_f20 tm_text_uppercase">Invoice</div>
                    </div>
                </div>
                <div class="tm_invoice_info tm_mb20">
                    <div class="tm_invoice_seperator tm_gray_bg"></div>
                    <div class="tm_invoice_info_list">
                        <p class="tm_invoice_number tm_m0">Invoice Ref: <b class="tm_primary_color">{{ $data['docNo'] }}</b></p>
                        <p class="tm_invoice_date tm_m0">Date: <b class="tm_primary_color">{{ $data['date'] }}</b></p>
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
                            {{ $data['customer_addr_postcode'] }}
                        </p>
                    </div>
                    <div class="tm_invoice_right tm_text_right">
                        <p class="tm_mb2"><b class="tm_primary_color">Autofusion Hire</b></p>
                        <p>
                            8-10 Windsor Street,
                            Glasgow, G20 7NA<br>
                            Telephone: 0141 899 0009<br>
                            Email: enquiries@autofusionhire.co.uk
                            <br>
                            www.autofusionhire.co.uk
                            <br>
                            VAT: GB391764170
                        </p>
                    </div>
                </div>

                <div class="tm_grid_row tm_col_4 tm_col_2_md tm_invoice_info_in tm_round_border tm_mb30 tm_radius_0 tm_padd_10">
                    <div>
                        <span>To</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $data['branchTo'] }}</b>
                    </div>
                    <div>
                        <span>From</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $data['branchFrom'] }}</b>
                    </div>
                    <div>
                        <span>Make & Model</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $data['vehicleMake'] }}</b>
                    </div>
                    <div>
                        <span>Vehicle Reg</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $data['vehicleReg'] }}</b>
                    </div>
                    <div>
                        <span>Account Number</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $data['accountNo'] }}</b>
                    </div>
                    <div>
                        <span>Booking Reference</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $data['bRef'] }}</b>
                    </div>
                    <div>
                        <span>Deposit Paid</span> <br>
                        <b class="tm_primary_color tm_medium"  style="color:red !important;">£{{ number_format($data['depositAmount'], 2) }}</b>
                    </div>
{{--                    <div>--}}
{{--                        <span>Reg No</span> <br>--}}
{{--                        <b class="tm_primary_color tm_medium">{{ $data['vehicleReg'] }}</b>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <span>Reg Date</span> <br>--}}
{{--                        <b class="tm_primary_color tm_medium">{{ $data['vehicleRegDate'] }}</b>--}}
{{--                    </div>--}}
                </div>
                <div class="tm_table tm_style1 tm_mb30">
                    <div class="tm_round_border">
                        <div class="tm_table_responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="tm_width_6 tm_semi_bold tm_primary_color tm_gray_bg" style="font-size: 14px;">Description of Goods / Service</th>
                                    <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg" style="font-size: 14px;">Quantity</th>
                                    <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg" style="font-size: 14px;">Unit Price</th>
                                    <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg" style="font-size: 14px;">VAT</th>
                                    <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg tm_text_right" style="font-size: 14px;">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['products']) && count($data['products']) > 0)
                                    @foreach($data['products'] as $product)
                                        <tr>
                                            <td class="tm_width_6">{{ $product['productName'] }}</td>
                                            <td class="tm_width_2">{{ $product['pQty'] }}</td>
                                            <td class="tm_width_2">£{{ $product['pPrice'] }}</td>
                                            @if($product['pVAT'] > 0)
                                                <td class="tm_width_2">20%</td>
                                            @else
                                                <td class="tm_width_2">0%</td>
                                            @endif
{{--                                            <td class="tm_width_2">£{{ $product['pVAT'] }}</td>--}}
                                            <td class="tm_width_2 tm_text_right">
                                                @php
                                                    $pNetPrice = str_replace(',', '', $product['pNetPrice']);
                                                    $pQty = str_replace(',', '', $product['pQty']);
                                                @endphp
                                                @if(is_numeric($pNetPrice) && is_numeric($pQty))
                                                    £{{ number_format($pNetPrice * $pQty, 2) }}
                                                @else
                                                    £0.00
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
{{--                                    <tr>--}}
{{--                                        <td class="tm_width_6">{{ $data['productName'] }} ({{ $data['dateFrom'] }} - {{ $data['dateTo'] }})</td>--}}
{{--                                        <td class="tm_width_2">{{ $data['pQty'] }}</td>--}}
{{--                                        <td class="tm_width_2">£{{ $data['pNetPrice'] }}</td>--}}
{{--                                        <td class="tm_width_2 tm_text_right">£{{ $data['pNetPrice'] }}</td>--}}
{{--                                    </tr>--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tm_invoice_footer">
                        <div class="tm_left_footer">
                            <!-- <p class="tm_mb2"><b class="tm_primary_color">Payment info:</b></p> -->
                            <!-- <p class="tm_m0">Credit Card - 236***********928 <br>Amount: $1732</p> -->
                        </div>
                        <div class="tm_right_footer tm_round_border tm_radius_0" style="
    margin-top: 10px;
">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_bold" style="font-size: 13px;">NET</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold" style="font-size: 13px;">£{{ $data['priceNet'] }}</td>
                                </tr>
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0" style="font-size: 13px;">VAT <span class="tm_ternary_color">(20%)</span></td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0" style="font-size: 13px;">£{{ $data['priceVat'] }}</td>
                                </tr>
                                <tr class="tm_border_top tm_border_bottom">
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color" style="font-size: 13px;">Total	</td>
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color tm_text_right" style="font-size: 13px;">£{{ $data['priceTotal'] }}</td>
                                </tr>
                                <tr class="tm_border_top tm_border_bottom">
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color" style="font-size: 13px;">Paid	</td>
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color tm_text_right" style="font-size: 13px;">£{{ $data['totalPaid'] }}</td>
                                </tr>

                                @if($data['refundedAmount'] > 0)
                                <tr class="tm_border_top tm_border_bottom">
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color" style="font-size: 13px;">Refunded	</td>
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color tm_text_right" style="font-size: 13px;">£{{ number_format($data['refundedAmount'], 2) }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_bold" style="color:red !important; font-size: 13px;">Balance</td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold" style="color:red !important; font-size: 13px;">£{{ number_format($data['totalOwed'], 2) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @if($data['totalOwed'] > 0)
                <div class="tm_padd_8_20 tm_round_border">
                    <p class="tm_mb0"><b class="tm_primary_color">BACS Payments</b></p>
                    <p class="tm_m0">Pay to: Autofusion Hires<br>
                        Sort code: 20-29-24<br>
                        Account #: 23278182</p>
                    <p class="tm_m0">Reference: <span class="tm_semi_bold">{{ $data['docNo'] }}</span></p>
                </div>
                @endif
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
