<?php
    include("config.php");
    if(!isset($_SESSION['UserID']))
    {
        header("location:login.php");
    }
?>
<!DOCTYPE html>

<html lang="en" ng-app="naut" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths win ng-scope"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="description" content="Bootstrap + AngularJS">
<title data-ng-bind="pageTitle()" class="ng-binding"><?php if(isset($title)) echo $title;?></title>
<script src="./js/jquery_004.js" type="text/javascript"></script>
<script src="./js/bootstrap-datetimepicker.js"></script> 
<script src="./js/bootstrap.js"></script> 
<!--<script src="./js/redir.js" type="text/javascript"></script> 
<script src="./js/jquery.flot.js" async=""></script>
<script src="./js/screenfull.js" async=""></script>
<script src="./js/jquery.sparkline.min.js" async=""></script>
<script src="./js/jquery.flot.tooltip.min.js" async=""></script>
<script src="./js/jquery.flot.resize.js" async=""></script>
<script src="./js/jquery.flot.pie.js" async=""></script>
<script src="./js/jquery.flot.time.js" async=""></script>
<script src="./js/jquery.flot.categories.js" async=""></script>
<script src="./js/jquery.flot.spline.min.js" async=""></script> 
<script src="./js/jquery.slimscroll.min.js" async=""></script>
<script src="./js/angular.easypiechart.min.js" async=""></script>
<script src="./js/toaster.js" async=""></script>
<script src="./js/moment-with-locales.min.js" async=""></script>
<script src="./js/textAngular-rangy.min.js"></script>
<script src="./js/textAngular-sanitize.js"></script>
<script src="./js/globals.js"></script>
<script src="./js/factories.js"></script>
<script src="./js/DOM.js"></script>
<script src="./js/validators.js"></script>
<script src="./js/taBind.js"></script>
<script src="./js/main.js"></script>
<script src="./js/textAngularSetup.js"></script>-->
<link rel="stylesheet" href="./css/style.default.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/application-f35d0077.css">
<!--<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css">-->
<link type="text/css" rel="stylesheet" href="./css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="./css/weather-icons.min.css">
<link type="text/css" rel="stylesheet" href="./css/feather.css">
<link type="text/css" rel="stylesheet" href="./css/toaster.css">
<link type="text/css" rel="stylesheet" href="./css/animate.min.css">
<link type="text/css" rel="stylesheet" href="./css/textAngular.css">

<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>

</head>
<body><!-- uiView:  -->
<div data-ui-view="" data-autoscroll="false" ng-controller="CoreController" class="app-container ng-scope"><!-- ngInclude: 'templates/top-navbar.html' -->
<header ng-include="&#39;templates/top-navbar.html&#39;" ng-class="app.theme.topbar" class="ng-scope bg-info"><!-- START Top Navbar-->
<nav role="navigation" ng-controller="HeaderNavController as header" class="navbar topnavbar ng-scope">
   <!-- START button offset-->
   <!--<div class="btn-offset">
      <button type="button" btn-layer-morph="" target="#layer-search" ripple="" class="btn btn-info btn-circle btn-lg shadow-z1">
         <em class="fa fa-search"></em>
      <span class="ripple"></span></button>
   </div>-->
   <!-- START button offset-->
   <!-- START navbar header-->
   <div class="navbar-header">
    <!--<div class="col-lg-4 text-center"><a ui-sref="app.dashboard" class="navbar-brand" href="<?php echo PreURL;?>"><img src="images/cyclezonelogo1.png"></a></div>-->
    <div class="col-lg-4"><a style="font-size: 30px;padding-top: 25px;color:#fff;" class="col-lg-12 text-left navbar-brand" href="<?php echo PreURL;?>">Cycle Zone</a></div>
    <div class="col-lg-4"><div style="font-size: 18px;padding-top: 25px;color:#fff;" class="col-lg-12 text-center navbar-brand"><?php echo date("d/m/Y h:i:s");?></div></div>
    <div class="col-lg-4">
        <div class="col-lg-6 text-right">
            <a style="font-size: 20px;padding-top: 25px;color:#fff;" class="navbar-brand text-right col-lg-12"><?php echo $_SESSION['FirstName'];?></a>
         </div>        
         <div class="col-lg-6">
            <a style="font-size: 20px;padding-top: 25px;color:#fff;" class="navbar-brand text-left col-lg-12" href="<?php echo PreURL;?>/login.php?action=logout">Logout</a>
            
        </div>
    </div>
    <div class="clearfix"></div>  
      
   </div>
   <!-- END navbar header-->
   <!-- START Nav wrapper-->
   
</nav>
<!-- END Top Navbar--></header> <!-- ngInclude: 'templates/sidebar.html' -->

