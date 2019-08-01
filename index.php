<?php
    include("config.php");
    include("header.php");
    include("sidebar.php");
?>  
<section class="ng-scope">
   <!-- Content-->
   <!-- uiView:  --><div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2"><div class="app-view-header ng-scope">Dashboard
   <small class="ng-binding" ng-bind="app.name + ' - ' + app.description">CycleZone</small>
</div>
<div ng-controller="DashboardController as dashboard" class="row ng-scope">
   <!-- START dashboard content-->
   <div class="col-lg-9 fw-boxed">
      <div ng-init="hpanel = [true, false, false, false]" class="panel panel-default">
         <div class="row">
            <div class="col-md-4">
               <div class="row row-flush text-center text-muted m0">
                  <div ripple="" ng-click="hpanel = [true, false, false, false]" ng-class="{'bg-primary': hpanel[0]}" class="col-xs-3 col-md-6 bb br pv-xxl clickable bg-primary">
                     <em class="icon-pie-graph fa-2x mv"></em>
                  <span class="ripple"></span></div>
                  <div ripple="" ng-click="hpanel = [false, true, false, false]" ng-class="{'bg-purple': hpanel[1]}" class="col-xs-3 col-md-6 bb br pv-xxl clickable">
                     <em class="icon-head fa-2x mv"></em>
                  <span class="ripple"></span></div>
                  <div ripple="" ng-click="hpanel = [false, false, true, false]" ng-class="{'bg-pink': hpanel[2]}" class="col-xs-3 col-md-6 bb-lg br pv-xxl clickable">
                     <em class="icon-share fa-2x mv"></em>
                  <span class="ripple"></span></div>
                  <div ripple="" ng-click="hpanel = [false, false, false, true]" ng-class="{'bg-amber': hpanel[3]}" class="col-xs-3 col-md-6 bb-lg br pv-xxl clickable">
                     <em class="icon-briefcase fa-2x mv"></em>
                  <span class="ripple"></span></div>
               </div>
            </div>
            <?php
                
                //SELECT SUM(TotalPrice) as TotalPrice from master_invoice_child WHERE Active='1'
//                
//                SELECT SUM(Shipping) as Shipping,SUM(Discount) as Discount from master_invoice WHERE Active='1'
                
            ?>
            <div ng-if="hpanel[0]" class="col-md-8 ng-scope">
               <div class="row row-table">
                  <div class="col-sm-6 col-xs-12">
                     <div class="p">
                        <div class="row row-flush text-center">
                           <div class="col-xs-6">
                              <p class="mt-lg">Monthly Income
                                 </p><div easypiechart="" options="dashboard.pieOptions" percent="dashboard.piePercent1" class="easypie ng-isolate-scope">
                                    <span class="ng-binding">
                                        <?php
                                            $selectIncomeMonth = "SELECT SUM(Shipping) as Shipping,SUM(Discount) as Discount from master_invoice WHERE Active='1' AND MONTH(CURDATE())=MONTH(Date)";
                            $ObjselectIncomeMonth = mysqli_query($conn, $selectIncomeMonth);
                                            $RsselectIncomeMonth = mysqli_fetch_array($ObjselectIncomeMonth);
                                            
                                            
                                            $selectIncomeChildMonth = "SELECT SUM(master_invoice_child.TotalPrice) as TotalPrice from master_invoice_child,master_invoice WHERE master_invoice_child.InvoiceID = master_invoice.InvoiceID AND master_invoice_child.Active='1' AND MONTH(CURDATE())=MONTH(master_invoice.Date)";
                                            $ObjselectIncomeChildMonth = mysqli_query($conn, $selectIncomeChildMonth);
                                            $RsselectIncomeChildMonth = mysqli_fetch_array($ObjselectIncomeChildMonth);
                                            
                                            $incomeFinalMonth = intval($RsselectIncomeChildMonth['TotalPrice']) + intval($RsselectIncomeMonth['Shipping']) - intval($RsselectIncomeMonth['Discount']); 
                                            echo number_format($incomeFinalMonth,2,".",",");
                                                            
                                         ?>
                                    </span>
                                 <canvas width="110" height="110"></canvas></div>
                              <p></p>
                           </div>
                           <div class="col-xs-6">
                              <p class="mt-lg">Total Income</p>
                              <div easypiechart="" options="dashboard.pieOptions" percent="dashboard.piePercent2" class="easypie ng-isolate-scope">
                                 <span class="ng-binding">
                                 <?php
                                    $selectIncomeChild = "SELECT SUM(TotalPrice) as TotalPrice from master_invoice_child WHERE Active='1'";
                                    $ObjselectIncomeChild = mysqli_query($conn, $selectIncomeChild);
                                    $RsselectIncomeChild = mysqli_fetch_array($ObjselectIncomeChild);
                                    
                                    $selectIncome = "SELECT SUM(Shipping) as Shipping,SUM(Discount) as Discount from master_invoice WHERE Active='1'";
                                    $ObjselectIncome = mysqli_query($conn, $selectIncome);
                                    $RsselectIncome = mysqli_fetch_array($ObjselectIncome);
                                    
                                    $incomeFinal = intval($RsselectIncomeChild['TotalPrice']) + intval($RsselectIncome['Shipping']) - intval($RsselectIncome['Discount']); 
                                    echo number_format($incomeFinal,2,".",",");
                                                    
                                 ?>
                                 
                                 </span>
                              <canvas width="110" height="110"></canvas></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="p">Hourly
                        <div value="35" type="warning" class="progress-xs progress ng-isolate-scope">
  <div style="width: 35%;" class="progress-bar progress-bar-warning" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="35%" ng-transclude=""></div>
