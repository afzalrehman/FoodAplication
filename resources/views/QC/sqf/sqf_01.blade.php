@extends('qc.admin_dashboard')
@section('content')
    <form method="POST" action="{{ route('qc.sqf_1.store') }}" class="row g-3 needs-validation" novalidate
        enctype="multipart/form-data">
        @csrf
        <div class="main-content">
            @include('_message')
            <div class="row">
                <!-- ------col-lg-12------- -->
                <div class="col-xl-12">
                    <div class="card invoice-container">
                        <div class="card-header">
                            <h5>PRE-OPERATIONAL INSPECTION FORM</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="px-4 g-4 mt-0 row justify-content-between">
                                <div class="col-xl-6 ">
                                    <label class="form-label">Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control datepicker" name="date" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="custom-checkbox">
                                        <label for="no_condensation" class="form-label">1. No condensation<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="no_condensation" name="no_condensation" required>
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="no_rodent" class="form-label">2. No rodent, roaches, or gnat<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="no_rodent" name="no_rodent" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="handwash_station" class="form-label">3. Handwash station - paper, soap,
                                            hot
                                            water
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="handwash_station" name="handwash_station" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="inedible_room" class="form-label">4. Inedible room and barrels<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="inedible_room" name="inedible_room" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="receiving_area" class="form-label">5. Receiving area<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" id="receiving_area" name="receiving_area" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="killing_area_walls" class="form-label">6. Killing area walls, ceiling,
                                            floor<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="killing_area_walls" name="killing_area_walls"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="kill_room_knives" class="form-label">7. Kill room knives, cones, tables,
                                            conveyor
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="kill_room_knives" name="kill_room_knives" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="kill_room_product" class="form-label">8. Kill room product cans<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="kill_room_product" name="kill_room_product"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="picking_area_walls" class="form-label">9. Picking area walls, ceiling,
                                            floor<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="picking_area_walls" name="picking_area_walls"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="picking_area_picker" class="form-label">10. Picking area picker<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="picking_area_picker" name="picking_area_picker"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="scald_vat" class="form-label">11. Scald vat<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="scald_vat" name="scald_vat" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="evisceration_table" class="form-label">12. Evisceration table,
                                            conveyor, tanks,
                                            utensils
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="evisceration_table" name="evisceration_table"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="evisceration_walls" class="form-label">13. Evisceration walls,
                                            ceiling, floor<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="evisceration_walls" name="evisceration_walls"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="giblet_table" class="form-label">14. Giblet table, utensils<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="giblet_table" name="giblet_table" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="custom-checkbox">
                                        <label for="chill_tanks" class="form-label">15. Chill tanks<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="chill_tanks" name="chill_tanks" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="scale_shovels" class="form-label">16. Scale, shovels<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="scale_shovels" name="scale_shovels" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="ice_machines" class="form-label">17. Ice machines<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="ice_machines" name="ice_machines" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="hand_trucks" class="form-label">18. Hand trucks and dollies<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="hand_trucks" name="hand_trucks" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="packing_area_walls" class="form-label">19. Packing area walls,
                                            ceiling<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="packing_area_walls" name="packing_area_walls"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="packing_scales" class="form-label">20. Packing scales, tables,
                                            utensils<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="packing_scales" name="packing_scales" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="coolers_freezer" class="form-label">21. Coolers and freezer<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="coolers_freezer" name="coolers_freezer" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="all_contact_surfaces" class="form-label">22. All contact surfaces are
                                            intact
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="all_contact_surfaces" name="all_contact_surfaces"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="cooler_1_temp" class="form-label">23. Cooler #1 temp (36F if overnight
                                            storage, ≤40F
                                            if no overnight storage)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="cooler_temp" name="cooler_temp" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="cooler_2_temp" class="form-label">24. Cooler #2 temp (36F if overnight
                                            storage, ≤40F
                                            if no overnight storage)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="cooler_2_temp" name="cooler_2_temp" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="freezer_temp" class="form-label">25. Freezer temp (≤20F)<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="freezer_temp" name="freezer_temp" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="paa_concentration" class="form-label">26. PAA concentration
                                            (50-2,000ppm)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="paa_concentration" name="paa_concentration"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label for="no_rodent_droppings" class="form-label">27. No rodent droppings, no
                                            rodent or pest
                                            activities
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="no_rodent_droppings" name="no_rodent_droppings"
                                            required data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="custom-checkbox">
                                        <label for="others" class="form-label">28. Others
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="others" name="others" required
                                            data-placeholder="--- Yes or No ---">
                                            <option value="" selected disabled>--- Yes or No ---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-4 mt-3 mb-4">
                                <div class="col-md-12">
                                    <!-- successAlertMessage -->
                                    <button type="submit" class="btn btn-primary">
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
    </form>
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





        {{--  selected2  --}}
        $(function() {
            "use strict";

            $('#no_condensation').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#no_rodent').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#handwash_station').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#inedible_room').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#receiving_area').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#killing_area_walls').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#kill_room_knives').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#kill_room_product').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#picking_area_walls').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#picking_area_picker').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#scald_vat').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#evisceration_table').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#evisceration_walls').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#giblet_table').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#chill_tanks').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#scale_shovels').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#ice_machines').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#hand_trucks').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#packing_area_walls').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#packing_scales').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#coolers_freezer').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#all_contact_surfaces').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#cooler_temp').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#cooler_2_temp').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#freezer_temp').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#paa_concentration').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#no_rodent_droppings').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#others').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });




        });
    </script>
@endsection
