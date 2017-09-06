@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-sm-offset-4 col-sm-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">Fiche produit</div>
                <div class="panel-body">
                    <p>Nom : {{ $produit->nom }}</p>
                    <p>Code : {{ $produit->code }}</p>
                    <p>Fournisseur : {!!link_to_route_html('contact.show', $produit->contact->prenom. ' '.$produit->contact->nom.' <i class="fa fa-arrow-right" aria-hidden="true"></i>
Voir', [$produit->contact->id], ['class' => 'btn btn-success btn-block'])!!}</p>
                    <p>Prix unitaire : {{ $produit->prixUnitaire }}</p>
                    <p>Stock : {{ $produit->stock }}</p>
                    <p>Unité : {{ $produit->unite }}</p>
                    <p>Statut : {{ $produit->produit==1 ? 'Produit' : 'Prestation' }}</p>
                    <p>
                        Modifier : {!! link_to_route_html('produit.edit', 'Modifier <i class="fa fa-arrow-right" aria-hidden="true"></i>', [$produit->id], ['class' => 'btn btn-warning btn-block']) !!}
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
