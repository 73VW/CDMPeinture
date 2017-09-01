<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        @yield('navbar')
        @yield('content')
    </div>

    <!-- Scripts -->

    <!-- Bootstrap core JavaScript -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sbadmin.js') }}"></script>
</body>
</html>
