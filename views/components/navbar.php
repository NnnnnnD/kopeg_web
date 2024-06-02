<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../resources/css/index.css">
    <!-- Tambahkan Chart.js melalui CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <!-- Menu Data Barang -->
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page == 'barangMasuk.php') {
            echo '<li><a href="../views/tambahBarang.php">Stok Galon</a></li>';
        }
        ?>
        <!-- Icon Lonceng untuk Notifikasi -->
        <li><a href="#"><img src="../resources/images/music.png" alt="Notification" style="width: 24px; height: 24px;"></a></li>
        <!-- Icon Gear untuk Pengaturan -->
        <li><a href="#"><img src="../resources/images/settings.png" alt="Settings" style="width: 24px; height: 24px;"></a></li>
    </ul>
</nav>