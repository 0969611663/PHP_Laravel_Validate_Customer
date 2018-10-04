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
            'user_name' => 'required|max:50',
//            'phone' => 'required|max:11',
//            'email' => 'required|exists:connection.staff,email'
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'nhap sai ten can nhap lai',
//            'phone.required'  => 'nhap sai sdt nhap lai',
//            'email.required'  => 'nhap sai email can nhap lai'
        ];
    }
}
