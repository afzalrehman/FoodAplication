@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">

        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-3 fw-medium flex-wrap font-text1">
            {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
            <a href="{{ route('qc.haccp_3.index') }}"><span>HACCP 03</span><span class="text-secondary"></span></a>
            <a href="#"><span>View</span><span class="text-secondary"></span></a>
        </div>

        <form method="POST" action="{{ route('qc.haccp_3.update', $haccp03Record->id) }}" class="needs-validation" novalidate
            enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">WEEKLY THERMOMETER CALIBRATION FORM</h5>
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
                                    <option value="{{ $haccp03Record->person_perfo_check }}">
                                        {{ $haccp03Record->person_perfo_check }}</option>
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
                                required value="{{ $haccp03Record->date }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">2. Time
                                <span class="text-danger">*</span>
                            </label>
                            <input type="time" class="form-control time_picker" name="time" placeholder="Select Time"
                                required value="{{ $haccp03Record->time }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">3. Thermo ID#
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="thermo_id" placeholder="Enter Thermo ID"
                                required value="{{ $haccp03Record->thermo_id }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">4. Personal Thermometer Readings
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="personal_thermometer"
                                placeholder="Enter Personal Thermometer Readings" required value="{{ $haccp03Record->personal_thermometer }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">5. Adjustment Required
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" name="adjustment_required" required>
                                <option value="" selected disabled>Select (Yes of No)</option>
                                <option value="Yes" {{ $haccp03Record->adjustment_required == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $haccp03Record->adjustment_required == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">6. Initials
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="initials" placeholder="Enter Initials"
                                required value="{{ $haccp03Record->initials }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">7. Corrective action
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="corrective_action"
                                placeholder="Enter Corrective action" required value="{{ $haccp03Record->corrective_action }}">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">8. Preventive action
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="preventive_action"
                                placeholder="Enter Preventive action" required value="{{ $haccp03Record->preventive_action }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 ">
                <div class="col-md-12 mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <a href="{{ route('qc.haccp_3.index') }}" class="btn btn-danger px-4">Back</a>
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
