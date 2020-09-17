<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion toggled" style="background-color: #FCF0E2;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboardadmin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('img/icon.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3 text-gray-900">CanTeenn</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboardadmin')}}">
            <i class="fas fa-fw fa-tachometer-alt" style="color: black;"></i>
            <span class="text-gray-900">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-gray-900">
        Menu Action
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-book-open" style="color: black;"></i>
            <span class="text-gray-900">Menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-gray-700">List Menu :</h6>
                <a class="collapse-item" href="{{ route('menuview')}}"><i class="fas fa-fw fa-eye mr-2" style="color: blue;"></i> View Menu</a>
                <a class="collapse-item" href="cards.html"><i class="fas fa-fw fa-th-large mr-2" style="color: brown;"></i> Menu Catalogue</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-clipboard-list" style="color: black;"></i>
            <span class="text-gray-900">Orders</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-gray-900">
        User <br> Action
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-user-friends" style="color: black;"></i>
            <span class="text-gray-900">User</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-gray-700">List User :</h6>
                <a class="collapse-item" href="{{ route('userview')}}"><i class="fas fa-fw fa-eye mr-2" style="color: blue;"></i> View User</a>
                <a class="collapse-item" href="cards.html"><i class="fas fa-fw fa-users-cog mr-2" style="color: brown;"></i> User Overview</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->
