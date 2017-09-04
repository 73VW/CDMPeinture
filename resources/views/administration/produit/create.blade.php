@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <br>
        <div class="container login">
            <div class="card mx-auto mt-5">
                <div class="card-header text-center">
                    Ajout d'un nouveau produit
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'produit.store', 'class' => 'form-horizontal']) }}
                    {{ csrf_field() }}
                    <div class="form-group row{{ $errors->has('nom') ? ' has-error' : '' }}">
                        {{ Form::label('nom', 'Nom', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('nom', null, array('class' => 'form-control col-sm-8', 'required' => 'required', 'autofocus' => 'autofocus')) }}
                        {{ $errors->first('nom', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('contact_id') ? ' has-error' : '' }}">
                        {{ Form::label('contact_id', 'Fournisseur', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('contact_id', null, array('class' => 'form-control col-sm-8')) }}
                        {{ $errors->first('contact_id', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('prixUnitaire') ? ' has-error' : '' }}">
                        {{ Form::label('prixUnitaire', 'PrixUnitaire', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::number('prixUnitaire', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('prixUnitaire', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('stock') ? ' has-error' : '' }}">
                        {{ Form::label('stock', 'Stock', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::number('stock', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('stock', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('unite') ? ' has-error' : '' }}">
                        {{ Form::label('unite', 'Unité', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('unite', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('unite', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('produit') ? ' has-error' : '' }}">
                        {{ Form::label('produit1', 'Produit', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::radio('produit', 1, true, array('id' => 'produit1', 'class' => 'form-control col-sm-1')) }}<br/>
                        {{ Form::label('produit2', 'Prestation', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::radio('produit', 0, false, array('id' => 'produit2', 'class' => 'form-control col-sm-1')) }}
                        {{ $errors->first('produit', '<small class="help-block">:message</small>') }}
                    </div>
                    {{ Form::submit('Envoyer !', ['class' => 'btn btn-primary btn-block col-sm-3']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
