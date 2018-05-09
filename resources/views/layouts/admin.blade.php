<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ระบบบริหารจัดการเว็บไซต์</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('sbadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/css/toastr.min.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('admin') }}">ระบบบริหารเว็บไซต์</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('/admin') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">แบบทดสอบ</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="{{ url('admin/pretests') }}">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/posttests') }}">แบบทดสอบหลังเรียน</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="{{ url('admin/units') }}">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">จัดการหน่วยการเรียนรู้</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="charts.html">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">ผู้ใช้งานระบบ</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="{{ url('admin/menu') }}">
                    <i class="fa fa-fw fa-cogs"></i>
                    <span class="nav-link-text">ตั้งค่าเว็บไซต์</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-fw fa-user"></i>{{ Auth::user()->name }}</a>
            </li>

            <li class="nav-link">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </div>
</nav>
@yield('content')

<!-- /.content-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('sbadmin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('sbadmin/js/sb-admin.min.js') }}"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('sbadmin/js/sb-admin-datatables.min.js') }}"></script>
<script src="{{ asset('sbadmin/js/sb-admin-charts.min.js') }}"></script>
<script src="{{ asset('sbadmin/js/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if(Session::has('info'))
toastr.info("{{ Session::get('info') }}");
    @endif
</script>
@yield('js')
</body>

</html>
