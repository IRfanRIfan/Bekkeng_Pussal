<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);
    
   $nama_lapangan = $_POST['nama_lapangan'];
   $lap = $_POST['lap'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];

    $query = "UPDATE lapangan_futsal SET nama_lapangan='$nama_lapangan', alamat='$alamat', harga='$harga' WHERE nama_lapangan='$lap'";
    $result = mysqli_query($conn, $query);
    echo $query;
    echo $result;
    if($result){
        echo "Lapangan berhasil diupdate.";
    }else{
        echo "Gagal mengupdate lapangan.";
    }
    header("Location: index.php");

?>