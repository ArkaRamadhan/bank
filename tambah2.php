<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css">
    <title>Document</title>
</head>

<body>
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">

            <form action="tambah_aksi.php" method="POST" enctype="multipart/form-data">
                <div class="formbold-form-title">
                    <h2 class="">DATA REKENING</h2>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="nama" class="formbold-form-label">
                            Nama
                        </label>
                        <input type="text" name="nama" id="nama" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="bank" class="formbold-form-label"> Bank </label>
                        <input type="text" name="bank" id="bank" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="status" class="formbold-form-label">
                            Status
                        </label>
                        <select class="formbold-form-input" aria-label="Default select example">
                            <option value="" disabled selected>Status</option>
                            <option value="active">Active</option>
                            <option value="blockir">Blockir</option>
                            <option value="stock">Stock</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                    <div>
                        <label for="batch" class="formbold-form-label"> Batch </label>
                        <input type="text" name="batch" id="batch" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="cabang" class="formbold-form-label"> Cabang </label>
                        <input type="text" name="cabang" id="cabang" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="no_rekening" class="formbold-form-label"> No Rekening </label>
                        <input type="text" name="no_rek" id="no_rekening" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="nama_ibu" class="formbold-form-label"> Nama Ibu </label>
                        <input type="text" name="nama_ibu" id="nama_ibu" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="no_hp" class="formbold-form-label"> No Hp </label>
                        <input type="text" name="no_hp" id="no_hp" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="email" class="formbold-form-label"> Email </label>
                        <input type="email" name="email" id="email" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="password" class="formbold-form-label"> Password </label>
                        <input type="password" name="password" id="password" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="user_ib" class="formbold-form-label"> User Internet Banking </label>
                        <input type="text" name="user_ib" id="user_ib" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="pin_ib" class="formbold-form-label"> Pin Internet Banking </label>
                        <input type="password" name="pin_ib" id="pin_ib" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="kode_akses" class="formbold-form-label"> Kode Akses Mobile Banking </label>
                        <input type="text" name="kode_akses" id="kode_akses" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="password_transaksi" class="formbold-form-label"> Password Transaksi </label>
                        <input type="password" name="password_transaksi" id="password_transaksi" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="pin_mb" class="formbold-form-label"> Pin Mobile Banking </label>
                        <input type="password" name="pin_mb" id="pin_mb" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="pin_atm" class="formbold-form-label"> Pin ATM </label>
                        <input type="password" name="pin_atm" id="pin_atm" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="serial_key_number" class="formbold-form-label"> Serial Key Number </label>
                        <input type="text" name="serial_key_number" id="serial_key_number" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="pin_skn" class="formbold-form-label"> Pin Serial Key Number </label>
                        <input type="password" name="pin_skn" id="pin_skn" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="jenis_atm" class="formbold-form-label"> Jenis ATM </label>
                        <input type="text" name="jenis_atm" id="jenis_atm" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="no_kartu_atm" class="formbold-form-label"> No Kartu ATM </label>
                        <input type="text" name="no_kartu_atm" id="no_kartu_atm" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="cvv" class="formbold-form-label"> CVV </label>
                        <input type="text" name="cvv" id="cvv" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="valid_simcard" class="formbold-form-label"> Valid SIM CARD </label>
                        <input type="date" name="valid_simcard" id="valid_simcard" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="user_my_bca" class="formbold-form-label"> User My BCA </label>
                        <input type="text" name="user_my_bca" id="user_my_bca" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="password_my_bca" class="formbold-form-label"> Password My BCA </label>
                        <input type="password" name="password_my_bca" id="password_my_bca" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="pin_transaksi" class="formbold-form-label"> Pin Transaksi </label>
                        <input type="password" name="pin_transaksi" id="pin_transaksi" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="keterangan" class="formbold-form-label"> Keterangan </label>
                        <input type="text" name="keterangan" id="keterangan" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="tanggal_mulai" class="formbold-form-label"> Tanggal Mulai </label>
                        <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="tanggal_akhir" class="formbold-form-label"> Tanggal Akhir </label>
                        <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="bisnis" class="formbold-form-label"> Bisnis </label>
                        <input type="text" name="bisnis" id="bisnis" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="coorporate_id" class="formbold-form-label"> Coorporate_id </label>
                        <input type="text" name="coorporate_id" id="coorporate_id" class="formbold-form-input" />
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <label for="coorporate" class="formbold-form-label"> Coorporate </label>
                        <input type="text" name="coorporate" id="coorporate" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="id" class="formbold-form-label"> ID </label>
                        <input type="text" name="id" id="id" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-mb-3">
                    <label for="masa_berlaku_atm" class="formbold-form-label">
                        Masa Berlaku ATM
                    </label>
                    <input type="date" name="masa_berlaku_atm" id="masa_berlaku_atm" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-3">
                    <label for="foto_ktp" class="formbold-form-label">
                        Foto KTP
                    </label>
                    <input type="file" class="form-control" name="foto" id="customFile" />
                </div>

                <div class="formbold-mb-3">
                    <label for="foto_kartu_atm" class="formbold-form-label">
                        Foto Kartu ATM
                    </label>
                    <input type="file" class="form-control" id="customFile" name="foto_kartu_atm" />
                </div>

                <div class="formbold-mb-3">
                    <label for="foto_kk" class="formbold-form-label">
                        Foto KK
                    </label>
                    <input type="file" class="form-control" id="customFile" name="foto_kk" />
                </div>

                <div class="formbold-mb-3">
                    <label for="foto_buku_tabungan" class="formbold-form-label">
                        Foto Buku Tabungan
                    </label>
                    <input type="file" class="form-control" id="customFile" name="foto_buku_tabungan" />
                </div>

                <div class="formbold-checkbox-wrapper">
                </div>

                <button class="formbold-btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .formbold-mb-3 {
            margin-bottom: 15px;
        }

        .formbold-relative {
            position: relative;
        }

        .formbold-opacity-0 {
            opacity: 0;
        }

        .formbold-stroke-current {
            stroke: currentColor;
        }

        #supportCheckbox:checked~div span {
            opacity: 1;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 570px;
            width: 100%;
            background: white;
            padding: 40px;
        }

        .formbold-img {
            margin-bottom: 45px;
        }

        .formbold-form-title {
            margin-bottom: 30px;
        }

        .formbold-form-title h2 {
            font-weight: 600;
            font-size: 28px;
            line-height: 34px;
            color: #07074d;
        }

        .formbold-form-title p {
            font-size: 16px;
            line-height: 24px;
            color: #536387;
            margin-top: 12px;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .formbold-input-flex>div {
            width: 50%;
        }

        .formbold-form-input {
            text-align: center;
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-form-label {
            color: #536387;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-checkbox-label {
            display: flex;
            cursor: pointer;
            user-select: none;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }

        .formbold-checkbox-label a {
            margin-left: 5px;
            color: #6a64f1;
        }

        .formbold-input-checkbox {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .formbold-checkbox-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            margin-right: 16px;
            margin-top: 2px;
            border: 0.7px solid #dde3ec;
            border-radius: 3px;
        }

        .formbold-btn {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-top: 25px;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

    </style>
</body>

</html>