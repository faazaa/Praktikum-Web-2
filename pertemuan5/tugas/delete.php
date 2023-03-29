<?php
require_once("dbkoneksi.php");
if (isset($_GET["iddel"])) {
    $iddel = $_GET["iddel"];
    $query = "DELETE FROM pelanggan WHERE id = '$iddel'";
    $delete = $dbh->query($query);
    echo '<meta http-equiv="refresh" content="0; url=list_pelanggan.php">';
}
?>


<?php
include_once 'template/header.php';
include_once 'template/topbar.php';
include_once 'template/sidebar.php';
?>
    <main>
      <div class = 'content-wrapper'>
      <div class="container-fluid px-4">
          <h1 class="mt-4">Selamat Datang di Halaman Admin</h1>
      </div>
      </div>
    </main>

<?php
include_once 'template/footer.php';
?>