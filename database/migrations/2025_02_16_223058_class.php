<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category'); // Website, Mobile, dll
            $table->string('mentor_name');
            $table->string('mentor_photo')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('class_information')->nullable(); // Kolom baru untuk informasi kelas
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
