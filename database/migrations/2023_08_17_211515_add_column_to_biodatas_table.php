<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->dropForeign('biodatas_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
};
