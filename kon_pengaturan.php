<?php 
    include_once 'koneksi_database.php';
    $sql = "SELECT * FROM pengaturan";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id_pengaturan = $row["id"];
            $nama = $row["nama"];
            $jmlLap = $row["jmlLap"];
            $jamBuka = $row["jamBuka"];
            $jamTutup = $row["jamTutup"];
            $password = $row["password"];
    
            echo "ID Pengaturan: " . $id_pengaturan . "<br>";
            echo "Nama: " . $nama . "<br>";
            echo "Jumlah Laporan: " . $jmlLap . "<br>";
            echo "Jam Buka: " . $jamBuka . "<br>";
            echo "Jam Tutup: " . $jamTutup . "<br>";
            echo "Password: " . $password . "<br>";
        }
    } else {
        echo "0 results"
    };
?>
