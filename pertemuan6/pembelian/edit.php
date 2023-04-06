<?php
require_once '../dbkoneksi.php';

if(isset($_GET["idedit"])){
$idedit = $_GET['idedit'];
$edit = "SELECT * FROM pembelian WHERE id = '$idedit' " ;
$sql = $dbh->query($edit);
$row = $sql->fetch();
}
?>
<div class="content-wrapper bg-info">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mb-2">
            <h1 class="m-0">Edit</h1>
          </div><!-- /.col -->
         </div><!-- /.col -->

<form method="POST" action="proses.php">
<div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Tanggal</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-anchor"></i>
                </div>
            </div>
            <input id="tanggal" name="tanggal" type="date" class="form-control"
    value="<?php if (isset($_GET["idedit"])) {echo $row["tanggal"];} ?>">
    <?php if (isset($_GET["idedit"])){
    echo '<input id="" name="idedit" type="hidden" class="form-control"
    value="'.$_GET["idedit"].'">';
}
?>
        </div>
    </div>
</div>

<div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-anchor"></i>
                </div>
            </div>
            <input id="nomor" name="nomor" type="text" class="form-control"
    value="<?php if (isset($_GET["idedit"])) {echo $row["nomor"];} ?>">
    <?php if (isset($_GET["idedit"]))
?>
</div>
</div>
</div>
    <div class="form-group row">
    <label for="produk" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" type="text" class="form-control" 
        value="<?php if(isset($_GET["idedit"])){
        echo $row["produk_id"]; } ?>">
      </div>
    </div>
  </div>

    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="jumlah" name="jumlah" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
        echo $row["jumlah"]; } ?>">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="harga" name="harga" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
            echo $row["harga"]; } ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="vendor" class="col-4 col-form-label">Vendor Id</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="vendor_id" name="vendor_id" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
            echo $row["vendor_id"]; } ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php if (isset($_GET["idedit"])) {echo "Update";} else{echo "Simpan";} ?>"/>
        </div>
    </div>
</form>