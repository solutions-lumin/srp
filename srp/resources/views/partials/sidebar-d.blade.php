<!-- Sidenav Menu Start -->
<div class="sidebar" id="sidebar">
    <!-- Start Logo -->
    <div class="sidebar-logo">
        <div>
            <!-- Logo Normal -->
            <a href="#" class="logo logo-normal">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>

            <!-- Logo Small -->
            <a href="#" class="logo-small">
                <img src="{{ asset('assets/img/logo-small.svg') }}" alt="Logo">
            </a>

            <!-- Logo Dark -->
            <a href="#" class="dark-logo">
                <img src="{{ asset('assets/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>
        <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn"> 
            <i class="ti ti-arrow-bar-to-left"></i>
        </button>

        <!-- Sidebar Menu Close -->
        <button class="sidebar-close">
            <i class="ti ti-x align-middle"></i>
        </button>                
    </div>
    <!-- End Logo -->

    <!-- Sidenav Menu -->
    <div class="sidebar-inner" data-simplebar>                
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <!-- Example: Dashboard Submenu -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-dashboard"></i>
                                <span>Dashboard</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="#">Deals Dashboard</a></li>
                                <li><a href="#">Leads Dashboard</a></li>
                                <li><a href="#">Project Dashboard</a></li>
                            </ul>
                        </li>

                        <!-- Example: Applications -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-brand-airtable"></i>
                                <span>Applications</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="#">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">
                                        Call <span class="menu-arrow inside-submenu"></span>
                                    </a>
                                    <ul>
                                        <li><a href="#">Video Call</a></li>
                                        <li><a href="#">Audio Call</a></li>
                                        <li><a href="#">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="#">Email</a></li>
                                <li><a href="#">To Do</a></li>
                                <li><a href="#">Notes</a></li>
                                <li><a href="#">File Manager</a></li>
                                <li><a href="#">Social Feed</a></li>
                                <li><a href="#">Kanban</a></li>
                                <li><a href="#">Invoices</a></li>
                            </ul>
                        </li>

                        {{-- Continue replacing href="*.html" with route() --}}
                        {{-- Example: <a href="{{ route('companies.index') }}">Companies</a> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidenav Menu End -->
