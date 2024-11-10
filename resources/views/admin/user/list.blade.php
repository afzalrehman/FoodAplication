@extends('admin.admin_dashboard')
@section('content')
    <div class="main-content">


        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
            <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">(88754)</span></a>
            <a href="javascript:;"><span class="me-1">Admin</span><span class="text-secondary">(56242)</span></a>
            <a href="javascript:;"><span class="me-1">Plant Manager</span><span class="text-secondary">(17)</span></a>
            <a href="javascript:;"><span class="me-1">QC</span><span class="text-secondary">(88754)</span></a>
            <a href="javascript:;"><span class="me-1">Supervisor</span><span class="text-secondary">(88754)</span></a>
        </div>

        <div class="row g-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input class="form-control px-5" type="search" placeholder="Search Customers">
                    <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto">
                <div class="btn-group position-static">
                    <button class="btn  px-4" style="background-color: #034EA2; color: white;">Search</button>
                </div>
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <button class="btn btn-filter px-4"><i class="bi bi-box-arrow-right me-2"></i>Export</button>
                    <a href="{{url('admin/user/add')}}" class="btn  px-4" style="background-color: #034EA2; color: white;"><i class="bi bi-plus-lg me-2"></i>Add Users</a>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>
                                        <input class="form-check-input" type="checkbox">
                                    </th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email Address</th>
                                    <th>Create At</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $item)
                                    
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="product-box">
                                                <img src="{{asset('assets/images/orders/01.png')}}" width="70" class="rounded-3" alt="">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:;" class="product-title">Muhammad Afzal</a>
                                                <p class="mb-0 product-category">Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Afzal</td>
                                    <td>muhammadafzal1903@gmail.com</td>
                                    <td>
                                       031243434
                                    </td>
                                  
                                    <td>
                                        Nov 12, 10:45 PM
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('script')
    <!--bootstrap js-->
@endsection
