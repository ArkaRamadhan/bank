<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_ib'];
$bank = $_POST['bank'];
$nama = $_POST['nama'];
$nama_ibu = $_POST['nama_ibu'];
$no_rek = $_POST['no_rek'];
$no_atm = $_POST['no_atm'];
$pin_atm = $_POST['pin_atm'];
$no_hp = $_POST['no_hp'];
$posisi_atm = $_POST['posisi_atm'];
$supplier = $_POST['supplier'];
$ttl = $_POST['ttl'];
$tanggal_terima = $_POST['tanggal_terima'];
$status = $_POST['status'];
$saldo = $_POST['saldo'];
$jenis_kartu = $_POST['jenis_kartu'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

		$foto = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		if (empty($filename)) {
			mysqli_query($koneksi,"update bank set bank='$bank', nama='$nama', no_rek='$no_rek', no_atm='$no_atm', nama_ibu='$nama_ibu', ttl='$ttl', pin_atm='$pin_atm', no_hp='$no_hp', jenis_kartu='$jenis_kartu', supplier='$supplier', posisi_atm='$posisi_atm',  tgl_terima='$tanggal_terima', status='$status', saldo='$saldo' where id_ib='$id'");
			header("location:index.php?alert=berhasil");
		}else{
			mysqli_query($koneksi,"update bank set bank='$bank', nama='$nama', no_rek='$no_rek', no_atm='$no_atm', nama_ibu='$nama_ibu', ttl='$ttl', pin_atm='$pin_atm', no_hp='$no_hp', jenis_kartu='$jenis_kartu', foto_ktp='$foto', supplier='$supplier', posisi_atm='$posisi_atm',  tgl_terima='$tanggal_terima', status='$status', saldo='$saldo' where id_ib='$id'");
			header("location:index.php?alert=berhasil");
		}
		

// mengalihkan halaman kembali ke index.php

?>