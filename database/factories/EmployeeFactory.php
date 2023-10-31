<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    protected $model=\App\Models\Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'Job_title' => $this->faker->text(),
            // 'email' => $this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->numerify('########'),
            'address'=>$this->faker->text(),
            // 'isAdmin'=>$this->faker->randomElement([0,1]), Role::all()->random()->id
            'department_id'=>Department::all()->random()->id,
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
            'user_id'=>User::all()->random()->id,
            'description'=>$this->faker->text()
        ];
    }
}
