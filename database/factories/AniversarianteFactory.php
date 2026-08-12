<?php

namespace Database\Factories;

use App\Models\Aniversariante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Aniversariante>
 */
class AniversarianteFactory extends Factory
{
    protected $model = Aniversariante::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'aniversario' => fake()->dateTimeBetween('-80 years', '-1 years'),
        ];
    }
}
