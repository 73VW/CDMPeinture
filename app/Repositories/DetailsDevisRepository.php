<?php

namespace App\Repositories;

use App\DetailsDevis;

class DetailsDevisRepository
{
    protected $detailsDevis;

    public function __construct(DetailsDevis $detailsDevis)
    {
        $this->detailsDevis = $detailsDevis;
    }

    public function getPaginate($n)
    {
        return $this->detailsDevis->paginate($n);
    }

    public function store(array $inputs)
    {
        echo "<pre>\n ------------------ Details devis brut \n", var_dump($inputs), '</pre>';
        foreach ($inputs as $key => $value) {
            $inputs[$key]['produits_id'] = 1;
            $inputs[$key]['prixUnitaire'] = $inputs[$key]['prixUnit'];
            unset($inputs[$key]['prixUnit']);
            $this->detailsDevis->create($inputs[$key]);
        }

        return true;
    }

    public function update(DetailsDevis $detailsDevi, array $inputs)
    {
        $detailsDevi->update($inputs);
    }

    public function destroy(DetailsDevis $detailsDevi)
    {
        $detailsDevi->delete();
    }
}
