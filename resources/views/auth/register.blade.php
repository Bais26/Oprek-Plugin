<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold text-center">Daftar Akun</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <button type="submit" class="w-full py-2 mt-4 text-white bg-blue-500 rounded-lg">Daftar</button>
        </form>

        <p class="text-center text-gray-600">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Masuk</a></p>
    </div>
</body>
</html>
