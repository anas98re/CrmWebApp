<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    protected $hidden=[
        'pivot'
    ];


    public function campaigns(){
        return $this->belongsToMany(Campaign::class,'source_campaigns','source_id','campaign_id','id','id');

    }
}
