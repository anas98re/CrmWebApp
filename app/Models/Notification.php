<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable=['sender_id','message'];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'sender_id','id');
    }
}
