@extends('qc.admin_dashboard')
@section('content')
    <form class="row g-3" action="" id="qcForm" method="POST">
        <div class="main-content">
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="mb-0">FECAL CONTAMINATION FORM</h5>
                </div>
                <div class="card-body p-4">
                    @csrf

                    <!-- CCP#1-FECAL CONTAMINATION results -->

                    <div class="card-header bg-light  ">
                        <h5 class="text-black">CCP#1 - FECAL CONTAMINATION RESULTS</h5>
                        <!-- <span>(V: no fecal contamination, X: fecal contamination)</span> -->
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 g-3">
                            <div class="col-xl-4">
                                <label class="form-label">1. Time</label>
                                <input type="time" class="form-control" placeholder="Enter Time">
                            </div>
                            <div class="col-xl-8  ">
                                <label class="form-label">2. Results</label>
                                <div>
                                    Not fecal Or fecal
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">1</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">3</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">5</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">6</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">7</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">8</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">9</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">10</label>
                                    </div>
                                    <!-- ... -->
                                </div>
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">3. Monitor Verifier</label>
                                <input type="text" class="form-control" placeholder="Enter Monitor Verifier">
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">4. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">5. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">6. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">7. Results</label>
                                <select class="form-control">
                                    <option value="">Select</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>

                            <div class="col-xl-4  ">
                                <label class="form-label">8. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
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
                                <label class="form-label">1. Time in</label>
                                <input type="time" class="form-control" placeholder="Enter Time In">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out</label>
                                <input type="time" class="form-control" placeholder="Enter Time Out">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)</label>
                                <input type="text" class="form-control" placeholder="Enter Temp">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results</label>
                                <select class="form-control">
                                    <option value="">Select Result</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method</label>
                                <select class="form-control">
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
                                <label class="form-label">1. Time in</label>
                                <input type="time" class="form-control" placeholder="Enter Time In">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out</label>
                                <input type="time" class="form-control" placeholder="Enter Time Out">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)</label>
                                <input type="text" class="form-control" placeholder="Enter Temp">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results</label>
                                <select class="form-control">
                                    <option value="">Select Result</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method</label>
                                <select class="form-control">
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
                            <div class="col-xl-4 ">
                                <label class="form-label">1. Time</label>
                                <input type="time" class="form-control" placeholder="Enter Time">
                            </div>
                            <div class="col-xl-8  ">
                                <label class="form-label">2. Results</label>
                                <div>
                                    Not fecal Or fecal
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">1</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">3</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">5</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">6</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">7</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">8</label>
                                    </div>
                                    <!-- 10 Checkboxes in a row -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">9</label>
                                    </div>
                                    <!-- Add more checkboxes as needed -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="result1">
                                        <label class="form-check-label" for="result1">10</label>
                                    </div>
                                    <!-- ... -->
                                </div>
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">3. Monitor Verifier</label>
                                <input type="text" class="form-control" placeholder="Enter Monitor Verifier">
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">4. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">5. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4 ">
                                <label class="form-label">6. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>

                            <div class="col-xl-4 ">
                                <label class="form-label">7. Results</label>
                                <select class="form-control">
                                    <option value="">Select</option>
                                    <option value="V">No Fecal</option>
                                    <option value="X">Fecal</option>
                                </select>
                            </div>
                            
                            <div class="col-xl-4  ">
                                <label class="form-label">8. Verification Method</label>
                                <select class="form-control">
                                    <option value="">Select Method</option>
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
                                <label class="form-label">1. Time in</label>
                                <input type="time" class="form-control" placeholder="Enter Time In">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">2. Time out</label>
                                <input type="time" class="form-control" placeholder="Enter Time Out">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">3. Temp (F)</label>
                                <input type="text" class="form-control" placeholder="Enter Temp">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">4. Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">5. Verifier Initial</label>
                                <input type="text" class="form-control" placeholder="Enter Verifier Initial">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">6. Verified Date</label>
                                <input type="date" class="form-control" placeholder="Enter Verified Date">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">7. Verified Time</label>
                                <input type="time" class="form-control" placeholder="Enter Verified Time">
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">8. Results</label>
                                <select class="form-control">
                                    <option value="">Select Result</option>
                                    <option value="V">OK</option>
                                    <option value="X">Not OK</option>
                                </select>
                            </div>
                            <div class="col-xl-4">
                                <label class="form-label">9. Verification Method</label>
                                <select class="form-control">
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
                    <a href="" class="btn btn-danger px-4">Back</a>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('script')
@endsection
