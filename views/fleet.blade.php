@extends('layouts.app-v2')
@section('head-info')
    <title>Our Fleet | {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About us | {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <meta property="og:url" content="https://autofusionrepairs.co.uk/about" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <!-- ==================== Section: OUR Available Cars ==================== -->
     <section class="section-padding-y overflow-hidden">
        <div class="container oy-section-title">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-md">
                    <h3 class="text-h2 mb-0">Our Available Cars</h3>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center gap-4 " id="filter-container">
                        <!-- Vehicle Brand -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.8468 16.3215L17.7017 13.1928L18.3224 12.7442C18.9299 12.3053 19.1822 11.533 18.9502 10.8226L18.5263 9.52516C18.4815 9.38803 18.4815 9.24304 18.5263 9.10596L18.9502 7.80848C19.1822 7.0981 18.9299 6.32581 18.3224 5.88688L17.2128 5.08493C17.0955 5.00019 17.0098 4.88293 16.9651 4.74579L16.5412 3.44832C16.3091 2.73798 15.6487 2.26067 14.8978 2.26067H13.5261C13.3812 2.26067 13.2426 2.21587 13.1253 2.13113L12.0157 1.32923C11.4082 0.890256 10.5918 0.890256 9.98429 1.32923L8.87461 2.13118C8.75735 2.21593 8.61874 2.26072 8.47381 2.26072H7.10219C6.35126 2.26072 5.69082 2.73798 5.45875 3.44837L5.03488 4.74589C4.99011 4.88293 4.90444 5.00019 4.78717 5.08499L3.67754 5.88688C3.07004 6.32591 2.81777 7.09815 3.04979 7.80848L3.47366 9.10596C3.51844 9.24304 3.51844 9.38803 3.47366 9.52511L3.04979 10.8226C2.81777 11.533 3.07004 12.3053 3.67754 12.7442L4.29823 13.1928L1.15315 16.3214C1.02835 16.4456 0.974953 16.624 1.01109 16.7958C1.04724 16.9677 1.16811 17.1098 1.3325 17.1738L3.85852 18.1568L4.84685 20.6693C4.91113 20.8328 5.05402 20.953 5.22684 20.989C5.26246 20.9964 5.29834 21 5.33395 21C5.4712 21 5.60468 20.9462 5.7038 20.8476L9.5701 17.0025L9.98429 17.3018C10.2881 17.5213 10.644 17.631 11 17.631C11.3559 17.631 11.7119 17.5213 12.0157 17.3018L12.4299 17.0024L16.2963 20.8476C16.3954 20.9462 16.5288 21 16.6661 21C16.7017 21 16.7375 20.9964 16.7732 20.989C16.946 20.953 17.0888 20.8328 17.1532 20.6693L18.1415 18.1568L20.6675 17.1738C20.8319 17.1098 20.9527 16.9677 20.9889 16.7958C21.0251 16.624 20.9716 16.4456 20.8468 16.3215ZM5.52962 19.5495L4.7493 17.5658C4.69616 17.4306 4.58868 17.3237 4.45279 17.2708L2.45839 16.4947L5.04634 13.9202L5.4588 15.1828C5.69088 15.8931 6.35126 16.3704 7.10224 16.3704H8.47386C8.54855 16.3704 8.62151 16.3825 8.69076 16.4056L5.52962 19.5495ZM10.5991 16.4601L9.48949 15.6581C9.1923 15.4434 8.84114 15.3299 8.47386 15.3299H7.10224C6.80589 15.3299 6.54526 15.1416 6.45373 14.8612L6.02986 13.5638C5.92143 13.2318 5.71755 12.9466 5.44045 12.7345C5.43093 12.7263 5.42109 12.7188 5.41116 12.7115C5.40807 12.7092 5.40524 12.7067 5.40211 12.7044L4.29248 11.9025C4.05277 11.7293 3.95319 11.4245 4.04477 11.1442L4.46864 9.84672C4.58214 9.49926 4.58214 9.13197 4.46864 8.7845L4.04477 7.48708C3.95319 7.20672 4.05277 6.90197 4.29248 6.72868L5.40211 5.92678C5.69935 5.71198 5.91641 5.41482 6.02986 5.06745L6.45373 3.76998C6.54526 3.48962 6.80594 3.3013 7.10224 3.3013H8.47386C8.84119 3.3013 9.19241 3.18778 9.48955 2.97303L10.5991 2.17119C10.8389 1.99795 11.1612 1.99789 11.4008 2.17119L12.5105 2.97313C12.8076 3.18789 13.1588 3.3014 13.5261 3.3014H14.8978C15.1941 3.3014 15.4547 3.48978 15.5463 3.77008L15.9701 5.06751C16.0836 5.41497 16.3007 5.71213 16.5979 5.92689L17.7076 6.72883C17.9473 6.90207 18.0468 7.20683 17.9552 7.48718L17.5314 8.78471C17.4179 9.13212 17.4179 9.49941 17.5314 9.84688L17.9552 11.1444C18.0468 11.4247 17.9473 11.7294 17.7075 11.9027L16.598 12.7045C16.5941 12.7074 16.5906 12.7105 16.5867 12.7133C16.5779 12.7199 16.5691 12.7266 16.5606 12.7338C16.283 12.946 16.0787 13.2315 15.9701 13.5639L15.5463 14.8614C15.4547 15.1418 15.1941 15.3301 14.8978 15.3301H13.5261C13.1589 15.3301 12.8077 15.4436 12.5105 15.6584L11.4009 16.4602C11.161 16.6334 10.8388 16.6332 10.5991 16.4601ZM17.5472 17.2708C17.4113 17.3237 17.3039 17.4306 17.2507 17.5658L16.4704 19.5495L13.3092 16.4057C13.3784 16.3825 13.4514 16.3705 13.5261 16.3705H14.8978C15.6486 16.3705 16.3091 15.8932 16.5411 15.1829L16.9536 13.9202L19.5417 16.4947L17.5472 17.2708Z" fill="#545A64"/>
                                    <path d="M12.773 12.8019C12.862 12.8019 12.9507 12.7742 13.0256 12.7199C13.1579 12.6237 13.2242 12.4608 13.1966 12.2996L12.8552 10.3094L14.3012 8.89997C14.4183 8.7858 14.4604 8.61505 14.4099 8.4595C14.3593 8.30395 14.2248 8.1906 14.063 8.16705L12.0647 7.87667L11.1711 6.06592C11.0987 5.91927 10.9493 5.82642 10.7857 5.82642C10.6222 5.82642 10.4728 5.91927 10.4004 6.06592L9.50683 7.87667L7.50857 8.16705C7.3467 8.19056 7.21225 8.30395 7.16168 8.4595C7.11111 8.61505 7.1533 8.7858 7.27043 8.89997L8.71637 10.3094L8.37503 12.2996C8.34736 12.4608 8.41362 12.6237 8.54596 12.7199C8.67826 12.816 8.8537 12.8286 8.99846 12.7526L10.7857 11.813L12.5731 12.7525C12.6359 12.7856 12.7046 12.8019 12.773 12.8019ZM10.9857 10.9472C10.9231 10.9143 10.8544 10.8978 10.7857 10.8978C10.7171 10.8978 10.6484 10.9143 10.5858 10.9472L9.3692 11.5868L9.60157 10.232C9.62551 10.0927 9.57927 9.95043 9.478 9.85169L8.49375 8.89228L9.85397 8.69458C9.99392 8.67426 10.1149 8.58634 10.1775 8.45954L10.7857 7.22703L11.394 8.45958C11.4566 8.58639 11.5776 8.6743 11.7175 8.69462L13.0778 8.89232L12.0935 9.85173C11.9923 9.95043 11.946 10.0927 11.9699 10.2321L12.2023 11.5868L10.9857 10.9472Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select" e-search="true">
                                <option value="">Vehicle Brand</option>   
                                <option value="2">Vehicle 2</option>   
                                <option value="3">Vehicle 3</option>   
                                <option value="4">Vehicle 4</option>   
                                <option value="5">Vehicle 5</option>   
                                <option value="6">Vehicle 6</option>   
                                <option value="7">Vehicle 7</option>   
                                <option value="8">Vehicle 8</option>   
                                <option value="9">Vehicle 9</option>   
                            </select>
                        </div>
                        <!-- Vehicle Type -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7615 10.0468L18.9732 9.13925H19.3123C19.899 9.13925 20.3757 8.66258 20.3757 8.07592V7.72758C20.3757 7.14092 19.899 6.66425 19.3123 6.66425H19.0098C18.7532 6.66425 18.5515 6.86592 18.5515 7.12258C18.5515 7.37925 18.7532 7.58092 19.0098 7.58092H19.3123C19.3948 7.58092 19.459 7.64508 19.459 7.72758V8.07592C19.459 8.15842 19.3948 8.22258 19.3123 8.22258H18.6707L17.9832 5.97675C17.534 4.52842 16.2232 3.56592 14.7107 3.56592H7.28568C5.77318 3.56592 4.46234 4.53758 4.01318 5.97675L3.32568 8.22258H2.68401C2.60151 8.22258 2.53734 8.15842 2.53734 8.07592V7.72758C2.53734 7.64508 2.60151 7.58092 2.68401 7.58092H2.98651C3.24318 7.58092 3.44484 7.37925 3.44484 7.12258C3.44484 6.86592 3.24318 6.66425 2.98651 6.66425H2.68401C2.09734 6.66425 1.62068 7.14092 1.62068 7.72758V8.07592C1.62068 8.66258 2.09734 9.13925 2.68401 9.13925H3.02318L2.23484 10.0468C1.73984 10.6151 1.46484 11.3484 1.46484 12.1093V14.7401C1.46484 15.2993 1.77651 15.7851 2.24401 16.0418V17.0776C2.24401 17.8384 2.85818 18.4526 3.61901 18.4526H5.19568C5.95651 18.4526 6.57068 17.8384 6.57068 17.0776V16.2343H15.4257V17.0776C15.4257 17.8384 16.0398 18.4526 16.8007 18.4526H18.3773C19.1382 18.4526 19.7523 17.8384 19.7523 17.0776V16.0418C20.2107 15.7851 20.5315 15.3084 20.5315 14.7401V12.1093C20.5315 11.3484 20.2565 10.6151 19.7615 10.0468ZM2.93151 10.6518L3.81151 9.64342C3.85734 9.59758 3.88484 9.54258 3.90318 9.47842L4.08651 8.88258C4.08651 8.88258 4.10484 8.82758 4.11401 8.80008L4.90234 6.25175C5.23234 5.19758 6.19484 4.48258 7.29484 4.48258H14.7107C15.8198 4.48258 16.7823 5.18842 17.1032 6.25175L17.8915 8.80008C17.8915 8.80008 17.9007 8.85508 17.919 8.88258L18.1023 9.47842C18.1207 9.54258 18.1482 9.59758 18.194 9.64342L19.074 10.6518C19.4223 11.0551 19.624 11.5776 19.624 12.1184V13.4476H17.534C17.2315 13.4476 16.9748 13.2001 16.9748 12.8884V12.3018C16.9748 11.9993 17.2223 11.7426 17.534 11.7426H18.6523C18.909 11.7426 19.1107 11.5409 19.1107 11.2843C19.1107 11.0276 18.909 10.8259 18.6523 10.8259H17.534C16.7182 10.8259 16.0582 11.4859 16.0582 12.3018V12.8884C16.0582 13.7043 16.7182 14.3643 17.534 14.3643H19.624V14.7493C19.624 15.0609 19.3673 15.3176 19.0557 15.3176H14.344V13.7501C14.344 13.4934 14.1423 13.2918 13.8857 13.2918H8.12901C7.87234 13.2918 7.67068 13.4934 7.67068 13.7501V15.3176H2.95901C2.64734 15.3176 2.39068 15.0609 2.39068 14.7493V14.3643H4.48068C5.29651 14.3643 5.95651 13.7043 5.95651 12.8884V12.3018C5.95651 11.4859 5.29651 10.8259 4.48068 10.8259H3.36234C3.10568 10.8259 2.90401 11.0276 2.90401 11.2843C2.90401 11.5409 3.10568 11.7426 3.36234 11.7426H4.48068C4.78318 11.7426 5.03984 11.9901 5.03984 12.3018V12.8884C5.03984 13.1909 4.79234 13.4476 4.48068 13.4476H2.39068V12.1184C2.39068 11.5776 2.58318 11.0643 2.94068 10.6518H2.93151ZM5.65401 17.0684C5.65401 17.3251 5.45234 17.5268 5.19568 17.5268H3.61901C3.36234 17.5268 3.16068 17.3251 3.16068 17.0684V16.2251H5.65401V17.0684ZM8.57818 15.3084V14.1993H13.4182V15.3084H8.57818ZM18.8357 17.0684C18.8357 17.3251 18.634 17.5268 18.3773 17.5268H16.8007C16.544 17.5268 16.3423 17.3251 16.3423 17.0684V16.2251H18.8357V17.0684Z" fill="#545A64"/>
                                    <path d="M5.48958 9.13005H16.5079C16.7646 9.13005 16.9663 8.92838 16.9663 8.67171C16.9663 8.41505 16.7646 8.21338 16.5079 8.21338H5.48958C5.23292 8.21338 5.03125 8.41505 5.03125 8.67171C5.03125 8.92838 5.23292 9.13005 5.48958 9.13005Z" fill="#545A64"/>
                                    <path d="M14.7496 10.8167H7.2513C6.99464 10.8167 6.79297 11.0183 6.79297 11.275C6.79297 11.5317 6.99464 11.7333 7.2513 11.7333H14.7496C15.0063 11.7333 15.208 11.5317 15.208 11.275C15.208 11.0183 15.0063 10.8167 14.7496 10.8167Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select" e-search="true">
                                <option value="">Vehicle Brand</option>   
                                <option value="2">Vehicle 2</option>   
                                <option value="3">Vehicle 3</option>   
                                <option value="4">Vehicle 4</option>   
                                <option value="5">Vehicle 5</option>   
                                <option value="6">Vehicle 6</option>   
                                <option value="7">Vehicle 7</option>   
                                <option value="8">Vehicle 8</option>   
                                <option value="9">Vehicle 9</option>   
                            </select>
                        </div>
                        <!-- MIN AGE -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5625 1.375C7.94221 1.375 8.25 1.68281 8.25 2.0625V2.75H11.6875C12.0672 2.75 12.375 3.05781 12.375 3.4375C12.375 3.81719 12.0672 4.125 11.6875 4.125H8.25V4.8125C8.25 5.19219 7.94221 5.5 7.5625 5.5C7.18279 5.5 6.875 5.19219 6.875 4.8125V4.125H5.5C3.98122 4.125 2.75 5.35622 2.75 6.875V16.5C2.75 18.0188 3.98122 19.25 5.5 19.25H9.625C10.0047 19.25 10.3125 19.5578 10.3125 19.9375C10.3125 20.3172 10.0047 20.625 9.625 20.625H5.5C3.22182 20.625 1.375 18.7782 1.375 16.5V6.875C1.375 4.59682 3.22182 2.75 5.5 2.75H6.875V2.0625C6.875 1.68281 7.18279 1.375 7.5625 1.375ZM14.4375 1.375C14.8172 1.375 15.125 1.68281 15.125 2.0625V2.75H16.5C18.7782 2.75 20.625 4.59682 20.625 6.875V9.625C20.625 10.0047 20.3172 10.3125 19.9375 10.3125C19.5578 10.3125 19.25 10.0047 19.25 9.625V6.875C19.25 5.35622 18.0188 4.125 16.5 4.125H15.125V4.8125C15.125 5.19219 14.8172 5.5 14.4375 5.5C14.0578 5.5 13.75 5.19219 13.75 4.8125V2.0625C13.75 1.68281 14.0578 1.375 14.4375 1.375ZM5.5 7.5625C5.12031 7.5625 4.8125 7.87029 4.8125 8.25C4.8125 8.62971 5.12031 8.9375 5.5 8.9375H16.5C16.8797 8.9375 17.1875 8.62971 17.1875 8.25C17.1875 7.87029 16.8797 7.5625 16.5 7.5625H5.5ZM17.6736 15.6111L15.9549 17.3299C15.6864 17.5984 15.2511 17.5984 14.9826 17.3299L13.9514 16.2986C13.6829 16.0302 13.6829 15.5948 13.9514 15.3264C14.2198 15.0579 14.6552 15.0579 14.9236 15.3264L15.4688 15.8715L16.7014 14.6389C16.9698 14.3704 17.4052 14.3704 17.6736 14.6389C17.9421 14.9073 17.9421 15.3427 17.6736 15.6111ZM6.875 12.0312C6.875 12.6008 6.4133 13.0625 5.84375 13.0625C5.2742 13.0625 4.8125 12.6008 4.8125 12.0312C4.8125 11.4617 5.2742 11 5.84375 11C6.4133 11 6.875 11.4617 6.875 12.0312ZM5.84375 17.1875C6.4133 17.1875 6.875 16.7258 6.875 16.1562C6.875 15.5867 6.4133 15.125 5.84375 15.125C5.2742 15.125 4.8125 15.5867 4.8125 16.1562C4.8125 16.7258 5.2742 17.1875 5.84375 17.1875ZM12.375 15.8125C12.375 13.914 13.914 12.375 15.8125 12.375C17.711 12.375 19.25 13.914 19.25 15.8125C19.25 17.711 17.711 19.25 15.8125 19.25C13.914 19.25 12.375 17.711 12.375 15.8125ZM15.8125 11C13.1546 11 11 13.1546 11 15.8125C11 18.4704 13.1546 20.625 15.8125 20.625C18.4704 20.625 20.625 18.4704 20.625 15.8125C20.625 13.1546 18.4704 11 15.8125 11Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select">
                                <option value="">Min Age</option>   
                                <option value="2">20</option>   
                                <option value="3">30</option>   
                                <option value="4">40</option>   
                                <option value="5">50</option>   
                                <option value="6">60</option>   
                            </select>
                        </div>
                        <!-- MIN AGE -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 19C7.59602 19 5.33589 18.0639 3.63602 16.364C1.93614 14.6641 1 12.404 1 10C1 7.59602 1.93618 5.33593 3.63602 3.63602C5.33586 1.93611 7.59602 1 10 1C12.404 1 14.6641 1.93614 16.364 3.63602C18.0639 5.33589 19 7.59602 19 10C19 12.404 18.0638 14.6641 16.364 16.364C14.6641 18.0639 12.404 19 10 19ZM10 2.125C5.65771 2.125 2.125 5.65771 2.125 10C2.125 14.3423 5.65771 17.875 10 17.875C14.3423 17.875 17.875 14.3423 17.875 10C17.875 5.65771 14.3423 2.125 10 2.125Z" fill="#545A64"/>
                                    <path d="M10 9.5C9.081 9.5 8.33333 8.93925 8.33333 8.25C8.33333 7.56075 9.081 7 10 7C10.919 7 11.6667 7.56075 11.6667 8.25C11.6667 8.52612 11.9651 8.75 12.3333 8.75C12.7015 8.75 13 8.52612 13 8.25C13 7.18122 12.0009 6.28475 10.6667 6.05669V5.5C10.6667 5.22387 10.3682 5 10 5C9.63179 5 9.33333 5.22387 9.33333 5.5V6.05669C7.99908 6.28475 7 7.18122 7 8.25C7 9.49066 8.34579 10.5 10 10.5C10.919 10.5 11.6667 11.0608 11.6667 11.75C11.6667 12.4392 10.919 13 10 13C9.081 13 8.33333 12.4392 8.33333 11.75C8.33333 11.4739 8.03488 11.25 7.66667 11.25C7.29846 11.25 7 11.4739 7 11.75C7 12.8188 7.99908 13.7153 9.33333 13.9433V14.5C9.33333 14.7761 9.63179 15 10 15C10.3682 15 10.6667 14.7761 10.6667 14.5V13.9433C12.0009 13.7153 13 12.8188 13 11.75C13 10.5093 11.6542 9.5 10 9.5Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select">
                                <option value="">Price</option>   
                                <option value="2">10k-20k</option>   
                                <option value="3">20k-30k</option>   
                                <option value="4">30k-50</option>   
                                <option value="5">50k-100k</option>   
                                <option value="6">100k-300k</option>   
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" data-equalize="min-height" data-equalize-target=".card--product__title" data-equalize-var="--equal-heading-min-height">
            <div class="row g-4 g-lg-5">
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-2.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini </span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Evo Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,800/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-3.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini </span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Urus</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Ferrari</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Ferrari F8 Tributo</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-2.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Performante Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-3.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan EVO</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini </span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Performante Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Performante Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{ asset('assets-v2/img/products/product-1.png') }}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination-default mt-5 d-flex flex-wrap justify-content-center align-items-center gap-4">
            <a href="#" class="btn--circle outlined" data-pulse-direction="right">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <!-- Active -->
            <span class="btn--circle text-b1-medium is-active">01</span>

            <a href="#" class="btn--circle text-b1-medium">02</a>
            <a href="#" class="btn--circle text-b1-medium">03</a>
            <a href="#" class="btn--circle text-b1-medium outlined" data-pulse-direction="left">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a>
        </div>
     </section>
    <!-- /Section: OUR Available Cars -->    

    
    <!-- ==================== Section: : OUR Fleet Slider ==================== -->
    <script src="{{ asset('assets-v2/js/components/oy-swiper.js') }}" defer></script>
     <section class="section-padding-y overflow-hidden">
        <div class="container oy-section-title">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="text-center text-lg-start">
                        <h3 class="text-h2">Start Your Journey with Our Fleet</h3>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-auto">
                    <div class="d-flex align-items-center gap-4">
                        <span class="btn--circle outlined" id="oy-slider-journey-arrow--prev" data-pulse-direction="right">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="btn--circle outlined" id="oy-slider-journey-arrow--next" data-pulse-direction="left">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <oy-swiper class="overflow-visible" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-loop="true" data-speed="600" data-lazy="true" data-space="30" data-autoplay="false" data-autoplay-delay="3000" data-pagination="#oy-slider-journey--pagination" data-prev="#oy-slider-journey-arrow--prev" data-next="#oy-slider-journey-arrow--next">
                <div class="swiper-wrapper">
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-audi.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-audi.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Audi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-bmw.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-bmw.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-bentley.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-bentley.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-audi.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-audi.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Audi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-bmw.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-bmw.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="{{ asset('assets-v2/img/brands/banner-bentley.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('assets-v2/img/brands/logo-bentley.png') }}" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </oy-swiper>
            <div class="mt-5 d-lg-none">
                <div class="pagination-default" id="oy-slider-journey--pagination"></div>
            </div>
        </div>
     </section>
    <!-- /Section: : OUR Fleet Slider -->
    
    <!-- ==================== Section: : Marquee Slider ==================== -->
    <script src="{{ asset('assets-v2/js/components/marquee-slider.js') }}"></script>    
    <section class="oy-testimonial overflow-hidden section-padding-y">
        <div class="container">
            <div class="oy-section-title text-center space-y-3">
                <div class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-uppercase">
                    <span>Testimonial</span>
                </div>
                <h3 class="text-h2">Trusted by Thousands of Clients</h3>
            </div>
        </div>

        <!-- Desktop: Start Testimonial Slider -->
        <marquee-slider class="marquee-slider oy-testimonial-slider" data-direction="left" data-marquee-speed="100" data-marquee-gap="20">
            <div class="marquee-track">
                <!-- Testimonial Item -->
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client1.png') }}" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Char and ems</h6>
                            <p class="text-b5-regular">18 days ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium" data-testimonial-content>
                        <div class="testimonial-text">
                            <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am. They took the time to explain what needed to be done and gave me a fair price. The service was excellent and I would definitely recommend them to anyone looking for a reliable mechanic. I was particularly impressed with how they handled my car with care and attention to detail. The whole experience was stress-free and professional. I'll certainly be coming back for any future work on my vehicle.<button class="read-more-btn text-b5-medium" data-read-more><span class="read-more-text">Read more</span><span class="read-less-text">Read less</span></button></p>
                        </div>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                    </div>
                </div>

                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client2.png') }}" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Andrewemslie</h6>
                            <p class="text-b5-regular">1 month ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>"Wouldn't go anywhere else to get my car fixed. Great staff and service.great work kamil"</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client3.png') }}" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Michael Moran</h6>
                            <p class="text-b5-regular">3 Months ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>"Booked my car in for it's service, all went well and the staff were very helpful. Would have no problem recommending this garage."</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client4.png') }}" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Eileen Pillar</h6>
                            <p class="text-b5-regular">6 months ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>"Great customer service, polite, helpful and respectful. Great price to replace my tyre, would highly recommend them"</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client7.png') }}" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Char and ems</h6>
                            <p class="text-b5-regular">18 days ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client6.png') }}" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Char and ems</h6>
                            <p class="text-b5-regular">18 days ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                    </div>
                </div>
            </div>
        </marquee-slider>
        </div>
        <div class="d-none d-md-block">
            <marquee-slider class="marquee-slider oy-testimonial-slider" data-direction="right" data-marquee-speed="100" data-marquee-gap="20">
                <div class="marquee-track">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client1.png') }}" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Char and ems</h6>
                                <p class="text-b5-regular">18 days ago</p>
                            </div>
                        </div>
                        <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client2.png') }}" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Andrewemslie</h6>
                                <p class="text-b5-regular">1 month ago</p>
                            </div>
                        </div>
                    <div class="item-content text-b5-medium">
                        <p>"Wouldn't go anywhere else to get my car fixed. Great staff and service.great work kamil"</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client3.png') }}" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Michael Moran</h6>
                                <p class="text-b5-regular">3 Months ago</p>
                            </div>
                        </div>
                    <div class="item-content text-b5-medium">
                        <p>"Booked my car in for it's service, all went well and the staff were very helpful. Would have no problem recommending this garage."</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client4.png') }}" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Eileen Pillar</h6>
                                <p class="text-b5-regular">6 months ago</p>
                            </div>
                        </div>
                    <div class="item-content text-b5-medium">
                        <p>"Great customer service, polite, helpful and respectful. Great price to replace my tyre, would highly recommend them</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client7.png') }}" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Char and ems</h6>
                                <p class="text-b5-regular">18 days ago</p>
                            </div>
                        </div>
                        <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets-v2/img/home/r_client6.png') }}" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Char and ems</h6>
                                <p class="text-b5-regular">18 days ago</p>
                            </div>
                        </div>
                        <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="{{ asset('assets-v2/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection