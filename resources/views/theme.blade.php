<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">



<head>

    <meta charset="utf-8" />
    <title>Basic Elements | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets1/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="/assets1/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets1/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets1/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/assets1/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" style="background-color: #405189; z-index:1;" id="nav-sticky">
            <div class="container-fluid">
                <!-- LOGO -->

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto" id="mySidenav">

                        @auth
 <li class="nav-item">

<a  class="nav-link btn btn-outline-info ms-2"href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            <a href="/login" >Login</a>
                        </li>
                    <li class="nav-item" >
                        <p class="nav-link font-22 ms-2">{{auth()->user()->name}}</p>
                    </li>

                    <li class="nav-item" >
                    </li>

                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets1/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets1/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets1/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets1/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <!-- scrollbar-->
    <div id="scrollbar" style="z-index: 1">
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdmin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdmin">
                        <i class="ri-admin-line"></i> <span data-key="t-admin-dashboard">Admin Dashboard</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdmin">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/info" class="nav-link" data-key="t-settings"> Info</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Personnel Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPersonnel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPersonnel">
                        <i class="ri-user-line"></i> <span data-key="t-personnel">Personnels</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPersonnel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/ajout-personnel" class="nav-link" data-key="t-ajout-personnel"> Ajout Personnel </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list-personnel" class="nav-link" data-key="t-list-personnel"> List Personnels </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Projet Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProjet" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjet">
                        <i class="ri-projector-line"></i> <span data-key="t-projet">Projets</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProjet">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/ajout-projet" class="nav-link" data-key="t-ajout-projet"> Ajout Projet </a>
                            </li>
                            <li class="nav-item">
                                <a href="/list-projet" class="nav-link" data-key="t-list-projet"> List Projets </a>
                            </li>
                        </ul>
                    </div>
                </li>
@endif

                <!-- Tache Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTable" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTable">
                        <i class="ri-table-line"></i> <span data-key="t-table">Taches</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTable">
                        <ul class="nav nav-sm flex-column">

                @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a href="/ajout-tache" class="nav-link" data-key="t-ajout-table"> Ajout Tache</a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a href="/list-tache" class="nav-link" data-key="t-list-table"> List Taches</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                @yield("continu")
            </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Jasser Ben Jemaa
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->




    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>



        <!-- JAVASCRIPT -->
    <script src="/assets1/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets1/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets1/libs/node-waves/waves.min.js"></script>
    <script src="/assets1/libs/feather-icons/feather.min.js"></script>
    <script src="/assets1/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets1/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="/assets1/libs/prismjs/prism.js"></script>

    <script src="/assets1/js/app.js"></script>

</body>

</html>
