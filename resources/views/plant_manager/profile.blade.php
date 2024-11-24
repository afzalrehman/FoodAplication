@extends('plant_manager.admin_dashboard')
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
                @include('_message')
                <div class="position-relative mb-5">
                    <img src="assets/images/gallery/profile-cover.png" class="img-fluid rounded-4 shadow" alt="">
                    <div class="profile-avatar position-absolute top-100 start-50 translate-middle">
                        <img src="{{ asset('upload/img/user_profile/' . $user_profile->photo) }}"
                            class="img-fluid rounded-circle p-1 bg-grd-danger shadow" width="170" height="170"
                            alt="">
                    </div>
                </div>
                <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
                    <div class="">
                        <h3>{{ $user_profile->name }}</h3>
                        <p class="mb-0">{{ $user_profile->email }}</p>
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
                        <form class="row g-3 " action="{{ url('profile/update') }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ $user_profile->name }}" placeholder="Name" required="">
                                <span class="" style="color: red">{{ $errors->first('name') }}</span>

                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="{{ $user_profile->username }}" id="username" placeholder="Username"
                                    required="">
                                <span class="" style="color: red">{{ $errors->first('username') }}</span>
                            </div>


                            <div class="col-md-12">
                                <label for="profile" class="form-label">Profile</label>
                                <input type="file" class="form-control" name="profile" value="{{ $user_profile->photo }}"
                                    id="profile" placeholder="profile">
                                <span class="" style="color: red">{{ $errors->first('profile') }}</span>

                                <img src="{{ asset('upload/img/user_profile/' . $user_profile->photo) }}" width="100px"
                                    alt="Profile Pic">
                            </div>


                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
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
                                    <p class="mb-0">Employee ID: {{ $user_profile->employeeID }}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">account_circle</span>
                                    <p class="mb-0">Full Name: {{ $user_profile->name }}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">account_circle</span>
                                    <p class="mb-0">UserName: {{ $user_profile->username }}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">send</span>
                                    <p class="mb-0">Email: {{ $user_profile->email }}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">call</span>
                                    <p class="mb-0">Phone: {{ $user_profile->phone }}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">done</span>
                                    <p class="mb-0">Status: {{ $user_profile->status }}</p>
                                </div>
                                <div class="info-list-item d-flex align-items-center gap-3"><span
                                        class="material-icons-outlined">code</span>
                                    <p class="mb-0">Role: {{ $user_profile->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!--end row-->
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0 fw-bold">Password Change</h5>
                            </div>

                        </div>
                        <form class="row g-3" action="{{ url('user/password/change') }}" method="POST">
                            @csrf

                            <!-- Current Password -->
                            <div class="col-md-6">
                                <div class="input-group" id="show_hide_current_password">
                                    <input type="password" class="form-control" name="current_password"
                                        placeholder="Old Password">
                                    <a href="javascript:;" class="input-group-text bg-transparent toggle-password">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </a>
                                </div>
                                @if ($errors->has('current_password'))
                                    <small class="text-danger">{{ $errors->first('current_password') }}</small>
                                @endif
                            </div>

                            <!-- New Password -->
                            <div class="col-md-6">
                                <div class="input-group" id="show_hide_new_password">
                                    <input type="password" class="form-control" name="new_password"
                                        placeholder="New Password">
                                    <a href="javascript:;" class="input-group-text bg-transparent toggle-password">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </a>
                                </div>
                                @if ($errors->has('new_password'))
                                    <small class="text-danger">{{ $errors->first('new_password') }}</small>
                                @endif
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-6">
                                <div class="input-group" id="show_hide_confirm_password">
                                    <input type="password" class="form-control" name="new_password_confirmation"
                                        placeholder="Confirm Password">
                                    <a href="javascript:;" class="input-group-text bg-transparent toggle-password">
                                        <i class="bi bi-eye-slash-fill"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary px-4">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div><!--end row-->



    </div>
@endsection
@section('script')
    <script>
        document.querySelectorAll('.toggle-password').forEach(item => {
            item.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const icon = this.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('bi-eye-slash-fill');
                    icon.classList.add('bi-eye-fill');
                } else {
                    input.type = 'password';
                    icon.classList.remove('bi-eye-fill');
                    icon.classList.add('bi-eye-slash-fill');
                }
            });
        });
    </script>
@endsection
