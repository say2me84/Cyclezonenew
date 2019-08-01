<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add CycleZone Inventory";    
    }
    
    if($_POST)
    {
        if(is_array($_REQUEST['TaxApplied']))
        {
            $TaxApplied = implode(",",$_REQUEST['TaxApplied']);
        }
        else
        {
            $TaxApplied = $_REQUEST['TaxApplied'];
        }
        
        
        $selectCycleZone = " SELECT * FROM `master_cyclezone_price` WHERE InventoryChildID = '".$_REQUEST['id']."' AND Active='1'";
        $ObjselectCycleZone = mysqli_query($selectCycleZone);
        $NumnselectCycleZone = mysqli_num_rows($ObjselectCycleZone);
        if($NumnselectCycleZone>0)
        {
            $UpdateCycleZone = "UPDATE `master_cyclezone_price` SET `BasicPrice` = '".$_REQUEST['BasicPrice']."',
                                                                    `TaxPrice` = '".$_REQUEST['TaxPrice']."',
                                                                    `TaxApplied` = '".$TaxApplied."',
                                                                    `ProfitPersontage` = '".$_REQUEST['ProfitPersontage']."',
                                                                    `ProfitRs` = '".$_REQUEST['ProfitRs']."',
                                                                    `RoundPrice` = '".$_REQUEST['RoundPrice']."',
                                                                    `CycleTotalPrice` = '".$_REQUEST['CycleTotalPrice']."' WHERE `InventoryChildID` ='".$_REQUEST['id']."';";
            mysqli_query($UpdateCycleZone);
        }
        else
        {
            $insertCycleZone = "INSERT INTO `master_cyclezone_price` (
                                                                        `InventoryChildID` ,
                                                                        `BasicPrice` ,
                                                                        `TaxPrice` ,
                                                                        `TaxApplied` ,
                                                                        `ProfitPersontage` ,
                                                                        `ProfitRs` ,
                                                                        `RoundPrice` ,
                                                                        `CycleTotalPrice`)
                                                                        VALUES (
                                                                        '".$_REQUEST['id']."', 
                                                                        '".$_REQUEST['BasicPrice']."', 
                                                                        '".$_REQUEST['TaxPrice']."', 
                                                                        '".$TaxApplied."', 
                                                                        '".$_REQUEST['ProfitPersontage']."', 
                                                                        '".$_REQUEST['ProfitRs']."', 
                                                                        '".$_REQUEST['RoundPrice']."', 
                                                                        '".$_REQUEST['CycleTotalPrice']."');";            
            mysqli_query($insertCycleZone);
        }
        
        $Msg = "Inventory Updated Successfully";            
        header("location:viewcycleinventory.php");
    }
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit CycleZone Inventory";    
        //$selectInventory = "SELECT * FROM `master_inventory_child`,`master_inventory`,master_company,master_cyclezone_price WHERE master_company.CompanyID = master_inventory_child.CompanyName AND `master_inventory`.InventoryID = `master_inventory_child`.InventoryID  AND master_cyclezone_price.InventoryChildID = master_inventory_child.InventoryChildID AND `master_inventory_child`.InventoryChildID='".$_REQUEST['id']."'";
        $selectInventory = "SELECT * FROM `master_inventory_child`,`master_inventory`,master_company WHERE master_company.CompanyID = master_inventory_child.CompanyName AND `master_inventory`.InventoryID = `master_inventory_child`.InventoryID  AND `master_inventory_child`.InventoryChildID='".$_REQUEST['id']."'";
        $ObjselectInventory = mysqli_query($selectInventory);
        $RsselectInventory = mysqli_fetch_array($ObjselectInventory);
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
                            <input type="hidden" name="action" value="<?php echo $_REQUEST['action'];?>">
                            <div>
                            <div class="InventoryLeft">
                                <div><label class="control-label">Supplier Company Name</label></div>
                                <div id="divSupplierInfo">
                                    <?php
                                        $selectSupplier = " SELECT * FROM `master_supplier` WHERE SupplierID='".$RsselectInventory['SupplierID']."'";
                                        $ObjselectSupplier = mysqli_query($selectSupplier);
                                        $RsselectSupplier = mysqli_fetch_array($ObjselectSupplier);
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
                                </div>
                            </div>
                            <div class="InventoryRight">
                                <div class="text-left Heading ng-scope">Products Details</div>
                                <div>
                                    <div class="TypeRadio">
                                        <?php
                                            //print_r($RsselectInventory);
                                            if($RsselectInventory['Type']=="cycle")
                                            {
                                                ?>
                                                    <div class="radio c-radio" style="float:left;">
                                                        <label>
                                                            <input type="radio" value="cycle" name="Type" id="CycleTypeRadio" checked="checked">
                                                            <span class="fa fa-circle"></span>Cycle
                                                        </label>
                                                    </div>
                                                <?php        
                                            }
                                            else
                                            {
                                                ?>
                                                    <div class="radio c-radio" style="float:left;padding-top: 14px;">
                                                        <label>
                                                           <input type="radio" value="spare" name="Type" id="SpareTypeRadio" checked="checked">
                                                           <span class="fa fa-circle"></span>Spare
                                                        </label>
                                                    </div>
                                                <?php        
                                            }
                                        ?>
                                        
                                        
                                        
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div style="float:left;width:50%;padding-right:2%;">
                                        <div><label class="control-label">Company Name</label></div>
                                        <div><?php echo $RsselectInventory['CompanyName'];?></div>
                                    </div>
                                    <div style="float:left;width:50%;padding-left:2%;">
                                        <?php
                                            if($RsselectInventory['Type']=="cycle")
                                            {
                                                ?>
                                                    <div class="CycleType">
                                                        <div><label class="control-label">Modal Name</label></div>
                                                        <div><?php echo $RsselectInventory['ModalName'];?></div>
                                                    </div>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <div class="SpareType">
                                                        <div><label class="control-label">Item Name</label></div>
                                                        <div><?php echo $RsselectInventory['ItemName'];?></div>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                        
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <?php
                                    if($RsselectInventory['Type']=="cycle")
                                    {
                                        ?>
                                        <div class="CycleType">
                                            <div style="float:left;width:50%;padding-right:2%;">
                                                <div><label class="control-label">Color</label></div>
                                                <div><?php echo $RsselectInventory['Color'];?></div>
                                            </div>
                                            <div style="float:left;width:50%;padding-left:2%;">
                                                <div><label class="control-label">Size</label></div>
                                                <div><?php echo $RsselectInventory['Size'];?></div>
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>    
                                <?php
                                    }
                                ?>  
                                <div>&nbsp;</div>
                                <div class="panel panel-default" id="PricingBox">
                                    <div class="panel-heading">
                                        <div class="text-left Heading ng-scope">CycleZone Pricing Details</div>
                                    </div>
                                    <?php
                                        $selectCycleZone = " SELECT * FROM `master_cyclezone_price` WHERE InventoryChildID = '".$_REQUEST['id']."' AND Active='1'";
                                        $ObjselectCycleZone = mysqli_query($selectCycleZone);
                                        $NumnselectCycleZone = mysqli_num_rows($ObjselectCycleZone);
                                        if($NumnselectCycleZone>0)
                                        {
                                            $RsselectCycleZone = mysqli_fetch_array($ObjselectCycleZone);
                                        }
                                    ?>
                                    <div style="clear:both;"></div>
                                    <div class="panel-body">
                                        <div class="ng-isolate-scope">
                                        <div class="tab-content">
                                            <div class="tab-pane ng-scope active MainTabContentCycle" id="CycleZonePrice">
                                                <div class="CycleZonePriceChildBox">
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div><label class="control-label">Basic Price</label></div>
                                                        <div>
                                                            <?php
                                                                $Price = ((floatval($RsselectInventory['OrgBasicPrice']) * floatval($RsselectInventory['OrgQuantity'])) + floatval($RsselectInventory['OrgTaxPrice']) - floatval($RsselectInventory['OrgDiscountPrice']) - floatval($RsselectInventory['OrgSchemePrice'])) / floatval($RsselectInventory['OrgQuantity']);
                                                            ?>
                                                            <input type="text" name="BasicPrice" value="<?php echo $Price;?>" readonly="readonly" id="CycleZoneBasicPrice" class="CycleZoneBasicPrice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="float:left;width:50%;padding-left:2%;">
                                                        <div style="float:left;width:23%;padding-right:1%;">
                                                            <div><label class="control-label">Profit (%)</label></div>
                                                            <div>
                                                                <input type="text" value="<?php echo $RsselectCycleZone['ProfitPersontage'];?>" name="ProfitPersontage" tabindex="15" class="ProfitPersontage PriceChild form-control" style="width:100%;">
                                                            </div>
                                                        </div>
                                                        <div style="float:left;width:38%;padding-right:1%;padding-left:1%;">
                                                            <div><label class="control-label">Profit (Rs)</label></div>
                                                            <div>
                                                                <input type="text" value="<?php echo $RsselectCycleZone['ProfitRs'];?>" name="ProfitRs" tabindex="15" class="ProfitRs PriceChild form-control" style="width:100%;">
                                                            </div>                                                        
                                                            
                                                        </div>
                                                        <div style="float:left;width:38%;padding-left:1%;">
                                                            <div><label class="control-label">Total</label></div>
                                                            <div>
                                                                <input type="text" value="<?php echo floatval($Price) + floatval($RsselectCycleZone['ProfitRs']);?>" name="ProfitTotal" tabindex="15" readonly="readonly" class="ProfitTotal PriceChild form-control" style="width:100%;">
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="float:left;width:50%;padding-right:2%;">
                                                        <div>
                                                            <div><label class="control-label">Round Price (Rs)</label></div>
                                                            <div>
                                                                <input type="text" value="<?php echo $RsselectCycleZone['RoundPrice'];?>" name="RoundPrice" tabindex="16" class="RoundPrice PriceChild form-control" style="width:100%;">
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
                                                                    $TaxApplied = explode(",",$RsselectCycleZone['TaxApplied']);
                                                                    while($RsselectTax = mysqli_fetch_array($ObjselectTax))
                                                                    {                                                                                            
                                                                        $TotalTax = $TotalTax + floatval($RsselectTax['TaxPer']);
                                                                        
                                                                        if(array_search($RsselectTax['TaxID'],$TaxApplied)>-1)
                                                                        {
                                                                            $checked = 'checked="checked"';
                                                                        }
                                                                        else
                                                                        {
                                                                            $checked = '';
                                                                        }
                                                                        
                                                                        ?>
                                                                            &nbsp;&nbsp;&nbsp;<input type="hidden" value="<?php echo $TotalTax;?>">
                                                                            <span><input <?php echo $checked;?> tabindex="14" name="TaxApplied[]" rel="<?php echo $RsselectTax['TaxPer'];?>" class="PriceChild CycleZoneTaxBoxCheckBox" type="checkbox" value="<?php echo $RsselectTax['TaxID'];?>"></span>
                                                                            <span><?php echo $RsselectTax['TaxName'];?></span>
                                                                        <?php
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                        <div>
                                                            <input type="text" value="<?php echo $RsselectCycleZone['TaxPrice'];?>" name="TaxPrice" readonly="readonly" class="CycleZoneTaxPrice PriceChild form-control" style="width:100%;">
                                                        </div>                                                        
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="float:right;width:48%;">
                                                        <div><label class="control-label">Total Cycle Zone Price</label></div>
                                                        <div>
                                                            <input type="text" value="<?php echo $RsselectCycleZone['CycleTotalPrice'];?>" name="CycleTotalPrice" readonly="readonly" class="CycleTotalPriice PriceChild form-control" style="width:100%;">
                                                        </div>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>      
                                <div style="text-align: center;padding-top:10px">
                                    <button tabindex="18" class="mr btn btn-labeled btn-success text-center" type="submit">
                                        <span class="btn-label">
                                            <i class="fa fa-check"></i>
                                        </span>Update
                                    </button>
                                </div>    
                            </div>
                            <div style="clear:both;"></div>
                            </div>
                            <div>&nbsp;</div>
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
                var FinalTotalProfitbase = (parseFloat($('#CycleZoneBasicPrice').val()) * parseFloat(ProfitPersontage))/parseFloat(100);
                FinalTotalProfitbase = FinalTotalProfitbase.toFixed(2);
                $('.ProfitRs').val(FinalTotalProfitbase);    
            }
             
            if($(this).hasClass('ProfitRs'))
            {                                                                                                             
                var FinalTotalProfitbase = (parseFloat($('.ProfitRs').val()) * parseFloat(100))/parseFloat($('#CycleZoneBasicPrice').val());
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
            
            var ProfitTotal = parseFloat($('#CycleZoneBasicPrice').val()) + parseFloat(ProfitRs);
            ProfitTotal = ProfitTotal.toFixed(2);             
            $('.ProfitTotal').val(ProfitTotal);
            
            
            
            var CycleZoneTotalTaxPrice = 0;
            if($(".CycleZoneBasicPrice").val()!="")
            {
                var CycleZoneTotalTax = 0;
                $('.divTaxBoxCycle input[type=checkbox]').each(function(index) {
                    if($(this).is(":checked"))
                    {
                        CycleZoneTotalTax = parseFloat(CycleZoneTotalTax) + parseFloat($(this).attr('rel'));                    
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
            if($('.RoundPrice').val()!="" && $('.RoundPrice').val()>0)
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
                            OrgTaxApplied = OrgTaxApplied +","+ parseFloat($(this).attr('rel'));                    
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
                    var CycleAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ModalName option:selected').text()+'</td><td class="text-center">'+$('#Color option:selected').text()+'</td><td class="text-center">'+$('#Size option:selected').text()+'</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+ (parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="AddComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="AddModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="AddItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="AddColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="AddSize['+NoRow+']" value='+$('#Size option:selected').text()+'><input type="hidden" class="HidQuantity" name="AddQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="AddOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="AddOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="AddOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="AddOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="AddOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="AddOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="AddCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="AddProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="AddProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="AddRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="AddSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="AddSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="AddTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="AddType['+NoRow+']" value="'+Type+'" >';
                    var SpareAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ItemName option:selected').text()+'</td><td class="text-center">-</td><td class="text-center">-</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+(parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="AddComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="AddModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="AddItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="AddColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="AddSize['+NoRow+']" value='+$('#Size option:selected').text()+'><input type="hidden" class="HidQuantity" name="AddQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="AddOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="AddOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="AddOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="AddOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="AddOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="AddOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="AddCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="AddProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="AddProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="AddRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="AddSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="AddSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="AddTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="AddType['+NoRow+']" value="'+Type+'" >';
                    
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
                    var CycleAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ModalName option:selected').text()+'</td><td class="text-center">'+$('#Color option:selected').text()+'</td><td class="text-center">'+$('#Size option:selected').text()+'</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+ (parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="EditComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="EditModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="EditItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="EditColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="EditSize['+NoRow+']" value='+$('#Size option:selected').text()+'><input type="hidden" class="HidOrgQuantity" name="EditQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="EditOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="EditCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="EditProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="EditProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="EditRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="EditSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="EditSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="EditTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="EditType['+NoRow+']" value="'+Type+'" >';
                    var SpareAddrow = '<td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;"><div style="width:102px;"><div class="EditInvertory btn btn-sm btn-info" style="float:left;margin-right:5px;"><em class="fa fa-pencil"></em></div><div class="RemoveInvertory btn btn-sm btn-danger" style="float:left;"><em class="fa fa-trash"></em></div><div style="clear:both;"></div></div></td><td style="width: 20px; text-align: center; padding-right: 10px; padding-right: 10px;">'+SrNo+'</td><td class="text-center">'+$('#ComapanyName option:selected').text()+'</td><td class="text-center">'+$('#ItemName option:selected').text()+'</td><td class="text-center">-</td><td class="text-center">-</td><td class="text-right">'+$('#CycleQuantity').val()+'</td><td class="text-right">'+(parseFloat($('.OrgTotalPriice').val()) / parseFloat($('#CycleQuantity').val())).toFixed(2)+'</td><td class="text-right">'+TotalLandinPrice+'</td><input type="hidden" class="HidComapanyName" name="EditComapanyName['+NoRow+']" value="'+$('#ComapanyName').val()+'" ><input type="hidden" class="HidModalName" name="EditModalName['+NoRow+']" value="'+$('#ModalName').val()+'" ><input type="hidden" class="HidItemName" name="EditItemName['+NoRow+']" value="'+$('#ItemName option:selected').text()+'" ><input type="hidden" class="HidColor" name="EditColor['+NoRow+']" value="'+$('#Color').val()+'" ><input type="hidden" class="HidSize" name="EditSize['+NoRow+']" value='+$('#Size option:selected').text()+'><input type="hidden" class="HidOrgQuantity" name="EditQuantity['+NoRow+']" value="'+$('#CycleQuantity').val()+'" ><input type="hidden" class="HidOrgBasicPrice" name="EditOrgBasicPrice['+NoRow+']" value="'+$('.OrgBasicPrice').val()+'" ><input type="hidden" class="HidOrgTaxPrice" name="EditOrgTaxPrice['+NoRow+']" value="'+$('.TaxPrice').val()+'" ><input type="hidden" class="HidOrgTaxApplied" name="EditOrgTaxApplied['+NoRow+']" value="'+OrgTaxApplied+'" ><input type="hidden" class="HidOrgDiscount" name="EditOrgDiscount['+NoRow+']" value="'+$('.OrgDiscount').val()+'" ><input type="hidden" class="HidOrgScheme" name="EditOrgScheme['+NoRow+']" value="'+$('.OrgScheme').val()+'" ><input type="hidden" class="HidOrgTotalPrice" name="EditOrgTotalPrice['+NoRow+']" value="'+$('.OrgTotalPriice').val()+'" ><input type="hidden" class="HidCycleZoneTaxApplied" name="EditCycleZoneTaxApplied['+NoRow+']" value="'+TaxApplied+'" ><input type="hidden" class="HidProfitRs" name="EditProfitRs['+NoRow+']" value="'+$('.ProfitRs').val()+'" ><input type="hidden" class="HidProfitTotal" name="EditProfitTotal['+NoRow+']" value="'+$('.ProfitTotal').val()+'" ><input type="hidden" class="HidRoundPrice" name="EditRoundPrice['+NoRow+']" value="'+$('.RoundPrice').val()+'" ><input type="hidden" class="HidSingalTaxPrice" name="EditSingalTaxPrice['+NoRow+']" value="'+$('.CycleZoneTaxPrice').val()+'" ><input type="hidden" class="HidSingalBasicPrice" name="EditSingalBasicPrice['+NoRow+']" value="'+$('#CycleZoneBasicPrice').val()+'" ><input type="hidden" class="HidTotalPrice" name="EditTotalPrice['+NoRow+']" value="'+TotolPriceRow+'" ><input type="hidden" class="HidType" name="EditType['+NoRow+']" value="'+Type+'" >';
                    
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
                                        $("#Size").html(html);        
                                        $('#Size').val(thisobj.parents('tr').find('.HidSize').val());
                                        
                                        
                                        $('.OrgBasicPrice').val(thisobj.parents('tr').find('.HidOrgBasicPrice').val())
                                        $('.Quantity').val(thisobj.parents('tr').find('.HidOrgQuantity').val());
                                        $('#TotalSupplierPrice').val(parseFloat(thisobj.parents('tr').find('.HidOrgBasicPrice').val()) * parseFloat(thisobj.parents('tr').find('.HidOrgQuantity').val()));
                                        $('.TaxPrice').val(thisobj.parents('tr').find('.HidOrgTaxPrice').val());
                                        var OrgTaxApplied = thisobj.parents('tr').find('.HidOrgTaxApplied').val();
                                        var arrOrgTaxApplied = OrgTaxApplied.split(',');
                                        $('.divTaxBox input[type=checkbox]').each(function(index) {
                                            if($.inArray($(this).attr('rel'),arrOrgTaxApplied)>-1)
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
                                        $('.CycleZoneBasicPrice').val(thisobj.parents('tr').find('.HidSingalBasicPrice').val());
                                        var FinalTotalProfitbase = (parseFloat(thisobj.parents('tr').find('.HidProfitRs').val()) * parseFloat(100))/parseFloat($('.OrgBasicPrice').val());
                                        FinalTotalProfitbase = FinalTotalProfitbase.toFixed(2);
                                        $('.ProfitPersontage').val(FinalTotalProfitbase);    
                                        $('.ProfitRs').val(thisobj.parents('tr').find('.HidProfitRs').val());
                                        $('.ProfitTotal').val(thisobj.parents('tr').find('.HidProfitTotal').val());
                                        $('.RoundPrice').val(thisobj.parents('tr').find('.HidRoundPrice').val());
                                        $('.CycleZoneTaxPrice').val(thisobj.parents('tr').find('.HidSingalTaxPrice').val());
                                        var CycleZoneTaxApplied = thisobj.parents('tr').find('.HidCycleZoneTaxApplied').val();
                                        var arrCycleZoneTaxApplied = CycleZoneTaxApplied.split(',');
                                        $('.divTaxBoxCycle input[type=checkbox]').each(function(index) {
                                            if($.inArray($(this).attr('rel'),arrCycleZoneTaxApplied)>-1)
                                            {
                                                $(this).attr('checked','checked');                    
                                            }
                                            else
                                            {
                                                $(this).attr('checked',false);                                                                    
                                            }
                                        });
                                        $('.CycleTotalPriice').val(thisobj.parents('tr').find('.HidTotalPrice').val());
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
                            if($.inArray($(this).attr('rel'),arrOrgTaxApplied)>-1)
                            {
                                $(this).attr('checked','checked');                    
                            }
                        });
                        $('.OrgDiscount').val(thisobj.parents('tr').find('.HidOrgDiscount').val());
                        $('.OrgScheme').val(thisobj.parents('tr').find('.HidOrgScheme').val());
                        var OrgTotalPriice = (parseFloat($('.OrgBasicPrice').val()) * parseFloat($('.Quantity').val())) + parseFloat($('.TaxPrice').val()) - parseFloat($('.OrgDiscount').val()) - parseFloat($('.OrgScheme').val());
                        $('.OrgTotalPriice').val(OrgTotalPriice);
                        $('.CycleZoneBasicPrice').val(thisobj.parents('tr').find('.HidSingalBasicPrice').val());
                        var FinalTotalProfitbase = (parseFloat(thisobj.parents('tr').find('.HidProfitRs').val()) * parseFloat(100))/parseFloat($('.OrgBasicPrice').val());
                        FinalTotalProfitbase = FinalTotalProfitbase.toFixed(2);
                        $('.ProfitPersontage').val(FinalTotalProfitbase);    
                        $('.ProfitRs').val(thisobj.parents('tr').find('.HidProfitRs').val());
                        $('.ProfitTotal').val(thisobj.parents('tr').find('.HidProfitTotal').val());
                        $('.RoundPrice').val(thisobj.parents('tr').find('.HidRoundPrice').val());
                        $('.CycleZoneTaxPrice').val(thisobj.parents('tr').find('.HidSingalTaxPrice').val());
                        var CycleZoneTaxApplied = thisobj.parents('tr').find('.HidCycleZoneTaxApplied').val();
                        var arrCycleZoneTaxApplied = CycleZoneTaxApplied.split(',');
                        $('.divTaxBoxCycle input[type=checkbox]').each(function(index) {
                            if($.inArray($(this).attr('rel'),arrCycleZoneTaxApplied)>-1)
                            {
                                $(this).attr('checked','checked');                    
                            }
                        });
                        $('.CycleTotalPriice').val(thisobj.parents('tr').find('.HidTotalPrice').val());
                        
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