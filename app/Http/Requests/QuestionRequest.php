<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question_name' => 'required|min:3',
            'question_user_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'question_name.required' => 'Tên câu hỏi không được để trống.',
            'question_min' => 'Tên câu hỏi không được dưới 3 ký tự.',
            'question_user_id' => 'Người hỏi không được để trống'
        ];
    }
}
