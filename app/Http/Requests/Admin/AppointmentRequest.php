<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'phone'=>'required|integer',
            'age'=>'required|integer',
            'address'=>'required|string',
            'email'=>'nullable|email',
            'message'=>'nullable|string',
            'date'=>'required|string',
            'status'=>'boolean',
            ];
    }
}
