<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
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
            'nama'=> 'required', 
            'inisial_unit'=> 'required'
        ];
    }
    public function attributes()
    {
        return[
            'nama'=> 'nama unit',
            'inisial_unit' => 'inisial unit'
        ];
    }
    public function messages()
    {
        return[
            '*.required'=>':attribute harus diisi'
        ];
    }
}
