<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard Nasabah</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

  <nav class="mb-4 space-x-4">
    <a href="../transaksi/input.php" class="text-blue-600 underline">Input Transaksi</a>
    <a href="../transaksi/riwayat.php" class="text-blue-600 underline">Riwayat Transaksi</a>
    <a href="../logout.php" class="text-red-600 underline">Logout</a>
  </nav>

  <div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Selamat datang, <?= htmlspecialchars($user['nama']) ?>!</h1>
    <p><strong>Alamat:</strong> <?= htmlspecialchars($user['alamat']) ?></p>
    <p><strong>No HP:</strong> <?= htmlspecialchars($user['no_hp']) ?></p>
    <p><strong>Saldo Poin:</strong> <?= htmlspecialchars($user['saldo_poin']) ?></p>
    <a href="../logout.php" class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</a>
  </div>

</body>
</html>
