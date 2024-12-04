@extends('QC.admin_dashboard')
@section('content')
    <div class="main-content">
        <!-- PRE-OP/OPERATIONAL INSPECTION CONTINUOUS COMMENT SHEET -->
        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-primary ">
                <h4 class="mb-0 text-white">PRE-OP/OPERATIONAL INSPECTION CONTINUOUS COMMENT SHEET
                    <p class="mb-0 fs-6 fw-normal">C.W.S.R.- Cleaned, washed, sanitized, and re-inspected prior
                        to production.</p>
                </h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('qc.sqf_3.store') }}" class="row g-3 needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="px-4 g-3 mt-0 row justify-content-between">

                        <div class="col-xl-6">
                            <div class="custom-checkbox">
                                <label for="person_perfo_check" class="form-label">Person Performing Check
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" id="person_perfo_check" name="person_perfo_check" required>
                                    <option value="" selected disabled>--- Select Plant Manager ---</option>
                                    @foreach ($plantManagerRecord as $plantManager)
                                        <option value="{{ $plantManager->username }}">{{ $plantManager->username }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label class="form-label">1. Date <span class="text-danger">*</span></label>
                            <input type="text" class="form-control datepicker" name="date" id="date"
                                placeholder="Select Date" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">2. SSOP Form <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="ssop_form_number" id="ssop_form_number"
                                placeholder="Enter SSOP Form #" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">3. Area Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="area_number" id="area_number"
                                placeholder="Enter Area Number" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">4. Deficiencies <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="deficiencies" id="deficiencies"
                                placeholder="Enter Deficiencies" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">5. Corrective Actions <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="corrective_actions" id="corrective_actions"
                                placeholder="Enter Corrective Actions" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">6. Preventive Actions <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="preventive_actions" id="preventive_actions"
                                placeholder="Enter Preventive Actions" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">7. Time Completed <span class="text-danger">*</span></label>
                            <input type="text" class="form-control time-picker" name="time_completed" id="time_completed"
                                placeholder="Select Time Completed" required>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label">8. Initial <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="initial" id="initial"
                                placeholder="Enter Initial" required>
                        </div>
                    </div>

                    <hr class="border-dashed" />
                    <div class="row px-4 mt-3 mb-4">
                        <div class="col-md-12">
                            <!-- successAlertMessage -->
                            <button type="submit" class="btn btn-primary ">
                                <i class="feather-save me-2"></i>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(".datepicker").flatpickr();

        $(".time-picker").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });

        $(".date-time").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>

    <script src="{{ asset('assets/plugins/select2/js/qc-customs.js') }}"></script>
@endsection
