<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIM KESEHATAN</title>

  <script src="/dist/modules/jquery.min.js"></script>
  <script src="/dist/modules/popper.js"></script>
  <script src="/dist/modules/tooltip.js"></script>
  <script src="/dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/dist/modules/moment.min.js"></script>
  <script src="/dist/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src=">/dist/modules/datatables/datatables.min.js"></script>
  <script src=">/dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src=">/dist/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src=">/dist/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src=">/dist/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="/dist/js/scripts.js"></script>
  <script src="/dist/js/custom.js"></script>


  <!-- General CSS Files -->
  <link rel="shortcut icon" href="{!! asset('/image/logo-wk.png') !!}">
  <link rel="stylesheet" href="{!! asset('/dist/modules/bootstrap/css/bootstrap.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/dist/modules/fontawesome/css/all.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/dist/modules/ionicons/css/ionicons.min.css') !!}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{!! asset('/dist/modules/datatables/datatables.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/dist/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') !!}">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="{!! asset('/dist/css/style.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('dist/dist/sweetalert.css') !!}">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar mb-2">
        <a href="#" class="navbar-brand sidebar-gone-hide" style="font-size: 20px;"><img src="/image/logo-wk.png" width="12%">SIM KESEHATAN</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
        <form class="form-inline ml-auto">
          
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{!! asset('/dist/img/avatar/avatar-1.png') !!}" width="20" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container justify-content-center ">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a href="/admin"  class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="/adminsiswa" class="nav-link"><i class="far ion-person-add"></i><span>Data Siswa</span></a>
            </li>
            <li class="nav-item">
              <a href="/input_sakit" class="nav-link"><i class="far ion-ios-medkit-outline"></i><span>Data Siswa Sakit</span></a>
            </li>
            <li class="nav-item">
              <a href="hitung_imt" class="nav-link"><i class="far ion-clipboard"></i><span>Hitung IMT</span></a>       
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="far ion-clipboard"></i><span>Grafik IMT</span></a>       
            </li>
          </ul>
        </div>
      </nav>
      {{-- isian--}}
      @yield('container')
      {{--isian--}}
  <script src="{!! asset('/dist/modules/jquery.min.js') !!}"></script>
  <script src="{!! asset('/dist/modules/popper.js') !!}"></script>
  <script src="{!! asset('/dist/modules/tooltip.js') !!}"></script>
  <script src="{!! asset('/dist/modules/bootstrap/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('/dist/modules/nicescroll/jquery.nicescroll.min.js') !!}"></script>
  <script src="{!! asset('/dist/modules/moment.min.js') !!}"></script>
  <script src="{!! asset('/dist/js/stisla.js') !!}"></script>
  
  <!-- JS Libraies -->
  <script src="{!! asset('/dist/modules/datatables/datatables.min.js') !!}"></script>
  <script src="{!! asset('/dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') !!}"></script>
  <script src="{!! asset('/dist/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') !!}"></script>
  <script src="{!! asset('/dist/modules/jquery-ui/jquery-ui.min.js') !!}"></script>

  <!-- Page Specific JS File -->
  <script src="{!! asset('/dist/js/page/modules-datatables.js') !!}"></script>
  
  <!-- Template JS File -->
  <script src="{!! asset('/dist/js/scripts.js') !!}"></script>
  <script src="{!! asset('/dist/js/custom.js') !!}"></script>
</body>
</html>