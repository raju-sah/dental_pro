<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'slug' => "required|string|unique:services,slug,{$this->service->id},id|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'description'=>'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'status'=>'boolean',
            ];
    }
}
