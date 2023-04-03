<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

    {{-- Cdn font awsome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/sweetalert2/sweetalert2.all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/dist/css/adminlte.min.css">

  {{-- dataTables --}}
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('admin-lte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('admin-lte') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
    @include('Admin.layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('Admin.layout.sidebar')
  <!-- //Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Main content -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Cover by imam nur hidayat  2023  <a href="https://adminlte.io">Lelang APP</a></strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>Thanks</b> AdminLTE
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('admin-lte') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin-lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin-lte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte') }}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('admin-lte') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('admin-lte') }}/plugins/chart.js/Chart.min.js"></script>

<script src="{{ asset('admin-lte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('admin-lte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
<script src="{{ asset('admin-lte') }}/plugins/sweetalert2/sweetalert2.all.min.js"></script>

<script>
    @if($message = Session::get('success'))
      Swal.fire({
        icon: 'success',
        title: 'App Said : ',
        text: '{{$message}}',
      })
    @endif
    @if($message = Session::get('update'))
      Swal.fire({
        icon: 'warning',
        title: 'App Said : ',
        text: '{{$message}}',
      })
    @endif
    @if($message = Session::get('delete'))
      Swal.fire({
        icon: 'error',
        title: 'App Said : ',
        text: '{{$message}}',
      })
    @endif
</script>
</body>
</html>
