<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    protected $model=\App\Models\Campaign::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'start_date'=>$this->faker->date(),
            'end_date'=>$this->faker->date(),
            'service_id'=>Service::all()->random()->id,
            'state'=>$this->faker->randomElement(['active','stop','pause']),
            'num_leads'=>15,
            'remaining_lead'=>7,
            'description'=>$this->faker->text()

        ];
    }
}
