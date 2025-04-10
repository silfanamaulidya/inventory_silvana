<?php
include '../../config/koneksi.php';

$id_jenis =$_POST['id_jenis'];
$nama_jenis =$_POST['nama_jenis'];

$sql = "INSERT INTO jenis (id_jenis,nama_jenis) VALUES ('$id_jenis','$nama_jenis')";

if (mysqli_query($conn,$sql)) {
    echo "Data Berhasil Ditambahkan!";
    header("Location: index.php");
} else{
    echo "error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
?>