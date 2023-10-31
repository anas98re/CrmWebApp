@extends('LAYOUT')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><b>Services & Projects</b></h1>

        {{-- <button type="button" class="btn btn-primary" id="add_todo">  Add Todo </button> --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            {{-- <a href="{{route('employee.edit',['id'=>$item->id])}}" class="fas fa-2x fa-edit" data-toggle="modal"
                                            data-target="#exampleModal" ></a> --}}
            <a style="width: 10em" class="nav-link" data-bs-toggle="modal" data-bs-target="#addServiceModel">
                <button style="width: 10em" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add
                    Service</button></a>

            <!-- Modal -->
            <div class="modal fade" id="addServiceModel" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="alert alert-danger print-error-msg" style="display: none;">
                            @if($errors->any())
                            <ol style="color: red">
                                @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                @endforeach
                            </ol>
                            @endif
                    </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <span class="text-danger" class="Error"></span>

                        <div class="modal-body">
                            <form id="ServiceForm">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>Name:</b></label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    <span class="text-danger" id="nameError"></span>

                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"
                                        style="color: #229ED9"><b>Creation_date:</b></label>
                                    <input type="date" name="Creation_date" class="form-control" id="Creation_date">
                                    <span class="text-danger" id="Creation_dateError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1"
                                        style="color: #229ED9"><b>Responsible_employees</b></label>
                                    <br>
                                    @foreach ($employeesChoose as $employee)
                                        <input type="checkbox" name="employees[]"
                                            value="{{ $employee->id }}">&nbsp;{{ $employee->name }}&nbsp;&nbsp;
                                        {{-- <option value="{{ $employee->id }}">{{ $employee->name }}</option> --}}
                                    @endforeach
                                    <br>
                                    <span class="text-danger" id="employeesError"></span>

                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleFormControlInput1" style="color: #229ED9"><b>Responsible_employee</b></label>
                                    <select class="form-control" name="employee_id" id="exampleFormControlSelect1">
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="recipient-name" style="color: #229ED9"
                                        class="col-form-label"><b>Note:</b></label>
                                    {{-- <input type="text" name="description" class="form-control" id="recipient-name"> --}}
                                    <textarea class="form-control" name="description" id="description"></textarea>
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
                                <th scope="col">Responsible_employee</th>
                                <th scope="col">Creation_date</th>
                                {{-- <th scope="col">description</th> --}}
                                <th scope="col">Actions</th>
                                <th style="width: 8em" scope="col">Delete Services</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">Responsible_employee</th>
                                <th scope="col">Creation_date</th>
                                {{-- <th scope="col">description</th> --}}
                                <th scope="col">Actions</th>
                                <th style="width: 8em" scope="col">Delete Services</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @php
                                $j = 1;
                            @endphp

                            @foreach ($Services as $item)
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
                                                    <label for="recipient-name" class="col-form-label"
                                                        style="color: #229ED9"><b>Name:</b></label>
                                                    <input type="text" name="name" id="name_todo" class="form-control"
                                                        placeholder="Enter todo ..."><br>
                                                        <span class="text-danger" id="nameErrorUpdate"></span><br>
                                                    <label for="recipient-name" class="col-form-label"
                                                        style="color: #229ED9"><b>Creation_date:</b></label>
                                                    <input type="date" name="Creation_date" id="Creation_date_todo"
                                                        class="form-control" placeholder="Enter Creation_date ..."><br>
                                                        <span class="text-danger" id="Creation_dateErrorUpdate"></span><br>


                                                    {{-- <div class="form-group">
                                                        <label for="exampleFormControlInput1"
                                                            style="color: #229ED9"><b>Responsible Employees</b></label>
                                                        <br>
                                                        @foreach ($employees as $employee)
                                                            <input type="checkbox" name="employees[]" id="employees_todo"
                                                                value="{{ $employee->id }}"
                                                                @foreach ($item->employees as $item2)
                                                                {{ $employee->id == $item2->id ? 'checked' : '' }}
                                                                @endforeach>&nbsp;{{ $employee->name }}&nbsp;&nbsp;&nbsp;
                                                        @endforeach

                                                    </div> --}}
                                                    <label for="recipient-name" style="color: #229ED9"
                                                        class="col-form-label"><b>Note:</b></label>
                                                    <input type="text" name="description" id="description_todo"
                                                        class="form-control" placeholder="Enter description ..."><br>
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
                                    {{-- <td id="a"> {{ $a[0] }}</td> --}}
                                    {{-- <td > {{ $a[$j++] }}</td> --}}
                                    <td>
                                        @foreach ($item->employees as $item1)
                                            {{ $item1->name }} <b style="color: red">-</b>
                                        @endforeach
                                    </td>

                                    {{-- <td > {{ $j++ }}</td> --}}
                                    <td>{{ $item->Creation_date }}</td>
                                    <td>
                                        {{-- <a class="text-success" href="{{route('employee.show',['id'=>$item->id])}}"><i class="fas fa-2x fa-eye"></i></a>&nbsp; --}}
                                        @if (Auth::user()->role != 3)
                                            <a style="color: rgb(14, 167, 32)" href="javascript:void(0)"
                                                id="show-Service" data-url="{{ route('Service.show', $item->id) }}"
                                                class="fas fa-2x fa-eye"></a>
                                            &nbsp;&nbsp;
                                            @if (Auth::user()->role == 1)
                                                <a class="text-warning"
                                                    href="{{ route('Services.serviceEmployeeChange', ['id' => $item->id]) }}"><i
                                                        class="fas fa-exchange-alt fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            @endif
                                            {{-- <a class="text-warning" type="button" id="convertEmplyee"
                                                data-id="{{ $item->id }}"><i
                                                    class="fas fa-exchange-alt fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                        @endif
                                        {{-- <a href="{{ route('Services.edit', ['id' => $item->id]) }}"><i
                                                class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                        <a type="button" id="edit_todo" data-id="{{ $item->id }}"><i
                                                class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;



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
                                                    <form action="{{ url('/Services/destroy') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModel">Delete A Service!
                                                            </h5>
                                                            <button class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name='service_delete_id'
                                                                id="lead_id">
                                                            <h5><b>Are you sure you want to delete this Service ?</b></h5>

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




                <!-- Modal show-->
                <div class="modal fade" id="ServiceShowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Show Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- <p><strong>ID:</strong> <span id="Service-id"></span></p> --}}
                                <p><strong><b style="color: #229ED9">Name:</b></strong> <span id="Service-name"></span>
                                </p>
                                <p><strong><b style="color: #229ED9">Responsible Employees:</b></strong> <span
                                        id="Service-Responsible_employee"></span>
                                </p>
                                <p><strong><b style="color: #229ED9">Creation_date:</b></strong> <span
                                        id="Service-Creation_date"></span></p>
                                <p><strong><b style="color: #229ED9">Note:</b></strong> <span id="Service-Note"></span>
                                </p>
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
            $.get('todos/' + id + '/edit1', function(res) {

                $("#modal_title").html('Edit Service');

                $("#id").val(res.id);

                $("#name_todo").val(res.name);
                $("#Creation_date_todo").val(res.Creation_date);
                // $("#employees_todo").val(res.employees);

                $("#description_todo").val(res.description);
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
                    url: "todos/storer",
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
                        $('#Creation_dateErrorUpdate').text(response.responseJSON.errors.Creation_date);
                        // $('#employeesError').text(response.responseJSON.errors.employees);



                    }
            });
        });
        }
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
                    $('#Service-name').text(data.name);
                    $('#Service-Responsible_employee').html('');

                    data.employees.forEach((element) => {
                        $('#Service-Responsible_employee').append('<br>' + i++ +
                            '- &nbsp;' + element.name);
                    });
                    // $('#Service-Responsible_employee').text(data.employees.name);
                    $('#Service-Creation_date').text(data.Creation_date);
                    $('#Service-Note').text(data.description);
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
                    url: "/Services/store",
                    data: $('#ServiceForm').serialize(),
                    // dataType: "dataType",
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
                        $('#Creation_dateError').text(res.responseJSON.errors.Creation_date);
                        $('#employeesError').text(res.responseJSON.errors.employees);

                    }

                });
            });

        });
    </script>
    {{-- {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
