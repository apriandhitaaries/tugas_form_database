<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <title>Northland Bank</title>

    <!-- Favicons -->
    <link href="assets/img/Fatui_Symbol.png" rel="icon">

    <!-- Bootstrap CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">
            <a id="brand" class="navbar-brand brand" href="home.html">Apriandhita Aries | 215150607111019</a>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="home.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="form.html">Formulir Pendaftaran</a></li>
                    <li><a class="nav-link scrollto active" href="tampil.php">Data Rekening</a></li>
                    <li><a class="nav-link scrollto" href="transfer.php">Transfer</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- end header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h3>Data Rekening</h3>
            <table border="1" width="800" cellpadding="10" align="center">
                <tr>
                    <th>Nama</th>
                    <th>Nomor Rekening</th>
                    <th>Saldo</th>
                    <th>Jenis Rekening</th>
                    <th>Hapus Rekening</th>
                </tr>

                <?php
                include "koneksi.php";

                $query = "SELECT * FROM rekening";
                $result = mysqli_query($koneksi, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['norek'] . "</td>";
                        echo "<td>" . $row['saldo'] . "</td>";
                        echo "<td>" . $row['jenis'] . "</td>";
                        echo "<td><a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                }

                mysqli_close($koneksi);
                ?>

            </table>
        </div>
    </section>
    <!-- End Hero -->

</body>

</html>