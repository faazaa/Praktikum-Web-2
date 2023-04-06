<?php
require_once '../dbkoneksi.php';

if(isset($_GET["idedit"])){
$idedit = $_GET['idedit'];
$edit = "SELECT * FROM kartu WHERE id = '$idedit' " ;
$sql = $dbh->query($edit);
$row = $sql->fetch();
}
?>

<form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control"
        value="<?php if (isset($_GET["idedit"])) {echo $row["kode"];} ?>">
        <?php if (isset($_GET["idedit"])) {
          echo '<input id="" name="idedit" type="hidden" class="form-control"
          value="'.$_GET["idedit"].'">';
        }
        ?>
            </div>
        </div>
    </div>
    
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Kartu</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?php if(isset($_GET["idedit"])){
        echo $row["nama"]; } ?>">
      </div>
    </div>
  </div>

    <div class="form-group row">
        <label for="diskon" class="col-4 col-form-label">Diskon</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="diskon" name="diskon" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
        echo $row["diskon"]; } ?>">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="iuran" class="col-4 col-form-label">Iuran</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="iuran" name="iuran" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
            echo $row["iuran"]; } ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php if (isset($_GET["idedit"])) {echo "Update";} else{echo "Simpan";} ?>"/>
        </div>
    </div>
</form>
       <!-- else
echo '<input id="" name="idedit" type="hidden" class="form-control"
value"'.$_GET["idedit"].'">';