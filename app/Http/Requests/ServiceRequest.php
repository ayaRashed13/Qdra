<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            "title" => "required|string|max:255",
            "desc" => "required|string",
            "shortdesc" => "required|string",
            "background_image"=>"image|mimes:png,jpg,jpeg",
            "image"=>"image|mimes:png,jpg,svg,jpeg",
            'video' => "file|mimes:jpg,mp4,avi,mov,wmv|max:10240",
            "video_image"=>"image|mimes:png,jpg,svg,jpeg"

        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required';
            $rules['video'] = 'required';
            $rules['video_image'] = 'required';
        }
        //elseif($this->isMethod('put')){
        //    $rules['image'] = 'image|mimes:png,jpg,jpeg';
        //    $rules['video'] = 'file|mimes:jpg,mp4,avi,mov,wmv|max:10240';
        //}

        return $rules;
    }

    }


