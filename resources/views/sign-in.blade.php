@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 -mt-16">
    <div class="max-w-2xl w-full space-y-8">
        <!-- Sign In Form Container -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg px-8 py-10">

    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Sign In</h1>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Sign In Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                EMAIL ADDRESS <span class="text-red-500">*</span>
            </label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="Enter your email"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
            >
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                PASSWORD
            </label>
            <div class="relative">
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    autocomplete="current-password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                >
                <button
                    type="button"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                    onclick="togglePassword()"
                >
                    <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    <svg id="eye-slash-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Forgot Password -->
        <div class="text-right">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-primary hover:text-blue-800 text-sm font-medium">
                    Forgot Password?
                </a>
            @endif
        </div>

        <!-- Sign In Button -->
        <button
            type="submit"
            class="w-full bg-primary hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200"
        >
            Sign In
        </button>
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
