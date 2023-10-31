<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\LeadRequest;
use App\Models\Campaign;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Lead;
use \Carbon\Carbon;
use App\Exports\LeadExport;
use App\Http\Requests\EnterEmployee;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\LeadRequestOfSalesEmployee;
use App\Http\Requests\LeadRequestUpdate;
use App\Http\Requests\UpddateEmployeeOfLeadsRequest;
use App\Imports\LeadImport;
use App\Models\Service;
use App\Models\ServiceEmployee;
use App\Models\Source;
use Excel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Empty_;

class LeadController extends BaseController
{

    // public function FilterByEmployee(Lead $todo)
    // {
    //     return response()->json($todo);
    // }
    public function FilterByEmployee($id)
    {
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        $Leads = Lead::where('employee_id', $id)->get();
        return view('Leads.Leads', compact('Leads', 'sources', 'services', 'employees', 'campaigns'));
    }
    public function storeEmployeeForFilter(Request $request)
    {
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        $Leads = Lead::where('employee_id', $request->employee_id)->get();
        // return $Leads;
        // return view('Leads.Leads', compact('Lead'));
        // $Lead->save();
        // return view('Leads.Leads', compact('Leads', 'sources', 'services', 'employees', 'campaigns'));
        return redirect()->back();
        // return response()->json($Leads);

    }
    public function FilterByDate(Lead $todo)
    {
        return response()->json($todo);
    }
    public function editt(Lead $todo)
    {
        return response()->json($todo);
    }
    public function storeLeadsprofitAmount(Request $request)
    {
        $Lead = Lead::find($request->id);

        $Lead->description = $request->description;
        $Lead->profit_amount = $request->profit_amount;
        $Lead->state = $request->state;
        $Lead->save();


        return redirect()->back()->with('messages', 'Done updated');
        // return response()->json($todo);

    }
    public function storer(LeadRequestUpdate $request)
    {
        $Lead = Lead::find($request->id);
        if (Auth::user()->role == Constants::ADMIN_ID) {
            $Lead->name = $request->name;
            $Lead->email = $request->email;
            $Lead->phone = $request->phone;
            $Lead->address = $request->address;
            $Lead->description = $request->description;
            $Lead->profit_amount = $request->profit_amount;
            $Lead->state = $request->state;
            $Lead->arrive_date = Carbon::now();
            $Lead->service_id = $request->service_id;
            $Lead->source_id = $request->source_id;
            $Lead->campaign_id = $request->campaign_id;
            $Lead->employee_id = $request->employee_id;
            $Lead->save();
        } elseif (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            $Lead->description = $request->description;
            $Lead->profit_amount = $request->profit_amount;
            $Lead->state = $request->state;
            $Lead->save();
        } else { //if employee is AdEmployee
            return redirect()->route('Leads');
        }

        return redirect()->back()->with('messages', 'Done updated');
        // return response()->json($todo);

    }

