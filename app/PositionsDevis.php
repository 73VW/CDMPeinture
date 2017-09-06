<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class PositionsDevis extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'position', 'texte', 'enTeteDevis_id'
    ];

    protected $table = 'positionsdevis';

    public function details()
    {
        return $this->hasMany("App\DetailsDevis", 'positionsDevis_id');
    }

    public function devis()
    {
        return $this->belongsTo("App\Devis");
    }
}
