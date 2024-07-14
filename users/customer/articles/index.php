<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';

// Create config connection using config file

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

  <main class="container">
    <?php
    include '../../koneksi.php';
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM tb_artikel ORDER BY id_artikel DESC LIMIT 1
                      ");
    while (
      $result =
      mysqli_fetch_array($query)
    ) {
    ?>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis" style="background-image: url('../../assets/img/<?= $result['gambar_artikel']; ?>'); background-position: center; background-size:cover; background-repeat: no-repeat; ">
        <div class="col-lg-6 px-0">
          <h1 class="display-4 fst-italic">
            <?= substr($result['judul_artikel'], 0, 20) . '...' ?>
          </h1>
          <p class="lead my-3">
            <?= substr($result['isi_artikel'], 0, 100) . '...' ?>
          </p>
          <p class="lead mb-0">
            <a href="../article/index.php?id_artikel=<?= $result['id_artikel'] ?>" class="text-body-emphasis fw-bold">Continue reading...</a>
          </p>
        </div>
      <?php } ?>
      </div>

      <div class="row mb-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT tb_artikel .*, tb_kategori.nama_kategori, tb_penulis.nama_penulis
         FROM tb_artikel 
         INNER JOIN tb_kategori
         ON tb_artikel.id_kategori = tb_kategori.id_kategori
         INNER JOIN tb_penulis
         ON tb_artikel.id_penulis = tb_penulis.id_penulis
         ORDER BY RAND() LIMIT 2
                      ");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary-emphasis"><?= $result['nama_kategori']; ?></strong>
                <h3 class="mb-0"> <?= $result['judul_artikel'];  ?></h3>
                <div class="mb-1 text-body-secondary"><?= date('d-M-Y', strtotime($result['created_at_artikel'])) ?>, <?= $result['nama_penulis']; ?> </div>
                <p class="card-text mb-auto">
                  <?= substr($result['isi_artikel'], 0, 30) . '...' ?>
                </p>
                <a href="../article/index.php?id_artikel=<?= $result['id_artikel'] ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                  Continue reading
                </a>
              </div>

              <img src="../../assets/img/<?= $result['gambar_artikel']; ?>" alt="" style="width: 30%; object-fit: cover; ">
            </div>
          </div>
        <?php } ?>
      </div>

      <div class="row g-5">
        <div class="col-md-8">
          <h3 class="pb-4 mb-4 fst-italic border-bottom"></h3>
          <?php
          include '../../koneksi.php';

          $batas = 2;
          $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
          $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
          $previous = $halaman - 1;
          $next = $halaman + 1;
          $nomor = $halaman_awal + 1;

          $query = mysqli_query($koneksi, "SELECT tb_artikel .*, tb_penulis.nama_penulis
          FROM tb_artikel 
          INNER JOIN tb_penulis
          ON tb_artikel.id_penulis = tb_penulis.id_penulis
          ORDER BY RAND()
                       ");
          $jumlah_data = mysqli_num_rows($query);
          $total_halaman = ceil($jumlah_data / $batas);
          $data_artikel = mysqli_query($koneksi, "SELECT tb_artikel .*, tb_penulis.nama_penulis
          FROM tb_artikel 
          INNER JOIN tb_penulis
          ON tb_artikel.id_penulis = tb_penulis.id_penulis  ORDER BY RAND()  LIMIT $halaman_awal, $batas");
          while (
            $result =
            mysqli_fetch_array($data_artikel)
          ) {
          ?>
            <article class="blog-post">
              <h2 class="display-5 link-body-emphasis mb-1"><?= substr($result['judul_artikel'], 0, 100) . '...' ?></h2>
              <p class="blog-post-meta">
                <?= $result['created_at_artikel'] ?>, <a href="#"><?= $result['nama_penulis'] ?></a>
              </p>

              <p style="text-align: justify;">
                <?= substr($result['isi_artikel'], 0, 1000) . '...' ?>
              </p>
              <hr />
            </article>
          <?php } ?>
          <nav aria-label="Page navigation example">

            <ul class="pagination justify-content-end">

              <li class="page-item <?php if ($halaman == 1) {
                                      echo "disabled";
                                    } ?> ">
                <a class="page-link" <?php if ($halaman > 1) {
                                        echo "href='?halaman=$previous'";
                                      } ?>>Previous</a>
              </li>


              <?php
              for ($x = 1; $x <= $total_halaman; $x++) {
              ?>
                <li class="page-item <?php if ($halaman == $x) {
                                        echo "active";
                                      } ?> " aria-current="page">
                  <a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                </li>
              <?php } ?>


              <li class="page-item <?php if ($halaman == $total_halaman) {
                                      echo "disabled";
                                    } ?>">
                <a class="page-link" <?php if ($halaman < $total_halaman) {
                                        echo "href='?halaman=$next'";
                                      } ?>>Next</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem">
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
              <div class="p-4 mb-3 bg-body-tertiary rounded">
                <h4 class="fst-italic"><?= $result['judul_about'] ?></h4>
                <p class="mb-0"><?= substr($result['isi_about'], 0, 50) . '...' ?> </p>
              </div>
            <?php } ?>
            <div>
              <h4 class="fst-italic">Recent posts</h4>
              <ul class="list-unstyled">
                <?php
                include '../../koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM tb_artikel LIMIT 3
                      ");
                while (
                  $result =
                  mysqli_fetch_array($query)
                ) {
                ?>
                  <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="../article/index.php?id_artikel=<?= $result['id_artikel'] ?>">
                      <img src="../../assets/img/<?= $result['gambar_artikel']; ?>" class="border border-1" style="width: 100px; height: 100px; object-fit: cover ; " alt="">
                      <div class="col-lg-8">
                        <h6 class="mb-0"><?= substr($result['judul_artikel'], 0, 15) . '...' ?></h6>
                        <small class="text-body-secondary"><?= date('d-M-Y', strtotime($result['created_at_artikel'])) ?></small>
                      </div>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
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