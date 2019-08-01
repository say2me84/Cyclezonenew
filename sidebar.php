<?php
    $warehouse = "";
    $invoiceParent = "";
    $invoice = "";
    
    $PageName = explode("/",$_SERVER['SCRIPT_NAME']);
    $PageNameOrg = explode(".",$PageName[count($PageName)-1]);
    $PageName = $PageNameOrg[0];
    //exit($PageName);
    if($PageName=="warehouse")
    {
        $warehouse = "active";
    }
    else if($PageName=="invoice")
    {
        $invoiceParent = "active";
        $invoice = "active";
    }
    else if($PageName=="listinvoice")
    {
        $invoiceParent = "active";
        $listinvoice = "active";
    }
    else if($PageName=="merchantinvoice")
    {
        $merchantinvoiceParent = "active";
        $merchantinvoice = "active";
    }
    else if($PageName=="merchantlistinvoice")
    {
        $merchantinvoiceParent = "active";
        $merchantlistinvoice = "active";
    }
    else if($PageName=="tinmerchantinvoice")
    {
        $tinmerchantinvoiceParent = "active";
        $tinmerchantinvoice = "active";
    }
    else if($PageName=="tinmerchantlistinvoice")
    {
        $tinmerchantinvoiceParent = "active";
        $tinmerchantlistinvoice = "active";
    }
    else if($PageName=="inventory")
    {
        $inventoryParent = "active";
        $inventory = "active";
    }
    else if($PageName=="viewinventory")
    {
        $inventoryParent = "active";
        $viewinventory = "active";
    }
    else if($PageName=="viewcycleinventory")
    {
        $viewcycleinventory = "active";
    }
    else if($PageName=="orderpurchase")
    {
        $orderpurchaseParent = "active";
        $orderpurchase = "active";
    }
    else if($PageName=="listorderpurchase")
    {
        $orderpurchaseParent = "active";
        $listorderpurchase = "active";
    }
    else if($PageName=="customer")
    {
        $customerParent = "active";
        $customer = "active";
    }
    else if($PageName=="viewcustomer")
    {
        $customerParent = "active";
        $viewcustomer = "active";
    }
    else if($PageName=="merchant")
    {
        $merchantParent = "active";
        $merchant = "active";
    }
    else if($PageName=="viewmerchant")
    {
        $merchantParent = "active";
        $viewmerchant = "active";
    }
    else if($PageName=="supplier")
    {
        $supplierParent = "active";
        $supplier = "active";
    }
    else if($PageName=="viewsupplier")
    {
        $supplierParent = "active";
        $viewsupplier = "active";
    }
    else if($PageName=="viewvisiter")
    {
        $visiterParent = "active";
        $viewvisiter = "active";
    }
    else if($PageName=="product")
    {
        $productParent = "active";
        $product = "active";
    }
    else if($PageName=="viewproduct")
    {
        $productParent = "active";
        $viewproduct = "active";
    }
    else if($PageName=="spareproduct")
    {
        $productParent = "active";
        $spareproduct = "active";
    }
    else if($PageName=="viewspareproduct")
    {
        $productParent = "active";
        $viewspareproduct = "active";
    }
    else if($PageName=="company")
    {
        $productMasterParent = "active";
        $company = "active";
    }
    else if($PageName=="viewcompany")
    {
        $productMasterParent = "active";
        $viewcompany = "active";
    }
    else if($PageName=="modal")
    {
        $productMasterParent = "active";
        $modal = "active";
    }
    else if($PageName=="viewmodal")
    {
        $productMasterParent = "active";
        $viewmodal = "active";
    }
    else if($PageName=="segment")
    {
        $productMasterParent = "active";
        $segment = "active";
    }
    else if($PageName=="viewsegment")
    {
        $productMasterParent = "active";
        $viewsegment = "active";
    }
    else if($PageName=="color")
    {
        $productMasterParent = "active";
        $color = "active";
    }
    else if($PageName=="viewcolor")
    {
        $productMasterParent = "active";
        $viewcolor = "active";
    }
    else if($PageName=="size")
    {
        $productMasterParent = "active";
        $size = "active";
    }
    else if($PageName=="viewsize")
    {
        $productMasterParent = "active";
        $viewsize = "active";
    }
    else if($PageName=="tax")
    {
        $taxParent = "active";
        $tax = "active";
    }
    else if($PageName=="viewtax")
    {
        $taxParent = "active";
        $viewtax = "active";
    }
    else if($PageName=="user")
    {
        $userParent = "active";
        $user = "active";
    }
    else if($PageName=="viewuser")
    {
        $userParent = "active";
        $viewuser = "active";
    }
    else if($PageName=="profile")
    {
        $profileParent = "active";
    }
    
    
    
    
    
    
    
    
     
    
