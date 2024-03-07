<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <style>
        /* Import Google font - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            width: 100%;
            background: #009579;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 430px;
            width: 100%;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }

        .container .registration {
            display: none;
        }

        #check:checked~.registration {
            display: block;
        }

        #check:checked~.login {
            display: none;
        }

        #check {
            display: none;
        }

        .container .form {
            padding: 2rem;
        }

        .form header {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form input {
            height: 60px;
            width: 100%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
        }

        .form input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        }

        .form a {
            font-size: 16px;
            color: #009579;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .form input.button {
            color: #fff;
            background: #009579;
            font-size: 1.2rem;
            font-weight: 500;
            letter-spacing: 1px;
            margin-top: 1.7rem;
            cursor: pointer;
            transition: 0.4s;
        }

        .form input.button:hover {
            background: #006653;
        }

        .signup {
            font-size: 17px;
            text-align: center;
        }

        .signup label {
            color: #009579;
            cursor: pointer;
        }

        .signup label:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="cek_login.php" method="post">
                <input type="text" placeholder="Enter your username" name="username">
                <input type="password" placeholder="Enter your password" name="password">
                <a href="#">Forgot password?</a>
                <input type="submit" class="button" value="Login" name="login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
// Mengaktifkan session pada PHP
session_start();

// Menghubungkan PHP dengan koneksi database
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['login'])) {

    // Menangkap data yang dikirim dari form login
    // $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    // $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $username = trim($_POST['username']);
    $username = htmlspecialchars($_POST['username']);
    $password = trim($_POST['password']);
    $password = htmlspecialchars($_POST['password']);



    // Menyeleksi data user dengan username yang sesuai
    $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    // Cek apakah username ditemukan pada database
    if($cek > 0){
        $data = mysqli_fetch_array($login);
        $level = $data['level'];
        $hash_password = $data['password']; // Mengambil hash password dari database

        // Memeriksa kecocokan kata sandi
        if(password_verify($password, $hash_password)){ // Menggunakan password_verify() untuk membandingkan password
            // Membuat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $level;
            header('location:index_admin.php');
        } else {
            // Jika kata sandi tidak cocok, alihkan kembali ke halaman login
            header('location:login.php?pesan=gagal');
        }
    } else {
        // Jika username tidak ditemukan, alihkan kembali ke halaman login
        header('location:login.php?pesan=gagal');
    }
}}
?>

