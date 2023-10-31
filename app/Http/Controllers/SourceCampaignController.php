<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Source;
use Illuminate\Http\Request;

class SourceCampaignController extends BaseController
{

    public function index()
    {
        $source=Source::find('1');
        $Campaigns  = $source->campaigns;
        return view('Campaign.campaign',compact('Campaigns'));
    }
}
