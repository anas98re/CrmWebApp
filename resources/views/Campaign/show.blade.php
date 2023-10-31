@extends('employee.layout')

@section('content')
<style>
    .Hello{
     /* font-family: "Times New Roman", Times, serif; */
     color: #39ac39;
     font-family: "Sofia";
   font-size: 22px;

    }
    </style>

<div class="container" style="padding-top: 3%">
<div class="row">
\
    <div class="col-xl-6" style="background-color:rgba(243,199,0,0.47);">

                                    <div class="row justify-content-center">{{$Campaign}}
                            {{-- <div class="Hello"> --}}
                                {{-- <div class="alert alert-dark" role="alert" >   <h2 ></h2></div> --}}
                                {{-- <div class="alert alert-dark" role="alert" style="width: 25em" ><h5 class="card-text"><span style="color: blue"> salasry Is :</span> {{$varEmployee->salary}}$ --}}
                            {{-- <div class="row justify-content-center">
                            <div class="Hello">
                                <div class="alert alert-dark" role="alert" >  <h2 >{{$Campaign->first_Name}} {{$varEmployee->last_Name}}</h2></div>
                                <div class="alert alert-dark" role="alert" style="width: 25em" ><h5 class="card-text"><span style="color: blue"> salasry Is :</span> {{$varEmployee->salary}}$
                                        <br><span style="color: blue">Hire Date Is :</span> {{$varEmployee->hire_Date}}<br>
                                        <br><span style="color: blue">Qualifications :</span> {{$varEmployee->commisson_Pct}}
                                        </h4></h5> --}}



                          {{-- <a class="btn btn-primary btn-lg" href="{{ route('employee')}}" role="button">back</a> --}}

    </div>
</div>
</div>

@endsection




