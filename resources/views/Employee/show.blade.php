@extends('LAYOUT')

@section('content')
    <style>
        .Hello {
            /* font-family: "Times New Roman", Times, serif; */
            color: #5d39ac;
            font-family: "Sofia";
            font-size: 22px;

        }
    </style>
     <div class="container" class="row" style="padding-left: 7%" >
        <a  class="btn btn-primary btn-lg" href="{{ route('getEmployees')}}" role="button">All Employee</a>&emsp;
        <a  class="btn btn-primary btn-lg" href="{{ route('getAllEmployeesIntoSalesDepartment', ['nameOfDepartment' => 'Sales_Department']) }}" role="button">Sales Department</a>&emsp;
        <a  class="btn btn-primary btn-lg" href="{{ route('getAllEmployeesIntoAdDepartment', ['nameOfDepartment' => 'Ad_Department']) }}" role="button"> Ad Department</a>&emsp;
        <a  class="btn btn-primary btn-lg" href="{{ route('getAllAdmins', ['nameOfDepartment' => 'Ad_Department']) }}" role="button">Admins Department</a>
    </div>
    <hr class="container" style="width:68%;text-align:left;margin-left:8%">

<div class="container" style="padding-right: 35%" >

    <div class="container" style="padding-top: 3%; width: 60em;">
        <div class="row">
                <div class="col-xl-6">
                    <div class="alert alert-success" role="alert" style="width: 27em; margin-left: -15px">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> Name: </span>{{ $employee->name }} </b></h3><br>
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> Phone: </span>{{ $employee->phone }} </b></h3>
                        <br>
                        {{-- <h3>Employee Phone: </h3>
                        {{ $employee->phone }} --}}
                        <h3><b><span style="font-family: Sofia; color: #5059fc ;">Note:</span> </h3>
                        <b>{{ $employee->description }}</b>
                        <br>
                        <br>
                        <h3><b><span style="font-family: Sofia;color: #5059fc">address:</span> </h3>
                        <b>{{ $employee->address }}</b>
                    </div>
                 </div>
                 <div class="col-xl-6">
                    <div class="alert alert-success" role="alert" style="width: 27em; margin-left: -15px">

                        <h3><b><span style="font-family: Sofia;color: #5059fc">Services by This Employee:</span> </h3>
                        {{-- ($employees as $item) --}}
                        @foreach ( $employee->services  as $Servies)
                        {{$Servies->name}} <span style="color: red">-</span>
                        @endforeach
                        <br>
                        <br>
                        <h3><b ><span style="font-family: Sofia;color: #5059fc">Leads by This Employee:</span> </h3>
                            {{-- ($employees as $item) --}}
                            @foreach ( $employee->leads  as $leads)
                            {{$leads->name}} <span style="color: red">-</span>
                            @endforeach

                    </div>

                 </div>

        </div>
        <br>
            <a class="btn btn-primary" href="{{ route('getEmployees')}}" role="button">back</a>


    </div>

</div>
@endsection
