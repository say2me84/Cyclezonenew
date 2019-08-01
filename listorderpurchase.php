<?php
    $title = "View Purchase Order";
    include("config.php");
    $Msg = "";
    
    if($_REQUEST['action']=="delete" && $_REQUEST['id']!="")
    {
        $DeleteCustomer = "DELETE FROM `master_purchase_order` WHERE `PurchaseOrderID` = '".$_REQUEST['id']."'";
        mysqli_query($DeleteCustomer);
        $DeleteCustomer = "DELETE FROM `master_purchase_order_child` WHERE `PurchaseOrderID` = '".$_REQUEST['id']."'";
        mysqli_query($DeleteCustomer);
        $Msg = "Delete record successfully";
    }
    
    include("header.php");
    include("sidebar.php");
?>
<script src="./js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('#example').DataTable({
             "sPaginationType": "full_numbers"
         });
    });
</script>
<section class="ng-scope">
    <div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2">
        <div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2">
            <div class="app-view-header ng-scope">View Purchase Order</div>
            <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
            <div ng-controller="TablexEditableController as xtable" class="container-fluid ng-scope">
                <table class="table table-bordered" id="example" >
                    <thead>
                        <tr style="font-weight: bold">
                            <th class="text-center">ID</th>
                            <th class="text-center">Date</th>
                            <th class="text-left">Supplier Name</th>
                            <th class="text-left">Quantity</th>
                            <th class="text-left">Payment Method</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selectCustomer = "SELECT * FROM `master_purchase_order`,master_supplier WHERE master_purchase_order.SupplierID= master_supplier.SupplierID Order by PurchaseOrderID Desc";
                            $ObjselectCustomer = mysqli_query($selectCustomer);
                            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
                            if($NumselectCustomer>0)
                            {
                                while($RsselectCustomer = mysqli_fetch_array($ObjselectCustomer))
                                {    
                                        
                                    ?>
                                        <tr ng-repeat="user in xtable.users" class="ng-scope">
                                            <td class="text-center"><span><a href="vieworderpurchase.php?id=<?php echo $RsselectCustomer['PurchaseOrderID'];?>"><?php echo $RsselectCustomer['PurchaseOrderNo'];?></a></span></td>
                                            <td class="text-center">
                                                <span>
                                                    <?php 
                                                        $Date = explode("-",$RsselectCustomer['Date']);
                                                        $Date = $Date[2]."-".$Date[1]."-".$Date[0];
                                                        echo $Date;
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="text-left"><span><?php echo $RsselectCustomer['CompanyName'];?></span></td>
                                            <td class="text-left">
                                                <span>
                                                    <?php 
                                                        $selectChild = " SELECT SUM(Quantity) as Quantity FROM `master_purchase_order_child` WHERE PurchaseOrderID='".$RsselectCustomer['PurchaseOrderID']."' AND Active='1'";
                                                        $ObjselectChild = mysqli_query($selectChild);
                                                        if(mysqli_num_rows($ObjselectChild)>0)
                                                        {
                                                            $RsselectChild = mysqli_fetch_array($ObjselectChild);
                                                            echo $RsselectChild['Quantity'];
                                                        }
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="text-left"><span><?php echo $RsselectCustomer['PaymentMethod'];?></span></td>
                                            <td style="white-space: nowrap" class="text-center">
                                                <div ng-show="!rowform.$visible" class="buttons">
                                                    
                                                    <a class="btn btn-sm btn-primary" href="<?php echo PreURL;?>/vieworderpurchase.php?id=<?php echo $RsselectCustomer['PurchaseOrderID'];?>">
                                                        <em class="fa fa-eye"></em>
                                                    </a>
                                                    <a class="btn btn-sm btn-info" href="<?php echo PreURL;?>/orderpurchase.php?action=edit&id=<?php echo $RsselectCustomer['PurchaseOrderID'];?>">
                                                        <em class="fa fa-pencil"></em>
                                                    </a>
                                                    <a class="btn btn-sm btn-danger" href="<?php echo PreURL;?>/listorderpurchase.php?action=delete&id=<?php echo $RsselectCustomer['PurchaseOrderID'];?>">
                                                        <em class="fa fa-trash"></em>
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="#">
                                                        <em class="fa fa-file"></em>
                                                    </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php                        
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <div>&nbsp;</div>
                <a href="<?php echo PreURL;?>/orderpurchase.php?action=add" class="btn btn-default">Add Invoice</a>
            </div>
        </div>
   </div>
</section> 
<?php
    include("footer.php");
?>


</div><!--//--><!-- ngInclude: 'templates/settings.html' -->
<div ng-include="&#39;templates/settings.html&#39;" ng-class="{&#39;visible&#39;: showSettings}" ng-init="showSettings = false" class="settings-wrapper ng-scope"><div class="settings-inner ng-scope">
   <div ng-click="showSettings = !showSettings" class="settings-button">
      <em class="icon-cog"></em>
   </div>
   <div ng-controller="SettingsController as config" class="settings ng-scope">
      <div class="settings-inner">
         <div class="settings-content">
            <div class="pt ph">
               <p class="text-muted">THEMES</p>
               <div class="clearfix mb">
                  <!-- ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="0">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-primary"></li>
                              <li ng-class="theme.topbar" class="bg-primary"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="1">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-purple"></li>
                              <li ng-class="theme.topbar" class="bg-purple"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="2">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-success"></li>
                              <li ng-class="theme.topbar" class="bg-success"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="3">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-warning"></li>
                              <li ng-class="theme.topbar" class="bg-warning"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="4">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-info"></li>
                              <li ng-class="theme.topbar" class="bg-info"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="5">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-danger"></li>
                              <li ng-class="theme.topbar" class="bg-danger"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="6">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-pink"></li>
                              <li ng-class="theme.topbar" class="bg-pink"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="7">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-amber"></li>
                              <li ng-class="theme.topbar" class="bg-amber"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes -->
               </div>
            </div>
            <hr>
            <div class="p">
               <p class="text-muted">LAYOUT</p>
               <div class="clearfix">
                  <p class="pull-left">Fixed</p>
                  <div class="pull-right">
                     <label class="switch switch-info">
                        <input type="checkbox" ng-model="app.layout.isFixed" ng-disabled="app.layout.isMaterial" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="clearfix">
                  <p class="pull-left">Boxed</p>
                  <div class="pull-right">
                     <label class="switch switch-info">
                        <input type="checkbox" ng-model="app.layout.isBoxed" ng-disabled="app.layout.isMaterial" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="clearfix">
                  <p class="pull-left">Material</p>
                  <div class="pull-right">
                     <label ng-click="app.layout.isBoxed = false; app.layout.isFixed = true" class="switch switch-info">
                        <input type="checkbox" ng-model="app.layout.isMaterial" ng-disabled="app.layout.isDocked || app.sidebar.isMini" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="p">
               <p class="text-muted">SIDEBAR</p>
               <div class="clearfix">
                  <p class="pull-left">Mini</p>
                  <div class="pull-right">
                     <label ng-click="app.layout.isMaterial = false;" class="switch switch-info">
                        <input type="checkbox" ng-model="app.sidebar.isMini" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="p">
               <p class="text-muted">FOOTER</p>
               <div class="clearfix">
                  <p class="pull-left">Hidden</p>
                  <div class="pull-right">
                     <label class="switch switch-info">
                        <input type="checkbox" ng-model="app.footer.hidden" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
            </div>
            <hr>
            <div class="p">
               <!-- START Language list-->
               <div class="pull-right">
                  <div dropdown="" is-open="language.listIsOpen" class="btn-group btn-group-sm"><a dropdown-toggle="" class="dropdown-toggle clickable ng-binding" aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></a>
                     <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInLeft2">
                        <!-- ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">English</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">Español</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">Português</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">中国简体</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available -->
                     </ul>
                  </div>
               </div>
               <!-- END Language list    -->
               <p class="text-muted">LANGUAGE</p>
            </div>
         </div>
      </div>
   </div>
</div></div>
<div class="layer-morph-overlay"><div class="layer-morph-inner bg-info"></div></div>
<div layer-morph-close="" class="layer-morph-close"><em class="icon-cross"></em></div>
<div class="layer-morph-container bg-info"><div class="layer-morph-wrapper"><!-- ngInclude: 'templates/layer-search.html' --><div id="layer-search" ng-include="&#39;templates/layer-search.html&#39;" class="layer-morph ng-scope"><form action="" class="ng-pristine ng-valid ng-scope">
   <p class="help-block">Type and hit enter to search</p>
   <input type="text" placeholder="I&#39;m looking for..." ng-model="searchTerm" class="form-control input-huge ng-pristine ng-untouched ng-valid">
   <button type="submit" class="hidden">Search</button>
</form>
<div class="row ng-scope">
   <div class="col-md-4 col-sm-6 pv">
      <h4 class="text-bold pv-lg">People (4)</h4>
      <br>
      <ul class="list-unstyled">
         <!-- START User-->
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/05.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-success point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Marc Fuller</a>
               </div>
            </div>
         </li>
         <!-- END User-->
         <!-- START User-->
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/06.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-success point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Wade Wade</a>
               </div>
            </div>
         </li>
         <!-- END User-->
         <!-- START User-->
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/07.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-danger point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Alan Boyd</a>
               </div>
            </div>
         </li>
         <!-- END User-->
         <!-- START User-->
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/01.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-danger point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Ryan Carr</a>
               </div>
            </div>
         </li>
         <!-- END User-->
      </ul>
   </div>
   <div class="col-md-4 col-sm-6 pv">
      <h4 class="text-bold pv-lg">Pages (3)</h4>
      <br>
      <ul class="list-unstyled">
         <li class="media">
            <div class="media-left media-middle">
               <div class="thumb40 bg-success circle text-center text-bold">D</div>
            </div>
            <div class="media-body">
               <div class="media-heading clearfix"><a ui-sref="app.dashboard" layer-morph-close="" class="pull-left text-md" href="http://geedmo.com/themes/naut/v1.2/angularjs/#/app/dashboard">Dashboard</a>
                  <small class="text-muted pull-right mt">3 matches</small>
               </div>
            </div>
         </li>
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <div class="thumb40 bg-purple circle text-center text-bold">P</div>
            </div>
            <div class="media-body">
               <div class="media-heading clearfix"><a ui-sref="app.extras.profile" layer-morph-close="" class="pull-left text-md" href="http://geedmo.com/themes/naut/v1.2/angularjs/#/app/extras/profile">Profile</a>
                  <small class="text-muted pull-right mt">3 matches</small>
               </div>
            </div>
         </li>
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <div class="thumb40 bg-danger circle text-center text-bold">P</div>
            </div>
            <div class="media-body">
               <div class="media-heading clearfix"><a ui-sref="app.extras.projects" layer-morph-close="" class="pull-left text-md" href="http://geedmo.com/themes/naut/v1.2/angularjs/#/app/extras/projects">Projects</a>
                  <small class="text-muted pull-right mt">2 match(es)</small>
               </div>
            </div>
         </li>
      </ul>
   </div>
</div></div><div class="layer-morph-footer">Naut</div></div></div>
<!--<script src="./js/application-0c8ca458.js"></script> 
<script src="./js/scrap.js" type="text/javascript"></script>
<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/essence.js" type="text/javascript"></script>-->
<div id="flotTip" style="display: none; position: absolute; background-color: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-top-left-radius: 0.5em; border-top-right-radius: 0.5em; border-bottom-right-radius: 0.5em; border-bottom-left-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; background-position: initial initial; background-repeat: initial initial;"></div><input id="textAngular-editableFix-010203040506070809" class="ta-hidden-input" unselectable="on" tabindex="-1"></body></html>