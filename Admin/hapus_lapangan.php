<?php
      $host = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_lap_futsal";
      
      // Create connection
      $conn = mysqli_connect($host, $username, $password, $dbname);
    
      $lap =  $_GET['nama_lapangan'];

    $sql = "DELETE FROM `lapangan_futsal` WHERE `lapangan_futsal`.`nama_lapangan` = '$lap';";
    mysqli_query($conn,$sql);
    header("Location: index.php");
?>