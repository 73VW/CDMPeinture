<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Chantier extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rue', 'numero', 'codePostal', 'ville', 'description', 'contact_id'
    ];

    public function contact()
    {
        return $this->belongsTo("App\Contact");
    }
}
