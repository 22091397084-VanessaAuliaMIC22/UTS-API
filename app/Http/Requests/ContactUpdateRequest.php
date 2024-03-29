<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
            'first_name' => 'string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'nullable|string|email|max:200',
            'phone' => 'nullable|string|max:20',
            'user_id' => 'nullable|exists:users,id'
        ];
    }
}
