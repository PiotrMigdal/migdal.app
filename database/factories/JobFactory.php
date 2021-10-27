<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'job_title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(1)) . '</p>',
            'responsibilities' => $this->faker->paragraph(),
            'thumbnail' => 'thumbnails/small.jpg',
            'start_date'  => $this->faker->dateTimeBetween('-10 years', 'now'),
            'finish_date'  => $this->faker->dateTimeBetween('-10 years', 'now'),
        ];
    }
}
