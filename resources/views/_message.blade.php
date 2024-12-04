

@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (!window.hasShownSuccessMessage) {
                window.hasShownSuccessMessage = true; // Prevent multiple executions
                function round_success(msg) {
                    Lobibox.notify('success', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        icon: 'bi bi-check2-circle',
                        delayIndicator: false,
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        msg: msg
                    });
                }

                // Call the notification function with the success message
                round_success("{{ $message }}");
            }
        });
    </script>
@endif




@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
@endif


