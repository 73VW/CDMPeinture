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
        'prixUnitaire', 'quantite', 'unite', 'texte', 'positionsDevis_id', 'enTeteDevis_id', 'produits_id',
    ];

    protected $table = 'detailsdevis';

    public function position()
    {
        return $this->belongsTo("App\PositionsDevis");
    }

    public function produit()
    {
        return $this->belongsTo('App\Produit', 'produits_id');
    }
}
