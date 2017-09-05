<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class DetailsDevis extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'prixUnitaire','quantite','unite', 'positionsDevis_id', 'enTeteDevis_id', 'produits_id'
    ];

    protected $table = 'detailsdevis';
}