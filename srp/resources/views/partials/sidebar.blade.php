<!-- Sidenav Menu Start -->
<div class="sidebar" id="sidebar">
    <!-- Start Logo -->
    <div class="sidebar-logo">
        <div>
            <a href="#" class="logo logo-normal">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="#" class="logo-small">
                <img src="{{ asset('assets/img/logo-small.svg') }}" alt="Logo">
            </a>
            <a href="#" class="dark-logo">
                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>
        <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
            <i class="ti ti-arrow-bar-to-left"></i>
        </button>
        <button class="sidebar-close">
            <i class="ti ti-x align-middle"></i>
        </button>
    </div>
    <!-- End Logo -->

    <!-- Sidenav Menu -->
    <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title d-flex justify-content-between align-items-center">
                    <span>Customers</span>
                    <!-- Add Customer Button -->
                    <a href="{{ route('customer.create') }}" class="btn btn-sm btn-primary ms-2" title="Add Customer">
                        <i class="ti ti-plus"></i>
                    </a>
                </li>

                <!-- Customer 1 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="ti ti-users"></i>
                        <span>ABC Pvt Ltd</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('customer.products') }}">Products</a></li>
                        <li><a href="{{ route('customer.quotation') }}">Quotation / PFI</a></li>
                        <li><a href="{{ route('customer.sales-order') }}">Sales Orders</a></li>
                        <li><a href="#">Job Management</a></li>
                        <li><a href="#">QC</a></li>
                        <li><a href="#">Packing Slip</a></li>
                        <li><a href="#">Dispatch</a></li>
                        <li><a href="#">Billing</a></li>
                    </ul>
                </li>

                <!-- Customer 2 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="ti ti-users"></i>
                        <span>XYZ Enterprises</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Quotation / PFI</a></li>
                        <li><a href="#">Sales Orders</a></li>
                        <li><a href="#">Job Management</a></li>
                        <li><a href="#">QC</a></li>
                        <li><a href="#">Packing Slip</a></li>
                        <li><a href="#">Dispatch</a></li>
                        <li><a href="#">Billing</a></li>
                    </ul>
                </li>

                <!-- Customer 3 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="ti ti-users"></i>
                        <span>Global Traders</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Quotation / PFI</a></li>
                        <li><a href="#">Sales Orders</a></li>
                        <li><a href="#">Job Management</a></li>
                        <li><a href="#">QC</a></li>
                        <li><a href="#">Packing Slip</a></li>
                        <li><a href="#">Dispatch</a></li>
                        <li><a href="#">Billing</a></li>
                    </ul>
                </li>

                <!-- Vendor -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="ti ti-building-store"></i>
                        <span>Vendors</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="#">Vendor Registration</a></li>
                        <li><a href="#">Stock Update</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidenav Menu End -->
