<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);?>
<div class="recentOrders" id="table_container">
   <div class="cardHeader">
      <h2>Lapangan</h2>
   </div>
   <table>
      <thead >
         <tr>
            <td>Nama Lapangan</td>
            <td>Alamat</td>
            <td>Harga</td>
            <td>Status</td>
            <td >Aksi</td>
         </tr>
      </thead>
      <tbody >
         <?php
            $sql = "SELECT * FROM lapangan_futsal";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
         <tr>
            <td><?php echo $row["nama_lapangan"]?> </td>
            <td><?php echo $row["alamat"]?></td>
            <td><?php echo $row["harga"]?>/jam</td>
            <td><?php echo $row["status"]?></td>
            <td>
               <style>
#yellow{
   background-color : yellow;
}#red{
   background-color :  red;
}

               </style>
               <div class="btn-group" role="group" aria-label="Basic mixed styles example" align="right">
                  <a id="yellow" href="edit_lapangan.php?nama_lapangan=<?php echo $row["nama_lapangan"]?>"class="btn btn-primar">Edit</a>
                  <a  id="red"href="hapus_lapangan.php?nama_lapangan=<?php echo $row["nama_lapangan"]?>"class="btn btn-warning">Hapus</a>
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
         <!-- <tr>
            <td>Speakers</td>
            <td>$620</td>
            <td>Paid</td>
            <td><span class="status return"> Return</span></td>
            </tr> -->
      </tbody>
   </table>
   <style>
   #tambah_lapangan:hover{
      color : green;
   }
   </style>
   <a id="tambah_lapangan" href=tambah_lapangan.php>
      <h3>Tambah Lapangan</h3>
   </button>

</div>