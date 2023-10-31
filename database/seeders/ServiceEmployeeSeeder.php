<?php

namespace Database\Seeders;

use App\Models\ServiceEmployee;
use Illuminate\Database\Seeder;

class ServiceEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceEmployee::factory()->count(5)->create();
    }
}
