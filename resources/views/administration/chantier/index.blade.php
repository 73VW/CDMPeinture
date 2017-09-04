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
                    <h3 class="panel-title">Liste des chantiers</h3>
                </div>
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
                @if(method_exists($chantiers, 'links'))
                {!! $chantiers->links() !!}
                @endif
            </div>

            {!! link_to_route('chantier.create', 'Ajouter un chantier', [], ['class' => 'btn btn-info pull-right']) !!}
        </div>
    </div>
</div>
@endsection
