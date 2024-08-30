<?php
require_once '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_id = 2; // Default role: user

    // Check if the username or email already exists
    $pdo = getDBConnection();
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ? OR email = ?');
    $stmt->execute([$username, $email]);
    $existingUser = $stmt->fetch();

    if ($existingUser) {
        // If the user exists, redirect back to the registration page with an error message
        header('Location: ../../register.php?error=Username%20or%20email%20already%20exists');
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $stmt = $pdo->prepare('INSERT INTO users (username, email, password, role_id) VALUES (?, ?, ?, ?)');
    $stmt->execute([$username, $email, $hashed_password, $role_id]);

    header('Location: ./SecurePHPAuth/login.php');
    exit();
}
?>
