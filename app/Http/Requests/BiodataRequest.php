<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullname'      => 'required|string',
            'npwp'          => 'required|string|min:15|max:15',
            'telp'          => 'required|string|max:15',
            'province'      => 'required|string',
            'city'          => 'required|string',
            'subdistrict'   => 'required|string',
            'village'       => 'required|string',
            'address'       => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'fullname.required'         => 'Nama Lengkap harus diisi',
            'fullname.string'           => 'Nama lengkap harus berupa string',
            'npwp.required'             => 'Npwp harus diisi',
            'npwp.min'                  => 'Minimal npwp adalah 15 angka',
            'npwp.max'                  => 'maximal npwp adalah 15 angka',
            'telp.required'             => 'Nomor telepon harus diisi',
            'telp.max'                  => 'Maximal nomor telepon adalah 15 angka',
            'province.required'         => 'Provinsi harus diisi',
            'province.string'           => 'Provinsi harus berupa string',
            'city.required'             => 'Kota harus diisi',
            'city.string'               => 'Kota harus berupa string',
            'subdistrict.required'      => 'Kecamatan harus diisi',
            'subdistrict.string'        => 'Kecamatan harus berupa string',
            'village.required'          => 'Desa harus diisi',
            'village.string'            => 'Desa harus berupa string',
            'address.required'          => 'Alamat lengkap harus diisi',
            'address.string'            => 'Alamat lengkap harus berupa string',
        ];
    }
}
