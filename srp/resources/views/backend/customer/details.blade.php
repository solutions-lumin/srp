@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <a href="{{route('customer.index')}}"><i class="ti ti-arrow-narrow-left me-1"></i>Back to Customers</a>
        </div>

        <div class="card">
            <div class="card-body pb-2">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar avatar-xxl avatar-rounded me-3 flex-shrink-0">
                            <img src="assets/img/icons/company-icon-01.svg" alt="img">
                            <span class="status online"></span>
                        </div>
                        <div>
                            <h5 class="mb-1">ABC Pvt Ltd</h5>
                            <p class="mb-2"><i class="ti ti-map-pin-pin me-1"></i>22, Industrial Street, Mumbai, India</p>
                            <div class="d-flex align-items-center">
                                <p class="d-inline-flex align-items-center mb-0">
                                    <i class="ti ti-star-filled text-warning me-1"></i> 4.8
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <a href="#" class="btn btn-dark">
                            <i class="ti ti-plus me-1"></i>Add Deal
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="ti ti-mail me-1"></i>Send Email
                        </a>
                        <a href="chat.html" class="action-icon btn btn-icon btn-sm btn-outline-light shadow">
                            <i class="ti ti-brand-hipchat"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-outline-light shadow" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit">
                            <i class="ti ti-edit-circle"></i>
                        </a>
                        <div class="act-dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="action-icon btn btn-icon btn-sm btn-outline-light shadow" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact">
                                    <i class="ti ti-trash me-1"></i>Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Customer Header -->
    </div>

    <div class="col-xl-9">
        <div class="card mb-3">
            <div class="card-body pb-0 pt-2">
                <ul class="nav nav-tabs nav-bordered mb-3" role="tablist">
                    <li class="nav-item">
                        <a href="#products" data-bs-toggle="tab" class="nav-link active border-3">
                            <i class="ti ti-package me-1"></i>Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quotation" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-file-invoice me-1"></i>Quotation / PFI
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#sales-order" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-file-dollar me-1"></i>Sales Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#job" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-briefcase me-1"></i>Job Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#qc" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-checkup-list me-1"></i>QC
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#packing" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-box me-1"></i>Packing Slip
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#dispatch" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-truck-delivery me-1"></i>Dispatch
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#billing" data-bs-toggle="tab" class="nav-link border-3">
                            <i class="ti ti-receipt me-1"></i>Billing
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="products">
                        @include('backend.customer.products')
                    </div>

                    <div class="tab-pane fade" id="quotation">
                        @include('backend.quotation.index')
                    </div>

                    <div class="tab-pane fade" id="sales-order">
                        @include('backend.sales-order.index')
                    </div>

                    <div class="tab-pane fade" id="job">
                        @include('backend.job.index')
                    </div>

                    <div class="tab-pane fade" id="qc">
                        {{-- @include('customers.tabs.qc') --}}
                    </div>

                    <div class="tab-pane fade" id="packing">
                        {{-- @include('customers.tabs.packing') --}}
                    </div>

                    <div class="tab-pane fade" id="dispatch">
                        {{-- @include('customers.tabs.dispatch') --}}
                    </div>

                    <div class="tab-pane fade" id="billing">
                        {{-- @include('customers.tabs.billing') --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection