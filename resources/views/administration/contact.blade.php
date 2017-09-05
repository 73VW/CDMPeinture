@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <br>
        <div class="container login">
            <div class="card mx-auto mt-5">
                <div class="card-header text-center">
                    Ajout d'un nouveau client
                </div>
                <div class="card-body">
                    {{ Form::open(['route' => 'store.contact', 'class' => 'form-horizontal']) }}
                    {{ csrf_field() }}
                    <div class="form-group row{{ $errors->has('prenom') ? ' has-error' : '' }}">
                        {{ Form::label('prenom', 'Prénom', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('prenom', null, array('class' => 'form-control col-sm-8', 'required' => 'required', 'autofocus' => 'autofocus')) }}
                        {{ $errors->first('prenom', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('nom') ? ' has-error' : '' }}">
                        {{ Form::label('nom', 'Nom', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('nom', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('nom', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('rue') ? ' has-error' : '' }}">
                        {{ Form::label('rue', 'Rue', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('rue', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('rue', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('numero') ? ' has-error' : '' }}">
                        {{ Form::label('numero', 'Numéro', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::number('numero', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('numero', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('codePostal') ? ' has-error' : '' }}">
                        {{ Form::label('codePostal', 'Code Postal', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::number('codePostal', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('codePostal', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('ville') ? ' has-error' : '' }}">
                        {{ Form::label('ville', 'Ville', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('ville', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('ville', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('numeroTel') ? ' has-error' : '' }}">
                        {{ Form::label('numeroTel', 'Numéro de téléphone', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('numeroTel', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('numeroTel', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{ Form::label('email', 'Adresse e-mail', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('email', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('email', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('client') ? ' has-error' : '' }}">
                        {{ Form::label('client', 'Client', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::checkbox('client', true, true, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('client', '<small class="help-block">:message</small>') }}
                    </div>
                    {{ Form::submit('Envoyer !', ['class' => 'btn btn-primary btn-block col-sm-3']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
