
<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM nasabah WHERE username = '$username'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: dashboard/nasabah.php");
    } else {
        echo "<script>alert('Login gagal!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Nasabah</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100">
  <div class="max-w-sm mx-auto mt-20 p-6 bg-white shadow rounded">
    <h2 class="text-xl font-bold mb-4 text-center">Login Nasabah</h2>
    <form method="POST">
      <input name="username" placeholder="Username" class="w-full p-2 mb-3 rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-3 rounded" required>
      <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">Login</button>
    </form>
  </div>
</body>
</html>
