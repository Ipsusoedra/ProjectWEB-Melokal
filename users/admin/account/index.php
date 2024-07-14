<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
include '../../koneksi.php';
// Create config connection using config file

$id_user = $_SESSION['id_user'];

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
                    <div class="row justify-content-center">
                        <div class="col-md-3">

                            <?php
                            include '../../koneksi.php';
                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE id_user='$id_user'");
                            while (
                                $result =
                                mysqli_fetch_array($query)
                            ) {
                            ?>

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" style="width: 200px; height: 200px; object-fit: cover; " src="../../assets/img/<?= $result['gambar_user']; ?>
" alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center"><?= $result['nama_lengkap']; ?></h3>

                                        <p class="text-muted text-center"><?= $result['status']; ?></p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Username</b> <a class="float-right"><?= $result['username']; ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Telp</b> <a class="float-right"><?= $result['no_telp']; ?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Address</b> <a class="float-right"><?= $result['alamat']; ?></a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between">
                                            <a href="edit.php?id_user=<?= $result['id_user']; ?>" class="btn btn-success btn-block col-md-5"><i class="fas fa-pencil-alt">
                                                </i><b> Edit</b></a>
                                            <a href="proses_hapus.php?id_user=<?= $result['id_user']; ?>" class="btn btn-danger btn- col-md-5"><i class="fas fa-trash">
                                                </i><b> Delete</b></a>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            <?php } ?>
                            <!-- /.card -->
                        </div>
                        <!-- /.row -->
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