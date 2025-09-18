@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-purple-700 mb-6">{{ __('Login') }}</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">
                    {{ __('Email Address') }}
                </label>
                <input id="email" type="email" name="email"
                       value="{{ old('email') }}"
                       required autofocus autocomplete="email"
                       class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none @error('email') border-red-500 @enderror">

                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">
                    {{ __('Password') }}
                </label>
                <input id="password" type="password" name="password"
                       required autocomplete="current-password"
                       class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none @error('password') border-red-500 @enderror">

                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center">
                <input id="remember" type="checkbox" name="remember"
                       class="h-4 w-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500"
                       {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="ml-2 block text-gray-600 text-sm">
                    {{ __('Remember Me') }}
                </label>
            </div>

            {{-- Buttons --}}
            <div class="flex items-center justify-between">
                <button type="submit"
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium shadow-md">
                    {{ __('Login') }}
                </button>
            </div>

            {{-- Forgot Password --}}
            @if (Route::has('password.request'))
                <div class="text-center mt-4">
                    <a href="{{ route('password.request') }}"
                       class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
