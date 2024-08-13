@extends('layouts.app')

@section('content')

<div class="container text-center">
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th colspan="3">
                <h2>Manage Projects</h2>
            </th>
        </tr>
        </thead>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <thead>
            <tr>
                <th>SNo</th>
                <th>Project Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr class="text-end">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->status }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>

@endsection
