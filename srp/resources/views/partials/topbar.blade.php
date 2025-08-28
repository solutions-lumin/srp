<!-- Topbar Start -->
<header class="navbar-header">
    <div class="page-container topbar-menu">
        <div class="d-flex align-items-center gap-2">

            <!-- Logo -->
            <a href="{{ route('dashboard') }}" class="logo">
                <!-- Logo Normal -->
                <span class="logo-light">
                    <span class="logo-lg"><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"></span>
                    <span class="logo-sm"><img src="{{ asset('assets/img/logo-small.svg') }}" alt="small logo"></span>
                </span>
                <!-- Logo Dark -->
                <span class="logo-dark">
                    <span class="logo-lg"><img src="{{ asset('assets/img/logo-white.svg') }}" alt="dark logo"></span>
                </span>
            </a>

            <!-- Sidebar Mobile Button -->
            <a id="mobile_btn" class="mobile-btn" href="#sidebar">
                <i class="ti ti-menu-deep fs-24"></i>
            </a>

            <button class="sidenav-toggle-btn btn border-0 p-0" id="toggle_btn2"> 
                <i class="ti ti-arrow-bar-to-right"></i>
            </button> 
            
            <!-- Search (Desktop) -->
            <div class="me-auto d-flex align-items-center header-search d-lg-flex d-none">
                <div class="input-icon position-relative me-2">
                   <input type="text" class="form-control" placeholder="Search Keyword">
                   <span class="input-icon-addon d-inline-flex p-0 header-search-icon"><i class="ti ti-command"></i></span>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center">

            <!-- Search (Mobile) -->
            <div class="header-item d-flex d-lg-none me-2">
                <button class="topbar-link btn" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                    <i class="ti ti-search fs-16"></i>
                </button>
            </div>

            <!-- Fullscreen -->
            <div class="header-item">
                <a href="javascript:void(0);" class="btn topbar-link btnFullscreen"><i class="ti ti-maximize"></i></a>
            </div> 

            <!-- Light/Dark Mode -->
            <div class="header-item d-none d-sm-flex me-2">
                <button class="topbar-link btn" id="light-dark-mode" type="button">
                    <i class="ti ti-moon fs-16"></i>
                </button>
            </div>

            <!-- Pages Dropdown -->
            <div class="header-item d-none d-sm-flex">
                <div class="dropdown me-2">
                    <a href="javascript:void(0);" class="btn topbar-link topbar-teal-link" data-bs-toggle="dropdown">
                        <i class="ti ti-layout-grid-add"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                        <a href="#" class="dropdown-item">Contacts</a>
                        <a href="#" class="dropdown-item">Pipeline</a>
                        <a href="#" class="dropdown-item">Activities</a>
                        <a href="#" class="dropdown-item">Analytics</a>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div class="header-item d-none d-sm-flex">
                <a href="#" class="btn topbar-link topbar-indigo-link"><i class="ti ti-help-hexagon"></i></a>
            </div> 

            <!-- Reports -->
            <div class="header-item d-none d-sm-flex">
                <a href="#" class="btn topbar-link topbar-warning-link"><i class="ti ti-chart-pie"></i></a>
            </div> 

            <div class="header-line"></div>

            <!-- Messages -->
            <div class="header-item">
                <a href="#" class="btn topbar-link">
                    <i class="ti ti-message-circle-exclamation"></i>
                    <span class="badge rounded-pill">14</span>
                </a>
            </div>

            <!-- Notifications -->
            <div class="header-item">
                <div class="dropdown me-2">
                    <button class="topbar-link btn dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button">
                        <i class="ti ti-bell-check fs-16 animate-ring"></i>
                        <span class="badge rounded-pill">10</span>
                    </button>
                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                        <div class="p-2 border-bottom">
                            <h6 class="m-0 fs-16 fw-semibold">Notifications</h6>
                        </div>
                        <div class="notification-body position-relative z-2 rounded-0" data-simplebar>
                            <!-- Example Notification -->
                            <div class="dropdown-item notification-item py-3 text-wrap border-bottom">
                                <div class="d-flex">
                                    <div class="me-2 flex-shrink-0">
                                        <img src="{{ asset('assets/img/users/user-01.jpg') }}" class="avatar-md rounded-circle" alt="Img">
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-medium text-dark">John Doe</p>
                                        <p class="mb-1 text-wrap">left 6 comments on <span class="fw-medium text-dark">Report</span></p>
                                        <span class="fs-12"><i class="ti ti-clock me-1"></i>4 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 border-top text-center">
                            <a href="#" class="text-decoration-underline fs-14">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Dropdown -->
            <div class="dropdown profile-dropdown d-flex align-items-center">
                <a href="javascript:void(0);" class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/users/user-40.jpg') }}" width="38" class="rounded-1" alt="user-image">
                    <span class="online text-success"><i class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border-white"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                    <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                        <img src="{{ asset('assets/img/users/user-40.jpg') }}" class="rounded-circle" width="42" height="42" alt="Img">
                        <div class="ms-2">
                            <p class="fw-medium text-dark mb-0">{{ Auth::user()->name ?? 'User' }}</p>
                            <span class="fs-13">{{ Auth::user()->role ?? 'Member' }}</span>
                        </div>
                    </div>
                    <a href="#" class="dropdown-item"><i class="ti ti-user-circle me-1"></i> Profile Settings</a>
                    <a href="#" class="dropdown-item"><i class="ti ti-settings me-1"></i> Settings</a>
                    <div class="pt-2 mt-2 border-top">
                        <a href="#" class="dropdown-item text-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti ti-logout me-1 fs-17"></i> Sign Out
                        </a>
                        <form id="logout-form" action="#" method="POST" class="d-none">@csrf</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->
