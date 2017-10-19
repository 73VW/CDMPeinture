<?php

namespace App\Http\Controllers;

use App\Chantier;
use App\Http\Requests\ChantierRequest;
use App\Repositories\ChantierRepository;
use Illuminate\Http\Request;

class ChantierController extends Controller
{
    protected $chantierRepository;
    protected $nbrPerPage = 10;
    protected $repository;

    public function __construct(ChantierRepository $chantierRepository)
    {
        $this->chantierRepository = $chantierRepository;

        $this->middleware('auth');
        $this->repository = 'administration/chantier';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chantiers = $this->chantierRepository->getPaginate($this->nbrPerPage);

        return view($this->repository.'.index', compact('chantiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has('contact_id')) {
            $contact = $request->contact_id;

            return view($this->repository.'.create', compact('contact'));
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
    public function store(ChantierRequest $request)
    {
        $chantier = $this->chantierRepository->store($request->all());

        return redirect()->route('chantier.index')->withOk("L'utilisateur ".$chantier->name.' a été créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Chantier $chantier)
    {
        $contact = $chantier->contact;

        return view($this->repository.'.show', compact('chantier', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Chantier $chantier)
    {
        return view($this->repository.'.edit', compact('chantier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ChantierRequest $request, Chantier $chantier)
    {
        $this->chantierRepository->update($chantier, $request->all());

        return redirect()->route('chantier.index')->withOk("L'utilisateur ".$request->name.' a été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chantier $chantier)
    {
        $this->chantierRepository->destroy($chantier);

        return back();
    }
}
