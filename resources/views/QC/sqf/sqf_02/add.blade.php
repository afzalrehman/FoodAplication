@extends('QC.admin_dashboard')
@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-header px-4 py-3">
            <h5 class="mb-0">SQF 02</h5>
        </div>
    <form method="POST" action="{{ route('qc.sqf_2.store') }}" class="row g-3 needs-validation" novalidate
        enctype="multipart/form-data">
        @csrf

        <!-- [ page-header ] start -->
        <div class="main-content">
            <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
                {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
                <a href="{{ route('qc.sqf_2.index') }}"><span>SQF 02</span><span class="text-secondary"></span></a>
                <a href="#"><span>Add</span><span class="text-secondary"></span></a>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card invoice-container">
                        <div class="card-header">
                            <h5> OPERATIONAL INSPECTION FORM</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="px-4 g-3 mt-0 row justify-content-between">

                                <div class="col-xl-6">
                                    <div class="custom-checkbox">
                                        <label for="person_perfo_check" class="form-label">Person Performing Check
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="person_perfo_check" name="person_perfo_check"
                                            required>
                                            data-placeholder="--- Select Plant Manager ---">
                                            <option value="" selected disabled>--- Select Plant Manager ---</option>
                                            @foreach ($plantManagerRecord as $plantManager)
                                                <option value="{{ $plantManager->username }}">{{ $plantManager->username }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 ">
                                    <label class="form-label">Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control datepicker" name="date" required>
                                </div>


                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            1. No condensation
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="no_condensation" name="no_condensation">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            2. No rodent, roaches, or gnat activity
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_rodent_activity" id="no_rodent_activity">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            3. Handwash station-paper, soap, hot water
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="handwash_station" id="handwash_station">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            4. Employee hygiene practices
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="employee_hygiene" id="employee_hygiene">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            5. Cooler #1 temp (40F)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="cooler1_temp" id="cooler1_temp">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            6. Cooler #2 temp (40F)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="cooler2_temp" id="cooler2_temp">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            7. Freezer temp (&lt;20F)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="freezer_temp" id="freezer_temp">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            8. PAA concentration (50-2,000 ppm)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="paa_concentration" id="paa_concentration">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            9. No rodent droppings, no rodent or pest activities
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_rodent_droppings" id="no_rodent_droppings">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            10. Rework chicken process is followed
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="rework_chicken_process"
                                            id="rework_chicken_process">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            11. Others<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="others" name="others">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
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
            dateFormat: "Y-m-d H:i",
        });

        $(".date-time").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
    <script src="{{ asset('assets/plugins/select2/js/qc-customs.js') }}"></script>

@endsection
