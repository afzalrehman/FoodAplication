<script>
    function round_default_noti(msg) {
        Lobibox.notify('default', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: msg
        });
    }

    // Check if the session contains a success message
    @if (session('success'))
        console.log("Session Message: {{ session('success') }}"); // Debugging
        round_default_noti("{{ session('success') }}");
    @endif
</script>
