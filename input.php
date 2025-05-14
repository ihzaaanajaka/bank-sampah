<?php
include '../koneksi.php';

// Proses simpan data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_nasabah = $_POST['id_nasabah'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];

    // Hitung poin (contoh: 1 kg = 10 poin)
    $poin = $berat * 10;

    $query = "INSERT INTO transaksi (id_nasabah, jenis, berat, poin) VALUES ('$id_nasabah', '$jenis', '$berat', '$poin')";
    if ($conn->query($query)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='riwayat.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Sampah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Input Data Sampah</h3>
    <form method="POST">
        <div class="form-group">
            <label>Nama Nasabah</label>
            <select name="id_nasabah" class="form-control" required>
                <option value="">-- Pilih Nasabah --</option>
                <?php
                $result = $conn->query("SELECT id, nama FROM nasabah");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['nama']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Sampah</label>
            <input type="text" name="jenis" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Berat (kg)</label>
            <input type="number" name="berat" class="form-control" step="0.1" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>
