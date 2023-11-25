@extends('layouts.layout')

@section('title', 'Logowanie')

@section('content')
    <div class="container mt-4">
        <div class="form-container">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <!-- Username -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Haslo')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-center mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Zaloguj się') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection