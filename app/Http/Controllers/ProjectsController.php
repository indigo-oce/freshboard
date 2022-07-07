<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
        // return view('projects.index', ['projects' => auth()->user()->projects ]);
    }

    public function show(Project $project)
    {
        if (auth()->id() != $project->owner_id) {
            abort(403);
        }

        return view('projects.show', ['project' => $project]);
    }

    public function store()
    {
        // validate
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // persist
        auth()->user()->projects()->create($attributes);
        // redirect
        return redirect('/projects');
    }
}
