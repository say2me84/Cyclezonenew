<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Merchant";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
        //print_r($_POST);
        $BirthDate = explode("-",$_POST['BirthDate']);        
        $BirthDate = $BirthDate[2]."-".$BirthDate[1]."-".$BirthDate[0];
        if($_REQUEST['action']=="add")
        {
            $InsertCustomer = "INSERT INTO `master_merchant` (
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
                                                                `TinNumber`,
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
                                                                                '".$_POST['TinNumber']."',
                                                                                '".$_POST['AdditionalDetail']."',
                                                                                '".$_POST['AccountNumber']."',
                                                                                '".$_POST['AccountName']."',
                                                                                '".$_POST['BankName']."',
                                                                                '".$_POST['BankBranch']."',
                                                                                '".$_POST['BankCity']."',
                                                                                '".$_POST['IFSCCode']."'
                                                                                );";
            //echo $InsertCustomer;
            mysqli_query($InsertCustomer);
            $CustomerID = mysqli_insert_id();
            //exit;
            
            $Msg = "Merchant Added Successfully";
        }
        else
        {
            $UpdateCustomer = "UPDATE `master_merchant` SET `FirstName` = '".$_POST['FirstName']."',
                                                            `MiddelName` = '".$_POST['MiddelName']."',
                                                            `LastName` = '".$_POST['LastName']."',
                                                            `BirthDate` = '".$BirthDate."',
                                                            `Comapany` = '".$_POST['Comapany']."',
                                                            `Email` = '".$_POST['Email']."',
                                                            `HomeNumber` = '".$_POST['HomeNumber']."',
                                                            `OfficeNumber` = '".$_POST['OfficeNumber']."',
                                                            `MobileNumber` = '".$_POST['MobileNumber']."',
                                                            `Website` = '".$_POST['Website']."',
                                                            `BillingAddress` = '".$_POST['BillingAddress']."',
                                                            `ShippingAddress` = '".$_POST['ShippingAddress']."',
                                                            `BillingCity` = '".$_POST['BillingCity']."',
                                                            `BillingPinCode` = '".$_POST['BillingPinCode']."',
                                                            `BillingState` = '".$_POST['BillingState']."',
                                                            `ShippingCity` = '".$_POST['ShippingCity']."',
                                                            `ShippingPinCode` = '".$_POST['ShippingPinCode']."',
                                                            `ShippingState` = '".$_POST['ShippingState']."',
                                                            `TinNumber` = '".$_POST['TinNumber']."',
                                                            `AdditionalDetail` = '".$_POST['AdditionalDetail']."',
                                                            `AccountNumber` = '".$_POST['AccountNumber']."',
                                                            `AccountName` = '".$_POST['AccountName']."',
                                                            `BankName` = '".$_POST['BankName']."',
                                                            `BankBranch` = '".$_POST['BankBranch']."',
                                                            `BankCity` = '".$_POST['BankCity']."',
                                                            `IFSCCode` = '".$_POST['IFSCCode']."' WHERE `MerchantID` ='".$_REQUEST['id']."';";
            mysqli_query($UpdateCustomer);
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Merchant";    
        $selectCustomer = "SELECT * FROM `master_merchant` WHERE MerchantID='".$_REQUEST['id']."'";
        $ObjselectCustomer = mysqli_query($selectCustomer);
        $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);
    }
    
    include("header.php");
    include("sidebar.php");
