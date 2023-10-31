<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class ServiceRequestUpdate extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name'=>"required|unique:services,name,{$this->id}",
            'Creation_date'=>'required|date',

        ];
    }
    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.unique' => 'الاسم موجود من قبل',
                'Creation_date.required' => 'Creation_date is required ',
            ];
        }
    }
}
