<?php
  include_once 'koneksi_database.php';

    // Menangkap nilai dari form
    $username = $_POST['username'];
    $nama_lapangan = $_POST['nama_lapangan'];
    $foto = $_POST['foto'];
    $alamat = $_POST['alamat'];
    $jam = $_POST['jam'];
    $total_harga = $_POST['total_harga'];

    $jam_mulai = new DateTime();
    $timezone = new DateTimeZone('Asia/Makassar');
    $jam_mulai->setTimezone($timezone);
    $jam_mulai = $jam_mulai->format('Y-m-d H:i:s');

    $jam_temp = new DateTime();
    $timezone = new DateTimeZone('Asia/Makassar');
    $jam_temp->setTimezone($timezone);
    $jam_temp->add(new DateInterval('PT'.$jam.'H'));
    $jam_akhir = $jam_temp->format('Y-m-d H:i:s');

    // Mencetak nilai dari form
    echo "Username: ".$username."<br>";
    echo "Nama Lapangan: ".$nama_lapangan."<br>";
    echo "Foto: ".$foto."<br>";
    echo "Alamat: ".$alamat."<br>";
    echo $jam_mulai."<br>";
    echo $jam_akhir."<br>";
    echo "Jam: ".$jam."<br>";
    echo "Total Harga: ".$total_harga."<br>";
    $status = "menunggu";
    $sql = "INSERT INTO `pesan`(`id`, `nama`, `lapangan`, `bayar`, `mulai`, `akhir`, `status`, `jam`) VALUES ('','$username','$nama_lapangan','$total_harga','$jam_mulai','$jam_akhir','$status' ,'$jam')";

    if (mysqli_query($conn, $sql)) {
      header("Location: dashboard.php?username=".$username);

        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
