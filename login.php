<?php
    include("config.php");
    if(isset($_SESSION['UserID']))
    {
        header("location:index.php");
    }
    if($_POST)
    {
        $checkLogin = "select UserID,FirstName,LastName,Email from master_user where Email='".$_POST['Email']."' AND Password='".MD5($_POST['Password'])."'";
        //echo $checkLogin;
        $ObjcheckLogin = mysqli_query($conn, $checkLogin);
       //var_dump($ObjcheckLogin)  ;
        $NumcheckLogin = mysqli_num_rows($ObjcheckLogin);
        if($NumcheckLogin>0)
        {
            $RscheckLogin = mysqli_fetch_array($ObjcheckLogin);    
            $_SESSION['UserID'] = $RscheckLogin['UserID']; 
            $_SESSION['FirstName'] = $RscheckLogin['FirstName']; 
            $_SESSION['Email'] = $RscheckLogin['Email']; 
            ?>
                <script>
                    window.location.href="index.php";
                </script>
            <?php
        }
        else
        {
            $display = 'block;';            
            $Msg = "Please enter correct email and password.";
            
        }
        
    }
    if(isset($_REQUEST['action']) and $_REQUEST['action']=="logout")
    {
        unset($_SESSION['UserID']);
        unset($_SESSION['FirstName']);
        unset($_SESSION['Email']);
        $Msg = "Logout Successfully";
    }
    ?>
<!DOCTYPE html>
<html lang="en" ng-app="naut" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths win ng-scope"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="description" content="Bootstrap + AngularJS">
<title data-ng-bind="pageTitle()" class="ng-binding">Cycle | Login</title>
<script src="./js/jquery_004.js" type="text/javascript"></script>
<script src="./js/bootstrap-datetimepicker.js"></script> 
<script src="./js/bootstrap.js"></script> 
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/application-f35d0077.css">
<link type="text/css" rel="stylesheet" href="./css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="./css/weather-icons.min.css">
<link type="text/css" rel="stylesheet" href="./css/feather.css">
<link type="text/css" rel="stylesheet" href="./css/toaster.css">
<link type="text/css" rel="stylesheet" href="./css/animate.min.css">
<link type="text/css" rel="stylesheet" href="./css/textAngular.css">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body>
   <div data-ui-view="" data-autoscroll="false" ng-controller="CoreController" class="app-container ng-scope"><!-- uiView:  --><div ui-view="" autoscroll="false" class="ng-fadeOutZoom ng-fluid ng-scope"><div class="container container-xsm animated fadeInDown ng-scope">
   <div class="center-block mt-xl">
      <!-- START panel-->
      <h1 class="text-center">Cycle Zone</h1>
      <div class="panel">
         <div class="panel-body">
            <div><?php //echo $Msg; ?>
              <?php if(isset($Msg)) echo $Msg ; ?>
            </div>
            <p class="pv text-bold">LOGIN CREDENTIALS</p>
            <form role="form" class="mb-lg ng-pristine ng-valid" method="post">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group has-feedback mb">
                        <input id="Email" name="Email" placeholder="Your email" autocomplete="off" class="form-control" type="email">
                        <span class="fa fa-envelope form-control-feedback text-muted"></span>
                     </div>
                     <br>
                     <div class="form-group has-feedback">
                        <input id="Password" name="Password" placeholder="Your password" class="form-control" type="password">
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                     </div>
                     <button type="submit" class="btn btn-block btn-info mb">Login</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- END panel-->
      <!-- ngInclude: 'app/views/page.footer.html' --><div ng-include="'app/views/page.footer.html'" class="p-lg text-center ng-scope">
<span class="mr-sm ng-scope">©</span>
<span ng-bind="app.year" class="mr-sm ng-binding ng-scope">2015</span>
<span class="ng-binding ng-scope" ng-bind="app.name">Cycle Zone</span>
</div>
   </div>
</div></div></div>
   <!-- Settings-->
   <!-- ngInclude: 'templates/settings.html' --><div ng-include="'templates/settings.html'" ng-class="{'visible': showSettings}" ng-init="showSettings = false" class="settings-wrapper ng-scope"><div class="settings-inner ng-scope">
   <div ng-click="showSettings = !showSettings" class="settings-button">
      <em class="icon-cog"></em>
   </div>
   </div></div>
   <!-- End Settings-->
   <!-- Layer Morph -->
       <!-- End Layer Morph -->
   
      </body></html>