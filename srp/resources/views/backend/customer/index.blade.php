@extends('layouts.app')

@section('content')

<div class="row">
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
        <div>
            <h4 class="mb-1">Companies <span class="badge badge-soft-primary ms-2">125</span></h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Companies</li>
                </ol>
            </nav>
        </div>
        <div class="gap-2 d-flex align-items-center flex-wrap">
            <div class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-light px-2 shadow" data-bs-toggle="dropdown">
                    <i class="ti ti-package-export me-2"></i>Export
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <ul>
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="ti ti-file-type-pdf me-1"></i>Export as PDF
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="ti ti-file-type-xls me-1"></i>Export as Excel
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="javascript:void(0);" class="btn btn-icon btn-outline-light shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh">
                <i class="ti ti-refresh"></i>
            </a>
            <a href="javascript:void(0);" class="btn btn-icon btn-outline-light shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                <i class="ti ti-transition-top"></i>
            </a>
        </div>
    </div>

    <!-- Filter + Actions -->
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <!-- Static Filter Button -->
            <a href="javascript:void(0);" class="btn btn-outline-light shadow px-2">
                <i class="ti ti-filter me-2"></i>Filter
            </a>

            <!-- Static Search Box -->
            <div class="input-icon input-icon-start position-relative">
                <span class="input-icon-addon text-dark"><i class="ti ti-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <!-- View Toggle -->
            <div class="d-flex align-items-center shadow p-1 rounded border view-icons bg-white">
                <a href="javascript:void(0);" class="btn btn-sm p-1 border-0 fs-14 view-toggle" data-view="table">
                    <i class="ti ti-list-tree"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-sm p-1 border-0 ms-1 fs-14 view-toggle active" data-view="grid">
                    <i class="ti ti-grid-dots"></i>
                </a>
            </div>

            <!-- Add New Company -->
            {{-- <a class="btn btn-primary shadow px-3 d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
                <i class="ti ti-plus me-1"></i> Add New Company
            </a> --}}
            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add Company</a>
        </div>
    </div>

    <div class="col-md-12 d-flex mt-4">
        <div class="card flex-fill">

            <div class="card-body">
                {{-- Table View --}}
                <div id="table-view" class="table-responsive d-none">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Customer 1 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar border rounded-circle flex-shrink-0 me-2">
                                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                                        </a>
                                        <a href="{{route('customer.details')}}" class="fw-medium">ABC Pvt Ltd</a>
                                    </div>
                                </td>
                                <td>abc@example.com</td>
                                <td>+91 9876543210</td>
                                <td>India</td>
                                <td>
                                    <span class="badge badge-soft-success me-1">Active</span>
                                    <span class="badge badge-soft-warning">Rated</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <!-- Edit -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-primary shadow-sm d-flex align-items-center gap-1"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit_customer" title="Edit">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>

                                        <!-- Delete -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-danger shadow-sm d-flex align-items-center gap-1"
                                        data-bs-toggle="modal" data-bs-target="#delete_customer" title="Delete">
                                            <i class="ti ti-trash"></i> Delete
                                        </a>

                                        <!-- Preview -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-info shadow-sm d-flex align-items-center gap-1" 
                                        title="Preview">
                                            <i class="ti ti-eye"></i> Preview
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Customer 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar border rounded-circle flex-shrink-0 me-2">
                                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                                        </a>
                                        <a href="#" class="fw-medium">XYZ Enterprises</a>
                                    </div>
                                </td>
                                <td>xyz@example.com</td>
                                <td>+1 875455453</td>
                                <td>Germany</td>
                                <td>
                                    <span class="badge badge-soft-success me-1">Active</span>
                                    <span class="badge badge-soft-warning">Rated</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <!-- Edit -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-primary shadow-sm d-flex align-items-center gap-1"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit_customer" title="Edit">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>

                                        <!-- Delete -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-danger shadow-sm d-flex align-items-center gap-1"
                                        data-bs-toggle="modal" data-bs-target="#delete_customer" title="Delete">
                                            <i class="ti ti-trash"></i> Delete
                                        </a>

                                        <!-- Preview -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-info shadow-sm d-flex align-items-center gap-1" 
                                        title="Preview">
                                            <i class="ti ti-eye"></i> Preview
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Customer 3 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar border rounded-circle flex-shrink-0 me-2">
                                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                                        </a>
                                        <a href="#" class="fw-medium">Global Traders</a>
                                    </div>
                                </td>
                                <td>global@example.com</td>
                                <td>+44 987654321</td>
                                <td>UK</td>
                                <td>
                                    <span class="badge badge-soft-success me-1">Active</span>
                                    <span class="badge badge-soft-warning">Rated</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <!-- Edit -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-primary shadow-sm d-flex align-items-center gap-1"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit_customer" title="Edit">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>

                                        <!-- Delete -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-danger shadow-sm d-flex align-items-center gap-1"
                                        data-bs-toggle="modal" data-bs-target="#delete_customer" title="Delete">
                                            <i class="ti ti-trash"></i> Delete
                                        </a>

                                        <!-- Preview -->
                                        <a href="javascript:void(0);" 
                                        class="btn btn-sm btn-outline-info shadow-sm d-flex align-items-center gap-1" 
                                        title="Preview">
                                            <i class="ti ti-eye"></i> Preview
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                {{-- Grid View --}}
                <div id="grid-view" class="row g-3">
                    <!-- Customer 1 -->
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="card border shadow">
                            <div class="card-body">
                                <!-- Header -->
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3 border-bottom pb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar border rounded-circle flex-shrink-0 me-2">
                                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14">
                                                <a href="{{route('customer.details')}}" class="fw-medium">
                                                    ABC Pvt Ltd
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon btn btn-icon btn-sm btn-outline-light shadow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit_customer">
                                                <i class="ti ti-edit text-blue"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer">
                                                <i class="ti ti-trash"></i> Delete
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti ti-eye text-blue-light"></i> Preview
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Details -->
                                <div class="d-block">
                                    <div class="d-flex flex-column mb-0">
                                        <p class="text-default d-inline-flex align-items-center mb-2">
                                            <i class="ti ti-mail text-dark me-1"></i>abc@example.com
                                        </p>
                                        <p class="text-default d-inline-flex align-items-center mb-2">
                                            <i class="ti ti-phone text-dark me-1"></i>+91 9876543210
                                        </p>
                                        <p class="text-default d-inline-flex align-items-center">
                                            <i class="ti ti-map-pin-pin text-dark me-1"></i>India
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-tag badge-soft-success me-2">Active</span>
                                        <span class="badge badge-tag badge-soft-warning">Rated</span>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 border-top pt-3 mt-3">
                                    <div class="d-flex align-items-center grid-social-links">
                                        <a href="mailto:abc@example.com" class="avatar avatar-xs text-dark rounded-circle me-1">
                                            <i class="ti ti-mail fs-14"></i>
                                        </a>
                                        <a href="tel:+919876543210" class="avatar avatar-xs text-dark rounded-circle me-1">
                                            <i class="ti ti-phone-check fs-14"></i>
                                        </a>
                                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1">
                                            <i class="ti ti-message-circle-share fs-14"></i>
                                        </a>
                                        <a href="#" class="avatar avatar-xs text-dark rounded-circle">
                                            <i class="ti ti-brand-facebook fs-14"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-xs border-0">
                                            <img src="assets/img/profiles/avatar-01.jpg" class="rounded-circle" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer 2 -->
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="card border shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3 border-bottom pb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar border rounded-circle flex-shrink-0 me-2">
                                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14">
                                                <a href="#" class="fw-medium">XYZ Enterprises</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon btn btn-icon btn-sm btn-outline-light shadow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer">
                                                <i class="ti ti-trash"></i> Delete
                                            </a>
                                            <a class="dropdown-item" href="#"><i class="ti ti-eye text-blue-light"></i> Preview</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block">
                                    <div class="d-flex flex-column mb-0">
                                        <p class="text-default d-inline-flex align-items-center mb-2">
                                            <i class="ti ti-mail text-dark me-1"></i>xyz@example.com
                                        </p>
                                        <p class="text-default d-inline-flex align-items-center mb-2">
                                            <i class="ti ti-phone text-dark me-1"></i>+1 875455453
                                        </p>
                                        <p class="text-default d-inline-flex align-items-center">
                                            <i class="ti ti-map-pin-pin text-dark me-1"></i>Germany
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-tag badge-soft-success me-2">Active</span>
                                        <span class="badge badge-tag badge-soft-warning">Rated</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 border-top pt-3 mt-3">
                                    <div class="d-flex align-items-center grid-social-links">
                                        <a href="mailto:xyz@example.com" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-mail fs-14"></i></a>
                                        <a href="tel:+1875455453" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-phone-check fs-14"></i></a>
                                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-message-circle-share fs-14"></i></a>
                                        <a href="#" class="avatar avatar-xs text-dark rounded-circle"><i class="ti ti-brand-facebook fs-14"></i></a>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-xs border-0">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="rounded-circle" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer 3 -->
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="card border shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3 border-bottom pb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar border rounded-circle flex-shrink-0 me-2">
                                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14">
                                                <a href="#" class="fw-medium">Global Traders</a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon btn btn-icon btn-sm btn-outline-light shadow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer">
                                                <i class="ti ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ti ti-eye text-blue-light"></i> Preview</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block">
                                    <div class="d-flex flex-column mb-0">
                                        <p class="text-default d-inline-flex align-items-center mb-2">
                                            <i class="ti ti-mail text-dark me-1"></i>global@example.com
                                        </p>
                                        <p class="text-default d-inline-flex align-items-center mb-2">
                                            <i class="ti ti-phone text-dark me-1"></i>+44 987654321
                                        </p>
                                        <p class="text-default d-inline-flex align-items-center">
                                            <i class="ti ti-map-pin-pin text-dark me-1"></i>UK
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-tag badge-soft-success me-2">Active</span>
                                        <span class="badge badge-tag badge-soft-warning">Rated</span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 border-top pt-3 mt-3">
                                    <div class="d-flex align-items-center grid-social-links">
                                        <a href="mailto:global@example.com" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-mail fs-14"></i></a>
                                        <a href="tel:+44987654321" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-phone-check fs-14"></i></a>
                                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-message-circle-share fs-14"></i></a>
                                        <a href="#" class="avatar avatar-xs text-dark rounded-circle"><i class="ti ti-brand-facebook fs-14"></i></a>
                                    </div>
                                    <div>
                                        <span class="avatar avatar-xs border-0">
                                            <img src="assets/img/profiles/avatar-03.jpg" class="rounded-circle" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div>
