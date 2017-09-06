@extends('layouts.app')

@section('content')
<br>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-sm-offset-4 col-sm-8">
            <br>
            <div class="card text-muted mx-auto mt-7">
                <div class="card-title">Fiche devis</div>
                <div class="card-body">
                    <p>Description : {{ $devi->description }}</p>
                    <p>Date d'ouverture : {{ $devi->dateOuverture }}</p>
                    <p>Valeur TVA : {{ $devi->valeurTVA }}</p>
                    <p>Statut : {{ $devi->devis==1 ? 'Devis' : 'Facture' }}</p>
                    <p>
                        Chantier : {!!link_to_route_html('chantier.show', $devi->chantier->description.' <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Voir', [$devi->chantier->id], ['class' => 'btn btn-success btn-block'])!!}
                    </p><p>
                        Client : {!!link_to_route_html('contact.show', $devi->chantier->contact->prenom. ' '.$devi->chantier->contact->nom.' <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Voir', [$devi->chantier->contact->id], ['class' => 'btn btn-success btn-block'])!!}
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Texte</th>
                                <th>Quantité</th>
                                <th>Unité</th>
                                <th>Prix Unit.</th>
                                <th>Montant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @foreach ($positions as $position)
                            <tr>
                                <td>{!! $position->position !!}</td>
                                <td>{!! $position->texte !!}</td>
                            </tr>
                            @foreach ($position->details as $detail)
                            <tr>
                                <td></td>
                                <td>{!! $detail->produit->nom !!}</td>
                                <td>{!!$detail->quantite!!}</td>
                                <td>{!!$detail->unite!!}</td>
                                <td>{!!$detail->prixUnitaire!!}</td>
                                <?php $lineTot =  $detail->quantite*$detail->prixUnitaire;?>
                                <td>{{$lineTot}} CHF</td>
                                <?php $total += $lineTot;?>
                            </tr>
                            @endforeach
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{!! $total !!} CHF</td>
                            </tr>
                        </tbody>
                    </table>


                    <a href="javascript:history.back()" class="btn btn-primary btn-retour">
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
