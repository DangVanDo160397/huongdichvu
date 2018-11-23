<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'article_title' => 'required|unique:tblarticle,article_title|min:3|max:30',
            'article_content' => 'required|min:3',
            'article_description' => 'required|min:3|max:200',
        ];
    }

    public function messages()
    {
        return [
            'article_title.required' => 'Tiêu đề không được để trống.',
            'article_title.unique' => 'Tiêu đề đã tồn tại.',
            'article_title.min' => 'Tiêu đề không ít hơn 3 kí tự.',
            'article_title.max' => 'Tiêu đề không được quá 30 ký tự.',
            'article_content.required' => 'Nội Dung không được để trống.',
            'article_content.min' => 'Nội dung không ít hơn 3 kí tự.',
            'article_description.required' => 'Mô tả không được để trống.',
            'article_description.max' => 'Mô tả không được quá 200 ký tự để trống.',
        ];
    }
}
