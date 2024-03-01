<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamsUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'slug' => "required|string|unique:teams,slug,{$this->team->id},id|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'department'=>'nullable|string',
            'image'=>'nullable',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'whatspapp_no'=>'nullable|string',
            'facebook_url'=>'nullable|string',
            'instagram_url'=>'nullable|string',
            'status'=>'boolean',
            ];
    }
}


           