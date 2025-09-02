@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 -mt-16">
    <div class="max-w-2xl w-full space-y-8">
        <!-- Sign In Form Container -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg px-8 py-10">

    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Sign Up</h1>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Sign In Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Sign Up Link -->
    <div class="mt-6 text-center">
        <p class="text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-primary hover:text-blue-800 font-medium">
                Get Started
            </a>
        </p>
    </div>

    <!-- Divider -->
    <div class="mt-8 mb-6">
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white text-gray-500 font-medium">OR SIGN IN WITH</span>
            </div>
        </div>
    </div>

    <!-- Social Login Buttons -->
    <div class="grid grid-cols-2 gap-4">
        <!-- Google -->
        <button
            type="button"
            class="flex gap-2 items-center justify-center px-4 py-3 border border-primary rounded-lg hover:bg-gray-50 transition-colors duration-200"
        >
            <img src="{{ asset('assets/images/google.svg') }}" alt="">
            <span class="text-primary font-medium">Google</span>
        </button>

        <!-- Amazon -->
        <button
            type="button"
            class="flex gap-2 items-center justify-center px-4 py-3 border border-primary rounded-lg hover:bg-gray-50 transition-colors duration-200"
        >
            <img src="{{ asset('assets/images/amazon.svg') }}" alt="">
            <span class="text-primary font-medium">Amazon</span>
        </button>
    </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        const eyeSlashIcon = document.getElementById('eye-slash-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.add('hidden');
            eyeSlashIcon.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('hidden');
            eyeSlashIcon.classList.add('hidden');
        }
    }
</script>
@endsection
