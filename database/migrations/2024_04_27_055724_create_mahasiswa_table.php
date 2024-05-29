<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("asal");
            $table->string("nim");
            $table->string("telp");
            $table->enum('agama',['islam','kristen','budha','hindu','konghucu']);
            $table->enum('jk',['laki-laki','perempuan']);
            $table->enum('status',['belum','selesai']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
