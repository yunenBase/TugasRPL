<!--<?php
session_start(); // Start the session
require("function.php");


if (isset($_POST['login'])) {
    $Nama_Lengkap = $_POST['Nama_Lengkap'];
    $NIM = $_POST["NIM"];


    $sql = "SELECT * FROM pengguna_mahasiswa WHERE Nama_Lengkap=? AND NIM=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Nama_Lengkap, $NIM);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $_SESSION['Nama_Lengkap'] = $Nama_Lengkap;
        header("Location: faq.php");
        exit();
    } else {
        $error = "Username atau password salah.";
    }

    $stmt->close(); // Close the prepared statement
    $conn->close(); // Close the database connection
}

?>
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>

  <link rel="stylesheet" href="log.css">
</head>

<body>
  <div class="container">
    <div class="bungkus">

      <?php if (isset($error)) {
                echo "
        <script>
                alert('gagal login!');
                document.location.href = 'index.php';
        </script>
        ";
            } ?>

      <img class="logolog" src="logorentsite.png" alt="">
      <form class="box" action="" method="post">
        <h2 class="judul">Login</h2>
        <label for="Nama_Lengkap">Nama_Lengkap :</label>
        <input type="text" name="Nama_Lengkap" id="Nama_Lengkap">
        <label for="NIM">NIM/NIP :</label>
        <input type="text" name="NIM" id="NIM">
        <button type="submit" name="login">Login</button>
      </form>
      <h2 class="text1">Lupa Sandi ?</h2>
      <h2 class="text2">Belum punya akun? Daftar dan buat <a href="reg.php">disini</a></h2>
      <h2 class="text3"><a href="">“Kebijakan Privasi" dan "Syarat Penggunaan."</a> </h2>
    </div>

  </div>

</body>

</html>