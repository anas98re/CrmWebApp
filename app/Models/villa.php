<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villa extends Model
{
    use HasFactory;
    protected $fillable=['name','numberOfRooms','address','Region','price'
    ,'phoneNumber','space','rentOrSell','generalType','srecialType','employee_id','image'];

    public function employees(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

}
