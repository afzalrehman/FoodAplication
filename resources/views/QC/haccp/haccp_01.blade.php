@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">FECAL CONTAMINATION FORM</h5>
            </div>
            <div class="card-body p-4">

                <form>
                    <!-- CCP#1 -->
                    <h3>CCP#1 - Fecal Contamination Results</h3>
                    <div class="mb-3">
                        <label class="form-check-label me-3">
                            <input type="radio" name="ccp1_result" value="no_fecal_contamination"
                                class="form-check-input"> No Fecal Contamination
                        </label>
                        <label class="form-check-label">
                            <input type="radio" name="ccp1_result" value="fecal_contamination" class="form-check-input">
                            Fecal Contamination
                        </label>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Results</th>
                                <th>Monitor Initial</th>
                                <th>Verifier Initial</th>
                                <th>Verified Date</th>
                                <th>Verified Time</th>
                                <th>Results</th>
                                <th>Verification Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="time" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="date" class="form-control"></td>
                                <td><input type="time" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Repeat similar structure for CCP#2, CCP#3, etc. -->

                  
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
