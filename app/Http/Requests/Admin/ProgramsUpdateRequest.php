<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramsUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title'=>'required|string',
            'slug' => "required|string|unique:programs,slug,{$this->program->id},id|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/",
            'description'=>'nullable|string',
            'page_type'=>'nullable|string',
            'display_order' => "required_if:page_type,Home_Page|unique:programs,display_order,{$this->program->id},id",
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'status'=>'boolean',
            ];
    }
}
