<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\DevisRequest;
use App\Repositories\DevisRepository;
use App\Devis;

class DevisController extends Controller
{
    protected $devisRepository;
    protected $nbrPerPage = 10;
    protected $repository;
    protected $nav;

    public function __construct(DevisRepository $devisRepository)
    {
        $this->devisRepository = $devisRepository;

        $this->middleware('auth');
        $this->repository = 'administration/devis';
    }


    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $deviss = $this->devisRepository->getPaginate($this->nbrPerPage);

        return view($this->repository.'.index', compact('deviss'));
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view($this->repository.'.home');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        //$devis = $this->devisRepository->store($request->all());
        echo "<pre>", var_dump($request->all()), "</pre>";
        //return redirect()->route('devis.index')->withOk(var_dump($request));
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(Devis $devis)
    {
        $chantiers = $devis->chantiers;
        return view($this->repository.'.show', compact('devis', 'chantiers'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Devis $devis)
    {
        return view($this->repository.'.edit', compact('devis'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Devis $devis)
    {
        $this->devisRepository->update($devis, $request->all());

        return redirect()->route('devis.index')->withOk("L'utilisateur " . $request->name . " a été modifié.");
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Devis $devis)
    {
        $this->devisRepository->destroy($devis);

        return back();
    }
}
