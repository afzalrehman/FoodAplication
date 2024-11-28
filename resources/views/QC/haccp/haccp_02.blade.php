@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">RAW NOT GROUND HACCP RAW MEAT TEMPERATURE LOG</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">1. Date
                            <span class="text-danger">*</span>
                        </label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="Select Date">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">2. Time
                            <span class="text-danger">*</span>
                        </label>
                        <input type="time" class="form-control" name="time" id="time" placeholder="Select Time">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">3. Product name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="product_name" id="product-name"
                            placeholder="Enter Product Name">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">4. Internal temp (Chicken 40F)
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="internal_temp_chicken_40F" id="internal-temp"
                            placeholder="Enter Internal Temperature">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">5. Initials
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="initials" id="initials"
                            placeholder="Enter Your Initials">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">6. Pre-shipper signature
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="pre_shipper_signature" id="pre-shipper-signature"
                            placeholder="Enter Pre-shipper Signature">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">7. Date
                            <span class="text-danger">*</span>
                        </label>
                        <input type="date" class="form-control" name="verification_date" id="verification-date"
                            placeholder="Select Date">
                    </div>
                </div>
            </div>
        </div>

        <!-- WEEKLY VERIFICATION -->
        <div class="card shadow-sm">
            <div class="card-header bg-success ">
                <h4 class="mb-0 text-white">WEEKLY VERIFICATION</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">1. Verified initials
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="verified_initials" id="verified-initials"
                            placeholder="Enter Verified Initials">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">2. Verified date
                            <span class="text-danger">*</span>
                        </label>
                        <input type="date" class="form-control" name="verified_date" id="verified-date"
                            placeholder="Select Verified Date">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">3. Verified time
                            <span class="text-danger">*</span>
                        </label>
                        <input type="time" class="form-control" name="verified_time" id="verified-time"
                            placeholder="Select Verified Time">
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">4. Verified method
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-select form-control" name="verified_method" id="verified-method">
                            <option value="" selected>Select Method</option>
                            <option value="Direct observation">Direct observation</option>
                            <option value="Review records">Review records</option>
                        </select>
                    </div>
                    <div class="col-xl-6 mb-3">
                        <label class="form-label">Results
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" name="results" data-select2-selector="icon">
                            <option value="" selected>Select Results</option>
                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                            <option value="No" data-icon="feather-x text-danger">No</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 ">
            <div class="col-md-12">
                <!-- successAlertMessage -->
                <button type="submit" name="submit" class="btn btn-primary ">
                    <i class="feather-save me-2"></i>
                    <span>Save</span>
                </button>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
