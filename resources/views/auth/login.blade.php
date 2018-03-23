@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">{{ __('Adresse Mail') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span><strong>{{ $errors->first('email') }}</strong></span>
            @endif
            <label for="password">{{ __('Mot de passe') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span><strong>{{ $errors->first('password') }}</strong></span>
            @endif
            <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Se souvenir de moi') }}</label>
            <div>
                <button type="submit">{{ __('Connexion') }}</button>
            </div>
            <div>
                <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié?') }}</a>
            </div>
        </div>
    </form>
</div>
@endsection
