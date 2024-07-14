<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css" />
  <!-- Datatable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    " />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  
</head>
</head>

<body>
  <!-- Navbar start  -->
  <nav class="navbar container-fluid navbar-expand-lg bg-light p-3">
    <?php
    include '../../koneksi.php';
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM tb_about
                      ");
    while (
      $result =
      mysqli_fetch_array($query)
    ) {
    ?>
      <a class="navbar-brand" href="../index.php">
        <img src="../../assets/img/<?= $result['gambar_about']; ?>" alt="Melokal" width="50px" height="50px" />
      </a>
    <?php } ?>
    <button class="navbar-toggler border border-3 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../products/index.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../articles/index.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../gallery/index.php">Gallery</a>
        </li>
      </ul>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" href="#Modal" data-bs-target="#Modal" data-bs-toggle="modal" />
      </form>
      <a href="index.php">
        <i class=" bi bi-bag-fill pe-3"></i>
      </a>
      <div class="dropdown text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../../assets/img/<?= isset($_SESSION['gambar_user']) ? $_SESSION['gambar_user'] : 'profile.jpeg'; ?>" alt="mdo" width="32" height="32" class="rounded-circle" style="object-fit: cover;" />
        </a>
        <ul class="dropdown-menu text-small">
          <li>
            <a class="dropdown-item" href="../../guest/signout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar end  -->

  <div class="container-fluid py-3 ">
    <div class="row ">
      <div class="col-md-12">
        <div class="card-body">
          <table id="about" class="table table-striped table-bordered dt-responsive no-wrap " style="width: 100%">
            <thead>
              <tr>
                <th style="width:3%">#</th>
                <th>Nama Anda</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Diskon Produk</th>
                <th>Nama Ekspedisi</th>
                <th>Biaya Ekspedisi</th>
                <th>Nama Payment</th>
                <th>Nomor Payment</th>
                <th>Biaya Payment</th>
                <th>Jumlah Pesan</th>
                <th>Total Pembayaran</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../../koneksi.php';
              $no = 1;

              $id_user = $_SESSION['id_user'];
              $query = mysqli_query($koneksi, "SELECT tb_penjualan.*, tb_users.*, tb_produk.*, tb_ekspedisi.*, tb_payment.*
                      FROM tb_penjualan
                      INNER JOIN tb_users
                      ON tb_penjualan.id_user=tb_users.id_user
                      INNER JOIN tb_produk
                      ON tb_penjualan.id_produk=tb_produk.id_produk
                      INNER JOIN tb_ekspedisi
                      ON tb_penjualan.id_ekspedisi=tb_ekspedisi.id_ekspedisi
                      INNER JOIN tb_payment
                      ON tb_penjualan.id_payment=tb_payment.id_payment

                      WHERE tb_users.id_user = '$id_user'
                      ");
              $total_pembelian = 0;
              while (
                $result = mysqli_fetch_array($query)
              ) {
                $total_pembelian = ($result['harga_jual'] * $result['jumlah_pesan']) + ($result['harga_ekspedisi']) + ($result['harga_payment']) - ($result['diskon'])
              ?>
                <tr>
                  <td class="text-center" style="width:3%"><?= $no++; ?></td>
                  <td><?= $result['nama_lengkap'] ?></td>
                  <td><?= $result['nama_produk'] ?></td>
                  <td>Rp. <?= number_format($result['harga_jual']) ?></td>
                  <td>Rp. <?= number_format($result['diskon']) ?></td>
                  <td><?= $result['nama_ekspedisi'] ?></td>
                  <td>Rp. <?= number_format($result['harga_ekspedisi']) ?></td>
                  <td><?= $result['nama_payment'] ?></td>
                  <td><?= $result['no_payment'] ?></td>
                  <td>Rp. <?= number_format($result['harga_payment']) ?></td>
                  <td><?= $result['jumlah_pesan'] ?></td>
                  <td>Rp. <?= number_format($total_pembelian) ?></td>
                </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th style="width:3%">#</th>
                <th>Nama Anda</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Diskon Produk</th>
                <th>Jumlah Pesan</th>
                <th>Biaya Ekspedisi</th>
                <th>Nama Payment</th>
                <th>Nomor Payment</th>
                <th>Biaya Payment</th>
                <th>Jumlah Pesan</th>
                <th>Total Pembayaran</th>
              </tr>
            </tfoot>
          </table>

        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>


  <!-- Footer start -->
  <footer class="d-flex flex-wrap container-fluid justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT * FROM tb_about
                      ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <a href="index.php" class="px-3">
          <img src="../../assets/img/<?= $result['gambar_about']; ?>" alt="Bootstrap" width="50px" height="50px" />
        </a>


        <span class="mb-3 mb-md-0 text-body-secondary">&copy; <?= $result['judul_about']; ?> Company, Inc</span>
      <?php } ?>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3">
        <a href="" class="text-secondary"><i class="bi bi-twitter"></i></a>
      </li>
      <li class="ms-3">
        <a href="" class="text-secondary">
          <i class="bi bi-instagram"></i>
        </a>
      </li>
      <li class="ms-3">
        <a href="" class="text-secondary">
          <i class="bi bi-facebook"></i>
        </a>
      </li>
      <li class="ms-3">
        <a href="" class="text-secondary">
          <i class="bi bi-whatsapp"></i>
        </a>
      </li>
    </ul>
  </footer>
  <!-- Footer end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    "></script>



  <!-- jQuery -->
  <script src="../../../plugins/jquery/jquery.min.js"></script>

  <!-- Datatable JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>


  <!-- DataTables  & Plugins -->
  <script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../../plugins/jszip/jszip.min.js"></script>
  <script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#about").DataTable({
        responsive: true,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#about_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>