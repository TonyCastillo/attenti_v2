<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Drone2Map | Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/template/assets/css/app.min.css">
  <link rel="stylesheet" href="/template/assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="/template/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="/template/assets/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="/template/assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="/template/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="/template/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="/template/assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="/template/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="/template/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/template/assets/css/style.css">
  <link rel="stylesheet" href="/template/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/template/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/template/assets/img/favicon.ico' />
</head>
<body>
    <div class="loader"></div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('template.header')
            @include('template.main_sidebar')

            {{-- MAIN CONTENT --}}
            <div class="main-content">
                @yield('main_content')
            </div>

            <footer class="main-footer">
                @include('template.footer')
            </footer>

        </div>
    </div>
    @include('template.js')
    @yield('custon_js')
</body>
</html>
