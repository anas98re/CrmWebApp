@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">

@php
    $i=1;
@endphp


<h3 class="m-0 font-weight-bold text-primary"><b>THE LAST <b style="color:rgb(166, 1, 1)">TEN</b> LEADS CAME</b></h3>
<hr style="width:100%;text-align:left;margin-left:0">
<div class="row">
            @foreach ($THE_LAST_TEN_LEADS_CAME as $THE_LAST_TEN_LEADS_CAME )
            {{-- {{$leads->name}}<br> --}}
            {{-- <div class="row"> --}}

            <div  style="width: 30%" class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Lead {{$i++}}</h6>
                    <div class="dropdown no-arrow">
                    </div>

                </div>
                <!-- Card Body -->
                <div class="card-body" style="height: 4em">
                    <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                    &nbsp;&nbsp;&nbsp;<b>{{$THE_LAST_TEN_LEADS_CAME->name}}</b>
                </div>
            </div>



            {{-- </div> --}}
            &nbsp;&nbsp;&nbsp;
            @endforeach

        </div>
            <a class="btn btn-primary" href="{{ route('home')}}" role="button">back</a>
            <br>
            <br>



        </div>


    @endsection
