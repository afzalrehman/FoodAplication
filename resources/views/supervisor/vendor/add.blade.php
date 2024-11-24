@extends('supervisor.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Vendor Form</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3" action="{{ url('supervisor/vendor/store') }}" method="POST">
                    @csrf
                    <!-- Vendor Name -->
                    <div class="col-md-6">
                        <label for="vendorName" class="form-label">Vendor Name</label>
                        <input type="text" id="vendorName" name="vendor_name" value="{{old('vendor_name')}}" class="form-control"
                            placeholder="Enter Vendor Name" required="">
                            <span style="color: red">{{$errors->first('vendor_name')}}</span>
                    </div>

                    <!-- Vendor Category -->
                    <div class="col-md-6">
                        <label for="vendorCategory" class="form-label">Category</label>
                        <select id="vendorCategory" name="vendor_category" class="form-select" required="">
                            <option selected="" disabled="" value="">Select Category</option>
                            <option {{(old('vendor_category') == 'inactive' ? 'selected' :'')}} value="Meat Supplier" >Meat Supplier</option>
                            <option {{(old('vendor_category') == 'inactive' ? 'selected' :'')}} value="Cleaning Service">Cleaning Service</option>
                            <option {{(old('vendor_category') == 'inactive' ? 'selected' :'')}} value="Uniform Supplier">Uniform Supplier</option>
                            <option {{(old('vendor_category') == 'inactive' ? 'selected' :'')}} value="Catogory 4">Catogory 4</option>
                            <option {{(old('vendor_category') == 'inactive' ? 'selected' :'')}} value="Catogory 5">Catogory 5</option>
                        </select>
                        <span style="color: red">{{$errors->first('vendor_category')}}</span>

                    </div>

                    <!-- Contact Number -->
                    <div class="col-md-6">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="tel" id="contactNumber" name="vendor_number" value="{{old('vendor_name')}}"  class="form-control"
                            placeholder="Enter Contact Number" required="">
                            <span style="color: red">{{$errors->first('vendor_number')}}</span>

                    </div>

                    <!-- Email Address -->
                    <div class="col-md-6">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" id="emailAddress" name="vendor_email" value="{{old('vendor_email')}}"  class="form-control"
                            placeholder="Enter Email Address" required="">
                            <span style="color: red">{{$errors->first('vendor_email')}}</span>

                    </div>

                    <!-- Address -->
                    <div class="col-md-12">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" class="form-control" name="vendor_address" value="{{old('vendor_address')}}"  rows="3" placeholder="Enter Vendor Address"
                            required=""></textarea>
                            <span style="color: red">{{$errors->first('vendor_address')}}</span>

                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select" required="">
                            <option selected="" disabled="" value="">Select Status</option>
                            <option {{(old('status') == 'active' ? 'selected' :'' )}} value="active"> Active</option>
                            <option {{(old('status') == 'inactive' ? 'selected' :'')}} value="inactive">Inactive</option>
                        </select>
                        <span style="color: red">{{$errors->first('status')}}</span>

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
