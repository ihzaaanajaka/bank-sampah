
<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $conn->query("INSERT INTO jadwal (tanggal, lokasi) VALUES ('$tanggal', '$lokasi')");
    echo "<script>alert('Jadwal ditambahkan'); window.location='lihat.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah Jadwal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
  <h2 class="text-xl font-bold mb-4">Tambah Jadwal Penjemputan</h2>
  <form method="POST">
    <input type="date" name="tanggal" class="w-full mb-3 p-2 border rounded" required>
    <input name="lokasi" placeholder="Lokasi" class="w-full mb-3 p-2 border rounded" required>
    <button class="bg-green-600 text-white px-4 py-2 rounded">Tambah</button>
  </form>
</body>
</html>
