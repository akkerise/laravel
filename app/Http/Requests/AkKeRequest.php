<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AkKeRequest extends FormRequest
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
            'giatien' => 'required|unique:khoaphams',
            'monhoc' => 'required|between:6,20',
            'giangvien' => 'required|between:6,18',
            'hinhanh' => 'image|mimes:jpeg,png,jpg|min:2048'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => ':attribute không được để trống',
            '*.between' => ':attribute phải nằm giữa :min -> :max',
//            '*.alpha_num' => ':attribute phải chứa vừa ký tự vừa số',
            'giatien.unique' => ':attribute phải là duy nhất',
            'hinhanh.mimes' => ':attribute ảnh của bạn vượt quá dung lượng cho phép',
            'hinhanh.min' => ':attribute phải có ít nhất 2MB',
            'hinhanh.image' => ':attribute phải là file có định dạng ảnh'
        ];
    }
}
