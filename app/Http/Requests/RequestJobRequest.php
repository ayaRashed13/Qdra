<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestJobRequest extends FormRequest
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
        //dd(request()->all());
        return [
            "name" => "required|string|max:255",
            "email" => "required|email",
            "phone"=>"required|string",
            "image"=>"required|image",
            "file" => "required|file",
            "job_id"=>"required|exists:jobs,id",
            "country_id"=>"required|exists:countries,id",
            "city_id"=>"required|exists:cities,id",
        ];
    }
}
