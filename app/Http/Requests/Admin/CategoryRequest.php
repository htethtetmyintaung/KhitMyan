<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name_en'=> [
                'required',
                'string',
                'max:200'
            ],
            'name_my' => [
                'required',
                'string',
                'max:200'
            ],
            'name_ja' => [
                'required',
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'name_en.required' => 'Please enter category name in english language tab', 
            'name_my.required' => 'Please enter category name in myanmar language tab', 
            'name_ja.required' => 'Please enter category name in japanese language tab', 
        ];

        return $messages;
    }
}
