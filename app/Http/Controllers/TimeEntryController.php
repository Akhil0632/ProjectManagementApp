<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeEntry;
use App\Models\Task;

class TimeEntryController extends Controller
{
    public function index()
    {
        $timeEntries = TimeEntry::with('task.project')->get();
        $tasks = Task::with('project')->get();
        $projects = Task::with('project')->select( 'name')->get();

        return view('time_entries.index', compact('timeEntries', 'tasks', 'projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'hours' => 'required|numeric',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        TimeEntry::create($request->all());

        return redirect()->route('time_entries.index');
    }
}
