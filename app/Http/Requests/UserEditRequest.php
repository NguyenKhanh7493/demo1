<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email,'.$this->id ,
            'password' => 'min:6|max:20',
            'repassword' => 'same:password',
            'address' => 'required',
            'phone' => 'required|max:11|min:10',
            'gender' => 'required',
            'role' => 'required',
            'avatar' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Bạn chưa nhập tên",
            'fullname.required' => "Bạn chưa nhập họ tên đầy đủ",
            'fullname.max' => "Giới hạn tên là 40 ký tự",
            'email.required' => "Bạn chưa nhập email",
            'email.email' => "Bạn nhập sai định dạng email",
            'email.unique' => "Email này đã tồn tại",
//            'password.required' => "Bạn chưa nhập mật khẩu",
            'password.min' => "Mật khẩu không được dưới 6 ký tự",
            'password.max' => "Mật khẩu không được quá 20 ký tự",
//            'repassword.required' => "Bạn chưa nhập lại mật khẩu",
            'repassword.same' => "Mật khẩu không khớp",
            'address.required' => "Bạn chưa nhập địa chỉ",
            'phone.required' => "Bạn chưa nhập sđt",
            'phone.max' => "sđt không hợp lệ",
            'phone.min' => "Sđt không hợp lệ",
//            'phone.integer' => "sđt phải là số",
            'gender.required' => "Bạn chưa nhập giới tính",
            'role.required' => "Bạn chưa nhập level",
//            'avatar.required' => "Bạn chưa chọn ảnh",
            'avatar.image' => "Định dạng chưa được hỗ trợ",
//            'avatar.mimes' => "Đuôi ảnh phải là jpg",
//            'avatar.size' => "ảnh quá lớn",size:2048
            'status.required' => "Bạn chưa nhập status",
        ];
    }
}