?>
<style>
    .sidebar-nav a span,.sidebar-nav a em{
        color:#999;    
        font-weight: normal;    
    }
    .sidebar-nav li.active .NavTitle span,.sidebar-nav li.active .NavTitle em,.sidebar-nav li.active ul li.active a span{
        color:#fff;    
        font-weight: normal;    
    }
    .sidebar-nav a:hover span,.sidebar-nav a:hover em{
        color:#fff;        
    }
</style>

<aside ng-include="&#39;templates/sidebar.html&#39;" ng-class="app.theme.sidebar" class="ng-scope bg-white"><!-- START Sidebar-->
<div class="sidebar-wrapper ng-scope" style="background: #222222;">
   <div ui-sidebar="" class="sidebar">
      <div class="sidebar-nav" style="background: #222222;"> 
         <ul class="nav">
            <!-- Iterates over all sidebar items-->
            <li class="nav-heading">
               <span translate="sidebar.heading.HEADER" class="text-muted ng-scope"><img src="images/cyclezonelogo1.png"></span>
            </li>
            <li class="<?php echo $warehouse;?>">
               <a title="Validation" ripple="" href="<?php echo PreURL;?>">
                    <em class="sidebar-item-icon fa fa-tachometer"></em>
                    <span class="ng-scope">Dashboard</span>
                    <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span>
               </a>
            </li>
            <li class="<?php echo $warehouse;?>">
               <a title="Validation" ripple="" href="<?php echo PreURL;?>/warehouse.php">
                    <em class="sidebar-item-icon fa fa-cubes"></em>
                    <span class="ng-scope">Warehouse</span>
                    <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span>
               </a>
            </li>
            <li class="<?php echo $invoiceParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-rupee"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Retail Invoice</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Retail Invoice</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $invoice;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/invoice.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Retail Invoice</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $listinvoice;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/listinvoice.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Retail Invoice</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $merchantinvoiceParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon  fa fa-rupee"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Retail Merchant Invoice</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Retail Merchant Invoice</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $merchantinvoice;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/merchantinvoice.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Retail Merchant Invoice</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $merchantlistinvoice;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/merchantlistinvoice.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Retail Merchant Invoice</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $tinmerchantinvoiceParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon  fa fa-rupee"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Tin Merchant Invoice</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Tin Merchant Invoice</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $tinmerchantinvoice;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/tinmerchantinvoice.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Tin Merchant Invoice</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $tinmerchantlistinvoice;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/tinmerchantlistinvoice.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Tin Merchant Invoice</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $inventoryParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-cube"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Supplier Price</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Supplier Price</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $inventory;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/inventory.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Supplier Price</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewinventory;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewinventory.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Supplier Price</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $viewcycleinventory;?>">
               <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewcycleinventory.php">
                    <em class="sidebar-item-icon fa fa-database"></em>
                    <span class="ng-scope">CycleZone Price</span>
                    <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span>
               </a>
            </li>
            <li class="<?php echo $orderpurchaseParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-folder-o"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Purchase Order</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Purchase Order</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $orderpurchase;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/orderpurchase.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Purchase Order</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $listorderpurchase;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/listorderpurchase.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Purchase Order</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $customerParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-group"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Customer Profile</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Customer</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $customer;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/customer.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Customer</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewcustomer;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewcustomer.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Customer</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $merchantParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-group"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Merchant Profile</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Merchant</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $merchant;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/merchant.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Merchant</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewmerchant;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewmerchant.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Merchant</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $supplierParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-users"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Supplier Profile</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Supplier</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $supplier;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/supplier.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Supplier</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewsupplier;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewsupplier.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Supplier</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $visiterParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-user"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Visiter Profile</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Visiter</a>
                  </li>
                  <!--<li ui-sref-active="active">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/visiter.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Visiter</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>-->
                  <li ui-sref-active="active" class="<?php echo $viewvisiter;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewvisiter.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Visiter</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $productParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-recycle"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Products Connection</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li ui-sref-active="active" class="<?php echo $product;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/product.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Cycle Product</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewproduct;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewproduct.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Cycle Product</span>
                     <span class="ripple"></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $spareproduct;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/spareproduct.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Spare Product</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewspareproduct;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewspareproduct.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Spare Product</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $productMasterParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-bicycle"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Product Master</span>
                  <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li ui-sref-active="active" class="<?php echo $company;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/company.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Company</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewcompany;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewcompany.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Company</span>
                     <span class="ripple"></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $modal;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/modal.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Modal Name</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewmodal;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewmodal.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Modal Name</span>
                     <span class="ripple"></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $segment;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/segment.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Segment</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewsegment;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewsegment.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Segment</span>
                     <span class="ripple"></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $color;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/color.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Color</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewcolor;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewcolor.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Color</span>
                     <span class="ripple"></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $size;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/size.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Size</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewsize;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewsize.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Size</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $taxParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-text-width"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Tax Master</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Tax</a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $tax;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/tax.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add Tax</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active" class="<?php echo $viewtax;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewtax.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View Tax</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $userParent;?>">
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-user"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">User Master</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>User</a>
                  </li>
                  <li ui-sref-active="active"class="<?php echo $user;?>">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/user.php?action=add">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Add User</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active"class="<?php echo $viewuser;?>">
                     <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/viewuser.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.VALIDATION" class="ng-scope">View User</span>
                     <span class="ripple"></span></a>
                  </li>
               </ul>
            </li>
            <li>
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-print"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Report Center</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li ui-sref-active="active">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/#">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Monthly Report</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/salesreport.php">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Sales Report</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  
               </ul>
            </li>
            <li>
               <a class="NavTitle" href="#" title="Forms" ripple="">
                  <em class="sidebar-item-icon fa fa-paw"></em>
                  <em class="sidebar-item-caret fa pull-right fa-angle-right"></em>
                  <span translate="sidebar.nav.form.FORM" class="ng-scope">Public Relation</span>
               <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span></a>
               <ul class="nav sidebar-subnav">
                  <li class="sidebar-subnav-header">
                     <a>
                        <em class="sidebar-item-icon fa fa-angle-right"></em>Public Relation</a>
                  </li>
                  <li ui-sref-active="active">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/#">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">SMS</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
                  <li ui-sref-active="active">
                     <a ui-sref="app.forms.inputs" title="Inputs" ripple="" href="<?php echo PreURL;?>/#">
                        <em class="sidebar-item-icon"></em>
                        <span translate="sidebar.nav.form.INPUT" class="ng-scope">Email</span>
                     <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: -55px; top: -102px;"></span></span></a>
                  </li>
               </ul>
            </li>
            <li class="<?php echo $profileParent;?>">
               <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/profile.php">
                    <em class="sidebar-item-icon fa fa-comment-o"></em>
                    <span class="ng-scope">Cyclezone Profile</span>
                    <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span>
               </a>
            </li>
            <li>
               <a ui-sref="app.forms.validation" title="Validation" ripple="" href="<?php echo PreURL;?>/#">
                    <em class="sidebar-item-icon fa fa-book"></em>
                    <span class="ng-scope">7ocean Technologies</span>
                    <span class="ripple"><span class="angular-ripple" style="width: 240px; height: 240px; left: 66px; top: -97px;"></span></span>
               </a>
            </li>
            <li>
                <hr>
            </li>
         </ul>
      </div>
   </div>
</div>
</aside>
<script>
    $('.NavTitle').click(function(event){
        event.preventDefault();
        if($(this).parents('li').hasClass('active'))
        {
            $(this).parents('li').removeClass('active');
        }
        else
        {
            $(this).parents('li').addClass('active');
        }
    })
</script>