<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceivedNotificationFactory extends Factory
{
    protected $model=\App\Models\ReceivedNotification::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receiver_id'=>Employee::all()->random()->id,
            'notification_id'=>Notification::all()->random()->id
        ];
    }
}
