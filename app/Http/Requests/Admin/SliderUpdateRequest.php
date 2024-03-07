<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'url'=>'required|string',
            'image'=>'image|nullable',
            'status'=>'boolean',
            ];
    }
}
