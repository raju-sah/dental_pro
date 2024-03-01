<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'url'=>'required|string',
            'description'=>'required|string',
            'logo'=>'required|string',
            'image'=>'image|nullable',
            'about_img'=>'required|string',
            ];
    }
}
