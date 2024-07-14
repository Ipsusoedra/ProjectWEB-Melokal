<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id_artikel = $_GET['id_artikel'];
//ambil data dari database
$query = mysqli_query($koneksi, "SELECT tb_artikel.*, 
tb_kategori.nama_kategori,
tb_penulis.nama_penulis,
tb_merek.nama_merek
FROM tb_artikel
INNER JOIN tb_kategori ON tb_artikel.id_kategori = tb_kategori.id_kategori
INNER JOIN tb_penulis ON tb_artikel.id_penulis = tb_penulis.id_penulis
INNER JOIN tb_merek ON tb_artikel.id_merek = tb_merek.id_merek
");
$result = mysqli_fetch_array($query);
$gambar_artikel = $result['gambar_artikel'];
$judul_artikel = $result['judul_artikel'];
$isi_artikel = $result['isi_artikel'];
$nama_kategori = $result['nama_kategori'];
$nama_penulis = $result['nama_penulis'];
$nama_merek = $result['nama_merek'];
//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Melokal</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Preloader start-->
        <?php include 'preloader.php' ?>
        <!-- Preloader end-->

        <!-- Navbar start-->
        <?php include 'navbar.php' ?>
        <!-- Navbar end-->

        <!-- Sidebar start-->
        <?php include 'sidebar.php' ?>
        <!-- Sidebar end-->

        <!-- Content start-->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include 'header.php' ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row d-flex flex-column justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <form action="proses_edit.php" method="POST" enctype="multipart/form-data"">
                                        <div class=" card-body">
                                    <div class=" card-body">
                                        <div class="form-group">
                                            <input type="hidden" name="id_artikel" value="<?= $id_artikel ?>">
                                        </div>
                                        <center><img src="../../assets/img/<?= $gambar_artikel ?>" style="object-fit: cover;" alt="" class="rounded-circle" width="200px" height="200px"></center>
                                        <div class="form-group">
                                            <label>Pilih Gambar</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="gambar_artikel" class="custom-file-input" required>
                                                    <label class="custom-file-label">Choose Picture</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input type="text" name="judul_artikel" id="judul" class="form-control" value="<?= $judul_artikel ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Isi</label>
                                            <textarea id="isi" name="isi_artikel" class="form-control" rows="4" required><?= $isi_artikel ?></textarea>
                                        </div>

                                        <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC"); ?>
                                        <div class="form-group">
                                            <label for="nama_kategori">Nama Kategori</label>
                                            <select id="nama_kategori" name="nama_kategori" class="form-control custom-select" required>
                                                <option selected disabled>Choose One :</option>
                                                <?php while ($result = mysqli_fetch_array($query)) { ?>
                                                    <option value="<?= $result['id_kategori']; ?>"><?= $result['nama_kategori']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_penulis ORDER BY id_penulis DESC"); ?>
                                        <div class="form-group">
                                            <label for="nama_penulis">Nama Penulis</label>
                                            <select id="nama_penulis" name="nama_penulis" class="form-control custom-select" required>
                                                <option selected disabled>Choose One :</option>
                                                <?php while ($result = mysqli_fetch_array($query)) { ?>
                                                    <option value="<?= $result['id_penulis']; ?>"><?= $result['nama_penulis']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_merek ORDER BY id_merek DESC"); ?>
                                        <div class="form-group">
                                            <label for="nama_merek">Nama Merek</label>
                                            <select id="nama_merek" name="nama_merek" class="form-control custom-select" required>
                                                <option selected disabled>Choose One :</option>
                                                <?php while ($result = mysqli_fetch_array($query)) { ?>
                                                    <option value="<?= $result['id_merek']; ?>"><?= $result['nama_merek']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mb-3 py-3">
                                            <a href="index.php" class="btn btn-secondary">Cancel</a>
                                            <input type="submit" value="Save Changes" class="btn btn-primary float-right">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- Content end-->

        <!-- Footer start -->
        <?php include '../../footer.php' ?>
        <!-- Footer end -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../../plugins/moment/moment.min.js"></script>
    <script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../../dist/js/pages/dashboard.js"></script>
</body>

</html>