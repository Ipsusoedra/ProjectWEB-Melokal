<?php

session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../../session.php';


//load koneksi database
include '../../../koneksi.php';

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
    <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../../../plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../../dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../../plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="../../../../plugins/summernote/summernote-bs4.min.css" />
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
                                    <h3 class="card-title">Add</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <form action="proses_simpan.php" method="POST" enctype="multipart/form-data"">
                                        <div class=" card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Pilih Gambar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="gambar_produk" class="custom-file-input" required>
                                                <label class="custom-file-label">Choose Picture</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_produk">Nama produk</label>
                                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi_produk" class="form-control" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">stok</label>
                                        <input type="text" name="stok" id="stok" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_beli">Harga beli</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <span class="input-group-text">Rp. </span>
                                                <input type="text" name="harga_beli" id="harga_beli" class="form-control" placeholder="100,000" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_jual">Harga jual</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <span class="input-group-text">Rp. </span>
                                                <input type="text" name="harga_jual" id="harga_jual" class="form-control" placeholder="100,000" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="diskon">diskon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <span class="input-group-text">Rp. </span>
                                                <input type="text" name="diskon" id="diskon" class="form-control" placeholder="100,000" required>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_merek ORDER BY id_merek DESC"); ?>
                                    <div class="form-group">
                                        <label for="nama_merek">Nama merek</label>
                                        <select id="nama_merek" name="nama_merek" class="form-control custom-select">
                                            <option selected disabled>Select one</option>
                                            <?php while ($result = mysqli_fetch_array($query)) { ?>
                                                <option value="<?= $result['id_merek']; ?>"><?= $result['nama_merek']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_kategori">Nama kategori</label>
                                        <select id="nama_kategori" name="nama_kategori" class="form-control custom-select">
                                            <option selected disabled>Select one</option>
                                            <option value="8">Topi</option>
                                        </select>
                                    </div>
                                    <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_warna ORDER BY id_warna DESC"); ?>
                                    <div class="form-group">
                                        <label for="nama_warna">Nama warna</label>
                                        <select id="nama_warna" name="nama_warna" class="form-control custom-select">
                                            <option selected disabled>Select one</option>
                                            <?php while ($result = mysqli_fetch_array($query)) { ?>
                                                <option value="<?= $result['id_warna']; ?>"><?= $result['nama_warna']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_ukuran WHERE nama_ukuran < 35 ORDER BY id_ukuran DESC"); ?>
                                    <div class="form-group">
                                        <label for="nama_ukuran">Nama ukuran</label>
                                        <select id="nama_ukuran" name="nama_ukuran" class="form-control custom-select">
                                            <option selected disabled>Select one</option>
                                            <?php while ($result = mysqli_fetch_array($query)) { ?>
                                                <option value="<?= $result['id_ukuran']; ?>"><?= $result['nama_ukuran']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class=" col-md-12 mb-3 py-3">
                                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                                        <input type="submit" value="Save Changes" class="btn btn-primary float-right">
                                    </div>
                            </div>
                            </form>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- Content end-->

    <!-- Footer start -->
    <?php include '../../../footer.php' ?>
    <!-- Footer end -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../../../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../../../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../../../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../../../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../../../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../../../plugins/moment/moment.min.js"></script>
    <script src="../../../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../../../dist/js/pages/dashboard.js"></script>
</body>

</html>