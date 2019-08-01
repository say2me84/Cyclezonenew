<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Visiter";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
        //print_r($_POST);
        if($_REQUEST['action']=="add")
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
                                                                                '".$_POST['FirstName']."', 
                                                                                '".$_POST['LastName']."', 
                                                                                '".$_POST['Email']."', 
                                                                                '".$_POST['Area']."', 
                                                                                '".$_POST['City']."', 
                                                                                '".$_POST['MobileNumber']."'
                                                                                );";
            //echo $InsertCustomer;
            mysqli_query($InsertCustomer);
            $CustomerID = mysqli_insert_id();
            //exit;
            $Msg = "Visiter Added Successfully";
        }
        else
        {
            $UpdateCustomer = "UPDATE `master_visiter` SET `FirstName` = '".$_POST['FirstName']."',
                                                            `LastName` = '".$_POST['LastName']."',
                                                            `Email` = '".$_POST['Email']."',
                                                            `Area` = '".$_POST['Area']."',
                                                            `City` = '".$_POST['City']."',
                                                            `MobileNumber` = '".$_POST['MobileNumber']."' WHERE `VisiterID` ='".$_REQUEST['id']."';";
            mysqli_query($UpdateCustomer);
            $Msg = "Visiter Updated Successfully";
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Visiter";    
        $selectCustomer = "SELECT * FROM `master_visiter` WHERE VisiterID='".$_REQUEST['id']."'";
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
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['FirstName'];?>" id="FirstName" name="FirstName" placeholder="First Name" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['LastName'];?>" id="LastName" name="LastName" placeholder="Last Name" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['Email'];?>" id="Email" name="Email" placeholder="Email" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['MobileNumber'];?>" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Area</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['Area'];?>" id="Area" name="Area" placeholder="Area" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $RsselectCustomer['City'];?>" id="City" name="City" placeholder="Mobile Number" type="text" class="form-control shadow-z1">
                                    </div>
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
</body></html>