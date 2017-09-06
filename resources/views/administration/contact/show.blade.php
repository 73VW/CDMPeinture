@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-sm-offset-4 col-sm-8">
            <br>
            <div class="card text-muted mx-auto mt-7">
                <div class="card-title">Fiche d'utilisateur</div>
                <div class="card-body">
                    <p>Nom : {{ $contact->nom }}</p>
                    <p>Prénom : {{ $contact->prenom }}</p>
                    <p>Adresse : {{ $contact->rue.' '.$contact->numero.', '.$contact->codePostal.' '.$contact->ville }}</p>
                    <p>Numéro de téléphone : {{ $contact->numeroTel }}</p>
                    <p>Adresse e-mail : {{ $contact->email }}</p>
                    <p>Statut : {{ $contact->client==1 ? 'Client' : 'Fournisseur' }}</p>
                    <p>
                        Modifier : {!! link_to_route_html('contact.edit', 'Modifier <i class="fa fa-arrow-right" aria-hidden="true"></i>', [$contact->id], ['class' => 'btn btn-warning btn-block']) !!}
                    </p>
                    <h3 class="panel-title">Liste des chantiers</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chantiers as $chantier)
                            <tr>
                                <td>{!! $chantier->id !!}</td>
                                <td class="text-primary"><strong>{!! $chantier->description !!}</strong></td>
                                <td>{!! link_to_route('chantier.show', 'Voir', [$chantier->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('chantier.edit', 'Modifier', [$chantier->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['chantier.destroy', $chantier->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {!! link_to_route('chantier.create', 'Ajouter un chantier', ['contact_id' => $contact->id], ['class' => 'btn btn-info pull-right']) !!}
                    <a href="javascript:history.back()" class="btn btn-primary btn-retour">
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
