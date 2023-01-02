<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
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
        ];

        return $rules;
    }
}
