<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactCreateRequest extends FormRequest
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
            'prenom' => 'bail|required|string',
            'nom' => 'bail|required|string',
            'rue' => 'bail|required|string',
            'numero' => 'bail|required|integer',
            'codePostal' => 'bail|required|integer',
            'ville' => 'bail|required|string',
            'numeroTel' => 'bail|required|string',
            'email' => 'bail|required|email|unique:contacts',
            'client' => 'bail|boolean'
        ];
    }
}
