<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceEmployeeFactory extends Factory
{
    protected $model=\App\Models\ServiceEmployee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id'=>Service::all()->random()->id,
            'employee_id'=>Employee::all()->random()->id,
        ];
    }
}
