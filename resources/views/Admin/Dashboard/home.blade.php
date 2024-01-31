<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/contacts') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">

                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <input type="submit" value="Logout">
                    </form>
                </li>
            </ul>

       
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>


                <nav class="mt-2">

                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/services') }}" class="nav-link ">


                            services


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/category') }}" class="nav-link">


                            Categories


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/section') }}" class="nav-link">


                            sections


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/item') }}" class="nav-link">


                            section_items


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/job') }}" class="nav-link">


                            Jobs


                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/requestJob') }}" class="nav-link">


                            Jobs Requests


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/country') }}" class="nav-link">
                            Countries

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/city') }}" class="nav-link">
                            Cities

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/team') }}" class="nav-link">


                            Teams


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/setting/edit') }}" class="nav-link">


                            Settings


                        </a>
                    </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        {{--<footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>--}}
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
