<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        if (auth()->user()->isNot($project->owner)) {
            abort(403);
        }
        // validate
        request()->validate([ 'body' => 'required']);

        // persist
        $project->addTask(request('body'));
        // redirect
        return redirect($project->path());
    }

    public function update(Project $project, Task $task)
    {
        $task->update([
            'body' => request('body'),
            'completed' => request()->has('completed'),
        ]);

        return redirect($project->path());
    }
}