</div>

<!-- Add offcanvas -->
<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
        <h5 class="mb-0">Add New Customer</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ url('save-customer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="accordion accordion-bordered" id="customer_accordion">

                <!-- Basic Info -->
                <div class="accordion-item rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#customer_basic">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-user-plus"></i></span>
                            Basic Info
                        </a>
                    </div>
                    <div class="accordion-collapse collapse show" id="customer_basic" data-bs-parent="#customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">GST Number</label>
                                        <input type="text" class="form-control" name="gst">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">PAN Number</label>
                                        <input type="text" class="form-control" name="pan">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Primary Location</label>
                                        <input type="text" class="form-control" name="primary_location">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address Info -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#customer_address">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-map-pin"></i></span>
                            Billing / Shipping Address
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="customer_address" data-bs-parent="#customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="addresses[0][address]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" name="addresses[0][city]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" name="addresses[0][state]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Pincode</label>
                                        <input type="text" class="form-control" name="addresses[0][pincode]">
                                    </div>
                                </div>
                            </div>
                            {{-- <button type="button" class="btn btn-outline-primary btn-sm">+ Add Address</button> --}}
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add Address</a>
                        </div>
                    </div>
                </div>

                <!-- Transport & Vendor -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#customer_transport">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-truck"></i></span>
                            Transport & Vendor
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="customer_transport" data-bs-parent="#customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Transporter</label>
                                        <select name="transporter" class="form-control">
                                            <option value="">Select</option>
                                            <option value="abc">abc</option>
                                            <option value="pqr">pqr</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Transport Terms</label>
                                        <select name="transport_terms" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Paid">Paid</option>
                                            <option value="To-Pay">To-Pay</option>
                                            <option value="International">International</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Payment Terms</label>
                                        <select name="payment_terms" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Paid">Paid</option>
                                            <option value="To-Pay">To-Pay</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Cylinder Terms</label>
                                        <select name="cylinder_terms" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Paid">Paid</option>
                                            <option value="To-Pay">To-Pay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Shadecard Validity</label>
                                        <input type="date" class="form-control" name="shadecard_validity">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Preferred Vendor</label>
                                        <input type="text" class="form-control" name="preferred_vendor">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tolerance Limit</label>
                                        <input type="number" class="form-control" name="tolerance_limit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contacts -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#customer_contacts">
                            <span class="avatar avatar-md rounded me-1"><i class="ti ti-phone"></i></span>
                            Contacts
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="customer_contacts" data-bs-parent="#customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="contacts[0][name]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="contacts[0][designation]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="contacts[0][email]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="contacts[0][phone]">
                                    </div>
                                </div>
                            </div>
                            {{-- <button type="button" class="btn btn-outline-primary btn-sm">+ Add Contact</button> --}}
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add Contact</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="d-flex align-items-center justify-content-end mt-3">
                <button type="button" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Customer</button>
            </div>
        </form>
    </div>
</div>
<!-- /Add offcanvas -->

<!-- edit offcanvas -->
<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit_customer">
    <div class="offcanvas-header border-bottom">
        <h5 class="mb-0">Edit Customer</h5>
        <button type="button"
            class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body">
        <form action="#" method="POST">
            <div class="accordion accordion-bordered" id="edit_customer_accordion">

                <!-- Basic Info -->
                <div class="accordion-item rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#edit_customer_basic">
                           <span class="avatar avatar-md rounded me-1"><i class="ti ti-user-plus"></i></span>
                           Basic Info
                        </a>
                    </div>
                    <div class="accordion-collapse collapse show" id="edit_customer_basic" data-bs-parent="#edit_customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" value="ABC Pvt Ltd">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">GST Number</label>
                                    <input type="text" class="form-control" value="27ABCDE1234F1Z5">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" value="ABCDE1234F">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Primary Location</label>
                                    <input type="text" class="form-control" value="Mumbai">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address Info -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#edit_customer_address">
                           <span class="avatar avatar-md rounded me-1"><i class="ti ti-map-pin"></i></span>
                           Billing / Shipping Address
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="edit_customer_address" data-bs-parent="#edit_customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" value="123, Business Street">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" value="Mumbai">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" value="Maharashtra">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" class="form-control" value="400001">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transport & Vendor -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#edit_customer_transport">
                           <span class="avatar avatar-md rounded me-1"><i class="ti ti-truck"></i></span>
                           Transport & Vendor
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="edit_customer_transport" data-bs-parent="#edit_customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Transporter</label>
                                    <input type="text" class="form-control" value="XYZ Transport Services">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Transport Terms</label>
                                    <input type="text" class="form-control" value="FOB">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Payment Terms</label>
                                    <input type="text" class="form-control" value="Net 30 Days">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Cylinder Terms</label>
                                    <input type="text" class="form-control" value="Return within 15 days">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Preferred Vendor</label>
                                    <input type="text" class="form-control" value="ABC Vendor Ltd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contacts -->
                <div class="accordion-item border-top rounded mb-3">
                    <div class="accordion-header">
                        <a href="#" class="accordion-button accordion-custom-button rounded"
                           data-bs-toggle="collapse" data-bs-target="#edit_customer_contacts">
                           <span class="avatar avatar-md rounded me-1"><i class="ti ti-phone"></i></span>
                           Contacts
                        </a>
                    </div>
                    <div class="accordion-collapse collapse" id="edit_customer_contacts" data-bs-parent="#edit_customer_accordion">
                        <div class="accordion-body border-top">
                            <div class="row mb-3">
                                <div class="col-md-3"><input type="text" class="form-control" value="John Doe"></div>
                                <div class="col-md-3"><input type="text" class="form-control" value="Manager"></div>
                                <div class="col-md-3"><input type="email" class="form-control" value="john@example.com"></div>
                                <div class="col-md-3"><input type="text" class="form-control" value="+91 9876543210"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"><input type="text" class="form-control" value="Jane Smith"></div>
                                <div class="col-md-3"><input type="text" class="form-control" value="Accountant"></div>
                                <div class="col-md-3"><input type="email" class="form-control" value="jane@example.com"></div>
                                <div class="col-md-3"><input type="text" class="form-control" value="+91 9123456780"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <div class="d-flex align-items-center justify-content-end mt-3">
                <button type="button" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
<!-- /edit offcanvas -->

<script>
    document.querySelectorAll('.view-toggle').forEach(btn => {
        btn.addEventListener('click', function () {
            // Remove active from all
            document.querySelectorAll('.view-toggle').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const view = this.getAttribute('data-view');
            if (view === "grid") {
                document.getElementById('grid-view').classList.remove('d-none');
                document.getElementById('table-view').classList.add('d-none');
            } else {
                document.getElementById('table-view').classList.remove('d-none');
                document.getElementById('grid-view').classList.add('d-none');
            }
        });
    });
</script>
@endsection