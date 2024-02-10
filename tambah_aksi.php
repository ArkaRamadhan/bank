<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form

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

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){
		$foto = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi,"insert into bank values('','$bank','$nama','$no_rek','$no_atm','$nama_ibu','$ttl','$pin_atm', '$no_hp', '$jenis_kartu', '$foto', '$supplier', '$posisi_atm', '$tanggal_terima', '$status', '$saldo')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=salah ukuran");
	}
}
// menginput data ke database


// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>