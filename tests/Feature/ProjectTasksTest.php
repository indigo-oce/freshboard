<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTasksTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_add_tasks_to_a_project()
    {
        $project = Project::factory()->create();

        $attributes = Task::factory()->raw();

        $this->post($project->path() . '/tasks', $attributes)
            ->assertRedirect('login');
    }

    public function test_a_user_cannot_add_tasks_to_the_projects_of_others()
    {
        $this->signIn();

        $project = Project::factory()->create([
            'owner_id' => User::factory()->create()
        ]);

        $attributes = Task::factory()->raw();

        $this->post($project->path() . '/tasks', $attributes)
            ->assertStatus(403);

        $this->assertDatabaseMissing('tasks', $attributes);
    }

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

    public function test_a_user_can_update_their_task()
    {
        $this->signIn();

        $project = Project::factory()->create([
            'owner_id' => auth()->user()->id
        ]);

        $task = $project->addTask('First Task!');

        $this->patch($project->path() . "/tasks/" . $task->id, [
            'body' => 'Updated Task!',
            'completed' => true
        ]);

        $this->assertDatabaseHas('tasks', [
            'body' => 'Updated Task!',
            'completed' => true
        ]);
    }

    public function test_tasks_require_a_body()
    {
        $this->signIn();

        $project = Project::factory()->create([
            'owner_id' => auth()->user()->id
        ]);

        $attributes = Task::factory()->raw(['body' => '']);

        $this->post($project->path() . '/tasks', $attributes)
            ->assertSessionHasErrors('body');
    }
}
