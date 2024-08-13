<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ReportController extends Controller
{
    public function index(Request $request)
    {
        $projectId = $request->input('project_id');
        $projects = Project::with(['tasks' => function ($query) use ($projectId) {
            if ($projectId) {
                $query->where('project_id', $projectId);
            }
        }])->get();

        return view('reports.index', compact('projects'));
    }
}
