
<!-- bundle -->
<script src="{{ asset('/') }}backend/assets/js/vendor.min.js"></script>
<script src="{{ asset('/') }}backend/assets/js/app.min.js"></script>
<script src="{{ asset('/') }}backend/assets/js/vendor/toastrjs.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

@if(Session::has('success'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ Session::get('success') }}");
        });
    </script>
@endif
@if(Session::has('error'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ Session::get('error') }}");
        });
    </script>
@endif

@yield('script')
