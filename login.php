<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure PHP Authentication | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      // Include Tailwind's dark mode support if needed
      tailwind.config = {
        darkMode: 'class',
      };
    </script>
    <style>
      /* Custom gradient background for the whole page */
      body {
        background: linear-gradient(to right, #6EE7B7, #3B82F6);
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-800 via-gray-900 to-black text-white flex items-center justify-center p-4">
<form action="./src/auth/login.php" method="POST" class="bg-black p-8 rounded-lg shadow-xl w-full max-w-sm space-y-6">
    <h1 class="text-3xl font-bold text-gray-700 text-center mb-6">Login to Your Account</h1>
    
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-800 mb-2">Email:</label>
        <input type="email" id="email" name="email" required 
               class="w-full px-4 py-3 bg-gray-100 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
    </div>

    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-800 mb-2">Password:</label>
        <input type="password" id="password" name="password" required 
               class="w-full px-4 py-3 bg-gray-100 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
    </div>

    <div class="flex items-center justify-between">
        <input type="submit" value="Login" 
               class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer transition duration-300">
    </div>
</form>
</body>
</html>
