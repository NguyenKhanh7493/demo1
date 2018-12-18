<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'current_password' => 'required',
            'password' => 'required|min:6|max:30',
            'respassword' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'current_password.required' => 'Bạn chưa nhập mật khẩu hiện tại',
            'password.required' => 'Bạn chưa nhập mật khẩu mới',
            'password.min' => 'Mật khẩu mới không được dưới 6 ký tự',
            'password.max' => 'Mật khẩu mới vượt quá ký tự cho phép',
            'respassword.required' => 'Bạn chưa nhập lại mật khẩu mới',
            'respassword.same' => 'Mật khẩu không khớp',
        ];
    }
}
