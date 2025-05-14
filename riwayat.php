<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Riwayat Transaksi Sampah</h3>
    <table class="table table-bordered table-striped">
        <thead class="thead-success" style="background-color: #d4f8d4;">
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Berat (kg)</th>
                <th>Poin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT transaksi.*, nasabah.nama FROM transaksi 
                      JOIN nasabah ON transaksi.id_nasabah = nasabah.id";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['nama']}</td>
                            <td>{$row['jenis']}</td>
                            <td>{$row['berat']}</td>
                            <td>{$row['poin']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Belum ada transaksi</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
