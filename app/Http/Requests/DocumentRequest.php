<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'description' => ['required', 'string','min:2'],
            'type' => 'required|required|mimes:pdf|max:2204',
            'Exp_date'=>'required',
            
           
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'name.string'=>'يجب ان يحتوي الاسم على الاحرف فقط',
            'description.required' => '  الوصف مطلوب.',
            'description.min'=>'يجب ان يحتوي   الوصف على حرفين على الاقل',
            'type.mimes'=>'يجب ان يكون الملف pdf فقط',
            'type.required'=>'   نوع الملف  مطلوب',
            'Exp_date.required'=>'  تاريخ الانتهاء مطلوب',
           
        ];
    }
}
