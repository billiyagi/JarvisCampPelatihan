<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::getTasks();

        return view('dashboard.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id)
    {
        $task = Task::getTaskById($id);
        return view('dashboard.show', [
            'task' => $task
        ]);
    }
}
