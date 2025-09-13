@extends('layouts.app')
@section('title', 'Admin Login')
@section('content')

<div class="wrapper">
    <main class="page">
        <div class="auth-page auth-page--accent">
            <div class="auth">
                <div class="logo"><img src="{{ asset('personal-acc/img/logo.svg') }}" alt="logo"></div>
                <form class="auth-form" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="field">
                        <input type="text" name="login" placeholder="Логин" value="{{ old('login') }}" required>
                        @error('login')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="field__wrapper">
                            <input type="password" name="password" placeholder="Пароль" required>
                            <button type="button" class="field__icon">
                                <img src="{{ asset('personal-acc/img/icons/eye.svg') }}" alt="eye">
                            </button>
                        </div>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection