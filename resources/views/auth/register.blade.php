@section('title', 'Register')
<title>@yield('title') - Marouan Portfolio</title>
<link rel="icon" href="{{ asset('icons/Mlogo.ico') }}" type="image/x-icon">
<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <form method="POST" action="{{ route('register') }}" class="register-form">
        <h1 class="register-title">Register</h1>
        @csrf

        <!-- Name -->
        <div class="input-group">
            <label for="name" class="input-label">{{ __('Name') }}</label>
            <input id="name" class="input-field" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="error-message" />
        </div>

        <!-- Email Address -->
        <div class="input-group">
            <label for="email" class="input-label">{{ __('Email') }}</label>
            <input id="email" class="input-field" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <!-- Password -->
        <div class="input-group">
            <label for="password" class="input-label">{{ __('Password') }}</label>
            <input id="password" class="input-field" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group">
            <label for="password_confirmation" class="input-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" class="input-field" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
        </div>

        <div class="form-actions">
            <a class="login-link" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
            <button type="submit" class="register-button">{{ __('Register') }}</button>
        </div>
    </form>
</x-guest-layout>
