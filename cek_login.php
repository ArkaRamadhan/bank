<?php 
// Mengaktifkan session pada PHP
session_start();

// Menghubungkan PHP dengan koneksi database
include 'koneksi.php';

if (isset($_POST['login'])) {

// Menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);


// Menyeleksi data user dengan username yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// Cek apakah username ditemukan pada database
if($cek > 0){
    $data = mysqli_fetch_array($login);
    $level = $data['level'];
    // Memeriksa kecocokan kata sandi
    if($level == 'admin'){
        // Membuat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';
        $_SESSION['status'] = 'login';
        header('location:admin/card_admin.php');
    } else {
        // Jika kata sandi tidak cocok, alihkan kembali ke halaman login
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header('location:card.php');
    }
} else {
    // Jika username tidak ditemukan, alihkan kembali ke halaman login
   header('location:login.php?UserNotFound');
}

}
?>