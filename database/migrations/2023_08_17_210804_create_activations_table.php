<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('ktp');
            $table->text('selfie_ktp');
            $table->text('npwp');
            $table->text('selfie_npwp');
            $table->text('akta_pendirian_perusahaan');
            $table->text('selfie_akta_pendirian_perusahaan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activations');
    }
};
