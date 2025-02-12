<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    use HasFactory;
    protected $table = 'calon_siswa';

    protected $fillable = [
        'nama', 'email', 'alamat', 'jurusan', 'semester', 'squad', 'institusi', 'no_wa', 'jenis_kelamin', 'status_seleksi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
