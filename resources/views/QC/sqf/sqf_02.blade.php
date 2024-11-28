@extends('qc.admin_dashboard')
@section('content')
    <form method="post" action="files_php/SSOP-02.php">
        <!-- [ page-header ] start -->
        <div class="main-content">
            <div class="row">
                <div class="col-xl-12"><?php include_once './includes/alerts.php'; ?></div>
                <div class="col-xl-12">
                    <div class="card invoice-container">
                        <div class="card-header">
                            <h5> OPERATIONAL INSPECTION FORM</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="px-4 g-4 mt-0 row justify-content-between">

                                <div class="col-xl-6 ">
                                    <label for="userName" class="form-label">Form #
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" readonly value="SSOP-02" name=""
                                        placeholder="SSOP-02" />
                                </div>
                                <div class="col-xl-6 ">
                                    <label for="date" class="form-label">Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" id="date" name="form_date"
                                        placeholder="date" />
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            1. No condensation
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_condensation" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            2. No rodent, roaches, or gnat activity
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_rodent_activity" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            3. Handwash station-paper, soap, hot water
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="handwash_station" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            4. Employee hygiene practices
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="employee_hygiene" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            5. Cooler #1 temp (40F)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="cooler1_temp" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            6. Cooler #2 temp (40F)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="cooler2_temp" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            7. Freezer temp (&lt;20F)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="freezer_temp" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            8. PAA concentration (50-2,000 ppm)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="paa_concentration"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            9. No rodent droppings, no rodent or pest activities
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_rodent_droppings"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            10. Rework chicken process is followed
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="rework_chicken_process"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox mb-3">
                                        <label class="form-label">
                                            11. Others
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="others" data-select2-selector="icon">
                                            <option value="" selected>Yes OR No</option>
                                            <option value="" data-icon="feather-check text-success">Yes</option>
                                            <option value="" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>



                            </div>

                            <hr class="border-dashed" />
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
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </form>
@endsection
@section('script')
@endsection
