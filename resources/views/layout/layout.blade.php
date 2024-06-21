<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | @yield('heading')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/build/toastr.css') }}">
</head>
<body class="overflow-auto">
    <h3 class="text-center p-2 bg-primary text-white shadow-sm mb-3">@yield('heading')</h3>
    @yield('body')
    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('toastr/build/toastr.min.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-left",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        
          
    </script>
    @if(Session::has('successMsg'))
        <script> toastr["success"]("{{session('successMsg')}}") </script>
    @elseif (Session::has('deleteMsg'))
        <script> toastr["error"]("{{session('deleteMsg')}}") </script>
    @endif 
    @yield('script')
</body>
</html>
