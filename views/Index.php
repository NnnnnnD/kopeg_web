
<?php 

$title = "Home";

include '../views/components/navbar.php';

include '../views/components/sidebar.php'; ?>

<!-- Konten halaman di sini -->
<div class="content">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Penjualan</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart" width="600" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Data bulan dan penjualan (contoh)
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];
    var salesData = [30, 19, 25, 8, 43, 45];

    // Membuat area chart
    var ctx = document.getElementById('myAreaChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Penjualan Bulanan',
                data: salesData,
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna belakang area
                borderColor: 'rgba(54, 162, 235, 1)', // Warna garis batas area
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah Penjualan'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Statistik Penjualan Bulanan',
                    fontSize: 18
                },
                legend: {
                    display: false // Menyembunyikan legend
                }
            }
        }
    });
</script>
</body>
</html>
