@extends('admin.admin_dashboard')
@section('content')
<div class="main-content">
    <div class="card">
        <div class="card-header px-4 py-3">
            <h5 class="mb-0">User Form</h5>
        </div>
        <div class="card-body p-4">
            <form class="row g-3 " novalidate="">
                <div class="col-md-2">
                    <label for="bsValidation1" class="form-label">Employee ID</label>
                    <input type="text" class="form-control" id="bsValidation1" placeholder="Employee ID" required="">
                   
                </div>
                <div class="col-md-5">
                    <label for="bsValidation1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="bsValidation1" placeholder="Name" required="">
                   
                </div>
                <div class="col-md-5">
                    <label for="bsValidation2" class="form-label">Username</label>
                    <input type="text" class="form-control" id="bsValidation2" placeholder="Username" value="Hunar" required="">
                </div>
                <div class="col-md-6">
                    <label for="bsValidation3" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="bsValidation3" placeholder="Phone" required="">
                </div>
                <div class="col-md-6">
                    <label for="bsValidation4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="bsValidation4" placeholder="Email" required="">
                </div>
                
                <div class="col-md-6">
                    <label for="bsValidation11" class="form-label">Position</label>
                    <select id="bsValidation11" class="form-select" required="">
                        <option selected="" disabled="" value="">Select Position</option>
                        <option>Admin</option>
                        <option>Plant Manager</option>
                        <option>QC</option>
                        <option>Supervisor</option>
                    </select>
                   
                </div>

                <div class="col-md-6">
                    <label for="bsValidation11" class="form-label">Status</label>
                    <select id="bsValidation11" class="form-select" required="">
                        <option selected="" disabled="" value="">Select Status</option>
                        <option>Active</option>
                        <option>Inactive </option>
                    </select>
                   
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-danger px-4">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
