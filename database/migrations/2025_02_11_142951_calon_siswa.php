<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('squad');
            $table->string('institusi');
            $table->string('no_wa');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('status_seleksi', ['pending', 'lolos', 'tidak_lolos'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_siswa');
    }
};
