@extends('QC.admin_dashboard')
@section('content')
    <div class="main-content">

        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-3 fw-medium flex-wrap font-text1">
            {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
            <a href="{{ route('qc.haccp_4.index') }}"><span>HACCP 04</span><span class="text-secondary"></span></a>
            <a href="#"><span>Add</span><span class="text-secondary"></span></a>
        </div>

        <form method="POST" action="{{ route('qc.haccp_4.store') }}" class="needs-validation" novalidate
            enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Corrective action log sheet</h5>
                </div>
                <div class="card-body">
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
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">1. Date
                                <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control datepicker" name="date" placeholder="Select Date" required>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">2. Time
                                <span class="text-danger">*</span>
                            </label>
                            <input type="time" class="form-control time_picker" name="time" placeholder="Select Time" required>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">3. Initials
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="initials" placeholder="Enter Initials" required>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">4. Product name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="product_name"
                                placeholder="Enter Product name" required>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">5. Total weight
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="total_weight" placeholder="Enter Total weight" required>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">6. Cause of deviation and elimination of the cause
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" name="cause_of_deviation" rows="5" required></textarea>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">7. Measures to ensure the CCP is under control after the C/A is taken
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" name="measures_to_ensure" rows="5" required></textarea>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">8. Measures to prevent recurrence
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" name="measures_to_prevent" rows="5" required></textarea>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label class="form-label">9. Ensure that no product that is injurious to health or otherwise adulterated as a result of the deviation enters commerce
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" name="ensure_that_no_product" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 ">
                <div class="col-md-12 mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <a href="{{ route('qc.haccp_4.index') }}" class="btn btn-danger px-4">Back</a>
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
