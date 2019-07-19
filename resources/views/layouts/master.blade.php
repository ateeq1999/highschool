<!DOCTYPE html>
<html lang="en" data-textdirection="rtl" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>تطبق  لإدارة مدرسة</title>
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo/144.png">
        <link rel="shortcut icon" type="image/png" href="app-assets/images/logo/20.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/bootstrap.css">
        <!-- font icons-->
        <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
        <link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/app.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/colors.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/custom-rtl.css">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/pages/invoice.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style-rtl.css">
        <!-- END Custom CSS-->
      
    </head>
    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
        
        @include('layouts.navbar')

        @include('layouts.menu')

        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>


        <footer class="footer footer-static footer-light navbar-border">
            <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">تاريخ النشر  &copy; 2019  </span><span class="float-md-right d-xs-block d-md-inline-block">كل الحقوق محفوظة ل <a href="https://www.adamoxy.com" target="_blank" class="text-bold-800 grey darken-2">Adamoxy & fatoha </a></span></p>
        </footer>

        <!-- BEGIN VENDOR JS-->
        <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
        <script src="app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
        <script src="app-assets/js/core/app.js" type="text/javascript"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->

    </body>
</html>