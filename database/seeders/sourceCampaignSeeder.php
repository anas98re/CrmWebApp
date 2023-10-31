<?php

namespace Database\Seeders;

use App\Models\SourceCampaign;
use Illuminate\Database\Seeder;

class sourceCampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SourceCampaign::factory()->count(5)->create();
    }
}
