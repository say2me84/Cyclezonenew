<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Supplier";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
        //print_r($_POST);
        //exit;
        
        if($_REQUEST['action']=="add")
        {
            $Insertsupplier = "INSERT INTO `master_supplier` (
                                                                `CompanyName` ,
                                                                `CompanyAddress` ,
                                                                `CompanyCity` ,
                                                                `CompanyState` ,
                                                                `CompanyPinCode` ,
                                                                `OfficeNumber` ,
                                                                `MobileNumber` ,
                                                                `Email` ,
                                                                `Website` ,
                                                                `ContactPerson1` ,
                                                                `ContactPerson2` ,
                                                                `ContactPerson3` ,
                                                                `Contact1` ,
                                                                `Contact2` ,
                                                                `Contact3`,
                                                                `AccountNumber`,
                                                                `AccountName`,
                                                                `BankName`,
                                                                `BankBranch`,
                                                                `BankCity`,
                                                                `IFSCCode`,
                                                                `TaxDetail`,
                                                                `TINNumber`,
                                                                `CSTNumber`,
                                                                `PANNumber`
                                                                )
                                                                VALUES (
                                                                        '".$_POST['CompanyName']."', 
                                                                        '".$_POST['CompanyAddress']."', 
                                                                        '".$_POST['CompanyCity']."', 
                                                                        '".$_POST['CompanyState']."', 
                                                                        '".$_POST['CompanyPinCode']."', 
                                                                        '".$_POST['OfficeNumber']."', 
                                                                        '".$_POST['MobileNumber']."', 
                                                                        '".$_POST['Email']."', 
                                                                        '".$_POST['Website']."', 
                                                                        '".$_POST['ContactPerson1']."', 
                                                                        '".$_POST['ContactPerson2']."', 
                                                                        '".$_POST['ContactPerson3']."', 
                                                                        '".$_POST['Contact1']."', 
                                                                        '".$_POST['Contact2']."', 
                                                                        '".$_POST['Contact3']."',
                                                                        '".$_POST['AccountNumber']."',
                                                                        '".$_POST['AccountName']."',
                                                                        '".$_POST['BankName']."',
                                                                        '".$_POST['BankBranch']."',
                                                                        '".$_POST['BankCity']."',
                                                                        '".$_POST['IFSCCode']."',
                                                                        '".$_POST['TaxDetail']."',
                                                                        '".$_POST['TINNumber']."',
                                                                        '".$_POST['CSTNumber']."',
                                                                        '".$_POST['PANNumber']."'
                                                                        );";
            //echo $Insertsupplier; exit;
            mysqli_query($Insertsupplier);
            //exit;
            $Msg = "Supplier Added Successfully";
        }
        else
        {
            $Updatesupplier = "UPDATE `master_supplier` SET `CompanyName` = '".$_POST['CompanyName']."',
                                                            `CompanyAddress` = '".$_POST['CompanyAddress']."',
                                                            `CompanyCity` = '".$_POST['CompanyCity']."',
                                                            `CompanyState` = '".$_POST['CompanyState']."',
                                                            `CompanyPinCode` = '".$_POST['CompanyPinCode']."',
                                                            `HomeNumber` = '".$_POST['HomeNumber']."',
                                                            `OfficeNumber` = '".$_POST['OfficeNumber']."',
                                                            `MobileNumber` = '".$_POST['MobileNumber']."',
                                                            `Email` = '".$_POST['Email']."',
                                                            `Website` = '".$_POST['Website']."',
                                                            `ContactPerson1` = '".$_POST['ContactPerson1']."',
                                                            `ContactPerson2` = '".$_POST['ContactPerson2']."',
                                                            `ContactPerson3` = '".$_POST['ContactPerson3']."',
                                                            `Contact1` = '".$_POST['Contact1']."',
                                                            `Contact2` = '".$_POST['Contact2']."',
                                                            `Contact3` = '".$_POST['Contact3']."'
                                                            `AccountNumber` = '".$_POST['AccountNumber']."'
                                                            `AccountName` = '".$_POST['AccountName']."'
                                                            `BankName` = '".$_POST['BankName']."'
                                                            `BankBranch` = '".$_POST['BankBranch']."'
                                                            `BankCity` = '".$_POST['BankCity']."'
                                                            `IFSCCode` = '".$_POST['IFSCCode']."'
                                                            `TaxDetail` = '".$_POST['TaxDetail']."',
                                                            `TINNumber` = '".$_POST['TINNumber']."',
                                                            `CSTNumber` = '".$_POST['CSTNumber']."',
                                                            `PANNumber` = '".$_POST['PANNumber']."'
                                                             WHERE `SupplierID` ='".$_REQUEST['id']."';";
            //echo $Updatesupplier; exit;
            mysqli_query($Updatesupplier);
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Supplier";    
        $selectsupplier = "SELECT * FROM `master_supplier` WHERE SupplierID='".$_REQUEST['id']."'";
        $ObjselectCustomer = mysqli_query($selectsupplier);
        $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);
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
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Company Name</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['CompanyName'];?>" id="CompanyName" name="CompanyName" placeholder="Company Name" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Company Address</label>
                                    <div class="col-sm-4">
                                        <textarea id="CompanyAddress" name="CompanyAddress" placeholder="Company Address" class="form-control shadow-z1"><?php echo $RsselectCustomer['CompanyAddress'];?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">City</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['CompanyCity'];?>" id="CompanyCity" name="CompanyCity" placeholder="Company City" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">State</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['CompanyState'];?>" id="CompanyState" name="CompanyState" placeholder="Company State" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Pin Code</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectCustomer['CompanyPinCode'];?>" id="CompanyPinCode" name="CompanyPinCode" placeholder="Company Pin Code" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Office Number</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['OfficeNumber'];?>" id="OfficeNumber" name="OfficeNumber" placeholder="Office Number" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Mobile Number</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['MobileNumber'];?>" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" type="text" class="form-control shadow-z1">
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
                                    
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Contact Person 1</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['ContactPerson1'];?>" id="ContactPerson1" name="ContactPerson1" placeholder="Contact Person 1" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Contact 1</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Contact1'];?>" id="Contact1" name="Contact1" placeholder="Contact 1" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Contact Person 2</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['ContactPerson2'];?>" id="ContactPerson2" name="ContactPerson2" placeholder="Contact Person 2" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Contact 2</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Contact2'];?>" id="Contact2" name="Contact2" placeholder="Contact 2" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Contact Person 3</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['ContactPerson3'];?>" id="ContactPerson3" name="ContactPerson3" placeholder="Contact Person 3" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Contact 3</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Contact3'];?>" id="Contact3" name="Contact3" placeholder="Contact 3" type="text" class="form-control shadow-z1">
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
                                                <label for="input-id-1" class="col-sm-2 control-label">TIN Number</label>
                                                <div class="col-sm-2">
                                                    <input id="TINNumber" name="TINNumber" placeholder="TIN Number"  type="text" class="form-control shadow-z1" value="<?php echo $RsselectCustomer['TINNumber'];?>">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">CST Number</label>
                                                <div class="col-sm-2">
                                                    <input id="CSTNumber" name="CSTNumber" placeholder="CST Number"  type="text" class="form-control shadow-z1" value="<?php echo $RsselectCustomer['CSTNumber'];?>">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">PAN Number</label>
                                                <div class="col-sm-2">
                                                    <input id="PANNumber" name="PANNumber" placeholder="PAN Number"  type="text" class="form-control shadow-z1" value="<?php echo $RsselectCustomer['PANNumber'];?>">
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
                                                <label for="input-id-1" class="col-sm-2 control-label">Account Number</label>
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
</script>   
</body></html>