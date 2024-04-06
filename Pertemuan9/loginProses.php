<?php
$servername = "localhost";
$username = "root";
$password = ""; // Password database
$dbname = "prakwebdb"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Ambil data dari formulir
$username = $_POST['username']; // Ambil data yang ingin Anda cari
$password = md5($_POST['password']);

// Query untuk mencari data yang cocok berdasarkan username
$query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

$result = mysqli_query($connect, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Data ditemukan
        echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
    } else {
        echo "Anda gagal Login. Silahkan <a href='loginForm.html'>Login Kembali</a>";
    }
} else {
    echo "Error: " . mysqli_error($connect);
}

// Tutup koneksi (seperti yang Anda gunakan sebelumnya)

// Tutup koneksi
mysqli_close($connect);
?>