<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id_produk = $_GET['id_produk'];
//ambil data dari database
$query = mysqli_query($koneksi, "SELECT tb_produk.*,tb_merek.*,tb_kategori.*,tb_warna.*,tb_ukuran.*
FROM tb_produk
INNER JOIN tb_merek
ON tb_produk.id_merek = tb_merek.id_merek
INNER JOIN tb_kategori
ON tb_produk.id_kategori = tb_kategori.id_kategori
INNER JOIN tb_warna
ON tb_produk.id_warna = tb_warna.id_warna
INNER JOIN tb_ukuran
ON tb_produk.id_ukuran = tb_ukuran.id_ukuran

WHERE tb_produk.id_produk='$id_produk'

 ");
$result = mysqli_fetch_array($query);
$nama_produk = $result['nama_produk'];
$deskripsi_produk = $result['deskripsi_produk'];
$stok = $result['stok'];
$harga_beli = $result['harga_beli'];
$harga_jual = $result['harga_jual'];
$diskon = $result['diskon'];
$nama_merek = $result['nama_merek'];
$nama_kategori = $result['nama_kategori'];
$nama_warna = $result['nama_warna'];
$nama_ukuran = $result['nama_ukuran'];
$keterangan = $result['keterangan'];
$gambar_produk = $result['gambar_produk'];
$gambar_merek = $result['gambar_merek'];
$gambar_kategori = $result['gambar_kategori'];
$gambar_warna = $result['gambar_warna'];

//
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products</title>
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
      <form action="../hasilproduk.php" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" name="nama_kategori" placeholder="Search by category..." aria-label="Search" />
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


  <div class="container">
    <div class="row py-5">
      <div class="col-md-6">
        <img src="../../assets/img/<?= $gambar_produk ?>" alt="" style="
              width: 100%;
              height: 500px;
              object-fit: cover;
              border-radius: 16px;
            " />
      </div>
      <div class="col-md-6">
        <div class="col-md-12">
          <h3 class="border-bottom pb-3">
            <?= substr($nama_produk, 0, 100) . '...' ?>
          </h3>
        </div>
        <div class="col-md-12 d-flex justify-content-between flex-wrap gap-5 p-2">
          <div class="col-md-5 text-center">
            <h3>Available Colours</h3>
            <div class="colours">
              <h6><?= $nama_warna ?></h6>
              <img src="../../assets/img/<?= $gambar_warna ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%" />
            </div>
          </div>
          <div class="col-md-5 text-center">
            <h3>Brand</h3>
            <div class="brand">
              <h6><?= $nama_merek ?></h6>
              <img src="../../assets/img/<?= $gambar_merek ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%" />
            </div>
          </div>
          <div class="col-md-5 text-center">
            <h3>Available Sizes</h3>
            <div class="size">
              <h1><?= $nama_ukuran ?></h1>
              <h6><?= $keterangan ?></h6>
            </div>
          </div>
          <div class="col-md-5 text-center">
            <h3>Category</h3>
            <div class="brand">
              <h6><?= $nama_kategori ?></h6>
              <img src="../../assets/img/<?= $gambar_kategori ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%" />
            </div>
          </div>
        </div>
        <div class="col-md-12 bg-secondary text-white p-3" style="border-radius: 16px">
          <h2 class="">Rp. <?= number_format($harga_jual) ?></h2>
          <small>Rp. <?= number_format($diskon) ?></small>
        </div>
        <div class="col-md-6">
          <h4 class="py-3">Stock : <?= $stok ?> </h4>
        </div>

        <form action="addtowishlist.php" class="col-md-6 d-flex gap-3">
          <input type="hidden" name="id_produk" value="<?= $id_produk ?>">

          <input type="hidden" name="nama_produk" value="<?= $gambar_produk ?>">

          <input type="hidden" name="nama_produk" value="<?= $gambar_produk ?>">

          <a type="button" onclick='return checkOut()' href="../checkout/index.php?id_produk=<?= $id_produk ?>" class="btn btn-primary d-flex justify-content-center align-items-center" style="width: 128px; height: 48px">
            <i class="bi bi-cart-plus-fill pe-2"></i>
            Buy
          </a>

        </form>



        <div class="col-md-6 d-flex gap-3">

        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="pb-3 border-bottom">Description</h3>
        <p style="text-align: justify">
          <?= $deskripsi_produk ?>
        </p>
      </div>
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
    
    <script>
    function checkOut() {
      if (confirm('Anda yakin untuk melakukan Checkout?')) {
            
      } else {
        //action cancelled
        alert('Checkout dibatalkan!');
        return false;

      }
    }
  
    </script>
    
</body>

</html>