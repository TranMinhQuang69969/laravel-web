<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'ten' => 'required|unique:user|min:2|max:30',
            'username' => 'required',
            'email' => 'required|unique:user',
            'sdt' => 'required|unique:user',
            'pass' => 'required',
            'confirmpass' => 'required',   
                     
        ];
    }

    public function messages()
    {
        return [
            'ten.required' => "Bắt buộc phải nhập tên đăng nhập",
            'ten.unique' => "Tên đã được đăng ký",
            'ten.min' => "Tên phải có ít nhất :min kí tự",
            'ten.max' => "Tên không được vượt quá :max kí tự",

            'username.required' => "Bắt buộc phải nhập tên đăng nhập",
        


            'email.required' => "Bắt buộc phải nhập email",
            'email.unique' => "Email đã được đăng ký",

            'sdt.required' => "Bắt buộc phải nhập số điện thoại",
            'sdt.unique' => "Số điện thoại đã được đăng ký",


            'pass.required' => "Bắt buộc phải nhập mật khẩu",

            'confirmpass.required' => "Bắt buộc phải xác nhận mật khẩu",
        ];
            
    }
}
