<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\DepartmentEmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepartmentEmployeeController extends BaseController
{

    public function AllDepartment()
    {
        if (Auth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {
            $departments = Department::all();
            return view('Departments.SalesDepartments', compact('departments'));
        }
    }

    public function editByBOB(Employee $todo)
    {
        $var[]=$todo;
        $var[]=$todo->user;
        return response()->json($todo);
    }
    public function storeBYBOB(Request $request)
    {

        $user = User::find($request->user_id);
        $employee2=Employee::where('user_id',$request->user_id)->first();
        $request->validate([
            'name' => "required|unique:users,name,{$user->id}|string|min:3|max:20",
            'email' => "required|email|unique:users,email,{$user->id}",
            'phone' => "required|unique:employees,phone,{$employee2->id}|min:8|max:15",
            'address' => 'required',
            'password' => 'required|min:8',
            'Job_title' => 'required',
            // 'description' => 'required',
            // 'department_id' => 'required',
            'role' => 'required|in:1,2,3',
            // 'user_id'=>'required'
        ]);

            $varEmployee = Employee::where('user_id', $user->id)->first();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role = $request->role;
            $user->save();

            if ($request->role == 1) {
                $varEmployee->name = $request->name;
                // $varEmployee->user_id = $user->id;
                $varEmployee->phone = $request->phone;
                $varEmployee->address = $request->address;
                $varEmployee->description = $request->description;
                $varEmployee->Job_title = $request->Job_title;
                $varEmployee->department_id = 1;
                $varEmployee->save();
            }
            if ($request->role == 2) {
                $varEmployee->name = $request->name;
                // $varEmployee->user_id = $user->id;
                $varEmployee->phone = $request->phone;
                $varEmployee->address = $request->address;
                $varEmployee->description = $request->description;
                $varEmployee->Job_title = $request->Job_title;
                $varEmployee->department_id = 2;
                $varEmployee->save();
            }
            if ($request->role == 3) {
                $varEmployee->name = $request->name;
                // $varEmployee->user_id = $user->id;
                $varEmployee->phone = $request->phone;
                $varEmployee->address = $request->address;
                $varEmployee->description = $request->description;
                $varEmployee->Job_title = $request->Job_title;
                $varEmployee->department_id = 3;
                $varEmployee->save();
            }

        return redirect()->back()->with('messages', 'Done updated');
        // return response()->json($todo);

    }
    public function getAllEmployeesIntoAdminsDepartment($nameOfDepartment)
    {
        $department=Department::where('name',$nameOfDepartment)->first();
        $employees=Employee::with('department')->where('department_id',$department->id)->get();
        return view('Departments.AdminsDempartment', compact('employees'));
    }

    public function getAllEmployeesIntoAdDepartment($nameOfDepartment)
    {
        $department=Department::where('name',$nameOfDepartment)->first();
        $employees=Employee::with('department')->where('department_id',$department->id)->get();
        return view('Departments.AdDepartment', compact('employees'));
    }
    public function getAllEmployeesIntoSalesDepartment($nameOfDepartment)
    {
        $department=Department::where('name',$nameOfDepartment)->first();
        $employees=Employee::with('department')->where('department_id',$department->id)->get();
        return view('Departments.SalesDepartments', compact('employees'));
    }
    public function getAllAdmins($nameOfDepartment)
    {
        $department=Department::where('name',$nameOfDepartment)->first();
        $employees=Employee::where('department_id',$department->id)->get();
        return view('Departments.AdminsDempartment', compact('employees'));
    }
    public function index(Department $department)
    {
        $employee = auth('sanctum')->user();
        if ($employee->role == Constants::SALES_EMPLOYEE_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            $employees = $department->employees;
            return $this->sendResponse($employees, 'done');
        }
    }


    public function store(Department $department, DepartmentEmployeeRequest $request)
    {

        $employee = auth('sanctum')->user();
        if ($employee->role != Constants::ADMIN_ID) {
            return $this->sendError('you do not have permissions');
        } else {
            $data = $request->all();
            $data['department_id'] = $department->id;
            $employee = Employee::create($data);
            return $this->sendResponse($employee, 'done');
        }
    }
}
