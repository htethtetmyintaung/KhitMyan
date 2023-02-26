<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'description_en' => [
                'required'
            ],
            'category_en' => [
                'required',
                'string',
                'max:200'
            ],
            'title_my' => [
                'required',
                'string',
                'max:200'
            ],
            'description_my' => [
                'required'
            ],
            'category_my' => [
                'required',
                'string',
                'max:200'
            ],
            'title_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'description_ja' => [
                'required'
            ],
            'category_ja' => [
                'required',
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }
}
