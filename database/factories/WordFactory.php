<?php

namespace Database\Factories;

use App\Models\Word;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Word::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        try {

            return [
                'key' => $this->faker->word(),
                'word' => $this->faker->word(),
                'category' => $this->faker->randomLetter(),
                'source' => $this->faker->word(),


            ];
        } catch (\Throwable $th) {
            return [
                'key' => Str::random(10),
                'word' => Str::random(10),
                'category' => Str::random(4),
                'source' => Str::random(10) . '.com/' . Str::random(5) . '/' . Str::random(4),
            ];
        }
    }
}
