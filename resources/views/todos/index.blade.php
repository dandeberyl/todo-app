<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lg p-6">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Todo List</h1>

        <div class="flex justify-end mb-4">
            <a href="{{ route('todos.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
                + Add Task
            </a>
        </div>

        <ul class="space-y-3">
            @forelse($todos as $todo)
                <li class="flex justify-between items-center bg-gray-50 px-4 py-3 rounded-lg shadow-sm">
                    <span class="{{ $todo->completed ? 'line-through text-green-600' : 'text-gray-800' }}">
                        {{ $todo->title }}
                    </span>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('todos.edit', $todo) }}"
                           class="text-blue-600 hover:underline text-sm">Edit</a>
                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="text-center text-gray-500 py-6">No tasks yet.</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
