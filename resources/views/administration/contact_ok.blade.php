@extends('layouts.app')

@section('content')
    <br>

    <div class="container login">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center">
                Enregistrement d'un nouveau contact
            </div>
            <div class="card-body">
                Le client a bien été enregistré.
                <a href="{{route('create.contact')}}">Retourner en arrière?</a>
            </div>
        </div>
    </div>
@endsection
