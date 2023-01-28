<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);?>
<div class="recentOrders" id="table_container">
                  <div class="cardHeader">
                     <h2>Riwayat</h2>
                  </div>
                  <table>
                     <thead align="left">
                        <tr>
                           <td>Name</td>
                           <td>Tanggal Dan Waktu</td>
                           <td>Lapangan</td>
                           <td>Bayaran</td>
                        </tr>
                     </thead>
                     <tbody align="left">
                        <?php
                           $sql = "SELECT * FROM riwayat";
                           $result = $conn->query($sql);
                           
                           if ($result->num_rows > 0) {
                               // output data of each row
                               while($row = $result->fetch_assoc()) {
                                   ?>
                        <tr>
                           <td><?php echo $row["nama"]?> </td>
                           <td>Rp <?php echo $row["tanggal"]?></td>
                           <td><?php echo $row["lapangan"]?></td>
                           <td><?php echo $row["bayaran"]?></td>

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