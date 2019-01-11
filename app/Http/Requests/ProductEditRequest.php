<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'name'=>'required|unique:products,name,'.$this->id,
            'title'=>'required|unique:products,title,'.$this->id,
            'introduction'=>'required',
            'content'=>'required',
            'keywords'=>'required',
            'description'=>'required',
            'num'=>'required',
            'price_old'=>'required',
            'avatar'=>'image',
//            'images'=>'image'

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'name.unique'=>'Tên đã tồn tại',
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.unique'=>'Trùng tên tiêu đề',
            'introduction.required'=>'Bạn chưa nhập giới thiệu',
            'content.required'=>'Bạn chưa nhập nội dung',
            'keywords.required'=>'Bạn chưa nhập keyword',
            'description.required'=>'Bạn chưa nhập giói thiệu seo',
            'num.required'=>'Bạn chưa nhập số lượng',
            'price_old.required'=>'Bạn chưa nhập giá',
            'avatar.image'=>'Định dạng ảnh chưa được hỗ trợ',
//            'images.image'=>'Định dạng ảnh chưa được hỗ trợ'
        ];
    }
}
