<?php
//panggil koneksinya 
include "config.php";

//tangkap data id yang dikirm dari index.php
$id_hewan = $_GET['id'];

//query untuk hapus data 
mysqli_query($koneksi, "DELETE from tb_hewan where id_hewan='$id_hewan'");

header("location:index.php");
