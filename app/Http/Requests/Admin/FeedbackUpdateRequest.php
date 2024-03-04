<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'location'=>'nullable|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'service'=>'nullable|string',
            'feedback'=>'nullable|string',
            'status'=>'boolean',
            ];
    }
}
