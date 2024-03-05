<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=> 'required|string',
            'slug' => "required|string|unique:general_settings,slug|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'status'=>'boolean',
            'description' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
            'mobile'=> 'nullable|string',
            ];
    }
}
