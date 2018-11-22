<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'     => 'required|email',
            'password'  => 'required|min:6|max:20'
        ];
    }
    public function messages()
    {
        return [
            'email.required'   => 'Bạn chưa nhập email',
            'email.email'      => 'Bạn nhập sai định dạng email',
//            'email.unique'     => 'Email đã tồn tại',|unique:users,email
            'password.min'     => 'Mật khẩu phải 6 ký tự',
            'password.max'     => 'Mật khẩu không được quá 20 ký tự',
            'password.required'=> 'Bạn không đươc để trống mật khẩu'
        ];
    }
}
