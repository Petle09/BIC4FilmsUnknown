@extends('layouts.app')

@section('content')
    <section class="section is-fullheight">
        <div class="container">
            <div class="columns is-multiline">
                <div class="card custom-card column is-half is-offset-one-quarter">
                    <header class="card-header">
                        <h1 class="card-header-title is-centered">{{ __('Registrierung') }}</h1>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="field">
                                    <label class="label" for="name">{{ __('Name') }}</label>
                                    <div class="control">
                                        <input name="name" class="input @error('name') is-danger @enderror"
                                               type="text" id="name"
                                               value="{{ old('name') }}" required autocomplete="name"
                                               autofocus>
                                    </div>
                                    @error('name')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label" for="email">Email</label>
                                    <div class="control">
                                        <input name="email" id="email" class="input @error('email') is-danger @enderror"
                                               type="email" required>
                                    </div>
                                    @error('email')
                                    <p class="help is-danger">Email ist ungültig</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label" for="password">Passwort</label>
                                    <div class="control">
                                        <input name="password" id="password"
                                               class="input @error('password') is-danger @enderror"
                                               type="password"
                                               required>
                                    </div>
                                    @error('password')
                                    <p class="help is-danger">Passwort ist ungültig</p>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label class="label" for="password-confirm">Passwort bestätigen</label>
                                    <div class="control">
                                        <input class="input field-spacer" type="password"
                                               id="password-confirm" name="password_confirmation"
                                               required>
                                    </div>
                                </div>

                                <button type="submit" class="button is-large is-outlined is-fullwidth">
                                    {{ __('Registrieren') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
