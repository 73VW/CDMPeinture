<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nom', 'prenom', 'rue', 'numero', 'codePostal', 'ville', 'numeroTel', 'email', 'client'
    ];

    public function chantiers()
    {
        return $this->hasMany("App\Chantier");
    }

    public function produits()
    {
        return $this->hasMany("App\Produit");
    }
}
