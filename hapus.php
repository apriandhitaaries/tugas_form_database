<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM rekening WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data berhasil dihapus";
} else {
    echo "Data gagal dihapus";
}

mysqli_close($koneksi);
?>

<br><a href="index.html"><input type="button" value="Kembali"></a>