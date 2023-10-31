<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceCampaign extends Model
{
    use HasFactory;
    protected $fillable=['source_id','campaign_id'];

}
