<?php

namespace App\Repositories;

use App\PositionsDevis;

class PositionsDevisRepository
{
    protected $positionsDevis;
    protected $detailsDevisRepository;

    public function __construct(PositionsDevis $positionsDevis, DetailsDevisRepository $detailsDevisRepository)
    {
        $this->positionsDevis = $positionsDevis;
        $this->detailsDevisRepository = $detailsDevisRepository;
    }

    public function getPaginate($n)
    {
        return $this->positionsDevis->paginate($n);
    }

    public function store(array $inputs)
    {
        echo "<pre>\n ------------------ Positions devis brut \n", var_dump($inputs), '</pre>';
        $i = 0;
        $positions = [];
        $indexes = [];
        foreach ($inputs as $key => $value) {
            if (is_int($key)) {
                $positions[$i]['position'] = $key;
                $positions[$i]['texte'] = $value['texte'];
                $positions[$i]['enTeteDevis_id'] = $inputs['enTeteDevis_id'];
                $indexes[$key] = $this->positionsDevis->create($positions[$i]++)->id;
                unset($inputs[$key]);
            }
        }
        foreach ($inputs as $key => $value) {
            if (preg_match("(\d\.\d*)", $key)) {
                $index = (int) explode('.', $key)[0];
                $inputs[$key]['positionsDevis_id'] = $indexes[$index];
                $inputs[$key]['enTeteDevis_id'] = $inputs['enTeteDevis_id'];
            }
        }
        unset($inputs['enTeteDevis_id']);
        echo "<pre> \n ------------------  Positions devis \n", var_dump($positions), '</pre>';

        return $this->detailsDevisRepository->store($inputs);
    }

    public function update(PositionsDevis $positionsDevis, array $inputs)
    {
        $positionsDevis->update($inputs);
    }

    public function destroy(PositionsDevis $positionsDevis)
    {
        $positionsDevis->delete();
    }
}
