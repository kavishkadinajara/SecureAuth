<?php
session_start();
require_once '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = getDBConnection();

    // Fetch user from the database
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role_id'] = $user['role_id'];
        $_SESSION['username'] = $user['username'];

        // Logging the login action
        $stmt = $pdo->prepare('INSERT INTO user_logs (user_id, action) VALUES (?, ?)');
        $stmt->execute([$user['id'], 'Login']);

        header('Location: ../../');
    } else {
        echo 'Invalid email or password';
    }
}
?>
