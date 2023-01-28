<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);
    $nama = $_GET['nama'];
    $sql = "DELETE FROM `pesan` WHERE nama = '$nama'";
    if(mysqli_query($conn,$sql)){
              header("Location: index.php");
    }
    


?>