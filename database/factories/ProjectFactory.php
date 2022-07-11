<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'owner_id' => User::factory(),
        ];
    }

    public function createOwnedBy(User $owner, $attributes = null)
    {
        $attributes['owner_id'] = $owner->id;

        return $this->create($attributes);
    }
}
