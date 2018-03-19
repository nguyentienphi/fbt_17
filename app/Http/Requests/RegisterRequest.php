<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'bail|required|email|unique:users,email',
            'password' => 'bail|required|min:6|confirmed',
            'phone' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('message.name.required'),
            'email.required' => trans('message.name.required'),
            'email.email' => trans('message.email'),
            'password.required' => trans('message.password.required'),
            'password.min' => trans('message.min'),
            'phone.required' => trans('message.phone.required'),
            'address.required' => trans('message.address.required'),
            'password.confirmed' => trans('message.confirmed'),
            'email.unique' => trans('message.unique'),
        ];
    }
}
