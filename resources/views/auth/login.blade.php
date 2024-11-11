@extends('layouts.frontend')

@section('title', 'Login')

@section('content')
<link rel="icon" href="{{ asset('icons/Mlogo.ico') }}" type="image/x-icon">
<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="login-container">
        <h1 class="login-title">Login</h1>

        <!-- Session Status -->
        <x-auth-session-status class="status-message" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" class="input-label"/>
                <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error-message" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" class="input-label"/>
                <x-text-input id="password" class="input-field" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="error-message" />
            </div>

            <!-- Remember Me -->
            <div class="form-group checkbox-group">
                <label for="remember_me" class="checkbox-label">
                    <input id="remember_me" type="checkbox" class="checkbox-input" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Login Actions -->
            <div class="form-actions">
                <x-primary-button class="login-button">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
    @endsection
