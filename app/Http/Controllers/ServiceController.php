<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\ServiceRequestUpdate;
use App\Http\Requests\UpdateEmployeesByService;
use App\Http\Requests\UpddateEmployeeOfLeadsRequest;
use App\Models\Employee;
use App\Models\Service;
use App\Models\ServiceEmployee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends BaseController
{
    public function edit1(Service $todo)
    {
        $EMPLOYEES1=Employee::all();
        $var[]=$todo->employees;

        // return response()->json(array(
        //     'todo' => $todo,
        //     'EMPLOYEES' => $EMPLOYEES,
        // ));
        // return response()->json([$todo,$EMPLOYEES1]);
        return response()->json($todo);
    }

    public function store1(ServiceRequest $request)
    {
        $todo = Service::find($request->id)->updateOrCreate(
            // ['id'=>$request->id],
            ['name'=>$request->name],
            ['Creation_date'=>$request->Creation_date],
            ['description'=>$request->description],
        );

        return redirect()->back()->with('messages','Done updated');
        // return response()->json($todo);

    }

    public function storer(ServiceRequestUpdate $request)
    {
        // return $request->all();
        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->Creation_date = $request->Creation_date;
        $service->description = $request->description;

        $service->save();
        if ($service) {
            return response()->json(['success'=>'updated new records.']);
        }

        // return redirect()->back()->with('messages', 'Done updated');
        // return response()->json($todo);

    }
    public function destroy1(Service $todo)
    {
        $todo->delete();
        return response()->json('success');
    }

    public function show($id)
    {
        $EmployeeByThisService=ServiceEmployee::where('service_id',$id)->get();
        $Service = Service::with('employees')->find($id);
        // $Service['EmployeeByThisService'];
        // return $Service->employees;
        // $employee=Employee::find(1);
        return response()->json($Service);
    }
    public function index()
    {
        $a[]=0;
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $Services = Service::orderBy('created_at', 'DESC')->get();
            // return $Services[0]->employees ;
            foreach($Services as $Service){
                foreach($Service->employees as $employees  ){
                $a[]=$employees->name;}
            }
            // return $a; department_id
            $employees=Employee::all();
            // $employeesChoose=Employee::where('department_id',3)->get();
            $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
                ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

            return view('Service.services', compact('Services','a','employees','employeesChoose'));
        }
    }
    public function Create()
    {
        $employees=Employee::all();

        return view('Service.AddService',compact('employees'));
    }
        public function store(ServiceRequest $request)
    {
        $service=new Service();
        $service->name=$request->name;
        $service->Creation_date=$request->Creation_date;
        $service->description=$request->description;

        $service->save();

        foreach($request->employees as $employee){
        $ServicesEmployee=ServiceEmployee::Create([
                    'service_id'=>$service->id,
                    'employee_id'=>$employee
                ]);}

                if ($service) {
                    return response()->json(['success'=>'Added new records.']);
                }
    }
    public function edit($id)
    {
        $varService = Service::find($id);
        return view('Service.EditService', compact('varService'));
    }

    public function update(ServiceRequest $request, $id)
    {
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $Service = Service::find($id);

            $Service->name = $request->name;
            $Service->Creation_date = $request->Creation_date;
            $Service->description = $request->description;

            $Service->save();
            return redirect()->route('Services');
        }
    }

    public function serviceEmployeeChange($id)
    {
        $employees=Employee::all();
        $Service = Service::find($id);
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
                    ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        return view('Service.serviceEmployeeChange',compact('Service','employees','employeesChoose'));
    }

    public function convertService($id,UpdateEmployeesByService $request )
    {
        $service = Service::find($id);
        DB::table("service_employees")->where('service_id',$service->id)->delete();
        if($request->employees!=null){
        foreach($request->employees as $employee){
            $ServicesEmployee=ServiceEmployee::Create([
                        'service_id'=>$service->id,
                        'employee_id'=>$employee
                    ]);}}
                    else{
                        return redirect()->route('Services');
                    }

                    return redirect()->route('Services');
    }
    public function destroy(Request $request)
    {
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $varService = Service::find($request->service_delete_id);

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
    //         $varService = Service::find($id);

    //         $varService->delete();
    //         return redirect()->back()->with('messages','Done Delete');
    //         // return redirect()->route('Services');
    //     }
    // }
    public function serviceSearch(Request $request)
    {
        $employee = auth('sanctum')->user();
        if ($employee->role == Constants::SALES_EMPLOYEE_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            if ($request->search_value != null) {
                $result = $this->search(new Service(), ['name', 'description'], $request->search_value);
                return $this->sendResponse($result, 'done');
            }
        }
    }

    public function filterService(Request $request)
    {
        // $result = $this->filter(new Service());
        $employee = auth('sanctum')->user();
        if ($employee->role == Constants::SALES_EMPLOYEE_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            if ($request->has('date1')) {
                $result = $request->whereBetween('date', [$request->date1, $request->date2]);
            }

            $result->splice($result->count(), 0);
            return $this->sendResponse($result, 'done');
        }
    }
}
