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
            'user_name' => 'required|unique:tbluser,user_name|min:3|max:30',
            'user_email' => 'required|email|unique:tbluser,user_email',
            'user_address' => 'required|min:3',
            'user_gender' => 'required|min:3',
            'user_phone' => 'required|min:3',
            'user_age' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'user_name.required' => 'Username không được để trống.',
            'user_name.unique' => 'Username đã tồn tại.',
            'user_name.min' => 'Username không ít hơn 3 kí tự.',
            'user_name.max' => 'Username không lớn hơn 30 ký tự',
            'user_email.required' => 'Email không được để trống.',
            'user_email.email' => 'Email không ít hơn 3 kí tự.',
            'user_email.unique' => 'Email đã tồn tại.',
            'user_address.required' => 'Địa chỉ không được để trống.',
            'user_address.min' => 'Địa chỉ không ít hơn 3 kí tự.',
            'user_phone.required' => 'Số điện thoại không được để trống.',
            'user_phone.min' => 'Số điện thoại không ít hơn 3 kí tự.',
            'user_age.required' => 'Tuổi không được để trống.',
        ];
    }
}
