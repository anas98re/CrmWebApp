<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class Employee extends Model
{
    use HasFactory, Notifiable;

    protected $fillable=['name','phone','address','Job_title','description','department_id','user_id'];


    public function notifications(){
        return $this->hasMany(Notification::class,'sender_id','id');
    }

    public function receivedNotifications(){
        return $this->belongsToMany(Notification::class,'received_notifications','receiver_id','notification_id','id','id');
    }

    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function leads(){
        return $this->hasMany(Lead::class,'employee_id','id');
    }
    public function villas(){
        return $this->hasMany(villa::class,'employee_id','id');
    }

    public function services(){
        return $this->belongsToMany(Service::class,'service_employees','employee_id','service_id','id','id');

    }
}
