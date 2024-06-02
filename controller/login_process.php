<?php
include '../controller/connection.php';

// Dapatkan data email dan password dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Tambahkan debug statement
echo "Email: $email, Password: $password<br>";

// Buat prepared statement untuk memilih data admin
$sql = "SELECT * FROM admin WHERE email = ? AND password = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $email, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Periksa hasil query
if ($result && mysqli_num_rows($result) > 0) {
    // Login berhasil
    // Arahkan admin ke halaman index
    header('Location: ../views/index.php');
    exit;
} else {
    // Login gagal
    // Tampilkan pesan error
    echo "Email atau password salah. ";
    echo "<a href='../views/login.php'>Klik untuk kembali</a>";
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
