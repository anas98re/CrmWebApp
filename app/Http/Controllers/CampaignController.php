<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\CampaignRequest;
use App\Http\Requests\CampaignUpdateRequest;
use App\Models\Campaign;
use App\Models\Employee;
use App\Models\Lead;
use App\Models\Service;
use App\Models\Source;
use App\Models\SourceCampaign;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CampaignController extends BaseController
{
    public function editt(Campaign $todo)
    {
        return response()->json($todo);
    }
    public function storer(CampaignUpdateRequest $request)
    {
        $Lead = Campaign::find($request->id);
        $Lead->name = $request->name;
        $Lead->start_date = $request->start_date;
        $Lead->end_date = $request->end_date;
        $Lead->state = $request->state;
        $Lead->num_leads = $request->num_leads;
        $Lead->remaining_lead = 1;
        $Lead->service_id = $request->service_id;
        $Lead->description = $request->description;

        $Lead->save();

        return redirect()->back()->with('messages','Done updated');
        // return response()->json($todo);

    }
    public function show($id)
    {

            $Campaign = Campaign::with('service','leads','source')->findOrFail($id);
            foreach($Campaign->leads as $leads){
                $e[]=$leads->name;
            }
            // return $e;
            return response()->json($Campaign);
            // $Campaign['servicesNmae'] = $Campaign->service->name;
            // return view('Campaign.show', compact('Campaign'));
        // }
    }
    public function index()
    {
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $Campaigns = Campaign::orderBy('created_at', 'DESC')->get();
            $services = Service::all();
            $source=Source::all();
            return view('Campaign.campaign', compact('Campaigns','services','source'));
        }
    }
    public function Create()
    {
        $services = Service::all();
        $source=Source::all();
        return view('Campaign.AddCampaign',compact('services','source'));
    }
    public function store(CampaignRequest $request)
    {
        // if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
        //     return view('home');
        // } else {


            $Campaign=new Campaign();
            $Campaign->name=$request->name;
            $Campaign->start_date=$request->start_date;
            $Campaign->end_date=$request->end_date;
            $Campaign->state=$request->state;
            $Campaign->num_leads=$request->num_leads;
            $Campaign->service_id=$request->service_id;
            $Campaign->description=$request->description;
            // $Campaign->source_id=$request->source_id;
            $Campaign->remaining_lead=1;

            $Campaign->save();
            // return $Campaign;

            SourceCampaign::create([
                'source_id'=>$request->source_id,
                'campaign_id'=>$Campaign->id
            ]);
            return response()->json($Campaign);
            // return back()->with('success', 'Added');
        // }
    }
        
    public function edit($id)
    {
        $Campaign = Campaign::find($id);
        $services = Service::all();
        return view('Campaign.EditCampaign', compact('Campaign','services'));
    }
    public function update(CampaignUpdateRequest  $request, $id)
    {
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $Campaign = Campaign::findOrFail($id);
            $Campaign->name = $request->name;
            $Campaign->start_date = $request->start_date;
            $Campaign->end_date = $request->end_date;
            $Campaign->state = $request->state;
            $Campaign->num_leads = $request->num_leads;
            $Campaign->remaining_lead = 1;
            $Campaign->service_id = $request->service_id;
            $Campaign->description = $request->description;
            $Campaign->save();

            return redirect()->route('Campaigns');
        }
    }

    public function changeStatusToPause($id)
    {
        $Campaign = Campaign::findOrFail($id);
        $Campaign->state = 'pause';
        $Campaign->save();
        return redirect()->route('Campaigns');
    }
    public function changeStatusToActive($id)
    {
        $Campaign = Campaign::findOrFail($id);
        $Campaign->state = 'active';
        $Campaign->save();
        return redirect()->route('Campaigns');
    }
    public function changeStatusToStop($id)
    {
        $Campaign = Campaign::findOrFail($id);
        $Campaign->state = 'stop';
        $Campaign->save();
        return redirect()->route('Campaigns');
    }
    // public function changeStatusToReactive($id)
    // {
    //     $Campaign = Campaign::findOrFail($id);
    //     $Campaign->state = 'reactive';
    //     $Campaign->save();
    //     return redirect()->route('Campaigns');
    // }

    public function FilterCampaignsByState($req)
    {
        $services = Service::all();
        $source=Source::all();
        $Campaigns = Campaign::where('state',$req)->get();
        return view('Campaign.campaign', compact('Campaigns','services','source'));
    }
    public function FilterCampaignsBySource($req)
    {
        $a[]=null;
        $nameOfServices[]=null;
        $Campaigns = DB::table('sources')->where('sources.name', $req)
            ->Join('source_campaigns', 'source_campaigns.source_id', '=', 'sources.id')
            ->join('campaigns', 'campaigns.id', '=', 'source_campaigns.campaign_id')->get();
            foreach($Campaigns as $Campaign){
                $a[]=$Campaign->service_id;
            }
            $services=Service::whereIn('id',$a)->get();
            foreach($services as $service){
                $nameOfServices[]=$service->name;
            }
            $services = Service::all();
            $source=Source::all();
            // return    $Campaigns->service_id;
        return view('Campaign.campaignWithFilter', compact('Campaigns','nameOfServices','source','services'));
    }

    public function getPageFilter()
    {
        $leads = Lead::all();
        $sources = Source::all();
        $employees = Employee::all();
        return view('Campaign.FilterCampains', compact('employees', 'sources', 'leads'));
    }
    public function FilterCampaigns(Request $request)
    {
        // return $request->all();
        $employees = Employee::all();
        // if ($request->first_date != null) {
        //     $validated = $request->validate([
        //         'second_date' => 'required|after:first_date',
        //     ]);
        // }

        // if ($request->second_date != null) {
        //     $validated = $request->validate([
        //         'first_date' => 'required|before:second_date',
        //     ]);
        // }
        // if ($request->first_date == 'null' && $request->second_date == 'null') {
        //     $Leads = Lead::whereIn('state', $request->state)->whereIn('source_id', $request->source_id)->get();
        // }
        // return count( $request->all());
        // if ($request->all() != null) {
        //     $Campaigns = Campaign::where('start_date', '>=', $request->first_date)->where('start_date', '<=', $request->second_date)->where('end_date', '>=', $request->first_date)->where('end_date', '<=', $request->second_date)->whereIn('source_id', $request->source_id)->get();
        // }

        $Campaigns = DB::table('sources')->whereIn('sources.id',  $request->source_id)
            ->Join('source_campaigns', 'source_campaigns.source_id', '=', 'sources.id')
            ->join('campaigns', 'campaigns.start_date', '>=', $request->first_date_By_Start_Date)
            ->where('start_date', '<=', $request->second_date_By_Start_Date)
            ->where('end_date', '>=', $request->first_date_By_End_Date)
            ->where('end_date', '<=', $request->second_date_By_End_Date)
            ->get();
        //    return $request->all();
        // }elseif($request->arrive_date){

        // }

        return view('Campaign.campaign', compact('Campaigns', 'employees'));
    }
    // public function filterCampaign(Request $request)
    // {
    //     $employee = auth('sanctum')->user();
    //     if ($employee->role == Constants::SALES_EMPLOYEE_ID) {
    //         return $this->sendError('you do not have permissions');
    //     } else {
    //         $collection = new Collection();
    //         $collection = Campaign::all();
    //         foreach (request()->query() as $query => $value) {
    //             if (isset($query, $value)) {
    //                 if ($query == 'service') {
    //                     $service = Service::where('name', $value)->get()->first();
    //                     $collection = $collection->where('service_id', $service->id);
    //                     continue;
    //                 } else if ($query == 'source') {
    //                     $source = Source::where('name', $value)->get()->first();
    //                     $sourceCampaign = SourceCampaign::where('source_id', $source->id);
    //                     for ($i = 0; $i < count($collection); $i++) {
    //                         if (!$sourceCampaign->contains($collection[$i]->id)) {
    //                             $collection->forget($collection[$i]->id);
    //                         }
    //                     }
    //                     continue;
    //                 } else if ($query == 'start_date1') {
    //                     $collection = $collection->whereBetween('start_date', [$request->start_date1, $request->start_date2]);
    //                 } else if ($query == 'end_date1') {
    //                     $collection = $collection->whereBetween('end_date', [$request->end_date1, $request->end_date2]);
    //                 }
    //                 $collection = $collection->where($query, $value);
    //             }
    //         }
    //         return $this->sendResponse($collection, 'done');
    //     }
    // }


    public function destroy(Request $request)
    {
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $varService = Campaign::find($request->Campaign_delete_id);

            $varService->delete();
            return redirect()->back()->with('messages','Done Delete');
            // return redirect()->route('Services');
        }
    }
    // public function destroy($id)
    // {
    //     if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
    //         return view('home');
    //     } else {
    //         $Campaign = Campaign::destroy($id);

    //         return redirect()->route('Campaigns');
    //     }
    // }


    public function compaignSearch(Request $request)
    {
        $employee = auth('sanctum')->user();
        if ($employee->role == Constants::SALES_EMPLOYEE_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            if ($request->search_value != null) {
                $result = $this->search(new Campaign(), ['name', 'description'], $request->search_value);
                return $this->sendResponse($result, 'done');
            }
        }
    }
}
