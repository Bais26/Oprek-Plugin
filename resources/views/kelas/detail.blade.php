<!-- resources/views/kelas/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas</title>
    <!-- Tambahkan CSS Anda di sini, bisa menggunakan Tailwind atau lainnya -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Gambar Kelas -->
            <img class="w-full h-96 object-cover object-center"
                 src="{{ asset('storage/' . $kelas->thumbnail) }}" alt="Thumbnail Kelas">

            <div class="p-6">
                <!-- Judul Kelas -->
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $kelas->title }}</h1>

                <!-- Kategori Kelas -->
                <h2 class="text-xl text-gray-600 mb-4">{{ $kelas->category }}</h2>

                <!-- Deskripsi Kelas -->
                <p class="text-gray-800 text-lg mb-6">{{ $kelas->description }}</p>

                <!-- Materi Kelas -->
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Materi Kelas</h3>
                <ul class="list-disc pl-6">
                    {{ $kelas->class_information }}
                </ul>

                <!-- Tautan Kembali -->
                <div class="mt-6">
                    <a href="{{ route('welcome') }}" class="text-blue-500 hover:underline">Kembali ke Daftar Kelas</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
