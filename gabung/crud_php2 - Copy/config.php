<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "crud_php2";

//membuat koneksi
$koneksi = mysqli_connect($localhost, $username, $password, $database);

//chek koneksi
if (!$koneksi) {
     die("koneksi gagal : " . mysqli_connect_error());
}
