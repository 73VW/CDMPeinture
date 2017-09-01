<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    private $repository;

    private $nav;
    public function create()
    {
        $this->middleware('auth');
        $this->repository = 'administration';
        $this->nav = view($this->repository.'.navbar');
        return $this->nav.view($this->repository.'.contact');
    }

    public function store(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->prenom = $request->prenom;
        $contact->nom = $request->nom;
        $contact->rue = $request->rue;
        $contact->numero = $request->numero;
        $contact->codePostal = $request->codePostal;
        $contact->ville = $request->ville;
        $contact->numeroTel = $request->numeroTel;
        $contact->email = $request->email;
        $contact->client = $request->client;
        $contact->save();

        return view('administration.contact_ok');
    }
}
