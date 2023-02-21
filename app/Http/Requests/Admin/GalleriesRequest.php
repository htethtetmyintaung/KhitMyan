<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleriesRequest extends FormRequest
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
            'sub_title_en' => [
                'required',
                'string',
                'max:200'
            ],
            'sub_title_my' => [
                'required',
                'string',
                'max:200'
            ],
            'sub_title_ja' => [
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
            ]
        ];

        return $rules;
    }
}
