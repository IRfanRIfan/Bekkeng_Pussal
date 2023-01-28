<?php 
include_once '../koneksi_database.php';

   $foto = $_FILES["foto"]["name"];
   $nama_lapangan = $_POST["nama_lapangan"];
   $alamat = $_POST["alamat"];
   $harga = $_POST["harga"];
   $nama_gambar = $nama_lapangan . ".jpg";
   echo "Nama Lapangan: " . $nama_lapangan . "<br>";
   echo "Foto: " . $foto . "<br>";
   echo "Alamat: " . $alamat . "<br>";
   echo "Harga: " . $harga . "<br>";
   echo $nama_gambar. "<br>";
   move_uploaded_file($_FILES["foto"]["tmp_name"], "../Asset/List Lapangan/".$nama_gambar);
   
   $sql = "INSERT INTO `lapangan_futsal`(`foto`, `nama_lapangan`, `alamat`, `harga`, `status`) VALUES ('$nama_gambar','$nama_lapangan','$alamat','$harga','free')";

   if(mysqli_query($conn,$sql)){
        echo "berhasil Input";
  
    }
    header("Location: index.php");
?>