<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateAddRequest extends FormRequest
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
            'name' => 'required|unique:cates,name|max:40',
            'keywords' => 'required',
            'description' =>'required',
//            'menu_top' => 'required',
//            'menu_right' => 'required',
//            'footer' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.max' => 'Không quá 40 ký tự',
            'keyword.required' => 'Bạn chưa nhập keyword',
            'description.required' => 'Bạn chưa nhập giới thiệu',
//            'menu_top.required' => 'Bạn chưa chọn hiển thị',
//            'menu_right.required' => 'Bạn chưa chọn hiển thị',
//            'footer.required' => 'Bạn chưa chọn hiển thị'
        ];
    }
}
