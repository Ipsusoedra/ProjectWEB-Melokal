<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../koneksi.php';
include '../session.php';

$about = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_about');
$jumlah_about = mysqli_fetch_assoc($about);

$artikel = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_artikel');
$jumlah_artikel = mysqli_fetch_assoc($artikel);

$ekspedisi = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_ekspedisi');
$jumlah_ekspedisi = mysqli_fetch_assoc($ekspedisi);

$kategori = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_kategori');
$jumlah_kategori = mysqli_fetch_assoc($kategori);

$merek = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_merek');
$jumlah_merek = mysqli_fetch_assoc($merek);

$payment = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_payment');
$jumlah_payment = mysqli_fetch_assoc($payment);

$penjualan = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_penjualan');
$jumlah_penjualan = mysqli_fetch_assoc($penjualan);

$penulis = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_penulis');
$jumlah_penulis = mysqli_fetch_assoc($penulis);

$produk = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_produk');
$jumlah_produk = mysqli_fetch_assoc($produk);

$ukuran = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_ukuran');
$jumlah_ukuran = mysqli_fetch_assoc($ukuran);

$users = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_users');
$jumlah_users = mysqli_fetch_assoc($users);

$warna = mysqli_query($koneksi, 'SELECT count(*) jml FROM tb_warna');
$jumlah_warna = mysqli_fetch_assoc($warna);

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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include 'header.php' ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3> <?= $jumlah_penjualan['jml'] ?></h3>

                  <p>Sales</p>
                </div>
                <div class="icon">
                  <i class="fa-sharp fa-solid fa-money-check-dollar"></i>
                </div>
                <a href="sale/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3> <?= $jumlah_produk['jml'] ?></h3>

                  <p>Products</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-shirt"></i>
                </div>
                <a href="product/baju/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3> <?= $jumlah_merek['jml'] ?></h3>

                  <p>Brands</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-tags"></i>
                </div>
                <a href="brand/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3> <?= $jumlah_ukuran['jml'] ?></h3>

                  <p>Sizes</p>
                </div>
                <div class="icon">
                  <i class="fa-sharp fa-solid fa-expand"></i>
                </div>
                <a href="size/size_a/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3> <?= $jumlah_warna['jml'] ?></h3>

                  <p>Colours</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <a href="colour/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> <?= $jumlah_kategori['jml'] ?></h3>

                  <p>Categories</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-layer-group"></i>
                </div>
                <a href="category/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3> <?= $jumlah_users['jml'] ?></h3>

                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-users"></i>
                </div>
                <a href="user/customers/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #CBFFA9;">
                <div class="inner">
                  <h3> <?= $jumlah_ekspedisi['jml'] ?></h3>

                  <p>Expeditions</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-motorcycle"></i>
                </div>
                <a href="expedition/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-dark">
                <div class="inner">
                  <h3> <?= $jumlah_payment['jml'] ?></h3>

                  <p>Payments</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-credit-card"></i>
                </div>
                <a href="payment/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FF9B9B;">
                <div class="inner">
                  <h3> <?= $jumlah_penulis['jml'] ?></h3>

                  <p>Writers</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-pen"></i>
                </div>
                <a href="writer/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFD6A5;">
                <div class="inner">
                  <h3> <?= $jumlah_artikel['jml'] ?></h3>

                  <p>Articles</p>
                </div>
                <div class="icon">
                  <i class="fas fa-newspaper"></i>
                </div>
                <a href="article/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFEC4;">
                <div class="inner">
                  <h3> <?= $jumlah_about['jml'] ?></h3>

                  <p>About</p>
                </div>
                <div class="icon">
                  <i class="fas fa-info-circle"></i>
                </div>
                <a href="about/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row d-flex justify-content-center">
            <section class="col-lg-6 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Monthly Sales
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#charta" data-toggle="tab">Line GRAPH</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="charta" style="position: relative; height: auto">
                      <canvas id="chart3" style="height:100vh; width:auto; margin: 0 auto;"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </section>
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Sales by category
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#charta" data-toggle="tab">PIE GRAPH</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="charta" style="position: relative; height: auto">
                      <canvas id="chart1" style="height:100vh; width:auto; margin: 0 auto;"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </section>
            <!-- /.Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Users Registered
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#charta" data-toggle="tab">Bar GRAPH</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="charta" style="position: relative; height: auto">
                      <canvas id="chart2" style="height:100vh; width:auto; margin: 0 auto;"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </section>
          </div>
         
          <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer start -->
    <?php include '../footer.php' ?>
    <!-- Footer end -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../plugins/chart.js/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../dist/js/pages/dashboard.js"></script>

  <script>
    const data = {
      labels: [
        'Baju',
        'Celana',
        'Jaket',
        'Sepatu',
        'Topi'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [
          <?php
          $jumlah_baju = mysqli_query($koneksi, "SELECT tb_penjualan.*, tb_produk.id_produk,tb_kategori.nama_kategori FROM tb_penjualan INNER JOIN tb_produk ON tb_penjualan.id_produk=tb_produk.id_produk INNER JOIN tb_kategori ON tb_produk.id_kategori= tb_kategori.id_kategori WHERE nama_kategori = 'Baju';");
          echo mysqli_num_rows($jumlah_baju);
          ?>,
          <?php
          $jumlah_celana = mysqli_query($koneksi, "SELECT tb_penjualan.*, tb_produk.id_produk,tb_kategori.nama_kategori FROM tb_penjualan INNER JOIN tb_produk ON tb_penjualan.id_produk=tb_produk.id_produk INNER JOIN tb_kategori ON tb_produk.id_kategori= tb_kategori.id_kategori WHERE nama_kategori = 'Celana';");
          echo mysqli_num_rows($jumlah_celana);
          ?>,
          <?php
          $jumlah_jaket = mysqli_query($koneksi, "SELECT tb_penjualan.*, tb_produk.id_produk,tb_kategori.nama_kategori FROM tb_penjualan INNER JOIN tb_produk ON tb_penjualan.id_produk=tb_produk.id_produk INNER JOIN tb_kategori ON tb_produk.id_kategori= tb_kategori.id_kategori WHERE nama_kategori = 'Jaket';");
          echo mysqli_num_rows($jumlah_jaket);
          ?>,
          <?php
          $jumlah_sepatu = mysqli_query($koneksi, "SELECT tb_penjualan.*, tb_produk.id_produk,tb_kategori.nama_kategori FROM tb_penjualan INNER JOIN tb_produk ON tb_penjualan.id_produk=tb_produk.id_produk INNER JOIN tb_kategori ON tb_produk.id_kategori= tb_kategori.id_kategori WHERE nama_kategori = 'Sepatu';");
          echo mysqli_num_rows($jumlah_sepatu);
          ?>,
          <?php
          $jumlah_topi = mysqli_query($koneksi, "SELECT tb_penjualan.*, tb_produk.id_produk,tb_kategori.nama_kategori FROM tb_penjualan INNER JOIN tb_produk ON tb_penjualan.id_produk=tb_produk.id_produk INNER JOIN tb_kategori ON tb_produk.id_kategori= tb_kategori.id_kategori WHERE nama_kategori = 'Topi';");
          echo mysqli_num_rows($jumlah_topi);
          ?>
        ],
        backgroundColor: [
          '#B70404',
          '#DB005B',
          '#F79327',
          '#FFE569',
          '#B799FF'
        ],
        hoverOffset: 4
      }]
    };
    const config = {
      type: 'pie',
      data: data,
    };

    const myChart = new Chart(
      document.getElementById('chart1'),
      config
    )
  </script>
  
