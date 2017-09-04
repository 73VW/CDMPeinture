<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactCreateRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Repositories\ContactRepository;
use App\Contact;

class ContactController extends Controller
{
    protected $contactRepository;
    protected $nbrPerPage = 10;
    protected $repository;
    protected $nav;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;

        $this->middleware('auth');
        $this->repository = 'administration/contact';
    }


    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $contacts = $this->contactRepository->getPaginate($this->nbrPerPage);

        return view($this->repository.'.index', compact('contacts'));
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

    public function store(ContactCreateRequest $request)
    {
        $contact = $this->contactRepository->store($request->all());

        return redirect()->route('contact.index')->withOk("L'utilisateur " . $contact->name . " a été créé.");
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(Contact $contact)
    {
        return view($this->repository.'.show', compact('contact'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Contact $contact)
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
    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        $this->contactRepository->update($contact, $request->all());

        return redirect()->route('contact.index')->withOk("L'utilisateur " . $request->name . " a été modifié.");
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(Contact $contact)
    {
        $this->contactRepository->destroy($contact);

        return back();
    }
}
