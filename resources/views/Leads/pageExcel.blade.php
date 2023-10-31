@extends('LAYOUT')

@section('content')

    <form action="{{ route('leads-import-excel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">

            {{-- <label for="file">Choose file to upload</label> --}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Source</label>
                <select style="width: 50%" class="form-control" name="source_id" id="exampleFormControlSelect1">
                    @foreach ($sources as $source)
                        <option value="{{ $source->id }}">{{ $source->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Service</label>
                <select style="width: 50%" class="form-control" name="service_id" id="exampleFormControlSelect1">
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Employee</label>
                <select style="width: 50%" class="form-control" name="employee_id" id="exampleFormControlSelect1">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <label for="file">Choose an excel file to import LEADS from</label>
            <input style="width: 50%" type="file" id="file" name="file" accept=".xlsx, .xls, .csv"
                class="form-control">
            {{-- <input type="file" id="file" name="file" multiple> --}}
            <br>
            <button class="btn btn-primary" onclick="myFunction()" type="submit">IMPORT</button>
        </div>


    </form>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;



    <div class="container">
        {{-- <label for="file" >Do you want to export clients to excel file?</label> --}}
        {{-- <br> --}}
        <hr style="width:50%;text-align:left;margin-left:0">
        <br>
        <div class="row">
            &emsp;
            <a href="{{ route('download-example') }}"> <button class="btn btn-secondary" onclick="myFunction()"
                    type="submit">download example</button></a>
            &emsp;&emsp;&emsp;
            <a href="{{ route('leads-export-excel') }}"> <button class="btn btn-success" onclick="myFunction()"
                    type="submit">Download All Leads</button></a>
        </div>
        <br>
        <hr style="width:50%;text-align:left;margin-left:0">


    </div>


    <div class="container"> <a style="width: 50%" class="btn btn-outline-danger" href="{{ route('home') }}">Back</a></div>

    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>

    {{-- <a action="{{route('leads-export-excel')}}"><button
   >expo</a> --}}

    <div style="color:red">
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $item)
                    <li>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
