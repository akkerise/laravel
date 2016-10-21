<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
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
            $rules = [
                'emai' => 'required|email',
                'password' => 'required'
            ]
        ];
    }

    public function messages()
    {
        return [
            $messages = [
                'email.required' => 'Bạn nên nhập email để đăng nhập',
                'email.email' => 'Bạn nhập không đúng định dạng email',
                'password' => 'Bạn nên nhập password để đăng nhập'
            ]
        ];
    }
}
