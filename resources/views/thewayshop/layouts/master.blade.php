<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('thewayshop/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('thewayshop/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('thewayshop/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('thewayshop/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('thewayshop/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('thewayshop/css/custom.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@include('thewayshop.layouts.header')

<!-- End Instagram Feed  -->

@yield('content')

<!-- Start Footer  -->
@include('thewayshop.layouts.footer')
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="{{ asset('thewayshop/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/popper.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/jquery.superslides.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('thewayshop/js/inewsticker.js') }}"></script>
<script src="{{ asset('thewayshop/js/bootsnav.js') }}"></script>
<script src="{{ asset('thewayshop/js/images-loded.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/isotope.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/form-validator.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/contact-form-script.js') }}"></script>
<script src="{{ asset('thewayshop/js/custom.js') }}"></script>
</body>

</html>
