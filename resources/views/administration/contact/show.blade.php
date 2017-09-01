@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-sm-offset-4 col-sm-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">Fiche d'utilisateur</div>
                <div class="panel-body">
                    <p>Nom : {{ $contact->nom }}</p>
                    <p>Prénom : {{ $contact->prenom }}</p>
                    <p>Adresse : {{ $contact->rue.' '.$contact->numero.', '.$contact->codePostal.' '.$contact->ville }}</p>
                    <p>Numéro de téléphone : {{ $contact->numeroTel }}</p>
                    <p>Adresse e-mail : {{ $contact->email }}</p>
                    <p>Statut : {{ $contact->client==1 ? 'Client' : 'Fournisseur' }}</p>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
        </div>

    </div>
</div>
@endsection
