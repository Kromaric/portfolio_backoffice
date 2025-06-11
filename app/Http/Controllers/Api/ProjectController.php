<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::with(['category', 'technologies'])
            ->orderByDesc('created_at')
            ->paginate(10);

        return response()->json($projects);
    }

    public function show($id)
    {
        $project = Project::with(['category', 'technologies'])->findOrFail($id);

        return response()->json($project);
    }
}
