<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->string('npwp', 15)->change();
            $table->string('telp', 15)->change();
        });
    }

    public function down(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->integer('npwp')->change();
            $table->integer('telp')->change();
        });
    }
};
