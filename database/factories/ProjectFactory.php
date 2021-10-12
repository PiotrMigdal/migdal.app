<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->sentence(),
            'thumbnail' => 'thumbnails/small.jpg',
            'purpose' => $this->faker->paragraph(),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'release_date' => $this->faker->date($format = 'Y-m-d', $max='now'),
            'technologies' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'repository' => $this->faker->url(),
            'course_id' => $this->faker->randomNumber(),
        ];
    }
}
