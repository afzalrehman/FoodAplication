@extends('plant_manager.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
            {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
            <a href="{{ route('plantmanager.sqf_3.index') }}"><span>SQF 03</span><span class="text-secondary"></span></a>
            <a href="#"><span>Edit</span><span class="text-secondary"></span></a>
        </div>
        <form method="POST" action="{{ route('plantmanager.sqf_3.edit', $sqf03Record->id) }}" class="row g-3 needs-validation"
            novalidate enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start justify-content-between mb-3">
                                <div class="">
                                    <h5 class="mb-0 fw-bold">Edit SQF03</h5>
                                </div>
                            </div>

                            <div class="px-4 g-3 mt-0 row justify-content-between">

                                <div class="col-xl-6">
                                    <div class="custom-checkbox">
                                        <label for="person_perfo_check" class="form-label">Person Performing Check
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="person_perfo_check" name="person_perfo_check"
                                            required>
                                            {{--  <option value="" selected disabled>--- Select Plant Manager ---</option>  --}}
                                            <option value="{{ $sqf03Record->person_perfo_check }}">
                                                {{ $sqf03Record->person_perfo_check }}</option>
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
                                        placeholder="Select Date" required value="{{ $sqf03Record->date }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">2. SSOP Form <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="ssop_form_number" id="ssop_form_number"
                                        placeholder="Enter SSOP Form #" required
                                        value="{{ $sqf03Record->ssop_form_number }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">3. Area Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="area_number" id="area_number"
                                        placeholder="Enter Area Number" required value="{{ $sqf03Record->area_number }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">4. Deficiencies <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="deficiencies" id="deficiencies"
                                        placeholder="Enter Deficiencies" required value="{{ $sqf03Record->deficiencies }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">5. Corrective Actions <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="corrective_actions"
                                        id="corrective_actions" placeholder="Enter Corrective Actions" required
                                        value="{{ $sqf03Record->corrective_actions }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">6. Preventive Actions <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="preventive_actions"
                                        id="preventive_actions" placeholder="Enter Preventive Actions" required
                                        value="{{ $sqf03Record->preventive_actions }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">7. Time Completed <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control time-picker" name="time_completed"
                                        id="time_completed" placeholder="Select Time Completed" required
                                        value="{{ $sqf03Record->time_completed }}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label">8. Initial <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="initial" id="initial"
                                        placeholder="Enter Initial" required value="{{ $sqf03Record->initial }}">
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                    <a href="{{ route('plantmanager.sqf_3.index') }}" class="btn btn-danger px-4">Back</a>
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
            dateFormat: "H:i",
        });

        $(".date-time").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
    <script src="{{ asset('assets/plugins/select2/js/qc-customs.js') }}"></script>
@endsection
