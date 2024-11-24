@extends('admin.admin_dashboard')
@section('content')
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->


        <div class="card rounded-4">
            <div class="card-body p-4">
                <div class="position-relative mb-5">
                    <img src="assets/images/gallery/profile-cover.png" class="img-fluid rounded-4 shadow" alt="">
                    <div class="profile-avatar position-absolute top-100 start-50 translate-middle">
                        <img src="assets/images/avatars/01.png" class="img-fluid rounded-circle p-1 bg-grd-danger shadow"
                            width="170" height="170" alt="">
                    </div>
                </div>
                <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
                    <div class="">
                        <h3>{{ $viewUser->name }}</h3>
                        <p class="mb-0">{{ $viewUser->email }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0 fw-bold">Edit Profile</h5>
                            </div>

                        </div>
                        <form class="row g-3 " action="{{url('admin/user/update/'.$viewUser->id)}}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="employeeID" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="employeeID" name="employeeID" value="{{$viewUser->employeeID}}"
                                    placeholder="Employee ID" required="">
                                <span class="" style="color: red">{{$errors->first('employeeID')}}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$viewUser->name}}" placeholder="Name"
                                    required="">
                                    <span class="" style="color: red">{{$errors->first('name')}}</span>
        
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$viewUser->username}}"  id="username" placeholder="Username"
                                     required="">
                                     <span class="" style="color: red">{{$errors->first('username')}}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$viewUser->phone}}"  id="phone" placeholder="Phone"
                                    required="">
                                    <span class="" style="color: red">{{$errors->first('phone')}}</span>
                            </div>
        
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$viewUser->email}}"  id="email" placeholder="Email"
                                    required="">
                                    <span class="" style="color: red">{{$errors->first('email')}}</span>
                            </div>
        
                            <div class="col-md-6">
                                <label for="position" class="form-label">Position</label>
                                <select id="position" name="role" class="form-select" required="">
                                    <option selected="" disabled="" value="">Select Position</option>
                                    <option {{($viewUser->role == 'Admin' ? 'selected': '')}} value="Admin">Admin</option>
                                    <option {{ ($viewUser->role == 'Plant_Manager' ? 'selected': '')}} value="Plant_Manager">Plant Manager</option>
                                    <option {{ ($viewUser->role == 'QC' ? 'selected': '')}} value="QC">QC</option>
                                    <option {{ ($viewUser->role == 'Supervisor' ? 'selected': '')}} value="Supervisor">Supervisor</option>
                                </select>
                                <span class="" style="color: red">{{$errors->first('role')}}</span>
                            </div>
        
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="form-select" required="">
                                    <option selected="" disabled="" value="">Select Status</option>
                                    <option {{($viewUser->status == 'active' ? 'selected': '')}} value="Active">Active</option>
                                    <option {{($viewUser->status == 'inactive' ? 'selected': '')}} value="Inactive">Inactive </option>
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
            <div class="col-12 col-xl-4">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0 fw-bold">About</h5>
                            </div>
                           
                        </div>
                        <div class="full-info">
                            <div class="info-list d-flex flex-column gap-3">
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">account_circle</span>
                                    <p class="mb-0">Employee ID: {{$viewUser->employeeID}}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">account_circle</span>
                                    <p class="mb-0">Full Name: {{$viewUser->name}}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">account_circle</span>
                                    <p class="mb-0">UserName: {{$viewUser->username}}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                    class="material-icons-outlined">send</span>
                                <p class="mb-0">Email: {{$viewUser->email}}</p>
                            </div>
                            <div class="info-list-item d-flex align-items-center gap-3"><span
                                    class="material-icons-outlined">call</span>
                                <p class="mb-0">Phone: {{$viewUser->phone}}</p>
                            </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">done</span>
                                    <p class="mb-0">Status: {{$viewUser->status}}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">code</span>
                                    <p class="mb-0">Role: {{$viewUser->role}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
        </div><!--end row-->



    </div>
@endsection
@section('script')
    <!--bootstrap js-->
@endsection
