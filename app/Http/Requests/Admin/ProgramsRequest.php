<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title'=>'required|string',
           'slug' => "required|string|unique:programs,slug|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'description'=>'nullable|string',
            'page_type'=>'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'status'=>'boolean',
            ];
    }
}
