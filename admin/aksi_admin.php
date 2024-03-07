<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$bank = $_POST['bank'];
$cabang = $_POST['cabang'];
$no_rek = $_POST['no_rek'];
$nama_ibu = $_POST['nama_ibu'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_ib = $_POST['user_ib'];
$kode_akses = $_POST['kode_akses'];
$password_transaksi = $_POST['password_transaksi'];
$pin_mb = $_POST['pin_mb'];
$pin_atm = $_POST['pin_atm'];
$serial_key_number = $_POST['serial_key_number'];
$pin_skn = $_POST['pin_skn'];
$jenis_atm = $_POST['jenis_atm'];
$no_kartu_atm = $_POST['no_kartu_atm'];
$cvv = $_POST['cvv'];
$masa_berlaku_atm = $_POST['masa_berlaku_atm'];
$valid_simcard = $_POST['valid_simcard'];
$status = $_POST['status'];
$supplier = $_POST['supplier'];
$user_my_bca = $_POST['user_my_bca'];
$password_my_bca = $_POST['password_my_bca'];
$pin_transaksi = $_POST['pin_transaksi'];
$keterangan = $_POST['keterangan'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_akhir = $_POST['tanggal_akhir'];
$coorporate_id = $_POST['coorporate_id'];
$coorporate = $_POST['coorporate'];
$id = $_POST['id'];

// menangkap foto yang diunggah
if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:index.php?alert=gagal_ekstensi");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    } elseif ($ukuran >= 1044070) {
        header("location:index.php?alert=gagal_ukuran");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    }

    // memindahkan file ke direktori gambar
    $foto_ktp = $rand . '_ktp.' . $ext;
    $foto_kartu_atm = $rand . '_kartu_atm.' . $ext;
    $foto_kk = $rand . '_kk.' . $ext;
    $foto_buku_tabungan = $rand . '_buku_tabungan.' . $ext;

    move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $foto_ktp);
    move_uploaded_file($_FILES['foto_kartu_atm']['tmp_name'], 'gambar/' . $foto_kartu_atm);
    move_uploaded_file($_FILES['foto_kk']['tmp_name'], 'gambar/' . $foto_kk);
    move_uploaded_file($_FILES['foto_buku_tabungan']['tmp_name'], 'gambar/' . $foto_buku_tabungan);
} else {
    // Jika tidak ada file gambar yang diunggah, atur nama gambar menjadi NULL
    $foto_ktp = NULL;
    $foto_kartu_atm = NULL;
    $foto_kk = NULL;
    $foto_buku_tabungan = NULL;
}

// memasukkan data ke database
$query = "INSERT INTO bank VALUES (NULL, '', '$nama', '$bank', '$cabang', '$no_rek', '$nama_ibu', '$no_hp', '$email', '$password', '$user_ib', '$pin_mb', '$kode_akses', '$password_transaksi', '$pin_mb', '$pin_atm', '$serial_key_number', '$pin_skn', '$jenis_atm', '$no_kartu_atm', '$cvv', '$masa_berlaku_atm', '$valid_simcard', '$status', '$supplier', '$user_my_bca', '$password_my_bca', '$pin_transaksi', '$keterangan', '$tanggal_mulai', '$tanggal_akhir' , '$coorporate_id', '$coorporate', '$id', '$foto_ktp', '$foto_kartu_atm', '$foto_kk', '$foto_buku_tabungan')";
        
// jalankan query
mysqli_query($koneksi, $query);

header("location:index_admin.php?alert=berhasil");
exit; // berhenti dari skrip setelah redirect
?>
