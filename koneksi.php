<?php

$server = "localhost";
$user = "root";
$pwd = "";
$db = "db_809";

$koneksi = mysqli_connect($server, $user, $pwd) or die("gagal terhubung ke server MYSQL");
mysqli_select_db($koneksi, $db) or die("gagal memilih database");
