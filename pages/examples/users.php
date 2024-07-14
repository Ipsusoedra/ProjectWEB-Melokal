<?php
$page = 'users';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | Users</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include '../../navbar.php' ?>
    <!-- /.navbar -->

    <!-- Sidebar start -->
    <?php include '../../sidebar.php' ?>
    <!-- Sidebar end -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body pb-0">
            <div class="container-fluid mb-4">
              <h2 class="text-center display-4">Search</h2>
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <form action="simple-results.html">
                    <div class="input-group">
                      <input type="search" class="form-control form-control-lg" placeholder="Type username here" />
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0"></div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                        <p class="text-muted text-sm">
                          <b>Username: </b> Web Designer / UX / Graphic Artist
                          / Coffee Lover
                        </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                          <li class="small">
                            <span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                            Address: Demo Street 123, Demo City 04312, NJ
                          </li>
                          <li class="small">
                            <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                            Phone #: + 800 - 12 12 23 52
                          </li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid" />
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      <a href="#" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i> Chat
                      </a>
                      <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> View Profile
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash"> </i>
                        Delete
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
              <ul class="pagination justify-content-center m-0">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include '../../footer.php' ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>