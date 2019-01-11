<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateEditRequest extends FormRequest
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
            'name' => 'required|max:40|unique:cates,name,'.$this->id,
            'keywords' => 'required',
            'description' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên đã tồn tại',
            'name.max' => 'Không quá 40 ký tự',
            'keywords.required' => 'Bạn chưa nhập keyword',
            'description.required' => 'Bạn chưa nhập giới thiệu',
        ];
    }
}
