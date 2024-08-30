<?php
require_once '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_id = 2; // Default role: user

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $pdo = getDBConnection();

    // Insert user into the database
    $stmt = $pdo->prepare('INSERT INTO users (username, email, password, role_id) VALUES (?, ?, ?, ?)');
    $stmt->execute([$username, $email, $hashed_password, $role_id]);

    header('Location: /SecurePHPAuth/login.php');
}
?>
