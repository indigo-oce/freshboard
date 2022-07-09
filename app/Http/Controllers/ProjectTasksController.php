<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        // validate
        request()->validate([ 'body' => 'required']);

        // persist
        $project->addTask(request('body'));
        // redirect
        return redirect('/projects');
    }
}
