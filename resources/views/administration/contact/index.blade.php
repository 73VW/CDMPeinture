@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">

    <div class="container-fluid">
        <div class="col-sm-offset-3 col-sm-6">
            @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des contacts</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{!! $contact->id !!}</td>
                            <td class="text-primary"><strong>{!! $contact->nom !!}</strong></td>
                            <td class="text-primary"><strong>{!! $contact->prenom !!}</strong></td>
                            <td>{!! link_to_route('contact.show', 'Voir', [$contact->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                            <td>{!! link_to_route('contact.edit', 'Modifier', [$contact->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $contact->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! link_to_route('contact.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
            {!! $contacts->links() !!}
        </div>
    </div>
</div>
@endsection
