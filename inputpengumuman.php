<?php
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}

require 'function.php';

if(isset($_POST['send'])){
    if(pengumuman($_POST)>0){
         echo "<script> alert('Pengumuman Berhasil Di Upload')</script>";
    }else{
       echo "<script> alert('pengumuman Tidak berhasil Diupload!')</script>";
    }
    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="profilmenwa.jpeg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pengumuman</title>
    <link rel="stylesheet" href="layout.css">
    <style>
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
           .input1 .link{
               margin-left:6.5%;
           }
           .input1 .link2{
               margin-left:10%;
           }
       }
       
    </style>
</head>
<body>
    <img src="profilmenwa.jpeg" alt="">
    <h1>Input pengumuman</h1>
    <div class="input1" id="input1">
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="tgl">Masukkan Judul dan Tanggal :</label>
                <input class="tgl"type="text" id="tgl" name="judul">
            </li>
            <li>
                <label for="isi">Masukkan pengumuman disini :</label>
                 <input class="isi"type="text" name="pengumuman" id="isi">
            </li>
            <li>
                <label for="judullink">Masukkan Judul Link :</label>
                <input class="link link1"type="text" name="judullink" id="judullink">
            </li>
            <li>
                <label for="link">Masukkan Link :</label>
                <input class="link link2"type="text" name="link" id="judullink">
            </li>
            <li>
                <label for="gambar">Masukkan Gambar disini :</label>
                <input class="gambar"type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="send">Send</button>
            </li>
            </ul>
    </form>
    </div>

    
   