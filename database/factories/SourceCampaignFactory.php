<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class SourceCampaignFactory extends Factory
{
    protected $model=\App\Models\SourceCampaign::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'source_id'=>Source::all()->random()->id,
            'campaign_id'=>Campaign::all()->random()->id,
        ];
    }
}
