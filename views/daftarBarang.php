<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="daftarbarang_design.css">
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="KopegtelLogoOnly.png" alt="Kopegtel Logo">
    </div>
    <div class="menu-toggle" id="menu-toggle">
        &#9776;
    </div>
    <ul class="menu" id="menu">

    </ul>
</nav>

<?php include '../views/components/sidebar.php'; ?>

<div class="content">
    <h1>Daftar Barang</h1>
    <?php
        include '../controller/connection.php';

        $sql = "SELECT stock, harga FROM tb_barang";
        $result = $conn->query($sql);
        
        if (!$result) {
            die("Query failed: " . $conn->error);
        }
    if ($result->num_rows > 0) {
        // Menampilkan data dalam bentuk tabel
        echo "<table class='styled-table'>
        <thead>
        <tr>
            <th>Stock</th>
            <th>Harga</th>
        </tr>
        </thead>
        <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["stock"]. "</td>
                <td>" . $row["harga"]. "</td>
            </tr>";
        }
        echo "</tbody></table>";

        // Tombol Edit
        echo "<div class='button-container'>";
        echo "<a href='editbarang.php' class='edit-button'>Edit Barang</a>";

        // Tombol Tambah
        echo "<a href='../views/tambahBarang.php' class='add-button'>Tambah Barang</a>";
        echo "</div>";
        
    } else {
        echo "<p>Tidak ada data barang</p>";
    }
    $conn->close();
    ?>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    });
</script>
</body>
</html>