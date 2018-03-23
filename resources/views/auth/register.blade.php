@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">{{ __('Nom') }}</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span><strong>{{ $errors->first('name') }}</strong></span>
        @endif
        <label for="email">{{ __('Adress Mail') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <span><strong>{{ $errors->first('email') }}</strong></span>
        @endif
        <label for="password">{{ __('Mot de passe') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
            <span><strong>{{ $errors->first('password') }}</strong></span>
        @endif
        <label for="password-confirm">{{ __('Confirmation mot de passe') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        <div>
            <button type="submit">{{ __("S'enregistrer") }}</button>
        </div>
    </form>        
</div>
@endsection
