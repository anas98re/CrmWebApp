@extends('LAYOUT')

@section('content')
    <div class="container-fluid">
        {{-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> --}}


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><b>Villas & Apartments</b></h1>
        <hr style="width:100%;text-align:left;margin-left:0">
        <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;

            <div>
                <h6><b>Choose Filter</b></h6>
                <div class="row">
                    <div>


                        {{-- <a type="button" id="FilterByEmployee"> --}}
                        @if (Auth::user()->role == 1)
                            <div class="button0814 button71">

                                {{-- <div style="padding-left: 20px" class="row"> --}}



                                <!-- DataTales Example -->
                                <form action="{{ url('/villas/EnterEmployee') }}" method="GET" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{-- @csrf --}}
                                    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;
                                        {{-- <i class='fas fa-user-tie'
                                    style='font-size:17px;padding-top: 2px'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}

                                        <div style="">
                                            <h6><b style=";font-size: 80%;">Employees</b></h6>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <select style="padding-top: 3px;float: Right;width: 35%; height: 20px;padding: 0; "
                                            onchange="this.form.submit()" id="employee_id" class="form-control"
                                            name="employee_id">
                                            <option value=""></option>
                                            @foreach ($employeesChoose as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endforeach

                                        </select>


                                        {{-- <button style="padding: 0;width: 20%"  class="btn btn-primary" type="submit" >Filter</button> --}}
                                    </div>


                                    <br>
                                </form>
                                {{-- </div> --}}

                            </div>
                        @endif
                        {{-- </a> --}}


                    </div>

                    <div>


                        <div style="float: left;  " class="button0814 button71">
                            <form action="{{ url('/villas/EnternumberOfRooms') }}" method="GET"
                                enctype="multipart/form-data">
                                {{-- {{ csrf_field() }} --}}
                                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <i class='fas fa-user-tie'
                                style='font-size:17px;padding-top: 2px'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}

                                    <h6><b style="font-size: 70%;padding-top: 4px">Rooms Number</b></h6>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <select style="float: Right;width: 20%; height: 20px;padding: 0; "
                                        onchange="this.form.submit()" id="employee_id" class="form-control"
                                        name="numberOfRooms">
                                        <option value=""></option>
                                        @foreach ($numberOfRooms as $employee)
                                            <option value="{{ $employee }}">{{ $employee }}</option>
                                        @endforeach

                                    </select>

                                </div>


                                <br>
                            </form>
                        </div>


                    </div>

                    <div>


                        <div style="float: left;  " class="button0815 button71">
                            <form action="{{ url('/villas/EnterRegion') }}" method="GET" enctype="multipart/form-data">
                                {{-- {{ csrf_field() }} --}}
                                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <i class='fas fa-user-tie'
                                    style='font-size:17px;padding-top: 2px'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}

                                    <h6><b style="font-size: 80%;padding-top: 4px">region</b></h6>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <select style="float: Right;width: 30%; height: 20px;padding: 0; "
                                        onchange="this.form.submit()" id="employee_id" class="form-control" name="Region">
                                        <option value=""></option>
                                        @foreach ($region as $employee)
                                            <option value="{{ $employee }}">{{ $employee }}</option>
                                        @endforeach

                                    </select>

                                </div>


                                <br>
                            </form>
                        </div>


                    </div>
                    <div>


                        <div style="float: left;  " class="button0815 button71">
                            <form action="{{ url('/villas/EnterAdreess') }}" method="GET" enctype="multipart/form-data">
                                {{-- {{ csrf_field() }} --}}
                                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <i class='fas fa-user-tie'
                                style='font-size:17px;padding-top: 2px'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}

                                    <h6><b style="font-size: 80%;padding-top: 4px">Adress</b></h6>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <select style="float: Right;width: 30%; height: 20px;padding: 0; "
                                        onchange="this.form.submit()" id="employee_id" class="form-control" name="address">
                                        <option value=""></option>
                                        @foreach ($adress as $employee)
                                            <option value="{{ $employee }}">{{ $employee }}</option>
                                        @endforeach

                                    </select>

                                </div>


                                <br>
                            </form>
                        </div>


                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div>
                <h6><b>First Price & Second Price</b></h6>
                <div style="float: left;  font-size: 16px;" class="button015es button71">
                    <form action="{{ route('villas.EnterPrice') }}" method="GET" onchange="this.form.submit()"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">&nbsp;&nbsp;

                            {{-- <h6><b>Filter By Date</b></h6>&nbsp;&nbsp; --}}
                            <input style="height: 50%;padding: 0;width: 28%;" type="text" name="first_price"
                                class="form-control" id="myFirstDate" placeholder=".. AED">&nbsp;&nbsp;&nbsp;
                            <input style="height: 50%;padding: 0;width: 28%" type="text" name="second_price"
                                class="form-control" id="mySecondDate" placeholder=".. AED">
                            &nbsp;&nbsp;&nbsp;

                            <button style="float: left;padding: 0;width: 20%" class="btn btn-primary"
                                type="submit">Filter</button>
                        </div>

                    </form>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div>
                <h6><b>First Space & Second Space</b></h6>
                <div style="float: left;  font-size: 16px;" class="button015e button71">
                    <form action="{{ route('villas.EnterSpace') }}" method="GET" onchange="this.form.submit()"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">&nbsp;&nbsp;
                            <input style="height: 50%;padding: 0;width: 28%;" type="text" name="first_space"
                                class="form-control" id="myFirstDate" placeholder="200 M">&nbsp;&nbsp;&nbsp;
                            <input style="height: 50%;padding: 0;width: 28%" type="text" name="second_space"
                                class="form-control" id="mySecondDate" placeholder="400 M">
                            &nbsp;&nbsp;&nbsp;
                            <button style="float: left;padding: 0;width: 20%" class="btn btn-primary"
                                type="submit">Filter</button>
                        </div>

                    </form>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;


        </div>


        <hr style="width:100%;text-align:left;margin-left:0">


        {{-- </div> --}}

    </div>

    {{-- <button type="button" class="btn btn-primary" id="add_todo">  Add Todo </button> --}}
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <a href="{{route('employee.edit',['id'=>$item->id])}}" class="fas fa-2x fa-edit" data-toggle="modal"
                                            data-target="#exampleModal" ></a> --}}
        <div style="padding-top: 10px" class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div>
                <a style="width: 10em" class="nav-link" data-bs-toggle="modal" data-bs-target="#addServiceModel">
                    <button style="width: 8em" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add
                        New</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="row" style="padding-top: 7px">&nbsp;&nbsp;&nbsp;
                <a href="/villas"><button type="button" class="btn btn-secondary">ALL Apartments &
                        Villas</button></a>&nbsp;&nbsp;
                <div style="height: 39px" class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        apartments <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li style="padding-left: 6px"><a href="/GETapartments"> All Apartments</a></li>
                        <li style="padding-left: 6px"><a href="/GETAvailablapartments"> Available</a></li>
                        <li style="padding-left: 6px"><a href="/GETrentapartments"> rental</a></li>
                        <li style="padding-left: 6px"><a href="/GETSellapartments"> sold</a></li>
                    </ul>
                </div>&nbsp;&nbsp;
                <div style="height: 39px" class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        Villas <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li style="padding-left: 6px"><a href="/GETvillas"> All Villas</a></li>
                        <li style="padding-left: 6px"><a href="/GETAvailablVillas"> Available</a></li>
                        <li style="padding-left: 6px"><a href="/GETrentVillas"> rental</a></li>
                        <li style="padding-left: 6px"><a href="/GETSellVillas"> sold</a></li>
                    </ul>
                </div>&nbsp;&nbsp;
                <a href="/GETOther"><button type="button" class="btn btn-secondary">Other</button></a>&nbsp;&nbsp;

            </div>
        </div>

        <!-- Modal -->
        <div style="padding-right:33em" class="modal fade" id="addServiceModel" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div style="width: 62em;" class="modal-content">
                    <div class="alert alert-danger print-error-msg" style="display: none;">
                        @if ($errors->any())
                            <ol style="color: red">
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ol>
                        @endif
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Villa Or Apartment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <span class="text-danger" class="Error"></span>

                    <div class="modal-body">
                        <form id="ServiceForm">
                            {!! csrf_field() !!}
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>Name:</b></label>
                                    <input style="width: 12em" type="text" name="name" class="form-control"
                                        id="name">
                                    <span class="text-danger" id="nameError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="color: #229ED9"><b>Number
                                            Of
                                            Rooms:</b></label>
                                    <input style="width: 12em" type="text" name="numberOfRooms" class="form-control"
                                        id="Creation_date">
                                    <span class="text-danger" id="numberOfRoomsError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>address</b></label>
                                    <input style="width: 12em" type="text" name="address" class="form-control"
                                        id="Creation_date">
                                    <span class="text-danger" id="addressError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>Region</b></label>
                                    <input style="width: 12em" type="text" name="Region" class="form-control"
                                        id="Creation_date">
                                    <span class="text-danger" id="RegionError"></span>
                                </div>
                            </div>

                            {{--  --}}
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>price</b></label>
                                    <input style="width: 12em" type="text" name="price" class="form-control"
                                        id="Creation_date">
                                    <span class="text-danger" id="priceError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>phoneNumber</b></label>
                                    <input style="width: 12em" type="text" name="phoneNumber" class="form-control"
                                        id="Creation_date">
                                    <span class="text-danger" id="phoneNumberError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{-- <div class="form-group">
                                    <label for="recipient-name" class="col-form-label" style="color: #229ED9">photo</label>
                                    <input type="file" name="image" class="form-control">
                                </div> --}}
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>rentOrSell</b></label>
                                    <select style="width: 12em" class="form-control" name="rentOrSell" id="a">
                                        <option value="rent">Availabl</option>
                                        <option value="rent">rent</option>
                                        <option value="Sell">Sell</option>
                                        <option value="other">other</option>
                                    </select>
                                    <span class="text-danger" id="rentOrSellError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>generalType</b></label>
                                    <select style="width: 12em" class="form-control" name="generalType" id="a">
                                        <option value="villa">villa</option>
                                        <option value="apartment">apartment</option>
                                        <option value="other">other</option>
                                    </select>
                                    <span class="text-danger" id="generalTypeError"></span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                &nbsp;&nbsp;
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>specialType</b></label>
                                    <select style="width: 25.8em" class="form-control" name="srecialType"
                                        id="a">
                                        <option value="commercial">commercial</option>
                                        <option value="residential">residential</option>
                                        <option value="investment">investment</option>
                                        <option value="other">other</option>
                                    </select>
                                    <span class="text-danger" id="srecialTypeError"></span>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                <div style="padding-top: 7px" class="form-group">
                                    @if (Auth::user()->role != 3)
                                        <label for="exampleFormControlInput1"
                                            style="color: #229ED9"><b>Responsible_employees</b></label>
                                        <select style="width: 25.8em" class="form-control" name="employee_id"
                                            id="exampleFormControlSelect1">
                                            @foreach ($employeesChoose as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="employeesError"></span>
                                    @endif
                                    @if (Auth::user()->role == 3)
                                        <label for="exampleFormControlInput1"
                                            style="color: #229ED9"><b>Responsible_employees</b></label>
                                        <input type="text" name="employee_id" value="{{ Auth::user()->name }}"
                                            class="form-control" id="exampleFormControlInput1" disabled>
                                        {{-- <select style="width: 25.8em" class="form-control" name="employee_id"
                                            id="exampleFormControlSelect1">
                                            @foreach ($employeesChoose as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endforeach
                                        </select> --}}
                                        <span class="text-danger" id="employeesError"></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"
                                    style="color: #229ED9"><b>space</b></label>
                                <input style="width: 52.5em" type="text" name="space" class="form-control"
                                    id="Creation_date">
                            </div>


                            <button onclick="AddService()" class="btn btn-primary">ADD</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            @if (count($errors) > 0)
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>
                    </div>

                </div>
            </div>


        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Responsible Employee</th>
                            <th scope="col">numberOfRooms</th>
                            <th scope="col">address</th>
                            <th scope="col">price</th>
                            <th scope="col">Space</th>
                            <th scope="col">Region</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                            <th style="width: 4em" scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Responsible Eemployee</th>
                            <th scope="col">numberOfRooms</th>
                            <th scope="col">address</th>
                            <th scope="col">price</th>
                            <th scope="col">Space</th>
                            <th scope="col">Region</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                            <th style="width: 4em" scope="col">Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @php
                            $j = 1;
                        @endphp

                        @foreach ($villas as $item)
                            <div class="modal" id="modal_todo">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form id="form_todo">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="modal_title"></h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <input type="hidden" name="id" id="id">
                                                <div class="row">
                                                    &nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>Name:</b></label>
                                                        <input type="text" name="name" id="name_todo"
                                                            class="form-control" placeholder="Enter todo ...">
                                                        <span class="text-danger" id="nameErrorUpdate"></span><br>
                                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>numberOfRooms:</b></label>
                                                        <input type="text" name="numberOfRooms"
                                                            id="numberOfRooms_todo" class="form-control"
                                                            placeholder="Enter numberOfRooms ...">
                                                        <span class="text-danger"
                                                            id="numberOfRoomsErrorUpdate"></span><br>
                                                    </span>
                                                </div>
                                                <div class="row">
                                                    &nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>address:</b></label>
                                                        <input type="text" name="address" id="address_todo"
                                                            class="form-control" placeholder="Enter address ...">
                                                        <span class="text-danger" id="addressErrorUpdate"></span><br>
                                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>Region:</b></label>
                                                        <input type="text" name="Region" id="Region_todo"
                                                            class="form-control" placeholder="Enter Region ...">
                                                        <span class="text-danger" id="RegionErrorUpdate"></span><br>
                                                    </span>
                                                </div>
                                                <div class="row">
                                                    &nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>price:</b></label>
                                                        <input type="text" name="price" id="price_todo"
                                                            class="form-control" placeholder="Enter price ...">
                                                        <span class="text-danger" id="priceErrorUpdate"></span><br>
                                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>phoneNumber:</b></label>
                                                        <input type="text" name="phoneNumber" id="phoneNumber_todo"
                                                            class="form-control" placeholder="Enter phoneNumber ...">
                                                        <span class="text-danger" id="phoneNumberErrorUpdate"></span><br>
                                                    </span>
                                                </div>
                                                <div class="row">
                                                    &nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>space:</b></label>
                                                        <input type="text" name="space" id="space_todo"
                                                            class="form-control" placeholder="Enter space ...">
                                                        <span class="text-danger" id="spaceErrorUpdate"></span><br>
                                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <label for="recipient-name" class="col-form-label"
                                                            style="color: #229ED9"><b>note:</b></label>
                                                        <input type="text" name="note" id="note_todo"
                                                            class="form-control" placeholder="Enter note ...">
                                                        <span class="text-danger" id="noteErrorUpdate"></span><br>
                                                    </span>
                                                </div>
                                                <div class="row">
                                                    &nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1"><b
                                                                    style="color: #229ED9">rentOrSell</b></label>
                                                            <select id="rentOrSell_todo" class="form-control"
                                                                name="rentOrSell">
                                                                <option value="Availabl">Availabl</option>
                                                                <option value="rent">rent</option>
                                                                <option value="Sell">Sell</option>
                                                                <option value="other">other</option>
                                                            </select>
                                                            <span class="text-danger"
                                                                id="rentOrSellErrorUpdate"></span><br>
                                                        </div>
                                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1"><b
                                                                    style="color: #229ED9">generalType</b></label>
                                                            <select id="generalType_todo" class="form-control"
                                                                name="generalType" id="aa">
                                                                <option value="villa">villa</option>
                                                                <option value="apartment">apartment</option>
                                                                <option value="other">other</option>
                                                            </select>
                                                            <span class="text-danger"
                                                                id="generalTypeErrorUpdate"></span><br>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="row">
                                                    &nbsp;&nbsp;
                                                    <span style="width: 12em">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1"><b
                                                                    style="color: #229ED9">srecialType</b></label>
                                                            <select id="srecialType_todo" class="form-control"
                                                                name="srecialType" id="aa">
                                                                <option value="commercial">commercial</option>
                                                                <option value="residential">residential</option>
                                                                <option value="investment">investment</option>
                                                                <option value="other">other</option>
                                                            </select>
                                                            <span class="text-danger"
                                                                id="srecialTypeErrorUpdate"></span><br>
                                                        </div>
                                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="width: 12em">


                                                        <label for="exampleFormControlInput1"><b
                                                                style="color: #229ED9">Employee</b></label>
                                                        <select class="form-control" name="employee_id"
                                                            id="employee_id_todo">
                                                            @foreach ($employeesChoose as $employee)
                                                                <option value="{{ $employee->id }}">
                                                                    {{ $employee->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger" id="employee_idErrorUpdate"></span><br>
                                                        <br>
                                                    </span>
                                                </div>


                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button onclick="EditService()" class="btn btn-info">Save</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <tr id="row1_todo_{{ $item->id }}">
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->employees ? $item->employees->name : 'N/A' }}</td>                                <td>{{ $item->numberOfRooms }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->space }}</td>
                                <td>{{ $item->Region }}</td>
                                <td>{{ $item->srecialType }}</td>
                                <td style="width: 12em">
                                    @if (Auth::user()->role != 2)
                                        <a style="color: rgb(14, 167, 32)" href="javascript:void(0)" id="show-Service"
                                            data-url="{{ route('Villa.show', $item->id) }}" class="fas fa-2x fa-eye"></a>
                                        &nbsp;&nbsp;
                                    @endif
                                    <a type="button" id="edit_todo" data-id="{{ $item->id }}"><i
                                            class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <a id="show-History"  href="javascript:void(0)"
                                        data-url="{{ route('villas_history_date', ['id' => $item->id]) }}"><i
                                            class='fas fa-calendar-alt fa-2x'></i></a> --}}

                                            <a
                                        href="{{ route('villas-history-date', ['id' => $item->id]) }}"><i
                                            class='fas fa-calendar-alt fa-2x'></i></a>


                                </td>
                                <td>



                                    <div class="row">&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger deleteService"
                                            value="{{ $item->id }}" data-target="#deleteModel">Delete</button>
                                        &nbsp;&nbsp;&nbsp;

                                    </div>


                                    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">



                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ url('/villas/destroy') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModel">Delete !
                                                        </h5>
                                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name='service_delete_id' id="lead_id">
                                                        <h5><b>Are you sure you want to delete this Villa ?</b></h5>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>

                                                        <button type="submit" class="btn btn-danger">Yes
                                                            Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <!-- The Modal by change Employee-->
            <div class="modal" id="modal_change_Employee">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="form_change_Employee">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modal_convert"></h4>
                            </div>
                            <!-- Modal body -->
                            {{-- <div class="modal-body">
                                    <input type="text" name="name" id="name_todo" class="form-control"
                                        placeholder="Enter todo ..."><br>
                                </div> --}}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">employeeName</label>
                                <select class="form-control" name="employee_id" id="employee_id_todo">
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="name" value="{{ $lead->name }}" class="form-control"> --}}
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>



            <!-- history show-->
            <div class="modal fade" id="VillaShowHistory" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Show History</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <p><strong><b style="color: #229ED9">Edit Date:</b></strong> <span
                                        id="Villa-EditDate"></span>
                                </p>&nbsp;&nbsp;<b> - </b>&nbsp;&nbsp;
                                <p><strong><b style="color: #229ED9">User who edited:</b></strong> <span
                                        id="employees_name"></span></p>
                            </div>
                        </div>
                        <hr style="width:100%;text-align:left;margin-left:0;">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal show-->
            <div class="modal fade" id="ServiceShowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Show</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- <p><strong>ID:</strong> <span id="Service-id"></span></p> --}}
                            <p><strong><b style="color: #229ED9">Name:</b></strong> <span id="Villa-name"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">Responsible Employees:</b></strong> <span
                                    id="Responsible_employee"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">numberOfRooms:</b></strong> <span
                                    id="Villa-numberOfRooms"></span></p>
                            <p><strong><b style="color: #229ED9">address:</b></strong> <span id="Villa-address"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">Region:</b></strong> <span id="Villa-Region"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">price</b></strong> <span id="Villa-price"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">phoneNumber:</b></strong> <span
                                    id="Villa-phoneNumber"></span></p>
                            <p><strong><b style="color: #229ED9">space:</b></strong> <span id="Villa-space"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">TYPE:</b></strong> <span id="Villa-rentOrSell"></span>
                            </p>
                            <p><strong><b style="color: #229ED9">srecialType:</b></strong> <span
                                    id="Villa-srecialType"></span></p>
                            <p><strong><b style="color: #229ED9">generalType:</b></strong> <span
                                    id="Villa-generalType"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@section('sicripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deleteService', function(e) {
                e.preventDefault();
                var lead_id = $(this).val();
                $('#lead_id').val(lead_id);
                $('#deleteModel').modal('show')
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });



        $("#add_todo").on('click', function() {
            $("#form_todo").trigger('reset');
            $("#modal_title").html('Add todo');
            $("#modal_todo").modal('show');
            $("#id").val("");
        });

        $("body").on('click', '#edit_todo', function() {
            var id = $(this).data('id');
            // var input = document.getElementById("input_id").value;
            var state = ($(this).is(':checked')) ? '1' : '0';
            var i = 1;
            $.get('villas/' + id + '/edit1', function(res) {

                $("#modal_title").html('Edit villas');

                $("#id").val(res.id);

                $("#name_todo").val(res.name);
                $("#numberOfRooms_todo").val(res.numberOfRooms);
                $("#address_todo").val(res.address);
                $("#Region_todo").val(res.Region);
                $("#price_todo").val(res.price);
                $("#phoneNumber_todo").val(res.phoneNumber);
                $("#space_todo").val(res.space);
                $("#note_todo").val(res.note);
                $("#rentOrSell_todo").val(res.rentOrSell);
                $("#generalType_todo").val(res.generalType);
                $("#srecialType_todo").val(res.srecialType);
                $("#employee_id_todo").val(res.employee_id);
                $("#modal_todo").modal('show');
                console.log(res);
            });

        });

        // Delete Todo
        // $("body").on('click', '#delete_todo', function() {
        //     var id = $(this).data('id');
        //     confirm('Are you sure want to delete !');

        //     $.ajax({
        //         type: 'DELETE',
        //         url: "todos/destroy1/" + id
        //     }).done(function(res) {
        //         $("#row1_todo_" + id).remove();
        //     });
        // });

        //save data
        // Edit Or Add
        function EditService() {
            $("form").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "villas/update",
                    data: $("#form_todo").serialize(),
                    type: 'POST',
                    success: function(response) {
                        if (response) {
                            console.log(response);
                            location.reload();

                            if ($("#id").val()) {
                                $("#row_todo_" + response.id).replaceWith(row);
                            } else {
                                $("#list_todo").prepend(row);
                            }

                            $("#form_todo").trigger('reset');
                            $("#modal_todo").modal('hide');
                        }
                    },
                    error: function(response) {
                        $('#nameErrorUpdate').text(response.responseJSON.errors.name);
                        $('#numberOfRoomsErrorUpdate').text(response.responseJSON.errors.numberOfRooms);
                        $('#addressErrorUpdate').text(response.responseJSON.errors.address);
                        $('#Creation_dateErrorUpdate').text(response.responseJSON.errors.Creation_date);
                        $('#RegionErrorUpdate').text(response.responseJSON.errors.Region);
                        $('#priceErrorUpdate').text(response.responseJSON.errors.price);
                        $('#phoneNumberErrorUpdate').text(response.responseJSON.errors.phoneNumber);
                        $('#spaceErrorUpdate').text(response.responseJSON.errors.space);
                        $('#noteErrorUpdate').text(response.responseJSON.errors.note);
                        $('#rentOrSellErrorUpdate').text(response.responseJSON.errors.rentOrSell);
                        $('#generalTypeErrorUpdate').text(response.responseJSON.errors.generalType);
                        $('#srecialTypeErrorUpdate').text(response.responseJSON.errors.srecialType);
                        $('#employee_idErrorUpdate').text(response.responseJSON.errors.employee_id);

                    }
                });
            });
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('body').on('click', '#show-History', function() {
                var userURL = $(this).data('url');
                var a = document.getElementById('a');
                var i = 1;
                $.get(userURL, function(data) {
                    $('#VillaShowHistory').modal('show');
                    $('#Service-name').text(data.name);
                    $('#Villa-EditDate').text(data.EditDate);
                    $('#villa_id').text(data.villas.name);
                    $('#employees_name').text(data.employees.name);
                    $('#description').text(data.description);

                    console.log(data);
                })

            });

        });
    </script>
    {{-- Add Services --}}
    <script type="text/javascript">
        $(document).ready(function() {

            $('body').on('click', '#show-Service', function() {
                var userURL = $(this).data('url');
                var a = document.getElementById('a');
                var i = 1;
                $.get(userURL, function(data) {
                    $('#ServiceShowModal').modal('show');
                    $('#Service-id').text(data.id);
                    $('#Villa-name').text(data.name);
                    $('#Responsible_employee').text(data.employees.name);
                    // $('#Responsible_employee').html('');

                    // data.employees.forEach((element) => {
                    //     $('#Responsible_employee').append('<br>' + i++ +
                    //         '- &nbsp;' + element.name);
                    // });
                    $('#Villa-numberOfRooms').text(data.numberOfRooms);
                    $('#Villa-address').text(data.address);
                    $('#Villa-Region').text(data.Region);
                    $('#Villa-price').text(data.price);
                    $('#Villa-phoneNumber').text(data.phoneNumber);
                    $('#Villa-space').text(data.space);
                    $('#Villa-rentOrSell').text(data.rentOrSell);
                    $('#Villa-generalType').text(data.generalType);
                    $('#Villa-srecialType').text(data.srecialType);
                    console.log(data);
                })

            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#ServiceForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/Villas/store",
                    data: $('#ServiceForm').serialize(),
                    success: function(res) {

                        if (res) {
                            console.log(res);
                            location.reload();
                            $("#ServiceForm")[0].reset();
                            $("#addServiceModel").modal('hide');
                        }
                    },
                    error: function(res) {
                        $('#nameError').text(res.responseJSON.errors.name);
                        $('#numberOfRoomsError').text(res.responseJSON.errors.numberOfRooms);
                        $('#addressError').text(res.responseJSON.errors.address);
                        $('#RegionError').text(res.responseJSON.errors.Region);
                        $('#priceError').text(res.responseJSON.errors.price);
                        $('#phoneNumberError').text(res.responseJSON.errors.phoneNumber);
                        $('#rentOrSellError').text(res.responseJSON.errors.rentOrSell);
                        $('#generalTypeError').text(res.responseJSON.errors.generalType);
                        $('#srecialTypeError').text(res.responseJSON.errors.srecialType);
                        $('#employeesError').text(res.responseJSON.errors.employees);
                    }
                });
            });

        });
    </script>
    {{-- {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
