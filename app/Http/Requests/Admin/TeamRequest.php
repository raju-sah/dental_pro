<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'slug' => "required|string|unique:teams,slug|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'department'=>'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'whatspapp_no'=>'required|string',
            'facebook_url'=>'required|string',
            'instagram_url'=>'required|string',
            'status'=>'boolean',
            ];
    }
}

           