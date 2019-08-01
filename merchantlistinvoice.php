<?php
    $title = "View Merchant Invoice";
    include("config.php");
    $Msg = "";
    
    if($_REQUEST['action']=="delete" && $_REQUEST['id']!="")
    {
        $DeleteCustomer = "DELETE FROM `master_invoice` WHERE `InvoiceID` = '".$_REQUEST['id']."'";
        mysqli_query($DeleteCustomer);
        $DeleteCustomer = "DELETE FROM `master_invoice_child` WHERE `InvoiceID` = '".$_REQUEST['id']."'";
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
            <div class="app-view-header ng-scope">View Merchant Invoice</div>
            <h4 class="panel-heading" style="color:#3F51B5;"><?php echo $Msg;?></h4>
            <div ng-controller="TablexEditableController as xtable" class="container-fluid ng-scope">
                <table class="table table-bordered" id="example" >
                        <colgroup>
                            <col class="con0" style="align: center; width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                        </colgroup>
                    <thead>                    
                        <tr style="font-weight: bold">
                            <th class="text-center">ID</th>
                            <th class="text-center">Date</th>
                            <th class="text-left">Merchant Name</th>
                            <th class="text-right">Total Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $selectCustomer = "SELECT * FROM `master_invoice`,master_merchant WHERE `master_invoice`.Type='merchant' AND master_invoice.CustomerID = master_merchant.MerchantID Order by InvoiceID Desc";
                            $ObjselectCustomer = mysqli_query($selectCustomer);
                            $NumselectCustomer = mysqli_num_rows($ObjselectCustomer);
                            if($NumselectCustomer>0)
                            {
                                while($RsselectCustomer = mysqli_fetch_array($ObjselectCustomer))
                                {    
                                        
                                    ?>
                                        <tr ng-repeat="user in xtable.users" class="ng-scope">
                                            <td class="text-center"><span><a href="merchantviewinvoice.php?id=<?php echo $RsselectCustomer['InvoiceID'];?>">MR<?php echo sprintf("%04d", $RsselectCustomer['InvoiceNo']);?></a></span></td>
                                            <td class="text-center">
                                                <span>
                                                    <?php 
                                                        $Date = explode("-",$RsselectCustomer['Date']);
                                                        $Date = $Date[2]."-".$Date[1]."-".$Date[0];
                                                        echo $Date;
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="text-left"><span><?php echo $RsselectCustomer['FirstName']." ".$RsselectCustomer['LastName'];?></span></td>
                                            <td class="text-right"><span><?php echo $RsselectCustomer['TotalPrice'];?></span></td>
                                            <td style="white-space: nowrap" class="text-center">
                                                <div ng-show="!rowform.$visible" class="buttons">
                                                    
                                                    <a class="btn btn-sm btn-primary" href="<?php echo PreURL;?>/merchantviewinvoice.php?id=<?php echo $RsselectCustomer['InvoiceID'];?>">
                                                        <em class="fa fa-eye"></em>
                                                    </a>
                                                    <a class="btn btn-sm btn-info" href="<?php echo PreURL;?>/merchantinvoice.php?action=edit&id=<?php echo $RsselectCustomer['InvoiceID'];?>">
                                                        <em class="fa fa-pencil"></em>
                                                    </a>
                                                    <a class="btn btn-sm btn-danger" href="<?php echo PreURL;?>/merchantlistinvoice.php?action=delete&id=<?php echo $RsselectCustomer['InvoiceID'];?>">
                                                        <em class="fa fa-trash"></em>
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="#">
                                                        <em class="fa fa-file"></em>
                                                    </a>
                                                    
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
                <a href="<?php echo PreURL;?>/merchantinvoice.php?action=add" class="btn btn-default">Add Invoice</a>
            </div>
        </div>
   </div>
</section> 
<?php
    include("footer.php");
?>


</div>
<div id="flotTip" style="display: none; position: absolute; background-color: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-top-left-radius: 0.5em; border-top-right-radius: 0.5em; border-bottom-right-radius: 0.5em; border-bottom-left-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; background-position: initial initial; background-repeat: initial initial;"></div><input id="textAngular-editableFix-010203040506070809" class="ta-hidden-input" unselectable="on" tabindex="-1"></body></html>