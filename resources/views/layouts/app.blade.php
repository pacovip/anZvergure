<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!--<![endif]-->

<head>
    <title> @yield('page_title') </title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico and apple-touch-icon.png') }}" in the root directory -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" class="color-switcher-link">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" class="color-switcher-link">
    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="{{ asset('js/vendor/html5shiv.min.js') }}"></script>
        <script src="{{ asset('js/vendor/respond.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>

<body>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="{{ __('menu.entrerrecherche') }}" id="modal-search-input">
                </div>
            <button type="submit" class="btn">{{ __('menu.recherche') }}</button>
            </form>
        </div>
    </div>

    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls p-normal">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
        <ul class="list-unstyled">
            <li>Message To User</li>
        </ul>
        -->

        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <!--topline & nav-menu-->

            @include('inc.menu')

            <!--eof topline & nav-menu-->



            <!--page_slider-->

            @yield('page_slider')

            <!--eof page_slider-->




            <!--page_content-->

            @yield('page_content')

            <!--eof page_content-->



            <!--page_footer-->

            @include('inc.footer')

            <!--eof page_footer-->





        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->


    <script src="{{ asset('js/compressed.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Google Map Script-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC4rFZFnSNd1z3ET6W3qCT8PLH6zq-HVM"></script>
    <!--<script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC4rFZFnSNd1z3ET6W3qCT8PLH6zq-HVM&callback=initMap"
  ></script>-->

</body>

</html>
