<?php
include 'koneksi.php';
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_about
                      ");
while (
    $result =
    mysqli_fetch_array($query)
) {
?>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 0.1
        </div>
        <strong>Copyright &copy; 2023 <a href="#"><?= $result['judul_about']; ?></a>.</strong> All rights reserved.
    </footer>
<?php } ?>