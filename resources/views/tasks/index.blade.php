@extends('layouts.app')

@section('content')

<div class="container text-center">
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th colspan="4">
                    <h2>Manage Tasks</h2>
                </th>
            </tr>
        </thead>
        <tr>
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
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr class="text-end">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->project->name }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach
            </tbody>
    </table>
</div>

@endsection
