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



                {{-- <div style="width: 25em" class="card shadow mb-4"> --}}
                <h1 class="display-4">Add Campaign</h1>

                <hr style="width:100%;text-align:left;margin-left:0">



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
                <form action="{{ route('Campaigns.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">start_date</label>
                        <input type="date" name="start_date" class="form-control" id="exampleFormControlInput1"
                            placeholder="2-2-2022">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">end_date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">state</label>
                        <select class="form-control" name="state" id="exampleFormControlSelect1">
                            <option>active</option>
                            <option>stop</option>
                            <option>pause</option>
                            <option>reactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Source</label>
                        <select class="form-control" name="source_id" id="exampleFormControlSelect1">
                            @foreach ($source as $source)
                                <option value="{{ $source->id }}">{{ $source->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
            <label for="exampleFormControlInput1">state</label>
            <input type="text" name="state" class="form-control">
          </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Targert Leads</label>
                        <input type="text" name="num_leads" class="form-control">
                    </div>
                    {{-- <div class="form-group">
            <label for="exampleFormControlInput1">remaining_lead</label>
            <input type="text" name="remaining_lead" class="form-control">
          </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service</label>
                        <select class="form-control" name="service_id" id="exampleFormControlSelect1">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
            <label for="exampleFormControlInput1">service_id</label>
            <input type="text" name="service_id" class="form-control">
          </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Note</label>
                        <input type="text" name="description" class="form-control">
                    </div>









            </div>
            <br>
            <br>




        </div>





        <div class="form-group">
            <button class="btn btn-primary" type="submit">save</button>
            <a class="btn btn-primary" href="{{ route('Campaigns') }}" role="button">back</a>


        </div>
        </form>
    </div>
    </div>
@endsection
