<?php 
require_once '../dbkoneksi.php';

?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<div class="content-wrapper bg-info">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mb-2">
            <h1 class="m-0">Detail Kartu</h1>
          </div><!-- /.col -->
         </div><!-- /.col -->

<table class="table table-striped">
    <tbody>
        <tr>  <td>Kode : </td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama : </td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Diskon : </td><td><?=$row['diskon']?></td></tr>
        <tr>   <td>Iuran : </td><td><?=$row['iuran']?></td></tr>
    </tbody>
</table>