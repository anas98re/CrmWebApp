<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class VillaFactory extends Factory
{
    protected $model=\App\Models\villa::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'numberOfRooms' => $this->faker->numberBetween(1, 10),
            'address' => $this->faker->address,
            'Region' => $this->faker->word,
            'price' => $this->faker->numberBetween(1000, 10000),
            'phoneNumber' => $this->faker->phoneNumber,
            'note' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'space' => $this->faker->numberBetween(100, 1000),
            'rentOrSell' => $this->faker->randomElement(['Availabl', 'rent', 'Sell', 'other']),
            'generalType' => $this->faker->randomElement(['villa', 'apartment', 'other']),
            'srecialType' => $this->faker->randomElement(['commercial', 'residential', 'investment', 'other']),
            'employee_id' => null,
        ];
    }
}
