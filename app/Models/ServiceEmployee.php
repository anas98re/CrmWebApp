<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEmployee extends Model
{
    use HasFactory;
    protected $fillable=['service_id','employee_id','state'];

    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
