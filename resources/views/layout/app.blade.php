<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{!! asset('theme/purple-admin-template/assets/vendors/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/purple-admin-template/assets/vendors/css/vendor.bundle.base.css') !!}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{!! asset('theme/purple-admin-template/assets/css/style.css') !!}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{!! asset('theme/purple-admin-template/assets/images/favicon.ico') !!}" />
    
</head>

<body>
    @include('partials.nav')

    @include('partials.body_wrapper')

    {{-- @yield('content') --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> --}}

     <!-- plugins:js -->
     <script src="{!! asset('theme/purple-admin-template/assets/vendors/js/vendor.bundle.base.js') !!}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="{!! asset('theme/purple-admin-template/assets/vendors/chart.js/Chart.min.js') !!}"></script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="{!! asset('theme/purple-admin-template/assets/js/off-canvas.js') !!}"></script>
     <script src="{!! asset('theme/purple-admin-template/assets/js/hoverable-collapse.js') !!}"></script>
     <script src="{!! asset('theme/purple-admin-template/assets/js/misc.js') !!}"></script>
     <!-- endinject -->
     <!-- Custom js for this page -->
     <script src="{!! asset('theme/purple-admin-template/assets/js/dashboard.js') !!}"></script>
     <script src="{!! asset('theme/purple-admin-template/assets/js/todolist.js') !!}"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <!-- End custom js for this page -->
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, option)
        })

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select-2').select2();
        });
    </script>
</body>

</html>