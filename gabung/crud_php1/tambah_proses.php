<?php
include "config.php";

//menangkap data
$nama_member = $_POST['nama_member'];
$email = $_POST['email'];
$tgl_bergabung = $_POST['tgl_bergabung'];

//input data kedalam database
mysqli_query($koneksi, "INSERT into tb_member_jmk values ('','$nama_member','$email','$tgl_bergabung ')");
header("location:index.php");
