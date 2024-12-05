@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">

        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-3 fw-medium flex-wrap font-text1">
            {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
            <a href="{{ route('qc.haccp_2.index') }}"><span>HACCP 02</span><span class="text-secondary"></span></a>
            <a href="#"><span>Edit</span><span class="text-secondary"></span></a>
        </div>

        <form method="POST" action="{{ route('qc.haccp_2.update', $haccp02Record->id) }}" class="needs-validation" novalidate
            enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">RAW NOT GROUND HACCP RAW MEAT TEMPERATURE LOG</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xl-6">
                            <div class="custom-checkbox">
                                <label class="form-label">Person Performing Check
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select selected_2" name="person_perfo_check" required>
                                    {{--  <option value="" selected disabled>--- Select Plant Manager ---</option>  --}}
                                    <option value="{{ $haccp02Record->person_perfo_check }}">
                                        {{ $haccp02Record->person_perfo_check }}</option>
                                    @foreach ($plantManagerRecord as $plantManager)
                                        <option value="{{ $plantManager->username }}">
                                            {{ $plantManager->username }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">1. Date
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control datepicker" name="date" placeholder="Select Date"
                                required value="{{ $haccp02Record->date }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">2. Time
                                <span class="text-danger">*</span>
                            </label>
                            <input type="time" class="form-control time_picker" name="time" placeholder="Select Time"
                                required value="{{ $haccp02Record->time }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">3. Product name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name"
                                required value="{{ $haccp02Record->product_name }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">4. Internal temp (Chicken 40F)
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="internal_temp"
                                placeholder="Enter Internal Temperature" required value="{{ $haccp02Record->internal_temp }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">5. Initials
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="initials" placeholder="Enter Your Initials"
                                required value="{{ $haccp02Record->initials }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">6. Pre-shipper signature
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="pre_shipper"
                                placeholder="Enter Pre-shipper Signature" required value="{{ $haccp02Record->pre_shipper }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">7. Date
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control datepicker" name="verification_date"
                                placeholder="Select Date" required value="{{ $haccp02Record->verification_date }}">
                        </div>
                    </div>
                </div>
            </div>

            <!-- WEEKLY VERIFICATION -->
            <div class="card shadow-sm">
                <div class="card-header ">
                    <h4 class="mb-0 ">WEEKLY VERIFICATION</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">1. Verified initials
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="verified_initials"
                                placeholder="Enter Verified Initials" required value="{{ $haccp02Record->verified_initials }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">2. Verified date
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control datepicker" name="verified_date"
                                placeholder="Select Verified Date" required value="{{ $haccp02Record->verified_date }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">3. Verified time
                                <span class="text-danger">*</span>
                            </label>
                            <input type="time" class="form-control time_picker" name="verified_time"
                                placeholder="Select Verified Time" required value="{{ $haccp02Record->verified_time }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">4. Verified method
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="verified_method" required>
                                <option value="" selected disabled>Select Method</option>
                                <option value="Direct observation" {{ $haccp02Record->verified_method == 'Direct observation' ? 'selected' : '' }}>Direct observation</option>
                                <option value="Review records" {{ $haccp02Record->verified_method == 'Review records' ? 'selected' : '' }}>Review records</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">Results
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="results" required>
                                <option value="" selected disabled>Select Results</option>
                                <option value="Yes" {{ $haccp02Record->results == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $haccp02Record->results == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 ">
                <div class="col-md-12 mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <a href="{{ route('qc.haccp_2.index') }}" class="btn btn-danger px-4">Back</a>
                    </div>
                </div>
            </div>

        </form>


    </div>
@endsection
@section('script')
    <script>
        $(".datepicker").flatpickr();

        $(".time_picker").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });

        $(".date-time").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });


        //selected_2
        $(".selected_2").select2({
            theme: "bootstrap-5",
            width: $(this).data("width") ?
                $(this).data("width") : $(this).hasClass("w-100") ?
                "100%" : "style",
            placeholder: $(this).data("placeholder"),
        });
    </script>
@endsection
