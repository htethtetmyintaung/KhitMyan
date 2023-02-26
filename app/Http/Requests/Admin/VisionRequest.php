<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VisionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'service_id' => [
                'nullable',
                'integer'
            ],
            'title_en' => [
                'required',
                'string',
                'max:200'
            ],
            'title_my' => [
                'required',
                'string',
                'max:200'
            ],
            'title_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'subtitle_en' => [
                'required',
                'string',
                'max:200'
            ],
            'subtitle_my' => [
                'required',
                'string',
                'max:200'
            ],
            'subtitle_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'description_en' => [
                'required'
            ],
            'description_my' => [
                'required'
            ],
            'description_ja' => [
                'required'
            ],
            'cover_image' => [
                'required',
                'mimes:jpeg,jpg,png'
            ],
            'slide_image' => [
                'required',
            ],
            'slide_image.*' => [
                'mimes:jpeg,jpg,png'
            ]
        ];

        return $rules;
    
    }
}
