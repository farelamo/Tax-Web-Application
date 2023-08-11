<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_tax', 'document_date', 'tax_period',
        'tax_year', 'fullname', 'npwp', 'telp',
        'province', 'city', 'subdistrict', 'village',
        'address', 'postal_code', 'goods_name', 'unit_price',
        'amount', 'total', 'discount', 'dpp', 'ppn', 'desc',
        'status', 'file1', 'file2', 'file3'
    ];
}
