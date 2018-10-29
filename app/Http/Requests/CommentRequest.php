<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment_content' => 'required|min:3',
            'comment_user_id' => 'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'comment_content.required' => 'Tên chuyên gia không được để trống.',
            'comment_content.min' => 'Tên chuyên gia không ít hơn 3 kí tự.',
            'comment_user_id.required' => 'Email không được để trống.',
            'comment_user_id.min' => 'Địa chỉ không ít hơn 3 kí tự.'
        ];
    }
}
