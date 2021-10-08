<?php

namespace Database\Factories;

use App\Models\About;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'thumbnail' => 'thumbnails/2HEIrxd8wikoWzavyOWhTNWMFWkPHwO5ejZT5NTD.jpg',
            'excerpt' => '<p>' . implode('</p><p>', $this->faker->paragraphs(4)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(8)) . '</p>'
        ];
    }
}
