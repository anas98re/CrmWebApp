<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SourceFactory extends Factory
{
    protected $model=\App\Models\Source::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique()->randomElement(['Facebook', 'Instagram', 'Telegram', 'WhatsApp', 'Tiktok', 'Twitter','Gmail','Other']),
        ];
    }
}
