<?php
require 'function.php';


$sql = "SELECT * FROM peminjaman_gedung";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="riwayat.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="container">
        <nav class="menu">
            <div class="logo">
                <img class="gmblogo" src="cekgedung/logorentsite.png" alt="" />
                <h1>RentSite</h1>
            </div>
            <ul>
                <li><a href="">Cek Gedung</a></li>
                <li><a href="">SOP</a></li>
                <li><a href="">Berkas</a></li>
                <li><a href="">FAQ</a></li>
                <button class="login1">Login</button>
            </ul>
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>

    <!-- konten -->
    <main>
        <div class="konten1">Riwayat Peminjaman Gedung</div>
        <div class="isitable">
            <?php 
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID Peminjaman</th><th>Kode Gedung</th><th>Tanggal Pinjam</th><th>Tanggal Pakai</th><th>Batas Upload Berkas</th><th>Status</th><th>Instansi Peminjam</th><th>Aksi</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_peminjaman"] . "</td>";
            echo "<td>" . $row["kode_gedung"] . "</td>";
            echo "<td>" . $row["tanggal_pinjam"] . "</td>";
            echo "<td>" . $row["tanggal_pakai"] . "</td>";
            echo "<td>" . $row["batas_upload_berkas"] . "</td>";
            echo '<td class="pilihan">' . '<a class="tersedia" href="">Proses Verifikasi</a>';
            echo "<td>" . $row["instansi_peminjam"] . "</td>";
            echo '<td class="pilihan">' . '<a class="tersedia" href="upload.php">Upload Berkas</a>' . '<a class="tersedia" href="">Batal Pinjam</a>' ."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data gedung.";
    }
?>
        </div>


    </main>
    <!-- konten -->

    <fotter>
        <div class="foot1">
            <ui class="judul">Rent Site</ui>
            <img class="logo" src="logorentsite.png" alt="" />
        </div>
        <div class="foot2"></div>
        <div class="foot3">
            <p class="kontak1">Kampus Universitas Andalas</p>
            <a class="kontak2" href="">Limau Manis, Kec. Pauh</a>
            <a class="kontak3" href="">Kota Padang, Sumatera Barat</a>
            <a class="kontak4" href="">(+62)-123-456-789</a>
        </div>
    </fotter>
    <script src="pilihan.js"></script>
    <script src="script.js"></script>
</body>

</html>