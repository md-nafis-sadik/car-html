@extends('layouts.account-v2', [
    'title' => 'Dashboard Profile'
])
@section('head-info')
    <title>ID Documents - {{ config('app.name') }}</title>
    <meta name="description" content="Upload ID documents on the {{ config('app.name') }} website." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="ID Documents - {{ config('app.name') }}" />
    <meta property="og:description" content="Upload ID documents on the {{ config('app.name') }} website." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel='stylesheet' href='{{ asset('css/dropzone.min.css') }}' type='text/css' media='all' />

@endsection
@section('main')

    <div class="d-flex mb-5 align-items-center justify-content-between gap-10">
        <h3 class="text-b1-semibold d-flex align-items-center gap-3 text-light">
            <span class="oy-dashboard__toggler">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75 1.25V18.25M0.75 7.15C0.75 4.91 0.75 3.79 1.186 2.934C1.56949 2.18139 2.18139 1.56949 2.934 1.186C3.79 0.75 4.91 0.75 7.15 0.75H12.35C14.59 0.75 15.71 0.75 16.566 1.186C17.3186 1.56949 17.9305 2.18139 18.314 2.934C18.75 3.79 18.75 4.91 18.75 7.15V12.35C18.75 14.59 18.75 15.71 18.314 16.566C17.9305 17.3186 17.3186 17.9305 16.566 18.314C15.71 18.75 14.59 18.75 12.35 18.75H7.15C4.91 18.75 3.79 18.75 2.934 18.314C2.18139 17.9305 1.56949 17.3186 1.186 16.566C0.75 15.71 0.75 14.59 0.75 12.35V7.15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            ID Docs
        </h3>
        <a href="{{ route('account.reservations') }}" class="btn text-b5-medium py-3 btn--gradient-primary">
            <div class="btn__text">Bookings</div>
        </a>
    </div>

    <!-- card section  -->

    <div class="card p-4 p-lg-5 rounded-5">
        <div class="d-flex justify-content-center justify-content-lg-between align-items-center gap-3 mb-4 mb-lg-5">
            <h2 class="text-h5 text-dark mb-3">Bookings</h2>

            <div class="d-none d-md-block">
                <a href="{{ route('account.reservations') }}" class="btn btn--gradient-primary">
                    <div class="btn__text">View All Bookings</div>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="text-dark text-b3-medium mb-3">Securely upload ID documents below if requested. We currently accept the following formats:</div>

                <ul class="list-disc mb-4 text-b4-regular text-secondary">
                    <li>JPEG/JPG</li>
                    <li>PNG</li>
                    <li>PDF</li>
                </ul>
                <div class="text-secondary text-b4-regular mb-4">We recommend using the HP Smart app if you don't have a scanner readily available.</div>

                <div class="text-dark text-b3-medium mb-3">Required documents:</div>
                <ul class="list-disc mb-4 text-b4-regular text-secondary">
                    <li>Driving Licence (Front & Back)</li>
                    <li>Proof of Address - Dated within the last 3 months (Utility Bill - Gas/Water/Electricity/Council Tax Bill or Bank Statement)</li>
                </ul>
            </div>
        </div>

        <div class="row g-3 mt-3 mb-4">
            <div class="col-sm-6 col-lg-3">
                <div class="from-group">
                    <input type="text" class="form-control text-center" placeholder="Type">
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="from-group">
                    <input type="text" class="form-control text-center" placeholder="Date">
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="from-group">
                    <input type="text" class="form-control text-center" placeholder="Status">
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="from-group">
                    <input type="text" class="form-control text-center" placeholder="Message">
                </div>
            </div>
        </div>

        <!-- <table id="id-documents" class="table-auto bg-white w-full mt-16 border-collapse">
            <thead>
            <tr>
                <th class="px-4 py-2 border-2">Document</th>
                <th class="px-4 py-2 border-2">Type</th>
                <th class="px-4 py-2 border-2">Date</th>
                <th class="px-4 py-2 border-2">Status</th>
                <th class="px-4 py-2 border-2">Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach($documents as $document)
                <tr>
                    <td class="px-4 py-2 border-2">{{ $document->original_filename }}</td>
                    <td class="px-4 py-2 border-2">
                        @if($document->id_type == "utility")
                            Proof Of Address
                        @elseif($document->id_type == "license")
                            Driving Licence
                        @elseif($document->id_type == "other")
                            Other
                        @endif
                    </td>
                    <td class="px-4 py-2 border-2">{{ \Carbon\Carbon::parse($document->created_at)->format('d-m-Y H:i:s') }} (Europe/London)</td>
                    <td class="px-4 py-2 border-2">
                        @if($document->status == 'approved')
                            Approved
                        @elseif($document->status == 'denied')
                            Denied
                        @elseif($document->status == 'uploaded')
                            Uploaded
                        @endif
                    </td>
                    <td class="px-4 py-2 border-2">{{ $document->comment ? $document->comment : 'No comment' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> -->

        @if(count($documents) == 0)
            <div class="text-center text-b3-medium mb-4">You have not yet uploaded any documents.</div>
        @endif
        
        <div class="form-group mb-5">
            <label class="text-dark text-b3-medium mb-3" for="document-type">Choose Document Type (required)</label>
            <select name="" id="" class="form-select e-select ps-4 ps-lg-5 rounded-3">
                <option value="">Driving Licence</option>   
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

        <div class="mt-5">
            <form action="{{ route('account.documents.upload') }}" class="dropzone"></form>
        </div>

        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <div class="card border-{{ $msg }} border-start border-4">
                    <div class="card-body bg-{{ $msg }}-subtle text-{{ $msg }}-emphasis">
                        <p class="card-text mb-0 fw-bold">{!! Session::get('alert-' . $msg) !!}</p>
                    </div>
                </div>
            @endif
        @endforeach

        @if($errors->any())
            <div class="alert alert-danger border-start border-4 border-danger mt-4" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li class="fw-bold">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Button -->
        <div class="d-md-none mt-5">
            <a href="{{ route('account.reservations') }}" class="btn w-100 btn--gradient-primary">
                <div class="btn__text">View All Bookings</div>
            </a>
        </div>
    </div>

    @push('js')
        <script type='text/javascript' src='/js/plugins/dropzone/dropzone.min.js'></script>

        <!-- Script -->
        <script>
            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            var document_type = document.getElementById('document_type');

            Dropzone.autoDiscover = false;
            var myDropzone = new Dropzone(".dropzone",{
                maxFilesize: 3,  // 3 mb
                acceptedFiles: ".jpeg,.jpg,.png,.pdf",
                uploadMultiple: false,
                dictDefaultMessage: "Drop your document(s) here to upload",
            });
            myDropzone.on("sending", function(file, xhr, formData) {
                if(document_type.value === "") {
                    alert("You must choose a document type before uploading!");
                    return false;
                } else {
                    formData.append("_token", CSRF_TOKEN);
                    formData.append("document_type", document_type.value);
                }
            });
            myDropzone.on("complete", function(file) {
                setTimeout(function(){ location.reload(); }, 2000);
            });
        </script>
    @endpush
@endsection
