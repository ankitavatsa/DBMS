<?php
require('connection.inc.php');
require('functions.inc.php');
require('top.inc.php');
$sql="select * from signup order by ContactNo asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col bg-success">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title" style='margin-left:6%'>Signup </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                      
                                       <th>UserName</th>
                                       <th>Email</th>
                                       <th>Password</th>
                                       <th>ContactNo</th>
                                     
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
                                   $i=1;
                                   while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                       <td class="serial"><?php echo $i?></td>
                                      <td><?php echo $row['UserName']?></td>
                                      <td><?php echo $row['Email']?></td>
                                      <td><?php echo $row['Password']?></td>
                                      <td><?php echo $row['ContactNo']?></td>
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
         