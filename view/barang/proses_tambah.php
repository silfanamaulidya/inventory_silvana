<?php
include '../../config/koneksi.php';

$id_barang =$_POST['id_barang'];
$nama_barang =$_POST['nama_barang'];
$id_jenis =$_POST['id_jenis'];
$harga =$_POST['harga'];
$stok =$_POST['stok'];

$sql = "INSERT INTO barang (id_barang,nama_barang,id_jenis,harga,stok) VALUES ('$id_barang','$nama_barang','$id_jenis','$harga','$stok')";

if (mysqli_query($conn,$sql)) {
    echo "Data Berhasil Ditambahkan!";
    header("Location: index.php");
} else{
    echo "error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
?>