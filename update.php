<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_ib'];
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
$batch = $_POST['batch'];
$user_my_bca = $_POST['user_my_bca'];
$password_my_bca = $_POST['password_my_bca'];
$pin_transaksi = $_POST['pin_transaksi'];
$keterangan = $_POST['keterangan'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_akhir = $_POST['tanggal_akhir'];

if ($_FILES['foto_kartu_atm']['error'] === UPLOAD_ERR_OK) {
    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto_kartu_atm']['name'];
    $ukuran = $_FILES['foto_kartu_atm']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:index.php?alert=gagal_ekstensi");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    } elseif ($ukuran >= 1044070) {
        header("location:index.php?alert=gagal_ukuran");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    }

    // memindahkan file ke direktori gambar
    $foto_kartu_atm = '06788443' . '_kartu_atm.' . $ext;

    // Memindahkan file yang diunggah ke direktori yang sesuai
    move_uploaded_file($_FILES['foto_kartu_atm']['tmp_name'], 'gambar/' . $foto_kartu_atm);
}

$id = $_GET['id_ib'];
$data = mysqli_query($koneksi, "select * from bank where id_ib='$id'");
while ($d = mysqli_fetch_array($data)) {

$foto_kk = $d['foto_kk'];
$foto_ktp = $d['foto_ktp'];
$foto_buku_tabungan = $d['foto_buku_tabungan'];
$id_ib = $d['id_ib'];

    // Perbarui data berdasarkan apakah ada file yang diunggah atau tidak
    if (empty($filename)) {
        // Jika tidak ada file yang diunggah, tidak perlu menyertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir'  where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    } else {
        // Jika ada file yang diunggah, sertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir', foto_ktp='$foto_ktp', foto_kartu_atm='$foto_kartu_atm', foto_kk='$foto_kk', foto_buku_tabungan='$foto_buku_tabungan' where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    }
}

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
    $foto_ktp = '06788444' . '_ktp.' . $ext;

    // Memindahkan file yang diunggah ke direktori yang sesuai
    move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $foto_ktp);
}

$id = $_GET['id_ib'];
$data = mysqli_query($koneksi, "select * from bank where id_ib='$id'");
while ($d = mysqli_fetch_array($data)) {

$foto_kk = $d['foto_kk'];
$foto_kartu_atm = $d['foto_kartu_atm'];
$foto_buku_tabungan = $d['foto_buku_tabungan'];
$id_ib = $d['id_ib'];

    // Perbarui data berdasarkan apakah ada file yang diunggah atau tidak
    if (empty($filename)) {
        // Jika tidak ada file yang diunggah, tidak perlu menyertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir'  where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    } else {
        // Jika ada file yang diunggah, sertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir', foto_ktp='$foto_ktp', foto_kartu_atm='$foto_kartu_atm', foto_kk='$foto_kk', foto_buku_tabungan='$foto_buku_tabungan' where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    }
}

if ($_FILES['foto_kk']['error'] === UPLOAD_ERR_OK) {
    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto_kk']['name'];
    $ukuran = $_FILES['foto_kk']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:index.php?alert=gagal_ekstensi");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    } elseif ($ukuran >= 1044070) {
        header("location:index.php?alert=gagal_ukuran");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    }

    // memindahkan file ke direktori gambar
    $foto_kk = '06788445' . '_kk.' . $ext;

    // Memindahkan file yang diunggah ke direktori yang sesuai
    move_uploaded_file($_FILES['foto_kk']['tmp_name'], 'gambar/' . $foto_kk);
}

$id = $_GET['id_ib'];
$data = mysqli_query($koneksi, "select * from bank where id_ib='$id'");
while ($d = mysqli_fetch_array($data)) {

$foto_ktp = $d['foto_ktp'];
$foto_kartu_atm = $d['foto_kartu_atm'];
$foto_buku_tabungan = $d['foto_buku_tabungan'];
$id_ib = $d['id_ib'];

    // Perbarui data berdasarkan apakah ada file yang diunggah atau tidak
    if (empty($filename)) {
        // Jika tidak ada file yang diunggah, tidak perlu menyertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir'  where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    } else {
        // Jika ada file yang diunggah, sertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir', foto_ktp='$foto_ktp', foto_kartu_atm='$foto_kartu_atm', foto_kk='$foto_kk', foto_buku_tabungan='$foto_buku_tabungan' where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    }
}

if ($_FILES['foto_buku_tabungan']['error'] === UPLOAD_ERR_OK) {
    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto_buku_tabungan']['name'];
    $ukuran = $_FILES['foto_buku_tabungan']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:index.php?alert=gagal_ekstensi");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    } elseif ($ukuran >= 1044070) {
        header("location:index.php?alert=gagal_ukuran");
        exit; // berhenti dari skrip untuk mencegah eksekusi selanjutnya
    }

    // memindahkan file ke direktori gambar
    $foto_buku_tabungan = '06788446' . '_buku_tabungan.' . $ext;

    // Memindahkan file yang diunggah ke direktori yang sesuai
    move_uploaded_file($_FILES['foto_buku_tabungan']['tmp_name'], 'gambar/' . $foto_buku_tabungan);
}

$id = $_GET['id_ib'];
$data = mysqli_query($koneksi, "select * from bank where id_ib='$id'");
while ($d = mysqli_fetch_array($data)) {

$foto_ktp = $d['foto_ktp'];
$foto_kartu_atm = $d['foto_kartu_atm'];
$foto_kk = $d['foto_kk'];
$id_ib = $d['id_ib'];

    // Perbarui data berdasarkan apakah ada file yang diunggah atau tidak
    if (empty($filename)) {
        // Jika tidak ada file yang diunggah, tidak perlu menyertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir'  where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    } else {
        // Jika ada file yang diunggah, sertakan kolom foto
        mysqli_query($koneksi, "update bank set nama='$nama', bank='$bank', cabang='$cabang', no_rekening='$no_rek', nama_ibu='$nama_ibu', no_hp='$no_hp', email='$email', password='$password', user_ib='$user_ib', kode_akses='$kode_akses', password_transaksi='$password_transaksi', pin_mb='$pin_mb', pin_atm='$pin_atm', serial_key_number='$serial_key_number', pin_skn='$pin_skn', jenis_atm='$jenis_atm', no_kartu_atm='$no_kartu_atm', cvv='$cvv', masa_berlaku_atm='$masa_berlaku_atm',valid_simcard='$valid_simcard', status='$status', batch='$batch', user_my_bca='$user_my_bca', password_my_bca='$password_my_bca', pin_transaksi='$pin_transaksi', keterangan='$keterangan', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir', foto_ktp='$foto_ktp', foto_kartu_atm='$foto_kartu_atm', foto_kk='$foto_kk', foto_buku_tabungan='$foto_buku_tabungan' where id_ib='$id'");
        header("location:detail.php?id_ib=$id_ib");
    }
}

?>