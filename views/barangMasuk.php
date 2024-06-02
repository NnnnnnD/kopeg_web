<?php 

$title = "Barang Masuk";
include '../views/components/navbar.php';

include '../views/components/sidebar.php'; ?>

<div class="main-content ">
    <div class="container">
        <h2>Log Activity - Barang Masuk</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Stock</th>
                    <th>Harga Satuan</th>
                    <th>Waktu Masuk</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../controller/connection.php';

                $sql = "SELECT stock, harga_satuan, waktu_masuk FROM tb_barang_masuk";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $counter = 1; // Initialize counter
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $counter . "</td>"; // Display counter value
                        echo "<td>" . $row["stock"] . "</td>";
                        echo "<td>" . $row["harga_satuan"] . "</td>";
                        echo "<td>" . $row["waktu_masuk"] . "</td>";
                        echo "</tr>";
                        $counter++; // Increment counter
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Toggle menu on small screens
    document.getElementById('menu-toggle').onclick = function() {
        var menu = document.getElementById('menu');
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    };
</script>
<style>
    .main-content {
    margin-left: 150px; /* Adjust according to sidebar width */
    margin-top: 120px;
    padding: 2rem;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    margin-top: 0;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

thead {
    background-color: #f4f4f4;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .navbar .menu {
        display: none;
        flex-direction: column;
    }

    .navbar .menu.show {
        display: flex;
    }

    .navbar .menu-toggle {
        display: block;
    }

    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .main-content {
        margin-left: 0;
    }
}
</style>
</body>
</html>
