<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editarVacunatoriosRequest extends FormRequest
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
            'centro_id' => [
                'integer',
            ],
             'medico' => [
                'string',
             ],
             'medico' => [
                 'string',
             ],
             'horario'=>[
                'string',
             ],
             'telefono'=>[
                 'integer',
             ],
             'disable'=> [
                'boolean',
             ],
        ];
    }
}