</div>Last Month
                        <div value="10" type="info" class="progress-xs progress ng-isolate-scope">
  <div style="width: 10%;" class="progress-bar progress-bar-info" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="10%" ng-transclude=""></div>
</div>Last Year
                        <div value="35" type="danger" class="progress-xs m0 progress ng-isolate-scope">
  <div style="width: 35%;" class="progress-bar progress-bar-danger" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="35%" ng-transclude=""></div>
</div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
</div>
<div class="col-lg-3 fw-boxed">
      <div class="row">
         <div class="col-lg-6 col-sm-3 col-xs-6">
            <div ripple="" class="panel panel-default">
               <div ng-class="'bg-' + app.theme.name" class="panel-body bg-danger">
                <?php
                    $selectInvoice = "SELECT InvoiceID from master_invoice WHERE Active='1'";
                    $ObjselectInvoice = mysqli_query($conn, $selectInvoice);
                    $NumselectInvoice = mysqli_num_rows($ObjselectInvoice);
                ?>
                  <h1 class="text-thin mt"><?php echo $NumselectInvoice;?></h1>
                  <div class="text-right text-sm text-muted">Invoice</div>
               </div>
            <span class="ripple"></span></div>
         </div>
         <div class="col-lg-6 col-sm-3 col-xs-6">
            <div ripple="" class="panel panel-default">
                <?php
                    $selectVisiter = "SELECT VisiterID from master_visiter WHERE Active='1'";
                    $ObjselectVisiter = mysqli_query($conn, $selectVisiter);
                    $NumselectVisiter = mysqli_num_rows($ObjselectVisiter);
                ?>
               <div class="panel-body">
                  <h1 class="text-thin mt"><?php echo $NumselectVisiter;?></h1>
                  <div class="text-right text-sm text-muted">Visiter</div>
               </div>
            <span class="ripple"></span></div>
         </div>
         <div class="col-xs-12">
            <div class="panel panel-default">
               <div ng-class="'bg-' + app.theme.name" class="panel-body bg-danger">
                  <h2 class="text-thin mt" id="NewContacts" style="cursor:pointer;">New contacts</h2>
                  <div class="clearfix">
                     <div class="pull-right">
                        <ul class="list-inline m0">
                           <li class="p0">
                              <a href="">
                                 <img src="images/02.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                              </a>
                           </li>
                           <li class="p0">
                              <a href="">
                                 <img src="images/01.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                              </a>
                           </li>
                           <li class="p0">
                              <a href="">
                                 <img src="images/03.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                              </a>
                           </li>
                           <li class="p0">
                              <a href="">
                                 <img src="images/04.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                              </a>
                           </li>
                           <li class="p0">
                              <a href="" class="v-middle">
                                 <strong>+7</strong>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    <div style="clear:both;"></div>
      <div class="panel panel-default">
      <div class="col-xs-12">
         <!-- START Panel-->
         <div class="panel mb animated fadeInUp" chained-animation="fadeInUp" style="animation-delay: 0.57s;">
            <div class="panel-body">
               <div class="row">
                  <div class="col-lg-8 col-xs-12">
                     <div class="pull-right mr-lg">
                        <div class="text-lg">48.02%</div>
                        <em class="fa fa-caret-up text-success"></em>
                        <small>Sales incremented</small>
                     </div>
                     <p class="pull-left">Sales from last year
                        <br>
                        <small class="text-sm">Proin a nisi ac arcu varius laoreet.</small>
                     </p>
                     <flot height="320px" options="card.splineOptions2" src="'server/chart/linev2.json'" class="ng-isolate-scope"><div style="width: 100%; height: 320px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 696px; height: 320px;" width="696" height="320"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 58px; top: 305px; left: 2px; text-align: center;" class="flot-tick-label tickLabel">Jan</div><div style="position: absolute; max-width: 58px; top: 305px; left: 63px; text-align: center;" class="flot-tick-label tickLabel">Feb</div><div style="position: absolute; max-width: 58px; top: 305px; left: 124px; text-align: center;" class="flot-tick-label tickLabel">Mar</div><div style="position: absolute; max-width: 58px; top: 305px; left: 186px; text-align: center;" class="flot-tick-label tickLabel">Apr</div><div style="position: absolute; max-width: 58px; top: 305px; left: 246px; text-align: center;" class="flot-tick-label tickLabel">May</div><div style="position: absolute; max-width: 58px; top: 305px; left: 309px; text-align: center;" class="flot-tick-label tickLabel">Jun</div><div style="position: absolute; max-width: 58px; top: 305px; left: 372px; text-align: center;" class="flot-tick-label tickLabel">Jul</div><div style="position: absolute; max-width: 58px; top: 305px; left: 431px; text-align: center;" class="flot-tick-label tickLabel">Aug</div><div style="position: absolute; max-width: 58px; top: 305px; left: 493px; text-align: center;" class="flot-tick-label tickLabel">Sep</div><div style="position: absolute; max-width: 58px; top: 305px; left: 556px; text-align: center;" class="flot-tick-label tickLabel">Oct</div><div style="position: absolute; max-width: 58px; top: 305px; left: 616px; text-align: center;" class="flot-tick-label tickLabel">Nov</div><div style="position: absolute; max-width: 58px; top: 305px; left: 678px; text-align: center;" class="flot-tick-label tickLabel">Dec</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 696px; height: 320px;" width="696" height="320"></canvas></div></flot>
                  </div>
                  <div class="col-lg-4 col-xs-12">
                     <h3>Last 3 months goals overview</h3>
                     <p class="text-muted">Donec eu dolor sem, non auctor sapien. Praesent congue nisi in metus malesuada nec dictum nunc egestas.</p>
                     <ul class="list-group">
                        <li class="list-group-item">
                           <table class="wd-wide">
                              <tbody>
                                 <tr>
                                    <td>
                                       <div class="pv">Month</div>
                                    </td>
                                    <td class="wd-sm hidden-xs hidden-sm">
                                       <div class="pv">Volume</div>
                                    </td>
                                    <td class="wd-sm">
                                       <div class="pv">Goal</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </li>
                        <li class="list-group-item">
                           <table class="wd-wide">
                              <tbody>
                                 <tr>
                                    <td>
                                       <h5>November</h5>
                                    </td>
                                    <td class="wd-sm hidden-xs hidden-sm">
                                       <p class="m0">
                                          <small class="text-muted">3500</small>
                                       </p>
                                    </td>
                                    <td class="wd-sm">
                                       <div class="m0 progress-xs progress ng-isolate-scope" type="warning" value="50">
  <div ng-transclude="" aria-valuetext="50%" ng-style="{width: percent + '%'}" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" ng-class="type &amp;&amp; 'progress-bar-' + type" class="progress-bar progress-bar-warning" style="width: 50%;"></div>
