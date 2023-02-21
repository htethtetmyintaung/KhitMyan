<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubGalleriesRequest extends FormRequest
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
                'string',
                'max:200'
            ],
            'title_my' => [
                'string',
                'max:200'
            ],
            'title_ja' => [
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
            'image' => [
                'mimes:jpeg,jpg,png'
            ],
            'sub_gallery_id'=> [
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }
    
}
