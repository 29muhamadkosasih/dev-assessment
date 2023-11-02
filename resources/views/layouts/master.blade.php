<!DOCTYPE html>

<html lang="en" class="loading light-style layout-navbar-fixed layout-menu-fixed layout-menu-collapsed" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets/') }}"
    data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title') - E Assessment Management System</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/logo1.png') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    {{-- signature --}}

    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/css/bootstrap.css') }}">
    <script type="text/javascript"
        src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('http://keith-wood.name/js/jquery.signature.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('http://keith-wood.name/css/jquery.signature.css') }}">

    @include('panels/styles')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('panels/sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('panels/navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid flex-grow-1 container-p-y">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    @include('panels/scripts')
    <script>
        $(window).on('load', function() {
                    if (feather) {
                        feather.replace({
                            width: 14,
                            height: 14
                        });
                    }
                })
    </script>
</body>

</html>