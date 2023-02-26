<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
                'string',
                'max:200'
            ],
            'description_en' => [],
            'category_en' => [
                'string',
                'max:200'
            ],
            'title_my' => [
                'string',
                'max:200'
            ],
            'description_my' => [],
            'category_my' => [
                'string',
                'max:200'
            ],
            'title_ja' => [
                'string',
                'max:200'
            ],
            'description_ja' => [],
            'category_ja' => [
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }
}
