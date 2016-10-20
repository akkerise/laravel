<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|between:6,32|unique:laravel,users',
            'password' => 'required|between:6,32'
        ];
    }

    public function messages(){
        return [
            '*.required' => 'Vui lòng nhập vào :attribute',
            '*.between' => 'Bạn nên nhập từ :min đến :max ký tự',
            'email.unique' => 'Email bạn nhập vào đã tồn tại , mời bạn nhập vào email khác !'
        ];
    }
}
