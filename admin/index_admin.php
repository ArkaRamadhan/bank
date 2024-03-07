<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #data-table {
            width: 100%;
            height: calc(100vh - 200px);
            /* Ubah 200px menjadi tinggi navbar Anda jika perlu */
            overflow-y: auto;
            display: block;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="card_admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="register.php">Tambah Data User</a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Rekening</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Data Rekening</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $status = "";
                    $supplier = "";

                    if (isset($_POST['search'])) {
                        $status = $_POST['status'];
                        $supplier = $_POST['supplier'];
                    }

                    ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Rekening
                        </div>
                        <div class="card-body  table-responsive-xxl">
                            <table id='data-table' class="table table-striped table-hover">
                                <form method="POST" action="">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <h4>Cari</h4>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Filter Jurusan</option>
                                                    <option value="active" <?php if ($status == "active") {
                                                                                echo "selected";
                                                                            } ?>>active</option>
                                                    <option value="Teknik Informatika" <?php if ($status == "Teknik Informatika") {
                                                                                            echo "selected";
                                                                                        } ?>>Teknik Informatika</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" placeholder="Keyword" name="supplier" id="supplier" class="form-control" value="<?php echo $supplier; ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="search" name="search" class="btn btn-warning">Cari</button>
                                            <a href="" class="btn btn-secondary">Reset</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-center">
                                    <a href="tambah_admin.php" class="btn btn-outline-primary" style="text-decoration:none; margin-right: 0.5rem;">+
                                        TAMBAH REKENING</a>
                                    <a target="_blank" href="../export_excel.php" class="btn btn-outline-success " style="text-decoration:none; margin-right: 0.5rem;">EXPORT KE
                                        EXCEL</a>
                                </div>
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">No</th>
                                        <th style="width: 2%;">Status</th>
                                        <th style="width: 2%;">Supplier</th>
                                        <th style="width: 2%;">Nama</th>
                                        <th style="width: 2%;">No.Rek</th>
                                        <th style="width: 2%;">No.HP</th>
                                        <th style="width: 2%;">Bank</th>
                                        <th style="width: 2%;">Valid Simcard</th>
                                        <th style="width: 2%;">User ib</th>
                                        <th style="width: 2%;">Serial Key Number</th>
                                        <th style="width: 2%;">Tanggal Akhir</th>
                                        <th style="width: 2%;">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="width: 1%;">No</th>
                                        <th style="width: 2%;">Status</th>
                                        <th style="width: 2%;">Supplier</th>
                                        <th style="width: 2%;">Nama</th>
                                        <th style="width: 2%;">No.Rek</th>
                                        <th style="width: 2%;">No.HP</th>
                                        <th style="width: 2%;">Bank</th>
                                        <th style="width: 2%;">Valid Simcard</th>
                                        <th style="width: 2%;">User ib</th>
                                        <th style="width: 2%;">Serial Key Number</th>
                                        <th style="width: 2%;">Tanggal Akhir</th>
                                        <th style="width: 2%;">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    include 'koneksi.php';
                                    $status = "";
                                    $supplier = "";
                                    if (isset($_POST['search'])) {
                                        $status = $_POST['status'];
                                        $supplier = $_POST['supplier'];
                                    }
                                    $search_status = '%' . $status . '%';
                                    $search_supplier = '%' . $supplier . '%';
                                    $no = 1;
                                    $query = "SELECT * FROM bank WHERE status LIKE ? AND supplier LIKE ? ORDER BY id_ib DESC";
                                    $dewan1 = $koneksi->prepare($query);
                                    $dewan1->bind_param('ss', $search_status, $search_supplier);
                                    $dewan1->execute();
                                    $res1 = $dewan1->get_result();

                                    if ($res1->num_rows > 0) {
                                        while ($row = $res1->fetch_assoc()) {
                                            $id = $row['id_ib'];
                                            $status = $row['status'];
                                            $nama = $row['nama'];
                                            $no_rekening = $row['no_rekening'];
                                            $no_hp = $row['no_hp'];
                                            $supplier = $row['supplier'];
                                            $bank = $row['bank'];
                                            $valid_simcard = $row['valid_simcard'];
                                            $user_ib = $row['user_ib'];
                                            $serial_key_number = $row['serial_key_number'];
                                            $masa_berlaku_atm = $row['masa_berlaku_atm'];
                                    ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $status ?>
                                                </td>
                                                <td>
                                                    <?php echo $supplier ?>
                                                </td>
                                                <td>
                                                    <?php echo $nama; ?>
                                                </td>
                                                <td>
                                                    <?php echo $no_rekening ?>
                                                </td>
                                                <td>
                                                    <?php echo $no_hp ?>
                                                </td>
                                                <td>
                                                    <?php echo $bank ?>
                                                </td>
                                                <td>
                                                    <?php echo $valid_simcard ?>
                                                </td>
                                                <td>
                                                    <?php echo $user_ib ?>
                                                </td>
                                                <td>
                                                    <?php echo $serial_key_number ?>
                                                </td>
                                                <td>
                                                    <?php echo $masa_berlaku_atm ?>
                                                </td>
                                                <td>
                                                    <a href="detail_admin.php?id_ib=<?php echo $id; ?>" class="btn btn-outline-success" style="width: 80px;">Details</a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan='7'>Tidak ada data ditemukan</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>