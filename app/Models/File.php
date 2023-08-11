<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'ktp', 'selfie_ktp', 'company_npwp', 'selfie_company_npwp', 
        'corporation_certificate', 'selfie_corporation_certificate'
    ];
}
