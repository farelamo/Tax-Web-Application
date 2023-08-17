<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ktp'                              => 'required|mimes:png,jpg,jpeg|max:5048',
            'selfie_ktp'                       => 'required|mimes:png,jpg,jpeg|max:5048',
            'npwp'                             => 'required|mimes:png,jpg,jpeg|max:5048',
            'selfie_npwp'                      => 'required|mimes:png,jpg,jpeg|max:5048',
            'akta_pendirian_perusahaan'        => 'required|mimes:png,jpg,jpeg|max:5048',
            'selfie_akta_pendirian_perusahaan' => 'required|mimes:png,jpg,jpeg|max:5048',
        ];
    }

    public function messages()
    {
        return [
            'ktp.required'                              => 'KTP harus diupload',
            'ktp.mimes'                                 => 'KTP harus berupa png,jpg atau jpeg',
            'ktp.max'                                   => 'Maximal KTP adalah 5 mb',
            'selfie_ktp.required'                       => 'Selfie KTP harus diupload',
            'selfie_ktp.mimes'                          => 'Selfie KTP harus berupa png,jpg atau jpeg',
            'selfie_ktp.max'                            => 'Maximal Selfie KTP adalah 5 mb',
            'npwp.required'                             => 'NPWP harus diupload',
            'npwp.mimes'                                => 'NPWP harus berupa png,jpg atau jpeg',
            'npwp.max'                                  => 'Maximal NPWP adalah 5 mb',
            'selfie_npwp.required'                      => 'Selfie NPWP harus diupload',
            'selfie_npwp.mimes'                         => 'Selfie NPWP harus berupa png,jpg atau jpeg',
            'selfie_npwp.max'                           => 'Maximal Selfie NPWP adalah 5 mb',
            'akta_pendirian_perusahaan.required'        => 'Akta perusahaan harus diupload',
            'akta_pendirian_perusahaan.mimes'           => 'Akta perusahaan harus berupa png,jpg atau jpeg',
            'akta_pendirian_perusahaan.max'             => 'Maximal akta perusahaan adalah 5 mb',
            'selfie_akta_pendirian_perusahaan.required' => 'selfie akta perusahaan harus diupload',
            'selfie_akta_pendirian_perusahaan.mimes'    => 'selfie akta perusahaan harus berupa png,jpg atau jpeg',
            'selfie_akta_pendirian_perusahaan.max'      => 'Maximal selfie akta perusahaan adalah 5 mb',
        ];
    }
}
