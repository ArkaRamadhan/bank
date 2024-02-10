<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_ib'];


// menghapus data dari database
mysqli_query($koneksi,"delete from bank where id_ib='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>