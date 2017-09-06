@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-sm-offset-4 col-sm-4">
            <br>
            <div class="card text-muted mx-auto mt-7">
                <div class="card-title">Fiche chantier</div>
                <div class="card-body">
                    <p>Description : {{ $chantier->description }}</p>
                    <p>Adresse : {{ $chantier->rue.' '.$chantier->numero.', '.$chantier->codePostal.' '.$chantier->ville }}</p>
                    <p>
                        Client : {!!link_to_route_html('contact.show', $contact->prenom. ' '.$contact->nom.' <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Voir', [$contact->id], ['class' => 'btn btn-success btn-block'])!!}
                    </p>
                    <p>
                        Modifier : {!! link_to_route_html('chantier.edit', 'Modifier <i class="fa fa-arrow-right" aria-hidden="true"></i>', [$chantier->id], ['class' => 'btn btn-warning btn-block']) !!}
                    </p>
                    <h3 class="panel-title">Liste des devis</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Statut</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chantier->devis as $devis)
                            <tr>
                                <td>{!! $devis->id !!}</td>
                                <td class="text-primary"><strong>{!! $devis->description !!}</strong></td>
                                <td>{{ $devis->devis==1 ? 'Devis' : 'Facture' }}</td>
                                <td>{!! link_to_route('devis.show', 'Voir', [$devis->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('devis.edit', 'Modifier', [$devis->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['devis.destroy', $devis->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {!! link_to_route('devis.create', 'Ajouter un devis', ['chantier_id' => $chantier->id], ['class' => 'btn btn-info pull-right']) !!}
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-primary btn-retour">
                Retour
            </a>
        </div>

    </div>
</div>
@endsection
