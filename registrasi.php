<?php
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}
require 'function.php';

if(isset($_POST['daftar'])){
    if(daftar($_POST)>0){
        $benar = true;
    }else{
        $salah = false;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="profilmenwa.jpeg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body{
            background-color:#f1f1f1;
        }
        ul li{
            list-style-type:none;
        }
        h1{
            margin-left:120px;
        }
        .cover{
            border:3px solid blue;
            width:430px;
            margin-left:5px;
        }
        input{
            width:190px;
        }
        button{
            margin-left:120px;
            margin-top:20px;
        }
        img{
            margin-left:150px;
            border-radius:50%;
        }
        @media(min-width:500px){
            .cover{
                margin-top:30px; 
                 margin-left:30%;
            }
            img{
                margin-left:43%;
                margin-top:80px;
            }
            a{
                margin-left:30%;
              
            }
        }
    </style>
</head>
<body>  
    <?php if(isset($benar)): ?>
        <div class="container">
            <div class="alert alert-primary" role="alert">
                Anda berhasil daftar
            </div>
        </div>
    <?php endif;?>

    <?php if(isset($salah)): ?>
        <div class="container">
            <div class="alert alert-danger" role="alert">
                Anda tidak  berhasil daftar
            </div>
        </div>
    <?php endif;?>
    <form action="admin.php">
        <button class="btn btn-primary" type="submit">Kembali</button>
    </form>

    <img src="profilmenwa.jpeg" width="90px" height="90px">
    <div class="cover">
    <h1>Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Username :</label>
                <input style="margin-left:100px;"type="text" id="name" name="nama" required>
            </li>
            <li>
                <label for="password">Password :</label>
                <input style="margin-left:100px;" type="password" id="password" name="password" required >
            </li>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input style="margin-left:20px;"type="password" id="password2" name="password2" required>
            </li>
            <li>
                <button type="submit" name="daftar"class="btn btn-primary" >Daftar</button>
            </li>
        </ul>
    </form>
    </div>
    <a href=".php">Silahkan Login disini</a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>