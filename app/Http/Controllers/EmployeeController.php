<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\employeeRequest;
use App\Http\Requests\employeeUpdateRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Employee;
use App\Models\Service;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class   EmployeeController extends BaseController
{
    public function editByBOB(Employee $todo)
    {
        // $val1=$todo;
        // $val2=$todo->user;
        $var[]=$todo;
        $var[]=$todo->user;
        return response()->json($todo);
    }
    public function storeBYBOB(Request $request)
    {
        // return $request->all();

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
            $user->password = Hash::make($request->password);
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
    public function show($id)
    {

        $employee = Employee::with('department','user')->findOrFail($id);
        // $employee->services;
        return response()->json($employee);
        // return view('Employee.show', compact('employee'));
        // }
    }
    public function getEmployees()
    {

        // return FacadesAuth::user();
        if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {

            $employees = Employee::orderBy('created_at', 'DESC')->get();
            return view('Employee.Employees', compact('employees'));
        }
    }

    public function Create()
    {
        if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {
            return view('Employee.AddEmployee');
        }
    }
    public function store(employeeRequest $request)
    {
        if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $User = User::create($data);
            if ($request->role == 1) {
                $Employee = Employee::create([
                    'name' => $User->name,
                    'user_id' => $User->id,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'description' => $request->description,
                    'Job_title' => $request->Job_title,
                    'department_id' => 1
                ]);
            }
            if ($request->role == 2) {
                $Employee = Employee::create([
                    'name' => $User->name,
                    'user_id' => $User->id,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'description' => $request->description,
                    'Job_title' => $request->Job_title,
                    'department_id' => 2
                ]);
            }
            if ($request->role == 3) {
                $Employee = Employee::create([
                    'name' => $User->name,
                    'user_id' => $User->id,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'description' => $request->description,
                    'Job_title' => $request->Job_title,
                    'department_id' => 3
                ]);
            }
            // $Employee = Employee::create([
            //     'name' => $User->name,
            //     'user_id' => $User->id,
            //     'phone' => $request->phone,
            //     'address' => $request->address,
            //     'description' => $request->description,
            // ]);
            $Employee->save();
            // return view('Employee.AddEmployee');
            return redirect()->route('getEmployees')->with('success', 'Done');
        }
    }


    public function Edit($id)
    {
        if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {
            $user = User::find($id);
            $varEmployee = Employee::find($user->id);
            return view('Employee.EditEmployee', compact('varEmployee', 'user'));
        }
    }


    public function update(employeeUpdateRequest $request, $id)
    {
        // return $request->all();
        if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {
            $user = User::find($id);

            $varEmployee = Employee::where('user_id', $user->id)->first();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role = $request->role;
            $user->save();

            if ($request->role == 1) {
                $varEmployee->name = $user->name;
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

            return view('Employee.EditEmployee', compact('varEmployee', 'user'));
        }
    }


    // public function destroy($id)
    // {
    //     if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
    //         return view('home');
    //     } else {
    //         $varEmployee = Employee::find($id); // you must add  onDelete('cascade') in Employee table

    //         $varEmployee->delete();
    //         return back()->with('success', 'Deleted');
    //     }
    // }
    public function destroy(Request $request)
    {
        if (FacadesAuth::user()->role != Constants::ADMIN_ID) {
            return view('home');
        } else {
            $varService = Employee::find($request->employee_delete_id);

            $varService->delete();
            return redirect()->back()->with('messages','Done Delete');
            // return redirect()->route('Services');
        }
    }

    public function employeeSearch(Request $request)
    {
        if ($request->search_value != null) {
            $result = $this->search(new Employee(), ['name', 'email', 'phone', 'description'], $request->search_value);
            return $this->sendResponse($result, 'done');
        }
    }
}
