<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name_en' => [
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
            'description_en' => [
                'required'
            ],
            'description_my' => [
                'required'
            ],
            'description_ja' => [
                'required'
            ],
            'link' => [
                'required',
                'string',
                'max:300'
            ],
            'image' => [
                'required',
                'mimes:jpeg,jpg,png'
            ]
        ];

        return $rules;
    
    }
}
