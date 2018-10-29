<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultantexpertRequest extends FormRequest
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

    public function rules()
    {
        return [
            'consultant_expert_name' => 'required|unique:tblconsultant_expert,consultant_expert_name|min:3|max:30',
            'consultant_expert_email' => 'required|email|unique:tblconsultant_expert,consultant_expert_name',
            'consultant_expert_address' => 'min:3',
            'consultant_expert_birth' => 'min:3',
            'consultant_expert_degree' => 'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'consultant_expert_name.required' => 'Tên chuyên gia không được để trống.',
            'consultant_expert_name.unique' => 'Tên chuyên gia đã tồn tại.',
            'consultant_expert_name.min' => 'Tên chuyên gia không ít hơn 3 kí tự.',
            'consultant_expert_name.max' => 'Tên chuyên gia không lớn hơn 30 ký tự',
            'consultant_expert_email.required' => 'Email không được để trống.',
            'consultant_expert_email.email' => 'Không đúng định dạng email.',
            'consultant_expert_email.unique' => 'Email đã tồn tại.',
            'consultant_expert_address.required' => 'Địa chỉ không được để trống.',
            'consultant_expert_address.min' => 'Địa chỉ không ít hơn 3 kí tự.',
            'consultant_expert_birth.min' => 'Ngày sinh không ít hơn 3 kí tự.',
            'consultant_expert_degree.required' => 'Bằng không được để trống.',
            'consultant_expert_degree.min' => 'Bằng không ít hơn 3 kí tự.',
        ];
    }
}
