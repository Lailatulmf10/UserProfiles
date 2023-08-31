<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'required',
            'tempat_tanggalLahir' => 'required',
            'agama' => 'required',
            'Asal_Sekolah' => 'required',
            'Alamat_Sekolah' => 'required',
            'Program_Keahlihan' => 'required',
            'Nomor_Induk' => 'required',
            'Alamat_Rumah' => 'required',
            'notelp_Pribadi' => 'required',
            'notelp_OrangTua' => 'required',
        ];
    }
}
