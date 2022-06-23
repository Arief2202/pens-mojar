<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" href="assets/img/logo-bulat.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ url('css/super-admin.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/app.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/customstyle.css') }}" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
            integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
            crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/r-2.3.0/sb-1.3.4/datatables.min.css"/>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
 

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="c-app">
    @csrf
@include('layouts.sidebar')

<div class="c-wrapper">
    @yield('modal')
    <header class="c-header c-header-light c-header-fixed">
        @include('layouts.header')
    </header>

    <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>
    </div>

    <footer class="c-footer">
        <div><a id= "name-tim" href="https://">A4 RPL</a> © 2022 creativeLabs.</div>
        <div class="mfs-auto">Powered by&nbsp;<a id= "name-tim" href="https://">A4 TEAM</a></div>
    </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="https://coreui.io/demo/4.0/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script> --}}
{{-- <script src="https://coreui.io/demo/4.0/free/vendors/simplebar/js/simplebar.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
