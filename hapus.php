<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$bahan_id = $_GET['id_bahan'];

//menghapus data dari database
mysqli_query($db, "DELETE from tb_bahan where id_bahan = '$bahan_id'");
mysqli_query($db, "DELETE from tb_toko where id_bahan = '$bahan_id'");

//mengalihkan halaman kembali ke index.php
header("location:tampil.php");
?>