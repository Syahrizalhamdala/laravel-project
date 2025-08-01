<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Laravel App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
 <body class="bg-gradient-to-br from-blue-500 to-indigo-700 min-h-screen flex items-center justify-center">
  <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-xl p-8 w-full max-w-md animate-fade-in">
    <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Login to Your Account</h2>
    <!-- ...existing code... -->
   
  @csrf
  <div class="mb-4">
    <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
    <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" type="email" id="email" name="email" placeholder="you@email.com" required>
  </div>
  <div class="mb-6">
    <label class="block text-gray-700 font-semibold mb-2" for="password">Password</label>
    <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition" type="password" id="password" name="password" placeholder="********" required>
  </div>
  <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 rounded-lg transition duration-200 shadow-md">Login</button>
  <div class="flex justify-between items-center mt-4">
    <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot password?</a>
    <a href="#" class="text-sm text-gray-600 hover:underline">Sign up</a>
  </div>
  </form>
<!-- ...existing code... -->
  </div>
  <style>
    @keyframes fade-in {
      from { opacity: 0; transform: translateY(30px);}
      to { opacity: 1; transform: translateY(0);}
    }
    .animate-fade-in {
      animation: fade-in 0.8s cubic-bezier(.4,0,.2,1) both;
    }
  </style>
 </body>
</html>