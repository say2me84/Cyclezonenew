<?php
    include("config.php");
    $Msg = "";
    $title = "View Invoice";    
    
    include("header.php");
    include("sidebar.php");
    
    $selectInvoive = "SELECT * FROM `master_invoice` WHERE Active='1' AND InvoiceID='".$_REQUEST['id']."'";
    $ObjselectInvoive = mysqli_query($selectInvoive);
    $RsselectInvoive = mysqli_fetch_array($ObjselectInvoive);
    
    $selectCustomer = "SELECT * FROM `master_customer` WHERE master_customer.CustomerID='".$RsselectInvoive['CustomerID']."'";
    $ObjselectCustomer = mysqli_query($selectCustomer);
    $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);

    $selectProfile = "SELECT * FROM `profile`"; 
    $ObjselectProfile = mysqli_query($selectProfile);
    $RsselectProfile = mysqli_fetch_array($ObjselectProfile);
?>
   
<style>
    .table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #000;}                 
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{padding:2px 5px;font-size:13px;}
    .table > thead > tr > th {color: #000 !important;padding-bottom: 5px !important;padding-top: 5px !important;}
    .HeaderInvoiceTable td{
        width:50%;
    }                
    .HeaderInvoiceTable{
        width: 100%;        
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-bottom: 5px;
    }             
</style>                                 
                                                                 
<section class="ng-scope">
    <div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2" style="color:#000;font-weight:bold;">
        <div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2">
            <div class="app-view-header ng-scope"><?php echo $title;?> <!--<small>Classic and new components</small>--></div>
            <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
            <div class="mainbar">
                <div class="panel panel-default MainPrintInvoiceBox" style="padding:10px;">
                    <table class="HeaderInvoiceTable">
                        <tr>    
                            <td>
                                <?php
                                    if(file_exists("./uploads/".$RsselectProfile['Logo']))
                                    {
                                        ?>
                                            <img src="./uploads/<?php echo $RsselectProfile['Logo'];?>" style="max-width: 200px;padding:5px 0;">
                                        <?php
                                    }
                                ?>
                            </td>
                            <td align="right" style="font-size: 12px;">
                                <?php
                                    if($RsselectProfile['Address']!="")
                                    {
                                        ?>
                                            <div><?php echo $RsselectProfile['Address'];?>&nbsp;<l class="fa fa-map-marker"></i></div>
                                        <?php
                                    }
                                ?>
                                <?php
                                    if($RsselectProfile['City']!="")
                                    {
                                        ?>
                                            <div><?php echo $RsselectProfile['City']." - ".$RsselectProfile['Pincode'].", ".$RsselectProfile['State'];?>&nbsp;<l class="fa fa-map-marker"></i></div>
                                        <?php
                                    }
                                ?>
                                <?php
                                    if($RsselectProfile['Email']!="")
                                    {
                                        ?>
                                            <div><?php echo $RsselectProfile['Email'];?>&nbsp;<l class="fa fa-envelope-o"></i> | <?php echo $RsselectProfile['Website'];?>&nbsp;<l class="fa fa-globe"></i></div>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <div style="clear:both;"></div>
                    <div style="float:left;padding:10px;width:60%;">
                        <div>Invoice To</div>                        
                        <div style="line-height: 20px;font-size:20px;margin-bottom:10px;border-bottom:1px solid #000;float:left;"><?php echo $RsselectCustomer['FirstName']." ".$RsselectCustomer['LastName'];?></div>                        
                        <div style="clear:both;"></div>
                        <div style="font-size: 14px;"><?php echo nl2br($RsselectCustomer['BillingAddress']);?></div>                        
                        <div style="font-size: 14px;"><?php echo $RsselectCustomer['BillingCity'];?></div>                        
                        <?php
                            if($RsselectCustomer['MobileNumber']!="")
                            {
                                ?>
                                    <div style="font-weight:normal;">
                                        <div style="float:left;width:150px;font-size: 14px;"><b>Cell No.</b></div>
                                        <div style="float:left;width:150px;font-size: 14px;"><?php echo $RsselectCustomer['MobileNumber'];?></div>
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
                                        <div style="float:left;width:150px;font-size: 14px;"><b>Email</b></div>
                                        <div style="float:left;width:150px;font-size: 14px;"><?php echo $RsselectCustomer['Email'];?></div>
                                        <div style="clear:both;"></div>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php
                            if($RsselectCustomer['CustomerID']!="")
                            {
                                ?>
                                    <div style="font-weight:normal;">
                                        <div style="float:left;width:150px;font-size: 14px;"><b>Customer ID</b></div>
                                        <div style="float:left;width:150px;font-size: 14px;"><?php echo $RsselectCustomer['CustomerID'];?></div>
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
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;"><b>Retail Invoice</b></div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Invoice Type</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="margin-bottom:10px;border-bottom:1px solid #000;float:right;">
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;"><b><?php echo $RsselectInvoive['InvoiceNo'];?><b></div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Invoice No</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="clear:both;"></div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;">
                                        <?php 
                                            $Date = explode("-",$RsselectInvoive['Date']);
                                            echo $Date[2]."-".$Date[1]."-".$Date[0];
                                        ?>                                
                                    </div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Date</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;"><?php echo $RsselectCustomer['IDType'];?>&nbsp;</div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>ID Type</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;"><?php echo $RsselectCustomer['IDNumber'];?>&nbsp;</div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>ID No.</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;"><?php echo $RsselectInvoive['PaymentMethod'];?></div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Payment Method</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float:right;width:120px;text-align:left;font-size: 14px;font-weight:normal;"><?php echo $RsselectInvoive['PaymentStatus'];?></div>
                                    <div style="float:right;width:120px;text-align: left;font-size: 14px;"><b>Payment Status</b></div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <table class="table table-bordered table-hover bg-white">
                                    <thead>
                                        <tr class="active">
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
                                                        <td class="text-center"><?php echo $count;?></td>
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
                                                        
                                                        <td class="text-center"><?php echo $RsselectRow['Quantity'];?></td>
                                                        <td class="text-left">
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
                                                                    //echo $selectCyclePrice;
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
                                                                    $InvisualPrice = $RsselectCyclePrice['RoundPrice'];                                                                    
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
                                                                //echo "<br />".$RsselectCyclePrice['TaxPrice'];
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
                        pre code, table {
                            background-color: none;
                        }
                        .MyInfo{
                            width:100%;
                        }
                        .MyInfo td{
                            background:#d5d5d5;
                        }
                        .MyInfo td:first-child{
                            background:#88909C !important;
                            padding:10px;
                            border:5px solid #fff;
                            vertical-align: top;
                            font-weight: normal;
                            width:25%;
                            font-size:13px;
                        }
                        .MyInfo td:nth-child(2n){
                            background:#88909C !important;
                            padding:10px;
                            border:5px solid #fff;
                            vertical-align: top;
                            font-weight: normal;
                            width:25%;
                            font-size:13px;
                        }
                        .MyInfo td:nth-child(2n+3){
                            background:#88909C !important;
                            padding:10px;
                            border:5px solid #fff;
                            vertical-align: top;
                            font-weight: normal;
                            width:50%;
                            font-size:13px;
                        }
                        .MyInfo td div:first-child{
                            font-weight: bold;
                            margin-bottom: 5px;
                            font-size:17px;
                            text-decoration: underline;
                        }
                        
                    </style>
                    <table class="MyInfo">
                        <tr>
                            <td>
                                <div><strong>Direct Deposit</strong></div>
                                <div><b><?php echo $RsselectProfile['AccountName'];?></b></div>
                                <div><?php echo $RsselectProfile['BankName'];?></div>
                                <div><?php echo $RsselectProfile['AccountNo'];?></div>
                                <div><?php echo $RsselectProfile['IFSCCode'];?></div>                                
                                <div><?php echo $RsselectProfile['BranchArea'].", ".$RsselectProfile['BankCity'];?></div>
                            </td>
                            <td>
                                <div><strong>Tax Details</strong></div>
                                <div>
                                    <div style="float: left; text-decoration: none; font-size: 13px;"><b>TIN No:</b></div>
                                    <div style="float:left;">&nbsp;&nbsp;&nbsp;<?php echo $RsselectProfile['TINNo'];?></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div>
                                    <div style="float: left; text-decoration: none; font-size: 13px;"><b>CST No:</b></div>
                                    <div style="float:left;">&nbsp;&nbsp;<?php echo $RsselectProfile['CSTNo'];?></div>
                                    <div style="clear:both;"></div>
                                </div>
                            </td>
                            <td>
                                <div><strong>Terms & Condition</strong></div>
                                <ul style="margin: 0px;padding-left: 20px;">
                                <?php 
                                    $textareaData = '<li>'.str_replace("\n","</li>\n<li>",trim($RsselectProfile['Terms'],"\n")).'</li>';
                                    echo $textareaData;
                                ?>
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
    </div>
</section>

<?php
    include("footer.php");
?>

      
<script type="text/javascript">
    $(document).ready(function() {
        $("#AddRowButton").click(function() {
            var NoRow = parseInt($('#Addrow').attr('rel')) + parseInt(1);
            $('#Addrow').attr('rel',NoRow);
            $.ajax({
                url: 'ajax.php?filter=getInvoiceRow&Addrow='+$('#Addrow').attr('rel'),
                success: function(html) 
                {
                    $('#Addrow').append(html);
                }
            });                  
        });
        $('body').on('change', '.ComapanyName', function() {
            var thisobj = $(this);   
            $.ajax({
                url: 'ajax.php?filter=GetModalNo&CompanyName='+$(this).val(),
                success: function(html) 
                {
                    thisobj.parents('tr').find('.ModalName').html(html);
                }
            });      
        });
        $('body').on('change', '.ModalName', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ModalName = thisobj.parents('tr').find('.ModalName').val();
            $.ajax({
                url: 'ajax.php?filter=GetColor&ModalName='+ModalName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {
                    thisobj.parents('tr').find('.Color').html(html);
                }
            });      
        });
        $('body').on('change', '.Color', function() {
            var thisobj = $(this);   
            var ComapanyName = thisobj.parents('tr').find('.ComapanyName').val();
            var ModalName = thisobj.parents('tr').find('.ModalName').val();
            var Color = thisobj.parents('tr').find('.Color').val();
            $.ajax({
                url: 'ajax.php?filter=GetSize&Color='+Color+'&ModalName='+ModalName+"&CompanyName="+ComapanyName,
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
            if(Quantity=="")
            {
                Quantity = 0;                                
            }
            $.ajax({
                url: 'ajax.php?filter=GetPrice&Quantity='+Quantity+'&Size='+Size+'&Color='+Color+'&ModalName='+ModalName+"&CompanyName="+ComapanyName,
                success: function(html) 
                {
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
            var CustomerID = $("#CustomerID").val();              
            var SupplierID = $("#SupplierID").val();              
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
            if(CustomerID==0)
            {
                $("#CustomerID").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#CustomerID').attr('style', 'border:1px solid #ccc !important');
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
            if(PaymentMethod==0)
            {
                $("#PaymentMethod").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#PaymentMethod').attr('style', 'border:1px solid #ccc !important');
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
    });
</script>
<script>             
    $('#PrintInvoice').click(function(event){       
        
        var htmlcontent = $('.MainPrintInvoiceBox').html();        
        htmlcontent = $(htmlcontent.bold()); 
        htmlcontent.find('script').remove();
        htmlcontent.find('link').remove();
        var mywindow = window.open('', 'MainPrintInvoiceBox', 'width=800,scrollbars=1');
        mywindow.document.write('<html><head><link rel="stylesheet" href="./css/style.css"><link type="text/css" rel="stylesheet" href="./css/font-awesome.min.css"><link rel="stylesheet" href="./css/application-f35d0077.css"><title>Invoice No <?php echo $_REQUEST['id'];?></title>');
        mywindow.document.write('<style type="text/css"> .table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #000;}.table > thead > tr > th {color: #000 !important;padding-bottom: 5px !important;padding-top: 5px !important;}.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{padding:5px;}.MyInfo{width:100%;}.MyInfo td:first-child{background:#d5d5d5;padding:10px;border:5px solid #fff;vertical-align: top;font-weight: normal;width:25%;}.MyInfo td:nth-child(2n){background:#d5d5d5;padding:10px;border:5px solid #fff;vertical-align: top;font-weight: normal;width:25%;}.MyInfo td:nth-child(2n+3){background:#d5d5d5;padding:10px;border:5px solid #fff;vertical-align: top;font-weight: normal;width:50%;}.MyInfo td div:first-child{font-weight: bold;margin-bottom: 15px;font-size:17px;text-decoration: underline;}.HeaderInvoiceTable td{width:33%;}.HeaderInvoiceTable{width: 100%;border-top: 1px solid #000;border-bottom: 1px solid #000;margin-bottom: 5px;}html {color:#000 !important;overflow-x: hidden;overflow-y: auto;}.noprint { display:none; } table th, table td{margin:0px;padding:5px;} </style></head><body>');
        mywindow.document.write(htmlcontent.html());
        mywindow.document.write('</body></html>');
        mywindow.document.close();
        mywindow.print();      
    })
    
</script>
</body></html>