
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas Web</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </li>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

      <!-- Messages Dropdown Menu -->
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tugas Web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block"> Welcome Back</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="course" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="about" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>about</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halo</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{$slot}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Marcelius Surya Wijaya - 2502001164
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
@livewireScripts
</body>
</html>
