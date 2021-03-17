<?php
require('connection.inc.php');
require('functions.inc.php');
require('top.inc.php');
$sql="select * from ContactDetail";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title" style='margin-left:6%'>ContactDetail</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                      
                                       <th>CountryName</th>
                                       <th>StateName</th>
                                       <th>CityName</th>
                                       <th>ContactNo</th>
                                       <th>PinCode</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                   
                                 <?php 
                                   $i=1;
                                   while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                       <td class="serial"><?php echo $i?></td>
                                      <td><?php echo $row['CountryName']?></td>
                                      <td><?php echo $row['StateName']?></td>
                                      <td><?php echo $row['CityName']?></td>
                                      <td><?php echo $row['ContactNo']?></td>
                                      <td><?php echo $row['PinCode']?></td>
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
         