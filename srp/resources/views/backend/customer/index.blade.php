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

    <div class="d-flex align-items-center gap-2 flex-wrap">                               
        <div class="d-flex align-items-center shadow p-1 rounded border view-icons bg-white">
            <a href="#" class="btn btn-sm p-1 border-0 fs-14">
                <i class="ti ti-list-tree"></i>
            </a>
            <a href="#" class="flex-shrink-0 btn btn-sm p-1 border-0 ms-1 fs-14 active">
                <i class="ti ti-grid-dots"></i>
            </a>
        </div>
        <a href="javascript:void(0);" class="btn btn-primary">
            <i class="ti ti-square-rounded-plus-filled me-1"></i>Add Company
        </a>
    </div>
</div>


    <!-- Customer 1 -->
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="card border shadow">
            <div class="card-body">
                <!-- Header -->
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-3 border-bottom pb-3">
                    <div class="d-flex align-items-center">
                        <a href="#"
                           class="avatar border rounded-circle flex-shrink-0 me-2">
                            <img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
                        </a>
                        <div>
                            <h6 class="fs-14">
                                <a href="{{route('customer.details')}}" class="fw-medium">
                                    ABC Pvt Ltd
                                </a>
                            </h6>
                            <div class="set-star text-default">
                                <i class="ti ti-star-filled me-1 text-warning"></i>4.5
                            </div>
                        </div>
                    </div>
                    <div class="dropdown table-action">
                        <a href="#" class="action-icon btn btn-icon btn-sm btn-outline-light shadow"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('customer.create', 1) }}"><i class="ti ti-edit text-blue"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer"><i class="ti ti-trash"></i> Delete</a>
                            <a class="dropdown-item" href="#"><i class="ti ti-eye text-blue-light"></i> Preview</a>
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
                        <a href="mailto:abc@example.com" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-mail fs-14"></i></a>
                        <a href="tel:+919876543210" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-phone-check fs-14"></i></a>
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle me-1"><i class="ti ti-message-circle-share fs-14"></i></a>
                        <a href="#" class="avatar avatar-xs text-dark rounded-circle"><i class="ti ti-brand-facebook fs-14"></i></a>
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
                                <a href="#" class="fw-medium">
                                    XYZ Enterprises
                                </a>
                            </h6>
                            <div class="set-star text-default">
                                <i class="ti ti-star-filled me-1 text-warning"></i>4.2
                            </div>
                        </div>
                    </div>
                    <div class="dropdown table-action">
                        <a href="#" class="action-icon btn btn-icon btn-sm btn-outline-light shadow"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('customer.create', 2) }}"><i class="ti ti-edit text-blue"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer"><i class="ti ti-trash"></i> Delete</a>
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
                                <a href="#" class="fw-medium">
                                    Global Traders
                                </a>
                            </h6>
                            <div class="set-star text-default">
                                <i class="ti ti-star-filled me-1 text-warning"></i>4.8
                            </div>
                        </div>
                    </div>
                    <div class="dropdown table-action">
                        <a href="#" class="action-icon btn btn-icon btn-sm btn-outline-light shadow"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('customer.create', 3) }}"><i class="ti ti-edit text-blue"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_customer"><i class="ti ti-trash"></i> Delete</a>
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

@endsection