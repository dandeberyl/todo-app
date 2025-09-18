@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl text-purple-800 text-center mb-6">Edit Todo</h1>

        <form method="POST" action="{{ route('todos.update', $todo) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Title</label>
                <input type="text" name="title" value="{{ $todo->title }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                              focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="flex items-center space-x-2">
                <input type="checkbox" name="completed" value="1"
                    {{ $todo->completed ? 'checked' : '' }}
                    class="h-5 w-5 border-2 border-gray-300 rounded 
                           appearance-none checked:bg-purple-600 
                           checked:border-purple-600 
                           checked:after:content-['✔'] 
                           checked:after:text-white 
                           checked:after:flex checked:after:items-center 
                           checked:after:justify-center 
                           focus:outline-none focus:ring-2 focus:ring-purple-400">
                <label class="text-gray-700">Completed</label>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('todos.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg font-medium">
                    Back
                </a>

                <button type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-lg font-medium">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@e
