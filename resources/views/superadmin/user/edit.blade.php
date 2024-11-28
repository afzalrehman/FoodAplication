@extends('admin.admin_dashboard')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">User Update</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3 " action="{{url('admin/user/update/'.$editUser->id)}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="employeeID" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employeeID" name="employeeID" value="{{$editUser->employeeID}}"
                            placeholder="Employee ID" required="">
                        <span class="" style="color: red">{{$errors->first('employeeID')}}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$editUser->name}}" placeholder="Name"
                            required="">
                            <span class="" style="color: red">{{$errors->first('name')}}</span>

                    </div>
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="{{$editUser->username}}"  id="username" placeholder="Username"
                             required="">
                             <span class="" style="color: red">{{$errors->first('username')}}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$editUser->phone}}"  id="phone" placeholder="Phone Number"
                            required="">
                            <span class="" style="color: red">{{$errors->first('phone')}}</span>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$editUser->email}}"  id="email" placeholder="Email"
                            required="">
                            <span class="" style="color: red">{{$errors->first('email')}}</span>
                    </div>

                    <div class="col-md-6">
                        <label for="position" class="form-label">Position</label>
                        <select id="position" name="role" class="form-select" required="">
                            <option selected="" disabled="" value="">Select Position</option>
                            @foreach ($roles as $item)
                            <option {{($item->id == $editUser->id ? 'selected': '')}} value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        <span class="" style="color: red">{{$errors->first('role')}}</span>
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-select" required="">
                            <option selected="" disabled="" value="">Select Status</option>
                            <option {{($editUser->status == 'active' ? 'selected': '')}} value="Active">Active</option>
                            <option {{($editUser->status == 'inactive' ? 'selected': '')}} value="Inactive">Inactive </option>
                        </select>
                        <span class="" style="color: red">{{$errors->first('status')}}</span>
                    </div>

                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                            <a href="{{url('admin/user/list')}}" class="btn btn-danger px-4">Back</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>
@endsection
