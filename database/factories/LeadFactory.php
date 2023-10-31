<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\Employee;
use App\Models\Service;
use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->numerify('#######'),
            'description'=>$this->faker->text(),
            'address'=>$this->faker->word(),
            'profit_amount'=>$this->faker->numberBetween(0,20),
            'state'=>$this->faker->randomElement(['Undefined','No_Unswer','Meeting','Follow_up','Cold','Deal']),
            'arrive_date'=>$this->faker->date(),
            'service_id'=>Service::all()->random()->id,
            'employee_id'=>Employee::all()->random()->id,
            'source_id'=>Source::all()->random()->id,
            'campaign_id'=>Campaign::all()->random()->id,

        ];
    }
}
