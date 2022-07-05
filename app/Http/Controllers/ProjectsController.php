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

    public function store()
    {
        // validate
        $attributes = request()->validate(['title' => 'required', 'description' => 'required']);
        // persist
        Project::create($attributes);
        // redirect
        return redirect('/projects');
    }
}
