<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'phone'=>'required|string',
            'age'=>'required|string',
            'address'=>'required|string',
            'email'=>'required|string',
            'message'=>'nullable|string',
            'date'=>'required|string',
            'status'=>'boolean',
            ];
    }
}
