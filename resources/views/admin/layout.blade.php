<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت | داشبورد اول</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('panel/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- <link rel="stylesheet" href="{{ assert('panel/ionicons-2.0.1/css/ionicons.min.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('panel/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/plugins/iCheck/flat/blue.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/plugins/morris/morris.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/plugins/datepicker/datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('panel/dist/css/bootstrap-rtl.min.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/dist/css/custom-style.css') }}">
  <link rel="stylesheet" href="{{ asset('panel/ionicons-2.0.1/css/ionicons.min.css') }}">
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.partials.navbar')
  @include('admin.partials.sidebar')

  
  <div class="content-wrapper">
    <div class="content-header">
      @yield('header')

    <section class="content">
      @yield('content')
    </section>
  </div>

  <!-- @include('admin.partials.footer') -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<script src="{{ asset('panel/plugins/jquery/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('panel/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('panel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('panel/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('panel/plugins/knob/jquery.knob.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('panel/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('panel/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('panel/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('panel/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('panel/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('panel/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('panel/dist/js/demo.js') }}"></script>
</body>
</html>
