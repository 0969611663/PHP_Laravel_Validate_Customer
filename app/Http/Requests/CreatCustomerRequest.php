<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatCustomerRequest extends FormRequest
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
            'user_name' => 'required|min:2|max:50',
            'phone' => 'min:10|max:11|required',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'ban chua nhap ten can nhap lai',
            'phone.required'  => 'ban chua nhap sdt can nhap lai',
            'email.required'  => 'ban chua nhap email can nhap lai'
        ];
    }
}
