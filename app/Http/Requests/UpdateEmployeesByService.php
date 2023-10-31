<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UpdateEmployeesByService extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return  [
            'employees' => 'required',
        ];
    }
    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [

                'employees.required' => 'There must be at least one employee',

            ];
        }
    }
}
