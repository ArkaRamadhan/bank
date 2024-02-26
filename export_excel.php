<!DOCTYPE html>
<html>

<head>
    <title>EXPORT EXCEL</title>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Bank.xls");
    ?>
</head>

<body>

    <center>

        <h2>DATA BANK</h2>

    </center>

    <?php
    include 'koneksi.php';
    ?>

    <table border="1" style="width: 100%">
        <tr>
            <th>No</th>
            <th>Status</th>
            <th>Batch</th>
            <th>Cabang</th>
            <th>Nama</th>
            <th>Nama ibu</th>
            <th>No.Rek</th>
            <th>No.HP</th>
            <th>Bank</th>
            <th>Valid Simcard</th>
            <th>User ib</th>
            <th>Pin ib</th>
            <th>Email</th>
            <th>Password</th>
            <th>Kode akses mb</th>
            <th>Password transaksi</th>
            <th>Pin mb</th>
            <th>Pin ATM</th>
            <th>Serial Key Number</th>
            <th>Pin Serial Key Number</th>
            <th>Jenis ATM</th>
            <th>No kartu ATM</th>
            <th>CVV</th>
            <th>User My BCA</th>
            <th>Password My BCA</th>
            <th>Pin Transaksi</th>
            <th>Keterangan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Akhir</th>
            <th>Bisnis</th>
            <th>Coorporate_id</th>
            <th>Coorporate</th>
            <th>ID</th>
            <th>Masa Berlaku ATM</th>
        </tr>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "select * from bank");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['batch']; ?></td>
                <td><?php echo $data['cabang']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nama_ibu']; ?></td>
                <td><?php echo $data['no_rekening']; ?></td>
                <td><?php echo $data['no_hp']; ?></td>
                <td><?php echo $data['bank']; ?></td>
                <td><?php echo $data['valid_simcard']; ?></td>
                <td><?php echo $data['user_ib']; ?></td>
                <td><?php echo $data['pin_ib']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['kode_akses']; ?></td>
                <td><?php echo $data['kode_akses']; ?></td>
                <td><?php echo $data['password_transaksi']; ?></td>
                <td><?php echo $data['pin_mb']; ?></td>
                <td><?php echo $data['pin_atm']; ?></td>
                <td><?php echo $data['serial_key_number']; ?></td>
                <td><?php echo $data['jenis_atm']; ?></td>
                <td><?php echo $data['no_kartu_atm']; ?></td>
                <td><?php echo $data['cvv']; ?></td>
                <td><?php echo $data['user_my_bca']; ?></td>
                <td><?php echo $data['password_my_bca']; ?></td>
                <td><?php echo $data['pin_transaksi']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>
                <td><?php echo $data['tanggal_mulai']; ?></td>
                <td><?php echo $data['tanggal_akhir']; ?></td>
                <td><?php echo $data['bisnis']; ?></td>
                <td><?php echo $data['coorporate_id']; ?></td>
                <td><?php echo $data['coorporate']; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['masa_berlaku_atm']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html