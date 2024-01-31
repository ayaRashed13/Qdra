<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string',
            'background_image_home' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'background_image_service' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'background_image_contact' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'instagram' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'twitter' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
