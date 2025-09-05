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
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <a href="#" class="btn btn-primary">
                            <i class="ti ti-mail me-1"></i>Send Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Customer Header -->
    </div>

    <div>
        <div class="card mb-3">
            <div class="card-body pb-0 pt-2">
                <ul class="nav nav-tabs nav-bordered mb-3" role="tablist">
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=products"
                        class="nav-link border-3 {{ request('tab', 'products') == 'products' ? 'active' : '' }}">
                            <i class="ti ti-package me-1"></i>Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=quotation"
                        class="nav-link border-3 {{ request('tab') == 'quotation' ? 'active' : '' }}">
                            <i class="ti ti-file-invoice me-1"></i>Quotation / PFI
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=sales-order"
                        class="nav-link border-3 {{ request('tab') == 'sales-order' ? 'active' : '' }}">
                            <i class="ti ti-file-dollar me-1"></i>Sales Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=job"
                        class="nav-link border-3 {{ request('tab') == 'job' ? 'active' : '' }}">
                            <i class="ti ti-briefcase me-1"></i>Job Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=qc"
                        class="nav-link border-3 {{ request('tab') == 'qc' ? 'active' : '' }}">
                            <i class="ti ti-checkup-list me-1"></i>QC
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=packing"
                        class="nav-link border-3 {{ request('tab') == 'packing' ? 'active' : '' }}">
                            <i class="ti ti-box me-1"></i>Packing Slip
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=dispatch"
                        class="nav-link border-3 {{ request('tab') == 'dispatch' ? 'active' : '' }}">
                            <i class="ti ti-truck-delivery me-1"></i>Dispatch
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url()->current() }}?tab=billing"
                        class="nav-link border-3 {{ request('tab') == 'billing' ? 'active' : '' }}">
                            <i class="ti ti-receipt me-1"></i>Billing
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade {{ request('tab', 'products') == 'products' ? 'show active' : '' }}">
                        @include('backend.customer.products')
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'quotation' ? 'show active' : '' }}">
                        @include('backend.quotation.index')
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'sales-order' ? 'show active' : '' }}">
                        @include('backend.sales-order.index')
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'job' ? 'show active' : '' }}">
                        @include('backend.job.index')
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'qc' ? 'show active' : '' }}">
                        {{-- @include('customers.tabs.qc') --}}
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'packing' ? 'show active' : '' }}">
                        {{-- @include('customers.tabs.packing') --}}
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'dispatch' ? 'show active' : '' }}">
                        {{-- @include('customers.tabs.dispatch') --}}
                    </div>
                    <div class="tab-pane fade {{ request('tab') == 'billing' ? 'show active' : '' }}">
                        {{-- @include('customers.tabs.billing') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection