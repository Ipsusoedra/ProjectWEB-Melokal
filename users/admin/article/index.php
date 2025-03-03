<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
include '../../koneksi.php';

// Create config connection using config file

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Meloka</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css" />
  <!-- Datatable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css" />
</head>
<!-- Theme style -->
<link rel="stylesheet" href="../../../dist/css/adminlte.min.css" />
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
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                  </h3>
                  <div class="card-tools">
                    <a href="add.php" type="button" class="btn bg-primary btn-tool">
                      <i class="fas fa-add"></i> Add
                    </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="about" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%">
                    <thead>
                      <tr>
                        <th style="width:3%">#</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Nama Kategori</th>
                        <th>Nama Penulis</th>
                        <th>Nama Merek</th>
                        <th>Created at</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../../koneksi.php';
                      $no = 1;
                      $query = mysqli_query($koneksi, "SELECT tb_artikel.*,
                      tb_kategori.nama_kategori, tb_penulis.nama_penulis,tb_merek.nama_merek FROM tb_artikel
                      INNER JOIN tb_kategori ON tb_artikel.id_kategori = tb_kategori.id_kategori
                      INNER JOIN tb_penulis ON tb_artikel.id_penulis = tb_penulis.id_penulis
                      INNER JOIN tb_merek ON tb_artikel.id_merek = tb_merek.id_merek
                      ORDER BY id_artikel DESC
                      ");
                      while (
                        $result =
                        mysqli_fetch_array($query)
                      ) {
                      ?>
                        <tr>
                          <td class="text-center" style="width:3%"><?= $no++; ?></td>
                          <td class="text-center">
                            <img alt="Avatar" class="table-avatar rounded-circle img-bordered " style="object-fit: cover;" src="../../assets/img/<?= $result['gambar_artikel']; ?>" width="50px" height="50px">
                          </td>
                          <td><?= $result['judul_artikel'] ?></td>
                          <td><?= substr($result['isi_artikel'], 0, 70) . '...' ?></td>
                          <td><?= $result['nama_kategori'] ?></td>
                          <td><?= $result['nama_penulis'] ?></td>
                          <td><?= $result['nama_merek'] ?></td>
                          <td><?= $result['created_at_artikel'] ?></td>
                          <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal<?= $result['id_artikel']; ?>" data-whatever="@mdo" href="#exampleModal<?= $result['id_artikel']; ?>">
                              <i class="fas fa-eye">
                              </i>
                              View
                            </a>
                            <a class="btn btn-success btn-sm" href="edit.php?id_artikel=<?= $result['id_artikel']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="proses_hapus.php?id_artikel=<?= $result['id_artikel']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                            </a>
                          </td>
                        </tr>

                        <div class="modal fade" id="exampleModal<?= $result['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content bg-primary ">
                              <div class="modal-header ">
                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="proses_edit.php" method="POST" enctype="multipart/form-data"">
                                <div class=" card-body">
                                  <div class="form-group">
                                    <input type="hidden" name="id_artikel" value="<?= $result['id_artikel']; ?>">
                                  </div>
                                  <center><img src="../../assets/img/<?= $result['gambar_artikel']; ?>" style="object-fit: cover;" alt="" class="rounded-circle" width="200px" height="200px">
                                    <h3 class="mt-3"><?= $result['judul_artikel']; ?></h3>
                                  </center>

                                  <div class="date float-right "><?= $result['created_at_artikel']; ?></div>
                                  <div class="form-group mt-3">
                                    <textarea id="isi" name="isi_artikel" class="form-control" rows="4" required disabled><?= $result['isi_artikel']; ?></textarea>
                                  </div>
                                  <div class="form-group mt-3 d-flex justify-content-around ">
                                    <button type="button" class="btn btn-info"><?= $result['nama_kategori']; ?></button>
                                    <button type="button" class="btn btn-light"><?= $result['nama_penulis']; ?></button>
                                    <button type="button" class="btn btn-dark"><?= $result['nama_merek']; ?></button>
                                  </div>

                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th style="width:3%">#</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Nama Kategori</th>
                        <th>Nama Penulis</th>
                        <th>Nama Merek</th>
                        <th>Created at</th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer start -->
    <?php include '../../footer.php' ?>
    <!-- Footer end -->

    <!-- Control Sidebar -->
    <aside class=" control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Datatable JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(document).ready(function() {
      $("#about").DataTable({
        responsive: true
      });
    });
  </script>
</body>

</html>