</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </li>
                        <li class="list-group-item">
                           <table class="wd-wide">
                              <tbody>
                                 <tr>
                                    <td>
                                       <h5>December</h5>
                                    </td>
                                    <td class="wd-sm hidden-xs hidden-sm">
                                       <p class="m0">
                                          <small class="text-muted">2800</small>
                                       </p>
                                    </td>
                                    <td class="wd-sm">
                                       <div class="m0 progress-xs progress ng-isolate-scope" type="danger" value="20">
  <div ng-transclude="" aria-valuetext="20%" ng-style="{width: percent + '%'}" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" ng-class="type &amp;&amp; 'progress-bar-' + type" class="progress-bar progress-bar-danger" style="width: 20%;"></div>
</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </li>
                        <li class="list-group-item">
                           <table class="wd-wide">
                              <tbody>
                                 <tr>
                                    <td>
                                       <h5>Janaruary</h5>
                                    </td>
                                    <td class="wd-sm hidden-xs hidden-sm">
                                       <p class="m0">
                                          <small class="text-muted">1200</small>
                                       </p>
                                    </td>
                                    <td class="wd-sm">
                                       <div class="m0 progress-xs progress ng-isolate-scope" type="success" value="80">
  <div ng-transclude="" aria-valuetext="80%" ng-style="{width: percent + '%'}" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" ng-class="type &amp;&amp; 'progress-bar-' + type" class="progress-bar progress-bar-success" style="width: 80%;"></div>
