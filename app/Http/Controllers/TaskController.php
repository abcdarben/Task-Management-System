<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index() {
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }

    public function create() {
        return view('task.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'task_name' => 'required',
            'description' => 'required',
            'deadline' => 'required|date'
        ]);

        $newTask = Task::create($data);

        return redirect(route('task.index'))->with('success', 'Task created successfully!');

    }

    public function edit(Task $task) {
        return view('task.edit', ['task' => $task]);
    }

    public function update(Task $task, Request $request) {
        $data = $request->validate([
            'task_name' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
            'status' => 'required'
        ]);

        $task->update($data);

        return redirect(route('task.index'))->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task) {
        $task->delete();

        return redirect(route('task.index'))->with('success', 'Task deleted successfully!');
    }

}
