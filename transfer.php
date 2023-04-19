<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a id="brand" class="navbar-brand brand" href="index.html">Apriandhita Aries | 215150607111019</a>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="form.html">Formulir Pendaftaran</a></li>
                    <li><a class="nav-link scrollto" href="tampil.php">Data Rekening</a></li>
                    <li><a class="nav-link scrollto active" href="transfer.php">Transfer</a></li>
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
            <h3>Transfer Dana</h3>
            <form action="proses_transfer.php" method="post">
                <table border="1" width="800" cellpadding="10" align="center">
                    <tr>
                        <td>
                            <label for="asal">Rekening Asal :</label>
                        </td>
                        <td>
                            <select name="asal" id="asal">
                                <?php
                                include "koneksi.php";

                                $query = "SELECT * FROM Rekening";
                                $result = mysqli_query($koneksi, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['norek'] . "'>" . $row['nama'] . " (" . $row['norek'] . ")</option>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tujuan">Rekening Tujuan :</label>
                        </td>
                        <td>
                            <select name="tujuan" id="tujuan">
                                <?php
                                include "koneksi.php";

                                $query = "SELECT * FROM Rekening";
                                $result = mysqli_query($koneksi, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['norek'] . "'>" . $row['nama'] . " (" . $row['norek'] . ")</option>";
                                }

                                mysqli_close($koneksi);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nominal">Nominal :</label>
                        </td>
                        <td>
                            <input type="number" name="nominal" min="0" step="10000"><br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Transfer">
                            <a href="index.html"><input type="button" value="Kembali"></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>

</html>