</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END Panel-->
      </div>
   </div>  
   <div style="clear:both;"></div>
    <div class="col-md-12">
      <div class="row">
         <div class="col-md-4">
            <!-- START Panel-->
            <div class="panel panel-default">
               <div class="panel-body">
                  <em class="pull-right icon-bar-graph-2 text-muted"></em>
                  <div class="text-center">
                     <div class="text-lg">31.2 ms</div>
                     <p class="text-muted">Average response time</p>
                     <div class="label label-success">
                        20%
                        <em class="fa fa-angle-up"></em>
                     </div>
                  </div>
                  <flot options="dashboard.smallChartOpts" dataset="dashboard.smallChartData1" height="110px" class="mt-lg ng-isolate-scope"><div style="width: 100%; height: 110px; padding: 0px; position: relative;"><canvas height="110" width="217" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 217px; height: 110px;" class="flot-base"></canvas><canvas height="110" width="217" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 217px; height: 110px;" class="flot-overlay"></canvas></div></flot>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <?php
                $arrayCompany = array();
                $TotolCountCompany = 0;
                $selectComapny = "SELECT * FROM `master_company` WHERE Active='1'";
                $ObjselectComapny = mysqli_query($conn, $selectComapny);
                while($RsselectComapny = mysqli_fetch_array($ObjselectComapny))
                {
                    $selectCount =  "SELECT * from master_inventory_child WHERE Type = 'cycle' AND CompanyName = '".$RsselectComapny['CompanyID']."' GROUP BY CompanyName,ModalName,Color,Size";
                    $ObjselectCount = mysqli_query($conn, $selectCount);
                    $NumselectCount = mysqli_num_rows($ObjselectCount);
                    $TotolCountCompany = intval($TotolCountCompany) + intval($NumselectCount);
                    $arrayCompany[$RsselectComapny['CompanyName']] = $NumselectCount;                    
                }
           ?>
            <div class="panel bg-purple">
               <div class="panel-body" style="padding-bottom: 0px;">
                  <em class="pull-right icon-thermometer text-muted"></em>
                  <div class="text-center">
                     <div class="text-lg"><?php echo $TotolCountCompany;?></div>
                     <p class="text-muted">Total Products</p>
                  </div>
               </div>
               <div class="list-group" style="overflow-y: scroll; height: 163px;">
               <?php
                    foreach($arrayCompany as $k=>$v)
                    {
                        ?>
                            <a href="#" class="bg-purple list-group-item clearfix bg-light b0">
                                 <div class="pull-left">
                                    <em class="fa fa-fw fa-desktop mr"></em><?php echo $k;?></div>
                                 <div class="pull-right"><?php echo $v;?></div>
                              </a>
                        <?php      
                    }
               ?>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- START Panel-->
            <div class="panel panel-default">
               <div class="panel-body">
                  <em class="pull-right icon-bar-graph text-muted"></em>
                  <div class="text-center">
                     <div class="text-lg">70%</div>
                     <p class="text-muted">Consumed resources</p>
                     <div class="label label-warning">5%
                        <em class="fa fa-angle-down"></em>
                     </div>
                  </div>
                  <flot options="dashboard.smallChartOpts" dataset="dashboard.smallChartData2" height="110px" class="mt-lg ng-isolate-scope"><div style="width: 100%; height: 110px; padding: 0px; position: relative;"><canvas height="110" width="217" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 217px; height: 110px;" class="flot-base"></canvas><canvas height="110" width="217" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 217px; height: 110px;" class="flot-overlay"></canvas></div></flot>
               </div>
            </div>
         </div>
      </div>    
     </div>  
     <div style="clear:both;"></div>                  
      <!-- START Responsive table-->
      <div class="panel panel-default">
        <div class="col-md-12">
         <div class="table-responsive panel panel-default">
            <form id="FrmWareHouse" action="" method="post">
                    <div class="">  
                        <div class="panel-body">
                            <div>
                                <div class="TypeRadio" style="float:left;width:20%;padding-left:2%;">
                                    <div class="radio c-radio" style="float:left;margin: 0;">
                                        <label>
                                            <input value="cycle" name="Type" id="CycleTypeRadio" checked="checked" type="radio">
                                            <span class="fa fa-circle"></span>Cycle
                                        </label>
                                    </div>
                                    <div class="radio c-radio" style="float:left;margin: 0;padding-left: 1%">
                                        <label>
                                           <input value="spare" name="Type" id="SpareTypeRadio" type="radio">
                                           <span class="fa fa-circle"></span>Spare
                                        </label>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="float:left;width:30%;">
                                    <div>
                                        <select tabindex="3" class="form-control shadow-z1" id="ComapanyName" name="ComapanyName">
                                            <option value="0">Select Company Name</option>
                                            <?php
                                                $selectComapnyName = "SELECT * FROM `master_company`,master_products WHERE master_products.CompanyID = master_company.CompanyID AND master_company.Active='1' group by master_products.CompanyID Order By CompanyName ASC";
                                                $ObjselectComapnyName = mysqli_query($conn, $selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value="<?php echo $RsselectComapnyName['CompanyID'];?>"><?php echo $RsselectComapnyName['CompanyName'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="float:left;width:30%;padding-left:2%;" class="CycleType">
                                    <div>
                                        <select tabindex="4" class="form-control shadow-z1" id="Size" name="Size">
                                            <option value="0">Select Size</option>
                                            <?php
                                                $selectComapnyName = "SELECT * from master_size WHERE Active='1' ORDER BY SizeName ASC";
                                                $ObjselectComapnyName = mysqli_query($conn, $selectComapnyName);
                                                while($RsselectComapnyName = mysqli_fetch_array($ObjselectComapnyName))
                                                {
                                                    ?>
                                                        <option value='<?php echo $RsselectComapnyName['SizeName'];?>'><?php echo $RsselectComapnyName['SizeName'];?></option>
                                                    <?php        
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div style="margin-left:2%;float: left;width: 17%;">
                                    <button tabindex="18" class="mr btn btn-labeled btn-success text-center" type="submit" id="BtnSubmitPrice">
                                        <span class="btn-label">
                                            <i class="fa fa-search"></i>
                                        </span>Search
                                    </button>
                                </div>    
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                 </form>
                <div id="divMainFrmResult" style="position:relative" class="panel panel-default">
                    <div class="panel-body">
                        <div id="divFrmResult">
                        <script src="./js/jquery.dataTables.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                 $('#example').DataTable({
                                     "sPaginationType": "full_numbers"
                                 });
                            });
                        </script>
                            <!--<div class="text-center">Please filter from above</div>-->
                            <?php
                                $selectWareHouse = "SELECT master_company.CompanyName,master_company.CompanyID,master_inventory_child.Color,master_inventory_child.ModalName,master_inventory_child.Size,master_inventory_child.Quantity,master_cyclezone_price.CycleTotalPrice from master_cyclezone_price,master_inventory_child,master_company WHERE master_company.CompanyID=master_inventory_child.CompanyName AND master_inventory_child.InventoryChildID = master_cyclezone_price.InventoryChildID AND master_cyclezone_price.Active='1' AND master_inventory_child.Active='1' AND master_inventory_child.Type='cycle'";
                                //echo $selectWareHouse;
                                $ObjselectWareHouse = mysqli_query($conn, $selectWareHouse);
                                if(mysqli_num_rows($ObjselectWareHouse)>0)
                                {
                                    ?>
                                        <table class="table table-bordered" id="example" >
                                            <colgroup>
                                                <col class="con0" style="align: center; width: 4%" />
                                                <col class="con1" />
                                                <col class="con0" />
                                                <col class="con1" />
                                                <col class="con0" />
                                                <col class="con1" />
                                                <col class="con0" />
                                                <col class="con1" />
                                            </colgroup>
                                            <thead>
                                            <tr>
                                                <th class="text-right">ID</th>
                                                <th>Company Name</th>
                                                <th>Segment</th>
                                                <th>Modal Name</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th class="text-right">Quantity</th>
                                                <th class="text-right">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                    <?php
                                    while($RsselectWareHouse = mysqli_fetch_array($ObjselectWareHouse))
                                    {
                                        //print_r($RsselectWareHouse);
                                        //echo $RsselectWareHouse['Size']."<br />";
                                        $SelectProductID = "SELECT * from master_products WHERE CompanyID = '".$RsselectWareHouse['CompanyID']."' AND ModalName = '".$RsselectWareHouse['ModalName']."' AND Color = '".$RsselectWareHouse['Color']."' AND Size = '".$RsselectWareHouse['Size']."'";
                                        $ObjSelectProductID = mysqli_query($conn, $SelectProductID);
                                        $RsSelectProductID = mysqli_fetch_array($ObjSelectProductID);
                                        
                                        ?>
                                            <tr>
                                                <td class="text-right"><?php echo $RsSelectProductID['ProductID']?></td>
                                                <td><?php echo $RsselectWareHouse['CompanyName']?></td>
                                                <td><?php echo $RsSelectProductID['Segment']?></td>
                                                <td><?php echo $RsselectWareHouse['ModalName']?></td>
                                                <td><?php echo $RsselectWareHouse['Color']?></td>
                                                <td><?php echo $RsselectWareHouse['Size']?></td>
                                                <td class="text-right"><?php echo $RsselectWareHouse['Quantity']?></td>
                                                <td class="text-right"><?php echo number_format($RsselectWareHouse['CycleTotalPrice'],2,".","");?></td>
                                            </tr>
                                        <?php                                                
                                    }
                                    ?>
                                        </tbody>
                                        </table>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <div class="text-center">No record found</div>
                                    <?php
                                }
                            ?>
                        </div>
                        <div id="LoadingdivFrmResult" style="height: 100px;display:none;"><img src="images/wheel.gif" style="position: absolute; top: 10px; left: 50%; height: 100px; width: 135px;"></div>
                    </div>
                </div>
            <!--<table class="table table-bordered table-striped text-center">
               <thead>
                  <tr>
                     <th class="text-center">Code</th>
                     <th class="text-center">Files</th>
                     <th class="text-center">Transactions</th>
                     <th class="text-center">Request</th>
                     <th class="text-center">Income</th>
                     <th class="text-center">Outcome</th>
                     <th class="text-center">Total</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="text-bold">#1234</td>
                     <td>1,232</td>
                     <td>523</td>
                     <td>-</td>
                     <td>
                        <div class="label label-success text-bold">$ 1,548.00
                           <em class="fa fa-fw fa-caret-up"></em>
                        </div>
                     </td>
                     <td>
                        <div class="label label-danger text-bold">$ 0.00
                           <em class="fa fa-fw fa-caret-down"></em>
                        </div>
                     </td>
                     <td>$ 1,548.00</td>
                  </tr>
                  <tr>
                     <td class="text-bold">#548</td>
                     <td>1,232</td>
                     <td>-</td>
                     <td>300</td>
                     <td>
                        <div class="label label-success text-bold">$ 3,548.00
                           <em class="fa fa-fw fa-caret-up"></em>
                        </div>
                     </td>
                     <td>
                        <div class="label label-danger text-bold">$ 1000.00
                           <em class="fa fa-fw fa-caret-down"></em>
                        </div>
                     </td>
                     <td>$ 2,548.00</td>
                  </tr>
                  <tr>
                     <td class="text-bold">#654</td>
                     <td>1,232</td>
                     <td>523</td>
                     <td>57889</td>
                     <td>
                        <div class="label label-success text-bold">$ 10,256.00
                           <em class="fa fa-fw fa-caret-up"></em>
                        </div>
                     </td>
                     <td>
                        <div class="label label-danger text-bold">$ 10,000.00
                           <em class="fa fa-fw fa-caret-down"></em>
                        </div>
                     </td>
                     <td>$ 256.00</td>
                  </tr>
                  <tr>
                     <td class="text-bold">#3266</td>
                     <td>-</td>
                     <td>523</td>
                     <td>1200</td>
                     <td>
                        <div class="label label-success text-bold">$ 11,100.50
                           <em class="fa fa-fw fa-caret-up"></em>
                        </div>
                     </td>
                     <td>
                        <div class="label label-danger text-bold">$ 100.00
                           <em class="fa fa-fw fa-caret-down"></em>
                        </div>
                     </td>
                     <td>$ 11,000.50</td>
                  </tr>
                  <tr>
                     <td class="text-bold">#548</td>
                     <td>1,232</td>
                     <td>-</td>
                     <td>300</td>
                     <td>
                        <div class="label label-success text-bold">$ 3,548.00
                           <em class="fa fa-fw fa-caret-up"></em>
                        </div>
                     </td>
                     <td>
                        <div class="label label-danger text-bold">$ 1000.00
                           <em class="fa fa-fw fa-caret-down"></em>
                        </div>
                     </td>
                     <td>$ 2,548.00</td>
                  </tr>
               </tbody>
            </table>-->
         </div>
         </div>
         <!--<div class="panel-footer">
            <div class="row">
               <div class="col-md-4 col-xs-6">
                  <div class="input-group input-group-sm">
                     <input placeholder="Search" class="form-control" type="text">
                     <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-default">Search</button>
                     </span>
                  </div>
               </div>
               <div class="col-md-4 col-md-offset-4 col-xs-6">
                  <div class="input-group input-group-sm pull-right">
                     <select class="form-control">
                        <option selected="selected" value="0">Bulk action</option>
                        <option value="1">Delete</option>
                        <option value="2">Clone</option>
                        <option value="3">Export</option>
                     </select>
                     <span class="input-group-btn">
                        <button class="btn btn-sm btn-default">Apply</button>
                     </span>
                  </div>
               </div>
            </div>
         </div>-->
      </div>
      <div style="clear:both;"></div>
   </div>
   <!-- END dashboard content-->
   <!-- START dashboard sidebar-->
   <!-- END dashboard sidebar-->
