@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">

        <form method="POST" action="{{ route('qc.haccp_1.store') }}" class="needs-validation" novalidate
            enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="mb-0">FECAL CONTAMINATION FORM</h5>
                </div>
                <div class="card-body p-4">

                    <div class="row mb-3">
                        <div class="col-xl-6">
                            <div class="custom-checkbox">
                                <label class="form-label">Person Performing Check
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select selected_2" name="person_perfo_check" required>
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
                                {{--  <div class="was-validated text-danger">
                                    Please choose a date.
                                </div>  --}}
                        </div>
                    </div>


                    <!-- CCP#1-FECAL CONTAMINATION results -->

                    <div class="card-header bg-light ">
                        <h5 class="text-black">CCP#1 - FECAL CONTAMINATION RESULTS</h5>
                        <!-- <span>(V: no fecal contamination, X: fecal contamination)</span> -->
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Time" name="1_time"
                                    required>
                            </div>
                            <div class="col-xl-8  ">
                                <label class="form-label">2. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <div>
                                    Not fecal Or fecal
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1" name="1_results_fecal_1"
                                            value="1">
                                        <label class="form-check-label" for="result1">1</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result2" name="1_results_fecal_2"
                                            value="2">
                                        <label class="form-check-label" for="result2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result3" name="1_results_fecal_3"
                                            value="3">
                                        <label class="form-check-label" for="result3">3</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result4" name="1_results_fecal_4"
                                            value="4">
                                        <label class="form-check-label" for="result4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result5" name="1_results_fecal_5"
                                            value="5">
                                        <label class="form-check-label" for="result5">5</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result6" name="1_results_fecal_6"
                                            value="6">
                                        <label class="form-check-label" for="result6">6</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result7" name="1_results_fecal_7"
                                            value="7">
                                        <label class="form-check-label" for="result7">7</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result8" name="1_results_fecal_8"
                                            value="8">
                                        <label class="form-check-label" for="result8">8</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result9"
                                            name="1_results_fecal_9" value="9">
                                        <label class="form-check-label" for="result9">9</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result10"
                                            name="1_results_fecal_10" value="10">
                                        <label class="form-check-label" for="result10">10</label>
                                    </div>
                                    <!-- ... -->
                                </div>
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">3. Monitor Verifier
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Monitor Verifier"
                                    name="1_monitor_verifier" required>
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">4. Verifier Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial"
                                    name="1_verifier_initial" required>
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">5. Verified Date
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control datepicker" placeholder="Enter Verified Date"
                                    name="1_verified_date" required>
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">6. Verified Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Verified Time"
                                    name="1_verified_time" required>
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">7. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="1_results" required>
                                    <option value="" selected disabled>--- Select ---</option>
                                    <option value="No Fecal">No Fecal</option>
                                    <option value="Fecal">Fecal</option>
                                </select>
                            </div>

                            <div class="col-xl-4  ">
                                <label class="form-label">8. Verification Method
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="1_verification_method" required>
                                    <option value="" selected disabled>--- Select ---</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- CCPH2-CARCASS CHILL LOG -->

                    <div class="card-header bg-light ">
                        <h5 class="text-black">CCP#2 - CARCASS CHILL LOG</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time in
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Time In"
                                    name="2_time_in" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Time Out"
                                    name="2_time_out" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Temp" name="2_temp_f"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Initial" name="2_initial"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial"
                                    name="2_verifier_initial" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control datepicker" placeholder="Enter Verified Date"
                                    name="2_verified_date" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Verified Time"
                                    name="2_verified_time" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="2_results" required>
                                    <option value="">Select Result</option>
                                    <option value="No Fecal">No Fecal</option>
                                    <option value="Fecal">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="2_verification_method" required>
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- CCP 3 GIBLET CHILL LOG -->

                    <div class="card-header bg-light ">
                        <h5 class="text-black">CCP 3 - GIBLET CHILL LOG</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time in
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Time In"
                                    name="3_time_in" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Time Out"
                                    name="3_time_out" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Temp" name="3_temp_f"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Initial" name="3_initial"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial"
                                    name="3_verifier_initial" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control datepicker" placeholder="Enter Verified Date"
                                    name="3_verified_date" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Verified Time"
                                    name="3_verified_time" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="3_results" required>
                                    <option value="">Select Result</option>
                                    <option value="No Fecal">No Fecal</option>
                                    <option value="Fecal">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="3_verification_method" required>
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <!-- CCP#4-REWORK FECAL CONTAMINATION results -->

                    <div class="card-header bg-light ">
                        <h5 class="text-black">CCP#4 - REWORK FECAL CONTAMINATION RESULTS</h5>
                        <!-- <span>(V: no fecal contamination, X: fecal contamination)</span> -->
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Time" name="4_time"
                                    required>
                            </div>
                            <div class="col-xl-8  ">
                                <label class="form-label">2. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <div>
                                    Not fecal Or fecal
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1" name="4_results_fecal_1"
                                            value="1">
                                        <label class="form-check-label" for="result1">1</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result2" name="4_results_fecal_2"
                                            value="2">
                                        <label class="form-check-label" for="result2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result3" name="4_results_fecal_3"
                                            value="3">
                                        <label class="form-check-label" for="result3">3</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result4" name="4_results_fecal_4"
                                            value="4">
                                        <label class="form-check-label" for="result4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result5" name="4_results_fecal_5"
                                            value="5">
                                        <label class="form-check-label" for="result5">5</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result6" name="4_results_fecal_6"
                                            value="6">
                                        <label class="form-check-label" for="result6">6</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result7" name="4_results_fecal_7"
                                            value="7">
                                        <label class="form-check-label" for="result7">7</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result8" name="4_results_fecal_8"
                                            value="8">
                                        <label class="form-check-label" for="result8">8</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result9"
                                            name="4_results_fecal_9" value="9">
                                        <label class="form-check-label" for="result9">9</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result10"
                                            name="4_results_fecal_10" value="10">
                                        <label class="form-check-label" for="result10">10</label>
                                    </div>
                                    <!-- ... -->
                                </div>
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">3. Monitor Verifier
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Monitor Verifier"
                                    name="4_monitor_verifier" required>
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">4. Verifier Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial"
                                    name="4_verifier_initial" required>
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">5. Verified Date
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control datepicker" placeholder="Enter Verified Date"
                                    name="4_verified_date" required>
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">6. Verified Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Verified Time"
                                    name="4_verified_time" required>
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">7. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="4_results" required>
                                    <option value="" selected disabled>--- Select ---</option>
                                    <option value="No Fecal">No Fecal</option>
                                    <option value="Fecal">Fecal</option>
                                </select>
                            </div>

                            <div class="col-xl-4  ">
                                <label class="form-label">8. Verification Method
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="4_verification_method" required>
                                    <option value="" selected disabled>--- Select ---</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>

                        </div>
                    </div>


                    <!-- CCP#5-REWORK PRODUCT CHILL LOG -->

                    <div class="card-header bg-light ">
                        <h5 class="text-black">CCP#5 - REWORK PRODUCT CHILL LOG</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time in
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Time In"
                                    name="5_time_in" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Time Out"
                                    name="5_time_out" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Temp" name="5_temp_f"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Initial" name="5_initial"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial"
                                    name="5_verifier_initial" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control datepicker" placeholder="Enter Verified Date"
                                    name="5_verified_date" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control time_picker" placeholder="Enter Verified Time"
                                    name="5_verified_time" required>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="5_results" required>
                                    <option value="">Select Result</option>
                                    <option value="No Fecal">No Fecal</option>
                                    <option value="Fecal">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control" name="5_verification_method" required>
                                    <option value="">Select Method</option>
                                    <option value="Direct observation">Direct observation</option>
                                    <option value="Review records">Review records</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="d-md-flex d-grid align-items-center gap-3">
                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                    <a href="{{ route('qc.haccp_1.index') }}" class="btn btn-danger px-4">Back</a>
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
            appendTo: document.body, // Ensures it doesn't get cut off by parent containers
            position: "auto center", // Automatically adjusts placement
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
