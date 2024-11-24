@extends('supervisor.admin_dashboard')
@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vendor</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">File Upload</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <!--end breadcrumb-->


        <div class="row">
            <div class="col-xl-12 mx-auto">
               
                <div class="card">
                    <div class="card-body">
                        <input id="fancy-file-upload" type="file" name="files"
                            accept=".jpg, .png, image/jpeg, image/png" multiple>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        {{-- <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Image Uploadify</h6>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <input id="image-uploadify" type="file"
                                accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--end row-->


    </div>
@endsection
@section('script')
    <script>
        $('#fancy-file-upload').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection
