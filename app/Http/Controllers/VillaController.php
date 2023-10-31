<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Http\Requests\UpdateVillaRequest;
use App\Http\Requests\VillaRequest;
use App\Models\Employee;
use App\Models\historyOfVilla;
use App\Models\Service;
use App\Models\villa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VillaController extends Controller
{
    public function index()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.role', Auth::user()->role)
                ->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            // return $a;
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETvillas()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'villa')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'villa')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }


        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETapartments()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'apartment')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'apartment')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETOther()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'other')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'other')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETAvailablVillas()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'villa')->where('rentOrSell', 'Availabl')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'villa')->where('rentOrSell', 'Availabl')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETrentVillas()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'villa')->where('rentOrSell', 'rent')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'villa')->where('rentOrSell', 'rent')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETSellVillas()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'villa')->where('rentOrSell', 'Sell')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'villa')->where('rentOrSell', 'Sell')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETAvailablapartments()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'apartment')->where('rentOrSell', 'Availabl')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'apartment')->where('rentOrSell', 'Availabl')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETrentapartments()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'apartment')->where('rentOrSell', 'rent')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'apartment')->where('rentOrSell', 'rent')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function GETSellapartments()
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::orderBy('created_at', 'DESC')->where('generalType', 'apartment')->where('rentOrSell', 'Sell')->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('generalType', 'apartment')->where('rentOrSell', 'Sell')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function show($id)
    {
        $villa = villa::with('employees')->find($id);
        return response()->json($villa);
    }


    public function store(VillaRequest $request)
    {

        $user = Auth::user();
        $EMPLOYEE = Employee::where('user_id', $user->id)->first();
        $villa = new villa();

        $villa->image = $request->image;
        $villa->name = $request->name;
        $villa->numberOfRooms = $request->numberOfRooms;
        $villa->address = $request->address;
        $villa->Region = $request->Region;
        $villa->price = $request->price;
        $villa->phoneNumber = $request->phoneNumber;
        $villa->space = $request->space;
        $villa->note = $request->note;
        $villa->rentOrSell = $request->rentOrSell;
        $villa->generalType = $request->generalType;
        $villa->srecialType = $request->srecialType;
        if ($user->role == Constants::SALES_EMPLOYEE_ID) {
            $villa->employee_id = $EMPLOYEE->id;
        } else {
            $villa->employee_id = $request->employee_id;
        }

        $villa->save();

        if ($villa) {
            return response()->json(['success' => 'Added new records.']);
        }
    }

    public function edit1(villa $todo)
    {
        $EMPLOYEES1 = Employee::all();
        $var[] = $todo->employees;

        return response()->json($todo);
    }
    public function update(UpdateVillaRequest $request)
    {
        $user = Auth::user();
        $villa = villa::find($request->id);
        $villa->name = $request->name;
        $villa->numberOfRooms = $request->numberOfRooms;
        $villa->address = $request->address;
        $villa->Region = $request->Region;
        $villa->price = $request->price;
        $villa->phoneNumber = $request->phoneNumber;
        $villa->space = $request->space;
        $villa->note = $request->note;
        $villa->rentOrSell = $request->rentOrSell;
        $villa->generalType = $request->generalType;
        $villa->srecialType = $request->srecialType;
        $villa->employee_id = $request->employee_id;

        $VillaUpdated1 = $villa->getDirty();
        $VillaUpdated2 = $villa->getOriginal();
        $villa->save();

        $historyOfVilla = new historyOfVilla();
        $historyOfVilla->name = $villa->name;
        $historyOfVilla->EditDate = Carbon::now();

        $historyOfVilla->OldData = implode(" , ", $VillaUpdated2);
        $historyOfVilla->NewData = implode(" , ", $VillaUpdated1);

        $historyOfVilla->employee_id = $request->employee_id;
        $historyOfVilla->villa_id = $request->id;

        $historyOfVilla->save();


        if ($villa) {
            return response()->json(['success' => 'updated new records.']);
        }
    }

    public function destroy(Request $request)
    {
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('home');
        } else {
            $villa = villa::find($request->service_delete_id);

            $villa->delete();
            return redirect()->back()->with('messages', 'Done Delete');
        }
    }

    public function EnterAdreess(Request $request)
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::where('address', $request->address)->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->where('address', $request->address)->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }

    public function EnterRegion(Request $request)
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::where('Region', $request->Region)->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('Region', $request->Region)->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        // $adress = villa::pluck('address')->all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();

        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }

    public function EnternumberOfRooms(Request $request)
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            $villas = villa::where('numberOfRooms', $request->numberOfRooms)->get();
        } else {
            $a[] = null;
            $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                ->Join('employees', 'employees.user_id', '=', 'users.id')
                ->join('villas', 'villas.employee_id', '=', 'employees.id')->where('numberOfRooms', $request->numberOfRooms)->get();
            foreach ($villas1 as $villa) {
                $a[] = $villa->id;
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
        }
        $employees = Employee::all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function EnterEmployeeToFilter(Request $request)
    {

        $employees = Employee::all();
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $villas = villa::where('employee_id', $request->employee_id)->get();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }

    public function EnterSpace(Request $request)
    {
        $a[] = 0;
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            if ($request->first_space == null || $request->second_space == null) {
                $villas = villa::all();
            } else {
                // $villas = villa::where('space', '>=', $request->first_space)->where('space', '<=', $request->second_space)->get();
                // return $request->second_space;
                $villas1 = villa::whereBetween('space', [$request->first_space, $request->second_space])->get();

                // $villas = villa::query()
                //     ->whereDate('space', '>=', $request->first_space)
                //     ->whereDate('space', '<=', $request->second_space)
                //     ->get();

                foreach ($villas1 as $villa) {
                    $a[] = $villa->id;
                }
                // $a[] = null;
                $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->get();
            }
        } else {
            if ($request->first_space == null || $request->second_space == null) {
                $a[] = null;
                $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                    ->Join('employees', 'employees.user_id', '=', 'users.id')
                    ->join('villas', 'villas.employee_id', '=', 'employees.id')->get();
                foreach ($villas1 as $villa) {
                    $a[] = $villa->id;
                }
            } else {
                $a[] = null;
                $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                    ->Join('employees', 'employees.user_id', '=', 'users.id')
                    ->join('villas', 'villas.employee_id', '=', 'employees.id')->get();
                foreach ($villas1 as $villa) {
                    $a[] = $villa->id;
                }
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->where('space', '>=', $request->first_space)->where('space', '<=', $request->second_space)->get();
        }
        $employees = Employee::all();
        // $adress = villa::pluck('address')->all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function EnterPrice(Request $request)
    {
        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('home');
        } elseif (Auth::user()->role == Constants::ADMIN_ID) {
            if ($request->first_price == null || $request->second_price == null) {
                $villas = villa::all();
            } else {
                $villas = villa::where('price', '>=', $request->first_price)->where('price', '<=', $request->second_price)->get();
            }
        } else {
            if ($request->first_space == null || $request->second_space == null) {
                $a[] = null;
                $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                    ->Join('employees', 'employees.user_id', '=', 'users.id')
                    ->join('villas', 'villas.employee_id', '=', 'employees.id')->get();
                foreach ($villas1 as $villa) {
                    $a[] = $villa->id;
                }
            } else {
                $a[] = null;
                $villas1 = DB::table('users')->where('users.id', Auth::user()->id)
                    ->Join('employees', 'employees.user_id', '=', 'users.id')
                    ->join('villas', 'villas.employee_id', '=', 'employees.id')->get();
                foreach ($villas1 as $villa) {
                    $a[] = $villa->id;
                }
            }
            $villas = villa::whereIn('id', $a)->orderBy('created_at', 'DESC')->where('price', '>=', $request->first_price)->where('price', '<=', $request->second_price)->get();
        }
        $employees = Employee::all();
        // $adress = villa::pluck('address')->all();
        $adress = villa::select('address')->distinct()->pluck('address');
        $region = villa::select('Region')->distinct()->pluck('Region');
        $employeesChoose = DB::table('departments')->where('departments.name', 'Sales')
            ->join('employees', 'employees.department_id', '=', 'departments.id')->get();
        $numberOfRooms = villa::select('numberOfRooms')->distinct()->pluck('numberOfRooms');

        return view('Villas.Villas', compact('villas', 'employees', 'employeesChoose', 'adress', 'region', 'numberOfRooms'));
    }
    public function villasHistoryDate($id)
    {
        $villas_history_date = historyOfVilla::with('employees', 'villas')->orderBy('created_at', 'DESC')->where('villa_id', $id)->get();
        $villa_id = $id;
        return view('Villas.indexHistory', compact('villas_history_date', 'villa_id'));
    }
    public function villasHistoryDateDelete($id)
    {
        $villas_history_date = historyOfVilla::find($id);
        $villas_history_date->delete();
        return redirect()->back();
    }
    public function DeleteAllModifieHistories($id)
    {
        $villas_history_date = historyOfVilla::where('villa_id', $id)->get();
        foreach ($villas_history_date as $villas_history_date) {
            $villas_history_date->delete();
        }

        return redirect()->back();
    }
    public function villas_history_date($id)
    {
        $villas_history_date = historyOfVilla::with('employees', 'villas')->where('villa_id', $id)->get();
        return response()->json($villas_history_date);
    }
}
