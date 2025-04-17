<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('tasks'));
    }

    public function tasks()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('dashboard.tasks', compact('tasks'));
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:10|max:1000',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,completed',
        ]);

        // Create task without user association
        Task::create($validated);

        

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
       //$task = Task::findOrFail($task);
        return view('dashboard.index', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,completed',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully!');
    }
}