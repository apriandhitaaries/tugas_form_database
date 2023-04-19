<?php
include "koneksi.php";

$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$nominal = $_POST['nominal'];

$query = "SELECT saldo FROM rekening WHERE norek = '$asal'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$saldo_asal = $row['saldo'];

$query = "SELECT saldo FROM rekening WHERE norek = '$tujuan'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$saldo_tujuan = $row['saldo'];

if ($saldo_asal < $nominal) {
    echo "Saldo tidak mencukupi <br>";
    echo '<a href="index.html"><input type="button" value="Kembali"></a>';
    exit();
}

$saldo_asal_baru = $saldo_asal - $nominal;
$saldo_tujuan_baru = $saldo_tujuan + $nominal;

$query = "UPDATE rekening SET saldo = $saldo_asal_baru WHERE norek = '$asal'";
$result = mysqli_query($koneksi, $query);

$query = "UPDATE rekening SET saldo = $saldo_tujuan_baru WHERE norek = '$tujuan'";
$result = mysqli_query($koneksi, $query);

$query = "INSERT INTO transaksi (asal, tujuan, nominal) VALUES ('$asal', '$tujuan', $nominal)";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Transfer berhasil";
} else {
    echo "Transfer gagal";
}

mysqli_close($koneksi);
?>

<br><a href="index.html"><input type="button" value="Kembali"></a>