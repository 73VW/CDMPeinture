@extends('layouts.app')

@section('content')
<div class="container login">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">
            Connexion
        </div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Adresse E-Mail</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se rappeler de moi
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Connexion
                    </button>
                    <div class="text-center">
                        <a class="d-block " href="{{ route('password.request') }}">
                            Mot de passe oublié?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
