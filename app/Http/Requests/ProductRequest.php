<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'hinhanh' => 'required',
            'mota' => 'required',
            'gia' => 'required|min:6',
            'diachi' => 'required',
            'giuong' => 'required',   
            'tinh' => 'required',   

            //
        ];
    }

    public function messages()
    {
        return [
            'hinhanh.required' => "Bắt buộc phải chọn hình ảnh",
            

            'mota.required' => "Bắt buộc phải nhập mô tả cho sản phẩm",
            'gia.required' => "Bắt buộc phải nhập giá sản phẩm",
            'gia.min' => "Giá ít nhất phải có :min chữ số",
            'diachi.required' => "Bắt buộc phải nhập địa chỉ cho sản phẩm",
            'mota.required' => "Bắt buộc phải nhập số giường cho sản phẩm",
            'mota.required' => "Bắt buộc phải nhập tỉnh",





        


           
        ];
            
    }
}
