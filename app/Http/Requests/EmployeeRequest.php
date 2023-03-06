<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    { 
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'nullable',
            'mobile' => 'required',
            'email' => 'nullable|email',
            'company_id' => 'required|exists:companies,id',
            'status' => 'required',
        ];
    }
}
