<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My App</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-purple-600 to-white flex items-center justify-center font-[Inter]">

    <div class="bg-white bg-opacity-80 shadow-xl rounded-2xl p-10 w-full max-w-md backdrop-blur-sm">
        <h2 class="text-3xl font-semibold text-purple-700 text-center mb-6">Login to Your Account</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm text-purple-800 mb-1">Email</label>
                <input type="email" name="email" id="email" required autofocus
                       class="w-full px-4 py-2 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label for="password" class="block text-sm text-purple-800 mb-1">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="flex justify-between items-center text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="accent-purple-500">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a class="text-purple-600 hover:underline" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>

            <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                Log In
            </button>
        </form>

        <p class="text-sm text-center mt-6 text-purple-800">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-medium text-purple-600 hover:underline">
                Sign up
            </a>
        </p>
    </div>

</body>
</html>
