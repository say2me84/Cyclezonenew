<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Supplier Price";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
//        print_r($_POST);
//        exit;
        if($_REQUEST['action']=="add")
        {   
            
            $Date = explode("-",$_POST['Date']);
            $Date = $Date[2]."-".$Date[1]."-".$Date[0];
            $InsertInventory = "INSERT INTO `master_inventory` (
                                                                `Date` ,
                                                                `InvoiceNumber` ,
                                                                `SupplierID` ,
                                                                `TransportationPrice` ,
                                                                `TotalPrice` ,
                                                                `Note`)
                                                                VALUES (
                                                                '".$Date."',
                                                                '".$_POST['InvoiceNumber']."', 
                                                                '".$_POST['SupplierID']."', 
                                                                '".$_POST['TransportationPrice']."', 
                                                                '".$_POST['LastTotalPrice']."', 
                                                                '".$_POST['Note']."');";
            //echo $InsertInventory;
            mysqli_query($InsertInventory);
            $InventoryID = mysqli_insert_id();
            if(count($_POST['AddComapanyName'])>0)
            {
                foreach($_POST['AddComapanyName'] as $k=>$v)
                {   
                    
                    
                    if($_POST['AddType'][$k]=="cycle")
                    {
                        $checkMasterRecord = "SELECT * from master_inventory_child WHERE Parents = '0' AND Type='cycle' AND CompanyName='".$_POST['AddComapanyName'][$k]."' AND ModalName='".$_POST['AddModalName'][$k]."' AND Color='".$_POST['AddColor'][$k]."' AND Size = '".$_POST['AddSize'][$k]."'";
                        $ObjcheckMasterRecord = mysqli_query($checkMasterRecord);
                        $NumcheckMasterRecord = mysqli_num_rows($ObjcheckMasterRecord);
                        if($NumcheckMasterRecord==1)
                        {
                            $RscheckMasterRecord = mysqli_fetch_array($ObjcheckMasterRecord);
                            $Parents = $RscheckMasterRecord['InventoryChildID'];
                        }
                        else
                        {
                            $Parents = 0;
                        }
                    }
                    else
                    {
                        $checkMasterRecord = "SELECT * from master_inventory_child WHERE Parents = '0' AND Type='spare' AND CompanyName='".$_POST['AddComapanyName'][$k]."' AND ItemName='".$_POST['AddItemName'][$k]."'";
                        $ObjcheckMasterRecord = mysqli_query($checkMasterRecord);
                        $NumcheckMasterRecord = mysqli_num_rows($ObjcheckMasterRecord);
                        if($NumcheckMasterRecord>0)
                        {                         
                            $RscheckMasterRecord = mysqli_fetch_array($ObjcheckMasterRecord);
                            $Parents = $RscheckMasterRecord['InventoryChildID'];
                        }
                        else
                        {   
                            $Parents = 0;
                        }    
                    }               
                    
                    $InsertInventoryChild = "INSERT INTO `master_inventory_child` (
                                                                                `InventoryID` ,
                                                                                `Parents` ,
                                                                                `Type` ,
                                                                                `CompanyName` ,
                                                                                `ModalName` ,
                                                                                `Color` ,
                                                                                `Size` ,
                                                                                `ItemName` ,
                                                                                `OrgBasicPrice` ,
                                                                                `OrgTaxPrice` ,
                                                                                `TransportationPrice` ,
                                                                                `OrgDiscountPrice` ,
                                                                                `OrgSchemePrice` ,
                                                                                `OrgTaxApplied` ,
                                                                                `OrgQuantity` ,
                                                                                `Quantity`)
                                                                                VALUES (
                                                                                '".$InventoryID."', 
                                                                                '".$Parents."', 
                                                                                '".$_POST['AddType'][$k]."',
                                                                                '".$_POST['AddComapanyName'][$k]."',
                                                                                '".$_POST['AddModalName'][$k]."',
                                                                                '".$_POST['AddColor'][$k]."',
                                                                                '".$_POST['AddSize'][$k]."',
                                                                                '".$_POST['AddItemName'][$k]."',
                                                                                '".$_POST['AddOrgBasicPrice'][$k]."',
                                                                                '".$_POST['AddOrgTaxPrice'][$k]."',
                                                                                '".$_POST['AddOrgTransportation'][$k]."',
                                                                                '".$_POST['AddOrgDiscount'][$k]."',
                                                                                '".$_POST['AddOrgScheme'][$k]."',
                                                                                '".$_POST['AddOrgTaxApplied'][$k]."',
                                                                                '".$_POST['AddQuantity'][$k]."',
                                                                                '".$_POST['AddQuantity'][$k]."'
                                                                                );";
                //echo $InsertInventoryChild;
                mysqli_query($InsertInventoryChild);
            }
            }
            $Msg = "Inventory Added Successfully";
        }
        else
        {
            $Date = explode("-",$_POST['Date']);
            $Date = $Date[2]."-".$Date[1]."-".$Date[0];
            $UpdateInventory = "UPDATE `master_inventory` SET `Date` = '".$Date."',
                                                                `InvoiceNumber` = '".$_POST['InvoiceNumber']."',
                                                                `SupplierID` = '".$_POST['SupplierID']."',
                                                                `TransportationPrice` = '".$_POST['TransportationPrice']."',
                                                                `TotalPrice` = '".$_POST['LastTotalPrice']."',
                                                                `Note` = '".$_POST['Note']."' 
                                                                WHERE `InventoryID` ='".$_REQUEST['id']."';";
            
            //echo $InsertInventory;
            mysqli_query($UpdateInventory);
            $InventoryID = $_REQUEST['id'];
            
            if(count($_POST['AddComapanyName'])>0)
            {
                foreach($_POST['AddComapanyName'] as $k=>$v)
                {   
                if($_POST['AddRoundPrice'][$k]!="")
                {
                    $TotalPrice = floatval($_POST['AddRoundPrice'][$k]) + floatval($_POST['AddSingalTaxPrice'][$k]);    
                }
                else
                {
                    $TotalPrice = floatval($_POST['AddProfitTotal'][$k]) + floatval($_POST['AddSingalTaxPrice'][$k]);    
                }
                $InsertInventoryChild = "INSERT INTO `master_inventory_child` (
                                                                                `InventoryID` ,
                                                                                `Type` ,
                                                                                `CompanyName` ,
                                                                                `ModalName` ,
                                                                                `Color` ,
                                                                                `Size` ,
                                                                                `ItemName` ,
                                                                                `OrgBasicPrice` ,
                                                                                `OrgTaxPrice` ,
                                                                                `TransportationPrice` ,
                                                                                `OrgDiscountPrice` ,
                                                                                `OrgSchemePrice` ,
                                                                                `OrgTaxApplied` ,
                                                                                `OrgQuantity` ,
                                                                                `Quantity`)
                                                                                VALUES (
                                                                                '".$InventoryID."', 
                                                                                '".$_POST['AddType'][$k]."',
                                                                                '".$_POST['AddComapanyName'][$k]."',
                                                                                '".$_POST['AddModalName'][$k]."',
                                                                                '".$_POST['AddColor'][$k]."',
                                                                                '".$_POST['AddSize'][$k]."',
                                                                                '".$_POST['AddItemName'][$k]."',
                                                                                '".$_POST['AddOrgBasicPrice'][$k]."',
                                                                                '".$_POST['AddOrgTaxPrice'][$k]."',
                                                                                '".$_POST['AddOrgTransportation'][$k]."',
                                                                                '".$_POST['AddOrgDiscount'][$k]."',
                                                                                '".$_POST['AddOrgScheme'][$k]."',
                                                                                '".$_POST['AddOrgTaxApplied'][$k]."',
                                                                                '".$_POST['AddQuantity'][$k]."',
                                                                                '".$_POST['AddQuantity'][$k]."'
                                                                                );";
                //echo $InsertInventoryChild;
                mysqli_query($InsertInventoryChild);
            }
            }
            if(count($_POST['EditHidInventoryChildID'])>0)
            {
                foreach($_POST['EditHidInventoryChildID'] as $k=>$v)
                {   
                if($_POST['EditRoundPrice'][$k]!="")
                {
                    $TotalPrice = floatval($_POST['EditRoundPrice'][$k]) + floatval($_POST['EditSingalTaxPrice'][$k]);    
                }
                else
                {
                    $TotalPrice = floatval($_POST['EditProfitTotal'][$k]) + floatval($_POST['EditSingalTaxPrice'][$k]);    
                }
                $UpdateInventoryChild = "UPDATE `master_inventory_child` SET `InventoryID` = '".$InventoryID."',
                                                                                `Type` = '".$_POST['EditType'][$k]."',
                                                                                `CompanyName` = '".$_POST['EditComapanyName'][$k]."',
                                                                                `ModalName` = '".$_POST['EditModalName'][$k]."',
                                                                                `Color` = '".$_POST['EditColor'][$k]."',
                                                                                `Size` = '".$_POST['EditSize'][$k]."',
                                                                                `ItemName` = '".$_POST['EditItemName'][$k]."',
                                                                                `OrgBasicPrice` = '".$_POST['EditOrgBasicPrice'][$k]."',
                                                                                `OrgTaxPrice` = '".$_POST['EditOrgTaxPrice'][$k]."',
                                                                                `TransportationPrice` = '".$_POST['EditOrgTransportation'][$k]."',
                                                                                `OrgDiscountPrice` = '".$_POST['EditOrgDiscount'][$k]."',
                                                                                `OrgSchemePrice` = '".$_POST['EditOrgScheme'][$k]."',
                                                                                `OrgTaxApplied` = '".$_POST['EditOrgTaxApplied'][$k]."',
                                                                                `OrgQuantity` = '".$_POST['EditQuantity'][$k]."',
                                                                                `Quantity` = '".$_POST['EditQuantity'][$k]."' WHERE `InventoryChildID` ='".$_POST['EditHidInventoryChildID'][$k]."';";
                                                                                                                            
                //echo $UpdateInventoryChild;
                mysqli_query($UpdateInventoryChild);
            }
            }
            
            $Msg = "Inventory Updated Successfully";            
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Inventory";    
        $selectInventory = "SELECT * FROM `master_inventory` WHERE InventoryID='".$_REQUEST['id']."'";
        $ObjselectInventory = mysqli_query($selectInventory);
        $RsselectInventory = mysqli_fetch_array($ObjselectInventory);
    }
                                 
    include("header.php");
    include("sidebar.php");
