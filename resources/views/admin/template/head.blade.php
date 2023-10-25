<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>@yield('title')Admin Dashboard</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets_admin/images/logo/logo_white.png')}}">
    <link href="{{asset('assets_admin/vendor/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

    <!-- Bootstrap 4 -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

</head>
