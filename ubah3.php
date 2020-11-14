<?php
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}

require 'function.php';
//ambil data dari viewpengumunan
$ubah = $_GET['id'];
//ambil data dari db untuk value
$data = query("SELECT * FROM materi WHERE id=$ubah")[0];


if(isset($_POST['send'])){
    if(ubah3($_POST)>0){
         echo "<script> alert('Materi Berhasil Di simpan'); document.location.href='materi.php';</script>";
    }else{
       echo "<script> alert('Materi Gagagl Disimpan!')</script>";
    }
    
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="profilmenwa.jpeg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Materi</title>
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
           .input1 .isi2{
               margin-left:3.5%;
           }
       }
       
    </style>
</head>
<body>
    <img src="profilmenwa.jpeg" alt="">
    <h1>Input Materi</h1>
    <div class="input1" id="input1">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?= $data["id"] ?>">
    <input type="hidden" name="gambarlama" id="id" value="<?= $data["file"] ?>">
        <ul>
            <li>
                <label for="tgl">Masukkan Pertemuan ke :</label>
                <input class="tgl"type="number" id="tgl" name="pertemuan" value="<?= $data['pertemuan'];?>">
            </li>
            <li>
                <label for="isi">Masukkan Deskripsi Materi :</label>
                 <input class="isi"type="text" name="deskripsi" id="isi" value="<?= $data['deskripsi'];?>">
            </li>
            <li>
                <label for="isi">Masukkan Keterangan :</label>
                 <input class="isi isi2"type="text" name="keterangan" id="isi" value="<?= $data['keterangan'];?>">
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

    
   