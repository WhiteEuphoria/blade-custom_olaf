@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="wrapper">
    <main class="page">
        <div class="auth-page">
            <div class="auth">
                <div class="logo"><img src="{{ asset('personal-acc/img/logo.svg') }}" alt="logo"></div>
                <form class="auth-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="field__wrapper">
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="button" class="field__icon">
                                <img src="{{ asset('personal-acc/img/icons/eye.svg') }}" alt="eye">
                            </button>
                        </div>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn" type="submit">Login</button>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection