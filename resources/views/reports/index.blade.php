@extends('layouts.app')

@section('content')

<div class="filter-container">
    <label for="projectFilter" class="filter-label">Filter by Project:</label>
        <select id="projectFilter" class="filter-select">
            <option value="">All Projects</option>
            @foreach($projects as $project)
                <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
    </select>
</div>

    <div id="reportTable" class="container text-center">
        @include('reports.partials.table', ['projects' => $projects])
    </div>


@endsection
