<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);?>
<div class="recentOrders" id="table_container">
                  <div class="cardHeader">
                     <h2>User</h2>
                  </div>
                  <table>
                     <thead align="left">
                        <tr>
                           <td>Name</td>
                           <td>Username</td>
                        </tr>
                     </thead>
                     <tbody align="left">
                        <?php
                           $sql = "SELECT * FROM akun";
                           $result = $conn->query($sql);
                           
                           if ($result->num_rows > 0) {
                               // output data of each row
                               while($row = $result->fetch_assoc()) {
                                   ?>
                        <tr>
                           <td><?php echo $row["nama"]?> </td>
                           <td><?php echo $row["username"]?></td>
                        </tr>
                        <?php 
                           }
                           } else {
                           echo "0 results";
                           }
                           
                           ?>
                        <!-- <tr>
                           <td>Speakers</td>
                           <td>$620</td>
                           <td>Paid</td>
                           <td><span class="status return"> Return</span></td>
                           </tr> -->
                     </tbody>
                  </table>
               </div>