<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsRequest extends FormRequest
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
            'main_content_id' => [
                'nullable',
                'integer'
            ],
            'image_title_en' => [
                'required',
                'string',
                'max:200'
            ],
            'image_title_myan' => [
                'required',
                'string',
                'max:200'
            ],
            'image_title_jp' => [
                'required',
                'string',
                'max:200'
            ],
            'image_description_en' => [
                'required'
            ],
            'image_description_myan' => [
                'required'
            ],
            'image_description_jp' => [
                'required'
            ],
            'title_en' => [
                'required',
                'string',
                'max:200'
            ],
            'title_myan' => [
                'required',
                'string',
                'max:200'
            ],
            'title_jp' => [
                'required',
                'string',
                'max:200'
            ],
            'sub_title_en' => [
                'required'
            ],
            'sub_title_myan' => [
                'required'
            ],
            'sub_title_jp' => [
                'required'
            ],
            'description_en' => [
                'required'
            ],
            'description_myan' => [
                'required'
            ],
            'description_jp' => [
                'required'
            ],
           
        ];

        return $rules;
    }
}
