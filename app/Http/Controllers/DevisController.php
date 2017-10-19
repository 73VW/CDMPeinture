<?php

namespace App\Http\Controllers;

use App\Devis;
//use App\Http\Requests\DevisRequest;
use App\Repositories\DevisRepository;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    protected $devisRepository;
    protected $nbrPerPage = 10;
    protected $repository;

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
    public function create(Request $request)
    {
        if ($request->has('chantier_id')) {
            $chantier = $request->chantier_id;

            return view($this->repository.'.create', compact('chantier'));
        }

        return view($this->repository.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $devis = $this->devisRepository->store($request->all());

        return redirect()->route('devis.index')->withOk('Le devis '.$request->devisObj.' a été créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Devis $devi)
    {
        $positions = $devi->positions;

        return view($this->repository.'.show', compact('devi', 'positions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Devis $devi)
    {
        return view($this->repository.'.edit', compact('devi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devis $devi)
    {
        $this->devisRepository->update($devi, $request->all());

        return redirect()->route('devis.index')->withOk('Le devis '.$request->name.' a été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devis $devi)
    {
        $this->devisRepository->destroy($devi);

        return back();
    }
}
