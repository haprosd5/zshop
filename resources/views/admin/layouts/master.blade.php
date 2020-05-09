<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:06:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM Admin Panel</title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
    <!-- Start Global Mandatory Style
       =====================================================================-->
    <!-- jquery-ui css -->
    <link href="{{ asset('admin/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="{{ asset('admin/plugins/lobipanel/lobipanel.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Pace css -->
    <link href="{{ asset('admin/plugins/pace/flash.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="{{ asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Pe-icon -->
    <link href="{{ asset('admin/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Themify icons -->
    <link href="{{ asset('admin/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- End Global Mandatory Style
       =====================================================================-->
    <!-- Start page Label Plugins
       =====================================================================-->
    <!-- Emojionearea -->
    <link href="{{asset('admin/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Monthly css -->
    <link href="{{asset('admin/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
    <!-- End page Label Plugins
       =====================================================================-->
    <!-- Start Theme Layout Style
       =====================================================================-->
    <!-- Theme style -->
    <link href="{{asset('admin/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/dist/css/jquery.dataTables.min.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<!--preloader-->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Site wrapper -->
<div class="wrapper">

@include('admin.layouts.header')

@include('admin.layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->
@include('admin.layouts.footer')
</body>

<!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:08:11 GMT -->
</html>

