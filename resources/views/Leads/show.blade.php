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
    {{-- <div class="container" class="row" style="padding-left: 7%" >
        <a  class="btn btn-primary btn-lg" href="{{ route('getEmployees')}}" role="button">All Employee</a>&emsp;
        <a  class="btn btn-primary btn-lg" href="{{ route('getAllEmployeesIntoSalesDepartment', ['nameOfDepartment' => 'Sales_Department']) }}" role="button">Sales Department</a>&emsp;
        <a  class="btn btn-primary btn-lg" href="{{ route('getAllEmployeesIntoAdDepartment', ['nameOfDepartment' => 'Ad_Department']) }}" role="button"> Ad Department</a>&emsp;
        <a  class="btn btn-primary btn-lg" href="{{ route('getAllAdmins', ['nameOfDepartment' => 'Ad_Department']) }}" role="button">Admins Department</a>
    </div> --}}
    <hr class="container" style="width:68%;text-align:left;margin-left:8%">

    <div class="container" style="padding-right: 35%">

        <div class="container" style="padding-top: 3%; width: 60em;">
            <div class="row">
                <div class="col-xl-6">
                    <div class="alert alert-success" role="alert" style="width: 27em; margin-left: -15px">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> Name: </span> </b></h3>
                        <b>{{ $Lead->name }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">

                        <h3><b><span style="font-family: Sofia;color: #5059fc"> Email: </span> </b></h3>
                        <b>{{ $Lead->email }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> phone: </span> </b></h3>
                        <b>{{ $Lead->phone }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> address: </span> </b></h3>
                        <b>{{ $Lead->address }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> Note: </span> </b></h3>
                        <b>{{ $Lead->description }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> profit_amount: </span> </b></h3>
                        <b>{{ $Lead->profit_amount }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> arrive_date: </span> </b></h3>
                        <b>{{ $Lead->arrive_date }}</b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">



                    </div>
                </div>
                <div style="height: " class="col-xl-6">
                    <div class="alert alert-success" role="alert" style="width: 27em;  margin-left: -15px">
                        <h3><b><span style="font-family: Sofia;color: #5059fc"> service: </span></b></h3>
                        <b>{{ $Lead->service->name }} </b>
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc">source:</span> </h3>
                        {{-- ($employees as $item) --}}
                        {{ $Lead->source->name }}
                        <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                        <h3><b><span style="font-family: Sofia;color: #5059fc">campaign:</span> </h3>
                        {{-- ($employees as $item) --}}
                        {{ $Lead->campaign->name }}

                    </div>
                </div>
            </div>

            <a class="btn btn-primary" href="{{ route('Leads') }}" role="button">back</a>
            <br><br>


        </div>

    </div>
@endsection




{{-- <h3>LEAD NAME: </h3>
{{ $Lead->name }}

</div>
<div class="alert alert-success" role="alert" style="width: 512px; margin-left: -15px">
<h3>service: </h3>
{{ $Lead->service->name }}

</div>
<div class="alert alert-success" role="alert" style="width: 512px; margin-left: -15px">
<h3>source: </h3>
{{ $Lead->source->name }}

</div>
<div class="alert alert-success" role="alert" style="width: 512px; margin-left: -15px">
<h3>campaign: </h3>
{{ $Lead->campaign->name }}
</div> --}}
