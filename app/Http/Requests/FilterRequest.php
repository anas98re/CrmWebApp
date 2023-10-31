<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FilterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return  [
            'first_date' => 'required',
            'second_date' => 'required|after:first_date',
            'state' => 'required',
            'source_id' => 'required',
        ];
    }
    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'first_date.state' => 'first_date مطلوب',
                'second_date.required' => 'second_date مطلوب',
                'second_date.after' => 'يجب ان يكون التاريخ الثاني بعد التاريخ الاول',
            ];
        }
    }
}
