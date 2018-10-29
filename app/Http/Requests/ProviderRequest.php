<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            'provider_name' => 'required|unique:tblprovider,provider_name|min:3|max:30',
            'provider_address' => 'required|min:3',
            'provider_phone' => 'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'provider_name.required' => 'Tên NCC không được để trống.',
            'provider_name.unique' => 'Tên NCC đã tồn tại.',
            'provider_name.min' => 'Tên NCC không ít hơn 3 kí tự.',
            'provider_name.max' => 'Tên NCC không lớn hơn 30 ký tự',
            'provider_address.required' => 'Địa chỉ không được để trống.',
            'provider_address.min' => 'Địa chỉ không ít hơn 3 kí tự.',
            'provider_phone.required' => 'Số điện thoại không được để trống.',
            'provider_phone.min' => 'Số điện thoại không ít hơn 3 kí tự.',
        ];
    }
}
