@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="container-fluid">
        <br>
        <div class="container login">
            <div class="card mx-auto mt-5">
                <div class="card-header text-center">
                    Modification d'un chantier
                </div>
                <div class="card-body">
                    {{ Form::model($chantier, ['route' => ['chantier.update', $chantier->id], 'class' => 'form-horizontal', 'method' => 'put']) }}
                    {{ csrf_field() }}
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
                    <div class="form-group row{{ $errors->has('description') ? ' has-error' : '' }}">
                        {{ Form::label('description', 'Description', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::text('description', null, array('class' => 'form-control col-sm-8', 'required' => 'required', 'autofocus' => 'autofocus')) }}
                        {{ $errors->first('description', '<small class="help-block">:message</small>') }}
                    </div>
                    <div class="form-group row{{ $errors->has('contact_id') ? ' has-error' : '' }}">
                        {{ Form::label('contact_id', 'Client', array('class' => 'col-sm-2 text-muted')) }}
                        {{ Form::number('contact_id', null, array('class' => 'form-control col-sm-8', 'required' => 'required')) }}
                        {{ $errors->first('contact_id', '<small class="help-block">:message</small>') }}
                    </div>
                    {{ Form::submit('Envoyer !', ['class' => 'btn btn-primary btn-block col-sm-3']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