?>

        

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#Date").datepicker({ dateFormat: 'dd-mm-yy' });
    });
</script>
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
                            <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>">
                            <div>
                            <div class="InventoryLeft">
                                <div><label class="control-label">Date</label></div>
                                <div>
                                    <?php
                                        if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                        {
                                            $Date = $RsselectInventory['Date'];
                                            $Date = explode("-",$Date);
                                            $Date = $Date[2]."-".$Date[1]."-".$Date[0];    
                                        }
                                        else
                                        {
                                            $Date = "";                                                
                                        }
                                        
                                    ?>
                                    <input id="Date" name="Date" tabindex="1" placeholder="Date" type="text" class="form-control shadow-z1" value="<?php echo $Date;?>">
                                </div>
                                <div><label class="control-label">Invoice Number</label></div>
                                <div>
                                    <input id="InvoiceNumber" name="InvoiceNumber" tabindex="1" placeholder="Invoice Number" type="text" class="form-control shadow-z1" value="<?php echo $RsselectInventory['InvoiceNumber'];?>">
                                </div>
                                
                                <div><label class="control-label">Supplier Company Name</label></div>
                                <div>
                                    <select tabindex="2" class="form-control shadow-z1" name="SupplierID" id="SupplierID">
                                        <option value="0">Select Supplier</option>          
                                    <?php
                                        $selectSupplier = "SELECT * FROM `master_supplier` WHERE Active='1'";
                                        $ObjselectSupplier = mysqli_query($selectSupplier);
                                        while($RsselectSupplier = mysqli_fetch_array($ObjselectSupplier))
                                        {
                                            if($RsselectInventory['SupplierID']==$RsselectSupplier['SupplierID'])
                                            {
                                                $selected = 'selected="selected"';                                                
                                            }
                                            else
                                            {
                                                $selected = '';
                                            }
                                            ?>
                                                <option <?php echo $selected;?> value="<?php echo $RsselectSupplier['SupplierID'];?>"><?php echo $RsselectSupplier['CompanyName'];?></option>          
                                            <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div id="divSupplierInfo">
                                </div>
                            </div>
                            <div class="InventoryRight">
                                <div class="text-left Heading ng-scope">Products Details</div>
                                <div>
                                    <div class="TypeRadio">
                                        <div class="radio c-radio" style="float:left;">
                                            <label>
                                                <input type="radio" value="cycle" name="Type" id="CycleTypeRadio" checked="checked">
                                                <span class="fa fa-circle"></span>Cycle
                                            </label>
                                        </div>
                                        <div class="radio c-radio" style="float:left;padding-top: 14px;">
                                            <label>
                                               <input type="radio" value="spare" name="Type" id="SpareTypeRadio">
                                               <span class="fa fa-circle"></span>Spare
                                            </label>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div style="float:left;width:50%;padding-right:2%;">
                                        <div><label class="control-label">Company Name</label></div>
                                        <div>
                                            <select tabindex="3" class="form-control shadow-z1" id="ComapanyName" name="ComapanyName">
                                                <option value="0">Select Company Name</option>
                                                <?php
                                                    $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName ASC";
                                                    $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                    while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                    {
                                                        ?>
                                                            <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                                        <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="float:left;width:50%;padding-left:2%;">
                                        <div class="CycleType">
                                            <div><label class="control-label">Modal Name</label></div>
                                            <div>
                                                <select tabindex="4" class="form-control shadow-z1" id="ModalName" name="ModalName">
                                                    <option value="0">Select Modal Name</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="SpareType" style="display:none;">
                                            <div><label class="control-label">Item Name</label></div>
                                            <div>
                                                <select tabindex="4" class="form-control shadow-z1" id="ItemName" name="ItemName">
                                                    <option value="0">Select Item Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="CycleType">
                                    <div style="float:left;width:50%;padding-right:2%;">
                                        <div><label class="control-label">Color</label></div>
                                        <div>
                                            <select tabindex="5" class="form-control shadow-z1" id="Color" name="Color">
                                                <option value="0">Select Color</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="float:left;width:50%;padding-left:2%;">
                                        <div><label class="control-label">Size</label></div>
                                        <div>
                                            <select tabindex="6" class="form-control shadow-z1" id="Size" name="Size">
                                                <option value="0">Select Size</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>      
                                <div>&nbsp;</div>
                                <div class="panel panel-default" id="PricingBox">
                                    <div class="panel-heading">
                                        <div class="text-left Heading ng-scope">Supplier Pricing Details</div>
                                    </div>
                                    <div style="clear:both;"></div>
                                    <div class="panel-body">
                                        <div class="ng-isolate-scope">
                                        <div class="tab-content">
                                            <div class="tab-pane ng-scope active MainTabContent" id="SupplierPriceTab">
                                                <div class="OrgPriceChildBox">
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div><label class="control-label">Basic Price</label></div>
                                                        <div>
                                                            <input tabindex="7" type="text" class="OrgBasicPrice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="float:left;width:50%;padding-left:2%;">
                                                        <div style="float:left;width:48%;padding-left:2%;">
                                                            <div><label class="control-label">Quantity</label></div>
                                                            <div>
                                                                <input type="text" tabindex="8" id="CycleQuantity" class="Quantity PriceChild form-control">
                                                            </div>                                                        
                                                        </div>                                                        
                                                        <div style="float:right;width:48%;padding-left:2%;">
                                                            <div><label class="control-label">Total</label></div>
                                                            <div>
                                                                <input type="text" tabindex="8" readonly="readonly" id="TotalSupplierPrice" class="TotalSupplierPrice PriceChild form-control">
                                                            </div>                                                        
                                                        </div>                                                        
                                                        <div style="clear:both;"></div>                                                            
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div class="divTaxBox">
                                                            <label class="control-label">Tax Price</label>
                                                            <?php
                                                                $selectTax = " SELECT * FROM `master_tax` WHERE Active='1'";
                                                                $ObjselectTax = mysqli_query($selectTax);
                                                                if(mysqli_num_rows($ObjselectTax)>0)
                                                                {
                                                                    $TotalTax = 0;
                                                                    while($RsselectTax = mysqli_fetch_array($ObjselectTax))
                                                                    {                                                                                            
                                                                        $TotalTax = $TotalTax + floatval($RsselectTax['TaxPer']);
                                                                        ?>
                                                                            &nbsp;&nbsp;&nbsp;<input type="hidden" value="<?php echo $TotalTax;?>">
                                                                            <span><input tabindex="9" rel="<?php echo $RsselectTax['TaxPer'];?>" class="PriceChild TaxBoxCheckBox" type="checkbox" value="<?php echo $RsselectTax['TaxID'];?>"></span>
                                                                            <span><?php echo $RsselectTax['TaxName'];?></span>
                                                                        <?php
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                        <div>
                                                            <input type="text" readonly="readonly" class="TaxPrice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="float:left;width:50%;padding-left:2%;">
                                                        <div><label class="control-label">Discount Price (Rs)</label></div>
                                                        <div>
                                                            <input tabindex="11" type="text" class="OrgDiscount PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div><label class="control-label">scheme(Rs)</label></div>
                                                        <div>
                                                            <input tabindex="12" type="text" class="OrgScheme PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="float:left;width:50%;padding-left:2%;">
                                                        <div><label class="control-label">Total Landing Price</label></div>
                                                        <div>
                                                            <input type="text" readonly="readonly" class="OrgTotalPriice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                            <!--<div class="tab-pane ng-scope MainTabContentCycle" id="CycleZonePrice">
                                                <div class="CycleZonePriceChildBox">
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div><label class="control-label">Basic Price</label></div>
                                                        <div>
                                                            <input type="text" readonly="readonly" id="CycleZoneBasicPrice" class="CycleZoneBasicPrice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="float:left;width:50%;padding-left:2%;">
                                                        <div style="float:left;width:23%;padding-right:1%;">
                                                            <div><label class="control-label">Profit (%)</label></div>
                                                            <div>
                                                                <input type="text" tabindex="15" class="ProfitPersontage PriceChild form-control" style="width:100%;">
                                                            </div>
                                                        </div>
                                                        <div style="float:left;width:38%;padding-right:1%;padding-left:1%;">
                                                            <div><label class="control-label">Profit (Rs)</label></div>
                                                            <div>
                                                                <input type="text" tabindex="15" class="ProfitRs PriceChild form-control" style="width:100%;">
                                                            </div>                                                        
                                                            
                                                        </div>
                                                        <div style="float:left;width:38%;padding-left:1%;">
                                                            <div><label class="control-label">Total</label></div>
                                                            <div>
                                                                <input type="text" tabindex="15" readonly="readonly" class="ProfitTotal PriceChild form-control" style="width:100%;">
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div>
                                                            <div><label class="control-label">Round Price (Rs)</label></div>
                                                            <div>
                                                                <input type="text" tabindex="16" class="RoundPrice PriceChild form-control" style="width:100%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="float:left;width:50%;padding-left:2%;">
                                                        <div class="divTaxBoxCycle">
                                                            <label class="control-label">Tax Price</label>
                                                            <?php
                                                                $selectTax = " SELECT * FROM `master_tax` WHERE Active='1'";
                                                                $ObjselectTax = mysqli_query($selectTax);
                                                                if(mysqli_num_rows($ObjselectTax)>0)
                                                                {
                                                                    $TotalTax = 0;
                                                                    while($RsselectTax = mysqli_fetch_array($ObjselectTax))
                                                                    {                                                                                            
                                                                        $TotalTax = $TotalTax + floatval($RsselectTax['TaxPer']);
                                                                        ?>
                                                                            &nbsp;&nbsp;&nbsp;<input type="hidden" value="<?php echo $TotalTax;?>">
                                                                            <span><input tabindex="14" rel="<?php echo $RsselectTax['TaxID'];?>" class="PriceChild CycleZoneTaxBoxCheckBox" type="checkbox" value="<?php echo $RsselectTax['TaxPer'];?>"></span>
                                                                            <span><?php echo $RsselectTax['TaxName'];?></span>
                                                                        <?php
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                        <div>
                                                            <input type="text" readonly="readonly" class="CycleZoneTaxPrice PriceChild form-control" style="width:100%;">
                                                        </div>                                                        
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="float:right;width:48%;">
                                                        <div><label class="control-label">Total Cycle Zone Price</label></div>
                                                        <div>
                                                            <input type="text" readonly="readonly" class="CycleTotalPriice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                </div>      
                                <div style="text-align: center;padding-top:10px">
                                    <button tabindex="18" class="mr btn btn-labeled btn-success text-center" type="button" id="BtnSubmitPrice">
                                        <span class="btn-label">
                                            <i class="fa fa-check"></i>
                                        </span>Add
                                    </button>
                                </div>    
                            </div>
                            <div style="clear:both;"></div>
                            </div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>
                                <table class="table table-bordered table-hover bg-white">
                                    <thead>
                                        <tr class="active">
                                            <th class="text-center"></th>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Company Name</th>
                                            <th class="text-center">Modal/Item Name</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Size</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Supplier Price</th>
                                            <th class="text-right">Total Price</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        if($_REQUEST['action']=="edit")
                                        {
                                            $selectChildInventory = "SELECT master_company.CompanyName,master_inventory_child.CompanyName as CompanyID,master_inventory_child.ModalName,master_inventory_child.InventoryChildID,master_inventory_child.OrgBasicPrice,master_inventory_child.OrgTaxPrice,master_inventory_child.OrgDiscountPrice,master_inventory_child.OrgSchemePrice,master_inventory_child.OrgTaxApplied,master_inventory_child.OrgQuantity,master_inventory_child.Quantity,master_inventory_child.Type,master_inventory_child.ItemName,master_inventory_child.Color,master_inventory_child.Size,master_inventory_child.Quantity from master_inventory_child,master_company WHERE master_inventory_child.CompanyName = master_company.CompanyID AND master_inventory_child.InventoryID='".$RsselectInventory['InventoryID']."'";
                                            //echo $selectChildInventory;
                                            $ObjselectChildInventory = mysqli_query($selectChildInventory);
                                            $NumselectChildInventory = mysqli_num_rows($ObjselectChildInventory);
                                            if($NumselectChildInventory>0)
                                            {
                                                $rel = $NumselectChildInventory;
                                            }
                                            else
                                            {
                                                $rel = 0;
                                            }
                                        }
                                        else
                                        {
                                            $rel = 0;
                                        }
                                    ?>
                                    <tbody id="Addrow" rel="<?php echo $rel;?>">
                                    <?php
                                        if($_REQUEST['action']=="edit")
                                        {
                                            $count = 0;
                                            $FinalTotalInventoryPrice = 0;
                                            while($RsselectChildInventory = mysqli_fetch_array($ObjselectChildInventory))
                                            {
                                                $count++;
                                                ?>
                                                    <tr id="Row<?php echo $RsselectChildInventory['InventoryChildID'];?>" rel="<?php echo $count;?>">
                                                        <td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">
                                                            <div style="width:102px;">
                                                                <div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;">
                                                                    <em class="fa fa-pencil"></em>
                                                                </div>
                                                                <div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;">
                                                                    <em class="fa fa-trash"></em>
                                                                </div>
                                                                <div style="clear:both;"></div>
                                                            </div>
                                                        </td>
                                                        <td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><?php echo $count;?></td>
                                                        <td class="text-center"><?php echo $RsselectChildInventory['CompanyName'];?></td>
                                                        <td class="text-center">
                                                            <?php 
                                                                if($RsselectChildInventory['Type']=="cycle")
                                                                {
                                                                    echo $RsselectChildInventory['ModalName'];
                                                                }
                                                                else 
                                                                { 
                                                                    echo $RsselectChildInventory['ItemName'];
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php 
                                                                if($RsselectChildInventory['Type']=="cycle")
                                                                {
                                                                    echo $RsselectChildInventory['Color'];    
                                                                }
                                                                else
                                                                {
                                                                    echo "-";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php 
                                                                if($RsselectChildInventory['Type']=="cycle")
                                                                {
                                                                    echo $RsselectChildInventory['Size'];    
                                                                }
                                                                else
                                                                {
                                                                    echo "-";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="text-right"><?php echo $RsselectChildInventory['OrgQuantity'];?></td>
                                                        <td class="text-right"><?php echo number_format((((floatval($RsselectChildInventory['OrgBasicPrice']) * floatval($RsselectChildInventory['OrgQuantity'])) + floatval($RsselectChildInventory['OrgTaxPrice']) - floatval($RsselectChildInventory['OrgDiscountPrice']) - floatval($RsselectChildInventory['OrgSchemePrice'])) / floatval($RsselectChildInventory['OrgQuantity'])),2,".","");;?></td>
                                                        <td class="text-right">
                                                            <?php 
                                                                
                                                                $TotalInventoryPrice = (((floatval($RsselectChildInventory['OrgBasicPrice']) * floatval($RsselectChildInventory['OrgQuantity'])) + floatval($RsselectChildInventory['OrgTaxPrice']) - floatval($RsselectChildInventory['OrgDiscountPrice']) - floatval($RsselectChildInventory['OrgSchemePrice'])));
                                                                $FinalTotalInventoryPrice = floatval($FinalTotalInventoryPrice) + floatval($TotalInventoryPrice);
                                                                echo number_format(($TotalInventoryPrice),2,".","");
                                                            ?>
                                                        </td>
                                                        <input type="hidden" class="HidComapanyName" name="EditComapanyName[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['CompanyID'];?>" >
                                                        <input type="hidden" class="HidModalName" name="EditModalName[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['ModalName'];?>" >
                                                        <input type="hidden" class="HidItemName" name="EditItemName[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['ItemName'];?>" >
                                                        <input type="hidden" class="HidColor" name="EditColor[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['Color'];?>" >
                                                        <input type="hidden" class="HidSize" name="EditSize[<?php echo $count;?>]" value='<?php echo $RsselectChildInventory['Size'];?>'>
                                                        <input type="hidden" class="HidQuantity" name="EditQuantity[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['Quantity'];?>" >
                                                        <input type="hidden" class="HidOrgQuantity" name="EditOrgQuantity[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['OrgQuantity'];?>" >
                                                        <input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['OrgBasicPrice'];?>" >
                                                        <input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['OrgTaxPrice'];?>" >
                                                        <input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['OrgTaxApplied'];?>" >
                                                        <input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['OrgDiscountPrice'];?>" >
                                                        <input type="hidden" class="HidOrgScheme" name="EditOrgScheme[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['OrgSchemePrice'];?>" >
                                                        <input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice[<?php echo $count;?>]" value="<?php echo (floatval($RsselectChildInventory['OrgBasicPrice']) * floatval($RsselectChildInventory['Quantity'])) + floatval($RsselectChildInventory['OrgTaxPrice']) - floatval($RsselectChildInventory['OrgDiscountPrice']) - floatval($RsselectChildInventory['OrgSchemePrice']);?>" >
                                                        <input type="hidden" class="HidType" name="EditType[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['Type'];?>" >
                                                        <input type="hidden" class="HidInventoryChildID" name="EditHidInventoryChildID[<?php echo $count;?>]" value="<?php echo $RsselectChildInventory['InventoryChildID'];?>" >
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    ?>                                                     
                                    </tbody>
                                </table>
                            </div>
                            <div>&nbsp;</div>
                            
                            <div align="right">
                                <div style="float:right;">
                                    <?php
                                        if($RsselectInventory['TransportationPrice']!="")
                                        {
                                            $TransportationPrice = $RsselectInventory['TransportationPrice'];
                                        }
                                        else
                                        {
                                            $TransportationPrice = 0;
                                        }
                                        $FinalTotalInventoryPrice = floatval($FinalTotalInventoryPrice) + floatval($TransportationPrice);
                                    ?>
                                    <input tabindex="10" type="text" name="TransportationPrice" id="TransportationPrice" value="<?php echo number_format(($TransportationPrice),2,".","");?>" class="form-control text-right input-sm">
                                </div>
                                <div style="float:right;padding-right:10px;padding-top:5px;">Transportation Price</div>
                                <div style="clear:both;"></div>
                            </div>
                            <div>&nbsp;</div>
                            <div align="right">
                                <div style="float:right;">
                                    <input type="hidden" name="HidLastTotalPrice" id="HidLastTotalPrice">
                                    <input type="text" readonly="readonly" class="form-control text-right input-sm" name="LastTotalPrice" id="LastTotalPrice" value="<?php echo number_format(($FinalTotalInventoryPrice),2,".","");?>">
                                </div>                     
                                <div style="float:right;padding-right:10px;padding-top:5px;">Total Price</div>
                                <div style="clear:both;"></div>
                            </div>
                            <p class="clearfix">&nbsp;</p>

                            <div class="form-group">
                                <textarea name="Note" cols="40" rows="10" id="note" type="textarea" class="form-control" placeholder="Please add notes (if any)" rows="3" style="margin-top: 10px; height: 100px;"><?php echo $RsselectInventory['Note'];?></textarea>
                            </div>
                            <div class="form-group" style="float:right;">
                                <?php
                                    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                    {
                                        ?>   
                                            <input type="submit" name="submit" value="Update Inventory" id="SubmitAddInventory" class="btn btn-primary btn-large" /> </div>
                                        <?php        
                                    }
                                    else
                                    {
                                        ?>
                                            <input type="submit" name="submit" value="Add Inventory" id="SubmitAddInventory" class="btn btn-primary btn-large" /> </div>
                                        <?php
                                    }
                                ?>  
                                
                            </div>
                        </form>
                        <div style="clear:both;"></div>
                   </div>
   <!-- END panel-->
</div></div></div></section> <!-- ngInclude: 'templates/footer.html' -->
<div class="modal fade" id="DeleteInventoryChildRow" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div modal-transclude="" class="modal-content">
            <div class="modal-header ng-scope">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">x</button>
                <h4 class="modal-title" id="myModalLabel">Alert Message</h4>
            </div>
            <div class="modal-body ng-scope text-center" id="FrameContent">
                Are you sure?
                <input type="hidden" name="RemoveInventoryChildID" id="RemoveInventoryChildID" value="">
            </div>
            <div class="modal-footer ng-scope">
                <button class="btn btn-primary" aria-hidden="true" data-dismiss="modal" id="RemoveInventoryChildOkButton">OK</button>
                <button class="btn btn-warning" aria-hidden="true" data-dismiss="modal" id="RemoveInventoryChildCancelButton">Cancel</button>
            </div>
        </div>
    </div><!-- /.modal-dialog --> 
</div>
<?php
    include("footer.php");
?>

      
<script type="text/javascript">
    $(document).ready(function() {
        $('.TypeRadio input[type="radio"]').click(function(event) {
            if($('.TypeRadio input[type="radio"]:checked').val()=="cycle")
            {
                $('.CycleType').show();
                $('.SpareType').hide();
            }
            else
            {
                $('.CycleType').hide();
                $('.SpareType').show();
            }
        });
        $(".PriceChild").change(function(event) {
            
            if($('#CycleQuantity').val()=="")
            {
                CycleQuantity = 0;                
            }
            else
            {
                CycleQuantity = $('#CycleQuantity').val();
            }
            var TotalSupplierPrice = parseFloat($('.OrgBasicPrice').val()) * parseFloat(CycleQuantity);
            
            $('#TotalSupplierPrice').val(TotalSupplierPrice);
            
            var OrgTotalTaxPrice = 0;
            if($(".OrgBasicPrice").val()!="")
            {
                var OrgTotalTax = 0;
                $('.divTaxBox input[type=checkbox]').each(function(index) {
                    if($(this).is(":checked"))
                    {
                        OrgTotalTax = parseFloat(OrgTotalTax) + parseFloat($(this).attr('rel'));                    
                    }
                });
                OrgTotalTaxPrice = (parseFloat($(".OrgBasicPrice").val()* parseFloat(CycleQuantity)) * parseFloat(OrgTotalTax)) / parseFloat(100);
                $('.TaxPrice').val(OrgTotalTaxPrice);
            }
            var OrgBaasicPrice = $('.OrgBasicPrice').val();
            if(OrgBaasicPrice=="")
            {
                OrgBaasicPrice = 0;
            }
            var OrgTaxPrice = $('.TaxPrice').val();
            if(OrgTaxPrice=="")
            {
                OrgTaxPrice = 0;
            }
            var TotalSupplierPrice = $('.TotalSupplierPrice').val();
            if(TotalSupplierPrice=="")
            {
                TotalSupplierPrice = 0;
            }
            
            var OrgDiscount = $('.OrgDiscount').val();
            if(OrgDiscount=="")
            {
                OrgDiscount = 0;
            }
            var OrgScheme = $('.OrgScheme').val();
            if(OrgScheme=="")
            {
                OrgScheme = 0;
            }
            var CycleQuantity = $('#CycleQuantity').val();
            if(CycleQuantity=="")
            {
                CycleQuantity = 0;
            }
            
            var OrgTotalPrice = parseFloat(TotalSupplierPrice) + parseFloat(OrgTaxPrice) - parseFloat(OrgDiscount) - parseFloat(OrgScheme);
            $('.OrgTotalPriice').val(OrgTotalPrice);
            
            var BasicTotalPrice = parseFloat(OrgTotalPrice) /parseFloat(CycleQuantity);
            BasicTotalPrice = BasicTotalPrice.toFixed(2);
            $('#CycleZoneBasicPrice').val(BasicTotalPrice);
            
            var ProfitRs = $('.ProfitRs').val();
            if(ProfitRs=="")
            {
                ProfitRs = 0;
            }
            var RoundPrice = $('.RoundPrice').val();
            if(RoundPrice=="")
            {
                RoundPrice = 0;
            }
            var ProfitPersontage = $('.ProfitPersontage').val();
            if(ProfitPersontage=="")
            {
                ProfitPersontage = 0;
            }            
            if($(this).hasClass('ProfitPersontage'))
            {
                var FinalTotalProfitbase = (parseFloat(BasicTotalPrice) * parseFloat(ProfitPersontage))/parseFloat(100);
                FinalTotalProfitbase = FinalTotalProfitbase.toFixed(2);
                $('.ProfitRs').val(FinalTotalProfitbase);    
            }
             
            if($(this).hasClass('ProfitRs'))
            {                                                                                                             
                var FinalTotalProfitbase = (parseFloat($('.ProfitRs').val()) * parseFloat(100))/parseFloat(BasicTotalPrice);
                FinalTotalProfitbase = FinalTotalProfitbase.toFixed(2);
                $('.ProfitPersontage').val(FinalTotalProfitbase);    
            }
            
            var ProfitRs = $('.ProfitRs').val();
            if(ProfitRs=="")
            {
                ProfitRs = 0;
            }
            var RoundPrice = $('.RoundPrice').val();
            if(RoundPrice=="")
            {
                RoundPrice = 0;
            }
            var ProfitPersontage = $('.ProfitPersontage').val();
            if(ProfitPersontage=="")
            {
                ProfitPersontage = 0;
            }
            
            var ProfitTotal = parseFloat(BasicTotalPrice) + parseFloat(ProfitRs);
            ProfitTotal = ProfitTotal.toFixed(2);             
            $('.ProfitTotal').val(ProfitTotal);
            
            
            
            var CycleZoneTotalTaxPrice = 0;
            if($(".CycleZoneBasicPrice").val()!="")
            {
                var CycleZoneTotalTax = 0;
                $('.divTaxBoxCycle input[type=checkbox]').each(function(index) {
                    if($(this).is(":checked"))
                    {
                        CycleZoneTotalTax = parseFloat(CycleZoneTotalTax) + parseFloat($(this).val());                    
                    }
                });
                
                if($('.RoundPrice').val()!="" && $('.RoundPrice').val()!="0")
                {
                    CycleZoneTotalTaxPrice = (parseFloat($('.RoundPrice').val()) * parseFloat(CycleZoneTotalTax)) / parseFloat(100);
                }
                else
                {
                    CycleZoneTotalTaxPrice = (parseFloat($('.ProfitTotal').val()) * parseFloat(CycleZoneTotalTax)) / parseFloat(100);
                }
                CycleZoneTotalTaxPrice = CycleZoneTotalTaxPrice.toFixed(2); 
                $('.CycleZoneTaxPrice').val(CycleZoneTotalTaxPrice);    
            }
            
            var CycleZoneBaasicPrice = $('.CycleZoneTaxPrice').val();
            if(CycleZoneBaasicPrice=="")
            {
                CycleZoneBaasicPrice = 0;
            }
            var CycleZoneTaxPrice = $('.CycleZoneTaxPrice').val();
            if(CycleZoneTaxPrice=="")
            {
                CycleZoneTaxPrice = 0;
            }
            
            //alert(CycleZoneTotalTaxPrice);
            if($('.RoundPrice').val()!="")
            {
                var CycleZoneTotalPrice = parseFloat($('.RoundPrice').val()) + parseFloat(CycleZoneTaxPrice);     
            }
            else
            {
                var CycleZoneTotalPrice = parseFloat($('.ProfitTotal').val()) + parseFloat(CycleZoneTaxPrice);                     
            }
            
            CycleZoneTotalPrice = CycleZoneTotalPrice.toFixed(2);
            $('.CycleTotalPriice').val(CycleZoneTotalPrice);
            
            
        });
        $("#TransportationPrice").change(function(event) {
            var TotalPrice = 0;
            $('.HidOrgTotalPrice').each(function(index) {
                TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
            });
            
            var TransportationPrice = $('#TransportationPrice').val();
            if(TransportationPrice=="")
            {
                TransportationPrice = 0;
            }
            
            TotalPrice = parseFloat(TotalPrice) + parseFloat(TransportationPrice);
            TotalPrice = TotalPrice.toFixed(2);
            $('#LastTotalPrice').val(TotalPrice);
        });
        $("#BtnSubmitPrice").click(function(event) {
                        
            var Error = false;
            var Date = $("#Date").val();              
            var SupplierID = $("#SupplierID").val();              
            var ComapanyName = $("#ComapanyName").val();              
            var ModalName = $("#ModalName").val();              
            var Color = $("#Color").val();         
            var Size = $("#Size").val();              
            var CycleQuantity = $("#CycleQuantity").val();              
            var ItemName = $("#ItemName").val();              
            
            
            if(Date=="")
            {
                $("#Date").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#Date').attr('style', 'border:1px solid #ccc !important');
            }
            if(SupplierID=="0")
            {
                $("#SupplierID").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#SupplierID').attr('style', 'border:1px solid #ccc !important');
            }
            if(ComapanyName=="0")
            {
                $("#ComapanyName").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#ComapanyName').attr('style', 'border:1px solid #ccc !important');
            }
            var Type = $('.TypeRadio input[type="radio"]:checked').val();
            if(Type=="cycle")
            {
                if(ModalName=="0")
                {
                    $("#ModalName").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#ModalName').attr('style', 'border:1px solid #ccc !important');
                }                                                                          
                if(Color=="0")
                {
                    $("#Color").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#Color').attr('style', 'border:1px solid #ccc !important');
                }
                if(Size=="0")
                {
                    $("#Size").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#Size').attr('style', 'border:1px solid #ccc !important');
                }
            }
            else
            {
                if(ItemName=="0")
                {
                    $("#ItemName").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#ItemName').attr('style', 'border:1px solid #ccc !important');
                }                
            }
            if(CycleQuantity=="")
            {
                $("#CycleQuantity").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#CycleQuantity').attr('style', 'border:1px solid #ccc !important');
            }
            if(Error) 
            {
                return false;
            }
                if($('.InventoryRight').attr('extra')=="" || $('.InventoryRight').attr('extra')===undefined)
                {
                    var NoRow = $('#Addrow').attr('rel');
                }
                else
                {
                    var NoRow = $('.InventoryRight').attr('extra');                        
                }
                    
                
                var OrgTaxApplied = "";
                if($('.divTaxBox input[type=checkbox]:checked').length>0)
                {
                    $('.divTaxBox input[type=checkbox]').each(function(index) {
                        if($(this).is(":checked"))
                        {
                            OrgTaxApplied = OrgTaxApplied +","+ parseFloat($(this).val());                    
                        }
                    });    
                    OrgTaxApplied = OrgTaxApplied.substring(1, OrgTaxApplied.length); 
                }
                var TaxApplied = "";
                if($('.divTaxBoxCycle input[type=checkbox]:checked').length>0)
                {
                    $('.divTaxBoxCycle input[type=checkbox]').each(function(index) {
                        if($(this).is(":checked"))
                        {
                            TaxApplied = TaxApplied +","+ parseFloat($(this).attr('rel'));                    
                        }
                    });    
                    TaxApplied = TaxApplied.substring(1, TaxApplied.length); 
                }
                
                var CycleZoneFinalPrice  = parseFloat($('.CycleTotalPriice').val());
                CycleZoneFinalPrice = CycleZoneFinalPrice.toFixed(2);
                var OrgFinalPrice  = parseFloat($('.OrgTotalPriice').val())/parseFloat($('#CycleQuantity').val());
                OrgFinalPrice = OrgFinalPrice.toFixed(2);
                
                
                var TotalLandinPrice  = parseFloat($('.OrgTotalPriice').val());
                TotalLandinPrice = TotalLandinPrice.toFixed(2);
                
                var TotolPriceRow = parseFloat(CycleZoneFinalPrice);
                TotolPriceRow = TotolPriceRow.toFixed(2);
                
                
                if($('.InventoryRight').attr('extra')=="" || $('.InventoryRight').attr('extra')===undefined)
                {
                    var SrNo = (parseInt($('#Addrow').attr('rel'))+parseInt(1));    
                }
                else
                {
                    var SrNo = NoRow;    
                }
                
                
                if($('.InventoryRight').attr('extra')=="" || $('.InventoryRight').attr('extra')===undefined)
                {
                    $('#Addrow').attr('rel',parseInt($('#Addrow').attr('rel'))+1);    
                }
                if($('.InventoryRight').attr('extra')=="" || $('.InventoryRight').attr('extra')===undefined)
                {
                    
                    var SizeValue = $('#Size').val();
                    SizeValue = $.trim(SizeValue);
                    if (SizeValue.indexOf('"') >= 0)
                    {
                        var CycleAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ModalName option:selected').text()+'</td><td class="text-center">'+$('#Color option:selected').text()+'</td><td class="text-center">'+$('#Size option:selected').text()+'</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+ (parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="AddComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="AddModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="AddItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="AddColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="AddSize['+NoRow+']" value='+String(SizeValue)+'><input type="hidden" class="HidQuantity" name="AddQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="AddOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="AddOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="AddOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="AddOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="AddOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="AddOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="AddCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="AddProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="AddProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="AddRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="AddSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="AddSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="AddTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="AddType['+NoRow+']" value="'+Type+'" >';
                        var SpareAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ItemName option:selected').text()+'</td><td class="text-center">-</td><td class="text-center">-</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+(parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="AddComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="AddModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="AddItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="AddColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="AddSize['+NoRow+']" value='+String(SizeValue)+'><input type="hidden" class="HidQuantity" name="AddQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="AddOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="AddOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="AddOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="AddOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="AddOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="AddOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="AddCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="AddProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="AddProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="AddRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="AddSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="AddSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="AddTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="AddType['+NoRow+']" value="'+Type+'" >';    
                    }
                    else
                    {
                        var CycleAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ModalName option:selected').text()+'</td><td class="text-center">'+$('#Color option:selected').text()+'</td><td class="text-center">'+$('#Size option:selected').text()+'</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+ (parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="AddComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="AddModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="AddItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="AddColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="AddSize['+NoRow+']" value="'+String(SizeValue)+'"><input type="hidden" class="HidQuantity" name="AddQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="AddOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="AddOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="AddOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="AddOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="AddOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="AddOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="AddCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="AddProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="AddProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="AddRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="AddSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="AddSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="AddTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="AddType['+NoRow+']" value="'+Type+'" >';
                        var SpareAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ItemName option:selected').text()+'</td><td class="text-center">-</td><td class="text-center">-</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+(parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="AddComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="AddModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="AddItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="AddColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="AddSize['+NoRow+']" value="'+String(SizeValue)+'"><input type="hidden" class="HidQuantity" name="AddQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="AddOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="AddOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="AddOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="AddOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="AddOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="AddOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="AddCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="AddProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="AddProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="AddRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="AddSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="AddSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="AddTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="AddType['+NoRow+']" value="'+Type+'" >';
                    }
                    
                    
                    if(Type=="cycle")
                    {
                        $('#Addrow').append('<tr>'+CycleAddrow+'</tr>');    
                    }
                    else
                    {
                        $('#Addrow').append('<tr>'+SpareAddrow+'</tr>');
                    }
                }
                else
                {              
                    var SizeValue = $('#Size').val();
                    if (SizeValue.indexOf('"') >= 0)
                    {
                        var CycleAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ModalName option:selected').text()+'</td><td class="text-center">'+$('#Color option:selected').text()+'</td><td class="text-center">'+$('#Size option:selected').text()+'</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+ (parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="EditComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="EditModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="EditItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="EditColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="EditSize['+NoRow+']" value='+String(SizeValue)+'><input type="hidden" class="HidOrgQuantity" name="EditQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="EditOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="EditCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="EditProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="EditProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="EditRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="EditSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="EditSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="EditTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="EditType['+NoRow+']" value="'+Type+'" >';
                        var SpareAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ItemName option:selected').text()+'</td><td class="text-center">-</td><td class="text-center">-</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+(parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="EditComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="EditModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="EditItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="EditColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="EditSize['+NoRow+']" value='+String(SizeValue)+'><input type="hidden" class="HidOrgQuantity" name="EditQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="EditOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="EditCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="EditProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="EditProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="EditRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="EditSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="EditSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="EditTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="EditType['+NoRow+']" value="'+Type+'" >';    
                    }
                    else
                    {
                        var CycleAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ModalName option:selected').text()+'</td><td class="text-center">'+$('#Color option:selected').text()+'</td><td class="text-center">'+$('#Size option:selected').text()+'</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+ (parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="EditComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="EditModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="EditItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="EditColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="EditSize['+NoRow+']" value="'+String(SizeValue)+'"><input type="hidden" class="HidOrgQuantity" name="EditQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="EditOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="EditCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="EditProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="EditProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="EditRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="EditSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="EditSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="EditTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="EditType['+NoRow+']" value="'+Type+'" >';
                    var SpareAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ItemName option:selected').text()+'</td><td class="text-center">-</td><td class="text-center">-</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+(parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="EditComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="EditModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="EditItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="EditColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="EditSize['+NoRow+']" value="'+String(SizeValue)+'"><input type="hidden" class="HidOrgQuantity" name="EditQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="EditOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="EditCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="EditProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="EditProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="EditRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="EditSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="EditSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="EditTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="EditType['+NoRow+']" value="'+Type+'" >';
                    }
                    
                    
                    var RowIdold = $('.InventoryRight').attr('rel');
                    var RowIdoldOnly = RowIdold.substring(3,RowIdold.length); 
                    $('#'+RowIdold).css('opacity','1');
                    if(Type=="cycle")
                    {
                        $('#'+RowIdold).html(CycleAddrow + '<input type="hidden" class="HidInventoryChildID" name="EditHidInventoryChildID['+NoRow+']" value="'+RowIdoldOnly+'" >');
                    }
                    else
                    {
                        $('#'+RowIdold).html(SpareAddrow + '<input type="hidden" class="HidInventoryChildID" name="EditHidInventoryChildID['+NoRow+']" value="'+RowIdoldOnly+'" >');
                    }                    
                    $('.InventoryRight').attr('extra','');
                    $('.InventoryRight').attr('rel','');
                }
                
                
                var TotalPrice = 0;
                $('.HidOrgTotalPrice').each(function(index) {
                    TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                });
                
                var TransportationPrice = $('#TransportationPrice').val();
                if(TransportationPrice=="")
                {
                    TransportationPrice = 0;
                }
                
                TotalPrice = parseFloat(TotalPrice) + parseFloat(TransportationPrice);
                TotalPrice = TotalPrice.toFixed(2);
                $('#LastTotalPrice').val(TotalPrice);
                
                
                
                $('#ComapanyName').val('0');
                $('#ModalName').val('0');
                $('#Color').val('0');
                $('#Size').val('0');
                $('#CycleQuantity').val('');
                $('.OrgBasicPrice').val('');
                $('.TaxPrice').val('');
                $('.OrgDiscount').val('');
                $('.OrgScheme').val('');
                $('.OrgTotalPriice').val('');
                $('#CycleZoneBasicPrice').val('');
                $('.CycleZoneTaxPrice').val('');
                $('.ProfitRs').val('');
                $('.ProfitPersontage').val('');
                $('.RoundPrice').val('');
                $('.CycleTotalPriice').val('');
                $('#SingalBasicPrice').html('0');
                $('#SingalTaxPrice').html('0');
                $('#SingalDiscountPrice').html('0');
                $('#SingalSchemePrice').html('0');
                $('#SingalTotalPrice').html('0');
                
                                
                
                $('#BtnSubmitPrice').html('<span class="btn-label"><i class="fa fa-check"></i></span>Add');
                return false;    
        });
        $('body').on('click', '.EditInvertory', function() {
            
            $('#Addrow tr').each(function(index) {
                $(this).css('opacity','1');
            });
            $(this).parents('tr').css('opacity','0.5');
            
            $('.InventoryRight').attr('rel',$(this).parents('tr').attr('id'));
            $('.InventoryRight').attr('extra',$(this).parents('tr').attr('rel'));
            var thisobj = $(this);
            if($(this).parents('tr').find('.HidType').val()=="cycle")
            {
                $('#CycleTypeRadio').click();
                $('#CycleTypeRadio').click();
            }
            else
            {
                $('#SpareTypeRadio').click();
                $('#SpareTypeRadio').click();
            }   
            if($(this).parents('tr').find('.HidType').val()=="cycle")
            {
                $('#ComapanyName').val(thisobj.parents('tr').find('.HidComapanyName').val());
                $.ajax({
                    url: 'ajax.php?filter=GetModalNo&CompanyName='+$("#ComapanyName").val(),
                    success: function(html) 
                    {
                        $('#ModalName').html(html);
                        $('#ModalName').val(thisobj.parents('tr').find('.HidModalName').val());
                        $.ajax({
                            url: 'ajax.php?filter=GetColor&ModalName='+$("#ModalName").val()+"&CompanyName="+$("#ComapanyName").val(),
                            success: function(html) 
                            {
                                $('#Color').html(html);        
                                $('#Color').val(thisobj.parents('tr').find('.HidColor').val());
                                $.ajax({
                                    url: 'ajax.php?filter=GetSize&Color='+$('#Color').val()+'&ModalName='+$("#ModalName").val()+"&CompanyName="+$("#ComapanyName").val(),
                                    success: function(html) 
                                    {
                                        //alert(html);
                                        $("#Size").html(html);        
                                        $('#Size').val(thisobj.parents('tr').find('.HidSize').val());
                                        
                                        
                                        $('.OrgBasicPrice').val(thisobj.parents('tr').find('.HidOrgBasicPrice').val())
                                        $('.Quantity').val(thisobj.parents('tr').find('.HidOrgQuantity').val());
                                        $('#TotalSupplierPrice').val(parseFloat(thisobj.parents('tr').find('.HidOrgBasicPrice').val()) * parseFloat(thisobj.parents('tr').find('.HidOrgQuantity').val()));
                                        $('.TaxPrice').val(thisobj.parents('tr').find('.HidOrgTaxPrice').val());
                                        var OrgTaxApplied = thisobj.parents('tr').find('.HidOrgTaxApplied').val();
                                        
                                        var arrOrgTaxApplied = OrgTaxApplied.split(',');
                                        $('.divTaxBox input[type=checkbox]').each(function(index) {
                                            if($.inArray($(this).val(),arrOrgTaxApplied)>-1)
                                            {                         
                                                $(this).attr('checked','checked');                    
                                            }
                                            else
                                            {
                                                $(this).attr('checked',false);                                                                    
                                            }
                                        });
                                        $('.OrgDiscount').val(thisobj.parents('tr').find('.HidOrgDiscount').val());
                                        $('.OrgScheme').val(thisobj.parents('tr').find('.HidOrgScheme').val());
                                        var OrgTotalPriice = (parseFloat($('.OrgBasicPrice').val()) * parseFloat($('.Quantity').val())) + parseFloat($('.TaxPrice').val()) - parseFloat($('.OrgDiscount').val()) - parseFloat($('.OrgScheme').val());
                                        $('.OrgTotalPriice').val(OrgTotalPriice);
                                    }
                                });      
                            }
                        });      
                    }
                });          
                $('#ModalName').val(thisobj.parents('tr').find('.HidModalName').val());
            }
            if($(this).parents('tr').find('.HidType').val()=="spare")
            {
                $('#ComapanyName').val(thisobj.parents('tr').find('.HidComapanyName').val());
                $.ajax({
                    url: 'ajax.php?filter=GetItemName&CompanyName='+$("#ComapanyName").val(),
                    success: function(html) 
                    {
                        $('#ItemName').html(html);        
                        $('#ItemName').val(thisobj.parents('tr').find('.HidItemName').val());
                        
                        $('.OrgBasicPrice').val(thisobj.parents('tr').find('.HidOrgBasicPrice').val())
                        $('.Quantity').val(thisobj.parents('tr').find('.HidOrgQuantity').val());
                        $('#TotalSupplierPrice').val(parseFloat(thisobj.parents('tr').find('.HidOrgBasicPrice').val()) * parseFloat(thisobj.parents('tr').find('.HidOrgQuantity').val()));
                        $('.TaxPrice').val(thisobj.parents('tr').find('.HidOrgTaxPrice').val());
                        var OrgTaxApplied = thisobj.parents('tr').find('.HidOrgTaxApplied').val();
                        var arrOrgTaxApplied = OrgTaxApplied.split(',');
                        $('.divTaxBox input[type=checkbox]').each(function(index) {
                                
                            if($.inArray($(this).val(),arrOrgTaxApplied)>-1)
                            {        
                                $(this).attr('checked','checked');                    
                            }
                            else
                            {
                                $(this).attr('checked',false);                                                                    
                            }                        
                        });
                        $('.OrgDiscount').val(thisobj.parents('tr').find('.HidOrgDiscount').val());
                        $('.OrgScheme').val(thisobj.parents('tr').find('.HidOrgScheme').val());
                        var OrgTotalPriice = (parseFloat($('.OrgBasicPrice').val()) * parseFloat($('.Quantity').val())) + parseFloat($('.TaxPrice').val()) - parseFloat($('.OrgDiscount').val()) - parseFloat($('.OrgScheme').val());
                        $('.OrgTotalPriice').val(OrgTotalPriice);
                    }
                });                          
                
            }
            $('#BtnSubmitPrice').html('<span class="btn-label"><i class="fa fa-check"></i></span>Update');
        });
        $('body').on('click', '#RemoveInventoryChildCancelButton', function() {
            $('#RemoveInventoryChildID').val('');
            $('#DeleteInventoryChildRow').modal('hide');            
        });
        $('body').on('click', '#RemoveInventoryChildOkButton', function() {
            var ChildID = $('#RemoveInventoryChildID').val();
            var RowChildID = "Row"+ChildID;
            
            $.ajax({
                url: 'ajax.php?filter=RemoveInventoryChildRow&InventoryChildID='+ChildID,
                success: function(html) 
                {
                    $('#'+RowChildID).remove();
                    var TotalPrice = 0;
                    $('.HidOrgTotalPrice').each(function(index) {
                        TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                    });
                    
                    var TransportationPrice = $('#TransportationPrice').val();
                    if(TransportationPrice=="")
                    {
                        TransportationPrice = 0;
                    }
                    
                    TotalPrice = parseFloat(TotalPrice) + parseFloat(TransportationPrice);
                    TotalPrice = TotalPrice.toFixed(2);
                    $('#LastTotalPrice').val(TotalPrice);                    
                }
            });
        });
        $('body').on('click', '.RemoveInvertory', function() {
            var rowID = $(this).parents('tr').attr('id');
            if(rowID===undefined)
            {
                if (confirm("Are you sure?")) 
                {
                    $(this).parents('tr').remove();                                        
                    var TotalPrice = 0;
                    $('.HidOrgTotalPrice').each(function(index) {
                        TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                    });
                    
                    var TransportationPrice = $('#TransportationPrice').val();
                    if(TransportationPrice=="")
                    {
                        TransportationPrice = 0;
                    }
                    
                    TotalPrice = parseFloat(TotalPrice) + parseFloat(TransportationPrice);
                    TotalPrice = TotalPrice.toFixed(2);
                    $('#LastTotalPrice').val(TotalPrice);
                }                
                else
                {
                    return false;
                }
            }
            else
            {
                $('#DeleteInventoryChildRow').modal('show');
                var ChildID = rowID.substring(3, rowID.length); 
                $('#RemoveInventoryChildID').val(ChildID);    
            }
            
        });
        $(".TabMenu").click(function(event) {
            event.preventDefault();
            $(".nav-tabs").find('li').each(function( index ) {
                $(this).removeClass('active');
            });
            $(".tab-pane").each(function( index ) {
                $(this).removeClass('active');
            });
            $(this).parents('li').addClass('active');            
            var DivID = $(this).attr('href');    
            DivID = DivID.substring(1, DivID.length); 
            $('#'+ DivID).addClass('active');
        });
        $("#ComapanyName").change(function() {                    
            var Type = $('.TypeRadio input[type="radio"]:checked').val();
            if(Type=="cycle")
            {
                $.ajax({
                    url: 'ajax.php?filter=GetModalNo&CompanyName='+$("#ComapanyName").val(),
                    success: function(html) 
                    {                        
                        $('#ModalName').html(html);        
                    }
                });          
            }
            else
            {
                $.ajax({
                    url: 'ajax.php?filter=GetItemName&CompanyName='+$("#ComapanyName").val(),
                    success: function(html) 
                    {                     
                        $('#ItemName').html(html);        
                    }
                });                          
            }
            
        });
        $("#ModalName").change(function() {
            $.ajax({
                url: 'ajax.php?filter=GetColor&ModalName='+$("#ModalName").val()+"&CompanyName="+$("#ComapanyName").val(),
                success: function(html) 
                {                     
                    $('#Color').html(html);        
                }
            });      
        });
        $("#Color").change(function() {
            $.ajax({
                url: 'ajax.php?filter=GetSize&Color='+$('#Color').val()+'&ModalName='+$("#ModalName").val()+"&CompanyName="+$("#ComapanyName").val(),
                success: function(html) 
                {                     
                    $("#Size").html(html);        
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
        <?php 
            if($_REQUEST['action']=="edit")
            {
                ?>
                    if($('#SupplierID').val()>0)
                    {
                        $.ajax({
                            url: 'ajax.php?filter=GetSupplierInfo&SupplierID='+$('#SupplierID').val(),
                            success: function(html) 
                            {
                                $('#divSupplierInfo').html(html);                    
                            }
                        }); 
                    }
                <?php
            }
        ?>
        $('#SupplierID').change(function() {
            if($(this).val()>0)
            {
                $.ajax({
                    url: 'ajax.php?filter=GetSupplierInfo&SupplierID='+$(this).val(),
                    success: function(html) 
                    {
                        $('#divSupplierInfo').html(html);                    
                    }
                }); 
            }           
        });
        $('#FrmPurchaseOrder').submit(function() {
            var Error = false;
            var Date = $("#Date").val();              
            var SupplierID = $("#SupplierID").val();              
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
</body></html>