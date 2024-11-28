@extends('qc.admin_dashboard')
@section('content')
    <form method="post" action="files_php/SSOP-03.php">
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
                    <div class="row mb-3">
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">1. Date</label>
                            <input type="date" class="form-control" name="date" id="date"
                                placeholder="Select Date">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">2. SSOP Form #</label>
                            <input type="text" class="form-control" name="ssop_form_number" id="ssop-form-number"
                                placeholder="Enter SSOP Form #">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">3. Area Number</label>
                            <input type="text" class="form-control" name="area_number" id="area-number"
                                placeholder="Enter Area Number">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">4. Deficiencies</label>
                            <input type="text" class="form-control" name="deficiencies" id="deficiencies"
                                placeholder="Enter Deficiencies">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">5. Corrective Actions</label>
                            <input type="text" class="form-control" name="corrective_actions" id="corrective-actions"
                                placeholder="Enter Corrective Actions">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">6. Preventive Actions</label>
                            <input type="text" class="form-control" name="preventive_actions" id="preventive-actions"
                                placeholder="Enter Preventive Actions">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">7. Time Completed</label>
                            <input type="time" class="form-control" name="time_completed" id="time-completed"
                                placeholder="Select Time Completed">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">8. Initial</label>
                            <input type="text" class="form-control" name="initial" id="initial"
                                placeholder="Enter Initial">
                        </div>
                    </div>
                   
                    <div class="row px-4 mt-3 mb-4">
                        <div class="col-md-12">
                            <!-- successAlertMessage -->
                            <button type="submit" name="submit" class="btn btn-primary ">
                                <i class="feather-save me-2"></i>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
@endsection
