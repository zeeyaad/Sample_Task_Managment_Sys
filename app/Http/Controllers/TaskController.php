<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = \App\Models\Task::where('user_id', Auth::id())->get();
        return view('Tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'priority' => 'required|in:low,medium,high',
        ]);

        \App\Models\Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'priority' => $request->priority,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('Tasks.index')->with('success', 'Task added!');
    }

    public function edit($id)
    {
        $task = \App\Models\Task::where('user_id', Auth::id())->findOrFail($id);
        return view('Tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'priority' => 'required|in:low,medium,high',
        ]);

        $task = \App\Models\Task::where('user_id', Auth::id())->findOrFail($id);
        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'priority' => $request->priority,
        ]);

        return redirect()->route('Tasks.index')->with('success', 'Task updated!');
    }
}
