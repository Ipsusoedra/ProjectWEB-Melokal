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
          <a class="nav-link active" href="index.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../articles/index.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../gallery/index.php">Gallery</a>
        </li>
      </ul>
      <form action="../hasilproduk.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search by category..." aria-label="Search" name="nama_kategori" />
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

  <div class="container p-3">
    <div class="row d-flex justify-content-center">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <?php
          include '../../koneksi.php';
          $no = 1;
          $query = mysqli_query($koneksi, "SELECT * FROM tb_produk ORDER BY RAND() LIMIT 3
                      ");
          while (
            $result =
            mysqli_fetch_array($query)
          ) {
          ?>
            <div class="carousel-item active">
              <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="d-block w-100 border border-3 " alt="..." style="height: 300px; object-fit: cover; border-radius: 50px;" />
              <div class="carousel-caption d-none d-md-block">
                <h5 class="bg-primary"><?= $result['nama_produk']; ?></h5>
                <p>
                  <?= substr($result['deskripsi_produk'], 0, 50) . '...' ?>
                </p>
              </div>
            </div>
          <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div class="container p-3">
    <div class="row p-3 bordeer-bottom d-flex justify-content-center ">
      <h5 class="text-start pb-3 border-bottom">Category</h5>
      <div class="col-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE nama_kategori ='Baju'");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <a class="navbar-brand d-flex align-items-center flex-column gap-3" href="#baju">
            <img src="../../assets/img/<?= $result['gambar_kategori']; ?>" alt="Bootstrap" width="50%" />
            <h5><?= $result['nama_kategori']; ?></h5>
          </a>
        <?php } ?>
      </div>
      <div class="col-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE nama_kategori ='Celana'");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <a class="navbar-brand d-flex align-items-center flex-column gap-3" href="#celana">
            <img src="../../assets/img/<?= $result['gambar_kategori']; ?>" alt="Bootstrap" width="50%" />
            <h5><?= $result['nama_kategori']; ?></h5>
          </a>
        <?php } ?>
      </div>
      <div class="col-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE nama_kategori ='Jaket'");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <a class="navbar-brand d-flex align-items-center flex-column gap-3" href="#jaket">
            <img src="../../assets/img/<?= $result['gambar_kategori']; ?>" alt="Bootstrap" width="50%" />
            <h5><?= $result['nama_kategori']; ?></h5>
          </a>
        <?php } ?>
      </div>
      <div class="col-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE nama_kategori ='Sepatu'");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <a class="navbar-brand d-flex align-items-center flex-column gap-3" href="#sepatu">
            <img src="../../assets/img/<?= $result['gambar_kategori']; ?>" alt="Bootstrap" width="50%" />
            <h5><?= $result['nama_kategori']; ?></h5>
          </a>
        <?php } ?>
      </div>
      <div class="col-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE nama_kategori ='Topi'");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <a class="navbar-brand d-flex align-items-center flex-column gap-3" href="#topi">
            <img src="../../assets/img/<?= $result['gambar_kategori']; ?>" alt="Bootstrap" width="50%" />
            <h5><?= $result['nama_kategori']; ?></h5>
          </a>
        <?php } ?>
      </div>
    </div>

    <div class="row py-3 mb-5 bordeer-bottom ">
      <h5 class="text-start pb-3 border-bottom">Diskon</h5>
      <div class="col-2">
        <?php
        include '../../koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE diskon > 0 ORDER BY RAND() LIMIT 1
                      ");
        while (
          $result =
          mysqli_fetch_array($query)
        ) {
        ?>
          <a class="navbar-brand d-flex align-items-center flex-column gap-3" href="#diskon">
            <img src="../../assets/img/<?= $result['gambar_produk']; ?>" alt="Bootstrap" width="50%" />
            <h5>Diskon</h5>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="container pt-5">
    <div class="row my-3 d-flex justify-content-center flex-wrap gap-3" id="diskon">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE diskon > 0 ORDER BY id_produk LIMIT 3
                      ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <div class="card p-0 mb-5 position-relative" style="width: 18rem">
          <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="card-img-top" alt="..." style="object-fit: cover" width="200px" height="200px" />
          <div class="card-body">
            <h5 class="card-title">Rp. <?= number_format($result['harga_jual']) ?></h5>
            <p class="card-text">
              <?= substr($result['deskripsi_produk'], 0, 20) . '...' ?>
            </p>
            <div class="action text-end">
              <a href="../product/index.php?id_produk=<?= $result['id_produk']; ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i></a>
            </div>
          </div>
          <div class="stok position-absolute" style="left: 5px; bottom: 5px">
            <h6 class="rounded-3 p-2 text-secondary">Stok : <?= $result['stok'] ?></h6>
          </div>
          <div class="stok position-absolute" style="right: 5px; top: -20px">
            <h6 class="bg-primary rounded-3 p-2 text-white">
              Diskon Rp. <?= number_format($result['diskon']) ?>
            </h6>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row my-3 d-flex justify-content-center flex-wrap gap-3" id="baju">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT tb_produk.*, tb_kategori.nama_kategori
    FROM tb_produk
    INNER JOIN tb_kategori
    ON tb_produk.id_kategori = tb_kategori.id_kategori
    WHERE tb_kategori.nama_kategori = 'Baju'
    ORDER BY id_produk LIMIT 3
                      ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <div class="card p-0 mb-5 position-relative" style="width: 18rem">
          <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="card-img-top" alt="..." style="object-fit: cover" width="200px" height="200px" />
          <div class="card-body">
            <h5 class="card-title">Rp. <?= number_format($result['harga_jual']) ?></h5>
            <p class="card-text">
              <?= substr($result['deskripsi_produk'], 0, 20) . '...' ?>
            </p>
            <div class="action text-end">
              <a href="../product/index.php?id_produk=<?= $result['id_produk']; ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i></a>
            </div>
          </div>
          <div class="stok position-absolute" style="left: 5px; bottom: 5px">
            <h6 class="rounded-3 p-2 text-secondary">Stok : <?= $result['stok'] ?></h6>
          </div>
          <div class="stok position-absolute <?php if ($result['diskon'] == 0) {
                                                echo "d-none";
                                              } ?>" style="right: 5px; top: -20px">
            <h6 class="bg-primary rounded-3 p-2 text-white">
              Diskon Rp. <?= number_format($result['diskon']) ?>
            </h6>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row my-3 d-flex justify-content-center flex-wrap gap-3" id="celana">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT tb_produk.*, tb_kategori.nama_kategori
    FROM tb_produk
    INNER JOIN tb_kategori
    ON tb_produk.id_kategori = tb_kategori.id_kategori
    WHERE tb_kategori.nama_kategori = 'Celana'
    ORDER BY id_produk LIMIT 3        ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <div class="card p-0 mb-5 position-relative" style="width: 18rem">
          <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="card-img-top" alt="..." style="object-fit: cover" width="200px" height="200px" />
          <div class="card-body">
            <h5 class="card-title">Rp. <?= number_format($result['harga_jual']) ?></h5>
            <p class="card-text">
              <?= substr($result['deskripsi_produk'], 0, 20) . '...' ?>
            </p>
            <div class="action text-end">
              <a href="../product/index.php?id_produk=<?= $result['id_produk']; ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i></a>
            </div>
          </div>
          <div class="stok position-absolute" style="left: 5px; bottom: 5px">
            <h6 class="rounded-3 p-2 text-secondary">Stok : <?= $result['stok'] ?></h6>
          </div>
          <div class="stok position-absolute <?php if ($result['diskon'] == 0) {
                                                echo "d-none";
                                              } ?>" style="right: 5px; top: -20px">
            <h6 class="bg-primary rounded-3 p-2 text-white">
              Diskon Rp. <?= number_format($result['diskon']) ?>
            </h6>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row my-3 d-flex justify-content-center flex-wrap gap-3" id="sepatu">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT tb_produk.*, tb_kategori.nama_kategori
    FROM tb_produk
    INNER JOIN tb_kategori
    ON tb_produk.id_kategori = tb_kategori.id_kategori
    WHERE tb_kategori.nama_kategori = 'Sepatu'
    ORDER BY id_produk LIMIT 3        ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <div class="card p-0 mb-5 position-relative" style="width: 18rem">
          <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="card-img-top" alt="..." style="object-fit: cover" width="200px" height="200px" />
          <div class="card-body">
            <h5 class="card-title">Rp. <?= number_format($result['harga_jual']) ?></h5>
            <p class="card-text">
              <?= substr($result['deskripsi_produk'], 0, 20) . '...' ?>
            </p>
            <div class="action text-end">
              <a href="../product/index.php?id_produk=<?= $result['id_produk']; ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i></a>
            </div>
          </div>
          <div class="stok position-absolute" style="left: 5px; bottom: 5px">
            <h6 class="rounded-3 p-2 text-secondary">Stok : <?= $result['stok'] ?></h6>
          </div>
          <div class="stok position-absolute <?php if ($result['diskon'] == 0) {
                                                echo "d-none";
                                              } ?>" style="right: 5px; top: -20px">
            <h6 class="bg-primary rounded-3 p-2 text-white">
              Diskon Rp. <?= number_format($result['diskon']) ?>
            </h6>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row my-3 d-flex justify-content-center flex-wrap gap-3" id="jaket">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT tb_produk.*, tb_kategori.nama_kategori
    FROM tb_produk
    INNER JOIN tb_kategori
    ON tb_produk.id_kategori = tb_kategori.id_kategori
    WHERE tb_kategori.nama_kategori = 'Jaket'
    ORDER BY id_produk LIMIT 3        ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <div class="card p-0 mb-5 position-relative" style="width: 18rem">
          <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="card-img-top" alt="..." style="object-fit: cover" width="200px" height="200px" />
          <div class="card-body">
            <h5 class="card-title">Rp. <?= number_format($result['harga_jual']) ?></h5>
            <p class="card-text">
              <?= substr($result['deskripsi_produk'], 0, 20) . '...' ?>
            </p>
            <div class="action text-end">
              <a href="../product/index.php?id_produk=<?= $result['id_produk']; ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i></a>
            </div>
          </div>
          <div class="stok position-absolute" style="left: 5px; bottom: 5px">
            <h6 class="rounded-3 p-2 text-secondary">Stok : <?= $result['stok'] ?></h6>
          </div>
          <div class="stok position-absolute <?php if ($result['diskon'] == 0) {
                                                echo "d-none";
                                              } ?>" style="right: 5px; top: -20px">
            <h6 class="bg-primary rounded-3 p-2 text-white">
              Diskon Rp. <?= number_format($result['diskon']) ?>
            </h6>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row my-3 d-flex justify-content-center flex-wrap gap-3" id="topi">
      <?php
      include '../../koneksi.php';
      $no = 1;
      $query = mysqli_query($koneksi, "SELECT tb_produk.*, tb_kategori.nama_kategori
    FROM tb_produk
    INNER JOIN tb_kategori
    ON tb_produk.id_kategori = tb_kategori.id_kategori
    WHERE tb_kategori.nama_kategori = 'Topi'
    ORDER BY id_produk LIMIT 3        ");
      while (
        $result =
        mysqli_fetch_array($query)
      ) {
      ?>
        <div class="card p-0 mb-5 position-relative" style="width: 18rem">
          <img src="../../assets/img/<?= $result['gambar_produk']; ?>" class="card-img-top" alt="..." style="object-fit: cover" width="200px" height="200px" />
          <div class="card-body">
            <h5 class="card-title">Rp. <?= number_format($result['harga_jual']) ?></h5>
            <p class="card-text">
              <?= substr($result['deskripsi_produk'], 0, 20) . '...' ?>
            </p>
            <div class="action text-end">
              <a href="../product/index.php?id_produk=<?= $result['id_produk']; ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i></a>
            </div>
          </div>
          <div class="stok position-absolute" style="left: 5px; bottom: 5px">
            <h6 class="rounded-3 p-2 text-secondary">Stok : <?= $result['stok'] ?></h6>
          </div>
          <div class="stok position-absolute <?php if ($result['diskon'] == 0) {
                                                echo "d-none";
                                              } ?>" style="right: 5px; top: -20px">
            <h6 class="bg-primary rounded-3 p-2 text-white">
              Diskon Rp. <?= number_format($result['diskon']) ?>
            </h6>
          </div>
        </div>
      <?php } ?>
    </div>
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