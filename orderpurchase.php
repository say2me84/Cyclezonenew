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
//        print_r($_POST);
//        exit;
        $Date = explode("-",$_POST['Date']);
        $Date = $Date[2]."-".$Date[1]."-".$Date[0];
        if($_REQUEST['action']=="add")
        {   
            $selectInvoiceNo = "SELECT MAX(PurchaseOrderNo) as PurchaseOrderNo from master_purchase_order";
            $ObjselectInvoiceNo = mysqli_query($selectInvoiceNo);
            if(mysqli_num_rows($ObjselectInvoiceNo)>0)
            {
                $RsselectInvoiceNo = mysqli_fetch_array($ObjselectInvoiceNo);
                $InvoiceNo = intval($RsselectInvoiceNo['PurchaseOrderNo']) + intval(1);    
            }
            else
            {
                $InvoiceNo = 1;                    
            }
            
            
            
            
            $InsertInvoice = "INSERT INTO `master_purchase_order` (
                                                                `PurchaseOrderNo` ,
                                                                `Date` ,
                                                                `SupplierID` ,
                                                                `PaymentMethod` ,
                                                                `Note` )
                                                                VALUES (
                                                                '".$InvoiceNo."', 
                                                                '".$Date."', 
                                                                '".$_POST['SupplierID']."', 
                                                                '".$_POST['PaymentMethod']."', 
                                                                '".$_POST['Note']."'
                                                                );";
            //echo $InsertInvoice;
            mysqli_query($InsertInvoice);
            $InvoiceID = mysqli_insert_id();
                    
            foreach($_POST['ComapanyName'] as $k=>$v)
            {
                    if($_POST['hidType'][$k]=="cycle")
                    {
                        $InsertInvoiceChild = "INSERT INTO `master_purchase_order_child` (
                                                                                    `PurchaseOrderID` ,
                                                                                    `Type` ,
                                                                                    `CompanyName` ,
                                                                                    `ModelNumber` ,
                                                                                    `Color` ,
                                                                                    `Size` ,
                                                                                    `Quantity`)
                                                                                    VALUES (
                                                                                            '".$InvoiceID."', 
                                                                                            'cycle', 
                                                                                            '".$_POST['ComapanyName'][$k]."', 
                                                                                            '".$_POST['ModalName'][$k]."', 
                                                                                            '".$_POST['Color'][$k]."', 
                                                                                            '".mysqli_real_escape_string($_POST['Size'][$k])."', 
                                                                                            '".$_POST['Quantity'][$k]."');";
                        mysqli_query($InsertInvoiceChild);
                        $InvoiceChildID = mysqli_insert_id();
                    }
                    if($_POST['hidType'][$k]=="spare")
                    {
                        $InsertInvoiceChild = "INSERT INTO `master_purchase_order_child` (
                                                                                    `PurchaseOrderID` ,
                                                                                    `Type` ,
                                                                                    `CompanyName` ,
                                                                                    `ItemName` ,
                                                                                    `Quantity`)
                                                                                    VALUES (
                                                                                            '".$InvoiceID."', 
                                                                                            'spare', 
                                                                                            '".$_POST['ComapanyName'][$k]."', 
                                                                                            '".$_POST['ItemName'][$k]."', 
                                                                                            '".$_POST['Quantity'][$k]."');";
                        mysqli_query($InsertInvoiceChild);
                        $InvoiceChildID = mysqli_insert_id();                        
                        
                    }
            }
            $Msg = "Purchase Order Added Successfully";
            //header("location:viewinvoice.php?id=".$InvoiceID);
        }
        else
        {
            $UpdateInvoice = "UPDATE `master_purchase_order` SET `Date` = '".$Date."',
                                                            `SupplierID` = '".$_POST['SupplierID']."',
                                                            `PaymentMethod` = '".$_POST['PaymentMethod']."',
                                                            `Note` = '".$_POST['Note']."' WHERE `PurchaseOrderID` ='".$_REQUEST['id']."';";
            mysqli_query($UpdateInvoice);
            foreach($_REQUEST['ComapanyName'] as $k=>$v)
            {
                if($_POST['hidType'][$k]=="cycle")
                {
                    $UpdateComapny = "UPDATE `master_purchase_order_child` SET 
                                                                        `CompanyName` = '".$_REQUEST['CompanyName'][$k]."',
                                                                        `ModelNumber` = '".$_REQUEST['ModelNumber'][$k]."',
                                                                        `Color` = '".$_REQUEST['Color'][$k]."',
                                                                        `Size` = '".$_REQUEST['Size'][$k]."',
                                                                        `Quantity` = '".$_REQUEST['Quantity'][$k]."'
                                                                        WHERE `PurchaseOrderChildID` ='".$k."';";
                }
                if($_POST['hidType'][$k]=="spare")
                {
                    $UpdateComapny = "UPDATE `master_purchase_order_child` SET 
                                                                        `CompanyName` = '".$_REQUEST['CompanyName'][$k]."',
                                                                        `ItemName` = '".$_REQUEST['ItemName'][$k]."',
                                                                        `Quantity` = '".$_REQUEST['Quantity'][$k]."'
                                                                        WHERE `PurchaseOrderChildID` ='".$k."';";
                }
                mysqli_query($UpdateComapny);
            }
            if(count($_REQUEST['AddComapanyName'])>0)
            {
                foreach($_REQUEST['AddComapanyName'] as $k=>$v)
                {
                    if($_POST['AddhidType'][$k]=="cycle")
                    {
                        $InsertInvoiceChild = "INSERT INTO `master_purchase_order_child` (
                                                                                        `PurchaseOrderID` ,
                                                                                        `Type` ,
                                                                                        `CompanyName` ,
                                                                                        `ModelNumber` ,
                                                                                        `Color` ,
                                                                                        `Size` ,
                                                                                        `Quantity`)
                                                                                        VALUES (
                                                                                                '".$_REQUEST['id']."', 
                                                                                                '".$_POST['AddhidType'][$k]."', 
                                                                                                '".$_POST['AddComapanyName'][$k]."', 
                                                                                                '".$_POST['AddModalName'][$k]."', 
                                                                                                '".$_POST['AddColor'][$k]."', 
                                                                                                '".mysqli_real_escape_string($_POST['AddSize'][$k])."', 
                                                                                                '".$_POST['AddQuantity'][$k]."'
                                                                                                );";
                        mysqli_query($InsertInvoiceChild);
                        $InvoiceChildID = mysqli_insert_id();
                    }
                    if($_POST['hidType'][$k]=="spare")
                    {
                    $InsertInvoiceChild = "INSERT INTO `master_invoice_child` (
                                                                                `PurchaseOrderID` ,
                                                                                `Type` ,
                                                                                `AddComapanyName` ,
                                                                                `ItemName` ,
                                                                                `Quantity`)
                                                                                VALUES (
                                                                                        '".$_REQUEST['id']."', 
                                                                                        '".$_POST['AddhidType'][$k]."', 
                                                                                        '".$_POST['AddComapanyName'][$k]."', 
                                                                                        '".$_POST['AddItemName'][$k]."', 
                                                                                        '".$_POST['AddQuantity'][$k]."'
                                                                                        );";
                    mysqli_query($InsertInvoiceChild);
                    $InvoiceChildID = mysqli_insert_id();                        
                }
                }
            }
        }
    }
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Order Purchase";    
        $selectInvoice = "SELECT * FROM `master_purchase_order` WHERE PurchaseOrderID='".$_REQUEST['id']."'";
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
                    $selectInvoiveIDNext = "SELECT PurchaseOrderNo FROM `master_purchase_order` ORDER BY PurchaseOrderID DESC LIMIT 0,1";
                    $ObjselectInvoiveIDNext = mysqli_query($selectInvoiveIDNext);
                    $RsselectInvoiveIDNext = mysqli_fetch_array($ObjselectInvoiveIDNext);
                    echo intval($RsselectInvoiveIDNext['PurchaseOrderNo'])+1;
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
                                <div style="float:left;width:32%;">
                                    <?php
                                        if($RsselectInvoice['Date'] !="")
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
                                <div style="float:left;width:32%;margin-right:1%; margin-left:1%;">
                                    <div><label class="control-label">Supplier Name</label></div>
                                    <div>
                                        <select class="form-control shadow-z1" name="SupplierID" id="SupplierID">
                                            <option value="0">Select Supplier</option>          
                                        <?php
                                            $selectSupplier = "SELECT * FROM `master_supplier` WHERE Active='1'";
                                            $ObjselectSupplier = mysqli_query($selectSupplier);
                                            while($RsselectSupplier = mysqli_fetch_array($ObjselectSupplier))
                                            {
                                                print_r($RsselectSupplier['SupplierID']);
                                                if($RsselectSupplier['SupplierID']==$RsselectInvoice['SupplierID'])
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
                                </div>
                                <div style="float:left;width:32%;">
                                    <div><label class="control-label">Payment Method</label></div>
                                    <div>
                                        <select class="form-control shadow-z1" name="PaymentMethod" id="PaymentMethod">
                                            <option value="0">Select Payment Method</option>          
                                            <option <?php if($RsselectInvoice['PaymentMethod']=="Cash"){?> selected="selected" <?php }?>>Cash</option>          
                                            <option <?php if($RsselectInvoice['PaymentMethod']=="Cheque"){?> selected="selected" <?php }?>>Cheque</option>          
                                            <option <?php if($RsselectInvoice['PaymentMethod']=="Net Banking"){?> selected="selected" <?php }?>>Net Banking</option>          
                                            <option <?php if($RsselectInvoice['PaymentMethod']=="Debit Memo"){?> selected="selected" <?php }?>>Debit Memo</option>          
                                        </select>      
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                                <div id="divSupplierInfo">
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
                                            <th class="text-left" id="AddRowButton" style="line-height: 22px; font-size: 36px;cursor:pointer;">+</th>
                                            <th class="text-left">No.</th>
                                            <th class="text-left">Company Name</th>
                                            <th class="text-left">Model/Item No.</th>
                                            <th class="text-left">Color</th>
                                            <th class="text-left">Size</th>
                                            <th class="text-right">Quantity</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                                        {
                                            $selectInvoiceChild = "SELECT * FROM `master_purchase_order_child` WHERE PurchaseOrderID='".$_REQUEST['id']."'";
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
                                                        <tr id="<?php echo $cnt;?>" class="<?php echo $RsselectInvoiceChild['PurchaseOrderChildID'];?>">
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
                                                                            if($RsselectComapnyName['CompanyID']==$RsselectInvoiceChild['CompanyName'])
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
                                                                                                $selectComapny = "SELECT * from master_purchase_order_child WHERE CompanyName='".$RsselectInvoiceChild['CompanyName']."' GROUP BY ModelNumber  ORDER BY ModelNumber ASC";
                                                                                                $ObjselectCategory = mysqli_query($selectComapny);
                                                                                                $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
                                                                                                if($NumselectCategory>0)
                                                                                                {
                                                                                                    while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                                                                                                    {
                                                                                                        if($RsselectInvoiceChild['ModelNumber']==$RsselectCategory['ModelNumber'])
                                                                                                        {
                                                                                                            $selected = 'selected="selected"';                                                                                
                                                                                                        }
                                                                                                        else
                                                                                                        {
                                                                                                            $selected = '';
                                                                                                        }
                                                                                                        ?>
                                                                                                            <option <?php echo $selected;?> value="<?php echo $RsselectCategory['ModelNumber'];?>"><?php echo $RsselectCategory['ModelNumber'];?></option>
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
                                                                                                        $selectComapny = "select * from master_purchase_order_child where Active='1' AND ModelNumber = '".$RsselectInvoiceChild['ModelNumber']."' AND CompanyName = '".$RsselectInvoiceChild['CompanyName']."' group by Color Order By Color";
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
                                                                                                        $selectComapny = "select * from master_purchase_order_child where Active='1' AND Color = '".$RsselectInvoiceChild['Color']."' AND ModelNumber = '".$RsselectInvoiceChild['ModelNumber']."' AND CompanyName = '".$RsselectInvoiceChild['CompanyName']."' group by Size Order By Size";
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
                                                                                            $selectComapny = "SELECT * from master_purchase_order_child WHERE CompanyName = '".$RsselectInvoiceChild['CompanyName']."' AND Type='spare' AND Active='1' group by ItemName Order By ItemName ASC";
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
                                                                                <td class="text-right">
                                                                                    <input type="text" class="text-right form-control shadow-z1 Quantity" name="Quantity[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]" value="<?php echo $RsselectInvoiceChild['Quantity'];?>">
                                                                                </td>  
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                                <td class="text-right">
                                                                                    <input type="text" class="text-right form-control shadow-z1 Quantity" name="Quantity[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]" value="<?php echo $RsselectInvoiceChild['Quantity'];?>">
                                                                                </td>
                                                                            <?php
                                                                        }
                                                                    }
                                                            ?>
                                                            <?php
                                                                $TotalPrice = floatval($TotalPrice) + floatval($RsselectInvoiceChild['Quantity']);
                                                            ?>
                                                            <input type="hidden" name="hidType[<?php echo $RsselectInvoiceChild['InvoiceChildID'];?>]" class="hidType" value="cycle">
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
                                    <input type="text" value="<?php echo $TotalPrice;?>" readonly="readonly" class="form-control text-right input-sm" name="LastTotalPrice" id="LastTotalPrice">
                                </div>
                                <div style="float:right;padding-right:10px;padding-top:5px;">Total Quantity</div>
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
                                        $InvoiceButtonName = "Edit Purchase Order";
                                    }
                                    else
                                    {
                                        $InvoiceButtonName = "Add Purchase Order";
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
            $("#divFrameMain input").each(function(index) {
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
            var RowID = $('#divFrameMain').attr('rel');
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
            $("#divFrameMain input").each(function(index) {
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
                    $('.Quantity').each(function(index) {
                        TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                    });
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
                    }
                    else
                    {
                        var thisobj = $(this);
                        $.ajax({
                            url: 'ajax.php?filter=removeCycleInvoiceChildRow&PurchaseOrderChildID='+$(this).parents('tr').attr('class'),
                            success: function(html) 
                            {
                                thisobj.parents('tr').remove();
                            }
                        });    
                    }
                    
                    var TotalPrice = 0;
                    $('.Quantity').each(function(index) {
                        TotalPrice = parseFloat(TotalPrice) + parseFloat($(this).val());
                    });
                    $('#LastTotalPrice').val(TotalPrice);
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
                            url: 'ajax.php?filter=getCyclePORow&Addrow='+$('#Addrow').attr('rel')+'&action=edit',
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
                            url: 'ajax.php?filter=getCyclePORow&Addrow='+$('#Addrow').attr('rel'),
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
                            url: 'ajax.php?filter=getSparePORow&Addrow='+$('#Addrow').attr('rel')+'&action=edit',
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
                            url: 'ajax.php?filter=getSparePORow&Addrow='+$('#Addrow').attr('rel'),
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
        $('body').on('change', '.Quantity', function() {
            var thisobj = $(this);   
            var LastTotal = 0;
            $(".Quantity").each(function( index ) {     
                if($(this).val()>0)
                {
                    LastTotal = parseInt(LastTotal) + parseInt($(this).val());    
                }
            });
            $('#LastTotalPrice').val(LastTotal);
            $('#HidLastTotalPrice').val(LastTotal);     
            
        }); 
        $('body').on('change', '.Price', function() {
            var thisobj = $(this);   
            var Price = thisobj.parents('tr').find('.Price').val();
            var Quantity = thisobj.parents('tr').find('.Quantity').val();
            var TotalPrice = parseFloat(Price) * parseFloat(Quantity); 
            thisobj.parents('tr').find('.TotalPrice').val(TotalPrice);
        });
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
            if(SupplierID==0)
            {
                $("#SupplierID").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#SupplierID').attr('style', 'border:1px solid #ccc !important');
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
            $(".ComapanyName,.ModalName,.Color,.Size,.Quantity,.ItemName").each(function(index) {
                if($(this).val()=="" || $(this).val()=="0")
                {        
                    $(this).attr('style','border: 1px solid red');
                    Error = true;
                }
                else
                {
                    $(this).attr('style','border: 0px solid red');
                }
            });
            //alert(Error);
            if(Error) 
            {
                return false;
            }
        });
    });
</script>
</body></html>