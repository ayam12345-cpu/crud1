<?php
//panggil koneksinya 
include "config.php";

//tangkap data id yang dikirm dari index.php
$id_member = $_GET['id'];

//query untuk hapus data 
mysqli_query($koneksi, "DELETE from tb_member_jmk where id_member='$id_member'");

header("location:index.php");
