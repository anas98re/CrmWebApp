<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=['name','Creation_date','description'];

    public function campaigns()
    {
        return $this->hasMany(Campaign::class,'service_id','id');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class,'service_id','id');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class,'service_employees');
    }
    

}
