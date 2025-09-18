@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-purple-700 mb-6">
            {{ __('Verify Your Email Address') }}
        </h2>

        @if (session('resent'))
            <div class="mb-4 p-3 text-sm text-green-700 bg-green-100 border border-green-300 rounded-lg">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <p class="text-gray-700 mb-4">
            {{ __('Before proceeding, please check your email for a verification link.') }}
        </p>

        <p class="text-gray-700 mb-6">
            {{ __('If you did not receive the email') }},
        </p>

        <form method="POST" action="{{ route('verification.resend') }}" class="text-center">
            @csrf
            <button type="submit"
                    class="text-purple-600 hover:text-purple-800 font-medium underline">
                {{ __('click here to request another') }}
            </button>
        </form>
    </div>
</div>
@endsection
