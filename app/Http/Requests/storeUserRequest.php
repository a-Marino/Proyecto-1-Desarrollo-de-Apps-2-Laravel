<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUserRequest extends FormRequest
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
        return [
            'apelnom' => [
                'string',
                'required',
            ],
            'DNI' => [
                'integer',
                'required',
                'unique:users',
            ],
            'email' => [
                'required',
                'unique:users',
            ],
            'role' => [
                'required',
            ],
            'telefono' => [
                'integer',
            ],
            'RUP' => [
                'integer',
                'unique:users',
            ],
            'password' => [
                'required',
            ]
        ];
    }
}