<?php
namespace App\Repositories;
use App\Chantier;

class ChantierRepository
{
    protected $chantier;

    public function __construct(Chantier $chantier)
    {
        $this->chantier = $chantier;
    }

    public function getPaginate($n)
    {
        return $this->chantier->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->chantier->create($inputs);
    }

    public function update(Chantier $chantier, Array $inputs)
    {
        $chantier->update($inputs);
    }
    public function destroy(Chantier $chantier)
    {
        $chantier->delete();
    }
}
 ?>
