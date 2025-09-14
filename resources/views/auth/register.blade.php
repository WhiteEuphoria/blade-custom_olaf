@extends('layouts.app')
@section('title', 'Registration')
@section('content')

<div class="wrapper">
    <main class="page">
        <div class="auth-page">
            <div class="auth">
                <div class="logo"><img src="{{ asset('personal-acc/img/logo.svg') }}" alt="logo"></div>
                <form action="{{ route('register') }}" method="post" class="auth-form">
                    @csrf
                    <div class="field">
                        <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                        @error('first_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <select name="country" required>
                            <option value="" selected>Country</option>
                            <option value="spain" {{ old('country') == 'spain' ? 'selected' : '' }}>Spain</option>
                            <option value="usa" {{ old('country') == 'usa' ? 'selected' : '' }}>USA</option>
                            <option value="germany" {{ old('country') == 'germany' ? 'selected' : '' }}>Germany</option>
                            <option value="france" {{ old('country') == 'france' ? 'selected' : '' }}>France</option>
                        </select>
                        @error('country')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth')
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
                    <button class="btn" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection