<?php
require_once '../dbkoneksi.php';

if(isset($_GET["idedit"])){
$idedit = $_GET['idedit'];
$edit = "SELECT * FROM vendor WHERE id = '$idedit' " ;
$sql = $dbh->query($edit);
$row = $sql->fetch();
}
?>

<form method="POST" action="proses.php">
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
        <?php if (isset($_GET["idedit"])) {
          echo '<input id="" name="idedit" type="hidden" class="form-control"
          value="'.$_GET["idedit"].'">';
        }
        ?>
            </div>
        </div>
    </div>
    
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
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
        <label for="kots" class="col-4 col-form-label">Kota</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="kota" name="kota" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
        echo $row["kota"]; } ?>">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="kontak" class="col-4 col-form-label">Kontak</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="kontak" name="kontak" type="text" class="form-control" value="<?php if(isset($_GET["idedit"])){
            echo $row["kontak"]; } ?>">
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