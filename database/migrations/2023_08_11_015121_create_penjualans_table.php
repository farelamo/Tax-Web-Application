<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    const TABLE_NAME = 'penjualans';
    const COLUMNS_NAME = [
        ['name' => 'no_tax', 'type' => 'text'],
        ['name' => 'document_date', 'type' => 'date'],
        ['name' => 'tax_period', 'type' => 'string'],
        ['name' => 'tax_year', 'type' => 'string'],
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
            foreach (SELF::COLUMNS_NAME as $column) {
                $table->{$column['type']}($column['name'], $column['size'] ?? '');
            }
            $table->text('file1')->nullable();
            $table->text('file2')->nullable();
            $table->text('file3')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(SELF::TABLE_NAME);
    }
};
