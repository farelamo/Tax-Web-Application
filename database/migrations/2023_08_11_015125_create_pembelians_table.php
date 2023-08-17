<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TABLE_NAME  = 'pembelians';
    const COLUMN_NAME = [
        ['name' => 'no_tax', 'type' => 'text'],
        ['name' => 'fullname', 'type' => 'string'],
        ['name' => 'npwp', 'type' => 'string'],
        ['name' => 'telp', 'type' => 'string'],
        ['name' => 'province', 'type' => 'string'],
        ['name' => 'city', 'type' => 'string'],
        ['name' => 'subdistrict', 'type' => 'string'],
        ['name' => 'village', 'type' => 'string'],
        ['name' => 'address', 'type' => 'text'],
        ['name' => 'postal_code', 'type' => 'string'],
        ['name' => 'goods_name', 'type' => 'string'],
        ['name' => 'unit_price', 'type' => 'string'],
        ['name' => 'amount', 'type' => 'string'],
        ['name' => 'total', 'type' => 'string'],
        ['name' => 'discount', 'type' => 'string'],
        ['name' => 'dpp', 'type' => 'string'],
        ['name' => 'ppn', 'type' => 'string'],
        ['name' => 'desc', 'type' => 'enum', 'size' => ['BKP', 'JKP']],
        ['name' => 'status', 'type' => 'enum', 'size' => ['paid', 'unpaid']],
    ];

    public function up(): void
    {
        Schema::create(SELF::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            foreach (SELF::COLUMN_NAME as $column) {
                $table->{$column['type']}($column['name'], $column['size'] ?? '');
            }
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(SELF::TABLE_NAME);
    }
};
