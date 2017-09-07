<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Devis extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'valeurTVA', 'description', 'dateOuverture', 'devis', 'chantier_id'
    ];

    protected $table = 'entetedevis';

    public function chantier()
    {
        return $this->belongsTo("App\Chantier");
    }

    public function positions()
    {
        return $this->hasMany("App\PositionsDevis", 'enTeteDevis_id');
    }
}
