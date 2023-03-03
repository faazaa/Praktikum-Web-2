<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Belanja</title>
</head>
<br>
<body class="container" >
    <div class="row" >
       <div class="col-8" >
        <h2>Belanja Online</h2>
        <hr>

       <form method="POST" action="Form_belanja.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                <label for="produk_1" class="custom-control-label">KULKAS</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="Jumlah" name="Jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
       </div>
       <div class="col-4" >
            <ul class="list group" >
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TV; 4,200.00</li>
                <li class="list-group-item">Kulkas: 3,100.00</li>
                <li class="list-group-item">Mesin Cuci: 3,800.00</li>  
                <li class="list-group-item active">Harga dapat berubah setiap saat</li>
            </ul>
       </div>
    </div>
</body>
</html>

<?php
$Price = [
    'TV' => 4200000,
    'KULKAS' => 3100000,
    'MESIN CUCI' => 3800000
];

if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$Jumlah = $_POST['Jumlah'];

echo "Nama Customer: $nama <br>";
echo "Produk: $produk <br>";
echo "Jumlah Pembelian: $Jumlah <br>"; 
echo "harga: ". number_format($Price[$produk] * $Jumlah);
}