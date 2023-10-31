@extends('LAYOUT')

@section('content')
    {{-- <div class="container" class="row" style="padding-left: 7%">
        <a class="btn btn-primary btn-lg" href="{{ route('getEmployees') }}" role="button">All Employee</a>&emsp;
        <a class="btn btn-primary btn-lg"
            href="{{ route('getAllEmployeesIntoSalesDepartment', ['nameOfDepartment' => 'Sales_Department']) }}"
            role="button">Sales Department</a>&emsp;
        <a class="btn btn-primary btn-lg"
            href="{{ route('getAllEmployeesIntoAdDepartment', ['nameOfDepartment' => 'Ad_Department']) }}" role="button">
            Ad Department</a>&emsp;
        <a class="btn btn-primary btn-lg" href="{{ route('getAllAdmins', ['nameOfDepartment' => 'Ad_Department']) }}"
            role="button">Admins Department</a>
    </div> --}}
    <hr style="width:100%;text-align:left;margin-left:0">
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1 class="display-4">Edit Employee</h1>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>

            </div>
            <div class="row">
                {{-- @php
              $varEmployee = 0;
          @endphp --}}
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                @endif


                <div class="col">
                    <form action="{{ route('employee.update', ['id' => $user->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        {{-- <form action="{{route('employee.update',$varEmployee->id)}}" method="POST" enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">phone</label>
                            <input type="text" name="phone" value="{{ $varEmployee->phone }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">address</label>
                            <input type="text" name="address" value="{{ $varEmployee->address }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">password</label>
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control"
                                id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Job Title</label>
                            <input type="text" name="Job_title" value="{{ $varEmployee->Job_title }}"
                                class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <label for="exampleFormControlInput1">Role</label>
                        <select class="form-control" name="role" value="{{ $user->role }}"
                            id="exampleFormControlSelect1">
                            <option value="1">Admin</option>
                            <option value="2">Ad Employee</option>
                            <option value="3">Sales Employee</option>
                        </select>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Note</label>
                            <input type="text" name="description" value="{{ $varEmployee->description }}"
                                class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        {{-- <div class="form-group">
                <label for="exampleFormControlInput1">department_id</label>
                <input type="text" name="department_id" value="{{$varEmployee->department_id}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div> --}}



                        <div class="row">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">update</button>
                                {{-- <a class="btn btn-primary" href="{{ route('getEmployees') }}" role="button">back</a> --}}

                            </div>&emsp;
                            
                    </form>
                    <div> <a class="btn btn-primary" onclick="history.go(-1)">Back</a></div>
                </div></div>
            </div>
        </div>
    </div>


@endsection
