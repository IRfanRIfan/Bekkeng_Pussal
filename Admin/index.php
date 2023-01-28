<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);
   // Order
   $sql = "SELECT COUNT(*) FROM pesan";
   $result = $conn->query($sql);
   
   $row = mysqli_fetch_row($result);
   
   
   
   ?>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin e-Futsal Arena</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer">
      <link rel="stylesheet" type="text/css" href="style.css">
      <style id="__web-inspector-hide-shortcut-style__">
         .__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
         {
         visibility: hidden !important;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="navigation">
            <ul>
               <li>
                  <a href="#">
                     <span class="icon">
                     </span>
                     <span class="title">
                        <h2>e-Futsal Arena</h2>
                     </span>
                  </a>
               </li>
               <li>
                  <a href="#">
                  <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                  <span class="title">Dashboard</span>
                  </a>
               </li>
              
            </ul>
         </div>
         <div class="main">
            <div class="topbar">
               <div class="toggle" onclick="toggleMenu()"></div>
            </div>
            <style>
               a{
               text-decoration : none;
               color : black;
               }
               .card:hover{
               background-color : #bdebff;
               }
               .details{

        position: relative;
            width: 100%;
            padding: 20px;
            padding-top: 0px;
            grid-gap: 20px;
            display: block;
            grid-template-columns: 2fr 1fr;
        }
        button{
            border : none;
        }
        *{
         text-align : left;
        }`
            </style>
            <div class="cardBox">
                <button  id="pesanan_btn">
               <div class="card" >
                     <div>
                        <div class="numbers">Order</div>
                        <div class="cardName"><?php echo $row[0]?> Orang</div>
                     </div>
                    </div>
                </button>
                <button  id="lapangan_btn">
               <div class="card">
                  <div>
                     <div class="numbers">Lapangan</div>
                     <?php 
                        // Users
                        $sql = "SELECT COUNT(*) FROM lapangan_futsal";
                        $result = $conn->query($sql);
                        $row = mysqli_fetch_row($result);
                        ?>
                     <div class="cardName"><?php echo $row[0]?> Lapangan</div>
                  </div>
                  <div class="iconBox">
                    
                  </div>
               </div>
               </button>
               <button  id="user_btn">
               <div class="card">
                  <div>
                     <div class="numbers">Users</div>
                     <?php 
                        // Users
                        $sql = "SELECT COUNT(*) FROM akun";
                        $result = $conn->query($sql);
                        $row = mysqli_fetch_row($result);
                        ?>
                     <div class="cardName"><?php echo $row[0]?> Users</div>
                  </div>
                  <div class="iconBox">
                    
                  </div>
               </div>  
    </button>        
    <button  id="riwayat_btn">     
               <div class="card">
                  <div>
                     <div class="numbers">Riwayat</div>
                     <?php 
                        // Users
                        $sql = "SELECT COUNT(*) FROM riwayat";
                        $result = $conn->query($sql);
                        $row = mysqli_fetch_row($result);
                        ?>
                     <div class="cardName"><?php echo $row[0]?> Sudah Order</div>
                  </div>
                  <div class="iconBox">
                    
                  </div>
               </div>
            </div>
            </button>
            <div class="details">
            <div class="recentOrders" id="table_container">
                  <div class="cardHeader">
                     <h2>Data Order</h2>
                  </div>
                  <table>
                     <thead align="center">
                        <tr>
                           <td>Name</td>
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
                           <td><?php echo $row["nama"];$namae = $row["nama"] ?> </td>
                           
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
                                <a href="tolak.php?nama=<?php echo $row["nama"]?>" class="btn btn-success">Tolak</a>
                              </div>

                              
                           <!-- Edit | Terima | Tolak|  -->
                        </td>
                        </tr>
                        
                        <?php 
                          $target_date = $row["akhir"];
                          $target_timestamp = strtotime($target_date);
                          $current_timestamp = time();
                          if ($current_timestamp > $target_timestamp) {
                           $sql = "DELETE FROM pesan WHERE nama = '$namae'";
                           if(mysqli_query($conn,$sql)){
                              if($row["status"] == "tersewa"){
                                 echo  " waktu " .$namae." telah habis menyewa lapangan selama ". $interval->format("%h Jam");
                              }
                           }
                        }

                           }
                           } else {
                           echo "0 results";
                           }

                         
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <script>
         function toggleMenu() {
             let toggle = document.querySelector(".toggle");
             let navigation = document.querySelector(".navigation");
             let main = document.querySelector(".main");
             toggle.classList.toggle("active");
             navigation.classList.toggle("active");
             main.classList.toggle("active");
         }
      </script>
   </body>
</html>

<script>
const lapanganBtn = document.getElementById("lapangan_btn");
const userBtn = document.getElementById("user_btn");
const pesananBtn = document.getElementById("pesanan_btn");
const riwayatBtn = document.getElementById("riwayat_btn");
const tableContainer = document.getElementById("table_container");

lapanganBtn.addEventListener("click", function() {
  fetch("get_lapangan.php")
    .then(response => response.text())
    .then(data => {
      tableContainer.innerHTML = data;
    });
});

pesananBtn.addEventListener("click", function() {
  fetch("get_pesan.php")
    .then(response => response.text())
    .then(data => {
      tableContainer.innerHTML = data;
    });
});
userBtn.addEventListener("click", function() {
  fetch("get_user.php")
    .then(response => response.text())
    .then(data => {
      tableContainer.innerHTML = data;
    });
});
riwayatBtn.addEventListener("click", function() {
  fetch("get_riwayat.php")
    .then(response => response.text())
    .then(data => {
      tableContainer.innerHTML = data;
    });
});

   </script>