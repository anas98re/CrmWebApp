<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class ServiceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name'=>'required|unique:services,name',
            'Creation_date'=>'required|date',
            'employees'=>'required',

            // 'description'=>'required'
        ];
    }
    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.unique' => 'يجب أن لا يتكرر الاسم أكثر من مرة',
                'employees.required' => 'يجب ان تختار موظف واحد على الاقل',
                'Creation_date.required' => 'Creation_date is required ',
                'Creation_date.date' => 'التاريخ يجب ان يكون بصيغة التاريخ : هكذا كمثال 2022-05-14',
                // 'description.required' => 'الوصف مطلوب',

            ];
        }
    }
}