</div></div>
</section> 
<div class="modal fade" id="NewContactsModal" tabindex="-1" role="dialog" aria-labelledby="ContactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div modal-transclude="" class="modal-content">
            <div class="modal-header ng-scope">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">x</button>
                <h4 class="modal-title" id="myModalLabel">Add new contact</h4>
            </div>
            <div class="modal-body ng-scope text-center">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input value="" id="FirstName" name="FirstName" placeholder="First Name" type="text" class="form-control shadow-z1">
                            </div>
                            <div class="col-sm-6">
                                <input value="" id="LastName" name="LastName" placeholder="Last Name" type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input value="" id="Email" name="Email" placeholder="Email" type="text" class="form-control shadow-z1">
                            </div>
                            <div class="col-sm-6">
                                <input value="" id="MobileNo" name="MobileNo" placeholder="Mobile No." type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input value="" id="Area" name="Area" placeholder="Area" type="text" class="form-control shadow-z1">
                            </div>
                            <div class="col-sm-6">
                                <input value="" id="City" name="City" placeholder="City" type="text" class="form-control shadow-z1">
                            </div>
                        </div>
                    </fieldset>
            </div>
            <div class="modal-footer ng-scope">
                <span id="Pleasewait" style="display:none;">Please wait...</span>
                <button class="btn btn-primary" aria-hidden="true" data-dismiss="modal" id="SubmitNewContacts">Submit</button>
            </div>
        </div>
    </div><!-- /.modal-dialog --> 
