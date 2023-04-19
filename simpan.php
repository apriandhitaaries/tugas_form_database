<?php
include "koneksi.php";

$nama = $_POST['nama'];
$norek = $_POST['norek'];
$saldo = $_POST['saldo'];
$jenis = $_POST['jenis'];

$query = "INSERT INTO rekening (nama, norek, saldo, jenis) VALUES ('$nama', '$norek', $saldo, '$jenis')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data berhasil disimpan <br>";
} else {
    echo "Data gagal disimpan <br>";
}

mysqli_close($koneksi);
?>

<a href="home.html"><input type="button" value="Kembali"></a>