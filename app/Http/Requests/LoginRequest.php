<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'user_email'=> [
                'required',
                'email'
            ],
            'user_password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user_email.required' => 'Email không được để trống.',
            'user_email.email' => 'Không đúng định dạng email.',
            'user_password.required' => 'Mật khẩu không được để trống.'
        ];
    }
}
