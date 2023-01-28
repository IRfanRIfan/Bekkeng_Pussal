<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);
    
   $nama = $_GET['nama'];
   $sql = "SELECT * FROM pesan where nama= '$nama'";
   $result = mysqli_query($conn, $sql);
   if($result){
       while($row = mysqli_fetch_assoc($result)) {
           $jam = $row["jam"];
           $nama_lapangan = $row["lapangan"];
           $bayar = $row["bayar"];
           echo $jam;  
      
       }
   }
   $jam_mulai = new DateTime();
   $timezone = new DateTimeZone('Asia/Makassar');
   $jam_mulai->setTimezone($timezone);
   $jam_mulai = $jam_mulai->format('Y-m-d H:i:s');

   $jam_temp = new DateTime();
   $timezone = new DateTimeZone('Asia/Makassar');
   $jam_temp->setTimezone($timezone);
   $jam_temp->add(new DateInterval('PT'.$jam.'H'));
   $jam_akhir = $jam_temp->format('Y-m-d H:i:s');

   $sql = "UPDATE `pesan` SET `mulai`='$jam_mulai',`akhir`='$jam_akhir',`status`='tersewa' WHERE nama='$nama'";
   if(mysqli_query($conn,$sql)){
        echo "berhasil";
   }
   $sql = "UPDATE `lapangan_futsal` SET `status` = 'terpakai' WHERE `lapangan_futsal`.`nama_lapangan` = '$nama_lapangan'";
   echo $sql;
   if(mysqli_query($conn,$sql)){
        echo "berhasil terpakai";
    }
    $sql = "INSERT INTO `riwayat`(`nama`, `tanggal`, `lapangan`, `bayaran`, `id_riwayat`) VALUES ('$nama','$jam_mulai','$nama_lapangan','$bayar','')";
    if(mysqli_query($conn,$sql)){
        echo "riwayat";
    }
    header("Location: index.php");

?>