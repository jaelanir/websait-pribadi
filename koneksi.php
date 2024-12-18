<?php
$host = 'localhost';  // Host database (localhost)
$user = 'root';       // Username MySQL (default 'root')
$pass = '';           // Password MySQL (default kosong)
$db   = 'bukutamu';   // Nama database yang sudah Anda buat

// Koneksi ke MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Cek Koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>