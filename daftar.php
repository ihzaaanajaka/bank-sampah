<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO nasabah (nama, alamat, no_hp, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $alamat, $no_hp, $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal daftar. Username mungkin sudah digunakan.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Nasabah</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
  <div class="max-w-md mx-auto mt-10 p-6 shadow rounded bg-green-50">
    <h2 class="text-2xl font-bold mb-4 text-center">Daftar Nasabah</h2>
    <form method="POST">
      <input name="nama" placeholder="Nama Lengkap" class="w-full mb-3 p-2 rounded" required>
      <textarea name="alamat" placeholder="Alamat" class="w-full mb-3 p-2 rounded" required></textarea>
      <input name="no_hp" placeholder="No HP" class="w-full mb-3 p-2 rounded" required>
      <input name="username" placeholder="Username" class="w-full mb-3 p-2 rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 rounded" required>
      <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">Daftar</button>
    </form>
  </div>
</body>
</html>