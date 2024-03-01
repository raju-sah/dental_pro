<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamUpdateRequest extends FormRequest
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
            'department'=>'required|string',
            'image'=>'image|nullable',
            'whatspapp_no'=>'required|string',
            'facebook_url'=>'required|string',
            'instagram_url'=>'required|string',
            'status'=>'boolean',
            ];
    }
}
