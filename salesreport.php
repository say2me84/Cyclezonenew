<?php
    include("config.php");
    $Msg = "";
    $title = "Sales Report";    
    include("header.php");
    include("sidebar.php");
?>
<section class="ng-scope">
    <div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2">
        <div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2">
            <div class="app-view-header ng-scope"><?php echo $title;?> <!--<small>Classic and new components</small>--></div>
            <div ng-controller="FormInputController as form" class="container-fluid ng-scope">
                <form id="FrmWareHouse" action="" method="post">
                    <div class="panel panel-default">  
                        <div class="panel-body">
                            <div class="TypeRadio">
                                <div class="radio c-radio" style="float:left;margin: 0;">
                                    <label>
                                        <input value="cycle" name="Type" id="CycleTypeRadio" checked="checked" type="radio">
                                        <span class="fa fa-circle"></span>Cycle
                                    </label>
                                </div>
                                <div class="radio c-radio" style="float:left;margin: 0;padding-left: 1%">
                                    <label>
                                       <input value="spare" name="Type" id="SpareTypeRadio" type="radio">
                                       <span class="fa fa-circle"></span>Spare
                                    </label>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div>
                                <div style="float:left;width:25%;">
                                    <div><label class="control-label">Customer Name</label></div>
                                    <div>
                                        <select tabindex="3" class="form-control shadow-z1" id="ComapanyName" name="ComapanyName">
                                            <option value="0">Select Customer Name</option>
                                            <?php
                                                $selectComapnyName = "SELECT * FROM `master_customer` WHERE master_customer.Active='1' Order By FirstName ASC";
                                                $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value="<?php echo $RsselectComapnyName['CustomerID'];?>"><?php echo $RsselectComapnyName['FirstName']." ".$RsselectComapnyName['LastName'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>                         
                                <div style="float:left;width:25%;">
                                    <div><label class="control-label">City</label></div>
                                    <div>
                                        <select tabindex="3" class="form-control shadow-z1" id="ComapanyName" name="ComapanyName">
                                            <option value="0">Select City</option>
                                            <?php
                                                $selectComapnyName = "SELECT * FROM `master_customer` WHERE master_customer.Active='1' Order By FirstName ASC";
                                                $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value="<?php echo $RsselectComapnyName['CustomerID'];?>"><?php echo $RsselectComapnyName['FirstName']." ".$RsselectComapnyName['LastName'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>                         
                                <div style="clear:both;"></div>       
                            </div>
                            <div>
                                <div style="float:left;width:25%;">
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
                                <div style="float:left;width:25%;padding-left:2%;">
                                    <div class="CycleType">
                                        <div><label class="control-label">Modal Name</label></div>
                                        <div>
                                            <select tabindex="4" class="form-control shadow-z1" id="ModalName" name="ModalName">
                                                <option value="0">Select Modal Name</option>
                                                <?php
                                                    $selectComapnyName = "SELECT * FROM `master_modal_name` WHERE Active='1' Order By ModalName ASC";
                                                    $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                    while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                    {
                                                        ?>
                                                            <option value="<?php echo $RsselectComapnyName['ModalName'];?>"><?php echo $RsselectComapnyName['ModalName'];?></option>
                                                        <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="SpareType" style="display:none;">
                                        <div><label class="control-label">Item Name</label></div>
                                        <div>
                                            <select tabindex="4" class="form-control shadow-z1" id="ItemName" name="ItemName">
                                                <option value="0">Select Item Name</option>
                                                <?php
                                                    $selectComapnyName = "SELECT * FROM `master_spare_products` WHERE Active='1' ORDER BY SpareItemName ASC";
                                                    $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                    while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                    {
                                                        ?>
                                                            <option value="<?php echo $RsselectComapnyName['SpareItemName'];?>"><?php echo $RsselectComapnyName['SpareItemName'];?></option>
                                                        <?php        
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div style="float:left;width:25%;padding-left:2%;" class="CycleType">
                                    <div><label class="control-label">Color</label></div>
                                    <div>
                                        <select tabindex="5" class="form-control shadow-z1" id="Color" name="Color">
                                            <option value="0">Select Color</option>
                                            <?php
                                                $selectComapnyName = "SELECT * FROM master_color WHERE Active='1' ORDER BY ColorName ASC";
                                                $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value="<?php echo $RsselectComapnyName['ColorName'];?>"><?php echo $RsselectComapnyName['ColorName'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="float:left;width:25%;padding-left:2%;" class="CycleType">
                                    <div><label class="control-label">Size</label></div>
                                    <div>
                                        <select tabindex="6" class="form-control shadow-z1" id="Size" name="Size">
                                            <option value="0">Select Size</option>
                                            <?php
                                                $selectComapnyName = "SELECT * FROM master_size WHERE Active='1' ORDER BY SizeName ASC";
                                                $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value="<?php echo $RsselectComapnyName['SizeName'];?>"><?php echo $RsselectComapnyName['SizeName'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="float:left;width:25%;" class="CycleType">
                                    <div><label class="control-label">Segment</label></div>
                                    <div>
                                        <select tabindex="4" class="form-control shadow-z1" id="Segment" name="Segment">
                                            <option value="0">Select Segment</option>
                                            <?php
                                                $selectComapnyName = "SELECT * FROM master_products group by Segment Order By Segment ASC";
                                                $ObjselectComapnyName = mysqli_query($selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value="<?php echo $RsselectComapnyName['Segment'];?>"><?php echo $RsselectComapnyName['Segment'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="float:left;width:12%;padding-left:2%;">
                                    <div><label class="control-label">Min Quantity</label></div>
                                    <div>
                                        <input type="text" placeholder="Min Quantity" name="MinQuantity" id="MinQuantity" class="form-control shadow-z1">
                                        
                                    </div>
                                </div>
                                <div style="float:left;width:12%;margin-left:1%;">
                                    <div><label class="control-label">Max Quantity</label></div>
                                    <div>
                                        <input type="text" placeholder="Max Quantity" name="MaxQuantity" id="MaxQuantity" class="form-control shadow-z1">
                                        
                                    </div>
                                </div>
                                <div style="float:left;width:12%;padding-left:2%;">
                                    <div><label class="control-label">Min Price</label></div>
                                    <div>
                                        <input type="text" placeholder="Min Price" name="MinPrice" id="MinPrice" class="form-control shadow-z1">
                                        
                                    </div>
                                </div>
                                <div style="float:left;width:12%;margin-left:1%;">
                                    <div><label class="control-label">Max Price</label></div>
                                    <div>
                                        <input type="text" placeholder="Max Price" name="MaxPrice" id="MaxPrice" class="form-control shadow-z1">
                                        
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div>&nbsp;</div>
                            <div style="text-align: center;padding-top:10px">
                                <button tabindex="18" class="mr btn btn-labeled btn-success text-center" type="submit" id="BtnSubmitPrice">
                                    <span class="btn-label">
                                        <i class="fa fa-search"></i>
                                    </span>Search
                                </button>
                            </div>    
                        </div>
                    </div>
                 </form>
                <div id="divMainFrmResult" style="position:relative" class="panel panel-default">
                    <div class="panel-body">
                        <div id="divFrmResult">
                            <div class="text-center">Please filter from above</div>
                        </div>
                        <div id="LoadingdivFrmResult" style="height: 100px;display:none;"><img src="images/wheel.gif" style="position: absolute; top: 10px; left: 50%; height: 100px; width: 135px;"></div>
                    </div>
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
        $('#FrmWareHouse').submit(function(event){
            $('#LoadingdivFrmResult').show(); 
            var Type = $('.TypeRadio input[type="radio"]:checked').val();
            var ProductID = $('#ProductID').val();
            var ComapanyName = $('#ComapanyName').val();
            var ModalName = $('#ModalName').val();
            var ItemName = $('#ItemName').val();
            var Color = $('#Color').val();
            var Size = $('#Size').val();
            var Segment = $('#Segment').val();
            var MinQuantity = $('#MinQuantity').val();
            var MaxQuantity = $('#MaxQuantity').val();
            var MinPrice = $('#MinPrice').val();
            var MaxPrice = $('#MaxPrice').val();
            $.ajax({
                url: 'ajax.php?filter=GetWarehouseData&Type='+Type+'&ProductID='+ProductID+'&ComapanyName='+ComapanyName+'&ModalName='+ModalName+'&ItemName='+ItemName+'&Color='+Color+'&Size='+Size+'&Segment='+Segment+'&MinQuantity='+MinQuantity+'&MaxQuantity='+MaxQuantity+'&MinPrice='+MinPrice+'&MaxPrice='+MaxPrice,
                success: function(html) 
                {
                    $('#LoadingdivFrmResult').hide(); 
                    $("#divFrmResult").html(html);
                }
            }); 
            return false;
        });
    });
    
</script>

</div>
</body>
</html>
