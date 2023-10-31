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
                        <li style="color: red">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="col">
                <form style="font-size: 120%" action="{{ route('Leads.Filter') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <h6 class="m-0 font-weight-bold text-primary">First Date</h6>
                        <input style="width: 12em" type="date" name="first_date" class="form-control" id="myFirstDate" checked>
                    </div>
                    <div class="form-group">
                        <h6 class="m-0 font-weight-bold text-primary">Second Date</h6>
                        <input style="width: 12em" type="date" name="second_date" class="form-control" id="mySecondDate" checked>
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
                    <h6 class="m-0 font-weight-bold text-primary">Selelct States</h6>
                    <div class="card-body">
                        <input type="checkbox" name="state[]" onclick="onlyOne(this)"  value="Undefined"    checked>
                        <label>Undefined</label>&nbsp;&nbsp;
                        <input type="checkbox" name="state[]" onclick="onlyOne(this)" value="No_Unswer" unchecked>
                        <label>No Answer</label>&nbsp;&nbsp;
                        <input type="checkbox" name="state[]" onclick="onlyOne(this)" value="Meeting" unchecked>
                        <label>Meeting</label>&nbsp;&nbsp;
                        <input type="checkbox" name="state[]" onclick="onlyOne(this)" value="Follow_up" unchecked>
                        <label>Follow Up</label>&nbsp;&nbsp;
                        <input type="checkbox" name="state[]" onclick="onlyOne(this)" value="Cold" unchecked>
                        <label>Cold</label>&nbsp;&nbsp;
                        <input type="checkbox" name="state[]" onclick="onlyOne(this)" value="Deal" unchecked>
                        <label>Deal</label>&nbsp;&nbsp;
                    </div>

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
                        <a class="btn btn-primary" href="{{ route('Leads')}}" role="button">back</a>

                    </div>
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
