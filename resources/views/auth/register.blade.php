<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-white via-purple-100 to-purple-400 flex items-center justify-center">

  <div class="w-full max-w-md bg-white/60 backdrop-blur-md p-8 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold text-purple-800 text-center mb-6">Create an Account</h2>
    
    <form action="/register" method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-purple-700">Name</label>
        <input type="text" name="name" class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500" required>
      </div>
      <div>
        <label class="block text-sm font-medium text-purple-700">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500" required>
      </div>
      <div>
        <label class="block text-sm font-medium text-purple-700">Password</label>
        <input type="password" name="password" class="w-full px-4 py-2 rounded-lg border border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500" required>
      </div>
      <button type="submit" class="w-full py-2 px-4 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">Register</button>
    </form>

    <p class="text-center text-sm text-purple-700 mt-4">
      Already have an account?
      <a href="/login" class="underline hover:text-purple-900">Login</a>
    </p>
  </div>

</body>
</html>
