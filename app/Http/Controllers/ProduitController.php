<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProduitRequest;
use App\Repositories\ProduitRepository;
use App\Produit;

class ProduitController extends Controller
{
    protected $produitRepository;
    protected $nbrPerPage = 10;
    protected $repository;
    protected $nav;

    public function __construct(ProduitRepository $produitRepository)
    {
        $this->produitRepository = $produitRepository;

        $this->middleware('auth');
        $this->repository = 'administration/produit';
    }


    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $produits = $this->produitRepository->getPaginate($this->nbrPerPage);

        return view($this->repository.'.index', compact('produits'));
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view($this->repository.'.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $produit = $this->produitRepository->store($request->all());

        return redirect()->route('produit.index')->withOk("Le produit " . $produit->name . " a été créé.");
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(Produit $produit)
    {
        return view($this->repository.'.show', compact('contact'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Produit $produit)
    {
        return view($this->repository.'.edit', compact('contact'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Produit $produit)
    {
        $this->produitRepository->update($produit, $request->all());

        return redirect()->route('produit.index')->withOk("Le produit " . $produit->name . " a été modifié.");
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Produit $produit)
    {
        $this->produitRepository->destroy($produit);

        return back();
    }
}
