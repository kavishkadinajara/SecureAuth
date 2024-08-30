<?php
session_start(); // Start the session to track user login status

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure PHP Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      // Include Tailwind's dark mode support if needed
      tailwind.config = {
        darkMode: 'class',
      };
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-800 via-gray-900 to-black text-white flex items-center justify-center p-4">
    <div class="w-full max-w-md p-6 bg-gray-900 bg-opacity-80 rounded-2xl shadow-2xl backdrop-filter backdrop-blur-lg border border-gray-700">
        <!-- Header with Logo or Title -->
        <div class="flex items-center justify-center mb-6">
            <!-- Optionally add an icon or logo here -->
            <svg class="w-10 h-10 text-yellow-400 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L2 12h3v8h8v-8h3L12 2z"></path>
            </svg>
            <h1 class="text-3xl font-extrabold text-center text-yellow-400">Secure PHP Authentication</h1>
        </div>

        <?php if ($isLoggedIn): ?>
            <!-- Content for logged-in users -->
            <p class="text-lg text-center mb-4">Hello, <span class="font-semibold"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="./src/auth/logout.php" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-full shadow-md transform hover:scale-105 transition duration-300">Logout</a>
                <a href="../src/views/dashboard.php" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-md transform hover:scale-105 transition duration-300">Go to Dashboard</a>
            </div>
        <?php else: ?>
            <!-- Content for guests -->
            <p class="text-center text-gray-300 mb-4">Please login or register to continue.</p>
            <div class="flex flex-col space-y-4">
                <a href="./login.php" class="px-4 py-3 bg-green-600 hover:bg-green-700 text-white rounded-full text-center shadow-md transform hover:scale-105 transition duration-300">Login</a>
                <a href="./register.php" class="px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-full text-center shadow-md transform hover:scale-105 transition duration-300">Register</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
