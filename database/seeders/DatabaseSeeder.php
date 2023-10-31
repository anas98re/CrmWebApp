<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Lead;
use App\Models\Notification;
use App\Models\ReceivedNotification;
use App\Models\Service;
use App\Models\ServiceEmployee;
use App\Models\Source;
use App\Models\SourceCampaign;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // Campaign::truncate();
        // Department::truncate();
        // Employee::truncate();
        // Lead::truncate();
        // Notification::truncate();
        // ReceivedNotification::truncate();
        // Service::truncate();
        // ServiceEmployee::truncate();
        // Source::truncate();
        // SourceCampaign::truncate();


        // $service=  Service::factory()->count(10)->create();
        // $campaign= Campaign::factory()->count(10)->for($service)->create();
        // $department=  Department::factory()->count(2)->create();
        // $employee=   Employee::factory()->count(10)->for($department)->create();
        // $source=  Source::factory()->count(10)->create();
        // $lead=   Lead::factory()->count(100)->for($service)->for($campaign)->for($source)->create();
        // $notification=   Notification::factory()->count(10)->for($employee)->create();
        // $receivedNotification=   ReceivedNotification::factory()->count(10)->create();
        // $srviceEmployee=  ServiceEmployee::factory()->count(10)->create();
        // $sourceCampaign=  SourceCampaign::factory()->count(10)->create();


    }
}
