<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Merchant Invoice";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
//        print_r($_POST);
//        exit;

        if($_REQUEST['MerchantID']=="new")
        {
            $InsertMerchant = "INSERT INTO `master_merchant` (
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
                                                            `BillingPinCode` ,
                                                            `BillingState` ,
                                                            `ShippingPinCode` ,
                                                            `ShippingState` ,
                                                            `ShippingCity` ,
                                                            `AdditionalDetail`,
                                                            `AccountNumber`,
                                                            `AccountName`,
                                                            `BankName`,
                                                            `BankBranch`,
                                                            `BankCity`,
                                                            `IFSCCode`
                                                            )
                                                            VALUES (
                                                                    '".$_POST['FirstName']."', 
                                                                    '".$_POST['MiddelName']."', 
                                                                    '".$_POST['LastName']."', 
                                                                    '".$BirthDate."', 
                                                                    '".$_POST['Comapany']."', 
                                                                    '".$_POST['Email']."', 
                                                                    '".$_POST['HomeNumber']."', 
                                                                    '".$_POST['OfficeNumber']."', 
                                                                    '".$_POST['MobileNumber']."', 
                                                                    '".$_POST['Website']."', 
                                                                    '".$_POST['BillingAddress']."', 
                                                                    '".$_POST['ShippingAddress']."', 
                                                                    '".$_POST['BillingCity']."', 
                                                                    '".$_POST['BillingPinCode']."', 
                                                                    '".$_POST['BillingState']."', 
                                                                    '".$_POST['ShippingPinCode']."', 
                                                                    '".$_POST['ShippingState']."', 
                                                                    '".$_POST['ShippingCity']."', 
                                                                    '".$_POST['AdditionalDetail']."',
                                                                    '".$_POST['AccountNumber']."',
                                                                    '".$_POST['AccountName']."',
                                                                    '".$_POST['BankName']."',
                                                                    '".$_POST['BankBranch']."',
                                                                    '".$_POST['BankCity']."',
                                                                    '".$_POST['IFSCCode']."'
                                                                    );";
            //echo $InsertCustomer;
            mysqli_query($InsertMerchant);
            $MerchantID = mysqli_insert_id();
        }
        else
        {
            $MerchantID = $_POST['MerchantID'];
        }
        
        $Date = explode("-",$_POST['Date']);
        $Date = $Date[2]."-".$Date[1]."-".$Date[0];
        if($_REQUEST['action']=="add")
        {   
            $selectInvoiceNo = "SELECT MAX(InvoiceNo) as InvoiceNo from master_invoice WHERE Type='merchant'";
            $ObjselectInvoiceNo = mysqli_query($selectInvoiceNo);
            if(mysqli_num_rows($ObjselectInvoiceNo)>0)
            {
                $RsselectInvoiceNo = mysqli_fetch_array($ObjselectInvoiceNo);    
                $InvoiceNo = intval($RsselectInvoiceNo['InvoiceNo']) + intval(1);
            }
            else
            {
                $InvoiceNo = 1;
            }
            $TinNumberBox = 0;
            
            $InsertInvoice = "INSERT INTO `master_invoice` (
                                                                `InvoiceNo` ,
                                                                `Date` ,
                                                                `Type` ,
                                                                `IsTinNumber` ,
                                                                `CustomerID` ,
                                                                `PaymentStatus` ,
                                                                `PaymentMethod` ,
                                                                `Shipping` ,
                                                                `Discount` ,
                                                                `TotalPrice` ,
                                                                `Note` )
                                                                VALUES (
                                                                '".$InvoiceNo."', 
                                                                '".$Date."', 
                                                                'merchant', 
                                                                '".$TinNumberBox."', 
                                                                '".$MerchantID."', 
                                                                '".$_POST['PaymentStatus']."', 
                                                                '".$_POST['PaymentMethod']."', 
                                                                '".$_POST['Shipping']."', 
                                                                '".$_POST['Discount']."', 
                                                                '".$_POST['LastTotalPrice']."', 
                                                                '".$_POST['Note']."'
                                                                );";
            //echo $InsertInvoice;
            mysqli_query($InsertInvoice);
            $InvoiceID = mysqli_insert_id();
                    
            foreach($_POST['ComapanyName'] as $k=>$v)
            {
                if($_POST['TotalPrice'][$k]>0)
                {
                    if($_POST['hidType'][$k]=="cycle")
                    {
                        $InsertInvoiceChild = "INSERT INTO `master_invoice_child` (
                                                                                    `InvoiceID` ,
                                                                                    `Type` ,
                                                                                    `CompanyID` ,
                                                                                    `ModelNumber` ,
                                                                                    `Color` ,
                                                                                    `Size` ,
                                                                                    `Quantity` ,
                                                                                    `Price` ,
                                                                                    `TotalPrice`)
                                                                                    VALUES (
                                                                                            '".$InvoiceID."', 
                                                                                            '".$_POST['hidType'][$k]."', 
                                                                                            '".$_POST['ComapanyName'][$k]."', 
                                                                                            '".$_POST['ModalName'][$k]."', 
                                                                                            '".$_POST['Color'][$k]."', 
                                                                                            '".mysqli_real_escape_string($_POST['Size'][$k])."', 
                                                                                            '".$_POST['Quantity'][$k]."', 
                                                                                            '".$_POST['Price'][$k]."', 
                                                                                            '".$_POST['TotalPrice'][$k]."'
                                                                                            );";
                        mysqli_query($InsertInvoiceChild);
                        $InvoiceChildID = mysqli_insert_id();
                        
                        $SelectUniqProduct = "SELECT * from master_inventory_child WHERE Type = 'cycle' AND Size = '".$_POST['Size'][$k]."' AND Color='".$_POST['Color'][$k]."' AND ModalName = '".$_POST['ModalName'][$k]."' AND CompanyName = '".$_POST['ComapanyName'][$k]."'";
                        $ObjSelectUniqProduct = mysqli_query($SelectUniqProduct);
                        $RsSelectUniqProduct = mysqli_fetch_array($ObjSelectUniqProduct);
                        
                    }
                    if($_POST['hidType'][$k]=="spare")
                    {
                        $InsertInvoiceChild = "INSERT INTO `master_invoice_child` (
                                                                                    `InvoiceID` ,
                                                                                    `Type` ,
                                                                                    `CompanyID` ,
                                                                                    `ItemName` ,
                                                                                    `Quantity` ,
                                                                                    `Price` ,
                                                                                    `TotalPrice`)
                                                                                    VALUES (
                                                                                            '".$InvoiceID."', 
                                                                                            '".$_POST['hidType'][$k]."', 
                                                                                            '".$_POST['ComapanyName'][$k]."', 
                                                                                            '".$_POST['ItemName'][$k]."', 
                                                                                            '".$_POST['Quantity'][$k]."', 
                                                                                            '".$_POST['Price'][$k]."', 
                                                                                            '".$_POST['TotalPrice'][$k]."'
                                                                                            );";
                        mysqli_query($InsertInvoiceChild);
                        $InvoiceChildID = mysqli_insert_id();                        
                        
                        $SelectUniqProduct = "SELECT * from master_inventory_child WHERE Type = 'spare' AND ItemName = '".$_POST['ItemName'][$k]."' AND CompanyName = '".$_POST['ComapanyName'][$k]."'";
                        $ObjSelectUniqProduct = mysqli_query($SelectUniqProduct);
                        $RsSelectUniqProduct = mysqli_fetch_array($ObjSelectUniqProduct);
                    }
                    
                    $quantity = intval($RsSelectUniqProduct['Quantity']) - intval($_POST['Quantity'][$k]);
                    $UpdateQuanity = "UPDATE `master_inventory_child` SET `Quantity` = '".$quantity."' WHERE `InventoryChildID` ='".$RsSelectUniqProduct['InventoryChildID']."';";
                    mysqli_query($UpdateQuanity);
                }
            }
            $Msg = "Invoice Added Successfully";
            header("location:merchantviewinvoice.php?id=".$InvoiceID);
        }
        else
        {          
                       
            $TinNumberBox = 0;
            $UpdateInvoice = "UPDATE `master_invoice` SET `Date` = '".$Date."',
                                                            `CustomerID` = '".$MerchantID."',
                                                            `IsTinNumber` = '".$TinNumberBox."',
                                                            `PaymentStatus` = '".$_POST['PaymentStatus']."',
                                                            `PaymentMethod` = '".$_POST['PaymentMethod']."',
                                                            `Shipping` = '".$_POST['Shipping']."',
                                                            `Discount` = '".$_POST['Discount']."',
                                                            `TotalPrice` = '".$_POST['LastTotalPrice']."',
                                                            `Note` = '".$_POST['Note']."' WHERE `InvoiceID` ='".$_REQUEST['id']."';";
            mysqli_query($UpdateInvoice);
            if(count($_REQUEST['ComapanyName'])>0)
            {
                foreach($_REQUEST['ComapanyName'] as $k=>$v)
                {
                    if($_REQUEST['hidType'][$k]=="cycle")
                    {
                        $UpdateComapny = "UPDATE `master_invoice_child` SET 
                                                                        `CompanyID` = '".$_REQUEST['ComapanyName'][$k]."',
                                                                        `ModelNumber` = '".$_REQUEST['ModalName'][$k]."',
                                                                        `Color` = '".$_REQUEST['Color'][$k]."',
                                                                        `Size` = '".$_REQUEST['Size'][$k]."',
                                                                        `Quantity` = '".$_REQUEST['Quantity'][$k]."',
                                                                        `Price` = '".$_REQUEST['Price'][$k]."',
                                                                        `TotalPrice` = '".$_REQUEST['TotalPrice'][$k]."'
                                                                        WHERE `InvoiceChildID` ='".$k."';";
                    }
                    else
                    {
                        $UpdateComapny = "UPDATE `master_invoice_child` SET 
                                                                        `CompanyID` = '".$_REQUEST['ComapanyName'][$k]."',
                                                                        `ItemName` = '".$_REQUEST['ItemName'][$k]."',
                                                                        `Quantity` = '".$_REQUEST['Quantity'][$k]."',
                                                                        `Price` = '".$_REQUEST['Price'][$k]."',
                                                                        `TotalPrice` = '".$_REQUEST['TotalPrice'][$k]."'
                                                                        WHERE `InvoiceChildID` ='".$k."';";                    
                    }
                    mysqli_query($UpdateComapny);
                    
                }
            }
            
            if(count($_REQUEST['AddComapanyName'])>0)
            {
                foreach($_REQUEST['AddComapanyName'] as $k=>$v)
                {
                    
                if($_POST['AddhidType'][$k]=="cycle")
                {
                    $InsertInvoiceChild = "INSERT INTO `master_invoice_child` (
                                                                                    `InvoiceID` ,
                                                                                    `Type` ,
                                                                                    `CompanyID` ,
                                                                                    `ModelNumber` ,
                                                                                    `Color` ,
                                                                                    `Size` ,
                                                                                    `Quantity` ,
                                                                                    `Price` ,
                                                                                    `TotalPrice`)
                                                                                    VALUES (
                                                                                            '".$_REQUEST['id']."', 
                                                                                            '".$_POST['AddhidType'][$k]."', 
                                                                                            '".$_POST['AddComapanyName'][$k]."', 
                                                                                            '".$_POST['AddModalName'][$k]."', 
                                                                                            '".$_POST['AddColor'][$k]."', 
                                                                                            '".mysqli_real_escape_string($_POST['AddSize'][$k])."', 
                                                                                            '".$_POST['AddQuantity'][$k]."', 
                                                                                            '".$_POST['AddPrice'][$k]."', 
                                                                                            '".$_POST['AddTotalPrice'][$k]."'
                                                                                            );";
                    mysqli_query($InsertInvoiceChild);
                    $InvoiceChildID = mysqli_insert_id();
                    
                    $SelectUniqProduct = "SELECT * from master_inventory_child WHERE Type = 'cycle' AND Size = '".$_POST['AddSize'][$k]."' AND Color='".$_POST['AddColor'][$k]."' AND ModalName = '".$_POST['AddModalName'][$k]."' AND CompanyName = '".$_POST['AddComapanyName'][$k]."'";
                    $ObjSelectUniqProduct = mysqli_query($SelectUniqProduct);
                    $RsSelectUniqProduct = mysqli_fetch_array($ObjSelectUniqProduct);
                    
                    
                }
                if($_POST['AddhidType'][$k]=="spare")
                {
                    $InsertInvoiceChild = "INSERT INTO `master_invoice_child` (
                                                                                `InvoiceID` ,
                                                                                `Type` ,
                                                                                `CompanyID` ,
                                                                                `ItemName` ,
                                                                                `Quantity` ,
                                                                                `Price` ,
                                                                                `TotalPrice`)
                                                                                VALUES (
                                                                                        '".$_REQUEST['id']."', 
                                                                                        '".$_POST['AddhidType'][$k]."', 
                                                                                        '".$_POST['AddComapanyName'][$k]."', 
                                                                                        '".$_POST['AddItemName'][$k]."', 
                                                                                        '".$_POST['AddQuantity'][$k]."', 
                                                                                        '".$_POST['AddPrice'][$k]."', 
                                                                                        '".$_POST['AddTotalPrice'][$k]."'
                                                                                        );";
                    
                    mysqli_query($InsertInvoiceChild);
                    $InvoiceChildID = mysqli_insert_id();                        
                    
                    $SelectUniqProduct = "SELECT * from master_inventory_child WHERE Type = 'spare' AND ItemName = '".$_POST['AddItemName'][$k]."' AND CompanyName = '".$_POST['AddComapanyName'][$k]."'";
                    $ObjSelectUniqProduct = mysqli_query($SelectUniqProduct);
                    $RsSelectUniqProduct = mysqli_fetch_array($ObjSelectUniqProduct);
                }
                
                $quantity = intval($RsSelectUniqProduct['Quantity']) - intval($_POST['AddQuantity'][$k]);
                $UpdateQuanity = "UPDATE `master_inventory_child` SET `Quantity` = '".$quantity."' WHERE `InventoryChildID` ='".$RsSelectUniqProduct['InventoryChildID']."';";
                mysqli_query($UpdateQuanity);
            }
            }
        }
    }
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Merchant Invoice";    
        $selectInvoice = "SELECT * FROM `master_invoice` WHERE InvoiceID='".$_REQUEST['id']."'";
        $ObjselectInvoice = mysqli_query($selectInvoice);
        $RsselectInvoice = mysqli_fetch_array($ObjselectInvoice);
        //print_r($RsselectInvoice);
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
            <div>
                Invoice No:
                <?php
                    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                    {
                        echo "MR".sprintf("%04d", $RsselectInvoice['InvoiceNo']);
                    }
                    else
                    {
                        $selectInvoiveIDNext = "SELECT MAX(InvoiceNo) as InvoiceNo FROM `master_invoice` WHERE Type='merchant'";
                        $ObjselectInvoiveIDNext = mysqli_query($selectInvoiveIDNext);
                        $RsselectInvoiveIDNext = mysqli_fetch_array($ObjselectInvoiveIDNext);
                        echo "MR".sprintf("%04d",intval($RsselectInvoiveIDNext['InvoiceNo'])+intval(1));   
                    }
                    
                ?>
            </div>
            <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
            <div ng-controller="FormInputController as form" class="container-fluid ng-scope">
                <div class="panel panel-default">
                    <!--<h4 class="panel-heading"><?php echo $title;?></h4>-->
                    
                    <div class="panel-body">
                        <form id="FrmPurchaseOrder" action="" method="post">
                            <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>">
                            <div>
                            <div>
                                <div style="float:left;width:24%;margin-right:1%;">
                                    <?php
                                        if($RsselectInvoice['Date']!="")
                                        {
                                            $Date = explode("-",$RsselectInvoice['Date']);
                                            $Date = $Date[2]."-".$Date[1]."-".$Date[0];
                                        }
                                    ?>
                                    <div><label class="control-label">Date</label></div>
                                    <div>
                                        <input id="Date" name="Date" placeholder="Date" type="text" class="form-control shadow-z1" value="<?php echo $Date;?>">
                                    </div>
                                </div>
                                <div style="float:left;width:24%;margin-right:1%;">
                                    <div><label class="control-label">Merchant Name</label></div>
                                    <div>
                                        <select class="form-control shadow-z1" name="MerchantID" id="MerchantID">
                                            <option value="0">Select Merchant</option>          
                                            <option value="new">Add New Merchant</option>          
                                        <?php
                                            $selectSupplier = "SELECT * FROM `master_merchant` WHERE Active='1' AND TinNumber='' ";
                                            $ObjselectSupplier = mysqli_query($selectSupplier);
                                            while($RsselectSupplier = mysqli_fetch_array($ObjselectSupplier))
                                            {
                                                if($RsselectSupplier['MerchantID']==$RsselectInvoice['CustomerID'])
                                                {
                                                    $selected = 'selected="selected"';                                                    
                                                }
                                                else
                                                {
                                                    $selected = '';
                                                }
                                                
                                                ?>
                                                    <option <?php echo $selected;?> value="<?php echo $RsselectSupplier['MerchantID'];?>"><?php echo $RsselectSupplier['FirstName']." ".$RsselectSupplier['LastName'];?></option>          
                                                <?php
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="float:left;width:24%;margin-right:1%;">
                                    <div><label class="control-label">Payment Status</label></div>
                                    <div>
                                        <select class="form-control shadow-z1" name="PaymentStatus" id="PaymentStatus">
                                            <option value="0">Select Payment Status</option>          
                                            <option <?php if($RsselectInvoice['PaymentStatus']=="Paid"){?> selected="selected" <?php }?>>Paid</option>          
                                            <option <?php if($RsselectInvoice['PaymentStatus']=="Pending"){?> selected="selected" <?php }?>>Pending</option>          
                                            <option <?php if($RsselectInvoice['PaymentStatus']=="Cancel"){?> selected="selected" <?php }?>>Cancel</option>          
                                        </select>
                                    </div>
                                </div>
                                <div style="float:left;width:24%;margin-right:1%;">
                                    <div><label class="control-label">Payment Method</label></div>
                                    <div>
                                        <select class="form-control shadow-z1" name="PaymentMethod" id="PaymentMethod">
                                            <option value="0">Select Payment Method</option>          
                                            <option <?php if($RsselectInvoice['PaymentMethod']=="Debit Memo"){?> selected="selected" <?php }?>>Debit Memo</option>          
                                        </select>      
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                                <div id="divMerchantInfo">
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            </div>
                            <div>&nbsp;</div>
                            <div>
                                <table class="table table-bordered table-hover bg-white">
                                    <thead>
                                        <tr class="active">
                                            <th class="text-left" id="AddRowButton" style="line-height: 22px; font-size: 36px;cursor:pointer;">+</th>
                                            <th class="text-left">No.</th>
                                            <th class="text-left">Company Name</th>
                                            <th class="text-left">Model/Item No.</th>
                                            <th class="text-left">Color</th>
                                            <th class="text-left">Size</th>
                                            <th class="text-left">Quantity</th>
                                            <th class="text-right">Price</th>
                                            <th class="text-right">Total Price</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                        {
                                            $selectInvoiceChild = "SELECT * FROM `master_invoice_child` WHERE InvoiceID='".$_REQUEST['id']."'";
                                            $ObjselectInvoiceChild = mysqli_query($selectInvoiceChild);
                                            $NumselectInvoiceChild = mysqli_num_rows($ObjselectInvoiceChild);
                                            $rel = $NumselectInvoiceChild;
                                        }
                                        else
                                        {
                                            $rel =  "0";
                                        }
                                                
                                    ?>
                                    <tbody id="Addrow" rel="<?php echo $rel;?>">
                                        <?php
                                            if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                            {
                                                $cnt = 0;
                                                $TotalPrice = 0;
                                                while($RsselectInvoiceChild = mysqli_fetch_array($ObjselectInvoiceChild))
                                                {
                                                    $cnt++;
                                                    ?>
                                                        <tr id="<?php echo $cnt;?>" class="<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>">
                                                            <td class="text-left">
                                                                <div class="RemoveInvoice btn btn-sm btn-danger">
                                                                    <em class="fa fa-trash"></em>
                                                                </div>
                                                            </td>
                                                            <td class="text-left"><?php echo intval($cnt);?></td>
                                                            <td class="text-left">
                                                                <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                    <option value="0">Select Company Name</option>
                                                                    <?php
                                                                        $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                                                                        $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                                        while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                                        {
                                                                            if($RsselectComapnyName['CompanyID']==$RsselectInvoiceChild['CompanyID'])
                                                                            {
                                                                                $selected = 'selected="selected"';                                                                                
                                                                            }
                                                                            else
                                                                            {
                                                                                $selected = '';
                                                                            }
                                                                            
                                                                            ?>
                                                                                <option <?php echo $selected;?> value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                                                            <?php        
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                            
                                                                    <?php
                                                                        if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                                                        {
                                                                            if($RsselectInvoiceChild['Type']=="cycle")
                                                                            {
                                                                                ?>
                                                                                    <td class="text-left">
                                                                                        <select class="form-control shadow-z1 ModalName" name="ModalName[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                                            <option value="0">Select Modal Name</option>
                                                                                <?php
                                                                                $selectComapny = "SELECT * from master_inventory_child WHERE CompanyName = '".$RsselectInvoiceChild['CompanyID']."' AND Type='cycle' AND Active='1' group by ModalName Order By ModalName ASC";
                                                                                $ObjselectCategory = mysqli_query($selectComapny);
                                                                                $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
                                                                                if($NumselectCategory>0)
                                                                                {
                                                                                    while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                                                                                    {
                                                                                        if($RsselectInvoiceChild['ModelNumber']==$RsselectCategory['ModalName'])
                                                                                        {
                                                                                            $selected = 'selected="selected"';                                                                                
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            $selected = '';
                                                                                        }
                                                                                        ?>
                                                                                            <option <?php echo $selected;?> value="<?php echo $RsselectCategory['ModalName'];?>"><?php echo $RsselectCategory['ModalName'];?></option>
                                                                                        <?php                
                                                                                    }
                                                                                }
                                                                                ?>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td class="text-left">
                                                                                        <select class="form-control shadow-z1 Color" name="Color[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                                            <option value="0">Select Color</option>
                                                                                            <?php
                                                                                                if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                                                                                {
                                                                                                    if($RsselectInvoiceChild['Type']=="cycle")
                                                                                                    {
                                                                                                        $selectComapny = "select * from master_inventory_child where Active='1' AND ModalName = '".$RsselectInvoiceChild['ModelNumber']."' AND CompanyName = '".$RsselectInvoiceChild['CompanyID']."' group by Color Order By Color";
                                                                                                        $ObjselectCategory = mysqli_query($selectComapny);
                                                                                                        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
                                                                                                        if($NumselectCategory>0)
                                                                                                        {
                                                                                                            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                                                                                                            {
                                                                                                                if($RsselectInvoiceChild['Color']==$RsselectCategory['Color'])
                                                                                                                {
                                                                                                                    $selected = 'selected="selected"';                                                                                
                                                                                                                }
                                                                                                                else
                                                                                                                {
                                                                                                                    $selected = '';
                                                                                                                }
                                                                                                                ?>
                                                                                                                    <option <?php echo $selected;?> value="<?php echo $RsselectCategory['Color'];?>"><?php echo $RsselectCategory['Color'];?></option>
                                                                                                                <?php                
                                                                                                            }
                                                                                                        }    
                                                                                                    }    
                                                                                                }
                                                                                            ?>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td class="text-left">
                                                                                        <select class="form-control shadow-z1 Size" name="Size[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                                            <option value="0">Select Size</option>
                                                                                            <?php
                                                                                                if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                                                                                {
                                                                                                    if($RsselectInvoiceChild['Type']=="cycle")
                                                                                                    {                                                                        
                                                                                                        $selectComapny = "select * from master_inventory_child where Active='1' AND Color = '".$RsselectInvoiceChild['Color']."' AND ModalName = '".$RsselectInvoiceChild['ModelNumber']."' AND CompanyName = '".$RsselectInvoiceChild['CompanyID']."' group by Size Order By Size";
                                                                                                        $ObjselectCategory = mysqli_query($selectComapny);
                                                                                                        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
                                                                                                        if($NumselectCategory>0)
                                                                                                        {
                                                                                                            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                                                                                                            {
                                                                                                                if($RsselectInvoiceChild['Size']==$RsselectCategory['Size'])
                                                                                                                {
                                                                                                                    $selected = 'selected="selected"';                                                                                
                                                                                                                }
                                                                                                                else
                                                                                                                {
                                                                                                                    $selected = '';
                                                                                                                }
                                                                                                                ?>
                                                                                                                    <option <?php echo $selected;?> value='<?php echo $RsselectCategory['Size'];?>'><?php echo $RsselectCategory['Size'];?></option>
                                                                                                                <?php                
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            ?>
                                                                                        </select>
                                                                                    </td> 
                                                                                <?php    
                                                                            }
                                                                            else
                                                                            {
                                                                                ?>
                                                                                    <td class="text-left" colspan="3">
                                                                                        <select class="form-control shadow-z1 ItemName" name="ItemName[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                                            <option value="0">Select ItemName</option>
                                                                                            <?php
                                                                                            $selectComapny = "SELECT * from master_inventory_child WHERE CompanyName = '".$RsselectInvoiceChild['CompanyID']."' AND Type='spare' AND Active='1' group by ItemName Order By ItemName ASC";
                                                                                            $ObjselectCategory = mysqli_query($selectComapny);
                                                                                            $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
                                                                                            if($NumselectCategory>0)
                                                                                            {
                                                                                    while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                                                                                    {
                                                                                        if($RsselectInvoiceChild['ItemName']==$RsselectCategory['ItemName'])
                                                                                        {
                                                                                            $selected = 'selected="selected"';                                                                                
                                                                                        }
                                                                                        else
                                                                                        {
                                                                                            $selected = '';
                                                                                        }
                                                                                        ?>
                                                                                            <option <?php echo $selected;?> value="<?php echo $RsselectCategory['ItemName'];?>"><?php echo $RsselectCategory['ItemName'];?></option>
                                                                                        <?php                
                                                                                    }
                                                                                }    
                                                                                ?>
                                                                                        </select>
                                                                                    </td>
                                                                                <?php
                                                                            }
                                                                        }
                                                                    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                                                    {
                                                                        if($RsselectInvoiceChild['Type']=="cycle")
                                                                        {
                                                                            ?>
                                                                                <td class="text-left">
                                                                                    <select class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                                        <option value="0">Select Quantity</option>
                                                                                        <?php
                                                                                            if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                                                                            {
                                                                                                $selectWareHouseInvoice = "SELECT SUM(master_invoice_child.Quantity) as Quantity from master_invoice_child WHERE  master_invoice_child.Active='1' AND master_invoice_child.Active='1' AND master_invoice_child.Type='cycle' AND master_invoice_child.CompanyID='".$RsselectInvoiceChild['CompanyID']."' AND master_invoice_child.ModelNumber='".$RsselectInvoiceChild['ModelNumber']."' AND master_invoice_child.Color='".$RsselectInvoiceChild['Color']."' AND master_invoice_child.Size='".mysqli_real_escape_string($RsselectInvoiceChild['Size'])."' GROUP BY CompanyID";
                                                                                                
                                                                                                $ObjselectWareHouseInvoice = mysqli_query($selectWareHouseInvoice);
                                                                                                $RSselectWareHouseInvoice = mysqli_fetch_array($ObjselectWareHouseInvoice);
                                                                                                
                                                                                                $selectWareHouseInventory = "SELECT SUM(master_inventory_child.OrgQuantity) as OrgQuantity from master_inventory_child WHERE  master_inventory_child.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='cycle' AND master_inventory_child.CompanyName='".$RsselectInvoiceChild['CompanyID']."' AND master_inventory_child.ModalName='".$RsselectInvoiceChild['ModelNumber']."' AND master_inventory_child.Color='".$RsselectInvoiceChild['Color']."' AND master_inventory_child.Size='".mysqli_real_escape_string($RsselectInvoiceChild['Size'])."'  GROUP BY CompanyName";
                                                                                                $ObjselectWareHouseInventory = mysqli_query($selectWareHouseInventory);
                                                                                                $RSselectWareHouseInventory = mysqli_fetch_array($ObjselectWareHouseInventory);
                                                                                                $MyQuantity = intval($RSselectWareHouseInventory['OrgQuantity']) -  intval($RSselectWareHouseInvoice['Quantity']);
                                                                                                
                                                                                                
                                                                                                //$SelectPrice = 'SELECT * from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Size = "'.mysqli_real_escape_string($RsselectInvoiceChild['Size']).'" AND Color="'.$RsselectInvoiceChild['Color'].'" AND ModalName = "'.$RsselectInvoiceChild['ModelNumber'].'" AND CompanyName = "'.$RsselectInvoiceChild['CompanyID'].'" AND master_inventory_child.Active="1"';
                                                                                                //$SelectPrice = 'SELECT SUM(Quantity) Quantity  from master_inventory_child LEFT JOIN master_cyclezone_price ON master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID WHERE Size = "'.mysqli_real_escape_string($RsselectInvoiceChild['Size']).'" AND Color="'.$RsselectInvoiceChild['Color'].'" AND ModalName = "'.$RsselectInvoiceChild['ModelNumber'].'" AND CompanyName = "'.$RsselectInvoiceChild['CompanyID'].'" AND master_inventory_child.Active="1"';
//                                                                                                $objSelectPrice = mysqli_query($SelectPrice);
//                                                                                                $RsSelectPrice = mysqli_fetch_array($objSelectPrice);        
//                                                                                                
                                                                                                for($i=1; $i<=intval($MyQuantity)+intval($RsselectInvoiceChild['Quantity']);$i++)
                                                                                                {
                                                                                                    if($RsselectInvoiceChild['Quantity']==$i)
                                                                                                    {
                                                                                                        $selected = 'selected="selected"';                                                                                
                                                                                                    }
                                                                                                    else
                                                                                                    {
                                                                                                        $selected = '';
                                                                                                    }
                                                                                                    ?>
                                                                                                        <option <?php echo $selected;?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                                                    <?php            
                                                                                                }
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </td>  
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                                <td class="text-left">
                                                                                    <select class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                                                        <option value="0">Select Quantity</option>
                                                                                        <?php
                                                                                            if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                                                                            {
                                                                                                $selectWareHouseInvoice = "SELECT SUM(master_invoice_child.Quantity) as Quantity from master_invoice_child WHERE  master_invoice_child.Active='1' AND master_invoice_child.Active='1' AND master_invoice_child.Type='spare' AND master_invoice_child.CompanyID='".$RsselectInvoiceChild['CompanyID']."' AND master_invoice_child.ItemName='".$RsselectInvoiceChild['ItemName']."' GROUP BY CompanyID";
                                                                                                $ObjselectWareHouseInvoice = mysqli_query($selectWareHouseInvoice);
                                                                                                $RSselectWareHouseInvoice = mysqli_fetch_array($ObjselectWareHouseInvoice);
                                                                                                
                                                                                                $selectWareHouseInventory = "SELECT SUM(master_inventory_child.OrgQuantity) as OrgQuantity from master_inventory_child WHERE  master_inventory_child.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='spare' AND master_inventory_child.CompanyName='".$RsselectInvoiceChild['CompanyID']."' AND master_inventory_child.ItemName='".$RsselectInvoiceChild['ItemName']."' GROUP BY CompanyName";
                                                                                                $ObjselectWareHouseInventory = mysqli_query($selectWareHouseInventory);
                                                                                                $RSselectWareHouseInventory = mysqli_fetch_array($ObjselectWareHouseInventory);
                                                                                                $MyQuantity = intval($RSselectWareHouseInventory['OrgQuantity']) -  intval($RSselectWareHouseInvoice['Quantity']);
                                                                                                
                                                                                                //$SelectPrice = 'SELECT * from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Size = "'.mysqli_real_escape_string($RsselectInvoiceChild['Size']).'" AND Color="'.$RsselectInvoiceChild['Color'].'" AND ModalName = "'.$RsselectInvoiceChild['ModelNumber'].'" AND CompanyName = "'.$RsselectInvoiceChild['CompanyID'].'" AND master_inventory_child.Active="1"';
                                                                                                //$SelectPrice = 'SELECT SUM(Quantity) Quantity  from master_inventory_child LEFT JOIN master_cyclezone_price ON master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID WHERE Size = "'.mysqli_real_escape_string($RsselectInvoiceChild['Size']).'" AND Color="'.$RsselectInvoiceChild['Color'].'" AND ModalName = "'.$RsselectInvoiceChild['ModelNumber'].'" AND CompanyName = "'.$RsselectInvoiceChild['CompanyID'].'" AND master_inventory_child.Active="1"';
//                                                                                                $objSelectPrice = mysqli_query($SelectPrice);
//                                                                                                $RsSelectPrice = mysqli_fetch_array($objSelectPrice);        
//                                                                                                
                                                                                                for($i=1; $i<=intval($MyQuantity)+intval($RsselectInvoiceChild['Quantity']);$i++)
                                                                                                {
                                                                                                    if($RsselectInvoiceChild['Quantity']==$i)
                                                                                                    {
                                                                                                        $selected = 'selected="selected"';                                                                                
                                                                                                    }
                                                                                                    else
                                                                                                    {
                                                                                                        $selected = '';
                                                                                                    }
                                                                                                    ?>
                                                                                                        <option <?php echo $selected;?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                                                    <?php            
                                                                                                }
                                                                                            }
                                                                                        ?>
                                                                                    </select>
                                                                                </td>
                                                                            <?php
                                                                        }
                                                                    }
                                                            ?>
                                                            <td class="text-left">
                                                                <input type="text" value="<?php echo number_format($RsselectInvoiceChild['Price'],2,".","");?>" readonly="readonly" class="text-right form-control shadow-z1 Price" name="Price[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]">
                                                            </td>
                                                            <?php
                                                                $TotalPrice = floatval($TotalPrice) + floatval($RsselectInvoiceChild['TotalPrice']);
                                                            ?>
                                                            <td class="text-left">
                                                                <input type="text" value="<?php echo number_format($RsselectInvoiceChild['TotalPrice'],2,".","");?>" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="TotalPrice[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]" value="0">
                                                            </td>
                                                            <input type="hidden" name="hidType[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]" class="hidType" value="<?php echo $RsselectInvoiceChild['Type'];?>">
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
                                <div style="padding-bottom:20px;">
                                    <div style="float:right;">
                                        <?php
                                            $TotalPrice = floatval($TotalPrice) + floatval($RsselectInvoice['Shipping']);
                                        ?>
                                        <input type="text" class="form-control text-right input-sm" name="Shipping" id="Shipping" value="<?php echo number_format($RsselectInvoice['Shipping'],2,".","");?>">
                                    </div>
                                    <div style="float:right;padding-right:10px;padding-top:5px;">Shipping Charge</div>
                                    <div style="clear:both;"></div>
                                </div>                                
                                <div style="padding-bottom:20px;">
                                    <div style="float:right;">
                                    <?php
                                        $TotalPrice = floatval($TotalPrice) - floatval($RsselectInvoice['Discount']);
                                    ?>
                                        <input type="text" class="form-control text-right input-sm" name="Discount" id="Discount" value="<?php echo number_format($RsselectInvoice['Discount'],2,".","");?>">
                                    </div>
                                    <div style="float:right;padding-right:10px;padding-top:5px;">Discount</div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="float:right;">
                                    <input type="text" value="<?php echo number_format($TotalPrice,2,".","");?>" readonly="readonly" class="form-control text-right input-sm" name="LastTotalPrice" id="LastTotalPrice">
                                </div>
                                <div style="float:right;padding-right:10px;padding-top:5px;">Total Price</div>
                                <div style="clear:both;"></div>
                            </div>
                            <p class="clearfix">&nbsp;</p>

                            <div class="form-group">
                                <textarea name="Note" cols="40" rows="10" id="note" type="textarea" class="form-control" placeholder="Please add notes (if any)" rows="3" style="margin-top: 10px; height: 100px;"><?php echo $RsselectInvoice['Note'];?></textarea>
                            </div>
                            <div class="form-group" style="float:right;">
                                <?php
                                    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                    {
                                        $InvoiceButtonName = "Edit Invoice";
                                    }
                                    else
                                    {
                                        $InvoiceButtonName = "Add Invoice";
                                    }
                                ?>
                                <input type="submit" name="submit" value="<?php echo $InvoiceButtonName;?>" class="btn btn-primary btn-large" /> </div>
                            </div>
                        </form>
                        <div style="clear:both;"></div>
                   </div>
   <!-- END panel-->
</div></div></div></section> <!-- ngInclude: 'templates/footer.html' -->

<?php
    include("footer.php");
?>
<div class="modal fade" id="FrameNo" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div modal-transclude="" class="modal-content">
            <div class="modal-header ng-scope">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">x</button>
                <h4 class="modal-title" id="myModalLabel">Frame No</h4>
            </div>
            <div class="modal-body ng-scope" id="FrameContent">
            
                
            </div>
            <div class="modal-footer ng-scope">
                <button class="btn btn-primary" aria-hidden="true" data-dismiss="modal" id="FrameOkButton">OK</button>
                <!--<button class="btn btn-warning" aria-hidden="true" data-dismiss="modal">Cancel</button>-->
            </div>
        </div>
    </div><!-- /.modal-dialog --> 
</div>
<div class="modal fade" id="AddFrameNo" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div modal-transclude="" class="modal-content">
            <div class="modal-header ng-scope">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">x</button>
                <h4 class="modal-title" id="AddmyModalLabel">Frame No</h4>
            </div>
            <div class="modal-body ng-scope" id="AddFrameContent">
            
                
            </div>
            <div class="modal-footer ng-scope">
                <button class="btn btn-primary" aria-hidden="true" data-dismiss="modal" id="AddFrameOkButton">OK</button>
                <!--<button class="btn btn-warning" aria-hidden="true" data-dismiss="modal">Cancel</button>-->
            </div>
        </div>
    </div><!-- /.modal-dialog --> 
</div>
<div class="modal fade" id="AddNewRow" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div modal-transclude="" class="modal-content">
            <div class="modal-header ng-scope">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">x</button>
                <h4 class="modal-title" id="myModalLabel">Please Select Type</h4>
            </div>
            <div class="modal-body ng-scope text-center">
                <button class="btn btn-primary" aria-hidden="true" data-dismiss="modal" id="CycleButton">Cycle</button>
                <button class="btn btn-primary" aria-hidden="true" data-dismiss="modal" id="SpareButton">Spare</button>
                
            </div>
            <div class="modal-footer ng-scope">
                <button class="btn btn-warning" aria-hidden="true" data-dismiss="modal" id="RemoveInventoryChildCancelButton">Cancel</button>
            </div>
        </div>
    </div><!-- /.modal-dialog --> 
</div>

      
<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click', '#AddRowButton', function() {
            $('#AddNewRow').modal('show');            
        });
        $('#FrameNo').on('hidden.bs.modal', function () {
            //alert("asd");
        });
        $("#FrameOkButton").click(function() {
            var RowID = $('#divFrameMain').attr('rel');
            var RowClass = $('#divFrameMain').attr('datavalue');
            var HtmlFrame = "";
            var Error = false;
            $("#divFrameMain input").each(function(index) {
                if($(this).val()=="")
                {
                    $(this).attr('style', 'border:1px solid red !important');
                    Error = true;                    
                }   
                else
                {
                    $(this).attr('style', 'border:1px solid #ccc !important');
                }             
            });
            if(Error)
            {
                return false;
            }
            $("#FrameContent #divFrameMain input").each(function(index) {
                if(RowClass=="undefined" || RowClass===undefined)
                {
                    HtmlFrame = HtmlFrame + "<input type='hidden' name='FrameNo["+RowID+"][]' value='"+$(this).val()+"'>";
                }
                else
                {
                    HtmlFrame = HtmlFrame + "<input type='hidden' name='FrameNo["+RowClass+"][]' value='"+$(this).val()+"'>";                        
                }
            });
            $('#'+RowID+' .Framehiddendiv').html(HtmlFrame);
            $('#FrameNo').modal('hide');
        });
        $("#AddFrameOkButton").click(function() {
            var RowID = $('#AddFrameContent #divFrameMain').attr('rel');
            var HtmlFrame = "";
            var Error = false;
            $("#AddFrameContent #divFrameMain input").each(function(index) {
                if($(this).val()=="")
                {
                    $(this).attr('style', 'border:1px solid red !important');
                    Error = true;                    
                }   
                else
                {
                    $(this).attr('style', 'border:1px solid #ccc !important');
                }             
            });
            if(Error)
            {
                return false;
            }
            $("#AddFrameContent #divFrameMain input").each(function(index) {
                HtmlFrame = HtmlFrame + "<input type='hidden' name='AddFrameNo["+RowID+"][]' value='"+$(this).val()+"'>";
            });
            //alert(RowID);
            $('#'+RowID+' .Framehiddendiv').html(HtmlFrame);
            $('#AddFrameNo').modal('hide');
        });
        $('body').on('click', '.RemoveInvoice', function() {
            var rowID = $(this).parents('tr').attr('id');
            if(rowID===undefined)
            {
                if (confirm("Are you sure?")) 
                {
                    $(this).parents('tr').remove();                                        
                    var TotalPrice = 0;
                    $('.TotalPrice').each(function(index) {
                        TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                    });
                    
                    var TransportationPrice = $('#Shipping').val();
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
                if(confirm("Are you sure?")) 
                {
                    if($(this).parents('tr').attr('class')===undefined)
                    {
                        $(this).parents('tr').remove();  
                        var TotalPrice = 0;
                        var TransportationPrice = 0;
                        $('.TotalPrice').each(function(index) {
                            TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                        });               
                        
                        TransportationPrice = $('#Shipping').val();
                        if(TransportationPrice=="")
                        {
                            TransportationPrice = 0;
                        }
                        var Discount = $('#Discount').val();
                        if(Discount=="")
                        {
                            Discount = 0;
                        }
                        TotalPrice = parseFloat(TotalPrice) + parseFloat(TransportationPrice) - parseFloat(Discount);
                        TotalPrice = TotalPrice.toFixed(2);
                        $('#LastTotalPrice').val(TotalPrice);                  
                    }
                    else
                    {
                        var thisobj = $(this);
                        $.ajax({
                            url: 'ajax.php?filter=removeCycleInvoiceChildRow&CycleInvoiceRowID='+$(this).parents('tr').attr('class'),
                            success: function(html) 
                            {
                                thisobj.parents('tr').remove();
                                var TotalPrice = 0;
                                var TransportationPrice = 0;
                                $('.TotalPrice').each(function(index) {
                                    TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                                });               
                                
                                TransportationPrice = $('#Shipping').val();
                                if(TransportationPrice=="")
                                {
                                    TransportationPrice = 0;
                                }
                                var Discount = $('#Discount').val();
                                if(Discount=="")
                                {
                                    Discount = 0;
                                }
                                TotalPrice = parseFloat(TotalPrice) + parseFloat(TransportationPrice) - parseFloat(Discount);
                                TotalPrice = TotalPrice.toFixed(2);
                                $('#LastTotalPrice').val(TotalPrice);
                            }
                        });    
                    }
                }                
                else
                {
                    return false;
                }
            }
        });
        $('body').on('click', '.FrameNo', function() {
            var thisobj = $(this);            
            var relRow = thisobj.attr('rel');            
            var RowClass = thisobj.attr('datavalue');            
            var Quantity = thisobj.parents('tr').find('.Quantity').val();            
            if(Quantity>0)
            {
                var html = "<div id='divFrameMain' rel="+relRow+" datavalue="+RowClass+">";
                for(i=1;i<=Quantity;i++)
                {
                    if(thisobj.parents('tr').find('.Framehiddendiv input:nth-child('+i+')').val()!==undefined)
                    {
                        var Inputhiddenval =  thisobj.parents('tr').find('.Framehiddendiv input:nth-child('+i+')').val();    
                    }
                    else
                    {
                        var Inputhiddenval = "";
                    }
                    html = html + '<div style="padding-bottom:5px;"><div style="float:left;padding-right:5px;">Frame No'+i+':</div><div style="float:left;"><input type="text" class="form-control text-right input-sm" value='+ Inputhiddenval +'></div><div style="clear:both;"></div></div>';    
                }
                html = html + '</div>';
                $('#FrameContent').html(html);
                $('#FrameNo').modal('show');
                thisobj.parents('tr').find('.Quantity').attr('style', 'border:1px solid #ccc !important');
            }
            else
            {
                thisobj.parents('tr').find('.Quantity').attr('style', 'border:1px solid red !important');
            }
        });
        $('body').on('click', '.AddFrameNo', function() {
            var thisobj = $(this);            
            var relRow = thisobj.attr('rel');            
            var Quantity = thisobj.parents('tr').find('.Quantity').val();            
            if(Quantity>0)
            {
                var html = "<div id='divFrameMain' rel="+relRow+">";
                for(i=1;i<=Quantity;i++)
                {
                    if(thisobj.parents('tr').find('.Framehiddendiv input:nth-child('+i+')').val()!==undefined)
                    {
                        var Inputhiddenval =  thisobj.parents('tr').find('.Framehiddendiv input:nth-child('+i+')').val();    
                    }
                    else
                    {
                        var Inputhiddenval = "";
                    }                           
                    html = html + '<div style="padding-bottom:5px;"><div style="float:left;padding-right:5px;">Frame No'+i+':</div><div style="float:left;"><input type="text" class="form-control text-right input-sm" value='+ Inputhiddenval +'></div><div style="clear:both;"></div></div>';    
                }
                html = html + '</div>';
                $('#AddFrameContent').html(html);
                $('#AddFrameNo').modal('show');
                thisobj.parents('tr').find('.Quantity').attr('style', 'border:1px solid #ccc !important');
            }
            else
            {
                thisobj.parents('tr').find('.Quantity').attr('style', 'border:1px solid red !important');
            }
        });
        $("#CycleButton").click(function() {
            <?php 
                if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                {
                    ?>
                        var NoRow = parseInt($('#Addrow').attr('rel')) + parseInt(1);
                        $('#Addrow').attr('rel',NoRow);
                        $.ajax({
                            url: 'ajax.php?filter=getCycleMerchantInvoiceRow&Addrow='+$('#Addrow').attr('rel')+'&action=edit',
                            success: function(html) 
                            {
                                $('#Addrow').append(html);
                            }
                        });                  
                    <?php                    
                }
                else
                {
                    ?>
                        var NoRow = parseInt($('#Addrow').attr('rel')) + parseInt(1);
                        $('#Addrow').attr('rel',NoRow);
                        $.ajax({
                            url: 'ajax.php?filter=getCycleMerchantInvoiceRow&Addrow='+$('#Addrow').attr('rel'),
                            success: function(html) 
                            {
                                $('#Addrow').append(html);
                            }
                        });                  
                    <?php        
                }
                
            ?>
            
        });
        $("#SpareButton").click(function() {
            <?php 
                if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                {
                    ?>
                        var NoRow = parseInt($('#Addrow').attr('rel')) + parseInt(1);
                        $('#Addrow').attr('rel',NoRow);
                        $.ajax({
                            url: 'ajax.php?filter=getSpareMerchantInvoiceRow&Addrow='+$('#Addrow').attr('rel')+'&action=edit',
                            success: function(html) 
                            {
                                $('#Addrow').append(html);
                            }
                        });                  
                    <?php
                }
                else
                {
                    ?>
                        var NoRow = parseInt($('#Addrow').attr('rel')) + parseInt(1);
                        $('#Addrow').attr('rel',NoRow);
                        $.ajax({
                            url: 'ajax.php?filter=getSpareMerchantInvoiceRow&Addrow='+$('#Addrow').attr('rel'),
                            success: function(html) 
                            {
                                $('#Addrow').append(html);
                            }
                        });                  
                    <?php                    
                }
                ?>
        });
        $('body').on('change', '.ComapanyName', function() {
            var thisobj = $(this);   
            var Type = thisobj.parents('tr').find('.hidType').val();
            if(Type=="cycle")
            {
                $.ajax({
                    url: 'ajax.php?filter=GetInvoiceModalNo&CompanyName='+$(this).val(),
                    success: function(html) 
                    {
                        thisobj.parents('tr').find('.ModalName').html(html);
                    }
                }); 
            }
            else
            {
                $.ajax({
                    url: 'ajax.php?filter=GetInvoiceItemName&CompanyName='+$(this).val(),
                    success: function(html) 
                    {
                        thisobj.parents('tr').find('.ItemName').html(html);
                    }
                });                 
            }     
        });
        $('body').on('change', '.ModalName', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ModalName = thisobj.parents('tr').find('.ModalName').val();
            $.ajax({
                url: 'ajax.php?filter=GetInvoiceColor&ModalName='+ModalName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {
                    thisobj.parents('tr').find('.Color').html(html);
                }
            });      
        });
        $('body').on('change', '.ItemName', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ItemName = thisobj.parents('tr').find('.ItemName').val();
            $.ajax({
                url: 'ajax.php?filter=GetSpareQuantity&ItemName='+ItemName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {
                    thisobj.parents('tr').find('.Quantity').html(html);
                }
            });      
        });
        
        $('body').on('change', '.Color', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ModalName = thisobj.parents('tr').find('.ModalName').val();
            var Color = thisobj.parents('tr').find('.Color').val();
            $.ajax({
                url: 'ajax.php?filter=GetInvoiceSize&Color='+Color+'&ModalName='+ModalName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {
                    thisobj.parents('tr').find('.Size').html(html);
                }
            });      
        });
        $('body').on('change', '.Size', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ModalName = thisobj.parents('tr').find('.ModalName').val();
            var Color = thisobj.parents('tr').find('.Color').val();
            var Size = thisobj.parents('tr').find('.Size').val();
            $.ajax({
                url: 'ajax.php?filter=GetQuantity&Size='+Size+'&Color='+Color+'&ModalName='+ModalName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {                     
                    thisobj.parents('tr').find('.Quantity').html(html);
                }
            });      
        });
        $('body').on('change', '.Quantity,#Shipping,#Discount', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ModalName = thisobj.parents('tr').find('.ModalName').val();
            var Color = thisobj.parents('tr').find('.Color').val();
            var Size = thisobj.parents('tr').find('.Size').val();
            var Quantity = thisobj.parents('tr').find('.Quantity').val();
            var ItemName = thisobj.parents('tr').find('.ItemName').val();
            var HidType = thisobj.parents('tr').find('.hidType').val();
            if(Quantity=="")
            {
                Quantity = 0;                                
            }
            $.ajax({
                url: 'ajax.php?filter=GetPrice&HidType='+HidType+'&ItemName='+ItemName+'&Quantity='+Quantity+'&Size='+Size+'&Color='+Color+'&ModalName='+ModalName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {
                    //alert(html);
                    html = $.trim(html);
                    html = html.split("---");
                    thisobj.parents('tr').find('.Price').val(html[0]);
                    thisobj.parents('tr').find('.TotalPrice').val(html[1]);
                    
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
                    //alert(LastTotal);
                    $('#LastTotalPrice').val(LastTotal);
                    $('#HidLastTotalPrice').val(LastTotal);     
                    
                }
            }); 
        }); 
        $('body').on('change', '.Price', function() {
            var thisobj = $(this);   
            var Price = thisobj.parents('tr').find('.Price').val();
            var Quantity = thisobj.parents('tr').find('.Quantity').val();
            var TotalPrice = parseFloat(Price) * parseFloat(Quantity); 
            TotalPrice = TotalPrice.toFixed(2);
            //alert(TotalPrice);
            thisobj.parents('tr').find('.TotalPrice').val(TotalPrice);
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
            //alert(LastTotal);
            $('#LastTotalPrice').val(LastTotal);
            $('#HidLastTotalPrice').val(LastTotal);     
        });
        $('#MerchantID').change(function() {
            if($(this).val()>0)
            {  
                $.ajax({
                    url: 'ajax.php?filter=GetMerchantInvoiceInfo&MerchantID='+$(this).val(),
                    success: function(html) 
                    {
                        $('#divMerchantInfo').html(html);                    
                    }
                }); 
            }           
            if($(this).val()=="new")
            {
                $.ajax({
                    url: 'ajax.php?filter=GetMerchantInvoiceForm&MerchantID='+$(this).val(),
                    success: function(html) 
                    {
                        $('#divMerchantInfo').html(html);                    
                    }
                });                                 
            }
        });
        $('#FrmPurchaseOrder').submit(function() {
            
            var Error = false;
            var Date = $("#Date").val();              
            var CustomerID = $("#CustomerID").val();              
            var MerchantID = $("#MerchantID").val();              
            var PaymentStatus = $("#PaymentStatus").val();              
            var PaymentMethod = $("#PaymentMethod").val();              
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
            if(MerchantID==0)
            {
                $("#MerchantID").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#MerchantID').attr('style', 'border:1px solid #ccc !important');
            }
            if(MerchantID=="new")
            {
                if($('#FirstName').val()=="")
                {
                    $("#FirstName").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#FirstName').attr('style', 'border:1px solid #ccc !important');
                }
                if($('#LastName').val()=="")
                {
                    $("#LastName").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#LastName').attr('style', 'border:1px solid #ccc !important');
                }
                if($('#ShippingAddress').val()=="")
                {
                    $("#ShippingAddress").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#ShippingAddress').attr('style', 'border:1px solid #ccc !important');
                }
                if($('#ShippingCity').val()=="")
                {
                    $("#ShippingCity").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#ShippingCity').attr('style', 'border:1px solid #ccc !important');
                }
                if($('#ShippingPinCode').val()=="")
                {
                    $("#ShippingPinCode").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#ShippingPinCode').attr('style', 'border:1px solid #ccc !important');
                }
                if($('#ShippingState').val()=="")
                {
                    $("#ShippingState").attr('style', 'border:1px solid red !important');
                    Error = true;
                }
                else
                {
                    $('#ShippingState').attr('style', 'border:1px solid #ccc !important');
                }
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
            if(PaymentMethod==0)
            {
                $("#PaymentMethod").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#PaymentMethod').attr('style', 'border:1px solid #ccc !important');
            }
            if(LastTotalPrice<=0)
            {
                $("#LastTotalPrice").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#LastTotalPrice').attr('style', 'border:1px solid #ccc !important');
            }   
            //alert(Error);
            if(Error) 
            {
                return false;
            }
        });
    });
</script>
</body></html>