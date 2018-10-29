<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'role_name' => 'required|unique:tblrole,role_name|min:3|max:30'
        ];
    }
    public function messages()
    {
        return [
            'role_name.required' => 'Tên quyền không được để trống.',
            'role_name.unique' => 'Tên quyền đã tồn tại.',
            'role_name.min' => 'Tên quyền không ít hơn 3 kí tự.',
            'role_name.max' => 'Tên quyền không lớn hơn 30 ký tự'
        ];
    }
}
