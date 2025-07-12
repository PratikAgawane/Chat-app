<?php
require '../includes/db.php';
require '../includes/functions.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = sanitize($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: chat.php");
    } else {
        echo "Invalid credentials";
    }
}
?>

<form method="post">
  Email: <input type="email" name="email"><br>
  Password: <input type="password" name="password"><br>
  <button type="submit">Login</button>
</form>
