<?php
namespace App\Repositories;
use App\Devis;

class DevisRepository
{
    protected $devis;

    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    public function getPaginate($n)
    {
        return $this->devis->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->devis->create($inputs);
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
