<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratRequest extends FormRequest
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
            'no_surat' => 'required',
            'header' => 'required',
            'sub_header' => 'required',
            'dinas' => 'required',
            'alamat' => 'required',
            'logo' => 'required',
            'nama_surat' => 'required',
            'tahun_ajaran' => 'required',
            'tempat_tanggal_surat' => 'required',
            'kepala_sekolah' => 'required',
            'nip' => 'required',
            'ttd' => 'required',
            'stempel' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'no_surat.required' => 'No Surat tidak boleh kosong',
            'header.required' => 'Header tidak boleh kosong',
            'sub_header.required' => 'Sub Header Surat tidak boleh kosong',
            'dinas.required' => 'Nama Dinas tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'logo.required' => 'Pilih Logo',
            'nama_surat.required' => 'Nama Surat tidak boleh kosong',
            'tahun_ajaran.required' => 'Tahun Ajaran tidak boleh kosong',
            'tempat_tanggal_surat.required' => 'Tempat Tanggal Surat tidak boleh kosong',
            'kepala_sekolah.required' => 'Kepala Sekolah tidak boleh kosong',
            'nip.required' => 'Nip tidak boleh kosong',
            'ttd.required' => 'Pilih Tanda Tangan',
            'stempel.required' => 'Pilih Stempel',
        ];
    }
}
