<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbigstart.justthemevalley.com/Version1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 May 2022 02:30:59 GMT -->

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BigStart - Responsive HTML5 &amp; CSS3 Theme & Template</title>
    <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('web/style.css') }}">
</head>

<body class="cms-index-index cms-home-page">

    <!-- mobile menu -->
    @include('layout.web.includes.mobile_menu')
    <div id="page">
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <!-- Header -->
        @include('layout.web.includes.header')

        <!-- end header -->

        <!-- Navigation -->
        @include('layout.web.includes.nav')
        <!-- end nav -->

        <!-- our features -->
        @include('layout.web.includes.our_features')

        <!-- JTV Home Slider -->
        <!-- end JTV Home Slider -->


        <!-- jtv bottom banner section -->

        <!-- Special Product slider -->


        <div class="content-page">
            <!-- featured -->
            @yield('content')
        </div>
        <!-- bestsell Slider -->

        <!-- End Bestsell Slider -->

        @include('layout.web.includes.brand_logo')
        <!-- Footer -->
        @include('layout.web.includes.footer')

    </div>
    <!-- End Footer -->
    <!-- jquery js -->
    @include('layout.web.includes.script')
    <!--Newsletter Popup Start-->
    <!-- @include('layout.web.includes.newsletter') -->
    <!--End of Newsletter Popup-->

</body>

<!-- Mirrored from htmlbigstart.justthemevalley.com/Version1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 May 2022 02:31:38 GMT -->

</html>
