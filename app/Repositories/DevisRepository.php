<?php
namespace App\Repositories;
use App\Devis;
use App\Repositories\PositionsDevisRepository;

class DevisRepository
{
    protected $devis;
    protected $positionsDevisRepository;

    public function __construct(Devis $devis, PositionsDevisRepository $positionsDevisRepository)
    {
        $this->devis = $devis;
        $this->positionsDevisRepository = $positionsDevisRepository;
    }

    public function getPaginate($n)
    {
        return $this->devis->paginate($n);
    }

    public function store(Array $inputs)
    {
        echo "<pre>\n ------------------  Devis brut \n", var_dump($inputs), "</pre>";
        $enTete['devis'] = true;
        $enTete['dateOuverture'] = date("Y-m-d");
        //$enTete->devisNum = $inputs['devisNum'];
        $enTete['description'] = $inputs['devisObj'];
        $enTete['valeurTVA'] = $inputs['valeurTVA'];
        $enTete['chantier_id'] = $inputs['chantier_id'];
        echo "<pre> \n ------------------  Devis \n", var_dump($enTete), "</pre>";
        $content = json_decode($inputs['jsonObject'], true);
        unset($content['montantTotal']);
        $content['enTeteDevis_id'] = $this->devis->create($enTete)->id;
        return $this->positionsDevisRepository->store($content);
    }

    public function update(Devis $devis, Array $inputs)
    {
        $devis->update($inputs);
    }
    public function destroy(Devis $devis)
    {
        $devis->delete();
    }
}
 ?>
