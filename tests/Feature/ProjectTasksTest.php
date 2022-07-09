<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Project;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTasksTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_project_can_have_tasks()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $project = Project::factory()->create([
            'owner_id' => auth()->user()->id
        ]);

        $this->post($project->path() . '/tasks', [
            'body' => 'First Task!'
        ]);

        $this->get($project->path())
            ->assertSee('First Task!');
    }
}
