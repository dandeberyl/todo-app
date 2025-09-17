<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Todo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Add Todo</h1>

        <form method="POST" action="{{ route('todos.store') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-2">Task Title</label>
                <input type="text" name="title" placeholder="Enter task" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('todos.index') }}"
                   class="text-gray-600 hover:text-gray-800 underline text-sm">← Back</a>

                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg font-medium">
                    Save
                </button>
            </div>
        </form>
    </div>
</body>
</html>
