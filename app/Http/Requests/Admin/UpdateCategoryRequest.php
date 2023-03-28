<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name_en' => [
                'string',
                'max:200'
            ],
            'name_my' => [
                'string',
                'max:200'
            ],
            'name_ja' => [
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }
}
