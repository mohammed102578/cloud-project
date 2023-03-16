<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustodyRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255','min:2'],
            'custody_type' => ['required', 'string','min:2'],
            'serial_number' => ['required', 'integer'],
            'received_date' => ['required'],
            'date_of_eviction' => ['required'],
            'status' => ['required', 'integer'],
            'description' => ['required', 'string','min:2'],

            
           
        ];
    }
   
    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'name.min'=>'يجب ان يحتوي  الاسم على حرفين على الاقل',
            'name.string'=>'يجب ان يحتوي الاسم على الاحرف فقط',
            'custody_type.required' => 'نوع العهدة مطلوب.',
            'custody_type.min'=>'يجب ان يحتوي  نوع العهدة على حرفين على الاقل',
            'custody_type.string'=>'يجب ان يحتوي نوع العهدة على الاحرف فقط',
            'serial_number.required' => '  الرقم المتسلسل مطلوب.',
            'received_date.required' => '  تاريخ الاستلام مطلوب.',
            'date_of_eviction.required' => '  تاريخ الاخلاء مطلوب.',
            'status.required' => '  الحالة مطلوبة.',
            'description.required' => '  الوصف مطلوب.',
            'description.min'=>'يجب ان يحتوي   الوصف على حرفين على الاقل',
            
           
        ];
    }   
}
