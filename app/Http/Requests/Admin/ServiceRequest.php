<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'slug'=>'required|string',
            'description'=>'required|string',
            'image'=>'image|nullable',
            'status'=>'boolean',
            ];
    }
}
