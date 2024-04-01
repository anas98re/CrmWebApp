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

    // public function getActivitylogOptions(): LogOptions
    // {
    //     $request = app(Request::class);
    //     $routePattern = $request->route()->uri();
    //     $ip = $request->ip();
    //     $user = auth('sanctum')->user();
    //     $userName = $user ? $user->nameUser : null;
    //     return LogOptions::defaults()
    //         ->logOnly(['*'])
    //         ->logOnlyDirty()
    //         ->useLogName('agent_comments Log')
    //         ->setDescriptionForEvent(function (string $eventName) use ($routePattern, $ip, $userName) {
    //             // Provide the description for the event based on the event name, route pattern, and IP
    //             if ($eventName === 'created') {
    //                 return "agent_comments created by $userName, using route: $routePattern from IP: $ip.";
    //             } elseif ($eventName === 'updated') {
    //                 return "agent_comments updated by $userName, using route: $routePattern from IP: $ip.";
    //             } elseif ($eventName === 'deleted') {
    //                 return "agent_comments deleted by $userName, using route: $routePattern from IP: $ip.";
    //             }

    //             // Default description if the event name is not recognized
    //             return "agent_comments action occurred by $userName, using route: $routePattern from IP: $ip.";
    //         });
    // }
}
