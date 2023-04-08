<?php
class Motor {
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc) {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }

  //method untuk menempuh jarak
  public function jalan($jarak) {
    $bensinYangDiperlukan = $jarak / 30;
     // 1 liter bensin untuk 30km

    if ($bensinYangDiperlukan <= $this->bensin) {
      $this->bensin -= $bensinYangDiperlukan;
      echo "<br>Motor $this->merk jalan sejauh $jarak km dan masih memiliki $this->bensin liter bensin.\n";
    } else {
      echo "<br>Bensin tidak cukup untuk menempuh jarak sejauh $jarak km.\n";
    }
  }
}

// membuat object/ instansi
$motor = new Motor("Honda", 10, 100, 150);
$motor->jalan(60); // Motor Honda jalan sejauh 60 km dan masih memiliki 8 liter bensin.
$motor->jalan(500); // Bensin tidak cukup untuk menempuh jarak sejauh 500 km.
