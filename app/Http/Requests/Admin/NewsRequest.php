<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
                'required',
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
            'description_en' => [
                'required'
            ],
            'description_my' => [
                'required'
            ],
            'description_ja' => [
                'required'
            ],
        ];

        return $rules;
        
    }

    public function messages()
    {
        $messages = [
            'main_content_id.required' => 'Please enter main content at News Content Form',
            'title_en.required' => 'Please enter title in english language tab',
            'title_my.required' => 'Please enter title in myanmar language tab',
            'title_ja.required' => 'Please enter title in japanese language tab',
            'description_en.required' => 'Please enter description in english language tab',
            'description_my.required' => 'Please enter description in myanmar language tab',
            'description_ja.required' => 'Please enter description in japanese language tab',
        ];

        return $messages;
    }
}
