@extends('layouts.account', [
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
    @include('components.breadcrumb', ['items' => [
           ['title' => 'Account', 'url' => route('account')],
           ['title' => 'ID Docs']
       ]])


    <div id="default-tab-content">
        <div id="__personal" role="tabpanel" aria-labelledby="__personal-tab">
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between text-[#8C94A7]">

                    <div class="mt-5 space-y-6">
                        <p class="font-bold">Securely upload ID documents below if requested. We currently accept the following formats:</p>
                        <ul class="list-disc ml-6">
                            <li>JPEG/JPG</li>
                            <li>PNG</li>
                            <li>PDF</li>
                        </ul>
                        <p class="mt-3">We recommend using the HP Smart app if you don't have a scanner readily available.</p>

                        <div class="mt-8">
                            <p class="font-bold">Required documents:</p>
                            <ul class="list-disc ml-6">
                                <li>Driving Licence (Front & Back)</li>
                                <li>Proof of Address - Dated within the last 3 months (Utility Bill - Gas/Water/Electricity/Council Tax Bill or Bank Statement)</li>
                            </ul>
                        </div>

                        <table id="id-documents" class="table-auto bg-white w-full mt-16 border-collapse">
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
                        </table>

                        @if(count($documents) == 0)
                            <p class="text-center font-bold mt-2">You have not yet uploaded any documents.</p>
                        @endif

                        <div class="mt-6">
                            <label for="document_type" class="block font-bold mt-2">Choose Document Type (required)</label>
                            <select id="document_type" name="document_type" class="mt-2 block w-full border border-gray-300 rounded py-1 px-2">
                                <option value="license">Driving Licence</option>
                                <option value="utility">Proof Of Address</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mt-6">
                            <form action="{{ route('account.documents.upload') }}" class="dropzone"></form>
                        </div>

                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <div class="bg-{{ $msg }}-200 border-l-4 border-{{ $msg }}-500 text-{{ $msg }}-900 p-4 rounded mt-4">
                                    <p class="font-bold mb-0">{!! Session::get('alert-' . $msg) !!}</p>
                                </div>
                            @endif
                        @endforeach

                        @if($errors->any())
                            <div class="bg-red-200 border-l-4 border-red-500 text-red-900 p-4 rounded mt-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="font-bold mb-0">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>


                </div>

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