<script>
  const data2 = {
      labels: [
        'Customer',
        'Administrator'
      ],
      datasets: [{
        label: 'USERS',
        data: [
          <?php
          $jumlah_customer = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE status = 'customer';");
          echo mysqli_num_rows($jumlah_customer);
          ?>,
          <?php
          $jumlah_administrator = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE status = 'administrator';");
          echo mysqli_num_rows($jumlah_administrator);
          ?>
        ],
        backgroundColor: [
          '#1A5D1A',
          '#F1C93B'
        ],
        borderColor: [
          '#4E4FEB',
          '#068FFF'
        ],
        borderWidth: 3
      }]
    };
    const config2 = {
      type: 'bar',
      data: data2,
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,
              max: <?php
                    $total_user = mysqli_query($koneksi, "SELECT * FROM tb_users 
          ");
                    echo mysqli_num_rows($total_user);
                    ?>
            }
          }],
        }
      },
    };

    const myChart2 = new Chart(
      document.getElementById('chart2'),
      config2
    )
    
    </script>
  
  <script>
    const xValues = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const yValues = [<?php
                      $penjualan_januari = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=01;
          ");
                      echo mysqli_num_rows($penjualan_januari);
                      ?>,
      <?php
      $penjualan_februari = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=02;
          ");
      echo mysqli_num_rows($penjualan_februari);
      ?>,
      <?php
      $penjualan_maret = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=03;
          ");
      echo mysqli_num_rows($penjualan_maret);
      ?>,
      <?php
      $penjualan_april = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=04;
          ");
      echo mysqli_num_rows($penjualan_april);
      ?>,
      <?php
      $penjualan_mei = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=05;
          ");
      echo mysqli_num_rows($penjualan_mei);
      ?>,
      <?php
      $penjualan_juni = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=06;
          ");
      echo mysqli_num_rows($penjualan_juni);
      ?>,
      <?php
      $penjualan_juli = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=07;
          ");
      echo mysqli_num_rows($penjualan_juli);
      ?>,
      <?php
      $penjualan_agustus = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=08;
          ");
      echo mysqli_num_rows($penjualan_agustus);
      ?>,
      <?php
      $penjualan_september = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=09;
          ");
      echo mysqli_num_rows($penjualan_september);
      ?>,
      <?php
      $penjualan_oktober = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=10;
          ");
      echo mysqli_num_rows($penjualan_oktober);
      ?>,
      <?php
      $penjualan_november = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=11;
          ");
      echo mysqli_num_rows($penjualan_november);
      ?>,
      <?php
      $penjualan_desember = mysqli_query($koneksi, "SELECT * FROM tb_penjualan where month(created_at_penjualan)=12;
          ");
      echo mysqli_num_rows($penjualan_desember);
      ?>
    ];

    new Chart("chart3", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#F0FF42",
          borderColor: "#645CBB",
          data: yValues
        }]
      },
      options: {
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            ticks: {
              min: 1,
              max: <?php
                    $penjualan_tahunan = mysqli_query($koneksi, "SELECT * FROM tb_penjualan 
          ");
                    echo mysqli_num_rows($penjualan_tahunan);
                    ?>
            }
          }],
        }
      }
    });
  </script>

</body>

</html>