<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Banking Form</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            margin: 100px 0px 50px 2rem;
            width: 100rem;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            position: relative;
            border-top: 5px solid #0ab2fa;
            display: inline-block;
        }

        .mybca {
            width: 53rem;
            margin: 100px 0px 50px 2rem;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            position: absolute;
            display: inline-block;
            border-top: 5px solid #0ab2fa;

        }

        .image {
            position: relative;
            display: inline-block;
            width: 25.3rem;
            margin: 100px 0px 50px 2rem;
            background-color: #fff;
            border-radius: 4px;
            border-top: 5px solid #0ab2fa;
        }

        .cabang-wrapper {
            position: absolute;
            right: 2rem;
            transform: translateY(-10%);
            text-align: end;
            /* Move up by the height of the h5 element */
        }

        .wrapper h5 {
            font-size: 17px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 2px 1px rgba(0, 127, 255, 0.5);
        }

        button {
            padding: 2px 40rem 2px 40rem;
            width: 630px;
        }
    </style>
</head>

<body>
    <h1>Detail Rekening</h1>
    <div class="container">

        <?php
        include 'koneksi.php';
        $id = $_GET['id_ib'];
        $data = mysqli_query($koneksi, "select * from bank where id_ib='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

            <center>
                <h3><?= $d['nama'] ?></h3>
                <h4><?= $d['bank'] ?></h4>
            </center>
            <form>


                <div class="wrapper">
                    <hr>
                    <h5>Cabang: <span class="cabang-wrapper"><?= $d['cabang']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>No.Rekening: <span class="cabang-wrapper"><?= $d['no_rekening']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Nama_ibu: <span class="cabang-wrapper"><?= $d['nama_ibu']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>No Hp: <span class="cabang-wrapper"><?= $d['no_hp']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Email: <span class="cabang-wrapper"><?= $d['email']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Password: <span class="cabang-wrapper"><?= $d['password']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>User Internet Banking: <span class="cabang-wrapper"><?= $d['user_ib']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Pin Interner Banking: <span class="cabang-wrapper"><?= $d['pin_ib']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Kode Akses Mobile Banking: <span class="cabang-wrapper"><?= $d['kode_akses']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Password Transaksi: <span class="cabang-wrapper"><?= $d['password_transaksi']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Pin Mobile Banking: <span class="cabang-wrapper"><?= $d['pin_mb']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Pin ATM: <span class="cabang-wrapper"><?= $d['pin_atm']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Serial Key Number: <span class="cabang-wrapper"><?= $d['serial_key_number']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Pin Serial Key Number: <span class="cabang-wrapper"><?= $d['pin_skn']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Jenis ATM: <span class="cabang-wrapper"><?= $d['jenis_atm']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>No Kartu ATM: <span class="cabang-wrapper"><?= $d['no_kartu_atm']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>CVV: <span class="cabang-wrapper"><?= $d['cvv']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Masa Berlaku ATM: <span class="cabang-wrapper"><?= $d['masa_berlaku_atm']; ?></span></h5>
                    <hr>
                </div>
                <div class="wrapper">
                    <h5>Valid SIM Card: <span class="cabang-wrapper"><?= $d['valid_simcard']; ?></span></h5>
                    <hr>
                </div>

                <button class="btn btn-xl btn-primary">UPDATE</button>
                <button class="btn btn-xl btn-danger">DELETE</button>



                <!-- Add more form fields here, based on the provided image -->
            </form>
    </div>

    <div class="mybca">
        <center>
            <h3>MYBCA</h3>
        </center>
        <div class="wrapper">
            <hr>
            <h5>User MYBCA <span class="cabang-wrapper"><?= $d['user_my_bca']; ?></span></h5>
            <hr>
        </div>
        <div class="wrapper">
            <h5>Password MYBCA <span class="cabang-wrapper"><?= $d['password_my_bca']; ?></span></h5>
            <hr>
        </div>
        <div class="wrapper">
            <h5>Pin Transaksi <span class="cabang-wrapper"><?= $d['pin_transaksi']; ?></span></h5>
            <hr>
        </div>
        <div class="wrapper">
            <h5>Keterangan <span class="cabang-wrapper"><?= $d['keterangan']; ?></span></h5>
            <hr>
        </div>
        <div class="wrapper">
            <h5>Tanggal Mulai <span class="cabang-wrapper"><?= $d['tanggal_mulai']; ?></span></h5>
            <hr>
        </div>
        <div class="wrapper">
            <h5>Tanggal Akhir <span class="cabang-wrapper"><?= $d['tanggal_akhir']; ?></span></h5>
            <hr>
        </div>
    </div>

    <div class="image">
        <div class="ktp">
            <center>
                <h3 style="margin-top: 2rem;">Foto KTP</h3>
                <hr>
                <img src="gambar/<?= $d['foto_ktp']; ?>" alt="" width="170rem" height="90rem">
                <hr>
            </center>

        </div>
    </div>

    <div class="image">
        <div class="atm">
            <center>
                <h3 style="margin-top: 2rem;">Foto Kartu ATM</h3>
                <hr>
                <img src="gambar/<?= $d['foto_kartu_atm']; ?>" alt="" width="170rem" height="90rem">
                <hr>
            </center>

        </div>
    </div>

<?php

        }
?>
</body>

</html>