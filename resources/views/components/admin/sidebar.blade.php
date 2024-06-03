<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Book Apps</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ session('name') }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.booking') }}" class="nav-link {{ request()->is('admin/booking') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Booking
                        </p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="{{ route('admin.field') }}" class="nav-link {{ request()->is('admin/field') ? 'active' : '' }}">
                        <i class="nav-icon far fa-futbol"></i>
                        <p>
                            Manage Field
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.timeslot') }}" class="nav-link {{ request()->is('admin/timeslot') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-business-time"></i>
                        <p>
                            Manage Time Slot
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Manage User
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
