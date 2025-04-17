<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $completedCount = Task::where('status', 'completed')->count();
        $inProgressCount = Task::where('status', 'pending')->count(); // or 'in_progress' if that's your status name

        return view('dashboard.index', [
            'tasks' => $tasks,
            'completedCount' => $completedCount,
            'inProgressCount' => $inProgressCount,
        ]);       
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
        return view('dashboard.preview', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('dashboard.edit', compact('task'));
    }

    public function markAsDone(Task $task)
    {
        $task->update([
            'status' => 'completed',
        ]);

        return redirect()->route('tasks.index');
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

        // Redirect back to task list after deletion
        return redirect()->route('task.tasks');
    }

    // Logout functionality
    public function logout(Request $request)
    {
        // Log out the user and clear session data
        Auth::logout();

        // Invalidate the session to prevent session fixation
        $request->session()->invalidate();

        // Regenerate CSRF token to protect against session fixation
        $request->session()->regenerateToken();

        // Redirect to the login page
        return redirect('/');
    }
}
