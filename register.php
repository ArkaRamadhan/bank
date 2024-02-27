<?php
session_start();
include 'koneksi.php';


if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('Berhasil menambahkan user baru');
                </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}


?>
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
        <div class="registration form">
            <header>Signup</header>
            <form action="" method="post">
                <input type="text" placeholder="Enter your username" name="username">
                <input type="password" placeholder="Create a password" name="password">
                <input type="password" placeholder="Confirm your password" name="password2">
                <input type="submit" class="button" value="Signup" name="register">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include 'koneksi.php';

function registrasi($data)
{
    $koneksi = $GLOBALS['koneksi']; // tambahkan ini untuk mengakses variabel koneksi

    $username = strtolower(stripslashes($data['username']));
    $password = $data['password'];
    $password2 = $data['password2'];

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                    alert('Password tidak sesuai');
                </script>";
        return false;
    }

    // cek username sudah ada atau belum
    $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    if (mysqli_fetch_assoc($hasil)) {
        echo "<script>
                    alert('Username ini sudah di pakai');
                </script>";
        return false;
    }

    // enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // menyimpan data ke dalam database
    $query = "INSERT INTO user VALUES('', '$username', '$password', 'user')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Berhasil menambahkan user baru');
              </script>";
        header("Location: index_admin.php"); // mengarahkan pengguna ke halaman index.php setelah pendaftaran berhasil
        exit(); // pastikan tidak ada output lain setelah header
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi); // menampilkan pesan kesalahan jika query gagal
        return false;
    }
}
?>
