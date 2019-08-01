<?php
    $title = "View Color";
    include("config.php");
    $Msg = "";
    
    if($_REQUEST['action']=="delete" && $_REQUEST['id']!="")
    {
        $DeleteCustomer = "DELETE FROM `master_color` WHERE `ColorID` = '".$_REQUEST['id']."'";
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
                            <th>Color Name</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selectCustomer = "SELECT * FROM `master_color` WHERE Active='1'";
                            $ObjselectCustomer = mysqli_query($selectCustomer);
                            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
                            if($NumselectCustomer>0)
                            {
                                while($RsselectCustomer = mysqli_fetch_array($ObjselectCustomer))
                                {        
                                    ?>
                                        <tr ng-repeat="user in xtable.users" class="ng-scope">
                                            <td><span><?php echo $RsselectCustomer['ColorName'];?></span></td>
                                            <td style="white-space: nowrap">
                                                <div ng-show="!rowform.$visible" class="buttons">
                                                    <a class="btn btn-sm btn-info" href="<?php echo PreURL;?>/color.php?action=edit&id=<?php echo $RsselectCustomer['ColorID'];?>">
                                                        <em class="fa fa-pencil"></em>
                                                    </a>
                                                    <!--<a class="btn btn-sm btn-danger" href="<?php echo PreURL;?>/viewcolor.php?action=delete&id=<?php echo $RsselectCustomer['ColorID'];?>">
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
                <a href="<?php echo PreURL;?>/color.php?action=add" class="btn btn-default">Add Color</a>
            </div>
        </div>
   </div>
</section> 
<?php
    include("footer.php");
?>
</body>
</html>