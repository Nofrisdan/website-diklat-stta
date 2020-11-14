<?php
session_start();
if(isset($_SESSION['masuk'])){
    header('location:admin.php');
    exit;
}
require 'function.php';

if(isset($_POST['login'])){
   global $db;
   $username = $_POST['username'];
   $password = $_POST['password'];

   //ambil data dari database
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $result = mysqli_query($db,$sql);

   //cek username apakah sudah di gunakan
   if(mysqli_num_rows($result)=== 1){ //mengecek apakah ada data yang di inginkan ada di database 1 = ada, 0 = tidak ada
     //cek password apakah sesuai di db
     $row = mysqli_fetch_assoc($result); //data dalam database
     if( password_verify($password, $row['password'] )){ //cek apakah pass sesuai dengan  yg di db
        $_SESSION['masuk'] = true;
        header('location:admin.php');
        exit;

     }
   }

   $error = true;


}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="profilmenwa.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background: #f1f1f1;
        }
        ul li{
            list-style-type:none;
        }
        .cover{
            border:3px solid blue;
            margin-top:30px;
            width:400px;
            margin-left:25px;
        }
        h1{
            margin-left:160px;
            margin-bottom:20px;
        }
        input{
            margin-left:20px;
        }
        #password{
            margin-left:23px;
        }
        img{
            border-radius:50%;
            margin-left:40%;
            margin-top:60px;
        }
        button{
            margin-left:130px;
            margin-top:10px;
            width:120px;
        }
        @media(min-width:600px){
            .cover{
                margin-left:27%;
            }
           
        }
    </style>
</head>
<body>
    <?php if(isset($error)): ?>
            <div class="container">
                <div class="alert alert-danger" role="alert">
                Username / password anda salah!
                </div>
        </div>
    <?php endif;?>
    <img src="profilmenwa.jpeg" width="90px" height="90px">
    <div class="cover">
        <h1> LOGIN</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"required>
                </li>
                <li>
                    <label for="password">Password</label>
                    <input class="input2"type="password" id="password" name="password" required>
                </li>
                <button class="btn btn-primary"type="submit" name="login">Login</button>
            </ul>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>