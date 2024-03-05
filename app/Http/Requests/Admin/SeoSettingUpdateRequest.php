<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SeoSettingUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'site_title'=>'required|string',
            'home_title'=>'required|string',
            'site_description'=>'nullable|string',
            'keyword'=>'nullable|string',
            'google_analytics'=>'nullable|string',
            'status'=>'boolean',
            ];
    }
}
