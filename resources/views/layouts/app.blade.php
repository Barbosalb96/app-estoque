<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Estoque - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>

</head>
<body>

<style>
    @yield('style')
</style>


<!-- Wrapper-->
<div id="wrapper">

    <!-- Navigation -->
@include('layouts.navigation')

<!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Page wrapper -->
    @include('layouts.topnavbar')

    <!-- Main view  -->
    @yield('content')

    <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/sweetalert2.all.min.js') !!}" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/051cf22837.js" crossorigin="anonymous"></script>
<script>
    $('.nome').on('keyup', function () {
            var tamanho = $('.nome').val().length;
            if (tamanho >= 12) {
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'Este campo sei la'
                })
            }
        }
    )

</script>
@section('scripts')
@show

</body>
</html>
