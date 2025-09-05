{{-- @extends('layouts.app')

@section('content') --}}
<div class="content pb-0">

    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
        <div>
            <h4 class="mb-1">Job Cards <span class="badge badge-soft-primary ms-2">123</span></h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Job Cards</li>
                </ol>
            </nav>
        </div>
        <div class="gap-2 d-flex align-items-center flex-wrap">
            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
                <i class="ti ti-square-rounded-plus-filled me-1"></i>Add Job Card
            </a>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- card start -->
    <div class="card border-0 rounded-0">
        <div class="card-body">

            <!-- Job Card List -->
            <div class="job-wrap border-bottom mb-3">
                <a href="#" class="d-flex align-items-center justify-content-between mb-3" data-bs-toggle="collapse" data-bs-target="#job_1">
                    <h6 class="fs-16 mb-0">Recent Job Cards
                        <span class="badge badge-avatar text-dark bg-soft-dark rounded-circle ms-2 fw-medium">5</span>
                    </h6>
                    <i class="ti ti-chevron-up arrow-rotate"></i>
                </a>
                <div class="collapse show" id="job_1">
                    
                    <!-- Example Job Card #1 -->
                    <div class="card rounded-start-0 mb-3">
                        <div class="card-body border-start border-3 border-info">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                <div class="d-flex align-items-center flex-wrap row-gap-2">
                                    <span class="me-3"><i class="ti ti-grip-vertical"></i></span>
                                    <h6 class="fw-semibold mb-0 fs-14 me-3">Job #4508 - TRI PLUS</h6>
                                    <span class="badge badge-soft-success border-0 me-2">Pending</span>
                                    <span class="badge badge-soft-info">Qty: 54</span>
                                </div>
                                <div class="d-flex align-items-center flex-wrap row-gap-2">
                                    <div class="me-2">
                                        <i class="ti ti-calendar-exclamation me-1"></i>02 Aug 2025
                                    </div>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon btn btn-xs shadow btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Example Job Card #2 -->
                    <div class="card rounded-start-0 mb-3">
                        <div class="card-body border-start border-3 border-primary">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                <div class="d-flex align-items-center flex-wrap row-gap-2">
                                    <span class="me-3"><i class="ti ti-grip-vertical"></i></span>
                                    <h6 class="fw-semibold mb-0 fs-14 me-3">Job #4509 - ULTRA PLAIN</h6>
                                    <span class="badge badge-soft-success border-0 me-2">In-Progress</span>
                                    <span class="badge badge-soft-info">Qty: 120</span>
                                </div>
                                <div class="d-flex align-items-center flex-wrap row-gap-2">
                                    <div class="me-2">
                                        <i class="ti ti-calendar-exclamation me-1"></i>15 Aug 2025
                                    </div>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon btn btn-xs shadow btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Example Job Card #3 -->
                    <div class="card rounded-start-0 mb-3">
                        <div class="card-body border-start border-3 border-warning">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                <div class="d-flex align-items-center flex-wrap row-gap-2">
                                    <span class="me-3"><i class="ti ti-grip-vertical"></i></span>
                                    <h6 class="fw-semibold mb-0 fs-14 me-3">Job #4510 - D3 FOIL</h6>
                                    <span class="badge badge-soft-success border-0 me-2">Completed</span>
                                    <span class="badge badge-soft-info">Qty: 75</span>
                                </div>
                                <div class="d-flex align-items-center flex-wrap row-gap-2">
                                    <div class="me-2">
                                        <i class="ti ti-calendar-exclamation me-1"></i>20 Aug 2025
                                    </div>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon btn btn-xs shadow btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Job Card List -->

        </div>
    </div>
    <!-- card end -->

</div>

<!-- Offcanvas Add Job Card (Static Form) -->
<!-- Offcanvas Add Job Card -->
<div class="offcanvas offcanvas-end offcanvas-large {{ request('offcanvas') === 'add' ? 'show' : '' }}" 
     tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
        <h5 class="mb-0">Add Job Card</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form>
            <!-- General Info -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">PO Number</label>
                    <input type="text" class="form-control" value="PO-12345">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">PO Date</label>
                    <input type="date" class="form-control" value="2025-08-12">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Job Card No</label>
                    <input type="text" class="form-control" value="JOB-4508">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Job Card Date</label>
                    <input type="date" class="form-control" value="2025-08-12">
                </div>
            </div>

            <!-- Customer & Product -->
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" value="Pell Tech Health Care Pvt Ltd">
            </div>
            <div class="mb-3">
                <label class="form-label">Shade Card No</label>
                <input type="text" class="form-control" value="PEL-17">
            </div>
            <div class="mb-3">
                <label class="form-label">Shade Card Expiry Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" value="TRI PLUS">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" class="form-control" value="PALP283/0A06">
            </div>

            <!-- Specification -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Specification</label>
                    <input type="text" class="form-control" value="0.025mm">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">GSM</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Width</label>
                    <input type="text" class="form-control" value="250mm">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Surface</label>
                    <input type="text" class="form-control" value="DSO">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">NC Coating</label>
                    <input type="text" class="form-control" value="No">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Winding Direction</label>
                    <input type="text" class="form-control" value="UNIVERSAL 111">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tolerance Limit</label>
                    <input type="text" class="form-control" value="Not Specified">
                </div>
            </div>

            <!-- Colors -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">No of Colours</label>
                    <input type="number" class="form-control" value="4">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Pantone Nos</label>
                    <input type="text" class="form-control" value="Black">
                </div>
            </div>

            <!-- Job Details -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Job Quantity</label>
                    <input type="number" class="form-control" value="54">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Job Type</label>
                    <select class="form-select">
                        <option selected>New</option>
                        <option>Repeat</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">SOP No</label>
                    <input type="text" class="form-control" value="FISOPPRD/IG">
                </div>
            </div>

            <!-- Printing & Material -->
            <h6 class="mt-3">Printing Details</h6>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Start Time</label>
                    <input type="time" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">End Time</label>
                    <input type="time" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Machine No</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Operator</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Material Issued</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Material Returned</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Quantity Printed</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <!-- QC -->
            <h6 class="mt-3">Quality Control</h6>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">QC Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">QC Sign</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <!-- Remarks -->
            <div class="mb-3">
                <label class="form-label">Remarks</label>
                <textarea class="form-control" rows="2"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Save Job Card</button>
        </form>
    </div>
</div>

<!-- /Offcanvas Add Job Card -->
{{-- @endsection --}}
