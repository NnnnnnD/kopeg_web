<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="../resources/css/tambahbarang_design.css">
    <style>
        /* Style untuk notifikasi */
        .notification {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #FF86D0;
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .notification.error {
            background-color: #f44336;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="../resources/images/KopegtelLogoOnly.png" alt="Kopegtel Logo">
    </div>
    <div class="menu-toggle" id="menu-toggle">
        &#9776;
    </div>
    <ul class="menu" id="menu">
    
    </ul>
</nav>

<?php include '../views/components/sidebar.php'; ?>

<div class="content">
    <h2>TAMBAH STOCK</h2>
    <form action="../controller/tambahbarang.php" method="post">
        <label for="stock">Stok:</label>
        <input type="text" id="stock" name="stock" required><br><br>

        <label for="pHarga">Harga:</label>
        <input type="text" id="harga" name="harga" required><br><br>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>