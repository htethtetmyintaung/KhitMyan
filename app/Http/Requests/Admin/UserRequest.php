<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules =  [
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
                'string',
                'max:200'
            ],
            'password' => [
                'required',
                'confirmed',
                'max:8'
            ],
            'role' => [
                'required',
                'string',
                'max:200'
            ],
        ];
        return $rules;
    }
}
