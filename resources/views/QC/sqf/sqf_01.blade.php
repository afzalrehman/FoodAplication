@extends('qc.admin_dashboard')
@section('content')
    <form method="post" action="files_php/SSOP-01.php">
        <div class="main-content">
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
                                    <label for="userName" class="form-label">Date
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control" id="" name="date"
                                        placeholder="" />
                                </div>


                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">1. No condensation<span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_condensation" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">2. No rodent, roaches, or gnat<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="no_rodent_roaches_gnat"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">3. Handwash station - paper, soap, hot
                                            water
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="handwash_station" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">4. Inedible room and barrels<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="inedible_room_barrels"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">5. Receiving area<span class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="receiving_area" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">6. Killing area walls, ceiling, floor<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="killing_area" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">7. Kill room knives, cones, tables,
                                            conveyor
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="kill_room_knives" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">8. Kill room product cans<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="kill_room_product_cans"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">9. Picking area walls, ceiling, floor<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="picking_area_walls_ceiling_floor"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">10. Picking area picker<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="picking_area_picker"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">11. Scald vat<span class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="scald_vat" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">12. Evisceration table, conveyor, tanks,
                                            utensils
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="evisceration_table"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">13. Evisceration walls, ceiling, floor<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="evisceration_walls_ceiling_floor"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">14. Giblet table, utensils<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="giblet_table_utensils"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">15. Chill tanks<span class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="chill_tanks" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">16. Scale, shovels<span class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="scale_shovels" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">17. Ice machines<span class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="ice_machines" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">18. Hand trucks and dollies<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="hand_trucks_dollies"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">19. Packing area walls, ceiling<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="packing_area_walls_ceiling"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">20. Packing scales, tables, utensils<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="packing_scales_tables_utensils"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">21. Coolers and freezer<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="coolers_and_freezer"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">22. All contact surfaces are intact no chipping
                                            blades or contact surfaces.
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="all_contact_surfaces_intact"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">23. Cooler #1 temp (36F if overnight storage, ≤40F
                                            if no overnight storage)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="cooler_1_temp" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">24. Cooler #2 temp (36F if overnight storage, ≤40F
                                            if no overnight storage)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="cooler_2_temp" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">25. Freezer temp (≤20F)<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="freezer_temp" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">26. PAA concentration Wash Station
                                            (50-2,000ppm)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="paa_concentration_wash_station"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">27. PAA concentration Chiller & Dip
                                            (50-2,000ppm)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="paa_concentration_chiller_dip"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">28. PAA concentration Sprayer
                                            (50-2,000ppm)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="paa_concentration_sprayer"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">29. Scalding water temperature (2136F)<span
                                                class="text-danger">*</span>

                                        </label>
                                        <select class="form-select" name="scalding_water_temp"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">30. No rodent droppings, no rodent or pest
                                            activities
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" name="no_rodent_droppings"
                                            data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check text-success">Yes</option>
                                            <option value="No" data-icon="feather-x text-danger">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class=" custom-checkbox">
                                        <label class="form-label">31. Others<span class="text-danger">*</span>

                                        </label>
                                        <select class="form-select " name="others" data-select2-selector="icon">
                                            <option value="" selected>Yes or No</option>
                                            <option value="Yes" data-icon="feather-check">Yes</option>
                                            <option value="No" data-icon="feather-x">No</option>
                                        </select>
                                    </div>
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
            </div>
        </div>
    </form>
@endsection
@section('script')
@endsection
