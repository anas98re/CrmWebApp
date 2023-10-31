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
                    <h1 class="display-4">Add Employee</h1>

                    <hr style="width:100%;text-align:left;margin-left:0">



                </div>
            </div>

        </div>
        <div class="row">
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

            <div class="col">
                <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">password</label>
                        <input type="password" name="password" class="form-control" placeholder="At least 8 characters" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="10 Digits">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Job Title</label>
                        <input type="text" name="Job_title" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Note</label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    <label for="exampleFormControlInput1">Department</label>
                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                            <option value="1">Admin</option>
                            <option value="2">Marketing</option>
                            <option value="3">Sales</option>
                    </select>









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
            <a class="btn btn-primary" href="{{ route('getEmployees')}}" role="button">back</a>

        </div>
        </form>
    </div>
    </div>

@endsection
