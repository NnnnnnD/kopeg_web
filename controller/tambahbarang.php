<?php
// Sertakan file konfigurasi database di sini
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_inventaris";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form
$stock = $_POST['stock'];
$harga = $_POST['harga'];

// Membuat query insert
$sql = "INSERT INTO tb_barang_masuk (stock, harga_satuan) VALUES (?, ?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);

// Mengikat parameter ke query
$stmt->bind_param("ii", $stock, $harga);

// Menjalankan query
if ($stmt->execute()) {
    header("Location: ../views/barangMasuk.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Menutup statement
$stmt->close();

// Menutup koneksi
$conn->close();
?>
?>