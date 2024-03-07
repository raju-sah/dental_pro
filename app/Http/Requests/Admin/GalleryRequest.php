<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
           'image.*' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            ];
    }
}
