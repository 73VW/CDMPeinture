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
                    <h3 class="panel-title">Liste des devis</h3>
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
                        @foreach ($deviss as $devis)
                        <tr>
                            <td>{!! $devis->id !!}</td>
                            <td class="text-primary"><strong>{!! $devis->description !!}</strong></td>
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
                @if(method_exists($deviss, 'links'))
                {!! $deviss->links() !!}
                @endif
            </div>

            {!! link_to_route('devis.create', 'Ajouter un devis', [], ['class' => 'btn btn-info pull-right']) !!}
        </div>
    </div>
</div>
@endsection
