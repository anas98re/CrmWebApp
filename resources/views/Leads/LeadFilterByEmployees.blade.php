@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);">
                        <h1 class="display-4">select Employee:</h1>



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
                    <form action="{{ route('Leads.FilterByEmployee', ['id' =>$employee->id ]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if (Auth::user()->role==1)

                        <div class="form-group">
                            <label for="exampleFormControlInput1">employeeName</label>
                            <select class="form-control" name="employee_id" 
                                id="exampleFormControlSelect1">
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="name" value="{{ $lead->name }}" class="form-control"> --}}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Done</button>
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
