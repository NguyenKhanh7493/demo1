<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'name' => 'required|max:80',
            'phone' => 'required|max:11|min:10',
            'email' =>'required|email',
            'address' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên',
            'name.max' => 'Bạn nhập tên quá dài',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.min' => 'Bạn nhập sai số điện thoại',
            'phone.max' => 'Bạn nhập sai số điện thoại',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn nhập sai định dạng email',
            'address.required' => 'Bạn chưa nhập địa chỉ',
        ];
    }
}
