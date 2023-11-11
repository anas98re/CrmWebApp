<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\villa;
use Illuminate\Database\Seeder;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // return 1;
        villa::factory()->count(20)->create();
    }
}
