<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanRequest extends FormRequest
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
            'peminjaman'=> 'required',
            'tanggal_pengajuan'=> 'required',
            'status'=> 'required'
        ];
    }
    public function attributes()
    {
        return[
            'nama'=> 'nama unit',
            'peminjaman' => 'peminjaman barang',
            'tanggal'=> 'tanggal pengajuan',
            'status'=> 'status pengajuan'
        ];
    }
    public function messages()
    {
        return[
            '*.required'=>':attribute harus diisi'
        ];
    }
}
