
<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM jadwal ORDER BY tanggal ASC");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jadwal Penjemputan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">
  <h2 class="text-xl font-bold mb-4">Jadwal Penjemputan</h2>
  <ul class="list-disc pl-5">
    <?php while($row = $result->fetch_assoc()): ?>
    <li><?= $row['tanggal'] ?> - <?= $row['lokasi'] ?></li>
    <?php endwhile; ?>
  </ul>
</body>
</html>
