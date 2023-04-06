<?php 
require_once("../dbkoneksi.php");

$id = $_GET['iddel'];

$sql = "DELETE FROM vendor WHERE id = $id";
$dbh->query($sql);


header('location:index.php');

?>