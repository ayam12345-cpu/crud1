<?php
include "config.php";

//menangkap data
$id_member = $_POST['id_member'];
$nama_member = $_POST['nama_member'];
$email = $_POST['email'];
$tgl_bergabumg = $_POST['tgl_bergabung'];



//input data kedalam database
mysqli_query($koneksi, "UPDATE tb_member_jmk SET nama_member='$nama_member', email='$email', tgl_bergabung ='$tgl_bergabung' where id_member='$id_member'");

header("location:index.php");
