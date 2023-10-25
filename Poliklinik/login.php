<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .login-container {
            width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #333;
            border: 0;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>


<?php
// Simpan kredensial di sini (contoh sederhana)
$valid_username = "username";
$valid_password = "password";

// Ambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah kredensial valid
if ($username === $valid_username && $password === $valid_password) {
    // Jika valid, arahkan pengguna ke halaman utama atau dashboard
    header('Location: dashboard.php');
    exit();
} else {
    // Jika tidak valid, arahkan kembali ke halaman login dengan pesan kesalahan
    header('Location: login.php?error=1');
    exit();
}
?>

</body>
</html>
