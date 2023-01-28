<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);?>
<d<div class="recentOrders" id="table_container">
                  <div class="cardHeader">
                     <h2>Data Order</h2>
                  </div>
                  <table>
                     <thead align="center">
                        <tr>
                           <td>Nama</td>
                           <td>Bayaran</td>
                           <td>Lapangan</td>
                           <td>Waktu Sewa</td>
                           <td>Waktu-Mulai</td>
                           <td>Waktu-Berakhir</td>
                           <td>Status</td>
                           <td align="center">Aksi</td>
                        </tr>
                     </thead>
                     <tbody align="center">
                        <?php
                           $sql = "SELECT * FROM pesan";
                           $result = $conn->query($sql);
                           
                           if ($result->num_rows > 0) {
                               // output data of each row
                               while($row = $result->fetch_assoc()) {
                                   ?>
                        <tr>
                           <td><?php echo $row["nama"]?> </td>
                           <td>Rp <?php echo $row["bayar"]?></td>
                           <td><?php echo $row["lapangan"]?></td>
                           <td><?php 
                              $date1 = new DateTime($row["mulai"]);
                              $date2 = new DateTime($row["akhir"]);
                              $interval = $date2->diff($date1);
                              echo $interval->format("%h Jam");
                           ?></td>
                           <td><?php echo $row["mulai"]?></td>
                           <td><?php echo $row["akhir"]?></td>
                           <td><?php echo $row["status"]?></td>
                           <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="terima.php?nama=<?php echo $row["nama"]?> "class="btn btn-warning">Terima</a>
                                <a ref="tolak.php?naman =<?php echo $row["nama"]?>" class="btn btn-success">Tolak</a>
                              </div>

                              
                           <!-- Edit | Terima | Tolak|  -->
                        </td>
                        </tr>
                        <?php 
                           }
                           } else {
                           echo "0 results";
                           }
                           ?>
                     </tbody>
                  </table>
               </div>