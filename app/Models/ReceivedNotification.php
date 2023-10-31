<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivedNotification extends Model
{
    use HasFactory;
    protected $fillable=['receiver_id','notification_id'];
}
