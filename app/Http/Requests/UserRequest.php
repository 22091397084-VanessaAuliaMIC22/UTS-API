<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Ganti dengan aturan autentikasi Anda jika diperlukan
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:100|unique:users',
            'password' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'token' => 'nullable|string|max:100|unique:users', // Pastikan token unik jika tidak boleh null
        ];
    }
}
