<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|unique:tblcategory,category_name|min:3|max:30'
        ];
    }
    public function messages()
    {
        return [
            'category_name.required' => 'Tên thể loại không được để trống.',
            'category_name.unique' => 'Tên thể loại đã tồn tại.',
            'category_name.min' => 'Tên thể loại không ít hơn 3 kí tự.',
            'category_name.max' => 'Tên thể loại không lớn hơn 30 ký tự'
        ];
    }
}
