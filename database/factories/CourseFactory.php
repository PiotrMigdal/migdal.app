<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

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
            'thumbnail' => 'thumbnails/p'. rand(1, 10) . '.jpg',
            'platform' => $this->faker->sentence(),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'start_date'  => $this->faker->dateTimeBetween('-5 years', 'now'),
            'finish_date'  => $this->faker->dateTimeBetween('-5 years', 'now'),
            'technologies' => $this->faker->paragraph(),
            'repository' => $this->faker->url(),
            'url' => $this->faker->url(),
        ];
    }
}
