@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    {{-- <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);"> --}}
                    <h1 class="display-4">Edit Services</h1>



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
                <form action="{{ route('Services.update', ['id' => $varService->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    {{-- <form action="{{route('employee.update',$varEmployee->id)}}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" value="{{ $varService->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Creation_date</label>
                        <input type="date" name="Creation_date" value="{{ $varService->Creation_date }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">description</label>
                        <input type="text" name="description" value="{{ $varService->description }}"
                            class="form-control">
                    </div>






                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">update</button>
                        <a class="btn btn-primary" href="{{ route('Services') }}" role="button">back</a>

                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
