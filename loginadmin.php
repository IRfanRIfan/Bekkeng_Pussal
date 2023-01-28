

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login</title>

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
  margin-top: 50px;
  margin-bottom: 50px;
  color: white;
  
}

.container {
  width: 40%;
  margin: 0 auto;
  padding: 20px;
  /* background-color: rgba(0, 0, 0, 0.225); */
  /* box-shadow: 0 0 10px #ccc; */
}

form {
  background-color: rgba(0, 0, 0, 0.225);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 2px 2px 10px #ccc;
}

h1, h3{
  margin-bottom: 30px;
  color: white;
  text-align:center;
}

label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  color: white;
}

input[type="text"], input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
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
p {
  margin-top: 20px;
  font-size: 16px;
  text-align:center;
  color:white;
}

a {
  color: #4CAF50;
  text-decoration: none;
  margin-left:43%;
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
<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == 'irfan' && $password == 'irfan123') {
        $_SESSION['admin'] = true;
        header('Location: Admin/index.php');
        exit;
    }  
    else {
        echo '<h3>Username atau Password Salah Kanda</h3>';
    }
    }
?>
<body>
  <h1 class="title">E-Futsal</h1>
  <div class="container">
    <form  method="post">

      <h1>LOGIN ADMIN</h1>
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" autocomplete="off">
      <br>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" autocomplete="off">
      <br><br><br>
      <input type="submit" value="Masuk">

    </form>
  </div>
  <!-- ----------------------------------------------------------------- -->


</body>
</html>
