<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historyOfVilla extends Model
{
    use HasFactory;
    protected $fillable=['name','EditDate','OldData','NewData','employee_id','villa_id'];

    public function employees(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

    public function villas(){
        return $this->belongsTo(villa::class,'villa_id','id');
    }
}
