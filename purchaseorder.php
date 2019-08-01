<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Purchase Order";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
        //print_r($_POST);
        
        if($_REQUEST['action']=="add")
        {
            $InsertCustomer = "INSERT INTO `master_customer` (
                                                                `FirstName` ,
                                                                `MiddelName` ,
                                                                `LastName` ,
                                                                `BirthDate` ,
                                                                `Comapany` ,
                                                                `Email` ,
                                                                `HomeNumber` ,
                                                                `OfficeNumber` ,
                                                                `MobileNumber` ,
                                                                `Website` ,
                                                                `BillingAddress` ,
                                                                `ShippingAddress` ,
                                                                `BillingCity` ,
                                                                `ShippingCity` ,
                                                                `TypeID`)
                                                                        VALUES (
                                                                                '".$_POST['FirstName']."', 
                                                                                '".$_POST['MiddelName']."', 
                                                                                '".$_POST['LastName']."', 
                                                                                '".$_POST['BirthDate']."', 
                                                                                '".$_POST['Comapany']."', 
                                                                                '".$_POST['Email']."', 
                                                                                '".$_POST['HomeNumber']."', 
                                                                                '".$_POST['OfficeNumber']."', 
                                                                                '".$_POST['MobileNumber']."', 
                                                                                '".$_POST['Website']."', 
                                                                                '".$_POST['BillingAddress']."', 
                                                                                '".$_POST['ShippingAddress']."', 
                                                                                '".$_POST['BillingCity']."', 
                                                                                '".$_POST['ShippingCity']."', 
                                                                                '".$_POST['TypeID']."');";
            mysqli_query($InsertCustomer);
            //exit;
            $Msg = "Customer Added Successfully";
        }
        else
        {
            $UpdateCustomer = "UPDATE `master_customer` SET `FirstName` = '".$_POST['FirstName']."',
                                                            `MiddelName` = '".$_POST['MiddelName']."',
                                                            `LastName` = '".$_POST['LastName']."',
                                                            `BirthDate` = '".$_POST['BirthDate']."',
                                                            `Comapany` = '".$_POST['Comapany']."',
                                                            `Email` = '".$_POST['Email']."',
                                                            `HomeNumber` = '".$_POST['HomeNumber']."',
                                                            `OfficeNumber` = '".$_POST['OfficeNumber']."',
                                                            `MobileNumber` = '".$_POST['MobileNumber']."',
                                                            `Website` = '".$_POST['Website']."',
                                                            `BillingAddress` = '".$_POST['BillingAddress']."',
                                                            `ShippingAddress` = '".$_POST['ShippingAddress']."',
                                                            `BillingCity` = '".$_POST['BillingCity']."',
                                                            `ShippingCity` = '".$_POST['ShippingCity']."',
                                                            `TypeID` = '".$_POST['TypeID']."' WHERE `CustomerID` ='".$_REQUEST['id']."';";
            mysqli_query($UpdateCustomer);
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Customer";    
        $selectCustomer = "SELECT * FROM `master_customer` WHERE CustomerID='".$_REQUEST['id']."'";
        $ObjselectCustomer = mysqli_query($selectCustomer);
        $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);
    }
    
    include("header.php");
    include("sidebar.php");
