<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->integer('npwp');
            $table->integer('telp');
            $table->string('province'); // provinsi
            $table->string('city'); // kab atau kota
            $table->string('subdistrict'); // kecamatan
            $table->string('village'); // desa
            $table->text('address');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
