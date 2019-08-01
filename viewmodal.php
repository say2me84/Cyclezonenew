<?php
    $title = "View Modal Name";
    include("config.php");
    $Msg = "";
    
    if($_REQUEST['action']=="delete" && $_REQUEST['id']!="")
    {
        $DeleteCustomer = "DELETE FROM `master_modal_name` WHERE `ModalNameID` = '".$_REQUEST['id']."'";
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
            <div class="app-view-header ng-scope"><?php echo $title;?></div>
            <?php
                if($Msg!="")
                {
                    ?>
                        <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
                    <?php
                }
            ?>
            
            <div ng-controller="TablexEditableController as xtable" class="container-fluid ng-scope">
                <table class="table table-bordered" id="example" >
                    <thead>
                        <tr style="font-weight: bold">
                            <th>Modal Name</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selectCustomer = "SELECT * FROM `master_modal_name` WHERE Active='1'";
                            $ObjselectCustomer = mysqli_query($selectCustomer);
                            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
                            if($NumselectCustomer>0)
                            {
                                while($RsselectCustomer = mysqli_fetch_array($ObjselectCustomer))
                                {        
                                    ?>
                                        <tr ng-repeat="user in xtable.users" class="ng-scope">
                                            <td><span><?php echo $RsselectCustomer['ModalName'];?></span></td>
                                            <td style="white-space: nowrap">
                                                <div ng-show="!rowform.$visible" class="buttons">
                                                    <a class="btn btn-sm btn-info" href="<?php echo PreURL;?>/modal.php?action=edit&id=<?php echo $RsselectCustomer['ModalNameID'];?>">
                                                        <em class="fa fa-pencil"></em>
                                                    </a>
                                                    <!--<a class="btn btn-sm btn-danger" href="<?php echo PreURL;?>/viewmodal.php?action=delete&id=<?php echo $RsselectCustomer['ModalNameID'];?>">
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
                <a href="<?php echo PreURL;?>/modal.php?action=add" class="btn btn-default">Add Modal Name</a>
            </div>
        </div>
   </div>
</section> 
<?php
    include("footer.php");
?>
</body></html>