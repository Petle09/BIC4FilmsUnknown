@extends('layouts.app')

@section('content')
    <section class="section is-fullheight">
        <div class="container">
            <div class="columns is-multiline">
                <div class="card custom-card column is-half is-offset-one-quarter">
                    <header class="card-header">
                        <h1 class="card-header-title is-centered">{{ __('Passwort zurücksetzen') }}</h1>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="field">
                                    <label class="label" for="email">{{ __('E-Mail Addresse') }}</label>
                                    <div class="control">
                                        <input name="email" class="input @error('email') is-danger @enderror"
                                               type="email" id="email"
                                               value="{{ $email ?? old('email') }}" required autocomplete="email"
                                               autofocus>
                                    </div>
                                    @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label" for="password">{{ __('Passwort') }}</label>
                                    <div class="control">
                                        <input name="password" class="input @error('password') is-danger @enderror"
                                               type="password" id="password"
                                               required autocomplete="new-password">
                                    </div>
                                    @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label" for="password-confirm">{{ __('Passwort Bestätigen') }}</label>
                                    <div class="control">
                                        <input class="input" type="password"
                                               id="password-confirm" name="password_confirmation"
                                               required autocomplete="new-password">
                                    </div>
                                </div>

                                <button type="submit" class="button is-large is-outlined is-fullwidth">
                                    {{ __('Link zum zürücksetzen des Passwortes versenden') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
