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
        // persist
        Project::create(request(['title', 'description']));
        // redirect
        return redirect('/projects');
    }
}
