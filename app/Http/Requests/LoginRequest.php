<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
    
        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.unique' => 'يجب أن لا يتكرر الاسم أكثر من مرة',
                'email.required' => 'الايميل مطلوب',
                'email.email' => 'يجب أن يكون البريد الالكتروني بصيغة بريد التكروني',
                'email.unique' => 'يجب أن لا يتكرر الايميل أكثر من مرة',
                'password.min' => 'يجب ان تكون طول كلمة السر على الاقل 8 محارف',
                'password.required' => 'كلمة السر مطلوبة',
                'role.required' => 'role is required',
                'role.in' => 'role must be 1 or 2 or 3',
                'phone.required' => 'رقم الهاتف مطلوب',
                'isAdmin.in' => 'isAdmin must be 0 or 1',
                'description,required' => 'description is required',
                'department_id.required' => 'department_id is required',
            ];
        }
    }
}
