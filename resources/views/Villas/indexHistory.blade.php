@extends('LAYOUT')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">&nbsp;&nbsp;&nbsp;

            <h1 class="h3 mb-2 text-gray-800"><b>Modification information</b></h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-danger" href="{{ route('DeleteAllModifieHistories', ['id' => $villa_id]) }}" role="button">Delete All</a>&nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="{{ route('villas') }}" role="button">back</a>
        </div>
        <br>
        {{-- <button type="button" class="btn btn-primary" id="add_todo">  Add Todo </button> --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            {{-- <a href="{{route('employee.edit',['id'=>$item->id])}}" class="fas fa-2x fa-edit" data-toggle="modal"
                                            data-target="#exampleModal" ></a> --}}



            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit Date</th>
                                <th scope="col">User who edited</th>
                                <th scope="col">Old Data</th>
                                <th scope="col">Modified Things</th>
                                <th style="width: 8em" scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit Date</th>
                                <th scope="col">User who edited</th>
                                <th scope="col">Old Data</th>
                                <th scope="col">Modified Things</th>
                                <th style="width: 8em" scope="col">Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @php
                                $j = 1;
                            @endphp

                            @foreach ($villas_history_date as $item)
                                <tr id="row1_todo_{{ $item->id }}">
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->EditDate }}</td>
                                    <td>{{ $item->employees->name }}</td>
                                    <td>{{ $item->OldData }}</td>
                                    <td>{{ $item->NewData }}</td>
                                    <td>
                                        <div class="row">&nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('villas-history-date-delete', ['id' => $item->id]) }}"><button
                                                    type="button" class="btn btn-danger">Delete</button></a>
                                            &nbsp;&nbsp;&nbsp;

                                        </div>
                                        {{-- <a
                                        href="{{ route('villas-history-date', ['id' => $item->id]) }}"><i
                                            class='fas fa-calendar-alt fa-2x'></i></a> --}}

                                    </td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- The Modal by change Employee-->






            </div>
        </div>

    </div>
@endsection
