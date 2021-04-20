<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'nisn' => 'required|numeric',
            'nis' => 'required|numeric',
            'nama' => 'required|alpha_spaces',
            'nopes' => 'required|numeric',
            'kelas' => 'required',
            'jurusan' => 'required|alpha_spaces',
            'tempat' => 'required|alpha_spaces',
            'tgl_lahir' => 'required|date',
            'thn_lulus' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nisn.required' => 'Nisn tidak boleh kosong',
            'nisn.numeric' => 'Nisn harus berupa angka',
            'nis.required' => 'Nis tidak boleh kosong',
            'nis.numeric' => 'Nis harus berupa angka',
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.alpha_spaces' => 'Nama harus berupa huruf',
            'nopes.required' => 'No Pes tidak boleh kosong',
            'nopes.numeric' => 'No Pes harus berupa angka',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'jurusan.alpha_spaces' => 'Jurusan harus berupa huruf',
            'tempat.required' => 'Tempat Lahir tidak boleh kosong',
            'tempat.alpha_spaces' => 'Tempat Lahir harus berupa huruf',
            'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'tgl_lahir.date' => 'Tanggal Lahir harus berupa tanggal',
            'thn_lulus.required' => 'Pilih Tahun Lulus',
        ];
    }
}
