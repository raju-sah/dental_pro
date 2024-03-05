<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SocialSettingUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'facebook_link'=>'required|string',
            'instagram_link'=>'required|string',
            'twitter_link'=>'nullable|string',
            'tiktok_link'=>'nullable|string',
            'whatsapp_no'=>'nullable|string',
            'viber_no'=>'nullable|string',
            'status'=>'boolean',
            ];
    }
}
