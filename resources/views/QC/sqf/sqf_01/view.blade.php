@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">SQF Details</h5>
            </div>
            <form method="POST" action="{{ route('qc.sqf_1.edit', $sqf01Record->id) }}" class="row g-3 needs-validation"
                novalidate enctype="multipart/form-data">
                @csrf
                <div class="main-content">
                    <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
                        {{--  <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>  --}}
                        <a href="{{ route('qc.sqf_1.index') }}"><span>SQF 01</span><span class="text-secondary"></span></a>
                        <a href="#"><span>View</span><span class="text-secondary"></span></a>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                        <div class="">
                                            <h5 class="mb-0 fw-bold">View SQF01</h5>
                                        </div>
                                    </div>

                                    <div class="g-3 mt-0 row justify-content-between">
                                        <div class="col-xl-6">
                                            <div class="custom-checkbox">
                                                <label class="form-label">Person Performing Check</label>
                                                <select class="form-select" name="person_perfo_check">
                                                    {{--  <option value="" selected disabled>--- Select Plant Manager ---</option>  --}}
                                                    <option value="{{ $sqf01Record->person_perfo_check }}">
                                                        {{ $sqf01Record->person_perfo_check }}</option>
                                                    @foreach ($plantManagerRecord as $plantManager)
                                                        <option value="{{ $plantManager->username }}">
                                                            {{ $plantManager->username }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>

                                        <div class="col-xl-6 ">
                                            <label class="form-label">Time of Check</label>
                                            <input type="text" class="form-control" name="time_of_check"
                                                value="{{ $sqf01Record->time_of_check }}" readonly>
                                        </div>

                                        <div class="col-xl-6 ">
                                            <label class="form-label">Date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control datepicker" name="date"
                                                value="{{ $sqf01Record->date }}" required>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="custom-checkbox">
                                                <label for="no_condensation" class="form-label">1. No condensation<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="no_condensation" name="no_condensation"
                                                    required>
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->no_condensation == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->no_condensation == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="no_rodent" class="form-label">2. No rodent, roaches, or
                                                    gnat<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="no_rodent" name="no_rodent" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->no_rodent == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->no_rodent == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="handwash_station" class="form-label">3. Handwash station -
                                                    paper,
                                                    soap,
                                                    hot
                                                    water
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="handwash_station" name="handwash_station"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->handwash_station == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->handwash_station == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="inedible_room" class="form-label">4. Inedible room and
                                                    barrels<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="inedible_room" name="inedible_room" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->inedible_room == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->inedible_room == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="receiving_area" class="form-label">5. Receiving area<span
                                                        class="text-danger">*</span>

                                                </label>
                                                <select class="form-select" id="receiving_area" name="receiving_area"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->receiving_area == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->receiving_area == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="killing_area_walls" class="form-label">6. Killing area walls,
                                                    ceiling,
                                                    floor<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="killing_area_walls"
                                                    name="killing_area_walls" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->killing_area_walls == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->killing_area_walls == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="kill_room_knives" class="form-label">7. Kill room knives,
                                                    cones,
                                                    tables,
                                                    conveyor
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="kill_room_knives" name="kill_room_knives"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->kill_room_knives == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->kill_room_knives == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="kill_room_product" class="form-label">8. Kill room product
                                                    cans<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="kill_room_product"
                                                    name="kill_room_product" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->kill_room_product == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->kill_room_product == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="picking_area_walls" class="form-label">9. Picking area walls,
                                                    ceiling,
                                                    floor<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="picking_area_walls"
                                                    name="picking_area_walls" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->picking_area_walls == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->picking_area_walls == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="picking_area_picker" class="form-label">10. Picking area
                                                    picker<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="picking_area_picker"
                                                    name="picking_area_picker" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->picking_area_picker == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->picking_area_picker == 'No' ? 'selected' : '' }}>
                                                        No</option>
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
                                                    <option value="Yes"
                                                        {{ $sqf01Record->scald_vat == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->scald_vat == 'No' ? 'selected' : '' }}>No</option>
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
                                                <select class="form-select" id="evisceration_table"
                                                    name="evisceration_table" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->evisceration_table == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->evisceration_table == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="evisceration_walls" class="form-label">13. Evisceration walls,
                                                    ceiling, floor<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="evisceration_walls"
                                                    name="evisceration_walls" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->evisceration_walls == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->evisceration_walls == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="giblet_table" class="form-label">14. Giblet table,
                                                    utensils<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="giblet_table" name="giblet_table"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->giblet_table == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->giblet_table == 'No' ? 'selected' : '' }}>No
                                                    </option>
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
                                                    <option value="Yes"
                                                        {{ $sqf01Record->chill_tanks == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->chill_tanks == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="scale_shovels" class="form-label">16. Scale, shovels<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="scale_shovels" name="scale_shovels"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->scale_shovels == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->scale_shovels == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="ice_machines" class="form-label">17. Ice machines<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="ice_machines" name="ice_machines"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->ice_machines == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->ice_machines == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="hand_trucks" class="form-label">18. Hand trucks and
                                                    dollies<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="hand_trucks" name="hand_trucks" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->hand_trucks == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->hand_trucks == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="packing_area_walls" class="form-label">19. Packing area walls,
                                                    ceiling<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="packing_area_walls"
                                                    name="packing_area_walls" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->packing_area_walls == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->packing_area_walls == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="packing_scales" class="form-label">20. Packing scales, tables,
                                                    utensils<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="packing_scales" name="packing_scales"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->packing_scales == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->packing_scales == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="coolers_freezer" class="form-label">21. Coolers and
                                                    freezer<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="coolers_freezer" name="coolers_freezer"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->coolers_freezer == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->coolers_freezer == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="all_contact_surfaces" class="form-label">22. All contact
                                                    surfaces
                                                    are
                                                    intact
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="all_contact_surfaces"
                                                    name="all_contact_surfaces" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->all_contact_surfaces == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->all_contact_surfaces == 'No' ? 'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="cooler_1_temp" class="form-label">23. Cooler #1 temp (36F if
                                                    overnight
                                                    storage, ≤40F
                                                    if no overnight storage)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="cooler_temp" name="cooler_temp" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->cooler_temp == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->cooler_temp == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="cooler_2_temp" class="form-label">24. Cooler #2 temp (36F if
                                                    overnight
                                                    storage, ≤40F
                                                    if no overnight storage)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="cooler_2_temp" name="cooler_2_temp"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->cooler_2_temp == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->cooler_2_temp == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="freezer_temp" class="form-label">25. Freezer temp (≤20F)<span
                                                        class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="freezer_temp" name="freezer_temp"
                                                    required data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->freezer_temp == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No"
                                                        {{ $sqf01Record->freezer_temp == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="paa_concentration" class="form-label">26. PAA concentration
                                                    (50-2,000ppm)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="paa_concentration"
                                                    name="paa_concentration" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->paa_concentration == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->paa_concentration == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class=" custom-checkbox">
                                                <label for="no_rodent_droppings" class="form-label">27. No rodent
                                                    droppings,
                                                    no
                                                    rodent or pest
                                                    activities
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="no_rodent_droppings"
                                                    name="no_rodent_droppings" required
                                                    data-placeholder="--- Yes or No ---">
                                                    <option value="" selected disabled>--- Yes or No ---</option>
                                                    <option value="Yes"
                                                        {{ $sqf01Record->no_rodent_droppings == 'Yes' ? 'selected' : '' }}>
                                                        Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->no_rodent_droppings == 'No' ? 'selected' : '' }}>
                                                        No</option>
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
                                                    <option value="Yes"
                                                        {{ $sqf01Record->others == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="No"
                                                        {{ $sqf01Record->others == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Update</button>
                                            <a href="{{ route('qc.sqf_1.index') }}" class="btn btn-danger px-4">Back</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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
