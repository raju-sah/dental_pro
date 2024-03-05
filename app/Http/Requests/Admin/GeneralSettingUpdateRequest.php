<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=> 'required|string',
            'slug' => "required|string|unique:general_settings,slug,{$this->general_setting->id} |regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'description' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
            'mobile'=> 'nullable|string',
            'status'=>'boolean',
            ];
    }
}
