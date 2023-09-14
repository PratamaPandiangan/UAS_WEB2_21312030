<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpmTable extends Migration
{
    public function up()
    {
        Schema::create('npm', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pokok_mahasiswa');
            // Tambahkan kolom-kolom lain sphpesuai kebutuhan Anda
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('npm');
    }
}

