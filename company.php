<?php
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="add")
    {
        $title = "Add Company";    
    }
    
    if($_POST)
    {
        //echo "<pre>";
        //print_r($_POST);
        
        if($_REQUEST['action']=="add")
        {
            $selectProduct = "SELECT * FROM `master_company` WHERE CompanyName='".$_POST['CompanyName']."'";
            $ObjselectCustomer = mysqli_query($selectProduct);
            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
            if($NumselectCustomer==0)
            {
                $InsertTax = "INSERT INTO `master_company` (`CompanyName`)VALUES ('".$_POST['CompanyName']."');";
                mysqli_query($InsertTax);
                $Msg = "Company Added Successfully";    
            }
            else
            {
                $Msg = "Company is already exist";                
            }
        }
        else
        {
            $selectProduct = "SELECT * FROM `master_company` WHERE CompanyName='".$_POST['CompanyName']."' AND  CompanyID<>'".$_REQUEST['id']."'";
            $ObjselectCustomer = mysqli_query($selectProduct);
            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
            if($NumselectCustomer==0)
            {
                $UpdateProduct = "UPDATE `master_company` SET `CompanyName` = '".$_POST['CompanyName']."' WHERE `CompanyID` ='".$_REQUEST['id']."';";
                mysqli_query($UpdateProduct);
                $Msg = "Company Updated Successfully";
            }
            else
            {
                $Msg = "Company is already exist";                
            }
        }
    }
    
    if($_REQUEST['action']=="edit" && $_REQUEST['id']!="")
    {
        $title = "Edit Company";    
        $selectProduct = "SELECT * FROM `master_company` WHERE CompanyID='".$_REQUEST['id']."'";
        $ObjselectCustomer = mysqli_query($selectProduct);
        $RsselectCustomer = mysqli_fetch_array($ObjselectCustomer);
    }
    include("header.php");
    include("sidebar.php");
?>
<section class="ng-scope">
    <div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2">
        <div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2">
            <div class="app-view-header ng-scope"><?php echo $title;?> <!--<small>Classic and new components</small>--></div>
            <?php
                if($Msg!="")
                {
                    ?>
                        <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
                    <?php
                }
            ?>
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
</div>
</body></html>