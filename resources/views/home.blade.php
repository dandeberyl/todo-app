@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-xl bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-purple-700 mb-6">
            {{ __('Dashboard') }}
        </h2>

        @if (session('status'))
            <div class="mb-4 p-3 text-sm text-green-700 bg-green-100 border border-green-300 rounded-lg">
                {{ session('status') }}
            </div>
        @endif

        <p class="text-gray-700">
            {{ __('You are logged in!') }}
        </p>
    </div>
</div>
@endsection
