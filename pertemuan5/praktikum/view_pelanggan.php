<?php 
require_once 'dbkoneksi.php';

?>

<?php
include_once 'template/header.php';
include_once 'template/topbar.php';
include_once 'template/sidebar.php';
?>
    <main>
      <div class = 'content-wrapper'>
      <div class="container-fluid px-4">
      <?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<div class="content-area bg-dark">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mb-2">
            <h1 class="m-0">Detail Pelanggan</h1>
          </div><!-- /.col -->
         </div><!-- /.col -->

<table class="table table-striped">
    <tbody>
        <tr>  <td>Kode : </td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama Pelanggan : </td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Jenis Kelamin : </td><td><?=$row['jk']?></td></tr>
        <tr>   <td>Tempat Lahir : </td><td><?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Tanggal Lahir : </td><td><?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Email : </td><td><?=$row['email']?></td></tr>
        <tr>   <td>Kartu : </td><td><?=$row['kartu_id']?></td></tr>
    </tbody>
</table>

      </div>
      </div>
    </main>

                 

    <?php
    include_once 'template/footer.php';
    ?>