</div>

<?php
    include("footer.php");
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#SubmitNewContacts').click(function(event) {
            
            var FirstName = $('#FirstName').val();
            var LastName = $('#LastName').val();
            var MobileNo = $('#MobileNo').val();
            var Email = $('#Email').val();
            var Area = $('#Area').val();
            var City = $('#City').val();
            var Error = false;
            if(FirstName=="")
            {
                $('#FirstName').attr('style', 'border:1px solid red !important');
                Error = true;                    
            }   
            else
            {
                $('#FirstName').attr('style', 'border:1px solid #ccc !important');
            }
            if(FirstName=="")
            {
                $('#LastName').attr('style', 'border:1px solid red !important');
                Error = true;                    
            }   
            else
            {
                $('#LastName').attr('style', 'border:1px solid #ccc !important');
            }
            if(MobileNo=="")
            {
                $('#MobileNo').attr('style', 'border:1px solid red !important');
                Error = true;                    
            }   
            else
            {
                $('#MobileNo').attr('style', 'border:1px solid #ccc !important');
            }
            if(City=="")
            {
                $('#City').attr('style', 'border:1px solid red !important');
                Error = true;                    
            }   
            else
            {
                $('#City').attr('style', 'border:1px solid #ccc !important');
            }
            if(Error)
            {
                return false;
            }
            else
            {
                $('#Pleasewait').show(); 
                $.ajax({
                    url: 'ajax.php?filter=InsertVisiter&FirstName='+FirstName+'&LastName='+LastName+'&MobileNo='+MobileNo+'&Email='+Email+'&Area='+Area+'&City='+City,
                    success: function(html) 
                    {
                        $('#Pleasewait').hide(); 
                    }
                });                 
            }
        });
        $('#NewContacts').click(function(event) {
            $('#NewContactsModal').modal('show');            
        });
        $('.TypeRadio input[type="radio"]').click(function(event) {
            if($('.TypeRadio input[type="radio"]:checked').val()=="cycle")
            {
                $('.CycleType').show();
                $('.SpareType').hide();
            }
            else
            {
                $('.CycleType').hide();
                $('.SpareType').show();
            }
        });
        $('#FrmWareHouse').submit(function(event){
            $('#LoadingdivFrmResult').show(); 
            var Type = $('.TypeRadio input[type="radio"]:checked').val();
            var ComapanyName = $('#ComapanyName').val();
            var Size = $('#Size').val();
            $.ajax({
                url: 'ajax.php?filter=GetWarehouseDataDashBoard&Type='+Type+'&ComapanyName='+ComapanyName+'&Size='+Size,
                success: function(html) 
                {
                    $('#LoadingdivFrmResult').hide(); 
                    $("#divFrmResult").html(html);
                }
            }); 
            return false;
        });
    });
    
</script>