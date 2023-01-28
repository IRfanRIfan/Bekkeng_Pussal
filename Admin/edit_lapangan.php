<style>
    form {
        width: 500px;
        margin: 25px;
        text-align: left;
    }
    .form-group {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-bottom: 10px;
    }
    label {
        width: 150px;
        font-weight: bold;
    }
    input[type="text"], input[type="number"] {
        flex-grow: 1;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid gray;
    }
    .btn {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>




<?php 

    
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_lap_futsal";
  
  // Create connection
  $conn = mysqli_connect($host, $username, $password, $dbname);

  $lap =  $_GET['nama_lapangan'] ;
    $sql = "SELECT * FROM lapangan_futsal WHERE nama_lapangan = '$lap'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            ?>
<h1>Edit Lapangan</h1> <br>

<form action="update_lapangan.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Lapangan</label>
        <input type="text" name="nama_lapangan" value="<?php echo $lap ;?>">
        <input type="hidden" name="lap" value="<?php echo $lap ;?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text"name="alamat"  value="<?php echo $row['alamat']?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" value="<?php echo $row['harga'] ?>">
    </div>
    <input class="btn btn-primary" type="submit" value="Tambah">
</form>



    <?php 
       }}
    
    ?>