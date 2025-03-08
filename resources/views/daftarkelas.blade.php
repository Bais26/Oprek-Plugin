<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Calon Siswa</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
     @vite('resources/css/app.css')
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center py-6">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-center mb-6">Pendaftaran Calon Siswa</h1>

            <!-- Tampilkan pesan sukses jika ada -->
            @if(session('success'))
                <div class="mb-4 text-green-500 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Pendaftaran -->
            <form action="{{ route('calon_siswa.store') }}" method="POST">
                @csrf

                <div class="space-y-4">
                    <!-- Nama -->
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap:</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('nama')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
                        <textarea name="alamat" id="alamat" class="w-full p-3 border border-gray-300 rounded-md" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jurusan -->
                    <div>
                        <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan:</label>
                        <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('jurusan')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Semester -->
                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semester:</label>
                        <input type="text" name="semester" id="semester" value="{{ old('semester') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('semester')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Squad -->
                    <div>
                        <label for="squad" class="block text-sm font-medium text-gray-700">Squad:</label>
                        <input type="text" name="squad" id="squad" value="{{ old('squad') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('squad')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Institusi -->
                    <div>
                        <label for="institusi" class="block text-sm font-medium text-gray-700">Institusi:</label>
                        <input type="text" name="institusi" id="institusi" value="{{ old('institusi') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('institusi')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- No WhatsApp -->
                    <div>
                        <label for="no_wa" class="block text-sm font-medium text-gray-700">Nomor WhatsApp:</label>
                        <input type="text" name="no_wa" id="no_wa" value="{{ old('no_wa') }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                        @error('no_wa')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="w-full p-3 border border-gray-300 rounded-md" required>
                            <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
