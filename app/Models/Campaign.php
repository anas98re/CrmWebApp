<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable=['name','start_date','end_date','state','num_leads','remaining_lead','service_id','description'];
    protected $hidden=[
        'pivot'
    ];

    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }

    public function leads(){
        return $this->hasMany(Lead::class,'campaign_id','id');
    }

    public function source(){
        return $this->belongsToMany(Source::class,'source_campaigns','campaign_id','source_id','id','id');

    }
}
