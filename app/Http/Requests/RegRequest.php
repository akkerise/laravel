<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'name' => 'required|between:6,32',
            'email' => 'required|unique:regs,email|between:6,32',
            'password' => 'required|confirmed',
        ];
    }

    public function messages(){
        return [
            '*.required' => 'Vui lòng không được để trống',
            'email.email' => 'Email bạn nhập vào không đúng định dạng',
            'email.unique' => 'Email bạn nhập vào đã tồn tại',
            '*.between' => 'Bạn chỉ nên chứa ít nhất :min và nhiều nhất :max',
            'password.confirmed' => 'Password không trùng nhau mời bạn nhập vào'
        ];
    }
}
