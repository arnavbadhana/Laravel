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
    @yield('script')
</body>
</html>
