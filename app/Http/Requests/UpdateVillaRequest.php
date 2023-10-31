<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Validator ;

class UpdateVillaRequest extends FormRequest
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
            'name'=>"required|unique:villas,name,{$this->id}|string|max:20",
            'numberOfRooms'=>'required',
            'address'=>'required',
            'Region'=>'required',
            'price'=>'required|integer',
            'phoneNumber'=>'required',
            // 'employees'=>'required',
        ];
    }

    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.unique' => 'يجب أن لا يتكرر الاسم أكثر من مرة',
                'employees.required' => 'يجب ان تختار موظف واحد على الاقل',
            ];
        }
    }


}
