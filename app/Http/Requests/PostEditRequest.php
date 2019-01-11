<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEditRequest extends FormRequest
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
            'name'=>'required|unique:posts,name,'.$this->id,
            'introduction'=>'required',
            'content'=>'required',
            'keywords'=>'required',
            'description'=>'required',
            'avatar'=>'image',
            'imagesPost'=>'image'

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'name.unique'=>'Tên đã tồn tại',
            'introduction.required'=>'Bạn chưa nhập giới thiệu',
            'content.required'=>'Bạn chưa nhập nội dung',
            'keywords.required'=>'Bạn chưa nhập keyword',
            'description.required'=>'Bạn chưa nhập giói thiệu seo',
            'avatar.image'=>'Định dạng ảnh chưa được hỗ trợ',
            'imagesPost.image'=>'Định dạng ảnh chưa được hỗ trợ'
        ];
    }
}
