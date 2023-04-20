<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->is('dashboards')) active @endif">
        <a class="nav-link py-2" href="{{ route('dashboards') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        OFW Section
    </div>

    <!-- Nav Item - Applications -->
    <li class="nav-item @if(request()->is('applications')) active @endif">
        <a class="nav-link py-2" href="{{ route('applications') }}">
            <i class="fas fa-thumbtack"></i>
            <span>Applications</span></a>
    </li>

    <!-- Nav Item - Options -->
    <li class="nav-item @if(request()->is('options')) active @endif">
        <a class="nav-link py-2" href="{{ route('options') }}">
            <i class="fas fa-thumbtack"></i>
            <span>Options</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Companies
    </div>

    <!-- Nav Item - Applications -->
    <li class="nav-item @if(request()->is('agencies')) active @endif">
        <a class="nav-link py-2" href="{{ route('agencies') }}">
            <i class="fas fa-thumbtack"></i>
            <span>Agencies</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

