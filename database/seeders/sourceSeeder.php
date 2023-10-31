<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Seeder;

class sourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Source::factory()->count(8)->create();
    }
}
