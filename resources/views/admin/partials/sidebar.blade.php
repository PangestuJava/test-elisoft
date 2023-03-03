<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                        Management Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product') }}" class="nav-link">
                    <i class="nav-icon fas fa-barcode"></i>
                    <p>
                        Products
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('api.users') }}" class="nav-link">
                    <i class="nav-icon fas fa-inbox"></i>
                    <p>
                        API Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Swapping Variable
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Numbers
                    </p>
                </a>
            </li>
            <!-- Authentication -->
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="nav-link nav-item">
                    @csrf
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick=" event.preventDefault(); this.closest('form').submit();">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Numbers
                        </p>
                    </a>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>