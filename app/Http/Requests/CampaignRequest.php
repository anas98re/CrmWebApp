<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Validator ;

class CampaignRequest extends FormRequest
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
            'name'=>'required|unique:campaigns|string|max:20',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after:start_date',//
            'state'=>'required',
            'num_leads'=>'required|integer',
            // 'remaining_lead'=>'required|integer',
            'service_id'=>'required|integer',
            'source_id'=>'required|integer',
            // 'description'=>'required|string|min:0|max:1000',

        ];
    }

    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.string' => 'الاسم يجب ان يكون احرف',
                'name.max' => 'الاسم يجب ان يكون 20 حرف على الاكثر',
                'name.unique' => 'يجب أن لا يتكرر الاسم أكثر من مرة',
                'start_date.required' => 'start_date is required',
                'start_date.date' => 'التاريخ يجب ان يكون بصيغة التاريخ : هكذا كمثال 2022-05-14',
                'end_date.required' => 'end_date is required',
                'end_date.date' => 'التاريخ يجب ان يكون بصيغة التاريخ : هكذا كمثال 2022-05-14',
                'state.required' => 'state is required',
                'num_leads.required' => 'num_leads is required',
                'num_leads.integer' => 'num_leads must be integer',
                'end_date.after' => 'يجب ان يكون التاريخ الول قبل التاريخ الثاني',
                // 'remaining_lead.required' => 'remaining_lead is required',
                // 'remaining_lead.integer' => 'remaining_lead must be integer',
                'service_id.required' => 'service_id is required',
                'service_id.integer' => 'service_id must be integer',
                'phone.required' => 'رقم الهاتف مطلوب',
                'isAdmin.in' => 'isAdmin must be 0 or 1',
                // 'description,required' => 'description is required',
                // 'description.string' => 'description must be string',
                // 'description,max' => 'عدد احرف الوصف يجب ان يكون 1000 على الاكثر',

            ];
        }
    }


}
