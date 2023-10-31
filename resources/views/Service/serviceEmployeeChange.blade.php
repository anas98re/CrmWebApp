@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);">
                        <h1 class="display-4">Convert A Service from An Employee To Another Employee</h1> --}}
                    <h2 class="mb-4"><b>Update the responsible personnel for the service <b style="color: green">{{$Service->name}}</b></b></h2>



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
                        <li style="color: red">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="container">
                <form action="{{ route('Services.convertService', ['id' => $Service->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @if (Auth::user()->role == 1)
                        {{-- <div class="form-group">
                            <label for="exampleFormControlInput1">employeeName</label>
                            <select class="form-control" name="employee_id"
                                id="exampleFormControlSelect1">
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>

                        </div> --}}

                        <div class="form-group">
                            <label for="exampleFormControlInput1" style="color: #229ED9"><b>Choose Responsible
                                    Employees</b></label>
                            <br>
                            @foreach ($employeesChoose as $employee)
                                <input type="checkbox" name="employees[]" value="{{ $employee->id }}"
                                    @foreach ($Service->employees as $item2)
                                                {{ $employee->id == $item2->id ? 'checked' : '' }}
                                    @endforeach>&nbsp;{{ $employee->name }}&nbsp;&nbsp;&nbsp;
                            @endforeach

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <button class="btn btn-primary" onclick="history.go(-1)">Back</button>
                        </div>
                    @else
                        <div class="col">
                            <div class="alert alert-danger" role="alert">
                                you do not have permissions
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>


@endsection
