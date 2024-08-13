@extends('layouts.app')

@section('content')

<div class="form-container">
    <form action="{{ route('time_entries.store') }}" method="POST">
        @csrf
        <table class="form-table">
            <tr>
                <td><label for="task_id" class="form-label">Select a project and task: </label></td>
                <td>
                    <label>
                        <select name="task_id" id="task_id" class="form-select" required>
                            <option value="" disabled selected>Select a project and task</option>
                            @foreach($tasks as $task)
                                <option value="{{ $task->id }}">{{ $task->project->name }} - {{ $task->name }}</option>
                            @endforeach
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td><label for="hours" class="form-label">Hours</label></td>
                <td><label><input type="number" name="hours" placeholder="Hours" class="form-input" required></label></td>
            </tr>
            <tr>
                <td><label for="date" class="form-label">Date</label></td>
                <td><label><input type="date" name="date" class="form-input" required></label></td>
            </tr>
            <tr>
                <td><label for="description" class="form-label">Description</label></td>
                <td><label><textarea name="description" placeholder="Enter Description" class="form-textarea"></textarea></label></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"><button type="submit">Add Time Entry</button></td>
            </tr>
    </form>
</div>
<div class="container text-center">
    <h2> Add Time Entry for Task</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th colspan="6">
                    <h2>Time Entry</h2>
                </th>
            </tr>
        </thead>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <thead>
            <tr>
                <th>SNo</th>
                <th>Project Name</th>
                <th>Task Name</th>
                <th>Hours</th>
                <th>Date</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($timeEntries as $entry)
                <tr class="text-end">
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-start">{{ $entry->task->project->name }}</td>
                    <td class="text-start">{{ $entry->task->name }}</td>
                    <td>{{ $entry->hours }}</td>
                    <td>{{ \Carbon\Carbon::parse($entry->date)->format('d/m/Y') }}</td>
                    <td class="text-start">{{ $entry->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
