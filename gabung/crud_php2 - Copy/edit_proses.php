<?php
include "config.php";

//menangkap data
$id_hewan = $_POST['id_hewan'];
$nama_hewan = $_POST['nama_hewan'];
$habitat = $_POST['habitat'];




//input data kedalam database
mysqli_query($koneksi, "UPDATE tb_hewan SET nama_hewan='$nama_hewan', habitat='$habitat'  where id_hewan='$id_hewan'");

header("location:index.php");
