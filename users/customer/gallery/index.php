<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include '../../session.php';
//load koneksi database
include '../../koneksi.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melokal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    " />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="custom.css">
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
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../products/index.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../articles/index.php">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Gallery</a>
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
                    <img src="../../assets/img/<?= isset($_SESSION['gambar_user']) ? $_SESSION['gambar_user'] : 'profile.jpeg'; ?>" alt="mdo" width="32" height="32" class="rounded-circle" style="object-fit: cover;"/>
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


    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
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
                    <h2 class="text-center"> <?= $result['judul_about'] ?> Product Gallery</h2>
                    <p class="text-center"><?= substr($result['isi_about'], 0, 100) . '...' ?>
                    </p>
                <?php } ?>
            </div>
            <div class="row photos d-flex justify-content-center ">
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM tb_produk ORDER BY RAND() LIMIT 12
                      ");

                while (
                    $result = mysqli_fetch_array($query)
                ) {
                ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 item d-flex justify-content-center "><a href="../../assets/img/<?= $result['gambar_produk'] ?>" data-lightbox="photos"><img class="img-fluid shadow rounded rounded-2  " src="../../assets/img/<?= $result['gambar_produk'] ?>" style="width: 200px ; height: 200px; object-fit: cover;"></a></div>
                <?php } ?>
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


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>