@extends('QC.admin_dashboard')
@section('content')

    <div class="main-content">

        <form action="" method="GET">
            {{--  <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
                <a href=""><span class="me-1">Dashboard</span><span class="text-secondary"></span></a>
                <a href="?role=plant_manager"><span class="me-1">SQF 01</span><span class="text-secondary"></span></a>
                <a href="?role=qc"><span class="me-1">QC</span><span class="text-secondary"></span></a>
                <a href="?role=supervisor"><span class="me-1">Supervisor</span><span class="text-secondary"></span></a>
            </div>  --}}


            <div class="row g-3">
                <div class="col-auto">
                    <div class="position-relative">
                        <form method="GET" action="">
                            <input class="form-control px-5" type="search" name="search" value="{{ request('search') }}"
                                placeholder="Search Customers">
                            <span
                                class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                        </form>
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
                        <a href="{{ route('qc.haccp_3.add') }}" class="btn  px-4"
                            style="background-color: #034EA2; color: white;"><i class="bi bi-plus-lg me-2"></i>Add HACCP 03</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr class="text-center">
                                    <th>
                                        <input class="form-check-input" type="checkbox">
                                    </th>
                                    <th>#ID</th>
                                    <th>Name Perform</th>
                                    <th>Name Perform Check</th>
                                    <th>Perform Approve</th>
                                    <th>Check Time</th>
                                    <th>Create At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($haccp03Record as $item)
                                    <tr class="text-center">
                                        <td>
                                            <input class="form-check-input" type="checkbox">
                                        </td>
                                        <td>{{$item->id }}</td>
                                        <td>{{ $item->person_perform }}</td>
                                        <td>{{ $item->person_perfo_check }}</td>
                                        <td>
                                            @if($item->person_perfo_approve == 'Progress')
                                            <span class="badge bg-grd-primary">Progress</span>
                                            @elseif($item->person_perfo_approve == 'Verify')
                                            <span class="badge bg-grd-success">Verify</span>
                                            @elseif($item->person_perfo_approve == 'Unverify')
                                            <span class="badge bg-grd-warning text-dark">Unverify</span>
                                            @elseif($item->person_perfo_approve == 'Rejected')
                                            <span class="badge bg-grd-danger">Rejected</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($item->time_of_check))
                                            {{ date('d m Y', strtotime($item->time_of_check)) }}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $item->date }}
                                        </td>
                                        <td width="100px">
                                            <a class="" href="{{ route('qc.haccp_3.show', $item->id) }}">
                                                <i class="bi bi-eye-fill me-2"></i>
                                            </a>
                                            <a class="" href="{{ route('qc.haccp_3.edit', $item->id) }}">
                                                <i class="bi bi-box-arrow-right me-2"></i>
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}" class="text-danger" href="javascript:;">
                                                <i class="bi bi-trash-fill me-2"></i>
                                            </a>
                                        </td>
                                    </tr>


                                    <!-- Modal for Deletion -->
                                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom-0 py-2">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Confirm Deletion</h5>
                                                    <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="modal">
                                                        <i class="material-icons-outlined">close</i>
                                                    </a>
                                                </div>
                                                <div class="modal-body">Are you sure you want to delete this item?</div>
                                                <div class="modal-footer border-top-0">
                                                    <form action="{{ route('qc.haccp_3.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                    <a href="javascript:;" class="btn btn-info" data-bs-dismiss="modal">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </tbody>
                        </table>
                    </div>


                    @if ($haccp03Record->lastPage() > 1)
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mt-3">
                                {{-- Previous Page Link --}}
                                <li class="page-item {{ $haccp03Record->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $haccp03Record->previousPageUrl() ?? 'javascript:;' }}"
                                        tabindex="-1">Previous</a>
                                </li>

                                {{-- Pagination Links --}}
                                @for ($i = 1; $i <= $haccp03Record->lastPage(); $i++)
                                    <li class="page-item {{ $haccp03Record->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $haccp03Record->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                {{-- Next Page Link --}}
                                <li class="page-item {{ !$haccp03Record->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $haccp03Record->nextPageUrl() ?? 'javascript:;' }}">Next</a>
                                </li>
                            </ul>
                        </nav>
                    @endif


                </div>
            </div>
        </div>


    </div>
@endsection
@section('script')
@endsection
