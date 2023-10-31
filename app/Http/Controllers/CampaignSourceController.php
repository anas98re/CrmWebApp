<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CampaignSourceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Campaign $campaign)
    {
        $employee = auth('sanctum')->user();
        if ($employee->role == Constants::SALES_EMPLOYEE_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            $sources = $campaign->source;
            return $this->sendResponse($sources, 'done');
        }
    }
}
