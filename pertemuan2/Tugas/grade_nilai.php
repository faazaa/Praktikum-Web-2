<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<br>
<body>
    <div class="m-4" >
        <h2>Form Nilai Siswa</h2>
        <hr>

        <form>
        <div class="form-group row">
            <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="Nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="DDP">Dasar Dasar Pemograman</option>
                <option value="BDI">Basis Data I</option>
                <option value="WEB 1">Pemrograman Web</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum</label> 
            <div class="col-8">
            <input id="praktikum" name="praktikum" placeholder="Nilai Praktikum" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_GET['submit'])){
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $grade = "";
    $nilai_rata2 = $uts + $uas + $praktikum;
    $rata = round($nilai_rata2 / 3, 2 ) ;


    if($rata >= 0 && $rata <= 35){
        $grade = 'E';
    } elseif ($rata >= 36 && $rata <= 55) {
        $grade = 'D';
    } elseif ($rata >= 56 && $rata <= 69) {
        $grade = 'C';
    } elseif ($rata >= 70 && $rata <= 84) {
        $grade = 'B';
    } elseif ($rata >= 85 && $rata <= 100) {
        $grade = 'A';
    } else {
        $grade = 'I';
    }

    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matkul <br>";
    echo "Nilai UTS : $uts <br>";
    echo "Nilai UAS : $uas <br>";
    echo "Nilai Praktikum' : $praktikum <br>";
    echo "Rata :";
    echo "Grade : $grade";
    } 

?>
