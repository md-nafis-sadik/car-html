<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Tags -->

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="LA5 Digital">
    <!-- Site Title -->
    <title>Estimate</title>
    <link rel="stylesheet" href="{{ asset('css/templates/invoices/garage/style.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @media print {
            body {
                zoom: 90% !important;
            }
        }

        body {
            background-color: #f5f6fa;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        @media (max-width: 600px) {
            .modal-content {
                width: 50%;
            }
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .signature-pad--body {
            border-radius: 4px;
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            border: 1px solid #c0cbda;
        }

        .btn-default {
            background-color: rgb(255 255 255 / 1);
            border: 1px solid #adadad;
            border-radius: 4px;
        }

        .btn-default:hover {
            background-color: rgb(255 255 255 / 0.3);
        }

        .action-btn {
            background-color: rgba(52,199,89,.1);
            color: #34c759;
            border-radius: 4px;
            border: 1px solid;
            padding: 4px 12px 4px 12px;
            font-weight: 500;
        }

        .action-btn:hover {
            background-color: rgba(52, 199, 89, 0.2);
        }
    </style>
</head>

<body>
<!-- The Modal -->
<div id="approvalModal" class="modal">

    <!-- Modal content -->
    <form id="identityConfirmationForm" novalidate="novalidate" name="identityConfirmationForm" class="modal-content" action="{{ route('estimate.accept', ['estimateUUID' => $estimate->uuid, 'estimateToken' => $estimate->token]) }}" method="POST">
        @csrf
        <span class="close">&times;</span>
        <div class="tm_primary_color tm_f17">Approve Estimate</div>
        <div>
            <p>You can accept this estimate by signing below.</p>
        </div>

        <p class="bold" id="signatureLabel">Signature</p>
        <div class="signature-pad--body tm_mb10">
            <canvas id="signature" height="130" width="550" style="touch-action: none;"></canvas>
        </div>

        <p id="signatureInput-error" class="tm_danger_color">Please sign the document.</p>

        <input type="hidden" id="signatureInput" name="signatureInput"/>
        <div class="display-block tm_mb10">
            <button type="button" class="btn btn-default btn-xs clear" tabindex="-1" data-action="clear">Clear</button>
            <button type="button" class="btn btn-default btn-xs" tabindex="-1" data-action="undo">Undo</button>
        </div>
        <div>
            <button type="submit" class="action-btn" data-form="#identityConfirmationForm">Approve Estimate</button>
        </div>

    </form>

</div>

<div class="tm_container">
    <div class="tm_invoice_wrap">
        <div class="tm_invoice tm_style1" id="tm_download_section">
            <div class="tm_invoice_in">
                <div class="tm_invoice_head tm_align_center tm_mb20">
                    <div class="tm_invoice_left">
                        <div class="tm_logo"><img src="{{ asset('images/af-logo-black.svg') }}" alt="Logo" width="80px"></div>
                    </div>
                    <div class="tm_invoice_right tm_text_right">
                        <div class="tm_primary_color tm_f20 tm_text_uppercase">Estimate</div>

{{--                        @php--}}
{{--                        $estimate->status = 'expired';--}}
{{--                        @endphp--}}
                        @if($estimate->status == 'sent')
                            <div class="tm_accent_color">
                                <p>Sent</p>
                            </div>
                        @elseif($estimate->status == 'expired')
                            <div class="tm_warning_color">
                                <p>Expired</p>
                            </div>
                        @elseif($estimate->status == 'approved')
                            <div class="tm_success_color">
                                <p>Approved</p>
                            </div>
                        @elseif($estimate->status == 'declined')
                            <div class="tm_danger_color">
                                <p>Declined</p>
                            </div>
                        @endif
{{--                        <div><p>{{ $estimate->status }}</p></div>--}}

                    </div>
                </div>
                <div class="tm_invoice_info tm_mb20">
                    <div class="tm_invoice_seperator tm_gray_bg"></div>
                    <div class="tm_invoice_info_list">
                        <p class="tm_invoice_number tm_m0">Estimate Ref: <b class="tm_primary_color">{{ $estimate->reference  }}</b></p>
                        <p class="tm_invoice_date tm_m0">Date: <b class="tm_primary_color">{{ $estimate->date->format('d/m/Y') }}</b></p>
                    </div>
                </div>
                <div class="tm_invoice_head tm_mb10">
                    <div class="tm_invoice_left">
                        <p class="tm_mb2"><b class="tm_primary_color">Customer Details</b></p>
                        <p>
                            {{ $estimate->client->name  }} <br>
                            @if($estimate->client?->address_line_2 && $estimate->client?->address_line_2 !== 'N/A')
                                {{ $estimate->client?->address_line_1 }}, {{ $estimate->client?->address_line_2 }} <br>{{ $estimate->client?->address_town }} <br>
                            @else
                                {{ $estimate->client?->address_line_1 }} <br>{{  $estimate->client?->address_town }} <br>
                            @endif
                            {{  $estimate->client?->address_postcode }}
                        </p>
                    </div>
                    <div class="tm_invoice_right tm_text_right">
                        <p class="tm_mb2"><b class="tm_primary_color">Autofusion Repairs</b></p>
                        <p>
                            404 Glasgow Road,
                            Clydebank, G81 1PW<br>
                            Telephone: 0141 237 5050<br>
                            Email: enquiries@autofusionrepairs.co.uk
                            <br>
                            www.autofusionrepairs.co.uk
                            <br>
                            VAT: GB391833474
                        </p>
                    </div>
                </div>

                <div class="tm_grid_row tm_col_4 tm_col_2_md tm_invoice_info_in tm_round_border tm_mb30 tm_radius_0 tm_padd_10">
                    <div>
                        <span>Make &amp; Model</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->customercar?->make ." ". $estimate->booking?->customercar?->model }}</b>
                    </div>
                    <div>
                        <span>Chassis Number</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->customercar?->vin ?? 'N/A' }}</b>
                    </div>
                    <div>
                        <span>Engine No</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->customercar?->engine_number ?? 'N/A'  }}</b>
                    </div>
                    <div>
                        <span>Mileage</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->mileage ?? $estimate->booking?->health_check?->mileage ?? $estimate->booking?->customercar?->mileage ?? "N/A" }}</b>
                    </div>
                    <div>
                        <span>Account Number</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->client?->account_number }}</b>
                    </div>
                    <div>
                        <span>Booking Reference</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->reference }}</b>
                    </div>
                    <div>
                        <span>Reg No</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->customercar?->reg }}</b>
                    </div>
                    <div>
                        <span>Reg Date</span> <br>
                        <b class="tm_primary_color tm_medium">{{ $estimate->booking?->customercar?->registered_date?->format('d/m/Y') ?? "N/A" }}</b>
                    </div>
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
                                @if(count($estimate->line_items) > 0)
                                    @foreach($estimate->line_items as $product)
                                        <tr>
                                            <td class="tm_width_6">{{ $product['name'] }}</td>
                                            <td class="tm_width_2">{{ $product['quantity'] }}</td>
                                            <td class="tm_width_2">£{{ $product['price'] }}</td>
                                            {{--                                            <td class="tm_width_2">£{{ $product['pVAT'] }}</td>--}}
                                            @if($product['vat'] > 0)
                                                <td class="tm_width_2">20%</td>
                                            @else
                                                <td class="tm_width_2">0%</td>
                                            @endif
                                            {{--                                            <td class="tm_width_2">£{{ $product['pVAT'] }}</td>--}}
                                            <td class="tm_width_2 tm_text_right">£{{  number_format($product['total'], 2) }}</td>
                                        </tr>
                                    @endforeach
                                @endif
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
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold" style="font-size: 13px;">£{{  $estimate->billing_subtotal }}</td>
                                </tr>
                                <tr>
                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0" style="font-size: 13px;">VAT <span class="tm_ternary_color">(20%)</span></td>
                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0" style="font-size: 13px;">£{{ $estimate->billing_tax }}</td>
                                </tr>
                                <tr class="tm_border_top tm_border_bottom">
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color" style="font-size: 13px;">Total	</td>
                                    <td class="tm_width_3 tm_border_top_0 tm_bold tm_primary_color tm_text_right" style="font-size: 13px;">£{{ $estimate->billing_total }}</td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_border_none tm_bold" style="color:red !important; font-size: 13px;">Balance</td>--}}
{{--                                    <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold" style="color:red !important; font-size: 13px;">£{{ number_format(str_replace(',','', $data['totalOwed']), 2) }}</td>--}}
{{--                                </tr>--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if($estimate->client_note)
                    <div class="tm_padd_15_20 tm_round_border tm_mb10">
                        <p class="tm_mb0"><b class="tm_primary_color">Note:</b></p>
                        <p>{!! nl2br(e($estimate->client_note)) !!}</p>
                    </div>
                @endif

                @if($estimate->terms)
                    <div class="tm_padd_15_20 tm_round_border">
                        <p class="tm_mb0"><b class="tm_primary_color">Terms & Conditions</b></p>
                        <p>{!! nl2br(e($estimate->terms)) !!}</p>
                    </div>
                @endif
            </div>
        </div>
        <div class="tm_invoice_btns tm_hide_print">
            <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($estimate->url) }}" class="tm_invoice_btn tm_color1" target="_blank">
{{--            <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">--}}
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24" fill="currentColor"></circle></svg>
          </span>
                <span class="tm_btn_text">Print</span>
            </a>
{{--            <button class="tm_invoice_btn tm_color2">--}}
{{--          <span class="tm_btn_icon">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>--}}
{{--          </span>--}}
{{--                <span class="tm_btn_text">Download</span>--}}
{{--            </button>--}}

            @if($estimate->status == 'sent')
            <button class="tm_invoice_btn tm_color2" id="approvalBtn">
              <span class="tm_btn_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M464 128L240 384l-96-96M144 384l-96-96M368 128L232 284"/></svg>
              </span>
                <span class="tm_btn_text">Accept</span>
            </button>


            <button class="tm_invoice_btn tm_danger_color" onclick="event.preventDefault();
                                                     document.getElementById('declineForm').submit();"  >
                @if($estimate->status == 'sent')
                    <form id="declineForm" novalidate="novalidate" name="declineForm" action="{{ route('estimate.decline', ['estimateUUID' => $estimate->uuid, 'estimateToken' => $estimate->token]) }}" method="POST">
                        @csrf
                    </form>
                @endif
              <span class="tm_btn_icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
              </span>
                <span class="tm_btn_text">Decline</span>
            </button>
            @endif
        </div>
    </div>
</div>


<script>
    // Get the modal
    var modal = document.getElementById("approvalModal");

    // Get the button that opens the modal
    var btn = document.getElementById("approvalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script src="{{ asset('js/templates/invoices/garage/jquery.min.js') }}"></script>
<script src="{{ asset('js/templates/invoices/garage/jspdf.min.js') }}"></script>
<script src="{{ asset('js/templates/invoices/garage/html2canvas.min.js') }}"></script>
<script src="{{ asset('js/templates/invoices/garage/main.js') }}"></script>
<script src="{{ asset('js/templates/invoices/garage/signature_pad.min.js') }}"></script>

<script>
    $(function() {

    })
</script>

<script>
    $(function() {
        function signaturePadChanged() {
            var input = document.getElementById('signatureInput');
            var $signatureLabel = $('#signatureLabel');
            $signatureLabel.removeClass('tm_danger_color');
            if (signaturePad.isEmpty()) {
                $signatureLabel.addClass('tm_danger_color');
                input.value = '';
                return false;
            }
            $('#signatureInput-error').remove();
            var partBase64 = signaturePad.toDataURL();
            partBase64 = partBase64.split(',')[1];
            input.value = partBase64;
        }
        var canvas = document.getElementById("signature");
        var clearButton = document.querySelector("[data-action=clear]");
        var undoButton = document.querySelector("[data-action=undo]");
        var identityFormSubmit = document.getElementById('identityConfirmationForm');
        var signaturePad = new SignaturePad(canvas, {
            maxWidth: 2,
            onEnd: function() {
                signaturePadChanged();
            }
        });
        clearButton.addEventListener("click", function(event) {
            signaturePad.clear();
            signaturePadChanged();
        });
        undoButton.addEventListener("click", function(event) {
            var data = signaturePad.toData();
            if (data) {
                data.pop();
                signaturePad.fromData(data);
                signaturePadChanged();
            }
        });
        $('#identityConfirmationForm').submit(function(event) {
            signaturePadChanged(); // Update the signature input

            // Check if the signature pad is empty
            if (signaturePad.isEmpty()) {
                // Prevent form submission
                event.preventDefault();

                // Add an error class to the signature label
                $('#signatureLabel').addClass('tm_danger_color');

                // Display an error message (if not already present)
                if ($('#signatureInput-error').length === 0) {
                    $('<p id="signatureInput-error" class="tm_danger_color">Please sign the document.</p>').insertAfter('.signature-pad--body');
                }
            } else {
                // Remove the error class and message if signature is provided
                $('#signatureLabel').removeClass('tm_danger_color');
                $('#signatureInput-error').remove();
            }
        });
    });
</script>
</body></html>
