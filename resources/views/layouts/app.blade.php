<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'excite-brand') }}</title>
    <!-- Fonts -->
    {{--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    --}}
    <!-- Custom CSS -->
    <link href="{{ asset('ast/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/customModel.css') }}" rel="stylesheet">


    <!-- include summernote css/js -->
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.admin.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        @include('layouts.admin.sidebar')
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <main class="page-wrapper">

            {{ $slot }}
            {{-- @yield('content') --}}
        </main>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    @stack('modals')

    @livewireScripts
    @stack('scripts')
    <script type="text/javascript">
        window.livewire.on('delete', () => {
            $('#myModal').modal('hide');
        });
        window.livewire.on('closeModalEvent', () => {
            $('#formModal').modal('hide');
        });

    </script>
    <!-- ============================================================== -->
    <script src="{{ asset('ast/libs/jquery/dist/jquery.min.js') }}"></script>


    <!-- Bootstrap tether Core JavaScript -->
    {{-- <script src="{{ asset('ast/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    --}}
    <script src="{{ asset('ast/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ast/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('ast/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('ast/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('ast/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('ast/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('ast/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('ast/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('ast/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>


</body>

</html>