?>
<section class="ng-scope">
    <div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2">
        <div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2">
            <div class="app-view-header ng-scope"><?php echo $title;?> <!--<small>Classic and new components</small>--></div>
            <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
            <div ng-controller="FormInputController as form" class="container-fluid ng-scope">
                <div class="panel panel-default">
                    <!--<h4 class="panel-heading"><?php echo $title;?></h4>-->
                    <div class="panel-body">
                        <form id="FrmPurchaseOrder" action="" method="post">
                        <div>
                            <div style="float:left;width:33%;">
                                <div><label class="control-label">Supplier Name</label></div>
                                <div>
                                    <select class="form-control shadow-z1" name="SupplierID" id="SupplierID">
                                    <?php
                                        $selectSupplier = "SELECT * FROM `master_supplier` WHERE Active='1'";
                                        $ObjselectSupplier = mysqli_query($selectSupplier);
                                        while($RsselectSupplier = mysqli_fetch_array($ObjselectSupplier))
                                        {
                                            ?>
                                                <option value="<?php echo $RsselectSupplier['SupplierID'];?>"><?php echo $RsselectSupplier['FirstName']." ".$RsselectSupplier['LastName'];?></option>          
                                            <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div style="float:left;width:33%;padding-left:1%;padding-right:1%;">
                                <div><label class="control-label">Payment Status</label></div>
                                <div>
                                    <select class="form-control shadow-z1" id="PaymentStatus" name="PaymentStatus">
                                        <option>Cash</option>          
                                        <option>Cheque</option>          
                                        <option>Credit Card</option>          
                                    </select>
                                </div>
                            </div>
                            <div style="float:right;width:33%;">
                                <div><label class="control-label">Date</label></div>
                                <div>
                                    <input id="Date" name="Date" placeholder="Date" type="text" class="form-control shadow-z1">                                
                                    <span class="help-block m-b-none">e.g.(yyyy-mm-dd)</span>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>
                             <table class="table table-bordered table-hover bg-white">
                                <thead>
                                    <tr>
                                        <th colspan="6" class="text-center" style="border-top: 1px solid #ccc;border-left: 1px solid #ccc; border-right: 1px solid #ccc;font-size: 25px;padding:5px !important;">Mayur Panchal</th>
                                    </tr>
                                    <tr class="active">
                                        <th>#</th>
                                        <th>Invoice No.</th>
                                        <th>Date</th>
                                        <th>Payment Status</th>
                                        <th>Totol Price</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                    <tr>
                                        <td><div style="border:1px solid #ccc;width: 20px;text-align:center;">+</div></td>
                                        <td>1215</td>
                                        <td>20 Nov 2015</td>
                                        <td>Cash</td>
                                        <td>12000</td>
                                        <td>This is for our employees</td>
                                    </tr>
                                    <tr>
                                        <td><div style="border:1px solid #ccc;width: 20px;text-align:center;">+</div></td>
                                        <td>1620</td>
                                        <td>15 Jan 2015</td>
                                        <td>Cheque</td>
                                        <td>20000</td>
                                        <td>This is for my brother</td>
                                    </tr>
                                    <tr>
                                        <td><div style="border:1px solid #ccc;width: 20px;text-align:center;">+</div></td>
                                        <td>2015</td>
                                        <td>25 Mar 2015</td>
                                        <td>creadit Card</td>
                                        <td>20000</td>
                                        <td>This is for my sister</td>
                                    </tr>
                                </tbody>
                             </table>
                        </div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>
                            <table class="table table-bordered table-hover bg-white">
                                <thead>
                                    <tr class="active">
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Comapnay Name</th>
                                        <th class="text-center">Model Number</th>
                                        <th class="text-center">Color</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Org. Price</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Sub Price</th>
                                        <th class="text-center">Tax</th>
                                        <th class="text-center">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    for($i=1;$i<3;$i++)
                                    {
                                        ?>
                                            <tr id="line1">
                                            <td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><?php echo $i;?></td>
                                            <td class="text-center">
                                                <select name="CompanyName[]" class="CompanyName form-control" style="width:100px;">
                                                    <option value="0">Select</option>
                                                    <?php
                                                        $selectComapny = "select * from master_products where Active='1' group by Company";
                                                        $ObjselectComapny = mysqli_query($selectComapny);
                                                        while($RsselectComapny = mysqli_fetch_array($ObjselectComapny))
                                                        {
                                                            ?>
                                                                <option><?php echo $RsselectComapny['Company'];?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select name="ModelNumber[]" value="" class="ModelNumber form-control" style="width:150px1;">
                                                    <option value="0">Select</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select name="Color[]" value="" class="Color form-control" style="width:150px1;">
                                                    <option value="0">Select</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select name="Size[]" value="" class="Size form-control" style="width:150px1;">
                                                    <option value="0">Select</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <input type="text" name="Quantity[]" class="Quantity form-control" style="width:60px;">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" name="OrgPrice[]" value="0" class="OrgPrice form-control text-right input-sm" style="width: 80px;">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" name="Price[]" value="0" class="Price form-control text-right input-sm" style="width: 80px;">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" name="SubPrice[]" value="0" class="SubPrice form-control text-right input-sm" style="width: 80px;" readonly="readonly">
                                            </td>
                                            <td class="text-center">
                                                <div class="TaxBox">
                                                    <div style="float:left;padding-top: 10px;"><input type="checkbox" checked="checked" class="TaxCheckBox"></div>
                                                    <div style="float:left;"><input type="text" name="TaxValue[]" value="0" readonly="readonly" class="TaxValue form-control text-right input-sm" style="width: 60px;"><input type="hidden" class="HidTextvalue"></div>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </td><td class="text-center">
                                                <input type="text" name="TotalPrice[]" value="0" class="TotalPrice form-control text-right input-sm" style="width: 80px;" readonly="readonly">
                                            </td>                            
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <div style="float:left;">
                                <input type="submit" name="submit" value="Add Row" class="btn btn-primary btn-large" />
                                <div style="clear:both;"></div>
                            </div>
                            <div style="float:right;">
                                <div style="float:right;"><input type="text" class="form-control text-right input-sm" value="0" name="Discount" id="Discount"></div>
                                <div style="float:right;padding-right:10px;padding-top:5px;">Discount</div>
                                <div style="clear:both;"></div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                        <div>&nbsp;</div>
                        <div align="right">
                            <div style="float:right;"><input type="text" class="form-control text-right input-sm" value="0" name="Shipping" id="Shipping"></div>
                            <div style="float:right;padding-right:10px;padding-top:5px;">Shipping</div>
                            <div style="clear:both;"></div>
                        </div>
                        <div>&nbsp;</div>
                        <div align="right">
                            <div style="float:right;">
                                <input type="hidden" name="HidLastTotalPrice" id="HidLastTotalPrice">
                                <input type="text" readonly="readonly" class="form-control text-right input-sm" name="LastTotalPrice" id="LastTotalPrice">
                            </div>
                            <div style="float:right;padding-right:10px;padding-top:5px;">Total Price</div>
                            <div style="clear:both;"></div>
                        </div>
                        <p class="clearfix">&nbsp;</p>

                        <div class="form-group">
                            <textarea name="Note" cols="40" rows="10" id="note" type="textarea" class="input-block-level" placeholder="Please add notes (if any)" rows="3" style="margin-top: 10px; height: 100px;"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <div style="float:left;"><input type="checkbox" name="EmailSend" value="1" id="EmailSend" class="form-control"/></div>
                                <div style="float:left;padding-left:5px;padding-top:5px;">Email Send?</div>
                                <div style="clear:both;"></div>
                            </div>    
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" value="Add Purchase Order" class="btn btn-primary btn-large" /> </div>
                        
                        
                        
                      </div>
                   </div>
   <!-- END panel-->
</div></div></div></section> <!-- ngInclude: 'templates/footer.html' -->

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
<script type="text/javascript">
    $(document).ready(function() {
        $(".CompanyName").change(function() {                    
            var thisval = $(this);
            $.ajax({
                url: 'ajax.php?filter=GetModalNo&CompanyName='+$(this).val(),
                success: function(html) 
                {
                    thisval.parent().next().find('select').html(html);        
                    //thisval.parent().next().find('select').change();
                }
            });      
        });
        $(".ModelNumber").change(function() {
            var thisval = $(this);
            var CompanyID = thisval.parent().prev().find('select').val();
            $.ajax({
                url: 'ajax.php?filter=GetColor&ModelNumber='+$(this).val()+"&CompanyID="+CompanyID,
                success: function(html) 
                {
                    thisval.parent().next().find('select').html(html);        
                }
            });      
        });
        $(".Color").change(function() {
            var thisval = $(this);
            var CompanyID = thisval.parent().prev().prev().find('select').val();
            var ModalID = thisval.parent().prev().find('select').val();
            $.ajax({
                url: 'ajax.php?filter=GetSize&Color='+$(this).val()+"&CompanyID="+CompanyID+"&ModalID="+ModalID,
                success: function(html) 
                {
                    thisval.parent().next().find('select').html(html);        
                }
            });      
        });
        $(".Price").change(function() {
            var thisval = $(this);
            var CompanyID = thisval.parent().prev().prev().prev().prev().prev().prev().find('select').val();
            var ModalID = thisval.parent().prev().prev().prev().prev().prev().find('select').val();
            var Color = thisval.parent().prev().prev().prev().prev().find('select').val();
            var Size = thisval.parent().prev().prev().prev().find('select').val();
            
            var Quantity = thisval.parent().prev().prev().find('.Quantity').val();
            var SubPrice  = parseFloat(thisval.val()) * parseFloat(Quantity);
            SubPrice = SubPrice.toFixed(2); 
            thisval.parent().next().find('.SubPrice').val(SubPrice);
            
            $.ajax({
                url: 'ajax.php?filter=GetTax&Price='+$(this).val()+"&CompanyID="+CompanyID+"&ModalID="+ModalID+"&Color="+Color+"&Size="+Size+"&Quantity="+Quantity,
                success: function(html) 
                {
                    var TaxPer = html;
                    var TaxPrice = parseFloat(SubPrice) * parseFloat(html)/parseFloat(100);
                    thisval.parent().next().next().find('.TaxValue').val(TaxPrice);        
                    var TotalPrice = parseFloat(TaxPrice) + parseFloat(SubPrice);
                    thisval.parent().next().next().next().find('.TotalPrice').val(TotalPrice);        
                }
            });      
            
        });
        $('#FrmPurchaseOrder').submit(function() {
            var Error = false;
            var Date = $("#Date").val();              
            var SupplierID = $("#SupplierID").val();              
            var PaymentStatus = $("#PaymentStatus").val();              
            var LastTotalPrice = $("#LastTotalPrice").val();              
            
            
            if(Date=="")
            {
                $("#Date").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#Date').attr('style', 'border:1px solid #ccc !important');
            }
            if(SupplierID==0)
            {
                $("#SupplierID").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#SupplierID').attr('style', 'border:1px solid #ccc !important');
            }
            if(PaymentStatus==0)
            {
                $("#PaymentStatus").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#PaymentStatus').attr('style', 'border:1px solid #ccc !important');
            }
            if(LastTotalPrice=="")
            {
                $("#LastTotalPrice").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#LastTotalPrice').attr('style', 'border:1px solid #ccc !important');
            }                                                                          
            if(Error) 
            {
                return false;
            }
        });
        $('.TaxCheckBox').click(function() {
            if($(this).prop("checked") == true)
            {
                var Taxval = $(this).parents('.TaxBox').find('.HidTextvalue').val();
                $(this).parents('.TaxBox').find('.TaxValue').val(Taxval);
            }
            else
            {
                var Taxval = 0.00;
                $(this).parents('.TaxBox').find('.TaxValue').val(Taxval);
            }   
            Taxval = parseFloat(Taxval).toFixed(2); 
            var TotalPrice = parseFloat($(this).parents('tr').find('.SubPrice').val()) + parseFloat(Taxval);
            TotalPrice = TotalPrice.toFixed(2); 
            $(this).parents('tr').find('.TotalPrice').val(TotalPrice);    
            var LastTotal = 0;
            $(".TotalPrice").each(function( index ) {
                LastTotal = parseFloat(LastTotal) + parseFloat($(this).val());
            });
            if($('#Shipping').val()=="")
            {
                var Shipping = 0;
            }
            else
            {
                var Shipping = parseFloat($('#Shipping').val());    
            }
            if($('#Discount').val()=="")
            {
                var Discount = 0;
            }
            else
            {
                var Discount = parseFloat($('#Discount').val());    
            }
            
            LastTotal = LastTotal + Shipping - Discount;
            LastTotal = LastTotal.toFixed(2); 
            $('#LastTotalPrice').val(LastTotal);
            $('#HidLastTotalPrice').val(LastTotal);
        });
    });
</script>
<div id="flotTip" style="display: none; position: absolute; background-color: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-top-left-radius: 0.5em; border-top-right-radius: 0.5em; border-bottom-right-radius: 0.5em; border-bottom-left-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; background-position: initial initial; background-repeat: initial initial;"></div><input id="textAngular-editableFix-010203040506070809" class="ta-hidden-input" unselectable="on" tabindex="-1"></body></html>