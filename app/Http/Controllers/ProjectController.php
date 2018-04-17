<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use Grpc\Server;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function listProjects()
    {
        $services = Service::all();
        $projects = Project::with('service')->get();

        return view('projects', compact('projects','services'));
    }

    public function detailProject($id)
    {
        $project = Project::with('service')->find($id);

        return view('project-detail', compact('project'));
    }
}
