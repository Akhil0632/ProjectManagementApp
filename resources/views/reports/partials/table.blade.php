<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th colspan="3">
                <h2>Reports</h2>
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
            <th>Sno</th>
            <th>Name</th>
            <th>Total hours</th>
        </tr>
    </thead>
    <tbody>
        @php
            $projectIndex = 1;
        @endphp
        @foreach($projects as $project)
            @php
                $totalProjectHours = 0;
                foreach ($project->tasks as $task) {
                    $totalProjectHours += $task->timeEntries->sum('hours');
                }
            @endphp
            @if($totalProjectHours > 1)
                <tr class="text-end">
                    <td>{{ $projectIndex }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $totalProjectHours }}</td>
                </tr>
                @foreach($project->tasks as $task)
                    @php
                        $totalTaskHours = $task->timeEntries->sum('hours');
                    @endphp
                    @if($totalTaskHours > 1)
                        <tr class="text-end">
                            <td></td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $totalTaskHours }}</td>
                        </tr>
                    @endif
                @endforeach
                @php
                    $projectIndex++;
                @endphp
            @endif
        @endforeach
    </tbody>
</table>
