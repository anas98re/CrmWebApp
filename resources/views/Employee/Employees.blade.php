@extends('LAYOUT')

@section('content')
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><b>Employees</b></h1>

        {{-- <a  class="nav-link" href="/employee/create">
            <i class="fa fa-cart-plus"></i>
            <span>Add Employee</span></a> --}}


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <a style="width: 10em" class="nav-link" data-bs-toggle="modal" data-bs-target="#addEmployeeModel">
                <button style="width: 10em" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add
                    Employee
                </button>
            </a>

            <!-- Modal Add-->
            <div class="modal fade" id="addEmployeeModel" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Teacher</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="EmployeeForm">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    <span class="text-danger" id="nameError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                        <span class="text-danger" id="emailError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="At least 8 characters">
                                        <span class="text-danger" id="passwordError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Between 8 and 15 numbers">
                                    <span class="text-danger" id="phoneError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Job Title</label>
                                    <input type="text" name="Job_title" class="form-control">
                                    <span class="text-danger" id="Job_titleError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">address</label>
                                    <input type="text" name="address" class="form-control">
                                    <span class="text-danger" id="addressError"></span>
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
                                <button type="submit" class="btn btn-primary">ADD</button>
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
                                <th scope="col">phone</th>
                                <th scope="col">Job Title (Department)</th>
                                <th scope="col">Actions</th>
                                <th style="width: 6em" scope="col">Delete Employee</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">phone</th>
                                <th scope="col">Job Title (Department)</th>
                                <th scope="col">Actions</th>
                                <th style="width: 6em" scope="col">Delete Employee</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($employees as $item)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->Job_title }}<b
                                            style="color: rgb(50, 10, 232)"> ({{ $item->department->name }})</b></td>
                                    <td style="width: 10%">
                                        {{-- <a href="{{ route('employee.edit', ['id' => $item->id]) }}"><i
                                                class="fas fa-2x fa-edit"></i></a>&nbsp; --}}
                                        <a type="button" id="edit_todo" data-id="{{ $item->id }}"><i
                                                class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                        {{-- <a href="{{route('employee.edit',['id'=>$item->id])}}" class="fas fa-2x fa-edit" data-toggle="modal"
                                            data-target="#exampleModal" ></a> --}}
                                        <a class="text-success" href="javascript:void(0)" id="show-employees"
                                            data-url="{{ route('employees.show', $item->id) }}"><i
                                                class="fas fa-2x fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                        {{-- <a class="text-success" href="{{route('employees.show',['id'=>$item->id])}}"><i class="fas fa-2x fa-eye"></i></a>&nbsp;&nbsp;
                                            <a href="{{route('employee.edit',['id'=>$item->id])}}"><i class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp; --}}


                                        {{-- <a class="text-danger" href="{{route('employee.destroy',['id'=>$item->id])}}"><i class="fas fa-2x fa-trash-alt"></i></a> --}}

                                    </td>
                                    <td>


                                        <div class="row">&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger deleteService" value="{{ $item->id }}"
                                            data-target="#deleteModel">Delete</button>
                                        &nbsp;&nbsp;&nbsp;

                                        </div>


                                        <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">



                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('/employee/destroy') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModel">Delete An Employee !</h5>
                                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name='employee_delete_id' id="lead_id">
                                                            <h5><b>Are you sure you want to delete this Employee ?</b></h5>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                            <button type="submit" class="btn btn-danger">Yes Delete</button>
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
                <!-- The Modal by edit employee-->
                <div class="modal" id="modal_todo">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="form_todo">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modal_title"></h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="id" disabled>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" name="name" id="name_todo"  class="form-control">
                                    <span class="text-danger" id="nameErrorUpdate"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">phone</label>
                                    <input type="text" name="phone" id="phone_todo"  class="form-control" >
                                    <span class="text-danger" id="phoneErrorUpdate"></span>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="exampleFormControlInput1">user</label> --}}
                                    <input type="hidden" name="user_id" id="user_id_todo"  class="form-control" >

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">address</label>
                                    <input type="text" name="address" id="address_todo"  class="form-control">
                                    <span class="text-danger" id="addressErrorUpdate"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" name="email"  class="form-control"
                                    id="email_todo" >
                                    <span class="text-danger" id="emailErrorUpdate"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">password</label>
                                    <input type="password" name="password"  class="form-control"
                                    id="password_todo" >
                                    <span class="text-danger" id="passwordErrorUpdate"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Job Title</label>
                                    <input type="text" name="Job_title"
                                        class="form-control" id="Job_title_todo" >
                                        <span class="text-danger" id="Job_titleErrorUpdate"></span>
                                </div>
                                <label for="exampleFormControlInput1">Role</label>
                                <select class="form-control" name="role"
                                id="role_todo">
                                <option ></option>
                                    <option value="1"><b style="color: #000000">Admin</b></option>
                                    <option value="2"><b style="color: #064968">Marketing</b></option>
                                    <option value="3"><b style="color: #5f95ae">Sales</b></option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Note</label>
                                    <input type="text" name="description"
                                        class="form-control" id="description_todo" >
                                </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button onclick="EditeMPLOYEE()" class="btn btn-info">Save</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- show employee-->
                <div class="modal fade" id="employeesShowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Show Employee Info</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong class="d"><b style="color: #229ED9">Name:</b></strong> <b><span id="employee_name"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d"><b style="color: #229ED9">phone:</b></strong><b> <span id="employee_phone"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d"><b style="color: #229ED9">Job_title:</b></strong> <b><span id="employee_Job_title"></span></b>
                                </p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d"><b style="color: #229ED9">department:</b></strong><b> <span
                                            id="employee_department"></span></b>
                                </p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d"><b style="color: #229ED9">Email:</b></strong><b> <span
                                            id="employee_email"></span></b>

                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d"><b style="color: #229ED9">Note:</b></strong> <b><span
                                            id="employee_description"></span></b></p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                $.get('employees/' + id + '/edit', function(res) {
                    $("#modal_title").html('Edit Employee');
                    $("#id").val(res.id);
                    $("#name_todo").val(res.name);
                    $("#phone_todo").val(res.phone);
                    $("#user_id_todo").val(res.user_id);
                    $("#address_todo").val(res.address);
                    $("#email_todo").val(res.user.email);
                    $("#password_todo").val(res.user.password);
                    $("#Job_title_todo").val(res.Job_title);
                    $("#role_todo").val(res.user.role);
                    $("#description_todo").val(res.description);
                    $("#modal_todo").modal('show');
                });
            });


            function EditeMPLOYEE() {
        $("form").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "employees/add",
                data: $("#form_todo").serialize(),
                type: 'POST',
                success: function(res) {
                    if (res) {

                location.reload();

                if ($("#id").val()) {
                    $("#row_todo_" + res.id).replaceWith(row);
                } else {
                    $("#list_todo").prepend(row);
                }

                $("#form_todo").trigger('reset');
                $("#modal_todo").modal('hide');

                }

            },
                        error: function(res) {
                                $('#nameErrorUpdate').text(res.responseJSON.errors.name);
                                $('#emailErrorUpdate').text(res.responseJSON.errors.email);
                                $('#phoneErrorUpdate').text(res.responseJSON.errors.phone);
                                $('#passwordErrorUpdate').text(res.responseJSON.errors.password);
                                $('#addressErrorUpdate').text(res.responseJSON.errors.address);
                                $('#Job_titleErrorUpdate').text(res.responseJSON.errors.Job_title);
                            // console.log(error);
                            // alert('The data is incorrect, Either there are required entries that you did not enter, or the name or email or phone already exists, or you used letters in the place of numbers, or numbers in the place of letters');
                        }
        });
    });
    }
        </script>

        <script>
            $(document).ready(function() {

                $('body').on('click', '#show-employees', function() {
                    var userURL = $(this).data('url');
                    //   var a = document.getElementById('a');
                    $.get(userURL, function(data) {
                        $('#employeesShowModal').modal('show');
                        $('#employee_id').text(data.id);
                        $('#employee_name').text(data.name);
                        $('#employee_phone').text(data.phone);
                        $('#employee_Job_title').text(data.Job_title);
                        $('#employee_department').text(data.department.name);
                        $('#employee_email').text(data.user.email);
                        $('#employee_description').text(data.description);

                    })
                });

            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#EmployeeForm').on('submit', function(e) {
                    e.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: "getAllEmployee",
                        data: $('#EmployeeForm').serialize(),

                        success: function(response) {
;
                            if (response) {

                                location.reload();

                                $("#EmployeeForm")[0].reset();
                                $("#addEmployeeModel").modal('hide');
                            }

                        },
                        error: function(response) {
                                $('#nameError').text(response.responseJSON.errors.name);
                                $('#emailError').text(response.responseJSON.errors.email);
                                $('#phoneError').text(response.responseJSON.errors.phone);
                                $('#passwordError').text(response.responseJSON.errors.password);
                                $('#addressError').text(response.responseJSON.errors.address);
                                $('#Job_titleError').text(response.responseJSON.errors.Job_title);
                            // console.log(error);
                            // alert('The data is incorrect, Either there are required entries that you did not enter, or the name or email or phone already exists, or you used letters in the place of numbers, or numbers in the place of letters');
                        }

                    });
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
