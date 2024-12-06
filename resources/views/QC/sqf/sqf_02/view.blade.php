@extends('QC.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
            {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
            <a href="{{ route('qc.sqf_2.index') }}"><span>SQF 02</span><span class="text-secondary"></span></a>
            <a href="#"><span>View</span><span class="text-secondary"></span></a>
        </div>
        <form method="POST" action="{{ route('qc.sqf_2.edit', $sqf02Record->id) }}" class="row g-3 needs-validation"
            novalidate enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start justify-content-between mb-3">
                                <div class="">
                                    <h5 class="mb-0 fw-bold">View SQF02</h5>
                                </div>
                            </div>

                            <div class="g-3 mt-0 row justify-content-between">

                                <div class="col-xl-6">
                                    <div class="custom-checkbox">
                                        <label for="person_perfo_check" class="form-label">Person Performing Check<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="person_perfo_check" name="person_perfo_check"
                                            required>
                                            {{--  <option value="" selected disabled>--- Select Plant Manager ---</option>  --}}
                                            <option value="{{ $sqf02Record->person_perfo_check }}">
                                                {{ $sqf02Record->person_perfo_check }}</option>
                                            @foreach ($plantManagerRecord as $plantManager)
                                                <option value="{{ $plantManager->username }}">{{ $plantManager->username }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 ">
                                    <label class="form-label">Time of Check</label>
                                    <input type="text" class="form-control" name="time_of_check"
                                        value="{{ $sqf02Record->time_of_check }}" readonly>
                                </div>

                                <div class="col-xl-6 ">
                                    <label class="form-label">Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control datepicker" name="date"
                                        value="{{ $sqf02Record->date }}" required>
                                </div>


                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">
                                            1. No condensation
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="no_condensation" name="no_condensation">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes"
                                                {{ $sqf02Record->no_condensation == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No"
                                                {{ $sqf02Record->no_condensation == 'No' ? 'selected' : '' }}>No</option>
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
                                            <option value="Yes"
                                                {{ $sqf02Record->no_rodent_activity == 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"
                                                {{ $sqf02Record->no_rodent_activity == 'No' ? 'selected' : '' }}>No
                                            </option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->handwash_station == 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"
                                                {{ $sqf02Record->handwash_station == 'No' ? 'selected' : '' }}>No</option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->employee_hygiene == 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"
                                                {{ $sqf02Record->employee_hygiene == 'No' ? 'selected' : '' }}>No</option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->cooler1_temp == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No"
                                                {{ $sqf02Record->cooler1_temp == 'No' ? 'selected' : '' }}>No</option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->cooler2_temp == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No"
                                                {{ $sqf02Record->cooler2_temp == 'No' ? 'selected' : '' }}>No</option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->freezer_temp == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No"
                                                {{ $sqf02Record->freezer_temp == 'No' ? 'selected' : '' }}>No</option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->paa_concentration == 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"
                                                {{ $sqf02Record->paa_concentration == 'No' ? 'selected' : '' }}>No</option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->no_rodent_droppings == 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"
                                                {{ $sqf02Record->no_rodent_droppings == 'No' ? 'selected' : '' }}>No
                                            </option>

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
                                            <option value="Yes"
                                                {{ $sqf02Record->rework_chicken_process == 'Yes' ? 'selected' : '' }}>Yes
                                            </option>
                                            <option value="No"
                                                {{ $sqf02Record->rework_chicken_process == 'No' ? 'selected' : '' }}>No
                                            </option>

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
                                            <option value="Yes" {{ $sqf02Record->others == 'Yes' ? 'selected' : '' }}>
                                                Yes</option>
                                            <option value="No" {{ $sqf02Record->others == 'No' ? 'selected' : '' }}>No
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                    <a href="{{ route('qc.sqf_2.index') }}" class="btn btn-danger px-4">Back</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </form>
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
