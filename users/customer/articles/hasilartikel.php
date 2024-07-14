<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';

// Create config connection using config file

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Melokal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    " />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

</head>

<body>
  <!-- Navbar start  -->
  <nav class="navbar container navbar-expand-lg bg-light p-3">
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
      <a class="navbar-brand" href="index.php">
        <img src="../../assets/img/<?= $result['gambar_about']; ?>" alt="Melokal" width="50px" height="50px" />
      </a>
    <?php } ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../products/index.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../gallery/index.php">Gallery</a>
        </li>
      </ul>
      <form action="hasilartikel.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search by brand..." aria-label="Search" name="nama_merek" />
      </form>
      <a href="../buy/index.php">
        <i class=" bi bi-bag pe-3"></i>
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

  <div class="container p-3 py-5 my-5">
    <?php
    include '../../koneksi.php';
    $nama_merek = $_GET['nama_merek'];
    $query = mysqli_query($koneksi, "SELECT tb_artikel.*,tb_merek.* 
    FROM tb_artikel
    INNER JOIN tb_merek
    ON tb_artikel.id_merek = tb_merek.id_merek
    WHERE nama_merek  LIKE '%$nama_merek%' ORDER BY id_artikel DESC
                      ");
    while (
      $result =
      mysqli_fetch_array($query)
    ) {
    ?>
      <div class="row row-berita position-relative">
        <div class="articles-img col-md-6">
          <img src="../../assets/img/<?= $result['gambar_artikel']; ?>" alt="" class="w-100" style="height: 250px; object-fit: cover; border-radius: 50px 0 0 50px;" />
        </div>
        <div class="articles-text d-flex flex-column col-md-6 border border-1 rounded-3 position-relative ">
          <h3><?= substr($result['judul_artikel'], 0, 40) . '...' ?></h3>
          <p class="articles-p  ">
            <?= substr($result['isi_artikel'], 0, 500) . '...' ?>
            <a href="../article/index.php?id_artikel=<?= $result['id_artikel'] ?>" class="text-decoration-none"><b>Selanjutnya</b></a>
          </p>

          <small class="text-secondary d-flex justify-content-end position-absolute " style="right: 10px; bottom: 10px;"><?= date('d-M-Y', strtotime($result['created_at_artikel'])) ?></small>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Footer start -->
  <footer class="d-flex flex-wrap container justify-content-between align-items-center py-3 my-4 border-top">
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
</body>

</html>