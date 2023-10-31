@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);"> --}}
                    <h1 class="display-4">Edit Campaign</h1>



                </div>
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
                <form action="{{ route('Campaigns.update', ['id' => $Campaign->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    {{-- <form action="{{route('employee.update',$varEmployee->id)}}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" value="{{ $Campaign->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">start_date</label>
                        <input type="date" name="start_date" value="{{ $Campaign->start_date }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">end_date</label>
                        <input type="date" name="end_date" value="{{ $Campaign->end_date }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">state</label>
                        <select class="form-control" name="state" value="{{ $Campaign->state }}"
                            id="exampleFormControlSelect1">
                            <option>active</option>
                            <option>stop</option>
                            <option>pause</option>
                            <option>reactive</option>
                        </select>
                        {{-- <input type="text" name="state" value="{{ $lead->state }}" class="form-control"> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Targert Leads</label>
                        <input type="text" name="num_leads" value="{{ $Campaign->num_leads }}" class="form-control"
                            id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    {{-- <div class="form-group">
                <label for="exampleFormControlInput1">remaining_lead</label>
                <input type="text" name="remaining_lead" value="{{$Campaign->remaining_lead}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Note</label>
                        <input type="text" name="description" value="{{ $Campaign->description }}" class="form-control"
                            id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service</label>
                        <select class="form-control" name="service_id" value="{{ $Campaign->service_id }}"
                            id="exampleFormControlSelect1">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="row">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" >update</button>
                            {{-- <a class="btn btn-primary" href="{{ route('Campaigns')}}" role="button">back</a> --}}

                        </div>&emsp;

                </form>
                 <div> <a class="btn btn-primary" onclick="history.go(-1)">Go Back</a></div>
                    </div>

            </div>
        </div>
    </div>


@endsection
