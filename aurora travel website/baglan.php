<?php

$host = "localhost";
$user = "root";       
$pass = "";           
$db   = "aurora_travel"; 

$baglanti = mysqli_connect($host, $user, $pass, $db);

if (!$baglanti) {
    die("Veritabanına bağlanırken bir hata oluştu: " . mysqli_connect_error());
}

mysqli_set_charset($baglanti, "utf8");
?>