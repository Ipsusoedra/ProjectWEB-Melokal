<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MELOKAL</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    " />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Gallery</a>
        </li>
      </ul>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" href="#Modal" data-bs-target="#Modal" data-bs-toggle="modal" />
      </form>
      <a href="#Modal" data-bs-target="#Modal" data-bs-toggle="modal">
        <i class=" bi bi-bag pe-3"></i>
      </a>
      <div class="dropdown-center">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../../assets/img/profile.jpeg" alt="mdo" width="32" height="32" class="rounded-circle" />
        </a>
        <ul class="dropdown-menu text-small text-start ">
          <li>
            <a class="dropdown-item" href="../login/index.php">Login</a>
          </li>
          <li>
            <a class="dropdown-item" href="index2.php">Signup as Administrator</a>
          </li>
          <li>
            <a class="dropdown-item" href="index.php">Signup as Customer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar end  -->

  <!-- Modal -->
  <div class="modal fade" id="Modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
      <div class="modal-content" style="width: 300px; height:200px">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          You have no account ? Click Register
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-primary" href="index.php">Register</a>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="container">
    <div class="row d-flex justify-content-between ">
      <div class="col-md-5 d-flex flex-column justify-content-center align-items-center ">
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
          <img src="../../assets/img/<?= $result['gambar_about']; ?>" alt="" style="width: 300px; height: 300px; ">
          <div class="text shadow p-3 rounded-2 ">
            <h1><?= $result['judul_about']; ?></h1>
            <h5><?= $result['isi_about']; ?></h5>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-5 border border-2 rounded-5 d-flex flex-column justify-content-center align-items-center p-3 ">
        <center>
          <img src="../../assets/img/profile.jpeg" alt="" class="mb-3 rounded-circle" style="width: 100px; height: 100px;">
        </center>
        <form action="proses_register.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="id_user" value="<?= $id_user ?>">
          </div>

          <div class="form-floating mb-3">
            <input value="customer" name="status" type="hidden" required class="form-control" id="col_status" placeholder="status">
          </div>

          <div class="input-group input-group-sm mb-3">
            <input type="file" required class="form-control" id="gambar" name="gambar_user">
            <label class="input-group-text" for="gambar">Upload</label>
          </div>

          <div class="form-floating mb-3 input-group-sm">
            <input name="username" type="text" required class="form-control" id="username" placeholder="Username">
            <label for="username">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input name="nama_lengkap" type="text" required class="form-control" id="nama_lengkap" placeholder="Fullname">
            <label for="nama_lengkap">Fullname</label>
          </div>

          <div class="form-floating mb-3">
            <input name="no_telp" type="text" required class="form-control" id="no_telp" placeholder="No Telp">
            <label for="no_telp">No Telp</label>
          </div>

          <div class="form-floating mb-3">
            <input name="alamat" type="text" required class="form-control" id="alamat" placeholder="Alamat">
            <label for="alamat">Address</label>
          </div>

          <div class="form-floating mb-3">
            <input name="password" type="password" required class="form-control" id="col_password" placeholder="Password">
            <label for="password">Password</label>
          </div>

          <div class="form-floating mb-3">
            <input name="confirm_password" type="password" required class="form-control" id="confirm_password" placeholder="Password Confirmation">
            <label for="confirm_password">Password Confirmation</label>
          </div>

          <button type="submit" name="submit" class="btn btn-primary mb-3 px-5 ">Signup</button>
        </form>
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
        <a href="../index.php" class="px-3">
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