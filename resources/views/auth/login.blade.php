@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center flex-column">
        <h3 class="mb-5">{{ __('Se connecter pour accéder au Tableau de Bord') }}</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input
                class="rounded-0 border-0 shadow form-control @error('email') is-invalid @enderror"
                id="email"
                name="email" value="{{ old('email') }}" required autocomplete="email"
                placeholder="Entrer votre email"
                type="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password"
                type="password"
                class="rounded-0 border-0 shadow form-control @error('password') is-invalid @enderror"
                placeholder="Entrer votre mot de passe"
                name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit" class="btn btn-primary btn-custom rounded-0">
                {{ __('Se connecter') }}
            </button>
            <div class="form-group row mb-0 mx-0">
                <div class="col-md-5">
                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="remember"
                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Se souvenir') }}
                        </label>
                    </div>
                </div>
                <div class="col-md-7">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
