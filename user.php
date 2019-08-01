<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add User";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
        //print_r($_POST);
        if($_REQUEST['action']=="add")
        {
            $selectCustomer = "SELECT * FROM `master_user` WHERE Email='".$_POST['Email']."'";
            $ObjselectCustomer = mysqli_query($selectCustomer);
            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
            if($NumselectCustomer==0)
            {
                $InsertCustomer = "INSERT INTO `master_user` (
                                                                `FirstName` ,
                                                                `LastName` ,
                                                                `Email` ,
                                                                `Password`)
                                                                        VALUES (
                                                                                '".$_POST['FirstName']."', 
                                                                                '".$_POST['LastName']."', 
                                                                                '".$_POST['Email']."', 
                                                                                '".MD5($_POST['Password'])."'
                                                                                );";
                //echo $InsertCustomer;
                mysqli_query($InsertCustomer);
                $CustomerID = mysqli_insert_id();
                //exit;
                $Msg = "User Added Successfully";
            }
            else
            {
                $Msg = "User is already exist";                
            }
        }
        else
        {
            $selectCustomer = "SELECT * FROM `master_user` WHERE Email='".$_POST['Email']."' AND UserID<>'".$_REQUEST['id']."'";
            $ObjselectCustomer = mysqli_query($selectCustomer);
            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
            if($NumselectCustomer==0)
            {
                $UpdateCustomer = "UPDATE `master_user` SET `FirstName` = '".$_POST['FirstName']."',
                                                                `LastName` = '".$_POST['LastName']."',
                                                                `Active` = '".$_POST['Active']."',
                                                                `Email` = '".$_POST['Email']."' WHERE `UserID` ='".$_REQUEST['id']."';";
                //echo $UpdateCustomer;
                mysqli_query($UpdateCustomer);
                $Msg = "User Updated Successfully";
            }
            else
            {
                $Msg = "User is already exist";                
            }
        }
        if($_POST['Password']!="" && $_POST['PasswordConfirm']!="")
        {
            
            $UpdateCustomer = "UPDATE `master_user` SET `Password` = '".MD5($_POST['Password'])."' WHERE `UserID` ='".$_REQUEST['id']."';";
            //echo $UpdateCustomer;
            mysqli_query($UpdateCustomer);
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit User";    
        $selectCustomer = "SELECT * FROM `master_user` WHERE UserID='".$_REQUEST['id']."'";
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
                        <form id="FrmUsers" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['FirstName'];?>" id="FirstName" name="FirstName" placeholder="First Name" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['LastName'];?>" id="LastName" name="LastName" placeholder="Last Name" type="text" class="form-control shadow-z1">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-4">
                                        <input value="<?php echo $RsselectCustomer['Email'];?>" id="Email" name="Email" placeholder="Email" type="text" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Active</label>
                                    <div class="col-sm-4">
                                        <input <?php if($RsselectCustomer['Active']==1){?> checked="checked" <?php }?> type="checkbox" name="Active" value="1" class="form-control shadow-z1 text-left">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label for="input-id-1" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-4">
                                        <input id="Password" name="Password" placeholder="Password" type="password" class="form-control shadow-z1">
                                    </div>
                                    <label for="input-id-1" class="col-sm-2 control-label">Conform Password</label>
                                    <div class="col-sm-4">
                                        <input id="PasswordConfirm" name="PasswordConfirm" placeholder="Conform Password" type="password" class="form-control shadow-z1">
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
</body>
</html>
<script>
$(function() {
        $('#FrmUsers').submit(function() {
            var Error = false;
            var FirstName = $("#FirstName").val();              
            var LastName = $("#LastName").val();              
            var Email = $("#Email").val();         
            var Password = $("#Password").val();              
            var PasswordConfirm = $("#PasswordConfirm").val();              
            
            if(FirstName=="")
            {
                $("#FirstName").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#FirstName').attr('style', 'border:1px solid #ccc !important');
            }
            if(LastName=="")
            {
                $("#LastName").attr('style', 'border:1px solid red !important');
                Error = true;
            }
            else
            {
                $('#LastName').attr('style', 'border:1px solid #ccc !important');
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
            <?php 
                if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
                {
                    ?>
                        if(PasswordConfirm!=Password)
                        {
                            $("#PasswordConfirm").attr('style', 'border:1px solid red !important');
                            Error = true;
                        }
                        else
                        {
                            $('#PasswordConfirm').attr('style', 'border:1px solid #ccc !important');
                        }
                    <?php
                }
                else
                {
                    ?>
                        if(Password=="")
                        {
                            $("#Password").attr('style', 'border:1px solid red !important');
                            Error = true;
                        }
                        else
                        {
                            $('#Password').attr('style', 'border:1px solid #ccc !important');
                        }
                        if(PasswordConfirm=="" || PasswordConfirm!=Password)
                        {
                            $("#PasswordConfirm").attr('style', 'border:1px solid red !important');
                            Error = true;
                        }
                        else
                        {
                            $('#PasswordConfirm').attr('style', 'border:1px solid #ccc !important');
                        }
                    <?php
                }
            ?>
            if(Error) 
            {
                return false;
            }
        });
        
    });
</script>