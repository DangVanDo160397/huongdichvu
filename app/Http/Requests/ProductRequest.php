<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|unique:tblproduct,product_name|min:3',
            'product_price' => 'required|min:3',
            'product_category_id' => 'required',
            'product_provider_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => 'Tên sản phẩm không được để trống.',
            'product_name.unique' => 'Tên sản phẩm đã tồn tại.',
            'product_name.min' => 'Tên sản phẩm không ít hơn 3 kí tự.',
            'product_price.required' => 'Giá sản phẩm không được để trống.',
            'product_price.min' => 'Giá sản phẩm không ít hơn 3 kí tự.',
            'product_category_id.required' => 'Tên thư mục không được để trống.',
            'product_provider_id.required' => 'Tên NCC không được để trống.',
        ];
    }
}
