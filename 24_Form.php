<?php
// Pastikan data dikirim lewat POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Validasi sederhana
    if (!empty($nama) && !empty($email) && !empty($password)) {
        echo "<h2>Data Diterima</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password:" . $password . "<br>";
    } else {
        echo "Harap isi semua field!";
    }
} else {
    echo "Akses langsung tidak diizinkan!";
}
?>
