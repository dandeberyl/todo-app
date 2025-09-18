@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-purple-700 mb-6">{{ __('Register') }}</h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">
                    {{ __('Name') }}
                </label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                       required autofocus autocomplete="name"
                       class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none @error('name') border-red-500 @enderror">

                @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">
                    {{ __('Email Address') }}
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       required autocomplete="email"
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
                       required autocomplete="new-password"
                       class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none @error('password') border-red-500 @enderror">

                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password-confirm" class="block text-gray-700 font-medium mb-1">
                    {{ __('Confirm Password') }}
                </label>
                <input id="password-confirm" type="password" name="password_confirmation"
                       required autocomplete="new-password"
                       class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-purple-500 focus:outline-none">
            </div>

            {{-- Register Button --}}
            <div>
                <button type="submit"
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-medium shadow-md">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
