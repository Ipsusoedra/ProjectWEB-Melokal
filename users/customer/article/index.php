<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
include '../../koneksi.php';

$id_artikel = $_GET['id_artikel'];

$query = mysqli_query($koneksi, "SELECT tb_artikel .*, tb_kategori.nama_kategori, tb_penulis.nama_penulis, tb_merek.nama_merek
         FROM tb_artikel 
         INNER JOIN tb_kategori
         ON tb_artikel.id_kategori = tb_kategori.id_kategori
         INNER JOIN tb_merek
         ON tb_artikel.id_merek = tb_merek.id_merek
         INNER JOIN tb_penulis
         ON tb_artikel.id_penulis = tb_penulis.id_penulis
         
         WHERE id_artikel = '$id_artikel'");

$result = mysqli_fetch_array($query);

$gambar_artikel = $result['gambar_artikel'];
$judul_artikel = $result['judul_artikel'];
$isi_artikel = $result['isi_artikel'];
$nama_kategori = $result['nama_kategori'];
$nama_penulis = $result['nama_penulis'];
$nama_merek = $result['nama_merek'];
$created_at_artikel = $result['created_at_artikel'];

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../../assets/js/color-modes.js"></script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.112.5" />
  <title>Melokal</title>

  <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet" />
</head>

<body>
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
      <a class="navbar-brand" href="../index.php">
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
          <a class="nav-link active" href="../articles/index.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../gallery/index.php">Gallery</a>
        </li>
      </ul>
      <form action="../articles/hasilartikel.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
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

  <main class="container">
    <img src="../../assets/img/<?= $gambar_artikel; ?>" alt="" style="width: 100%; height: 300px ; object-fit: cover; " />
    <h1 class="display-4 fst-italic"><?= $judul_artikel ?>
    </h1>
    <p class="blog-post-meta"><?= date('d-M-Y', strtotime($created_at_artikel)) ?>
      by <a href="#"><?= $nama_penulis; ?></a></p>
    <p style="text-align:justify;">
      <?= $isi_artikel ?>
    </p>

    <div class="row">
      <div class="row">
        <h4 class="fst-italic border-bottom p-3">Other posts</h4>

      </div>
      <div class="row d-flex ">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_artikel LIMIT 6
                      ");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <div class="col-md-6">
            <div class="posts d-flex flex-wrap gap-2 pt-3">
              <a href="index.php?id_artikel=<?= $result['id_artikel'] ?>" class="text-decoration-none link-body-emphasis">
                <div class="post p-3 col-md-4 d-flex align-items-center gap-2" >
                  <img src="../../assets/img/<?= $result['gambar_artikel']; ?>" alt="" height="200px" width="200px" style="object-fit: cover;" />
                  <div class="text-post">
                    <h6 class="mb-0"><?= substr($result['isi_artikel'], 0, 100) . '...' ?>
                    </h6>
                    <small class="text-body-secondary"><?= date('d-M-Y', strtotime($result['created_at_artikel'])) ?>
                    </small>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>

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

  <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>