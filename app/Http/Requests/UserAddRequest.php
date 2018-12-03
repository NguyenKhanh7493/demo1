<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'name' => 'required',
            'fullname' => 'required|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
            'repassword' => 'required|same:password',
            'address' => 'required',
            'phone' => 'required|integer|max:11|min:10',
            'gender' => 'required',
            'level_user' => 'required',
            'avatar' => 'required|image',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Bạn chưa nhập tên",
            'fullname.required' => "Bạn chưa nhập họ tên đầy đủ",
            'email.required' => "Bạn chưa nhập email",
            'email.email' => "Bạn nhập sai định dạng email",
            'email.unique' => "Email này đã tồn tại",
            'password.required' => "Bạn chưa nhập mật khẩu",
            'password.min' => "Mật khẩu không được dưới 6 ký tự",
            'password.max' => "Mật khẩu không được quá 20 ký tự",
            'repassword.required' => "Bạn chưa nhập lại mật khẩu",
            'repassword.same' => "Mật khẩu không khớp",
            'address.required' => "Bạn chưa nhập địa chỉ",
            'phone.required' => "Bạn chưa nhập sđt",
            'phone.max' => "sđt không hợp lệ",
            'phone.min' => "Sđt không hợp lệ",
            'phone.integer' => "sđt phải là số",
            'gender.required' => "Bạn chưa nhập giới tính",
            'level_user.required' => "Bạn chưa nhập level",
            'avatar.required' => "Bạn chưa chọn ảnh",
            'avatar.image' => "Định dạng chưa được hỗ trợ",
            'status.required' => "Bạn chưa nhập status",
        ];
    }
}
