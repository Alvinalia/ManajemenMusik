<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Username' => ['required', 'min:2', 'max:100'],
            'No Tlp' => 'required',
            'Jenis Kelamin' => 'required',
            'Alamat' => 'required',
            'Password' => 'required',
            'Level' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Username Wajib Diisi!",
            'username.min' => "Username minimum 5 karakter",
            'username.max' => "Username maksimal 100 karakter",
            'Alamat.required' => "Alamat wajib diisi",
            'Password.required' => "Password wajib diisi",
            'Level.required' => "Level wajib diisi",
            'Jenis Kelamin.required' => "Jenis Kelamin wajib diisi",
            'No Tlp.required' => "No Tlp wajib diisi",
            
        ];
    }
}
