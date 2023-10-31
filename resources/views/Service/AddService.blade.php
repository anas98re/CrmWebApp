@extends('LAYOUT')

@section('content')
    <style>
        .jops {
            font-family: "Courier New", Courier, monospace;
        }

        body {
            /*background-image: url("../images/audrey1.jpg");*/
            background-size: cover;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function checkOnlyOne(b) {

            var x = document.getElementsByClassName('daychecks');
            var i;

            for (i = 0; i < x.length; i++) {
                if (x[i].value != b) x[i].checked = false;
            }
        }
    </script>
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">

                <div class="col">
                    {{-- <a class="btn btn-success btn-lg" href="{{ route('home')}}" role="button" style="float: right">Home</a> --}}

                    {{-- <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);"> --}}
                    <h1 class="display-4">Add Service</h1>


                    <hr style="width:100%;text-align:left;margin-left:0">


                </div>
            </div>

        </div>
        <div class="row">

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
                <form action="{{ route('Services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Creation_date</label>
                        <input type="date" name="Creation_date" class="form-control" id="exampleFormControlInput1"
                            placeholder="x/y/z">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Responsible_employee</label>
                        <select class="form-control" name="employee_id" id="exampleFormControlSelect1">
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Note</label>
                        <input type="text" name="description" class="form-control" id="exampleFormControlInput1">
                    </div>







                    <br>
                    <br>



            </div>
            <br>
            <br>
            <br>
            <br>
            <br>




        </div>


        <br>


        <div class="form-group">
            <button class="btn btn-primary" type="submit">save</button>
            <a class="btn btn-primary" href="{{ route('Services') }}" role="button">back</a>

        </div>
        </form>
    </div>
    </div>
    {{-- </div> --}}
@endsection
