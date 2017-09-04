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
                    <h3 class="panel-title">Liste des produits</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Statut</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produits as $produit)
                        <tr>
                            <td>{!! $produit->id !!}</td>
                            <td class="text-primary"><strong>{!! $produit->nom!!}</strong></td>
                            <td class="text-primary"><strong>
                                @if($produit->produit==true)
                                    Produit
                                @else
                                    Prestation
                                @endif
                            </strong> </td>
                            <td>{!! link_to_route('produit.show', 'Voir', [$produit->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                            <td>{!! link_to_route('produit.edit', 'Modifier', [$produit->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['produit.destroy', $produit->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                {!! $produits->links() !!}
            </div>

            {!! link_to_route('produit.create', 'Ajouter un produit', [], ['class' => 'btn btn-info pull-right']) !!}
        </div>
    </div>
</div>
@endsection
