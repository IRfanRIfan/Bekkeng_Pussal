<?php
  include_once 'koneksi_database.php';


  // Ambil data dari form
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  // Validasi data
  if ($nama == '' || $username == '' || $password == '' || $password2 == '') {
    echo '<script>alert("Semua field harus diisi")</script>';
  }elseif ($password != $password2) {
    echo '<script>alert("Konfirmasi Password Salah Kanda")</script>';
  } else {
 
    //Query untuk cek apakah username sudah digunakan
    $query_cek = "SELECT * FROM akun WHERE username = '$username'";
    $result = mysqli_query($conn, $query_cek);
    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Username sudah digunakan Kanda , silahkan pilih username lain Kanda")</script>';
    }else{
      // Query untuk menyimpan data ke database
      $query = "INSERT INTO akun (nama, username, password) VALUES (?,?,?)";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param($stmt,'sss',$nama,$username,$password);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      echo '<script>alert("Registrasi Berhasil Kanda Cari Maki Lapangan")</script>';
      header('Location: index.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registrasi</title>
    <style>
      
      *{
       font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }
  body {
 
  background-image: url('Asset/Bg/Bg1.jpg');
  background-size: cover;
  width: 100%;
  height: 100%;
  animation: movingBg 10s linear infinite;
  margin: 0;
  padding: 0;
  
}

@keyframes movingBg {
  from {
    background-position: 0% 0%;
  }
  to {
    background-position: 10% 10%;
  }
}
.title {
  text-align: center;
  color: white;
  font-size: 50px;
  margin-top: 38px;
 

}

.container {
  width: 500px;
  margin: 0 auto;
  /* text-align: center; */
  margin-top: 20px;


}

form {
  background-color: rgba(0, 0, 0, 0.225);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 2px 2px 10px #ccc;

}

h1 {
  color: white;
  margin-bottom: 20px;
  text-align: center;
}

label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  color: #f8f8f8;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: #f8f8f8;
}

input[type="submit"] {
  width: 30%;
  background-color: #000000;
  color: #fff;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  align-items: center;
  margin-left: 35%;
  
  
}
/* properti untuk layar dengan lebar di atas 600px */
@media (min-width: 600px) {
  .container {
    width: 500px; /* lebar form */
  }
}

/* properti untuk layar dengan lebar di bawah 600px */
@media (max-width: 600px) {
  .container {
    width: 90%; /* lebar form sebesar 90% dari lebar layar */
  }
}


    </style>
</head>
<body>
  <h1 class="title">E-Futsal</h1>
    <div class="container">
        <form action="registrasi.php" method="post"  autocomplete="off">
          <h1>REGISTRASI</h1>
          <label for="nama">Nama
            <input type="text" id="nama" name="nama" >
          </label>
          
          <br>
          <label for="username"> Username
            <input type="text" id="username" name="username" ></label>
          
          <br>
          <label for="password"> Password
            <input type="password" id="password" name="password"></label>
         
          <br>
          <label for="password2">Konfirmasi Password
            <input type="password" id="password2" name="password2" ></label>
         
          <br>
          <input type="submit" value="Daftar">
        </form>
      </div>
</body>
</html>

