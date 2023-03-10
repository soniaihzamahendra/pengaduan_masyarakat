<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMasyarakatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nik.required' => 'Nik belum diisi atau tidak sesuai',
            'nama.required' => 'nama belum diisi',
            'username.required' => 'username belum diisi',
            'password.required' => 'password belum diisi',
            'telp.required' => 'telp belum diisi',
        ];
    }

}
