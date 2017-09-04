<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            'nom' => 'bail|required|string',
            'contact_id' => 'bail|required|integer',
            'prixUnitaire' => 'bail|required|integer',
            'stock' => 'bail|integer',
            'unite' => 'bail|required|string',
            'produit' => 'bail|boolean'
        ];
    }
}
