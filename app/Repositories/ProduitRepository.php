<?php
namespace App\Repositories;
use App\Produit;

class ProduitRepository
{
    protected $produit;

    public function __construct(Produit $produit)
    {
        $this->produit = $produit;
    }

    public function getPaginate($n)
    {
        return $this->produit->orderBy('produit', 'desc')->paginate($n);
    }

    public function produit($bool, $n)
    {
        return $this->produit->where('produit', $bool)->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->produit->create($inputs);
    }

    public function update(Produit $produit, Array $inputs)
    {
        $produit->update($inputs);
    }
    public function destroy(Produit $produit)
    {
        $produit->delete();
    }
}
 ?>
