<?php
require('connection.inc.php');
require('functions.inc.php');
require('top.inc.php');
$sql="select PeriodStartDate,CycleLength from NextPrediction";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title" style='margin-left:6%'>NextPrediction </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" style='margin-left:6%'>#</th>
                                      
                                       <th>PeriodStartDate</th>
                                       <th>CycleLength</th>
                                      
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                   
                                 <?php 
                                   $i=1;
                                   while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                       <td class="serial"><?php echo $i?></td>
                                      <td><?php echo $row['PeriodStartDate']?></td>
                                      <td><?php echo $row['CycleLength']?></td>
                                    
                                      <?php
                                     $i=$i+1;
                                     ?>
                                      
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
          <?php
require('footer.inc.php');
?>
         