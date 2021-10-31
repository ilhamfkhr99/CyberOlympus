<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- addition -->
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css?0925" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/flatly/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="{{asset('lte/plugins/bs-datetimepicker/bootstrap-datetimepicker.min.css')}}">
  <!-- addition -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- JqueryUI -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/jquery-ui/jquery-ui.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css')}}"> -->
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"> -->
  <!-- datetimepicker -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css')}}"> -->
  <!-- Date picker -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/datepicker/css/datepicker.css')}}"> -->
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!--Data tables-->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          {{-- <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div> --}}
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
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
    @include('footer')
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->

<!-- data tables -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}


  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- addition -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
  <!-- addition -->

  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css"> --}}
<!-- data tables js -->
<!-- js -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script> -->
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

  <!-- Bootstrap 4 -->
  <!-- <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
  <!-- Summernote -->
  <script src="{{asset('lte/plugins/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('lte/plugins/summernote/summernote.js')}}"></script>
  <!-- ChartJS -->
  <!-- <script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script> -->
  <!-- Sparkline -->
  <!-- <script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script> -->
  <!-- JQVMap -->
  <!-- <script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script> -->
  <!-- <script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> -->
  <!-- jQuery Knob Chart -->
  <!-- <script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script> -->
  <!-- <script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script> -->
  <!-- <script src="{{asset('lte/dist/plugins/moment/moment.min.js')}}"></script> -->
  <!-- datetimepicker -->
  <!-- <script src="{{asset('lte/plugins/datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script> -->
  <!-- daterangepicker -->
  <!-- <script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script> -->
  <!-- date picker -->
  <!-- <script src="{{asset('lte/plugins/datepicker/js/bootstrap-datepicker.js')}}"></script> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script> -->
  <!-- Summernote -->
  <!-- <script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script> -->
  <!-- overlayScrollbars -->
  <!-- <script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script> -->
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
  <!-- <script src="{{asset('lte/dist/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script> -->
  <!-- REQUIRED SCRIPTS -->
  <!-- DataTables -->
  <!-- <script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script> -->
  <!-- <script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script> -->
  <!-- <script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> -->
  <!-- <script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script> -->
  <script src="{{asset('lte/plugins/bs-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
  <script type="text/javascript">
    $(function() {
      $('#waktuAwal').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
      });
      $('#waktuAkhir').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
      });
      $('#tanggal').datetimepicker({
        format: 'YYYY-MM-DD',
      });
      $('#tgl_materi_edit').datetimepicker({
        format: 'YYYY-MM-DD',
      });
      $('#tgl_efektif').datetimepicker({
        format: 'YYYY-MM-DD',
      });
      $('#tgl_efektif_edit').datetimepicker({
        format: 'YYYY-MM-DD',
      });
      $('#durasi').datetimepicker({
        format: 'mm:ss',
      });
      $('#jam_mulai2').datetimepicker({
        format: 'HH:mm:ss',
      });
      $('#jam_selesai').datetimepicker({
        format: 'HH:mm:ss',
      });
      $('#compose-textarea').summernote();
    //   $('#compose-textarea-edit').summernote();
      $('#example').DataTable({
            responsive: true
        });
      $('#jadwal_senin').DataTable({
            responsive: true
        });
      $('#jadwal_selasa').DataTable({
            responsive: true
        });
      $('#jadwal_rabu').DataTable({
            responsive: true
        });
        $('#jadwal_kamis').DataTable({
            responsive: true
        });
        $('#jadwal_jumat').DataTable({
            responsive: true
        });
        // $('#summernote').summernote();
        // new $.fn.dataTable.FixedHeader(table1);
        // new $.fn.dataTable.FixedHeader(table2);
        // new $.fn.dataTable.FixedHeader(table3);
        // new $.fn.dataTable.FixedHeader(table4);
        // new $.fn.dataTable.FixedHeader(table5);
    });
  </script>

</body>

</html>
