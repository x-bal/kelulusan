<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'username' => 'required|alpha_num|alpha_dash|unique:users|min:5|max:25',
            'name' => 'required|alpha_spaces'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username tidak boleh kosong',
            'username.alpha_num' => 'Username hanya berisi huruf atau angka',
            'username.alpha_dash' => 'Username hanya berisi huruf atau underscore',
            'username.unique' => 'Username tidak tersedia',
            'username.min' => 'Username minimal 5 karakter',
            'username.max' => 'Username maximal 25 karakter',
            'name.required' => 'Nama tidak boleh kosong',
            'name.alpha_spaces' => 'Nama hanya berisi huruf dan spasi',
        ];
    }
}
