<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NilaiRequest extends FormRequest
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
            'pabp' => 'required|numeric',
            'ppkn' => 'required|numeric',
            'bs' => 'required|numeric',
            'fisika' => 'required|numeric',
            'bind' => 'required|numeric',
            'mtk' => 'required|numeric',
            'btaq   ' => 'required|numeric',
            'kimia' => 'required|numeric',
            'si' => 'required|numeric',
            'bing' => 'required|numeric',
            'plh' => 'required|numeric',
            'c2' => 'required|numeric',
            'sn' => 'required|numeric',
            'pjok' => 'required|numeric',
            'simdig' => 'required|numeric',
            'c3' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'pabp.numeric' => 'PABP harus berupa angka',
            'ppkn.numeric' => 'PPKN harus berupa angka',
            'bs.numeric' => 'BS harus berupa angka',
            'fisika.numeric' => 'Fisika harus berupa angka',
            'bind.numeric' => 'B. Indonesia harus berupa angka',
            'mtk.numeric' => 'Matematika harus berupa angka',
            'btaq.numeric' => 'BTAQ harus berupa angka',
            'kimia.numeric' => 'Kimia harus berupa angka',
            'si.numeric' => 'SI harus berupa angka',
            'bing.numeric' => 'B. Inggris harus berupa angka',
            'plh.numeric' => 'PLH harus berupa angka',
            'c2.numeric' => 'C2 harus berupa angka',
            'sn.numeric' => 'SN harus berupa angka',
            'pjok.numeric' => 'PJOK harus berupa angka',
            'simdig.numeric' => 'Simdig harus berupa angka',
            'C3.numeric' => 'C3 harus berupa angka',
        ];
    }
}
