<?php
require 'function.php'; //function php
$id = $_GET['id'];

if(hapus1($id)>0){ //memastikan apakah function hapus($id) berhasil untuk terhubung ke database
    echo "<script>alert('APAKAH ANDA YAKIN UNTUK MENGHAPUS DATA INI?');alert('data berhasil dihapus');document.location.href='viewpengumuman.php';</script>";
}else{
    echo "<script>alert('data Tidak berhasil dihapus');document.location.href='index.php';</script>";
}
