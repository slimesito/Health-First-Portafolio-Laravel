<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa-regular fa-hospital me-2"></i>{{ config('app.name') }}</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('adminhome') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-regular fa-user-doctor me-2"></i>Doctores</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.all_doctors') }}" class="dropdown-item">Todos los Doctores<i class="fa-regular fa-user-doctor ms-2"></i></a>
                    <a href="{{ route('add_new_doctor') }}" class="dropdown-item">Nuevo Doctor<i class="fa-solid fa-user-plus ms-2"></i></a>
                </div>
            </div>

            <a href="{{ route('admin.appointments') }}" class="nav-item nav-link"><i class="fa-regular fa-calendar-check me-2"></i>Citas</a>

            {{-- <a href="admin/widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="admin/button.html" class="dropdown-item">Buttons</a>
                    <a href="admin/typography.html" class="dropdown-item">Typography</a>
                    <a href="admin/element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div>
            <a href="admin/widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="admin/form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="admin/table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="admin/chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="admin/signin.html" class="dropdown-item">Sign In</a>
                    <a href="admin/signup.html" class="dropdown-item">Sign Up</a>
                    <a href="admin/404.html" class="dropdown-item">404 Error</a>
                    <a href="admin/blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>