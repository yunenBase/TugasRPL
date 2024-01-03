<?php
require 'function.php';

//TAMBAH FILE PDF
// if(isset($_POST['tambah'])){
//   $judul_pdf = htmlentities($_POST['judul_file_pdf'], ENT_QUOTES);
//   $ekstensi_diperbolehkan = array('pdf');
//   $file = $_FILES['nama_file_pdf']['name'];
//   $x = explode('.', $file);
//   $ekstensi = strtolower(end($x));
//   $ukuran = $_FILES['nama_file_pdf']['size'];
//   $file_tmp = $_FILES['nama_file_pdf']['tmp_name']; 
//   $folder = "assets/$file";

// // cek apakah ekstensi nya berupa PDF
//   if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
//       // maka tambahkan ke folder assets
//       if(move_uploaded_file($file_tmp, "$folder")){    
//           $query  = mysqli_query($conn, "INSERT INTO rentsite VALUES('', '$file', '$judul_pdf')");
//           if($query){
//               echo '<script>alert("File berhasil di upload!");</script>';
//           }
//       }
//       // Cek jika bukan file pdf yang di masukkan
//   }else{
//       // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
//       echo "<script>alert('Ekstensi harus berupa PDF!');
//           document.location.href='uploadBaru.php';
//           </script>";
//   } 
// }
// if ($stmt->execute()) {
//   // Redirect atau tampilkan pesan keberhasilan
//   header("Location: riwayat.php");
//   exit();
// }
?>





<!-- BATAS -->





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Uploadberkas</title>
  <link rel="stylesheet" href="uploadberskas.css" />
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
        <img class="gmblogo" src="logorentsite.png" alt="" />
        <h1>RentSite</h1>
      </div>
      <ul>
        <li><a href="cekgedung.php">Cek Gedung</a></li>
        <li><a href="sop.php">SOP</a></li>
        <li><a href="loadberkas.php">Berkas</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <a href="profil.php" class="login1">Profile</a>
      </ul>
      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </div>



  <h2>Upload Berkas</h2>
  <div class="upload" ondrop="upload_file(event)" ondragover="return false">
    <div class="isiupload">
      <h3 class="textupload">
        Seret Berkas Kesini!<br />
        Atau
      </h3>
      <form action="" method="post" enctype="">
        <button class="cari">Cari file</button>
        <input type="file" class="form-control" id="nama_file_pdf" name="nama_file_pdf" hidden />
    </div>
    <div class="garing1"></div>
    <div class="garing2"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>

  <div class="form-group">
    <label class="small mb-1" for="judul_file_pdf">Judul Pdf</label>
    <input class="form-control py-4" id="judul_file_pdf" name="judul_file_pdf" type="text" placeholder="Judul"
      autocomplete="off" required />

  </div>
  <div class="tombol">
    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button><button>Hapus</button>
  </div>
  </form>

  <h4>
    Belum Punya Berkas? Unduh <span><a href="loadberkas.php"> Disini!</a></span>
  </h4>
  <!-- konten -->
  <fotter>
    <div class="foot1">
      <ui class="judul">Rent Site</ui>
      <img class="logo" src="cekgedung/logorentsite.png" alt="" />
    </div>
    <div class="foot2"></div>
    <div class="foot3">
      <p class="kontak1">Kampus Universitas Andalas</p>
      <a class="kontak2" href="">Limau Manis, Kec. Pauh</a>
      <a class="kontak3" href="">Kota Padang, Sumatera Barat</a>
      <a class="kontak4" href="">(+62)-123-456-789</a>
    </div>
  </fotter>
  <!-- footer -->
  <script src="upload.js"></script>
  <script src="script.js"></script>
</body>

</html>