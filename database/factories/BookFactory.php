<?php

namespace Database\Factories;

use App\Models\CategoryExternalBD1;
use App\Models\CategoryExternalBD2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'author' => $this->faker->name(),
            'description' => $this->faker->text,
            'category_id' => (config('database.default_external') === 'external_db1') ? CategoryExternalBD1::factory() : CategoryExternalBD2::factory()
        ];
    }
}
