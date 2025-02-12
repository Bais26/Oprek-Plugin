<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use Illuminate\Http\Request;

class CalonSiswaController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:calon_siswa,email',
            'alamat' => 'required|string',
            'jurusan' => 'required|string',
            'semester' => 'required|string',
            'squad' => 'required|string',
            'institusi' => 'required|string',
            'no_wa' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
        ]);

        // Tambahkan status_seleksi default "pending"
        $validated['status_seleksi'] = 'pending';

        // Simpan data calon siswa
        CalonSiswa::create($validated);

        return redirect()->route('/')->with('success', 'Pendaftaran berhasil!');
    }
}
