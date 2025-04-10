<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'db_intenvory_silfana';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}