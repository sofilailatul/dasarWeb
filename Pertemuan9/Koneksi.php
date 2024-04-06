<?php
// Mengganti informasi berikut dengan koneksi database Anda
$host = "127.0.0.1:3306";
$username = "root";
$password = "";
$database = "prakwebdb";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else{
    echo "koneksi berhasil";
}

// // Query untuk membuat tabel 'user'
$query = "CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL)";

// // Menjalankan query dengan mysqli_query()
if (mysqli_query($conn, $query)) {
    echo "Tabel 'user' berhasil dibuat.";
} else {
    echo "Error: " . mysqli_error($conn);
}

$newUserName = "admin";
$newPassword = "123";
$query = "INSERT INTO user (username, password) VALUES ('$newUserName', '$newPassword')";

// Menjalankan query dengan mysqli_query()
if (mysqli_query($conn, $query)) {
    echo "Data berhasil dimasukkan ke dalam tabel 'user'.";
} else {
    echo "Error: " . mysqli_error($conn);
}

//Tutup koneksi
mysqli_close($conn);
?>