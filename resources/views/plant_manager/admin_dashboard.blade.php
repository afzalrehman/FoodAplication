<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qasim</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    {{--  <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/semi-dark.css') }}" rel="stylesheet">  --}}
    <link href="{{ asset('sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

    @if (Route::is([
            'plantmanager.sqf_1.add',
            'plantmanager.sqf_1.edit',
            'plantmanager.sqf_1.show',
            'plantmanager.sqf_1.index',
            'plantmanager.sqf_2.index',
            'plantmanager.sqf_2.add',
            'plantmanager.sqf_2.edit',
            'plantmanager.sqf_2.show',
            'plantmanager.sqf_3.index',
            'plantmanager.sqf_3.add',
            'plantmanager.sqf_3.edit',
            'plantmanager.sqf_3.show',
            'plantmanager.haccp_1.index',
            'plantmanager.haccp_1.add',
            'plantmanager.haccp_1.edit',
            'plantmanager.haccp_1.show',
            'plantmanager.haccp_2.index',
            'plantmanager.haccp_2.add',
            'plantmanager.haccp_2.edit',
            'plantmanager.haccp_2.show',
            'plantmanager.haccp_3.index',
            'plantmanager.haccp_3.add',
            'plantmanager.haccp_3.edit',
            'plantmanager.haccp_3.show',
            'plantmanager.haccp_4.index',
            'plantmanager.haccp_4.add',
            'plantmanager.haccp_4.edit',
            'plantmanager.haccp_4.show',
        ]))
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">
        <link rel="stylesheet" href="{{ asset('assets/plugins/notifications/css/lobibox.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    @endif



</head>
@yield('customs_styles')


<body>

    @include('plant_manager.body.header')
    @include('plant_manager.body.sidebar')
    <!--start main wrapper-->
    <main class="main-wrapper">
        @yield('content')
    </main>
    <!--end main wrapper-->

    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    @include('plant_manager.body.footer')


    <!--session messages-->
    @include('_message')


    <!--bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard1.js') }}"></script>
    <script>
        new PerfectScrollbar(".user-list")
    </script>

    @if (Route::is([
            'plantmanager.sqf_1.index',
            'plantmanager.sqf_1.add',
            'plantmanager.sqf_1.edit',
            'plantmanager.sqf_1.show',
            'plantmanager.sqf_2.index',
            'plantmanager.sqf_2.add',
            'plantmanager.sqf_2.edit',
            'plantmanager.sqf_2.show',
            'plantmanager.sqf_3.index',
            'plantmanager.sqf_3.add',
            'plantmanager.sqf_3.edit',
            'plantmanager.sqf_3.show',
            'plantmanager.haccp_1.index',
            'plantmanager.haccp_1.add',
            'plantmanager.haccp_1.edit',
            'plantmanager.haccp_1.show',
            'plantmanager.haccp_2.index',
            'plantmanager.haccp_2.add',
            'plantmanager.haccp_2.edit',
            'plantmanager.haccp_2.show',
            'plantmanager.haccp_3.index',
            'plantmanager.haccp_3.add',
            'plantmanager.haccp_3.edit',
            'plantmanager.haccp_3.show',
            'plantmanager.haccp_4.index',
            'plantmanager.haccp_4.add',
            'plantmanager.haccp_4.edit',
            'plantmanager.haccp_4.show',
        ]))
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2-custom.js') }}"></script>
        <script src="{{ asset('assets/plugins/notifications/js/lobibox.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/notifications/js/notifications.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="{{ asset('assets/plugins/validation/validation-script.js') }}"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            {{--  (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()  --}}

                // Custom Bootstrap Validation
                (function() {
                    "use strict";

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll(".needs-validation");

                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms).forEach(function(form) {
                        form.addEventListener(
                            "submit",
                            function(event) {
                                if (!form.checkValidity()) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    });
                })();
        </script>
    @endif

    @yield('script')
</body>

</html>
