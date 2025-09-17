<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Todo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Edit Todo</h1>

        <form method="POST" action="{{ route('todos.update', $todo) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Title</label>
                <input type="text" name="title" value="{{ $todo->title }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="flex items-center space-x-2">
                <input type="checkbox" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}
                       class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label class="text-gray-700">Completed</label>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('todos.index') }}"
                   class="text-gray-600 hover:text-gray-800 underline text-sm">← Back</a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium">
                    Update
                </button>
            </div>
        </form>
    </div>
</body>
</html>
