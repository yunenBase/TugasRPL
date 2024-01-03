<?php


$conn = mysqli_connect("localhost", "root", "", "rentsite");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahMahasiswa($nama_lengkap, $nim, $fakultas, $jurusan)
{
    global $conn;
    $query = "INSERT INTO pengguna_mahasiswa (Nama_Lengkap, NIM, Fakultas, Jurusan) 
              VALUES ('$nama_lengkap', '$nim', '$fakultas', '$jurusan')";
    mysqli_query($conn, $query);
}

function tambahDosen($nama_lengkap, $nip, $fakultas)
{
    global $conn;
    $query = "INSERT INTO pengguna_dosen (Nama_Lengkap, NIP, Fakultas) 
              VALUES ('$nama_lengkap', '$nip', '$fakultas')";
    mysqli_query($conn, $query);
}









// TAMBAHAN
//TAMBAH FILE PDF
if (isset($_POST['tambah'])) {
    $judul_pdf = htmlentities($_POST['judul_file_pdf'], ENT_QUOTES);
    $ekstensi_diperbolehkan = array('pdf');
    $file = $_FILES['nama_file_pdf']['name'];
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['nama_file_pdf']['size'];
    $file_tmp = $_FILES['nama_file_pdf']['tmp_name'];
    $folder = "assets/$file";

    // cek apakah ekstensi nya berupa PDF
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        // maka tambahkan ke folder assets
        if (move_uploaded_file($file_tmp, "$folder")) {
            $query = mysqli_query($conn, "INSERT INTO tb_pdf_book VALUES('', '$file', '$judul_pdf')");
            if ($query) {
                echo "<script>alert('File berhasil di upload!');
                document.location.href='auditorium.php';
                </script>";
            }
        }
        // Cek jika bukan file pdf yang di masukkan
    } else {
        // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
        echo "<script>alert('Ekstensi harus berupa PDF!');
            document.location.href='auditorium.php';
            </script>";
    }
}

?>