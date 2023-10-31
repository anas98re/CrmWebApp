<?php

namespace Database\Seeders;

use App\Models\ReceivedNotification;
use Illuminate\Database\Seeder;

class receivedNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReceivedNotification::factory()->count(50)->create();
    }
}
