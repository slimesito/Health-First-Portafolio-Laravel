<header>

    <!--? Header Start -->

    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <!-- Logo -->

                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            
                            <!-- Main-menu -->
                            
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('servicios') }}">Servicios</a></li>
                                        <li><a href="{{ route('especialistas') }}">Especialistas</a></li>
                                        <li><a href="{{ route('about') }}">¿Quiénes Somos?</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('q&a') }}">Q & A</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                            
                                        </li>
                                        @auth()
                                            @if (Auth::user()->is_admin)
                                            
                                                <li class="nav-item">
                                                    <a class="{{ (Route::is('admin.dashboard')) }} nav-link" href="{{ route('adminhome') }}">Admin Dashboard</a>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a class="{{ (Route::is('pacients.appointments')) }} nav-link" href="{{ route('pacients.appointments') }}">Mis Citas</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('pacients.book') }}">Agendar una cita</a></li>
                                                    </ul>
                                                </li>
                                            @endif
                                            <li class="nav-item">
                                                <a class="{{ (Route::is('profile.edit')) ? 'active' : '' }} nav-link" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-sm" type="submit">Logout<i class="fa-solid fa-right-from-bracket"></i></button>
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </nav>
                            </div>

                            @guest
                                <div class="header-right-btn f-right d-none d-lg-block ml-5">
                                    <a href="{{ route('login') }}" class="btn header-btn">Inicia Sesión</a>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-5">
                                    <a href="{{ route('register') }}" class="btn header-btn">Regístrate</a>
                                </div>
                            @endguest
                            
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->

</header>