?>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#BirthDate").datepicker({ dateFormat: 'dd-mm-yy' });
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
                        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-2">
                                        <input value="<?php echo $RsselectCustomer['FirstName'];?>" id="FirstName" name="FirstName" placeholder="First Name" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Middel Name</label>
                                    <div class="col-sm-2">
                                        <input value="<?php echo $RsselectCustomer['MiddelName'];?>" id="MiddelName" name="MiddelName" placeholder="Middel Name" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-2">
                                        <input value="<?php echo $RsselectCustomer['LastName'];?>" id="LastName" name="LastName" placeholder="Last Name" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">BirthDate</label>
                                    <div class="col-sm-4">
                                        <?php
                                            if($RsselectCustomer['BirthDate']!="")
                                            {
                                                $BirthDate = explode("-",$RsselectCustomer['BirthDate']);        
                                                $BirthDate = $BirthDate[2]."-".$BirthDate[1]."-".$BirthDate[0];    
                                            }
                                            else
                                            {
                                                $BirthDate = "";                                                
                                            }
                                            
                                        ?>
                                        <input value="<?php echo $BirthDate;?>" id="BirthDate" name="BirthDate" placeholder="Birth Date" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Comapany'];?>" id="Comapany" name="Comapany" placeholder="Comapany" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Email'];?>" id="Email" name="Email" placeholder="Email" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Website</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Website'];?>" id="Website" name="Website" placeholder="Website" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Home Number</label>
                                    <div class="col-sm-2">
                                        <input value="<?php echo $RsselectCustomer['HomeNumber'];?>" id="HomeNumber" name="HomeNumber" placeholder="Home Number" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Office Number</label>
                                    <div class="col-sm-2">
                                        <input value="<?php echo $RsselectCustomer['OfficeNumber'];?>" id="OfficeNumber" name="OfficeNumber" placeholder="Office Number" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Mobile Number</label>
                                    <div class="col-sm-2">
                                        <input value="<?php echo $RsselectCustomer['MobileNumber'];?>" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Billing Address</label>
                                    <div class="col-sm-4">
                                        <textarea id="ShippingAddress" rows="4" name="ShippingAddress" placeholder="Billing Address" class="form-control shadow-z1"><?php echo $RsselectCustomer['ShippingAddress'];?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Billing City</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['ShippingCity'];?>" id="ShippingCity" name="ShippingCity" placeholder="Billing City" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Billing Pin Code</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['ShippingPinCode'];?>" id="ShippingPinCode" name="ShippingPinCode" placeholder="Billing Pin Code" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Billing State</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['ShippingState'];?>" id="ShippingState" name="ShippingState" placeholder="Billing State" type="text" class="form-control shadow-z1">
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
                                        <textarea id="BillingAddress" name="BillingAddress" placeholder="Shipping Address" class="form-control shadow-z1"><?php echo $RsselectCustomer['BillingAddress'];?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Shipping City</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['BillingCity'];?>" id="BillingCity" name="BillingCity" placeholder="Shipping City" type="text" class="form-control shadow-z1">
                                            </div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Shipping Pin Code</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['BillingPinCode'];?>" id="BillingPinCode" name="BillingPinCode" placeholder="Shipping Pin Code" type="text" class="form-control shadow-z1">
                                            </div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Shipping State</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['BillingState'];?>" id="BillingState" name="BillingState" placeholder="Shipping State" type="text" class="form-control shadow-z1">
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
                                                <label for="input-id-1" class="col-sm-2 control-label">Tin Number</label>
                                                <div class="col-sm-4">
                                                    <input type="text" value="<?php echo $RsselectCustomer['TinNumber'];?>" id="TinNumber" name="TinNumber" placeholder="Tin Number" class="form-control shadow-z1">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">Additional Detail</label>
                                                <div class="col-sm-4">
                                                    <textarea id="AdditionalDetail" name="AdditionalDetail" placeholder="Additional Detail" class="form-control shadow-z1"><?php echo $RsselectCustomer['AdditionalDetail'];?></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="tab-pane ng-scope MainTabContentCycle" id="BankDetaiilsTab">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="input-id-1" class="col-sm-2 control-label">Account Name</label>
                                                <div class="col-sm-4">
                                                    <input value="<?php echo $RsselectCustomer['AccountName'];?>" id="AccountName" name="AccountName" placeholder="Account Name" type="text" class="form-control shadow-z1">                                        
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">Account No.</label>
                                                <div class="col-sm-4">
                                                    <input value="<?php echo $RsselectCustomer['AccountNumber'];?>" id="AccountNumber" name="AccountNumber" placeholder="Account Number" type="text" class="form-control shadow-z1">                                        
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="input-id-1" class="col-sm-2 control-label">Bank Name</label>
                                                <div class="col-sm-4">
                                                    <input value="<?php echo $RsselectCustomer['BankName'];?>" id="BankName" name="BankName" placeholder="Bank Name" type="text" class="form-control shadow-z1">                                        
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">Bank Branch</label>
                                                <div class="col-sm-4">
                                                    <input value="<?php echo $RsselectCustomer['BankBranch'];?>" id="BankBranch" name="BankBranch" placeholder="Bank Branch" type="text" class="form-control shadow-z1">                                        
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="input-id-1" class="col-sm-2 control-label">Bank City</label>
                                                <div class="col-sm-4">
                                                    <input value="<?php echo $RsselectCustomer['BankCity'];?>" id="BankCity" name="BankCity" placeholder="Bank City" type="text" class="form-control shadow-z1">                                        
                                                </div> 
                                                <label for="input-id-1" class="col-sm-2 control-label">IFSC Code</label>
                                                <div class="col-sm-4">
                                                    <input value="<?php echo $RsselectCustomer['IFSCCode'];?>" id="IFSCCode" name="IFSCCode" placeholder="IFSC Code" type="text" class="form-control shadow-z1">                                        
                                                </div> 
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div>&nbsp;</div>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">&nbsp;</label>
                                    <div class="col-sm-10">
                                        <button class="mr mb-sm btn btn-info" ripple="" type="submit">Submit<span class="ripple"></span></button>
                                    </div>
                                </div>
                            </fieldset>
                         </form>
                      </div>
                   </div>
   <!-- END panel-->
</div></div></div></section> <!-- ngInclude: 'templates/footer.html' -->

<?php
    include("footer.php");
?>
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
</body></html>