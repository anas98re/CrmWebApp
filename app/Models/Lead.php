<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Campaign;

class Lead extends Model
{
    use HasFactory;
    protected $fillable=['name','email','phone','address','description','profit_amount','state',
                        'arrive_date','service_id','source_id','campaign_id','seen','employee_id'];
   public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function source(){
        return $this->belongsTo(Source::class,'source_id','id');
    }
    public function campaign(){
        return $this->belongsTo(Campaign::class,'campaign_id','id');
    }
    public function employees(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }


    public function getLeads(string $arrive_date1,string $arrive_date2,string $state ,string $id_source){

     $record = DB::table('leads')
            ->Join('campaigns', 'campaigns.id', '=', 'leads.campaign_id')
            ->join('sources', 'sources.id', '=', 'leads.source_id')
            ->join('services', 'services.id', '=', 'leads.service_id')
            ->select('leads.id',DB::raw(' leads.name as name1'),'leads.email','leads.phone','leads.profit_amount','leads.state',
            'leads.address',DB::raw(' leads.arrive_date as date_arrive'),'leads.description',
            'services.name as name4','sources.name as name3','campaigns.name as name2',

            )
            ->where('leads.campaign_id', '=', '2')
            ->get()
            ->toArray();
        return $record;
    }

}
