<?php
include "config.php";

//menangkap data

$nama_hewan = $_POST['nama_hewan'];
$habitat = $_POST['habitat'];

//input data kedalam database
mysqli_query($koneksi, "INSERT INTO tb_hewan values  ('','$nama_hewan','$habitat')");
header("location:index.php");