    public function show($id)
    {
        $Lead = Lead::with('employees', 'campaign', 'source', 'service')->findOrFail($id);
        return response()->json($Lead);
        // return view('Leads.show', compact('Lead'));

    }
    public function index()
    {
        $NUMBER_OF_DEALS = Lead::where('state', 'Deal')->get()->count();
        $NUMBER_OF_Cold = Lead::where('state', 'Cold')->get()->count();
        $NUMBER_OF_Follow_up = Lead::where('state', 'Follow_up')->get()->count();
        $NUMBER_OF_Meeting = Lead::where('state', 'Meeting')->get()->count();
        $NUMBER_OF_No_Unswer = Lead::where('state', 'No_Unswer')->get()->count();
        $NUMBER_OF_Undefined = Lead::where('state', 'Undefined')->get()->count();
        $NUMBER_OF_lEADS = Lead::all()->count();
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $a[] = null;
        $user = Auth::user();
        if ($user->role == Constants::SALES_EMPLOYEE_ID) {
            $leads = DB::table('users')->where('users.role', $user->role)
                ->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->get();
            // $a=0;
            foreach ($leads as $Lead) {
                $a[] = $Lead->name;
            }
            $Leads = Lead::whereIn('name', $a)->orderBy('created_at', 'DESC')->get();
            $NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->count();
            $NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Deal')->count();
            $NUMBER_OF_Cold_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Cold')->count();
            $NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Follow_up')->count();
            $NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Meeting')->count();
            $NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'No_Unswer')->count();
            $NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Undefined')->count();
            return view('Leads.Leads', compact(
                'Leads',
                'employees',
                'employeesChoose',
                'sources',
                'services',
                'campaigns',
                'NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Cold_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE'
            ));
        } else {
            $Leads = Lead::orderBy('created_at', 'DESC')->get();
            return view('Leads.Leads', compact(
                'Leads',
                'employees',
                'employeesChoose',
                'sources',
                'services',
                'campaigns',
                'NUMBER_OF_DEALS',
                'NUMBER_OF_Cold',
                'NUMBER_OF_Follow_up',
                'NUMBER_OF_Meeting',
                'NUMBER_OF_No_Unswer',
                'NUMBER_OF_Undefined',
                'NUMBER_OF_lEADS'
            ));
        }
    }
    public function Create()
    {
        // if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
        //     return view('home');
        // } else {
        $source = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        return view('Leads.AddLeads', compact('source', 'services', 'campaigns', 'employees'));
        // }
    }

    public function store(LeadRequest $request)
    {
        $ResultProfirAmount = 0;
        if ($request->state == 'Deal') {
            $ResultProfirAmount = $request->profit_amount;
        } else {
            $ResultProfirAmount = 0;
        }
        $user = Auth::user();
        $EMPLOYEE = Employee::where('user_id', $user->id)->first();
        if ($user->role == Constants::SALES_EMPLOYEE_ID) {
            $Lead = new Lead();
            $Lead->name = $request->name;
            $Lead->email = $request->email;
            $Lead->phone = $request->phone;
            $Lead->address = $request->address;
            $Lead->description = $request->description;
            $Lead->profit_amount = $ResultProfirAmount;
            $Lead->state = $request->state;
            $Lead->arrive_date = Carbon::now();
            $Lead->service_id = $request->service_id;
            $Lead->source_id = $request->source_id;
            $Lead->campaign_id = $request->campaign_id;
            $Lead->employee_id = $EMPLOYEE->id;

            $Lead->save();
            return response()->json($Lead);
        } else {
            $Lead = new Lead();
            $Lead->name = $request->name;
            $Lead->email = $request->email;
            $Lead->phone = $request->phone;
            $Lead->address = $request->address;
            $Lead->description = $request->description;
            $Lead->profit_amount = $ResultProfirAmount;
            $Lead->state = $request->state;
            $Lead->arrive_date = Carbon::now();
            $Lead->service_id = $request->service_id;
            $Lead->source_id = $request->source_id;
            $Lead->campaign_id = $request->campaign_id;
            $Lead->employee_id = $request->employee_id;

            $Lead->save();
            return response()->json($Lead);
        }
        // return back()->with('success', 'Added');


    }

    public function edit($id)
    {
        $lead = Lead::find($id);
        $source = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        return view('Leads.EditLeads', compact('lead', 'source', 'services', 'employees', 'campaigns'));
    }
    public function update(LeadRequestUpdate $request, $id)
    {

        $ResultProfirAmount = 0;
        if (Auth::user()->role == Constants::ADMIN_ID) {


            if ($request->state == 'Deal') {
                $ResultProfirAmount = $request->profit_amount;
            } else {
                $ResultProfirAmount = 0;
            }
            $Lead = Lead::find($id)->update([
                ['id' => $request->id],
                ['name' => $request->name],
                ['email' => $request->email],
                ['phone' => $request->phone],
                ['seen' => $request->seen],
                ['profit_amount' => $ResultProfirAmount],
                ['state' => $request->state],
                ['address' => $request->address],
                ['arrive_date' => Carbon::now()],
                ['description' => $request->description],
                ['employee_id' => $request->employee_id],
                ['service_id' => $request->service_id],
                ['source_id' => $request->source_id],
                ['campaign_id' => $request->campaign_id],
            ]);
            // $Lead->name = $request->name;
            // $Lead->email = $request->email;
            // $Lead->phone = $request->phone;
            // $Lead->profit_amount = $ResultProfirAmount;
            // $Lead->state = $request->state;
            // $Lead->address = $request->address;
            // $Lead->arrive_date = Carbon::now();
            // $Lead->description = $request->description;
            // $Lead->service_id = $request->service_id;
            // $Lead->source_id = $request->source_id;
            // $Lead->campaign_id = $request->campaign_id;
            // $Lead->save();
            // return Redirect::to(url()->previous());
            return redirect()->back();
            // return redirect()->route('Leads');
        } elseif (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            if ($request->state == 'Deal') {
                $ResultProfirAmount = $request->profit_amount;
            } else {
                $ResultProfirAmount = 0;
            }
            $lead1 = Lead::where("id", $id)
                ->update([
                    'profit_amount' => $ResultProfirAmount,
                    'state' => $request->state,
                    'description' => $request->description,
                    // 'address'=>$Lead2->address
                ]);
            return redirect()->route('Leads');
        } else { //if employee is AdEmployee
            return redirect()->route('Leads');
        }
    }



    public function destroy(Request $request)
    {

        $Lead = Lead::find($request->lead_delete_id);
        $Lead->delete();
        // return response()->json( $Lead);
        return redirect()->back()->with('messages', 'Done Delete');        // }
    }


    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("leads")->whereIn('id', explode(",", $ids))->delete();
        return response()->json(['success' => "leads Deleted successfully."]);
    }

    public function leadSearch(Request $request)
    {
        if ($request->search_value != null) {
            $result = $this->search(new Lead(), ['name', 'email', 'phone', 'description'], $request->search_value);
            return $this->sendResponse($result, 'done');
        }
    }

    public function FilterLeadsByStatus($req)
    {
        $a[] = null;
        $NUMBER_OF_DEALS = Lead::where('state', 'Deal')->get()->count();
        $NUMBER_OF_Cold = Lead::where('state', 'Cold')->get()->count();
        $NUMBER_OF_Follow_up = Lead::where('state', 'Follow_up')->get()->count();
        $NUMBER_OF_Meeting = Lead::where('state', 'Meeting')->get()->count();
        $NUMBER_OF_No_Unswer = Lead::where('state', 'No_Unswer')->get()->count();
        $NUMBER_OF_Undefined = Lead::where('state', 'Undefined')->get()->count();
        $NUMBER_OF_lEADS = Lead::all()->count();
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $user = Auth::user();
        if ($user->role != Constants::SALES_EMPLOYEE_ID) {
            $Leads = Lead::where('state', $req)->get();
            if ($req == 'Deal') {
                return view('Leads.LeadsWithProfit', compact(
                    'Leads',
                    'sources',
                    'services',
                    'employeesChoose',
                    'employees',
                    'campaigns',
                    'NUMBER_OF_DEALS',
                    'NUMBER_OF_Cold',
                    'NUMBER_OF_Follow_up',
                    'NUMBER_OF_Meeting',
                    'NUMBER_OF_No_Unswer',
                    'NUMBER_OF_Undefined',
                    'NUMBER_OF_lEADS'
                ));
            }
            return view('Leads.Leads', compact(
                'Leads',
                'sources',
                'services',
                'employees',
                'employeesChoose',
                'campaigns',
                'NUMBER_OF_DEALS',
                'NUMBER_OF_Cold',
                'NUMBER_OF_Follow_up',
                'NUMBER_OF_Meeting',
                'NUMBER_OF_No_Unswer',
                'NUMBER_OF_Undefined',
                'NUMBER_OF_lEADS'
            ));
        } else {
            // $leads = DB::table('users')->where('users.role', $user->role)
            // ->where('users.id', $user->id)
            // ->Join('employees', 'employees.user_id', '=', 'users.id')
            // ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', $req)->get();

            $leads = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', $req)->get();
            // return $leads;
            // $a[]=0;
            foreach ($leads as $Lead) {
                $a[] = $Lead->name;
            }
            // return $a;
            $Leads = Lead::whereIn('name', $a)->orderBy('created_at', 'DESC')->get();
            $NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->count();
            $NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Deal')->count();
            $NUMBER_OF_Cold_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Cold')->count();
            $NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Follow_up')->count();
            $NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Meeting')->count();
            $NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'No_Unswer')->count();
            $NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Undefined')->count();
            if ($req == 'Deal') {
                return view('Leads.LeadsWithProfit', compact(
                    'Leads',
                    'sources',
                    'services',
                    'employeesChoose',
                    'employees',
                    'campaigns',
                    'NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE',
                    'NUMBER_OF_Cold_FOR_THIS_EMPLOYEE',
                    'NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE',
                    'NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE',
                    'NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE',
                    'NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE',
                    'NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE'
                ));
            }
            return view('Leads.Leads', compact(
                'Leads',
                'sources',
                'services',
                'employeesChoose',
                'employees',
                'campaigns',
                'NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Cold_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE'
            ));
        }
    }
    public function FilterLeadsBySource($req)
    {
        $NUMBER_OF_DEALS = Lead::where('state', 'Deal')->get()->count();
        $NUMBER_OF_Cold = Lead::where('state', 'Cold')->get()->count();
        $NUMBER_OF_Follow_up = Lead::where('state', 'Follow_up')->get()->count();
        $NUMBER_OF_Meeting = Lead::where('state', 'Meeting')->get()->count();
        $NUMBER_OF_No_Unswer = Lead::where('state', 'No_Unswer')->get()->count();
        $NUMBER_OF_Undefined = Lead::where('state', 'Undefined')->get()->count();
        $NUMBER_OF_lEADS = Lead::all()->count();
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $user = Auth::user();
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            // $s[]=null;
            $employees = Employee::all();
            $sourcess = Source::where('name', $req)->get();
            $s[] = 0;
            foreach ($sourcess as $source1) {
                $s[] = $source1->id;
            }

            $leads = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->whereIn('source_id', $s)->get();

            $t[] = null;
            foreach ($leads as $lead) { //foreach untit we reach to methods in model
                $t[] = $lead->id;
            }

            $Leads = Lead::whereIn('id', $t)->get();
            $NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->count();
            $NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Deal')->count();
            $NUMBER_OF_Cold_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Cold')->count();
            $NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Follow_up')->count();
            $NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Meeting')->count();
            $NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'No_Unswer')->count();
            $NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Undefined')->count();
            return view('Leads.Leads', compact(
                'Leads',
                'sources',
                'services',
                'employees',
                'employeesChoose',
                'campaigns',
                'NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Cold_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE'
            ));
        } else {
            // $s[]=null;
            $employees = Employee::all();
            $sourcesss = Source::where('name', $req)->get();
            // return $sources;
            $s[] = 0;
            foreach ($sourcesss as $source1) {
                $s[] = $source1->id;
            }
            $Leads = Lead::whereIn('source_id', $s)->get();

            return view('Leads.Leads', compact(
                'Leads',
                'sources',
                'services',
                'employees',
                'employeesChoose',
                'campaigns',
                'NUMBER_OF_DEALS',
                'NUMBER_OF_Cold',
                'NUMBER_OF_Follow_up',
                'NUMBER_OF_Meeting',
                'NUMBER_OF_No_Unswer',
                'NUMBER_OF_Undefined',
                'NUMBER_OF_lEADS'
            ));
        }
    }
    public function EnterEmployeeToFilter(Request $request)
    {
        $NUMBER_OF_DEALS = Lead::where('state', 'Deal')->get()->count();
        $NUMBER_OF_Cold = Lead::where('state', 'Cold')->get()->count();
        $NUMBER_OF_Follow_up = Lead::where('state', 'Follow_up')->get()->count();
        $NUMBER_OF_Meeting = Lead::where('state', 'Meeting')->get()->count();
        $NUMBER_OF_No_Unswer = Lead::where('state', 'No_Unswer')->get()->count();
        $NUMBER_OF_Undefined = Lead::where('state', 'Undefined')->get()->count();
        $NUMBER_OF_lEADS = Lead::all()->count();
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $Leads = Lead::where('employee_id', $request->employee_id)->get();
        return view('Leads.Leads', compact(
            'Leads',
            'sources',
            'services',
            'employees',
            'employeesChoose',
            'campaigns',
            'NUMBER_OF_DEALS',
            'NUMBER_OF_Cold',
            'NUMBER_OF_Follow_up',
            'NUMBER_OF_Meeting',
            'NUMBER_OF_No_Unswer',
            'NUMBER_OF_Undefined',
            'NUMBER_OF_lEADS'
        ));
    }
    //     $Campaigns = Campaign::where('start_date', '>=', $request->first_date)->where('start_date', '<=', $request->second_date)->where('end_date', '>=', $request->first_date)->where('end_date', '<=', $request->second_date)->whereIn('source_id', $request->source_id)->get();
    public function EnterDateToFilter(Request $request)
    {
        $NUMBER_OF_DEALS = Lead::where('state', 'Deal')->get()->count();
        $NUMBER_OF_Cold = Lead::where('state', 'Cold')->get()->count();
        $NUMBER_OF_Follow_up = Lead::where('state', 'Follow_up')->get()->count();
        $NUMBER_OF_Meeting = Lead::where('state', 'Meeting')->get()->count();
        $NUMBER_OF_No_Unswer = Lead::where('state', 'No_Unswer')->get()->count();
        $NUMBER_OF_Undefined = Lead::where('state', 'Undefined')->get()->count();
        $NUMBER_OF_lEADS = Lead::all()->count();
        $sources = Source::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $employees = Employee::all();
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $user = Auth::user();
        if (Auth::user()->role != Constants::SALES_EMPLOYEE_ID) {
            if ($request->first_date == null || $request->second_date == null) {
                $Leads = Lead::all();
            } else {
                $Leads = Lead::where('arrive_date', '>=', $request->first_date)->where('arrive_date', '<=', $request->second_date)->get();
            }
            return view('Leads.Leads', compact(
                'Leads',
                'sources',
                'services',
                'employees',
                'employeesChoose',
                'campaigns',
                'NUMBER_OF_DEALS',
                'NUMBER_OF_Cold',
                'NUMBER_OF_Follow_up',
                'NUMBER_OF_Meeting',
                'NUMBER_OF_No_Unswer',
                'NUMBER_OF_Undefined',
                'NUMBER_OF_lEADS'
            ));
        } else {
            if ($request->first_date == null || $request->second_date == null) {
                $leads = DB::table('users')->where('users.id', Auth::user()->id)
                    ->Join('employees', 'employees.user_id', '=', 'users.id')
                    ->join('leads', 'leads.employee_id', '=', 'employees.id')->get();
            } else {
                $leads = DB::table('users')->where('users.id', Auth::user()->id)
                    ->Join('employees', 'employees.user_id', '=', 'users.id')
                    ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('arrive_date', '>=', $request->first_date)->where('arrive_date', '<=', $request->second_date)->get();
            }
            $t[] = null;
            foreach ($leads as $lead) { //foreach untit we reach to methods in model
                $t[] = $lead->id;
            }

            $Leads = Lead::whereIn('id', $t)->get();
            $NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->count();
            $NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Deal')->count();
            $NUMBER_OF_Cold_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Cold')->count();
            $NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Follow_up')->count();
            $NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Meeting')->count();
            $NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'No_Unswer')->count();
            $NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE = DB::table('users')->where('users.id', $user->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('leads', 'leads.employee_id', '=', 'employees.id')->where('state', 'Undefined')->count();
            return view('Leads.Leads', compact(
                'Leads',
                'sources',
                'services',
                'employees',
                'employeesChoose',
                'campaigns',
                'NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Cold_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE',
                'NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE'
            ));
        }
    }

    public function getPageFilter()
    {
        $leads = Lead::all();
        $sources  = Source::all();
        $employees = Employee::all();
        return view('leads.FilterLeads', compact('employees', 'sources', 'leads'));
    }
    public function FilterLeads(FilterRequest $request)
    {

        $employees = Employee::all();
        $services = Service::all();
        $campaigns = Campaign::all();
        $sources  = Source::all();

        $Leads = Lead::where('arrive_date', '>=', $request->first_date)->where('arrive_date', '<=', $request->second_date)->whereIn('state', $request->state)->whereIn('source_id', $request->source_id)->get();


        return view('Leads.Leads', compact('Leads', 'employees', 'sources', 'services', 'campaigns'));
    }
    // public function filterLeads(Request $request)
    // {
    //     $result = $this->filter(new Lead());
    //     if ($request->has('arrive_date')) {
    //         $request = $request->whereBetween('arrive_date', [$request->date1, $request->date2]);
    //     }
    //     $result->splice($result->count(), 0);
    //     return $this->sendResponse($result, 'done');
    // }

    public function getPageExcel()
    {
        $sources  = Source::all();
        $services = Service::all();
        $employees = Employee::where('department_id', 3)->get();

        return view('Leads.pageExcel', compact('services', 'employees', 'sources'));
    }
    public function exportoExcel(Request $request)
    {
        return Excel::download(new LeadExport($request), 'lead1.xlsx');
    }

    // public function exportocsv()
    // {
    //     return Excel::download(new LeadExport, 'lead.csv');

    // }

    public function importLeads(Request $request)
    {
        $sources  = Source::all();
        $services = Service::all();
        $employees = Employee::where("department_id",3)->get();
        // return $request->all();
        Excel::import(new LeadImport, $request->file('file'));
        return view('Leads.pageExcel',compact('services', 'employees', 'sources'));
    }

    public function downloadExample(){
        return response()->download(\public_path("expample"));
      }
}
