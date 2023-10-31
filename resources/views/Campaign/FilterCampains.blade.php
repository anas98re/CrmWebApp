@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);">
                        <h1 class="display-4">select Employee:</h1> --}}



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
                <form style="font-size: 120%" action="{{ route('Campaigns.Filter') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <h2 class="m-0 font-weight-bold text-warning">Start Date</h2><br>
                    <span class="form-group">
                        <h6 class="m-0 font-weight-bold text-primary">First Date</h6>
                        <input style="width: 12em" type="date" name="first_date_By_Start_Date" class="form-control" id="myFirstDate">
                        <h6 class="m-0 font-weight-bold text-primary" >Second Date</h6>
                        <input style="width: 12em" type="date" name="second_date_By_Start_Date" class="form-control" id="mySecondDate">
                    </span><br>
                    <h2 class="m-0 font-weight-bold text-warning">End Date</h2><br>
                    <div class="form-group">
                        <h6 class="m-0 font-weight-bold text-primary">First Date</h6>
                        <input style="width: 12em" type="date" name="first_date_By_End_Date" class="form-control" id="myFirstDate">
                        <h6 class="m-0 font-weight-bold text-primary">Second Date</h6>
                        <input style="width: 12em" type="date" name="second_date_By_End_Date" class="form-control" id="mySecondDate">
                    </div>
                    <br>
                    <script>
                        function myFunction() {
                          document.getElementById("myFirstDate").defaultValue = "null";
                        }
                        </script>
                        <script>
                            function myFunction() {
                              document.getElementById("mySecondDate").defaultValue = "null";
                            }
                            </script>

                    <br>

                    <h6 class="m-0 font-weight-bold text-primary">Selelct Source</h6>

                    <div class="card-body">
                    @foreach ($sources as $item)
                        <input type="checkbox" name="source_id[]" onclick="onlyOne(this)" value="{{ $item->id }}">
                        <label for="">{{ $item->name }}</label>&nbsp;
                    @endforeach
                    </div>
                    <br>


                    <div class="form-group">
                        <button class="btn btn-primary" onclick="myFunction()" type="submit">Filter</button>
                    </div>
                    <div> <a class="btn btn-primary" onclick="history.go(-1)">Back</a></div>
                    <br> <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>






                </form>
            </div>
        </div>
    </div>


@endsection
