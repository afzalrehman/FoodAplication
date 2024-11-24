@extends('qc.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Vendor Form</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3" action="" id="qcForm" method="POST">
                    @csrf

                    <!-- Status -->
                    <div class="col-md-6">
                        <label for="qcName">QC Name:</label>
                        <input type="text" id="qcName" name="qcName" placeholder="Enter QC name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ccpDate">Date:</label>
                        <input type="date" id="ccpDate" name="ccpDate" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ccpResults">CCP#1 Results:</label>
                        <select id="ccpResults" name="ccpResults" required>
                            <option value="no">No Fecal Contamination</option>
                            <option value="yes">Fecal Contamination</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="monitorInitial">Monitor Initial:</label>
                        <input type="text" id="monitorInitial" name="monitorInitial" placeholder="Enter Monitor Initial"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="verifierInitial">Verifier Initial:</label>
                        <input type="text" id="verifierInitial" name="verifierInitial"
                            placeholder="Enter Verifier Initial" required>
                    </div>

                    <!-- Buttons -->
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                            <a href="{{ url('supervisor/vendor/list') }}" class="btn btn-danger px-4">Back</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById('qcForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting

            // Collect data
            const qcName = document.getElementById('qcName').value;
            const ccpDate = document.getElementById('ccpDate').value;
            const ccpResults = document.getElementById('ccpResults').value;
            const monitorInitial = document.getElementById('monitorInitial').value;
            const verifierInitial = document.getElementById('verifierInitial').value;

            // Display data (can be sent to a server here)
            console.log({
                qcName,
                ccpDate,
                ccpResults,
                monitorInitial,
                verifierInitial
            });

            alert('Form submitted successfully!');
        });
    </script>
@endsection
