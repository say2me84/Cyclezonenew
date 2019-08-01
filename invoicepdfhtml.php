<?php
    include("config.php"); 
    
    $selectInvoive = "SELECT * FROM `master_invoice` WHERE Active='1' AND InvoiceID='".$_REQUEST['id']."'";
    $ObjselectInvoive = mysqli_query($selectInvoive);
    $RsselectInvoive = mysqli_fetch_array($ObjselectInvoive);
    
    $selectCustomer = "SELECT * FROM `master_customer`,master_type WHERE master_customer.TypeID = master_type.TypeID AND master_customer.CustomerID='".$RsselectInvoive['CustomerID']."'";
    $ObjselectCustomer = mysqli_query($selectCustomer);
    $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);

    $selectProfile = "SELECT * FROM `profile`"; 
    $ObjselectProfile = mysqli_query($selectProfile);
    $RsselectProfile = mysqli_fetch_array($ObjselectProfile);
    //print_r($RsselectProfile);
    
?>
<link type="text/css" rel="stylesheet" href="./css/font-awesome.min.css">
<style>                 
    .HeaderInvoiceTable td{
        width:33%;
    }                
    .HeaderInvoiceTable{
        width: 100%;        
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-bottom: 5px;
    }             
</style>                                 
              
<div class="panel panel-default" style="padding:10px;">
                    <table class="HeaderInvoiceTable" width="100%">
                        <tr>    
                            <td style="width:33%;" width="33%">
                                <?php
                                    if(file_exists("./uploads/".$RsselectProfile['Logo']))
                                    {
                                        ?>
                                            <img src="./uploads/<?php echo $RsselectProfile['Logo'];?>" style="max-width: 200px;padding:5px 0;">
                                        <?php
                                    }
                                ?>
                            </td>
                            <td style="font-size: 25px;line-height: 40px;width:33%;" width="33%">
                                RETAIL INVOICE
                            </td>
                            <td align="right" style="font-size: 12px;width:33%;" width="33%">
                                <?php
                                    if($RsselectProfile['Address']!="")
                                    {
                                        ?>
                                            <div><?php echo $RsselectProfile['Address'];?></div>
                                        <?php
                                    }
                                ?>
                                <?php
                                    if($RsselectProfile['City']!="")
                                    {
                                        ?>
                                            <div><?php echo $RsselectProfile['City']." - ".$RsselectProfile['Pincode'].", ".$RsselectProfile['State'];?></div>
                                        <?php
                                    }
                                ?>
                                <?php
                                    if($RsselectProfile['Email']!="")
                                    {
                                        ?>
                                            <div><?php echo $RsselectProfile['Email'];?> | <?php echo $RsselectProfile['Website'];?></div>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div style="clear:both;"></div>
                    <div style="float:left;padding:10px;width:40%;">
                        <div>Invoice To</div>                        
                        <div style="line-height: 28px;font-size:30px;margin-bottom:10px;border-bottom:1px solid #000;float:left;"><?php echo $RsselectCustomer['FirstName']." ".$RsselectCustomer['LastName'];?></div>                        
                        <div style="clear:both;"></div>
                        <div><?php echo nl2br($RsselectCustomer['BillingAddress']);?></div>                        
                        <div><?php echo $RsselectCustomer['BillingCity'];?></div>                        
                        <?php
                            if($RsselectCustomer['MobileNumber']!="")
                            {
                                ?>
                                    <div style="font-weight:normal;">
                                        <div style="float:left;width:150px;"><b>Cell Number</b></div>
                                        <div style="float:left;width:150px;"><?php echo $RsselectCustomer['MobileNumber'];?></div>
                                        <div style="clear:both;"></div>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php
                            if($RsselectCustomer['Email']!="")
                            {
                                ?>
                                    <div style="font-weight:normal;">
                                        <div style="float:left;width:150px;"><b>Email</b></div>
                                        <div style="float:left;width:150px;"><?php echo $RsselectCustomer['Email'];?></div>
                                        <div style="clear:both;"></div>
                                    </div>
                                <?php
                            }
                        ?>                        
                        
                    </div>
                    <div style="float:right;width:40%;font-weight:normal;">
                        <div style="text-align:right;">
                            <div style="padding:10px;">
                                <div>
                                    <div style="float:right;width:150px;text-align:left;"><?php echo $RsselectInvoive['InvoiceID'];?></div>
                                    <div style="float:right;width:150px;text-align: left;"><b>Invoive No</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="margin-bottom:10px;border-bottom:1px solid #000;float:right;">
                                    <div style="float:right;width:150px;text-align:left;">
                                        <?php 
                                            $Date = explode("-",$RsselectInvoive['Date']);
                                            echo $Date[2]."-".$Date[1]."-".$Date[0];
                                        ?>                                
                                    </div>
                                    <div style="float:right;width:150px;text-align: left;"><b>Date</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="clear:both;"></div>
                                <div>
                                    <div style="float:right;width:150px;text-align:left;"><?php echo $RsselectCustomer['CustomerID'];?></div>
                                    <div style="float:right;width:150px;text-align: left;"><b>Customer ID</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:150px;text-align:left;"><?php echo $RsselectCustomer['IDType'];?>&nbsp;</div>
                                    <div style="float:right;width:150px;text-align: left;"><b>ID Type</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:150px;text-align:left;"><?php echo $RsselectCustomer['IDNumber'];?>&nbsp;</div>
                                    <div style="float:right;width:150px;text-align: left;"><b>ID No.</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:150px;text-align:left;"><?php echo $RsselectInvoive['PaymentMethod'];?></div>
                                    <div style="float:right;width:150px;text-align: left;"><b>Payment Method</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:150px;text-align:left;"><?php echo $RsselectInvoive['PaymentStatus'];?></div>
                                    <div style="float:right;width:150px;text-align: left;"><b>Payment Status</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <table class="table table-bordered table-hover bg-white">
                                    <thead>
                                        <tr class="active">
                                            <th class="text-right">No.</th>
                                            <th class="text-left">Company Name</th>
                                            <th class="text-left">Model Number / Item Name</th>
                                            <th class="text-left">Color</th>
                                            <th class="text-left">Size</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Frame No</th>
                                            <th class="text-right">Price</th>
                                            <th class="text-right">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            //print_r($RsselectInvoive);
                                            $count = 0;
                                            $TaxPrice = 0;
                                            $SubTotal = 0;
                                            $FinalTotal = 0;
                                            $TaxApplied = "";
                                            $selectRow = "SELECT * FROM `master_invoice_child`,master_company WHERE master_invoice_child.CompanyID = master_company.CompanyID AND master_invoice_child.InvoiceID='".$_REQUEST['id']."'";
                                            $ObjselectRow = mysqli_query($selectRow);
                                            while($RsselectRow = mysqli_fetch_array($ObjselectRow))
                                            {                 
                                                $count++;
                                                ?>
                                                    <tr>
                                                        <td class="text-right"><?php echo $count;?></td>
                                                        <td class="text-left"><?php echo $RsselectRow['CompanyName'];?></td>
                                                        <?php
                                                            if($RsselectRow['Type']=="cycle")
                                                            {
                                                                ?>
                                                                    <td class="text-left"><?php echo $RsselectRow['ModelNumber'];?></td>
                                                                    <td class="text-left"><?php echo $RsselectRow['Color'];?></td>
                                                                    <td class="text-left"><?php echo $RsselectRow['Size'];?></td>
                                                                <?php        
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                    <td colspan="3" class="text-left"><?php echo $RsselectRow['ItemName'];?></td>
                                                                <?php                                                                        
                                                            }
                                                        ?>
                                                        
                                                        <td class="text-right"><?php echo $RsselectRow['Quantity'];?></td>
                                                        <td class="text-right">
                                                            <?php 
                                                                $Frame = "";
                                                                $selectFrame = "select * from master_invoice_frame WHERE InvoiceChildID='".$RsselectRow['InvoiceChildID']."'";
                                                                $ObjselectFrame = mysqli_query($selectFrame);
                                                                while($RsselectFrame = mysqli_fetch_array($ObjselectFrame))
                                                                {
                                                                    $Frame = $Frame.$RsselectFrame['FrameValue'].",";
                                                                }
                                                                $Frame = substr($Frame,0,-1);
                                                                echo $Frame;
                                                            ?>
                                                            <?php
                                                                if($RsselectRow['Type']=="cycle")
                                                                {
                                                                    $selectCyclePrice = "SELECT * from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Type = 'cycle' AND Size = '".mysqli_real_escape_string($RsselectRow['Size'])."' AND Color='".$RsselectRow['Color']."' AND ModalName = '".$RsselectRow['ModelNumber']."' AND CompanyName = '".$RsselectRow['CompanyID']."' AND master_inventory_child.Active='1'";        
                                                                }
                                                                else
                                                                {
                                                                    $selectCyclePrice = "SELECT * from master_inventory_child,master_cyclezone_price WHERE master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND Type = 'spare' AND ItemName = '".$RsselectRow['ItemName']."' AND CompanyName = '".$RsselectRow['CompanyID']."' AND master_inventory_child.Active='1'";    
                                                                }
                                                                
                                                                //echo $selectCyclePrice;
                                                                $ObjselectCyclePrice = mysqli_query($selectCyclePrice);
                                                                $RsselectCyclePrice = mysqli_fetch_array($ObjselectCyclePrice);
                                                                $TaxApplied = $TaxApplied.$RsselectCyclePrice['TaxApplied'].",";
                                                                //print_r($RsselectCyclePrice);
                                                                //echo "TaxPrice=".$RsselectCyclePrice['TaxPrice']."<br />";
                                                                //echo "TaxApplied=".$RsselectCyclePrice['TaxApplied']."<br />";
                                                                
                                                                
                                                                
                                                            ?>
                                                        </td>
                                                        <td class="text-right">
                                                            <?php 
                                                                
                                                                if($RsselectCyclePrice['RoundPrice']>0)
                                                                {
                                                                    $InvisualPrice =  $RsselectCyclePrice['RoundPrice'];                                                                    
                                                                }
                                                                else
                                                                {
                                                                    $InvisualPrice =  floatval(floatval($RsselectCyclePrice['ProfitRs']) + floatval($RsselectCyclePrice['BasicPrice']));    
                                                                }
                                                                
                                                                $TaxAppliedIn = explode(",",$RsselectCyclePrice['TaxApplied']); 
                                                                foreach($TaxAppliedIn as $k=>$v)
                                                                {
                                                                    $selectTaxInd = "SELECT * FROM `master_tax` WHERE TaxID='".$v."'";
                                                                    $ObjselectTaxInd = mysqli_query($selectTaxInd);
                                                                    $RsselectTaxInd = mysqli_fetch_array($ObjselectTaxInd);
                                                                    
                                                                    
                                                                    if(!is_array($TaxPriceArray[$v]))
                                                                    {
                                                                        $TaxPriceArray[$v] = array();                                                                        
                                                                    }
                                                                    $ValueTax = ((floatval($InvisualPrice) * floatval($RsselectRow['Quantity'])) * floatval($RsselectTaxInd['TaxPer'])) /100;    
                                                                    array_push($TaxPriceArray[$v],$ValueTax);
                                                                    
                                                                    
                                                                    
                                                                }
                                                                echo number_format($InvisualPrice,2,".",",");
                                                                $Quantity = $RsselectRow['Quantity'];
                                                                $TaxPrice = floatval($TaxPrice) + floatval($RsselectCyclePrice['TaxPrice']);
                                                                $SubTotal = floatval($SubTotal) + floatval($InvisualPrice) * floatval($RsselectRow['Quantity']);                                                                
                                                            ?>
                                                        </td>
                                                        <td class="text-right"><?php echo number_format(floatval($InvisualPrice) * floatval($RsselectRow['Quantity']),2,".",",");?></td>
                                                    </tr>
                                                <?php
                                            }
                                            $TaxApplied = substr($TaxApplied,0,-1);
                                            $TaxApplied = explode(",",$TaxApplied);
                                            
                                            $TaxApplied = array_unique($TaxApplied);
                                            //print_r($RsselectCyclePrice);
                                            ?>
                                                <tr>
                                                    <td colspan="8" class="text-right" style="color:#000;">Sub Total</td>
                                                    <td class="text-right">
                                                        <?php 
                                                            $FinalTotal = floatval($FinalTotal) + floatval(round($SubTotal, 2));
                                                            echo number_format(round($SubTotal, 2),2,".",",");
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            foreach($TaxApplied as $k=>$v)
                                            {
                                                $selectTax = "SELECT * FROM `master_tax` WHERE TaxID='".$v."'";
                                                $ObjselectTax = mysqli_query($selectTax);
                                                $RsselectTax = mysqli_fetch_array($ObjselectTax);
                                                
                                                ?>
                                                    <tr>
                                                        <td colspan="8" class="text-right" style="color:#000;"><?php echo $RsselectTax['TaxName']." (".$RsselectTax['TaxPer']."%)"?></td>
                                                        <td class="text-right">
                                                            <?php 
                                                                $Tax = array_sum($TaxPriceArray[$v]);
                                                                $FinalTotal = floatval($FinalTotal) + floatval(round($Tax, 2));
                                                                echo number_format(round($Tax, 2),2,".",",");
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>                                         
                                        
                                        
                                        <tr>
                                            <td colspan="8" class="text-right" style="color:#000;">Shipping Charge</td>
                                            <td class="text-right"><?php $FinalTotal = floatval($FinalTotal) + floatval(round($RsselectInvoive['Shipping'], 2)); echo number_format($RsselectInvoive['Shipping'],2,".",",");?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="8" class="text-right" style="color:#000;">Discount</td>
                                            <td class="text-right"><?php $FinalTotal = floatval($FinalTotal) - floatval(round($RsselectInvoive['Discount'], 2));  echo number_format($RsselectInvoive['Discount'],2,".",",");?></td>
                                        </tr>
                                        <tr class="active">
                                            <td colspan="8" class="text-right" style="color:#000;">Total Price</td>
                                            <td class="text-right" style="color:#000;"><?php echo number_format(round($FinalTotal, 2),2,".",",");?></td>
                                        </tr>
                                    </tbody>
                                </table>
                    <div>&nbsp;</div>
                    <?php
                        if($RsselectInvoive['Note']!="")
                        {
                            ?>
                                <div class="form-group">
                                    Remark<br />
                                    <?php echo $RsselectInvoive['Note'];?>
                                </div>
                            <?php        
                        }
                    ?>
                    
                    <style>
                        .MyInfo{
                            width:100%;
                        }
                        .MyInfo td:first-child{
                            background:#d5d5d5;
                            padding:10px;
                            border:5px solid #fff;
                            vertical-align: top;
                            font-weight: normal;
                            width:25%;
                        }
                        .MyInfo td:nth-child(2n){
                            background:#d5d5d5;
                            padding:10px;
                            border:5px solid #fff;
                            vertical-align: top;
                            font-weight: normal;
                            width:25%;
                        }
                        .MyInfo td:nth-child(2n+3){
                            background:#d5d5d5;
                            padding:10px;
                            border:5px solid #fff;
                            vertical-align: top;
                            font-weight: normal;
                            width:50%;
                        }
                        .MyInfo td div:first-child{
                            font-weight: bold;
                            margin-bottom: 15px;
                            font-size:20px;
                            text-decoration: underline;
                        }
                        
                    </style>
                    <table class="MyInfo">
                        <tr>
                            <td>
                                <div><strong>Direct Diposit</strong></div>
                                <div><b><?php echo $RsselectProfile['AccountName'];?></b></div>
                                <div><?php echo $RsselectProfile['BankName'];?></div>
                                <div><?php echo $RsselectProfile['AccountNo'];?></div>
                                <div><?php echo $RsselectProfile['IFSCCode'];?></div>                                
                                <div><?php echo $RsselectProfile['BranchArea'].", ".$RsselectProfile['BankCity'];?></div>
                            </td>
                            <td>
                                <div><strong>Tax Details</strong></div>
                                <div>
                                    <div style="float: left; text-decoration: none; font-size: 16px; width: 63px;"><b>TIN No:</b></div>
                                    <div style="float:left;"><?php echo $RsselectProfile['TINNo'];?></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float: left; text-decoration: none; font-size: 16px; width: 63px;"><b>CST No:</b></div>
                                    <div style="float:left;"><?php echo $RsselectProfile['CSTNo'];?></div>
                                    <div style="clear:both;"></div>
                                </div>
                            </td>
                            <td>
                                <div><strong>Terms & Condition</strong></div>
                                
                                <?php 
                                    echo $RsselectProfile['Terms'];
                                ?>
                                
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
                            <b>Customer Care No:</b>&nbsp;<?php echo $RsselectProfile['CustomerCareNo'];?>&nbsp;&nbsp;<b>Service No:</b>&nbsp;<?php echo $RsselectProfile['ServiceNo'];?>
                        </div>
                        <div style="float:right;font-weight:bold;">Thank you for choosing cyclezone.</div>
                        <div style="clear:both;"></div>
                    </div>
                    
            </div>
                <div ng-controller="FormInputController as form" class="container-fluid ng-scope">
                <div>
                    <div class="panel-body">
                            <div class="row-fluid noprint"> 
                                <div class="span12">        
                                    <p>&nbsp;</p>
                                    <p><span style="font-weight:bold; font-size:14px; margin-bottom:5px;">Action:</span></p>
                                    <div style="cursor:pointer;" id="PrintInvoice">
                                        <div style="float:left;"><img src="images/printer.png"></div>
                                        <div style="float:left;padding-left:5px;color:#21759b;">Print Invoice</div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </div>
                            
                        
                        <div style="clear:both;"></div>
                   </div>
            </div>
            </div>

                