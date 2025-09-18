@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl text-gray-800 text-center mb-6">Add Todo</h1>

        <form method="POST" action="{{ route('todos.store') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Title</label>
                <input type="text" name="title" placeholder="Enter task" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                              focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('todos.index') }}"
                   class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-lg font-medium">
                    Back
                </a>

                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-medium">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
