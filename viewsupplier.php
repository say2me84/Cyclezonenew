<?php
    $title = "View Supplier";
    include("config.php");
    $Msg = "";
    if($_REQUEST['action']=="delete" && $_REQUEST['id']!="")
    {
        $DeleteCustomer = "DELETE FROM `master_supplier` WHERE `SupplierID` = '".$_REQUEST['id']."'";
        mysqli_query($DeleteCustomer);
        $Msg = "Delete record successfully";
    }
    
    include("header.php");
    include("sidebar.php");
?>
<script src="./js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('#example').DataTable({
             "sPaginationType": "full_numbers"
         });
    });
</script>

<section class="ng-scope">
    <div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2">
        <div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2">
            <div class="app-view-header ng-scope">View Supplier</div>
            <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
            <div ng-controller="TablexEditableController as xtable" class="container-fluid ng-scope">
                <table class="table table-bordered" id="example" >
                    <thead>
                        <tr style="font-weight: bold">
                            <th style="width:35%">Company Name</th>
                            <th style="width:20%">Mobile</th>
                            <th style="width:20%">City</th>
                            <th style="width:25%">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selectCustomer = "SELECT * FROM `master_supplier` WHERE master_supplier.Active='1'";
                            $ObjselectCustomer = mysqli_query($selectCustomer);
                            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
                            if($NumselectCustomer>0)
                            {
                                while($RsselectCustomer = mysqli_fetch_array($ObjselectCustomer))
                                {        
                                    ?>
                                        <tr ng-repeat="user in xtable.users" class="ng-scope">
                                            <td><span><?php echo $RsselectCustomer['CompanyName'];?></span></td>
                                            <td><span><?php echo $RsselectCustomer['MobileNumber'];?></span></td>
                                            <td><span><?php echo $RsselectCustomer['CompanyCity'];?></span></td>
                                            <td style="white-space: nowrap">
                                                <div ng-show="!rowform.$visible" class="buttons">
                                                    <a class="btn btn-sm btn-info" href="<?php echo PreURL;?>/supplier.php?action=edit&id=<?php echo $RsselectCustomer['SupplierID'];?>">
                                                        <em class="fa fa-pencil"></em>
                                                    </a>
                                                    <!--<a class="btn btn-sm btn-danger" href="<?php echo PreURL;?>/viewsupplier.php?action=delete&id=<?php echo $RsselectCustomer['SupplierID'];?>">
                                                        <em class="fa fa-trash"></em>
                                                    </a>-->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php                        
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <div>&nbsp;</div>
                <a href="<?php echo PreURL;?>/supplier.php?action=add" class="btn btn-default">Add Supplier</a>
            </div>
        </div>
   </div>
</section> 
<?php
    include("footer.php");
?>

</body></html>