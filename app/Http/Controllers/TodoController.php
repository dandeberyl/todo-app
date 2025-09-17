<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
        $todos = Todo::paginate(10);

    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|max:255']);
        Todo::create([
            'title' => $request->title,
            'completed' => false,
        ]);
        return redirect()->route('todos.index');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate(['title' => 'required']);
        $todo->update([
            'title' => $request->title,
            'completed' => $request->has('completed'),
        ]);
        $this->authorize('update', $todo);
        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        $this->authorize('delete', $todo);
        return redirect()->route('todos.index');
    }
    
}
