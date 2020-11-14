<?php
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}

require 'function.php';

if(isset($_POST['send'])){
    if(materi($_POST)>0){
         echo "<script> alert('Materi Berhasil Di simpan')</script>";
    }else{
       echo "<script> alert('Materi Gagagl Disimpan!')</script>";
    }
    
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="layout.css">
    <link rel="icon" href="profilmenwa.jpeg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Materi</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        h1{
            font-family: 'Lobster', cursive;
        }
        .input1{
            border: 3px solid blue;
            padding:5px;
            margin-bottom:50px;
        }
        .input1 input{
            margin-bottom:10px;
        }
        .input1 .isi{
            height:50px;
        }
       .input1 button{
           height:30px;
           width:120px;
           margin-left:0px;
       }
       img{
           width:90px;
           height:90px;
           border-radius:50%;
           margin-left:39%;

       }
       @media(min-width:490px){
           .input1 .tgl{
              margin-left:2%;
           }
           .input1 .isi{
               margin-left:1%;
           }
           .input1 button{
               margin-left:50%;
           }
           .input1 .isi2{
               margin-left:3.5%;
           }
       }
       
    </style>
</head>
<body>
    <img src="profilmenwa.jpeg" alt="">
    <form action="admin.php" method="post">
       <button type="submit" class="btn btn-primary">Kembali</button>
    </form>
    <h1>Input Materi</h1>
    <div class="input1" id="input1">
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="tgl">Masukkan Pertemuan ke :</label>
                <input class="tgl"type="number" id="tgl" name="pertemuan">
            </li>
            <li>
                <label for="isi">Masukkan Deskripsi Materi :</label>
                 <input class="isi"type="text" name="deskripsi" id="isi">
            </li>
            <li>
                <label for="isi">Masukkan Keterangan :</label>
                 <input class="isi isi2"type="text" name="keterangan" id="isi">
            </li>
            <li>
                <label for="gambar">Masukkan Gambar disini :</label>
                <input class="gambar"type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="send"class="btn btn-success" >Send</button>
            </li>
            </ul>
    </form>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

    
   