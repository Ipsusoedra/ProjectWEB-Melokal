<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
include '../../koneksi.php';

$id_produk = $_GET['id_produk'];

$id_user = $_SESSION['id_user'];
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

  <div class="container">
    <form action="proses_beli.php" method="POST" enctype="multipart/form-data">
      <div class="row d-flex justify-content-center ">
        <div class="col-md-5 d-flex flex-column justify-content-center align-items-center ">
          <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
          <img src="../../assets/img/<?= $gambar_produk ?>" class="shadow-sm" alt="" style="height: 300px; width: 300px; object-fit: cover; border-radius: 30px;  ">
          <div class="d-flex justify-content-around gap-5 pt-3 ">
            <img src="../../assets/img/<?= $gambar_kategori ?>" alt="" style="height: 50px; width: 50px; object-fit: cover; border-radius: 10px; ">
            <img src="../../assets/img/<?= $gambar_warna ?>" alt="" style="height: 50px; width: 50px; object-fit: cover; border-radius: 10px; ">
            <img src="../../assets/img/<?= $gambar_merek ?>" alt="" style="height: 50px; width: 50px; object-fit: cover; border-radius: 10px; ">
          </div>
          <div class="d-flex justify-content-center align-items-center gap-5  mt-3">
            <div>
              <h3><b>Rp. <?= number_format($harga_jual) ?>
                </b></h3>
            </div>
            <div>Rp. <?= number_format($diskon) ?>
            </div>
          </div>

          <div class="d-flex">

            <div class=" d-flex p-2 gap-1 justify-content-center align-items-center">
              <div class="bg-primary p-2 text-white rounded-3 ">Stok tersedia</div>
              <div><?= $stok ?></div>
            </div>
          </div>

          <div class="d-flex  mt-3">
            <h2><?= $nama_produk ?></h2>
          </div>

        </div>

        <div class="col-md-5 col-md-5 d-flex flex-column justify-content-center align-items-center">
          <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
          <img src="../../assets/img/<?= isset($_SESSION['gambar_user']) ? $_SESSION['gambar_user'] : 'profile.jpeg'; ?>" alt="" class="rounded-circle" style="height: 100px; width: 100px; object-fit: cover; border-radius: 30px;  ">
          <div class="d-flex mt-3 flex-column align-items-center justify-content-center ">
            <h1><?= isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'GUEST'; ?></h1>
            <h5><?= isset($_SESSION['no_telp']) ? $_SESSION['no_telp'] : 'No Available phone'; ?></h5>
          </div>


          <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_payment ORDER BY id_payment DESC "); ?>
          <div class="d-flex mt-3">
            <select name="id_payment" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
              <option selected disabled>Pilih methode pembayaran</option>
              <?php while ($result = mysqli_fetch_array($query)) { ?>
                <option value="<?= $result['id_payment']; ?>"><?= $result['nama_payment']; ?> - Rp. <?= number_format($result['harga_payment']) ?>
                </option>
              <?php } ?>
            </select>
          </div>


          <?php $query = mysqli_query($koneksi, "SELECT * FROM tb_ekspedisi ORDER BY id_ekspedisi DESC "); ?>
          <div class="d-flex mt-3">
            <select name="id_ekspedisi" class="form-select form-select-sm " aria-label=".form-select-sm example" required>
              <option selected disabled>Pilih methode pengiriman</option>
              <?php while ($result = mysqli_fetch_array($query)) { ?>
                <option value="<?= $result['id_ekspedisi']; ?>"><?= $result['nama_ekspedisi']; ?> - Rp. <?= number_format($result['harga_ekspedisi']) ?>
                </option>
              <?php } ?>
            </select>
          </div>


          <input type="text" name="jumlah_pesan" class="mt-3 text-center " placeholder="Jumlah pesan" required>

          <button type="submit" onclick='return <?php if($stok == 0){
              echo "stokHabis()";
          }else{
              echo "confirmBeli()";
          }
          
          ?>' class=" mt-5 btn btn-primary d-flex justify-content-center align-items-center" style="width: 128px; height: 48px">
<i class=" bi bi-bag pe-2"></i> Checkout        
          </button>
        </div>
      </div>
    </form>
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
  
  function stokHabis() {
      if (confirm('Stok Habis!')) {
            alert('Pembelian gagal!');
            return false;
      } else {
        //action cancelled
        alert('Pembelian gagal!');
        return false;

      }
    }
  
    function confirmBeli() {
      if (confirm('Anda yakin membeli ingin produk?')) {

      } else {
        //action cancelled
        alert('Pembelian gagal!');
        return false;

      }
    }
    
  </script>

</body>

</html>