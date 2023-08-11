<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->text('ktp');
            $table->text('selfie_ktp');
            $table->text('company_npwp');
            $table->text('selfie_company_npwp');
            $table->text('corporation_certificate')->nullable();
            $table->text('selfie_corporation_certificate')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
