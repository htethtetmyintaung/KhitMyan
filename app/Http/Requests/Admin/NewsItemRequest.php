<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsItemRequest extends FormRequest
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
            'news_id' => [
                'required',
                'nullable',
                'integer'
            ],
            'category' => [
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
            'creator_en' => [
                'required',
                'string',
                'max:200'
            ],
            'creator_my' => [
                'required',
                'string',
                'max:200'
            ],
            'creator_ja' => [
                'required',
                'string',
                'max:200'
            ],
            'image' => [
                'required',
                'mimes:jpeg,jpg,png'
            ],
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'news_id.required' => 'Please select News content in all language tab',
            'category.required' => 'Please select Category name in all language tab',
            'title_en.required' => 'Please enter Title in english language tab',
            'title_my.required' => 'Please enter Title in myanmar language tab',
            'title_ja.required' => 'Please enter Title in japanese language tab',
            'description_en.required' => 'Please enter Description in english language tab',
            'description_my.required' => 'Please enter Description in myanmar language tab',
            'description_ja.required' => 'Please enter Description in japanese language tab',
            'creator_en.required' => 'Please enter Creator in english language tab',
            'creator_my.required' => 'Please enter Creator in myanmar language tab',
            'creator_ja.required' => 'Please enter Creator in japanese language tab',
            'image.required' => 'Please upload Image by jpeg or jpg or png',
        ];

        return $messages;
    }
}
