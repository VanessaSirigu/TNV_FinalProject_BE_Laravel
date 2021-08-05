<?php

namespace Database\Factories;

use App\Models\MovieRating;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieRatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MovieRating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Movie rating' => rand(1, 5),
            'User id' => rand(1, 50),
            'Movie id' => rand(1, 30)
        ];
    }
}
