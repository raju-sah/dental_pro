<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
           
            'description'=>'required|string',
            'logo'=>'image|nullable',
            'image'=>'image|nullable',
            'about_img'=>'image|nullable',
            ];
    }
}
