<?php 
require_once '../dbkoneksi.php';
?>
<?php 
    $_tanggal = $_POST['tanggal'];
    $_nomor = $_POST['nomor'];
    $_produk = $_POST['produk_id'];
    $_jumlah = $_POST['jumlah'];
    $_harga = $_POST['harga'];
    $_vendor = $_POST['vendor_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal;
   $ar_data[]=$_nomor; // ? 1
   $ar_data[]=$_produk; // ? 2
   $ar_data[]=$_jumlah;// 3
   $ar_data[]=$_harga;
   $ar_data[]=$_vendor;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pembelian (tanggal,nomor,produk_id,jumlah,harga,vendor_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pembelian SET tanggal=?, nomor=?,produk_id=?,jumlah=?,
    harga=?,vendor_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $is_success = $st->execute($ar_data);

    if($is_success){
        header('location:index.php');
    }
   } 

   echo 'Proses Gagal!';
?>