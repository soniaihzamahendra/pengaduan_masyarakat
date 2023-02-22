<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetugasRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            // 'id_petugas' => 'required',
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required'

        ];
    }
    //required = harus diisi
    public function messages()
    {
        return [
           
            // 'id_petugas.required' => 'Kode petugas belum diisi',
            'nama_petugas.required' => 'Nama petugas belum diisi',
            'username.required' => 'Username petugas belum diisi',
            'password.required' => 'Password petugas belum diisi',
            'telp.required' => 'No Telp petugas belum diisi',
            'level.required' => 'Email petugas belum diisi'
            
        ];
    }
}
