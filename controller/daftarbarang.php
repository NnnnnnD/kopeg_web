<?php
include '../controller/connection.php';

$sql = "SELECT stock, harga FROM tb_barang";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>


