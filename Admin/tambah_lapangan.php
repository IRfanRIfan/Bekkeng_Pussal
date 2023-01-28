<?php 
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_lap_futsal";
   
   // Create connection
   $conn = mysqli_connect($host, $username, $password, $dbname);
    session_start()
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Lapangan</title>

    <style>
    form {
        width: 80%;
        margin: 0 auto;
        text-align: left;
        padding: 20px;
        background-color: white;
    }

    label {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
        display: block;
    }

    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    }

    input[type="file"] {
        background-color: #f9f9f9;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .tambah-lapangan {
        background-color: white;
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    body {
        background-color: white;
    }
</style>
</head>
<body>
    <h1>Tambahkan Lapangan</h1>
    <div class="tambah-lapangan">
        <form action="insert_lapangan.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Gambar Lapangan</label>
                <input type="file" name="foto">
            </div>
            <div>
                <label>Nama Lapangan</label>
                <input type="text" name="nama_lapangan">
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="alamat">
            </div>
            <div>
                <label>Harga</label>
                <input type="number" name="harga">
            </div>
            <br><br>
            <input class="btn btn-primary" type="submit" value="Tambah">
        </form>
    </div>
</body>
</html>