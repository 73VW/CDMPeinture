@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-sm-offset-4 col-sm-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">Fiche chantier</div>
                <div class="panel-body">
                    <p>Description : {{ $chantier->description }}</p>
                    <p>Adresse : {{ $chantier->rue.' '.$chantier->numero.', '.$chantier->codePostal.' '.$chantier->ville }}</p>
                    <p>
                        Client : {!!link_to_route_html('contact.show', $contact->prenom. ' '.$contact->nom.' <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Voir', [$contact->id], ['class' => 'btn btn-success btn-block'])!!}
                    </p>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-primary btn-retour">
                Retour
            </a>
        </div>

    </div>
</div>
@endsection
