<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class employeeUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return  [
            'name' => "required|unique:users,name,{$this->id}|string|min:3|max:20",
            'email' => "required|email|unique:users,email,{$this->id}",
            'phone' => "required|unique:employees,phone,{$this->id}|min:8|max:15",
            'address' => 'required',
            'password' => 'required|min:8',
            'Job_title' => 'required',
            // 'description' => 'required',
            // 'department_id' => 'required',
            'role' => 'required|in:1,2,3',
            // 'user_id'=>'required'
        ];
    }
    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.unique' => 'يجب أن لا يتكرر الاسم أكثر من مرة',
                'email.required' => 'الايميل مطلوب',
                'name.max' =>  'الحد الأعلى للاسم 20 حرف',
                'name.min' =>  'الحد الأدنى للاسم 3 احرف',
                'phone.min' => 'الحد الأدنى لرقم الهاتف 8',
                'phone.max' =>   'الحد الأعلى لرقم الهاتف 15',
                'email.email' => 'يجب أن يكون البريد الالكتروني بصيغة بريد التكروني',
                'email.unique' => 'يجب أن لا يتكرر الايميل أكثر من مرة',
                'password.min' => 'يجب ان تكون طول كلمة السر على الاقل 8 محارف',
                'password.required' => 'كلمة السر مطلوبة',
                'role.required' => 'role is required',
                'role.in' => 'role must be 1 or 2 or 3',
                'phone.required' => 'رقم الهاتف مطلوب',
                'isAdmin.in' => 'isAdmin must be 0 or 1',
                'Job_title,required' => 'Job_title is required',
                'department_id.required' => 'department_id is required',
            ];
        }
    }
}
