<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
    }

    public function show()
    {
        return view('projects.show', ['project' => Project::findOrFail(request('project'))]);
    }

    public function store()
    {
        // validate
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $attributes['owner_id'] = auth()->id();

        // persist
        Project::create($attributes);
        // redirect
        return redirect('/projects');
    }
}
