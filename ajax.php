<?php
    include("config.php");
    $filter = $_REQUEST['filter'];
    switch($filter)
    {
        case "GetModalNo":
        {
            GetModalNo();   
            break;         
        }
        case "GetInvoiceModalNo":
        {
            GetInvoiceModalNo();   
            break;         
        }
        case "GetInvoiceItemName":
        {
            GetInvoiceItemName();   
            break;         
        }
        case "GetColor":
        {
            GetColor();   
            break;         
        }
        case "GetInvoiceColor":
        {
            GetInvoiceColor();   
            break;         
        }
        case "GetSize":
        {
            GetSize();   
            break;         
        }
        case "GetInvoiceSize":
        {
            GetInvoiceSize();   
            break;         
        }
        case "GetTax":
        {
            GetTax();   
            break;         
        }
        case "GetTaxprice":
        {
            GetTaxprice();   
            break;         
        }
        case "GetSupplierInfo":
        {
            GetSupplierInfo();   
            break;         
        }
        case "GetMerchantInvoiceInfo":
        {
            GetMerchantInvoiceInfo();   
            break;         
        }
        case "GetPrice":
        {
            GetPrice();   
            break;         
        }
        case "GetSpareQuantity":
        {
            GetSpareQuantity();   
            break;         
        }
        case "getCycleInvoiceRow":
        {
            getCycleInvoiceRow();   
            break;         
        }
        case "getCyclePORow":
        {
            getCyclePORow();   
            break;         
        }
        case "getCycleMerchantInvoiceRow":
        {
            getCycleMerchantInvoiceRow();   
            break;         
        }
        case "getSpareInvoiceRow":
        {
            getSpareInvoiceRow();   
            break;         
        }
        case "getSparePORow":
        {
            getSparePORow();   
            break;         
        }
        case "getSpareMerchantInvoiceRow":
        {
            getSpareMerchantInvoiceRow();   
            break;         
        }
        case "GetQuantity":
        {
            GetQuantity();   
            break;         
        } 
        case "GetItemName":
        {
            GetItemName();   
            break;         
        }
        case "RemoveInventoryChildRow":
        {
            RemoveInventoryChildRow();   
            break;         
        }
        case "GetWarehouseData":
        {
            GetWarehouseData();   
            break;         
        }
        case "GetWarehouseDataDashBoard":
        {
            GetWarehouseDataDashBoard();   
            break;         
        }
        case "removeCycleInvoiceChildRow":
        {
            removeCycleInvoiceChildRow();   
            break;         
        }
        case "removeCyclePOChildRow":
        {
            removeCyclePOChildRow();   
            break;         
        }
        case "InsertVisiter":
        {
            InsertVisiter();   
            break;         
        }
        case "GetMerchantInfo":
        {
            GetMerchantInfo();   
            break;         
        }
        case "GetMerchantInvoiceForm":
        {
            GetMerchantInvoiceForm();   
            break;         
        }
        case "SendRetailEmailInvoice":
        {
            SendRetailEmailInvoice();   
            break;         
        }
    }
	
    function GetModalNo()
    {                        
        ?>
            <option value="0">Select Modal Number</option>
        <?php
        $selectComapny = "select * from master_products where Active='1' AND CompanyID = '".$_REQUEST['CompanyName']."' group by ModalName Order by ModalName ASC";
        $ObjselectCategory = mysqli_query($conn, $selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value="<?php echo $RsselectCategory['ModalName'];?>"><?php echo $RsselectCategory['ModalName'];?></option>
                <?php                
            }
        }
        exit;
    }
    function GetInvoiceModalNo()
    {                        
        ?>
            <option value="0">Select Modal Number</option>
        <?php
        $selectComapny = "SELECT * from master_inventory_child WHERE CompanyName = '".$_REQUEST['CompanyName']."' AND Type='cycle' AND Active='1' group by ModalName Order By ModalName ASC";
        $ObjselectCategory = mysqli_query($conn, $selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value="<?php echo $RsselectCategory['ModalName'];?>"><?php echo $RsselectCategory['ModalName'];?></option>
                <?php                
            }
        }
        exit;
    }    
    function GetInvoiceItemName()
    {                        
        ?>
            <option value="0">Select Item Name</option>
        <?php
        $selectComapny = "select * from master_inventory_child where Active='1' AND CompanyName = '".$_REQUEST['CompanyName']."' AND Type='spare' group by ItemName Order By ItemName ASC";
        $ObjselectCategory = mysqli_query($conn, $selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value="<?php echo $RsselectCategory['ItemName'];?>"><?php echo $RsselectCategory['ItemName'];?></option>
                <?php                
            }
        }
        exit;
    }  
    function GetColor()
    {
        ?>
            <option value="0">select Color</option>
        <?php
        $selectComapny = "Select * from master_products where Active='1' AND ModalName = '".$_REQUEST['ModalName']."' AND CompanyID = '".$_REQUEST['CompanyName']."' group by Color Order By Color";
        $ObjselectCategory = mysqli_query($conn, $selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value="<?php echo $RsselectCategory['Color'];?>"><?php echo $RsselectCategory['Color'];?></option>
                <?php                
            }
        }
        exit;    
    }
    function GetInvoiceColor()
    {
        ?>
            <option value="0">select Color</option>
        <?php
        $selectComapny = "select * from master_inventory_child where Active='1' AND ModalName = '".$_REQUEST['ModalName']."' AND CompanyName = '".$_REQUEST['CompanyName']."' group by Color Order By Color";
        $ObjselectCategory = mysqli_query($conn,$selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value="<?php echo $RsselectCategory['Color'];?>"><?php echo $RsselectCategory['Color'];?></option>
                <?php                
            }
        }
        exit;    
    }
    function GetSize()
    {     
        ?>
            <option value="0">select Size</option>
        <?php
        $selectComapny = "select * from master_products where Active='1' AND Color = '".$_REQUEST['Color']."' AND ModalName = '".$_REQUEST['ModalName']."' AND CompanyID = '".$_REQUEST['CompanyName']."' group by Size Order by Size";
        //echo $selectComapny;
        $ObjselectCategory = mysqli_query($conn,$selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);          
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value='<?php echo $RsselectCategory['Size'];?>'><?php echo $RsselectCategory['Size'];?></option>
                <?php                
            }
        }
        exit;    
    }
    function GetInvoiceSize()
    {
        ?>
            <option value="0">select Size</option>
        <?php
        $selectComapny = "Select * from master_inventory_child where Active='1' AND Color = '".$_REQUEST['Color']."' AND ModalName = '".$_REQUEST['ModalName']."' AND CompanyName = '".$_REQUEST['CompanyName']."' group by Size Order By Size";
        $ObjselectCategory = mysqli_query($conn,$selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option value='<?php echo $RsselectCategory['Size'];?>'><?php echo $RsselectCategory['Size'];?></option>
                <?php                
            }
        }
        exit;    
    }    
    function GetQuantity()
    {
        ?>
            <option value="0">Select Quantity</option>
        <?php
        
        $InvoiceWhere = "";
        if($_REQUEST['CompanyName']!="" && $_REQUEST['CompanyName']>0)
        {
            $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.CompanyID='".$_REQUEST['CompanyName']."'";
        }
        if($_REQUEST['ModalName']!="" && $_REQUEST['ModalName']!="0")
        {
            $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.ModelNumber='".$_REQUEST['ModalName']."'";
        }
        if($_REQUEST['Color']!="" && $_REQUEST['Color']!="0")
        {
            $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.Color='".$_REQUEST['Color']."'";
        }
        if($_REQUEST['Size']!="" && $_REQUEST['Size']!="0")
        {
            $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.Size='".$_REQUEST['Size']."'";
        }
        
        $InventoryWhere = "";
        if($_REQUEST['CompanyName']!="" && $_REQUEST['CompanyName']>0)
        {
            $InventoryWhere = $InventoryWhere." AND master_inventory_child.CompanyName='".$_REQUEST['CompanyName']."'";
        }
        if($_REQUEST['ModalName']!="" && $_REQUEST['ModalName']!="0")
        {
            $InventoryWhere = $InventoryWhere." AND master_inventory_child.ModalName='".$_REQUEST['ModalName']."'";
        }
        if($_REQUEST['Color']!="" && $_REQUEST['Color']!="0")
        {
            $InventoryWhere = $InventoryWhere." AND master_inventory_child.Color='".$_REQUEST['Color']."'";
        }
        if($_REQUEST['Size']!="" && $_REQUEST['Size']!="0")
        {
            $InventoryWhere = $InventoryWhere." AND master_inventory_child.Size='".$_REQUEST['Size']."'";
        }
        
        $selectWareHouseInvoice = "SELECT SUM(master_invoice_child.Quantity) as Quantity from master_invoice_child WHERE  master_invoice_child.Active='1' AND master_invoice_child.Active='1' AND master_invoice_child.Type='cycle' $InvoiceWhere GROUP BY CompanyID";
        //echo $selectWareHouseInvoice;
        $ObjselectWareHouseInvoice = mysqli_query($conn,$selectWareHouseInvoice);
        $RSselectWareHouseInvoice = mysqli_fetch_array($ObjselectWareHouseInvoice);
        
        $selectWareHouseInventory = "SELECT SUM(master_inventory_child.OrgQuantity) as OrgQuantity from master_inventory_child WHERE  master_inventory_child.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='cycle' $InventoryWhere  GROUP BY CompanyName";
        $ObjselectWareHouseInventory = mysqli_query($conn,$selectWareHouseInventory);
        $RSselectWareHouseInventory = mysqli_fetch_array($ObjselectWareHouseInventory);
                    
        $MyQuantity = intval($RSselectWareHouseInventory['OrgQuantity']) -  intval($RSselectWareHouseInvoice['Quantity']);
        
        for($i=1; $i<=$MyQuantity;$i++)
        {
            ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php            
        }
    }           
    function GetSpareQuantity()
    {
        ?>
            <option value="0">Select Quantity</option>
        <?php
        $SelectPrice = 'SELECT SUM(Quantity) as Quantity from master_inventory_child WHERE ItemName = "'.$_REQUEST['ItemName'].'" AND CompanyName = "'.$_REQUEST['CompanyName'].'" AND Active="1"';
        $objSelectPrice = mysqli_query($conn,$SelectPrice);
        $RsSelectPrice = mysqli_fetch_array($objSelectPrice);        
        
        for($i=1; $i<=$RsSelectPrice['Quantity'];$i++)
        {
            ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php            
        }
    }
    function GetTax()
    {
        $selectTax = "SELECT * FROM `master_products` where Active='1' AND Size = '".$_REQUEST['Size']."' AND Color = '".$_REQUEST['Color']."' AND ModalNo = '".$_REQUEST['ModalID']."' AND Company = '".$_REQUEST['CompanyID']."'";
        $ObjselectTax = mysqli_query($conn,$selectTax);
        $NumselectTax = mysqli_num_rows($ObjselectTax);
        if($NumselectTax>0)
        {
            $RsselectTax = mysqli_fetch_array($ObjselectTax);
            if($RsselectTax['Tax']!="")
            {
                $Tax = "";
                $selectTax = "SELECT * FROM `master_tax` WHERE TaxID IN (".$RsselectTax['Tax'].")";
                $ObjselectTax = mysqli_query($conn,$selectTax);
                while($RsselectTax = mysqli_fetch_array($ObjselectTax))
                {
                    $Tax = $Tax.$RsselectTax['TaxPer'].",";    
                }
                $Tax = substr($Tax,0,-1);
                $Percentage = explode(",",$Tax);
                echo array_sum($Percentage);        
            }
        }
    }
    function GetSupplierInfo()
    {
        $selectSupplier = "SELECT * FROM `master_supplier` WHERE SupplierID='".$_REQUEST['SupplierID']."'";
        $ObjselectSupplier = mysqli_query($selectSupplier);
        $RsselectSupplier = mysqli_fetch_array($ObjselectSupplier);
        ?>
            <?php 
                if($RsselectSupplier['CompanyName']!="")
                {
                    ?>
                        <label class="control-label"><?php echo $RsselectSupplier['CompanyName'];?></label><br />
                    <?php
                }
                if($RsselectSupplier['CompanyAddress']!="")
                {
                    ?>
                        <label class="control-label"><?php echo $RsselectSupplier['CompanyAddress'];?></label><br />
                    <?php
                }
                if($RsselectSupplier['CompanyCity']!="")
                {
                    if($RsselectSupplier['CompanyState']!="")
                    {
                        $CompanyState = ", ".$RsselectSupplier['CompanyState'];
                    }
                    else
                    {
                        $CompanyState = "";
                    }
                    if($RsselectSupplier['CompanyPinCode']!="")
                    {
                        $CompanyPinCode = "-".$RsselectSupplier['CompanyPinCode'];
                    }
                    else
                    {
                        $CompanyPinCode = "";
                    }
                    ?>
                        <label class="control-label"><?php echo $RsselectSupplier['CompanyCity'].$CompanyState.$CompanyPinCode;?></label><br />
                    <?php
                }
                if($RsselectSupplier['Email']!="")
                {
                    ?>
                        <label class="control-label">Email:</label>&nbsp;<?php echo $RsselectSupplier['Email'];?><br />
                    <?php
                }
                if($RsselectSupplier['MobileNumber']!="")
                {
                    ?>
                        <label class="control-label">Mobile Number:</label>&nbsp;<?php echo $RsselectSupplier['MobileNumber'];?><br />
                    <?php
                }
                if($RsselectSupplier['OfficeNumber']!="")
                {
                    ?>
                        <label class="control-label">Office Number:</label>&nbsp;<?php echo $RsselectSupplier['OfficeNumber'];?><br />
                    <?php
                }
                
                
                
            ?>
        <?php
    }              
    function GetMerchantInvoiceInfo()
    {
        $selectSupplier = "SELECT * FROM `master_merchant` WHERE MerchantID='".$_REQUEST['MerchantID']."'";
        $ObjselectSupplier = mysqli_query($conn,$selectSupplier);
        $RsselectSupplier = mysqli_fetch_array($ObjselectSupplier);
        ?>
            <?php 
                if($RsselectSupplier['FirstName']!="")
                {
                    ?>
                        <label class="control-label"><?php echo $RsselectSupplier['FirstName']." ".$RsselectSupplier['LastName'];?></label><br />
                    <?php
                }
                if($RsselectSupplier['BillingAddress']!="")
                {
                    ?>
                        <label class="control-label"><?php echo $RsselectSupplier['BillingAddress'];?></label><br />
                    <?php
                }
                if($RsselectSupplier['BillingCity']!="")
                {
                    if($RsselectSupplier['BillingState']!="")
                    {
                        $CompanyState = ", ".$RsselectSupplier['BillingState'];
                    }
                    else
                    {
                        $CompanyState = "";
                    }
                    if($RsselectSupplier['BillingPinCode']!="")
                    {
                        $CompanyPinCode = "-".$RsselectSupplier['BillingPinCode'];
                    }
                    else
                    {
                        $CompanyPinCode = "";
                    }
                    ?>
                        <label class="control-label"><?php echo $RsselectSupplier['BillingCity'].$CompanyState.$CompanyPinCode;?></label><br />
                    <?php
                }
                if($RsselectSupplier['Email']!="")
                {
                    ?>
                        <label class="control-label">Email:</label>&nbsp;<?php echo $RsselectSupplier['Email'];?><br />
                    <?php
                }
                if($RsselectSupplier['MobileNumber']!="")
                {
                    ?>
                        <label class="control-label">Mobile Number:</label>&nbsp;<?php echo $RsselectSupplier['MobileNumber'];?><br />
                    <?php
                }
                if($RsselectSupplier['OfficeNumber']!="")
                {
                    ?>
                        <label class="control-label">Office Number:</label>&nbsp;<?php echo $RsselectSupplier['OfficeNumber'];?><br />
                    <?php
                }
                
                
                
            ?>
        <?php
    }
    function GetPrice()
    {
        if($_REQUEST['HidType']=="cycle")
        {
            $SelectPrice = "SELECT CycleTotalPrice from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Type = '".$_REQUEST['HidType']."' AND Size = '".mysqli_real_escape_string($_REQUEST['Size'])."' AND Color='".$_REQUEST['Color']."' AND ModalName = '".$_REQUEST['ModalName']."' AND CompanyName = '".$_REQUEST['CompanyName']."' AND master_inventory_child.Active='1'";
            
        }
        else
        {
            $SelectPrice = "SELECT CycleTotalPrice from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Type = '".$_REQUEST['HidType']."' AND ItemName = '".$_REQUEST['ItemName']."' AND CompanyName = '".$_REQUEST['CompanyName']."' AND master_inventory_child.Active='1'";    
        }
        //echo $SelectPrice;
        $objSelectPrice = mysqli_query($conn,$SelectPrice);
        $RsSelectPrice = mysqli_fetch_array($objSelectPrice);
        $Price = floatval($RsSelectPrice['CycleTotalPrice']);
        $TotalPrice = floatval($RsSelectPrice['CycleTotalPrice']) * floatval($_REQUEST['Quantity']);
        echo number_format($Price,2,".","")."---".number_format($TotalPrice,2,".","");
    }
    function getCycleInvoiceRow()
    {
        if($_REQUEST['action']=="edit")
        {
            ?>
            <tr id="<?php echo $_REQUEST['Addrow'];?>">
                <td class="text-left">
                    <div class="RemoveInvoice btn btn-sm btn-danger">
                        <em class="fa fa-trash"></em>
                    </div>
                </td>
                <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ComapanyName" name="AddComapanyName[]">
                        <option value="0">Select Company Name</option>
                        <?php
                            $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                            $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                            while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                            {
                                ?>
                                    <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                <?php        
                            }
                        ?>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ModalName" name="AddModalName[]">
                        <option value="0">Select Modal Name</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Color" name="AddColor[]">
                        <option value="0">Select Color</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Size" name="AddSize[]">
                        <option value="0">Select Size</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Quantity" name="AddQuantity[]"> 
                        <option value="0">Select Quantity</option>
                    </select>
                    <div class="Framehiddendiv"></div>
                </td>
                <td class="text-left">
                    <input type="button" name="AddFrameNo[]" rel="<?php echo $_REQUEST['Addrow'];?>" value="Select" class="AddFrameNo btn btn-primary btn-large">
                </td>
                <td class="text-left">
                    <input type="text" class="text-right form-control shadow-z1 Price" name="AddPrice[]">
                </td>
                <td class="text-left">
                    <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="AddTotalPrice[]" value="0">
                </td>
                <input type="hidden" name="AddhidType[]" class="hidType" value="cycle">
            </tr>                                                     
            <?php            
        }
        else
        {
            ?>
            <tr id="<?php echo $_REQUEST['Addrow'];?>">
                <td class="text-left">
                    <div class="RemoveInvoice btn btn-sm btn-danger">
                        <em class="fa fa-trash"></em>
                    </div>
                </td>
                <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Company Name</option>
                        <?php
                            $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                            $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                            while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                            {
                                ?>
                                    <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                <?php        
                            }
                        ?>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ModalName" name="ModalName[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Modal Name</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Color" name="Color[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Color</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Size" name="Size[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Size</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Quantity</option>
                    </select>
                    <div class="Framehiddendiv"></div>
                </td>
                <td class="text-left">
                    <input type="button" name="FrameNo[<?php echo $_REQUEST['Addrow'];?>]" rel="<?php echo $_REQUEST['Addrow'];?>" value="Select" class="FrameNo btn btn-primary btn-large">
                </td>
                <td class="text-left">
                    <input type="text" class="text-right form-control shadow-z1 Price" name="Price[<?php echo $_REQUEST['Addrow'];?>]">
                </td>
                <td class="text-left">
                    <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="TotalPrice[<?php echo $_REQUEST['Addrow'];?>]" value="0">
                </td>
                <input type="hidden" name="hidType[<?php echo $_REQUEST['Addrow'];?>]" class="hidType" value="cycle">
            </tr>                                                     
            <?php
        }
    }
    function getCyclePORow()
    {
        if($_REQUEST['action']=="edit")
        {
            ?>
            <tr id="<?php echo $_REQUEST['Addrow'];?>">
                <td class="text-left">
                    <div class="RemoveInvoice btn btn-sm btn-danger">
                        <em class="fa fa-trash"></em>
                    </div>
                </td>
                <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ComapanyName" name="AddComapanyName[]">
                        <option value="0">Select Company Name</option>
                        <?php
                            $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                            $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                            while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))

                            {
                                ?>
                                    <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                <?php        
                            }
                        ?>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ModalName" name="AddModalName[]">
                        <option value="0">Select Modal Name</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Color" name="AddColor[]">
                        <option value="0">Select Color</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Size" name="AddSize[]">
                        <option value="0">Select Size</option>
                    </select>
                </td>
                <td class="text-left">
                    <input class="form-control shadow-z1 Quantity" type="text" name="AddQuantity[]">
                </td>
                <input type="hidden" name="AddhidType[]" class="hidType" value="cycle">
            </tr>                                                     
            <?php            
        }
        else
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                <td class="text-left">
                    <div class="RemoveInvoice btn btn-sm btn-danger">
                        <em class="fa fa-trash"></em>
                    </div>
                </td>
                <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Company Name</option>
                        <?php
                            $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                            $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                            while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                            {
                                ?>
                                    <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                <?php        
                            }
                        ?>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ModalName" name="ModalName[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Modal Name</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Color" name="Color[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Color</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Size" name="Size[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Size</option>
                    </select>
                </td>
                <td class="text-left">
                    <input class="form-control shadow-z1 Quantity" type="text" name="Quantity[<?php echo $_REQUEST['Addrow'];?>]">
                </td>
                <input type="hidden" name="hidType[<?php echo $_REQUEST['Addrow'];?>]" class="hidType" value="cycle">
            </tr>                                                     
            <?php
        }
    }
    function getCycleMerchantInvoiceRow()
    {
        if($_REQUEST['action']=="edit")
        {
            ?>
            <tr id="<?php echo $_REQUEST['Addrow'];?>">
                <td class="text-left">
                    <div class="RemoveInvoice btn btn-sm btn-danger">
                        <em class="fa fa-trash"></em>
                    </div>
                </td>
                <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ComapanyName" name="AddComapanyName[]">
                        <option value="0">Select Company Name</option>
                        <?php
                            $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                            $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                            while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                            {
                                ?>
                                    <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                <?php        
                            }
                        ?>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ModalName" name="AddModalName[]">
                        <option value="0">Select Modal Name</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Color" name="AddColor[]">
                        <option value="0">Select Color</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Size" name="AddSize[]">
                        <option value="0">Select Size</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Quantity" name="AddQuantity[]">
                        <option value="0">Select Quantity</option>
                    </select>
                    <div class="Framehiddendiv"></div>
                </td>
                <td class="text-left">
                    <input type="text" class="text-right form-control shadow-z1 Price" name="AddPrice[]">
                </td>
                <td class="text-left">
                    <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="AddTotalPrice[]" value="0">
                </td>
                <input type="hidden" name="AddhidType[]" class="hidType" value="cycle">
            </tr>                                                     
            <?php            
        }
        else
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                <td class="text-left">
                    <div class="RemoveInvoice btn btn-sm btn-danger">
                        <em class="fa fa-trash"></em>
                    </div>
                </td>
                <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Company Name</option>
                        <?php
                            $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName";
                            $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                            while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                            {
                                ?>
                                    <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                <?php        
                            }
                        ?>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 ModalName" name="ModalName[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Modal Name</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Color" name="Color[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Color</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Size" name="Size[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Size</option>
                    </select>
                </td>
                <td class="text-left">
                    <select class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $_REQUEST['Addrow'];?>]">
                        <option value="0">Select Quantity</option>
                    </select>
                    <div class="Framehiddendiv"></div>
                </td>
                <td class="text-left">
                    <input type="text" class="text-right form-control shadow-z1 Price" name="Price[<?php echo $_REQUEST['Addrow'];?>]">
                </td>
                <td class="text-left">
                    <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="TotalPrice[<?php echo $_REQUEST['Addrow'];?>]" value="0">
                </td>
                <input type="hidden" name="hidType[<?php echo $_REQUEST['Addrow'];?>]" class="hidType" value="cycle">
            </tr>                                                     
            <?php
        }
    }
    function getSpareInvoiceRow()
    {
        if($_REQUEST['action']=="edit")
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                    <td class="text-left">
                        <div class="RemoveInvoice btn btn-sm btn-danger">
                            <em class="fa fa-trash"></em>
                        </div>
                    </td>
                    <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 ComapanyName" name="AddComapanyName[]">
                            <option value="0">Select Company Name</option>
                            <?php
                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order by CompanyName";
                                $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                {
                                    ?>
                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                    <?php        
                                }
                            ?>
                        </select>
                    </td>
                    <td class="text-left" colspan="3">
                        <select class="form-control shadow-z1 ItemName" name="AddItemName[]">
                            <option value="0">Select Item Name</option>
                        </select>
                    </td>
                    <td class="text-left" colspan="2">
                        <select class="form-control shadow-z1 Quantity" name="AddQuantity[]">
                            <option value="0">Select Quantity</option>
                        </select>
                    </td>
                    <td class="text-left">
                        <input type="text" class="text-right form-control shadow-z1 Price" name="AddPrice[]">
                    </td>
                    <td class="text-left">
                        <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="AddTotalPrice[]" value="0">
                    </td>
                    <input type="hidden" name="AddhidType[]" class="hidType" value="spare">
                </tr>                                                     
            <?php                        
        }
        else
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                    <td class="text-left">
                        <div class="RemoveInvoice btn btn-sm btn-danger">
                            <em class="fa fa-trash"></em>
                        </div>
                    </td>
                    <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Company Name</option>
                            <?php
                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order by CompanyName";
                                $ObjselectComapnyName = mysqli_query($conn,$selectComapnyName);
                                
								while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                {
                                    ?>
                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                    <?php        
                                }
                            ?>
                        </select>
                    </td>
                    <td class="text-left" colspan="3">
                        <select class="form-control shadow-z1 ItemName" name="ItemName[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Item Name</option>
                        </select>
                    </td>
                    <td class="text-left" colspan="2">
                        <select class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Quantity</option>
                        </select>
                    </td>
                    <td class="text-left">
                        <input type="text" class="text-right form-control shadow-z1 Price" name="Price[<?php echo $_REQUEST['Addrow'];?>]">
                    </td>
                    <td class="text-left">
                        <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="TotalPrice[<?php echo $_REQUEST['Addrow'];?>]" value="0">
                    </td>
                    <input type="hidden" name="hidType[<?php echo $_REQUEST['Addrow'];?>]" class="hidType" value="spare">
                </tr>                                                     
            <?php
        }
    }  
    function getSparePORow()
    {
        if($_REQUEST['action']=="edit")
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                    <td class="text-left">
                        <div class="RemoveInvoice btn btn-sm btn-danger">
                            <em class="fa fa-trash"></em>
                        </div>
                    </td>
                    <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 ComapanyName" name="AddComapanyName[]">
                            <option value="0">Select Company Name</option>
                            <?php
                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order by CompanyName";
                                $ObjselectComapnyName = mysqli_query($conn, $selectComapnyName);
                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                {
                                    ?>
                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                    <?php        
                                }
                            ?>
                        </select>
                    </td>
                    <td class="text-left" colspan="3">
                        <select class="form-control shadow-z1 ItemName" name="AddItemName[]">
                            <option value="0">Select Item Name</option>
                        </select>
                    </td>
                    <td class="text-left" colspan="2">
                        <input type="text" class="form-control shadow-z1 Quantity" name="AddQuantity[]">
                    </td>
                    <input type="hidden" name="AddhidType[]" class="hidType" value="spare">
                </tr>                                                     
            <?php                        
        }
        else
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                    <td class="text-left">
                        <div class="RemoveInvoice btn btn-sm btn-danger">
                            <em class="fa fa-trash"></em>
                        </div>
                    </td>
                    <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Company Name</option>
                            <?php
                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order by CompanyName";
                                $ObjselectComapnyName = mysqli_query($conn, $selectComapnyName);
                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                {
                                    ?>
                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                    <?php        
                                }
                            ?>
                        </select>
                    </td>
                    
                    <td class="text-left" colspan="3">
                        <select class="form-control shadow-z1 ItemName" name="ItemName[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Item Name</option>
                        </select>
                    </td>
                    <td class="text-left" colspan="2">
                        <input type="text" class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $_REQUEST['Addrow'];?>]">
                    </td>
                    <input type="hidden" name="hidType[<?php echo $_REQUEST['Addrow'];?>]" class="hidType" value="spare">
                </tr>                                                     
            <?php
        }
    }  
    function getSpareMerchantInvoiceRow()
    {
        if($_REQUEST['action']=="edit")
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                    <td class="text-left">
                        <div class="RemoveInvoice btn btn-sm btn-danger">
                            <em class="fa fa-trash"></em>
                        </div>
                    </td>
                    <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 ComapanyName" name="AddComapanyName[]">
                            <option value="0">Select Company Name</option>
                            <?php
                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order by CompanyName";
                                $ObjselectComapnyName = mysqli_query($conn, $selectComapnyName);
                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                {
                                    ?>
                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                    <?php        
                                }
                            ?>
                        </select>
                    </td>
                    <td class="text-left" colspan="3">
                        <select class="form-control shadow-z1 ItemName" name="AddItemName[]">
                            <option value="0">Select Item Name</option>
                        </select>
                    </td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 Quantity" name="AddQuantity[]">
                            <option value="0">Select Quantity</option>
                        </select>
                    </td>
                    <td class="text-left">
                        <input type="text" class="text-right form-control shadow-z1 Price" name="AddPrice[]">
                    </td>
                    <td class="text-left">
                        <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="AddTotalPrice[]" value="0">
                    </td>
                    <input type="hidden" name="AddhidType[]" class="hidType" value="spare">
                </tr>                                                     
            <?php                        
        }
        else
        {
            ?>
                <tr id="<?php echo $_REQUEST['Addrow'];?>">
                    <td class="text-left">
                        <div class="RemoveInvoice btn btn-sm btn-danger">
                            <em class="fa fa-trash"></em>
                        </div>
                    </td>
                    <td class="text-left"><?php echo intval($_REQUEST['Addrow']);?></td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 ComapanyName" name="ComapanyName[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Company Name</option>
                            <?php
                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order by CompanyName";
                                $ObjselectComapnyName = mysqli_query($conn, $selectComapnyName);
                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                {
                                    ?>
                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                    <?php        
                                }
                            ?>
                        </select>
                    </td>
                    <td class="text-left" colspan="3">
                        <select class="form-control shadow-z1 ItemName" name="ItemName[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Item Name</option>
                        </select>
                    </td>
                    <td class="text-left">
                        <select class="form-control shadow-z1 Quantity" name="Quantity[<?php echo $_REQUEST['Addrow'];?>]">
                            <option value="0">Select Quantity</option>
                        </select>
                    </td>
                    <td class="text-left">
                        <input type="text" class="text-right form-control shadow-z1 Price" name="Price[<?php echo $_REQUEST['Addrow'];?>]">
                    </td>
                    <td class="text-left">
                        <input type="text" readonly="readonly" class="text-right form-control shadow-z1 TotalPrice" name="TotalPrice[<?php echo $_REQUEST['Addrow'];?>]" value="0">
                    </td>
                    <input type="hidden" name="hidType[<?php echo $_REQUEST['Addrow'];?>]" class="hidType" value="spare">
                </tr>                                                     
            <?php
        }
    }
    function GetItemName()
    {                        
        ?>
            <option value="0">Select Item Name</option>
        <?php
        $selectComapny = "select * from master_spare_products where Active='1' AND CompanyID = '".$_REQUEST['CompanyName']."' Order By SpareItemName ASC";
        $ObjselectCategory = mysqli_query($conn, $selectComapny);
        $NumselectCategory = mysqli_num_rows($ObjselectCategory);   
        if($NumselectCategory>0)
        {
            while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
            {
                ?>
                    <option><?php echo $RsselectCategory['SpareItemName'];?></option>
                <?php                
            }
        }
        exit;
    }    
    function RemoveInventoryChildRow()
    {
        $RemoveInventoryChild = "DELETE FROM `master_inventory_child` WHERE `InventoryChildID` = '".$_REQUEST['InventoryChildID']."'";
        mysqli_query($conn, $RemoveInventoryChild);
    }
    function GetWarehouseData()
    {
        ?>
            <script src="./js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                     $('#example').DataTable({
                         "sPaginationType": "full_numbers"
                     });
                });
            </script>
        <?php
        if($_REQUEST['Type']=="cycle")
        {
            //Print_r($_REQUEST);
            $where = "";
            if($_REQUEST['ComapanyName']!="" && $_REQUEST['ComapanyName']>0)
            {
                $where = $where." AND master_inventory_child.CompanyName='".$_REQUEST['ComapanyName']."'";
            }
            if($_REQUEST['ModalName']!="" && $_REQUEST['ModalName']!="0")
            {
                $where = $where." AND master_inventory_child.ModalName='".$_REQUEST['ModalName']."'";
            }
            if($_REQUEST['Color']!="" && $_REQUEST['Color']!="0")
            {
                $where = $where." AND master_inventory_child.Color='".$_REQUEST['Color']."'";
            }
            if($_REQUEST['Size']!="" && $_REQUEST['Size']!="0")
            {
                $where = $where." AND master_inventory_child.Size='".$_REQUEST['Size']."'";
            }
            if($_REQUEST['MinQuantity']!="" && $_REQUEST['MinQuantity']>0)
            {
                $where = $where." AND master_inventory_child.Quantity>='".$_REQUEST['MinQuantity']."'";
            }
            if($_REQUEST['MaxQuantity']!="" && $_REQUEST['MaxQuantity']>0)
            {
                $where = $where." AND master_inventory_child.Quantity<='".$_REQUEST['MaxQuantity']."'";
            }
            if($_REQUEST['MinPrice']!="" && $_REQUEST['MinPrice']>0)
            {
                $where = $where." AND master_cyclezone_price.CycleTotalPrice>='".$_REQUEST['MinPrice']."'";
            }
            if($_REQUEST['MaxPrice']!="" && $_REQUEST['MaxPrice']>0)
            {
                $where = $where." AND master_cyclezone_price.CycleTotalPrice<='".$_REQUEST['MaxPrice']."'";
            }                
            
            $selectWareHouse = "SELECT master_company.CompanyName,master_company.CompanyID,master_inventory_child.Color,master_inventory_child.ModalName,master_inventory_child.Size,SUM(master_inventory_child.OrgQuantity) as OrgQuantity,master_cyclezone_price.CycleTotalPrice from master_cyclezone_price,master_inventory_child,master_company WHERE master_company.CompanyID=master_inventory_child.CompanyName AND master_inventory_child.InventoryChildID = master_cyclezone_price.InventoryChildID AND master_cyclezone_price.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='cycle' $where  GROUP BY master_inventory_child.CompanyName,master_inventory_child.ModalName,master_inventory_child.Color,master_inventory_child.Size";
            echo $selectWareHouse;
            $ObjselectWareHouse =  mysqli_query($conn, $selectWareHouse);
            echo $ObjselectWareHouse;
            if(mysqli_num_rows($ObjselectWareHouse)>0)
            {
                
                
                ?>
                    <table class="table table-bordered" id="example" >
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Company Name</th>
                            <th>Segment</th>
                            <th>Modal Name</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-right">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                while($RsselectWareHouse = mysqli_fetch_array($ObjselectWareHouse))
                {
                    //print_r($RsselectWareHouse);
                    //echo $RsselectWareHouse['Size']."<br />";
                    $SelectProductID = "SELECT * from master_products WHERE CompanyID = '".$RsselectWareHouse['CompanyID']."' AND ModalName = '".$RsselectWareHouse['ModalName']."' AND Color = '".$RsselectWareHouse['Color']."' AND Size = '".$RsselectWareHouse['Size']."'";
                    $ObjSelectProductID = mysqli_query($conn, $SelectProductID);
                    $RsSelectProductID = mysqli_fetch_array($ObjSelectProductID);
                // $ObjselectWareHouse =  mysqli_query($conn, $selectWareHouse);
                    
                    
                    $InvoiceWhere = "";
                    if($RsselectWareHouse['CompanyName']!="" && $RsselectWareHouse['CompanyName']>0)
                    {
                        $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.CompanyID='".$RsselectWareHouse['CompanyName']."'";
                    }
                    if($RsselectWareHouse['ModalName']!="" && $RsselectWareHouse['ModalName']!="0")
                    {
                        $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.ModelNumber='".$RsselectWareHouse['ModalName']."'";
                    }
                    if($RsselectWareHouse['Color']!="" && $RsselectWareHouse['Color']!="0")
                    {
                        $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.Color='".$RsselectWareHouse['Color']."'";
                    }
                    if($RsselectWareHouse['Size']!="" && $RsselectWareHouse['Size']!="0")
                    {
                        $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.Size='".$RsselectWareHouse['Size']."'";
                    }
                    
                    $InventoryWhere = "";
                    if($RsselectWareHouse['CompanyName']!="" && $RsselectWareHouse['CompanyName']>0)
                    {
                        $InventoryWhere = $InventoryWhere." AND master_inventory_child.CompanyName='".$RsselectWareHouse['CompanyName']."'";
                    }
                    if($RsselectWareHouse['ModalName']!="" && $RsselectWareHouse['ModalName']!="0")
                    {
                        $InventoryWhere = $InventoryWhere." AND master_inventory_child.ModalName='".$RsselectWareHouse['ModalName']."'";
                    }
                    if($RsselectWareHouse['Color']!="" && $RsselectWareHouse['Color']!="0")
                    {
                        $InventoryWhere = $InventoryWhere." AND master_inventory_child.Color='".$RsselectWareHouse['Color']."'";
                    }
                    if($RsselectWareHouse['Size']!="" && $RsselectWareHouse['Size']!="0")
                    {
                        $InventoryWhere = $InventoryWhere." AND master_inventory_child.Size='".$RsselectWareHouse['Size']."'";
                    }
                    
                    $selectWareHouseInvoice = "SELECT SUM(master_invoice_child.Quantity) as Quantity from master_invoice_child WHERE  master_invoice_child.Active='1' AND master_invoice_child.Active='1' AND master_invoice_child.Type='cycle' $InvoiceWhere GROUP BY CompanyID";
                    //echo $selectWareHouseInvoice."<br />";
                    $ObjselectWareHouseInvoice = mysqli_query($conn, $selectWareHouseInvoice);
                    $RSselectWareHouseInvoice = mysqli_fetch_array($ObjselectWareHouseInvoice);
                    
                    $selectWareHouseInventory = "SELECT SUM(master_inventory_child.OrgQuantity) as OrgQuantity from master_inventory_child WHERE  master_inventory_child.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='cycle' $InventoryWhere  GROUP BY CompanyName";
                    //echo $selectWareHouseInventory."<br />";
                    $ObjselectWareHouseInventory = mysqli_query($conn, $selectWareHouseInventory);
                    $RSselectWareHouseInventory = mysqli_fetch_array($ObjselectWareHouseInventory);
                    
                    //echo $RSselectWareHouseInventory['OrgQuantity'];
                    $MyQuantity = intval($RSselectWareHouseInventory['OrgQuantity']) -  intval($RSselectWareHouseInvoice['Quantity']);
                    
                    if($_REQUEST['Segment']=="0" || $_REQUEST['Segment'] == $RsSelectProductID['Segment'])
                    {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $RsSelectProductID['ProductID'];?></td>
                                <td><?php echo $RsselectWareHouse['CompanyName'];?></td>
                                <td><?php echo $RsSelectProductID['Segment'];?></td>
                                <td><?php echo $RsselectWareHouse['ModalName'];?></td>
                                <td><?php echo $RsselectWareHouse['Color'];?></td>
                                <td><?php echo $RsselectWareHouse['Size'];?></td>
                                <td class="text-center"><?php echo $MyQuantity;?></td>
                                <td class="text-right"><?php echo number_format(floatval($RsselectWareHouse['CycleTotalPrice']),2,".","");?></td>
                            </tr>
                        <?php
                    }   
                }
                ?>
                    </tbody>
                    </table>
                <?php
            }
            else
            {
                ?>
                    <div class="text-center">No record found</div>
                <?php
            }
        }
        else
        {
            //Print_r($_REQUEST);
            $where = "";
            if($_REQUEST['ComapanyName']!="" && $_REQUEST['ComapanyName']>0)
            {
                $where = $where." AND master_inventory_child.CompanyName='".$_REQUEST['ComapanyName']."'";
            }
            if($_REQUEST['ItemName']!="" && $_REQUEST['ItemName']!="0")
            {
                $where = $where." AND master_inventory_child.ItemName='".$_REQUEST['ItemName']."'";
            }
            if($_REQUEST['MinQuantity']!="" && $_REQUEST['MinQuantity']>0)
            {
                $where = $where." AND master_inventory_child.Quantity>='".$_REQUEST['MinQuantity']."'";
            }
            if($_REQUEST['MaxQuantity']!="" && $_REQUEST['MaxQuantity']>0)
            {
                $where = $where." AND master_inventory_child.Quantity<='".$_REQUEST['MaxQuantity']."'";
            }
            if($_REQUEST['MinPrice']!="" && $_REQUEST['MinPrice']>0)
            {
                $where = $where." AND master_cyclezone_price.CycleTotalPrice>='".$_REQUEST['MinPrice']."'";
            }
            if($_REQUEST['MaxPrice']!="" && $_REQUEST['MaxPrice']>0)
            {
                $where = $where." AND master_cyclezone_price.CycleTotalPrice<='".$_REQUEST['MaxPrice']."'";
            }
            $selectWareHouse = "SELECT * from master_cyclezone_price,master_inventory_child,master_company WHERE master_company.CompanyID=master_inventory_child.CompanyName AND master_inventory_child.InventoryChildID = master_cyclezone_price.InventoryChildID AND master_cyclezone_price.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='spare' $where";
            //echo $selectWareHouse;
            $ObjselectWareHouse = mysqli_query($conn, $selectWareHouse);
            if(mysqli_num_rows($ObjselectWareHouse)>0)
            {
                ?>      
                    <div style="margin-bottom:10px;border-bottom:1px solid #ccc;font-weight:bold;font-size:20px;" class="text-center"><?php echo mysqli_num_rows($ObjselectWareHouse)." Record Found";?></div>
                    <table class="table table-bordered" id="example" >
                        <colgroup>
                            <col class="con0" style="align: center; width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Company Name</th>
                                <th>Segment</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                while($RsselectWareHouse = mysqli_fetch_array($ObjselectWareHouse))
                {
                    $SelectProductID = "SELECT * from master_products WHERE CompanyID = '".$RsselectWareHouse['CompanyID']."'";
                    $ObjSelectProductID = mysqli_query($conn, $SelectProductID);
                    $RsSelectProductID = mysqli_fetch_array($ObjSelectProductID);
                    
                    
                    $InvoiceWhere = "";
                    if($RsselectWareHouse['CompanyID']!="" && $RsselectWareHouse['CompanyID']>0)
                    {
                        $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.CompanyID='".$RsselectWareHouse['CompanyID']."'";
                    }
                    if($RsselectWareHouse['ItemName']!="" && $RsselectWareHouse['ItemName']!="0")
                    {
                        $InvoiceWhere = $InvoiceWhere." AND master_invoice_child.ItemName='".$RsselectWareHouse['ItemName']."'";
                    }
                    
                    
                    $InventoryWhere = "";
                    if($RsselectWareHouse['CompanyID']!="" && $RsselectWareHouse['CompanyID']>0)
                    {
                        $InventoryWhere = $InventoryWhere." AND master_inventory_child.CompanyName='".$RsselectWareHouse['CompanyID']."'";
                    }
                    if($RsselectWareHouse['ItemName']!="" && $RsselectWareHouse['ItemName']!="0")
                    {
                        $InventoryWhere = $InventoryWhere." AND master_inventory_child.ItemName='".$RsselectWareHouse['ItemName']."'";
                    }
                    
                    
                    $selectWareHouseInvoice = "SELECT SUM(master_invoice_child.Quantity) as Quantity from master_invoice_child WHERE  master_invoice_child.Active='1' AND master_invoice_child.Active='1' AND master_invoice_child.Type='spare' $InvoiceWhere GROUP BY CompanyID";
                    //echo $selectWareHouseInvoice."<br />";
                    $ObjselectWareHouseInvoice = mysqli_query($conn, $selectWareHouseInvoice);
                    $RSselectWareHouseInvoice = mysqli_fetch_array($ObjselectWareHouseInvoice);
                    
                    $selectWareHouseInventory = "SELECT SUM(master_inventory_child.OrgQuantity) as OrgQuantity from master_inventory_child WHERE  master_inventory_child.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='spare' $InventoryWhere  GROUP BY CompanyName";
                    //echo $selectWareHouseInventory."<br />";
                    $ObjselectWareHouseInventory = mysqli_query($conn, $selectWareHouseInventory);
                    $RSselectWareHouseInventory = mysqli_fetch_array($ObjselectWareHouseInventory);
                    
                    //echo $RSselectWareHouseInventory['OrgQuantity'];
                    $MyQuantity = intval($RSselectWareHouseInventory['OrgQuantity']) -  intval($RSselectWareHouseInvoice['Quantity']);
                        
                    
                    ?>
                        <tr>
                            <td class="text-right"><?php echo $RsSelectProductID['ProductID']?></td>
                            <td><?php echo $RsselectWareHouse['CompanyName']?></td>
                            <td><?php echo $RsSelectProductID['Segment']?></td>
                            <td><?php echo $RsselectWareHouse['ItemName']?></td>
                            <td class="text-right"><?php echo $MyQuantity;?></td>
                            <td class="text-right"><?php echo number_format($RsselectWareHouse['CycleTotalPrice'],2,".","");?></td>
                        </tr>
                    <?php
                }
                ?>
                    </tbody>
                    </table>
                <?php
            }
            else
            {
                ?>
                    <div class="text-center">No record found</div>
                <?php
            }            
        }
    }
    function GetWarehouseDataDashBoard()
    {
        ?>
            <script src="./js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                     $('#example').DataTable({
                         "sPaginationType": "full_numbers"
                     });
                });
            </script>
        <?php
        if($_REQUEST['Type']=="cycle")
        {
            //Print_r($_REQUEST);
            $where = "";
            if($_REQUEST['ComapanyName']!="" && $_REQUEST['ComapanyName']>0)
            {
                $where = $where." AND master_inventory_child.CompanyName='".$_REQUEST['ComapanyName']."'";
            }
            if($_REQUEST['Size']!="" && $_REQUEST['Size']!="0")
            {
                $where = $where." AND master_inventory_child.Size='".$_REQUEST['Size']."'";
            }
            
            $selectWareHouse = "SELECT master_company.CompanyName,master_company.CompanyID,master_inventory_child.Color,master_inventory_child.ModalName,master_inventory_child.Size,master_inventory_child.Quantity,master_cyclezone_price.CycleTotalPrice from master_cyclezone_price,master_inventory_child,master_company WHERE master_company.CompanyID=master_inventory_child.CompanyName AND master_inventory_child.InventoryChildID = master_cyclezone_price.InventoryChildID AND master_cyclezone_price.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='cycle' $where ";
            //echo $selectWareHouse;
            $ObjselectWareHouse = mysqli_query($conn, $selectWareHouse);
            if(mysqli_num_rows($ObjselectWareHouse)>0)
            {
                ?>
                    <div style="margin-bottom:10px;border-bottom:1px solid #ccc;font-weight:bold;font-size:20px;" class="text-center"><?php echo mysqli_num_rows($ObjselectWareHouse)." Record Found";?></div>
                    <table class="table table-bordered" id="example" >
                        <colgroup>
                            <col class="con0" style="align: center; width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-right">ID</th>
                                <th>Company Name</th>
                                <th>Segment</th>
                                <th>Modal Name</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th class="text-right">Quantity</th>
                                <th class="text-right">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                while($RsselectWareHouse = mysqli_fetch_array($ObjselectWareHouse))
                {
                    //print_r($RsselectWareHouse);
                    //echo $RsselectWareHouse['Size']."<br />";
                    $SelectProductID = "SELECT * from master_products WHERE CompanyID = '".$RsselectWareHouse['CompanyID']."' AND ModalName = '".$RsselectWareHouse['ModalName']."' AND Color = '".$RsselectWareHouse['Color']."' AND Size = '".$RsselectWareHouse['Size']."'";
                    $ObjSelectProductID = mysqli_query($conn, $SelectProductID);
                    $RsSelectProductID = mysqli_fetch_array($ObjSelectProductID);
                    
                    ?>
                        <tr>
                            <td class="text-right"><?php echo $RsSelectProductID['ProductID']?></td>
                            <td><?php echo $RsselectWareHouse['CompanyName']?></td>
                            <td><?php echo $RsSelectProductID['Segment']?></td>
                            <td><?php echo $RsselectWareHouse['ModalName']?></td>
                            <td><?php echo $RsselectWareHouse['Color']?></td>
                            <td><?php echo $RsselectWareHouse['Size']?></td>
                            <td class="text-right"><?php echo $RsselectWareHouse['Quantity']?></td>
                            <td class="text-right"><?php echo number_format($RsselectWareHouse['CycleTotalPrice'],2,".","");?></td>
                        </tr>
                    <?php                                                
                }
                ?>
                    </tbody>
                    </table>
                <?php
            }
            else
            {
                ?>
                    <div class="text-center">No record found</div>
                <?php
            }
        }
        else
        {
            //Print_r($_REQUEST);
            $where = "";
            if($_REQUEST['ComapanyName']!="" && $_REQUEST['ComapanyName']>0)
            {
                $where = $where." AND master_inventory_child.CompanyName='".$_REQUEST['ComapanyName']."'";
            }
            $selectWareHouse = "SELECT * from master_cyclezone_price,master_inventory_child,master_company WHERE master_company.CompanyID=master_inventory_child.CompanyName AND master_inventory_child.InventoryChildID = master_cyclezone_price.InventoryChildID AND master_cyclezone_price.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='spare' $where";
            //echo $selectWareHouse;
            $ObjselectWareHouse = mysqli_query($conn, $selectWareHouse);
            if(mysqli_num_rows($ObjselectWareHouse)>0)
            {
                ?>
                    <div style="margin-bottom:10px;border-bottom:1px solid #ccc;font-weight:bold;font-size:20px;" class="text-center"><?php echo mysqli_num_rows($ObjselectWareHouse)." Record Found";?></div>
                    <table class="table table-bordered" id="example" >
                        <colgroup>
                            <col class="con0" style="align: center; width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Company Name</th>
                                <th>Segment</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                while($RsselectWareHouse = mysqli_fetch_array($ObjselectWareHouse))
                {
                    $SelectProductID = "SELECT * from master_products WHERE CompanyID = '".$RsselectWareHouse['CompanyID']."'";
                    $ObjSelectProductID = mysqli_query($conn, $SelectProductID);
                    $RsSelectProductID = mysqli_fetch_array($ObjSelectProductID);
                    ?>
                        <tr>
                            <td class="text-right"><?php echo $RsSelectProductID['ProductID']?></td>
                            <td><?php echo $RsselectWareHouse['CompanyName']?></td>
                            <td><?php echo $RsSelectProductID['Segment']?></td>
                            <td><?php echo $RsselectWareHouse['ItemName']?></td>
                            <td class="text-right"><?php echo $RsselectWareHouse['Quantity']?></td>
                            <td class="text-right"><?php echo number_format($RsselectWareHouse['CycleTotalPrice'],2,".","");?></td>
                        </tr>
                    <?php
                }
                ?>
                    </tbody>    
                    </table>
                <?php
            }
            else
            {
                ?>
                    <div class="text-center">No record found</div>
                <?php
            }            
        }
    }
    function removeCycleInvoiceChildRow()
    {
        $RemoveInvoiceChild = "DELETE FROM `master_purchase_order_child` WHERE `PurchaseOrderChildID` = '".$_REQUEST['PurchaseOrderChildID']."'";
        mysqli_query($conn, $RemoveInvoiceChild);
    }
    function removeCyclePOChildRow()
    {
        $RemoveInvoiceChild = "DELETE FROM `master_invoice_child` WHERE `InvoiceChildID` = '".$_REQUEST['CycleInvoiceRowID']."'";
        mysqli_query($conn, $RemoveInvoiceChild);
    }
    function InsertVisiter()
    {
        $InsertCustomer = "INSERT INTO `master_visiter` (
                                                        `FirstName` ,
                                                        `LastName` ,
                                                        `Email` ,
                                                        `Area` ,
                                                        `City` ,
                                                        `MobileNumber`
                                                        )
                                                                VALUES (
                                                                        '".$_REQUEST['FirstName']."', 
                                                                        '".$_REQUEST['LastName']."', 
                                                                        '".$_REQUEST['Email']."', 
                                                                        '".$_REQUEST['Area']."', 
                                                                        '".$_REQUEST['City']."', 
                                                                        '".$_REQUEST['MobileNo']."'
                                                                        );";
        mysqli_query($conn, $InsertCustomer);
    }
    function GetMerchantInfo()
    {
        $selectMerchant = "SELECT * FROM `master_merchant` WHERE MerchantID = '".$_REQUEST['MerchantID']."'";        
        $ObjselectMerchant = mysqli_query($conn, $selectMerchant);
        $RsselectMerchant = mysqli_fetch_array($ObjselectMerchant);
        if($RsselectMerchant['TinNumber']!="")
        {
            ?>
                <div style="padding:10px 0px;text-align: center;">
                <input type="checkbox" name="TinNumberBox" id="TinNumberBox" value="1"> is Tin Number Invoice?
                </div>                
            <?php
        }
    }
    function GetMerchantInvoiceForm()
    {
        ?>
            <div>&nbsp;</div>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-2">
                        <input id="FirstName" name="FirstName" placeholder="First Name" type="text" class="form-control shadow-z1">
                    </div>
                    <label for="input-id-1" class="col-sm-2 control-label">Middel Name</label>
                    <div class="col-sm-2">
                        <input id="MiddelName" name="MiddelName" placeholder="Middel Name" type="text" class="form-control shadow-z1">
                    </div>
                    <label for="input-id-1" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-2">
                        <input id="LastName" name="LastName" placeholder="Last Name" type="text" class="form-control shadow-z1">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-2 control-label">BirthDate</label>
                    <div class="col-sm-4">
                        <input id="BirthDate" name="BirthDate" placeholder="Birth Date" type="text" class="form-control shadow-z1">
                    </div>
                    <label for="input-id-1" class="col-sm-2 control-label">Company</label>
                    <div class="col-sm-4">
                        <input id="Comapany" name="Comapany" placeholder="Comapany" type="text" class="form-control shadow-z1">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <input id="Email" name="Email" placeholder="Email" type="text" class="form-control shadow-z1">
                    </div>
                    <label for="input-id-1" class="col-sm-2 control-label">Website</label>
                    <div class="col-sm-4">
                        <input id="Website" name="Website" placeholder="Website" type="text" class="form-control shadow-z1">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-2 control-label">Home Number</label>
                    <div class="col-sm-2">
                        <input id="HomeNumber" name="HomeNumber" placeholder="Home Number" type="text" class="form-control shadow-z1">
                    </div>
                    <label for="input-id-1" class="col-sm-2 control-label">Office Number</label>
                    <div class="col-sm-2">
                        <input id="OfficeNumber" name="OfficeNumber" placeholder="Office Number" type="text" class="form-control shadow-z1">
                    </div>
                    <label for="input-id-1" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-2">
                        <input id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" type="text" class="form-control shadow-z1">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-2 control-label">Billing Address</label>
                    <div class="col-sm-4">
                        <textarea id="ShippingAddress" rows="4" name="ShippingAddress" placeholder="Billing Address" class="form-control shadow-z1"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <label for="input-id-1" class="col-sm-4 control-label">Billing City</label>
                            <div class="col-sm-8">
                                <input id="ShippingCity" name="ShippingCity" placeholder="Billing City" type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                        <div>
                            <label for="input-id-1" class="col-sm-4 control-label">Billing Pin Code</label>
                            <div class="col-sm-8">
                                <input id="ShippingPinCode" name="ShippingPinCode" placeholder="Billing Pin Code" type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                        <div>
                            <label for="input-id-1" class="col-sm-4 control-label">Billing State</label>
                            <div class="col-sm-8">
                                <input id="ShippingState" name="ShippingState" placeholder="Billing State" type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-3 control-label">Same as billing address</label>
                    <div class="col-sm-9">
                        <input id="SameasBillingAddress" name="SameasBillingAddress" type="checkbox">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="input-id-1" class="col-sm-2 control-label">Shipping Address</label>
                    <div class="col-sm-4">
                        <textarea id="BillingAddress" name="BillingAddress" placeholder="Shipping Address" class="form-control shadow-z1"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <label for="input-id-1" class="col-sm-4 control-label">Shipping City</label>
                            <div class="col-sm-8">
                                <input id="BillingCity" name="BillingCity" placeholder="Shipping City" type="text" class="form-control shadow-z1">
                            </div>
                            <label for="input-id-1" class="col-sm-4 control-label">Shipping Pin Code</label>
                            <div class="col-sm-8">
                                <input id="BillingPinCode" name="BillingPinCode" placeholder="Shipping Pin Code" type="text" class="form-control shadow-z1">
                            </div>
                            <label for="input-id-1" class="col-sm-4 control-label">Shipping State</label>
                            <div class="col-sm-8">
                                <input id="BillingState" name="BillingState" placeholder="Shipping State" type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </fieldset>
            <div class="ng-isolate-scope">
                <ul class="nav nav-tabs">
                    <li class="ng-isolate-scope active">
                        <a href="#TaxDetailsTab" class="TabMenu ng-binding">Tax Details</a>
                    </li>
                    <li class="ng-isolate-scope">
                        <a tabindex="13" href="#BankDetaiilsTab" class="TabMenu ng-binding">Bank Detaiils</a>
                    </li>                                                   
                </ul>
                <div class="tab-content">
                    <div class="tab-pane ng-scope active MainTabContent" id="TaxDetailsTab">
                        <fieldset>
                            <div class="form-group">
                                <?php 
                                    if($_REQUEST['IsTin']=="1")
                                    {
                                        ?>
                                            <label for="input-id-1" class="col-sm-2 control-label">Tin Number</label>
                                            <div class="col-sm-4">
                                                <input id="TinNumber" name="TinNumber" placeholder="Tin Number" class="form-control shadow-z1">
                                            </div>
                                        <?php
                                    }
                                ?>
                                <label for="input-id-1" class="col-sm-2 control-label">Additional Detail</label>
                                <div class="col-sm-4">
                                    <textarea id="AdditionalDetail" name="AdditionalDetail" placeholder="Additional Detail" class="form-control shadow-z1"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="tab-pane ng-scope MainTabContentCycle" id="BankDetaiilsTab">
                        <fieldset>
                            <div class="form-group">
                                <label for="input-id-1" class="col-sm-2 control-label">Account Name</label>
                                <div class="col-sm-4">
                                    <input id="AccountName" name="AccountName" placeholder="Account Name" type="text" class="form-control shadow-z1">                                        
                                </div>
                                <label for="input-id-1" class="col-sm-2 control-label">Account No.</label>
                                <div class="col-sm-4">
                                    <input id="AccountNumber" name="AccountNumber" placeholder="Account Number" type="text" class="form-control shadow-z1">                                        
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="input-id-1" class="col-sm-2 control-label">Bank Name</label>
                                <div class="col-sm-4">
                                    <input id="BankName" name="BankName" placeholder="Bank Name" type="text" class="form-control shadow-z1">                                        
                                </div>
                                <label for="input-id-1" class="col-sm-2 control-label">Bank Branch</label>
                                <div class="col-sm-4">
                                    <input id="BankBranch" name="BankBranch" placeholder="Bank Branch" type="text" class="form-control shadow-z1">                                        
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="input-id-1" class="col-sm-2 control-label">Bank City</label>
                                <div class="col-sm-4">
                                    <input id="BankCity" name="BankCity" placeholder="Bank City" type="text" class="form-control shadow-z1">                                        
                                </div> 
                                <label for="input-id-1" class="col-sm-2 control-label">IFSC Code</label>
                                <div class="col-sm-4">
                                    <input id="IFSCCode" name="IFSCCode" placeholder="IFSC Code" type="text" class="form-control shadow-z1">                                        
                                </div> 
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
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
    $(function() {
        $('#SameasBillingAddress').change(function(event){
            //alert($(this).checked(''));
            if($(this).is(':checked'))
            {
                $('#BillingAddress').val($('#ShippingAddress').val());
                $('#BillingState').val($('#ShippingState').val());
                $('#BillingCity').val($('#ShippingCity').val());
                $('#BillingPinCode').val($('#ShippingPinCode').val());    
            }
            
        })
        $('#BirthDate').datepicker({
            dateFormat: "dd-mm-yy"
        });
    });
</script>
        <?php
    }
    function SendRetailEmailInvoice()
    {
        $selectInvoive = "SELECT * FROM `master_invoice` WHERE Active='1' AND InvoiceID='".$_REQUEST['InvoiceID']."'";
        $ObjselectInvoive = mysqli_query($conn, $selectInvoive);
        $RsselectInvoive = mysqli_fetch_array($ObjselectInvoive);
        
        $selectCustomer = "SELECT * FROM `master_customer` WHERE master_customer.CustomerID='".$RsselectInvoive['CustomerID']."'";
        $ObjselectCustomer = mysqli_query($conn, $selectCustomer);
        $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);
        
        $selectProfile = "SELECT * FROM `profile`"; 
        $ObjselectProfile = mysqli_query($conn, $selectProfile);
        $RsselectProfile = mysqli_fetch_array($ObjselectProfile);
        
            $image = '';
            if(file_exists("./uploads/".$RsselectProfile['Logo']))
            {
                $image = '<img src="'.PreURL.'/uploads/'.$RsselectProfile['Logo'].'" style="max-width: 200px;padding:5px 0;">';
            }
            $Address = '';
            if($RsselectProfile['Address']!="")
            {
                $Address = '<div>'.$RsselectProfile['Address'].'<l class="fa fa-map-marker"></i></div>';
            }
            $City = '';
            if($RsselectProfile['City']!="")
            {
                $City = '<div>'.$RsselectProfile['City']." - ".$RsselectProfile['Pincode'].", ".$RsselectProfile['State'].'<l class="fa fa-map-marker"></i></div>';
            }
            $EmailRight = '';
            if($RsselectProfile['Email']!="")
            {
                $EmailRight = '<div>'.$RsselectProfile['Email'].'<l class="fa fa-envelope-o"></i> | '.$RsselectProfile['Website'].'<l class="fa fa-globe"></i></div>';
            }
            $MobileNumber = '';
            if($RsselectCustomer['MobileNumber']!="")
            {
                $MobileNumber = '<div style="font-weight:normal;">
                                    <div style="float:left;width:150px;font-size: 14px;"><b>Cell No.</b></div>
                                    <div style="float:left;width:150px;font-size: 14px;">'.$RsselectCustomer['MobileNumber'].'</div>
                                    <div style="clear:both;"></div>
                                </div>';
            }
            $Email = '';
            if($RsselectCustomer['Email']!="")
            {
                $Email = '<div style="font-weight:normal;">
                            <div style="float:left;width:150px;font-size: 14px;"><b>Email</b></div>
                            <div style="float:left;width:150px;font-size: 14px;">'.$RsselectCustomer['Email'].'</div>
                            <div style="clear:both;"></div>
                        </div>';                
            }
            $CustomerID = '';
            if($RsselectCustomer['CustomerID']!="")
            {
                $CustomerID = '<div style="font-weight:normal;">
                                <div style="float:left;width:150px;font-size: 14px;"><b>Customer ID</b></div>
                                <div style="float:left;width:150px;font-size: 14px;">'.$RsselectCustomer['CustomerID'].'</div>
                                <div style="clear:both;"></div>
                            </div>';
            }
            $Date = explode("-",$RsselectInvoive['Date']);
            
        
        $html = '<div style="font-family:Roboto;">
                    <table class="HeaderInvoiceTable" style="width:100%;border-top:1px solid #000;border-bottom:1px solid #000;">
                        <tr>    
                            <td>'.$image.'</td>
                            <td align="right" style="font-size: 12px;">'.$Address.$City.$EmailRight.'</td>
                        </tr>
                    </table>
                    <div style="clear:both;"></div>
                    <div style="float:left;padding:10px;width:55%;">
                        <div>Invoice To</div>                        
                        <div style="line-height: 20px;font-size:20px;margin-bottom:10px;border-bottom:1px solid #000;float:left;">'.$RsselectCustomer['FirstName']." ".$RsselectCustomer['LastName'].'</div>                        
                        <div style="clear:both;"></div>
                        <div style="font-size: 14px;">'.nl2br($RsselectCustomer['BillingAddress']).'</div>                        
                        <div style="font-size: 14px;">'.$RsselectCustomer['BillingCity'].'</div>                        
                        '.$MobileNumber.$Email.$CustomerID.'
                    </div>
                    <div style="float:right;width:40%;font-weight:normal;">
                        <div style="text-align:right;">
                            <div style="padding:10px;">
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;"><b>Retail Invoice</b></div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Invoice Type</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="margin-bottom:10px;border-bottom:1px solid #000;float:right;">
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;"><b>'.$RsselectInvoive['InvoiceNo'].'<b></div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Invoice No</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="clear:both;"></div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;">
                                        '.$Date[2]."-".$Date[1]."-".$Date[0].'
                                    </div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Date</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;">'.$RsselectCustomer['IDType'].'</div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>ID Type</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;">'.$RsselectCustomer['IDNumber'].'</div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>ID No.</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;">'.$RsselectInvoive['PaymentMethod'].'</div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Payment Method</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;">'.$RsselectInvoive['PaymentStatus'].'</div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Payment Status</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <table class="table table-bordered table-hover bg-white" style="width:100%;" border="0">
                        <thead>
                            <tr class="active" style="background:#000;color:#fff;">
                                <th class="text-center">No.</th>
                                <th class="text-left">Company Name</th>
                                <th class="text-left">Model No. / Item Name</th>
                                <th class="text-left">Color</th>
                                <th class="text-left">Size</th>
                                <th class="text-center">Qty</th>
                                <th class="text-left">Frame No</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>';
                                    
                                            $count = 0;
                                            $TaxPrice = 0;
                                            $SubTotal = 0;
                                            $SubTotalTax = 0;
                                            $FinalTotal = 0;
                                            $TaxApplied = "";
                                            $selectRow = "SELECT * FROM `master_invoice_child`,master_company WHERE master_invoice_child.CompanyID = master_company.CompanyID AND master_invoice_child.InvoiceID='".$_REQUEST['InvoiceID']."'";
                                            $ObjselectRow = mysqli_query($conn, $selectRow);
                                            while($RsselectRow = mysqli_fetch_array($ObjselectRow))
                                            {                 
                                                $count++;
                                                
                                                $html .= '<tr>
                                                        <td style="text-align:center;border:1px solid #000;">'.$count.'</td>
                                                        <td style="text-align:left;border:1px solid #000;">'.$RsselectRow['CompanyName'].'</td>';
                                                            
                                                            if($RsselectRow['Type']=="cycle")
                                                            {
                                                                $html .= '
                                                                    <td style="text-align:left;border:1px solid #000;">'.$RsselectRow['ModelNumber'].'</td>
                                                                    <td style="text-align:left;border:1px solid #000;">'.$RsselectRow['Color'].'</td>
                                                                    <td style="text-align:left;border:1px solid #000;">'.$RsselectRow['Size'].'</td>';
                                                            }
                                                            else
                                                            {
                                                                $html .= '<td colspan="3" style="text-align:left;border:1px solid #000;">'.$RsselectRow['ItemName'].'</td>';
                                                            }
                                                            $html .= '<td style="text-align:center;border:1px solid #000;">'.$RsselectRow['Quantity'].'</td>';
                                                            $html .= '<td style="text-align:left;border:1px solid #000;">';
                                                                
                                                                $Frame = "";
                                                                $selectFrame = "select * from master_invoice_frame WHERE InvoiceChildID='".$RsselectRow['InvoiceChildID']."'";
                                                                $ObjselectFrame = mysqli_query($conn, $selectFrame);
                                                                while($RsselectFrame = mysqli_fetch_array($ObjselectFrame))
                                                                {
                                                                    $Frame = $Frame.$RsselectFrame['FrameValue'].",";
                                                                }
                                                                $Frame = substr($Frame,0,-1);
                                                                $html .= $Frame;
                                                                
                                                                if($RsselectRow['Type']=="cycle")
                                                                {
                                                                    $selectCyclePrice = "SELECT * from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Type = 'cycle' AND Size = '".mysqli_real_escape_string($RsselectRow['Size'])."' AND Color='".$RsselectRow['Color']."' AND ModalName = '".$RsselectRow['ModelNumber']."' AND CompanyName = '".$RsselectRow['CompanyID']."' AND master_inventory_child.Active='1'";        
                                                                    //echo $selectCyclePrice;
                                                                }
                                                                else
                                                                {
                                                                    $selectCyclePrice = "SELECT * from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Type = 'spare' AND ItemName = '".$RsselectRow['ItemName']."' AND CompanyName = '".$RsselectRow['CompanyID']."' AND master_inventory_child.Active='1'";    
                                                                }
                                                                $ObjselectCyclePrice = mysqli_query($conn, $selectCyclePrice);
                                                                $RsselectCyclePrice = mysqli_fetch_array($ObjselectCyclePrice);
                                                                $TaxApplied = $TaxApplied.$RsselectCyclePrice['TaxApplied'].",";
                                                                
                                                                $html .= '</td>
                                                                <td style="text-align:right;border:1px solid #000;">';
                                                                
                                                                $InvisualPrice =  $RsselectRow['Price'];
                                                                $TaxAppliedIn = explode(",",$RsselectCyclePrice['TaxApplied']); 
                                                                $FinalTotalTaxValue = 0;
                                                                foreach($TaxAppliedIn as $k=>$v)
                                                                {
                                                                    $selectTaxInd = "SELECT * FROM `master_tax` WHERE TaxID='".$v."'";
                                                                    $ObjselectTaxInd = mysqli_query($conn, $selectTaxInd);
                                                                    $RsselectTaxInd = mysqli_fetch_array($ObjselectTaxInd);
                                                                    if(!is_array($TaxPriceArray[$v]))
                                                                    {
                                                                        $TaxPriceArray[$v] = array();                                                                        
                                                                    }
                                                                    $ValueTax = (floatval($RsselectRow['Price']) * floatval($RsselectTaxInd['TaxPer'])) /100;
                                                                    array_push($TaxPriceArray[$v],$ValueTax);
                                                                    
                                                                    $FinalTotalTaxValue = floatval($FinalTotalTaxValue) + floatval($ValueTax);
                                                                    $TotalTaxValue = 0;
                                                                    foreach($TaxPriceArray as $k=>$v)
                                                                    {
                                                                        $TotalTaxValue = floatval($TotalTaxValue) + floatval($v[0]);
                                                                    }
                                                                }
                                                                $html .=number_format($RsselectRow['Price']-floatval($FinalTotalTaxValue),2,".",",");
                                                                $Quantity = $RsselectRow['Quantity'];
                                                                $TaxPrice = floatval($TaxPrice) + floatval($RsselectCyclePrice['TaxPrice']);
                                                                $SubTotal = floatval($SubTotal) + floatval($RsselectRow['Price']-floatval($FinalTotalTaxValue)) * floatval($RsselectRow['Quantity']);
                                                                $SubTotalTax = floatval($SubTotalTax) + floatval($RsselectRow['Price']) * floatval($RsselectRow['Quantity']);
                                                        $html .='</td>
                                                        <td style="text-align:right;border:1px solid #000;">'.number_format(floatval($RsselectRow['Price']-floatval($FinalTotalTaxValue)) * floatval($RsselectRow['Quantity']),2,".",",").'</td></tr>';
                                            }
                                            $TaxApplied = substr($TaxApplied,0,-1);
                                            $TaxApplied = explode(",",$TaxApplied);
                                            $TaxApplied = array_unique($TaxApplied);
                                            //print_r($RsselectCyclePrice);
                                            $html .='
                                                <tr>
                                                    <td colspan="8"  style="text-align:right;border:1px solid #000;">Sub Total</td>
                                                    <td style="text-align:right;border:1px solid #000;">';
                                                            $FinalTotal = floatval($FinalTotal) + floatval(round($SubTotalTax, 2));
                                                            $html .=number_format(round($SubTotal, 2),2,".",",");
                                            $html .='</td>
                                                </tr>';
                                            foreach($TaxApplied as $k=>$v)
                                            {
                                                $selectTax = "SELECT * FROM `master_tax` WHERE TaxID='".$v."'";
                                                $ObjselectTax = mysqli_query($conn, $selectTax);
                                                $RsselectTax = mysqli_fetch_array($ObjselectTax);
                                                
                                                $html .='
                                                    <tr>
                                                        <td colspan="8"  style="text-align:right;border:1px solid #000;">'.$RsselectTax['TaxName']." (".$RsselectTax['TaxPer']."%)".'</td>
                                                        <td style="text-align:right;border:1px solid #000;">';
                                                                $Tax = floatval($SubTotalTax) * floatval($RsselectTax['TaxPer'])/100; 
                                                                $html .=number_format(round($Tax, 2),2,".",",");
                                                $html .='</td>
                                                    </tr>';
                                            }
                                        $html .='
                                        <tr>
                                            <td colspan="8" style="text-align:right;border:1px solid #000;">Shipping Charge</td>
                                            <td style="text-align:right;border:1px solid #000;">';
                                            $FinalTotal = floatval($FinalTotal) + floatval(round($RsselectInvoive['Shipping'], 2)); 
                                            $html .=number_format($RsselectInvoive['Shipping'],2,".",",");
                                            $html .='</td>
                                        </tr>
                                        <tr>
                                            <td colspan="8" style="text-align:right;border:1px solid #000;">Discount</td>
                                            <td style="text-align:right;border:1px solid #000;">';
                                            $FinalTotal = floatval($FinalTotal) - floatval(round($RsselectInvoive['Discount'], 2));  
                                            $html .=number_format($RsselectInvoive['Discount'],2,".",",");
                                        $html .='
                                            </td>
                                        </tr>
                                        <tr class="active">
                                            <td colspan="8" style="text-align:right;border:1px solid #000;">Total Price</td>
                                            <td style="text-align:right;border:1px solid #000;"">'.number_format(round($FinalTotal, 2),2,".",",").'</td>
                                        </tr>
                                    </tbody>
                                </table>
                    <div>&nbsp;</div>';
                        $Note = "";
                        if($RsselectInvoive['Note']!="")
                        {
                            $html .='
                                <div style="text-align:left;border:1px solid #000;padding:10px;">
                                    Remark:<br />
                                    '.$RsselectInvoive['Note'].'
                                </div>';
                        }
                        $html .='                    
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:left;border-right:3px solid #000;margin-right:10px;padding:10px;">
                                <div><strong>Direct Deposit</strong></div>
                                <div><b>'.$RsselectProfile['AccountName'].'</b></div>
                                <div>'.$RsselectProfile['BankName'].'</div>
                                <div>'.$RsselectProfile['AccountNo'].'</div>
                                <div>'.$RsselectProfile['IFSCCode'].'</div>                                
                                <div>'.$RsselectProfile['BranchArea'].", ".$RsselectProfile['BankCity'].'</div>
                            </td>
                            <td style="text-align:left;border-right:3px solid #000;margin-right:10px;padding:10px;">
                                <div><strong>Tax Details</strong></div>
                                <div>
                                    <div style="float: left; text-decoration: none; font-size: 13px;"><b>TIN No:</b></div>
                                    <div style="float:left;">&nbsp;&nbsp;&nbsp;'.$RsselectProfile['TINNo'].'</div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float: left; text-decoration: none; font-size: 13px;"><b>CST No:</b></div>
                                    <div style="float:left;">&nbsp;&nbsp;'.$RsselectProfile['CSTNo'].'</div>
                                    <div style="clear:both;"></div>
                                </div>
                            </td>
                            <td style="text-align:left;padding:10px;">
                                <div><strong>Terms & Condition</strong></div>
                                <ul style="margin: 0px;padding-left: 20px;">';
                                
                                    $textareaData = '<li>'.str_replace("\n","</li>\n<li>",trim($RsselectProfile['Terms'],"\n")).'</li>';
                                    $html .=$textareaData;
                                $html .='
                                <ul>
                            </td>
                        </tr>
                    </table>
                    <div style="float:right;padding-right:68px;">
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>FOR,</div>
                        <div>&nbsp;</div>
                        <div>CYCLE ZONE, RAJKOT</div>                        
                    </div>
                    
                    <div style="clear:both;"></div>
                    <div style="border-bottom:1px solid #000;"></div>
                    <div style="font-weight:normal;font-size: 14px;padding: 5px 0px 0px 0px;">
                        <div style="float:left">
                            <b>Customer Care No:</b>&nbsp;'.$RsselectProfile['CustomerCareNo'].'&nbsp;&nbsp;<b>Service No:</b>&nbsp;'.$RsselectProfile['ServiceNo'].'
                        </div>
                        <div style="float:right;font-weight:bold;">Thank you for choosing cyclezone.</div>
                        <div style="clear:both;"></div>
                    </div>
                 </div>';       
        //echo $html;exit;
        
        
        require_once('class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->SMTPSecure = "ssl";  
        $mail->Host='cp-2.webhostbox.net';  
        $mail->Port='465';   
        $mail->SMTPKeepAlive = true;  
        $mail->Mailer = "smtp"; 
        $mail->IsSMTP(); // telling the class to use SMTP  
        $mail->SMTPAuth   = true;                  // enable SMTP authentication  
        $mail->Username   = 'email@mayurpanchal.in'; // SMTP account username  
        $mail->Password   = 'email@123';                                                 
        $mail->CharSet = 'utf-8';  
        $mail->SMTPDebug  = 0;
               
        $mail->From = "email@mayurpanchal.in";
        $mail->FromName = "Cycle Zone";
        $mail->AddAddress("mayurpanchal79@gmail.com","mayur");
        $mail->WordWrap = 500; // set word wrap
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = "Thank you for choosing cyclezone";
                                   
        $mail->Body = $html; //HTML Body
        $mail->AltBody = "Thank you for choosing cyclezone"; //Text Body
        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {                                                                               
            echo "1";                 
        }                                                                
    }
?>