<?php
require_once '../dbkoneksi.php'
?>


<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pembelian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<table>
            <tbody>
        <tr>  <td>Tanggal : </td><td><?=$row['tanggal']?></td></tr>
        <tr>  <td>Nomor : </td><td><?=$row['nomor']?></td></tr>
        <tr>  <td>Produk : </td><td><?=$row['produk_id']?></td></tr>
        <tr>  <td>Jumlah : </td><td><?=$row['jumlah']?></td></tr>
        <tr>  <td>Harga : </td><td><?=$row['harga']?></td></tr>
        <tr>  <td>Vendor Id : </td><td><?=$row['vendor_id']?></td></tr>
            </tbody>
</table>
</div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>