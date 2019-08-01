<?php
    include("config.php");
    $Msg = "";
    $title = "Cycle Zone Profile";    
    if($_POST)
    {    
        //print_r($_POST);
        $selectProfile = "select * from profile";
        $ObjselectProfile = mysqli_query($selectProfile);
        $numselectProfile = mysqli_num_rows($ObjselectProfile);
        $RsselectProfile = mysqli_fetch_array($ObjselectProfile);
        if($numselectProfile>0)
        {
            
            $UpdateProfile = "UPDATE `profile` SET `ComapnyName` = '".$_POST['ComapnyName']."',
                                                    `Address` = '".$_POST['Address']."',
                                                    `City` = '".$_POST['City']."',
                                                    `Pincode` = '".$_POST['Pincode']."',
                                                    `State` = '".$_POST['State']."',
                                                    `Mobile` = '".$_POST['Mobile']."',
                                                    `Website` = '".$_POST['Website']."',
                                                    `OfficeNo` = '".$_POST['OfficeNo']."',
                                                    `CustomerCareNo` = '".$_POST['CustomerCareNo']."',
                                                    `ServiceNo` = '".$_POST['ServiceNo']."',
                                                    `TINNo` = '".$_POST['TINNo']."',
                                                    `CSTNo` = '".$_POST['CSTNo']."',
                                                    `AccountName` = '".$_POST['AccountName']."',
                                                    `AccountNo` = '".$_POST['AccountNo']."',
                                                    `BankName` = '".$_POST['BankName']."',
                                                    `BranchArea` = '".$_POST['BranchArea']."',
                                                    `BankCity` = '".$_POST['BankCity']."',
                                                    `IFSCCode` = '".$_POST['IFSCCode']."',
                                                    `Terms` = '".$_POST['Terms']."',
                                                    `Email` = '".$_POST['Email']."' 
                                                    WHERE `ProfileID` ='".$RsselectProfile['ProfileID']."';";
            //echo $UpdateProfile;
            mysqli_query($UpdateProfile);
            $Msg = "Profile Updated Successfully";
            $profileID = $RsselectProfile['ProfileID'];
        }
        else
        {
            
        $insertProfile = "INSERT INTO `profile` (
                                                `ComapnyName` ,
                                                `Mobile` ,
                                                `Address` ,
                                                `City` ,
                                                `Pincode` ,
                                                `State` ,
                                                `Website` ,
                                                `OfficeNo` ,
                                                `CustomerCareNo` ,
                                                `ServiceNo` ,
                                                `TINNo` ,
                                                `CSTNo` ,
                                                `AccountName` ,
                                                `AccountNo` ,
                                                `BankName` ,
                                                `BranchArea` ,
                                                `BankCity` ,
                                                `IFSCCode` ,
                                                `Terms` ,
                                                `Email`
                                                )
                                                VALUES (
                                                '".$_POST['ComapnyName']."', 
                                                '".$_POST['Mobile']."', 
                                                '".$_POST['Address']."', 
                                                '".$_POST['City']."', 
                                                '".$_POST['Pincode']."', 
                                                '".$_POST['State']."', 
                                                '".$_POST['Website']."', 
                                                '".$_POST['OfficeNo']."', 
                                                '".$_POST['CustomerCareNo']."', 
                                                '".$_POST['ServiceNo']."', 
                                                '".$_POST['TINNo']."', 
                                                '".$_POST['CSTNo']."', 
                                                '".$_POST['AccountName']."', 
                                                '".$_POST['AccountNo']."', 
                                                '".$_POST['BankName']."', 
                                                '".$_POST['BranchArea']."', 
                                                '".$_POST['BankCity']."', 
                                                '".$_POST['IFSCCode']."', 
                                                '".$_POST['Terms']."', 
                                                '".$_POST['Email']."'
                                                );"; 
         mysqli_query($insertProfile);    
         $profileID = mysqli_insert_id();   
         $Msg = "Profile added Successfully";
        }
        if($_FILES['Logo']['name']!="")
        {
            $filename = date("hisYmd").$_FILES['Logo']['name'];
            $Folder = 'uploads/';
            $fullname = $Folder.$filename;
            if(move_uploaded_file($_FILES['Logo']['tmp_name'], $fullname))
            {
                $updateProfileImage = "UPDATE profile SET Logo ='".$filename."' WHERE ProfileID='".$profileID."'";
                mysqli_query($updateProfileImage);
            }          
        }
        $Class = "alert-success";
        
    } 
    $selectProfile = "select * from profile";
    $ObjselectProfile = mysqli_query($selectProfile);
    $numselectProfile = mysqli_num_rows($ObjselectProfile);
    $RsselectProfile = mysqli_fetch_array($ObjselectProfile);
    
    
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
                        <form id="AddUser" action="" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Comapny Name</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectProfile['ComapnyName'];?>" id="ComapnyName" name="ComapnyName" placeholder="Comapny Name" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-4">
                                        <textarea id="Address" rows="4" name="Address" placeholder="Address" class="form-control shadow-z1"><?php echo $RsselectProfile['Address'];?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">City</label>
                                            <div class="col-sm-8">
                                                <input value="<?php echo $RsselectProfile['City'];?>" id="City" name="City" placeholder="City" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">Pin Code</label>
                                            <div class="col-sm-8">                                       
                                                <input value="<?php echo $RsselectProfile['Pincode'];?>" id="Pincode" name="Pincode" placeholder="Pin Code" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="input-id-1" class="col-sm-4 control-label">State</label>
                                            <div class="col-sm-8">                                       
                                                <input value="<?php echo $RsselectProfile['State'];?>" id="State" name="State" placeholder="State" type="text" class="form-control shadow-z1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Mobile</label>
                                    <div class="col-sm-4">                                       
                                        <input value="<?php echo $RsselectProfile['Mobile'];?>" id="Mobile" name="Mobile" placeholder="Mobile" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Office No</label>
                                    <div class="col-sm-4">                                       
                                        <input value="<?php echo $RsselectProfile['OfficeNo'];?>" id="OfficeNo" name="OfficeNo" placeholder="Office No" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset> 
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Customer Care No</label>
                                    <div class="col-sm-4">                                       
                                        <input value="<?php echo $RsselectProfile['CustomerCareNo'];?>" id="CustomerCareNo" name="CustomerCareNo" placeholder="Customer Care No" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Service No</label>
                                    <div class="col-sm-4">                                       
                                        <input value="<?php echo $RsselectProfile['ServiceNo'];?>" id="ServiceNo" name="ServiceNo" placeholder="Service No" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-4">                                       
                                        <input value="<?php echo $RsselectProfile['Email'];?>" id="Email" name="Email" placeholder="Email" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Website</label>
                                    <div class="col-sm-4">                                       
                                        <input value="<?php echo $RsselectProfile['Website'];?>" id="Website" name="Website" placeholder="Website" type="text" class="form-control shadow-z1">
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
                                                <label for="input-id-1" class="col-sm-2 control-label">TIN No</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['TINNo'];?>" id="TINNo" name="TINNo" placeholder="TIN No" type="text" class="form-control shadow-z1">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">CST No</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['CSTNo'];?>" id="CSTNo" name="CSTNo" placeholder="CST No" type="text" class="form-control shadow-z1">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="tab-pane ng-scope MainTabContentCycle" id="BankDetaiilsTab">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="input-id-1" class="col-sm-2 control-label">Account Name</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['AccountName'];?>" id="AccountName" name="AccountName" placeholder="Account Name" type="text" class="form-control shadow-z1">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">Account No</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['AccountNo'];?>" id="AccountNo" name="AccountNo" placeholder="Account No" type="text" class="form-control shadow-z1">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="input-id-1" class="col-sm-2 control-label">Bank Name</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['BankName'];?>" id="BankName" name="BankName" placeholder="Bank Name" type="text" class="form-control shadow-z1">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">Branch Area</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['BranchArea'];?>" id="BranchArea" name="BranchArea" placeholder="Branch Area" type="text" class="form-control shadow-z1">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="input-id-1" class="col-sm-2 control-label">Bank City</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['BankCity'];?>" id="BankCity" name="BankCity" placeholder="Bank City" type="text" class="form-control shadow-z1">
                                                </div>
                                                <label for="input-id-1" class="col-sm-2 control-label">IFSC Code</label>
                                                <div class="col-sm-4">                                       
                                                    <input value="<?php echo $RsselectProfile['IFSCCode'];?>" id="IFSCCode" name="IFSCCode" placeholder="IFSC Code" type="text" class="form-control shadow-z1">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div>&nbsp;</div>
                            <fieldset>
                                <div class="form-group">
                                    
                                        <div class="col-sm-6">                                    
                                            <label for="input-id-1" class="col-sm-4 control-label">Logo</label>
                                            <div class="col-sm-8">                                    
                                                <input type="file" name="Logo">   
                                            </div>                                      
                                            <div style="clear:both;"></div>
                                            <div>&nbsp;</div>
                                            <div><label for="input-id-1" class="col-sm-4 control-label">Terms & Conditions</label></div>
                                            <div>                                       
                                                <textarea class="form-control shadow-z1" rows="5" name="Terms" id="Terms"><?php echo $RsselectProfile['Terms'];?></textarea>
                                            </div>
                                        </div>
                                    
                                    <?php
                                        if($RsselectProfile['Logo']!="" && file_exists("./uploads/".$RsselectProfile['Logo']))
                                        {
                                            ?>
                                                <div class="col-sm-6">                                    
                                                    <label for="input-id-1" class="col-sm-2 control-label">&nbsp;</label>
                                                    <div class="col-sm-4">                                    
                                                        <img src="./uploads/<?php echo $RsselectProfile['Logo'];?>" width="200" height="200">
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                    
                                    
                                </div>
                            </fieldset>
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

<script>
$(function() {
        $('#AddUser').submit(function() {
            var Error = false;
            var ComapnyName = $("#ComapnyName").val();              
            var Address = $("#Address").val();              
            var City = $("#City").val();              
            var Mobile = $("#Mobile").val();              
            var Email = $("#Email").val();              
            
            if(ComapnyName=="")
            {
                $("#ComapnyName").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#ComapnyName').attr('style', 'border:1px solid #ccc !important');
            }                                                                          
            if(Mobile=="")
            {
                $("#Mobile").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#Mobile').attr('style', 'border:1px solid #ccc !important');
            }
            if(Address=="")
            {
                $("#Address").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#Address').attr('style', 'border:1px solid #ccc !important');
            }
            if(City=="")
            {
                $("#City").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#City').attr('style', 'border:1px solid #ccc !important');
            }
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,10})$/;  
            if(reg.test(Email)==false || Email=="")    
            {
                $("#Email").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#Email').attr('style', 'border:1px solid #ccc !important');
            }
            if(Error) 
            {
                return false;
            }
        });
        
    });
</script>
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
</html>