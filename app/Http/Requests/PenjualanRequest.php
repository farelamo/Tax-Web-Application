<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'document_date' => 'required|date|date_format:Y-m-d',
            'tax_period'    => 'required|date|date_format:Y-m-d',
            'tax_year'      => 'required|date|date_format:Y',
            'fullname'      => 'required|string',
            'npwp'          => 'required|integer|min:15|max:15',
            'telp'          => 'required|integer|max:15',
            'province'      => 'required|string',
            'city'          => 'required|string',
            'subdistrict'   => 'required|string',
            'village'       => 'required|string',
            'address'       => 'required|string',
            'postal_code'   => 'required|integer',
            'goods_name'    => 'required|string',
            'unit_price'    => 'required|integer',
            'amount'        => 'required|integer',
            'total'         => 'required|integer',
            'discount'      => 'required|integer',
            'dpp'           => 'required|integer',
            'ppn'           => 'required|in:11,10',
            'desc'          => 'required|in:BKP,JKP',
        ];
    }

    public function messages()
    {
        return [
            'document_date.required'    => 'Tanggal dokumen harus diisi',
            'document_date.date'        => 'Tanggal dokumen harus berupa tanggal',
            'document_date.date_format' => 'Format tanggal dokumen harus Y-m-d',
            'tax_period.required'       => 'Masa pajak harus diisi',
            'tax_period.date'           => 'Masa pajak harus berupa Tanggal',
            'tax_period.date_format'    => 'Format masa pajak harus Y-m-d',
            'tax_year.required'         => 'Tahun pajak harus diisi',
            'tax_year.date'             => 'Tahun pajak harus berupa tanggal',
            'tax_year.date_format'      => 'Format tahun pajak harus Y',
            'fullname.required'         => 'Nama Lengkap harus diisi',
            'fullname.string'           => 'Nama lengkap harus berupa string',
            'npwp.required'             => 'Npwp harus diisi',
            'npwp.integer'              => 'Npwp harus berupa angka',
            'npwp.min'                  => 'Minimal npwp adalah 15 angka',
            'npwp.max'                  => 'maximal npwp adalah 15 angka',
            'telp.required'             => 'Nomor telepon harus diisi',
            'telp.integer'              => 'Nomor telepon harus berupa angka',
            'telp.max'                  => 'Maximal nomor telepon adalah 15 angka',
            'province.required'         => 'Provinsi harus diisi',
            'province.string'           => 'Provinsi harus berupa string',
            'city.required'             => 'Kota harus diisi',
            'city.string'               => 'Kota harus berupa string',
            'subdistrict.required'      => 'Kecamatan harus diisi',
            'subdistrict.string'        => 'Kecamatan harus berupa string',
            'village.required'          => 'Desa harus diisi',
            'village.string'            => 'Desa harus berupa string',
            'address.required'          => 'Jalan harus diisi',
            'address.string'            => 'Jalan harus berupa string',
            'postal_code.required'      => 'Kode pos harus diisi',
            'postal_code.integer'       => 'Kode pos harus berupa angka',
            'goods_name.required'       => 'Nama barang harus diisi',
            'goods_name.string'         => 'Nama barang harus berupa string',
            'unit_price.required'       => 'Harga satuan harus diisi',
            'unit_price.integer'        => 'Harga satuan harus berupa angka',
            'amount.required'           => 'Jumlah barang harus diisi',
            'amount.integer'            => 'Jumlah barang harus berupa angka',
            'total.required'            => 'Harga total harus diisi',
            'total.integer'             => 'Harga total harus berupa angka',
            'discount.required'         => 'Discount harus diisi',
            'discount.integer'          => 'Discount harus berupa angka',
            'dpp.required'              => 'Dpp harus diisi',
            'dpp.integer'               => 'Dpp harus berupa angka',
            'ppn.required'              => 'Ppn harus diisi',
            'ppn.in'                    => 'Data ppn tidak tersedia',
            'desc.required'             => 'Keterangan harus diisi',
            'desc.in'                   => 'Keterangan tidak tersedia',
        ];
    }
}
