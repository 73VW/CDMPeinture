<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChantierRequest extends FormRequest
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
            'rue'         => 'bail|required|string',
            'numero'      => 'bail|required|integer',
            'codePostal'  => 'bail|required|integer',
            'ville'       => 'bail|required|string',
            'description' => 'bail|required|string',
            'contact_id'  => 'bail|required|integer',
        ];
    }
}
