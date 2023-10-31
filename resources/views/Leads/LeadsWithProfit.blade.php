@extends('LAYOUT')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="  font-family: 'Times New Roman', serif;"><b>Leads</b></h1>

        @if (Auth::user()->role != 3)
        <a href="/Leads"><button class="button button7"><b style="float: left;  font-size: 16px;">All Leads<div>{{$NUMBER_OF_lEADS}}</div></b><i style="float: right" class="fa fa-users fa-2x"  aria-hidden="true"></i></button></a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Follow_up']) }}"><button
            class="button button3"><b style="float: left;  font-size: 16px;">Follow Up<div>{{$NUMBER_OF_Follow_up}}</div></b><i style="float: right" class="fa fa-phone fa-2x" aria-hidden="true"></i></button></a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Meeting']) }}"><button
                    class="button button4"><b style="float: left;  font-size: 16px;">Meeting<div>{{$NUMBER_OF_Meeting}}</div></b></button></a>&emsp;

        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Deal']) }}">
            <button class="button button6">
                <b style="float: left;  font-size: 16px;">Deal <div>{{$NUMBER_OF_DEALS}}</div></b>
                <i class='fas fa-handshake' style='float: right;font-size:24px'></i>
            </button>
        </a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'No_Unswer']) }}"><button class="button button1"><b style="float: left;  font-size: 16px;">No Unswer<div>{{$NUMBER_OF_No_Unswer}}</div></b><i class='fas fa-phone-slash' style='float: right;font-size:16px'></i></button></a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Undefined']) }}"><button
                class="button button2"><b style="float: left;  font-size: 16px;">Undefined<div>{{$NUMBER_OF_Undefined}}</div></b> <i style="float: right;font-size:24px" class='far fa-clipboard far-2x' ></i></button></a>&emsp;
            

        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Cold']) }}"><button
                class="button button5"><b style="float: left;  font-size: 16px;">junk<div>{{$NUMBER_OF_Cold}}</div></b><i class='far fa-snowflake' style='float: right;font-size:24px'></i></button></a>&emsp;

    @endif

    @if (Auth::user()->role == 3)
        <a href="/Leads"><button class="button button7"><b style="float: left;  font-size: 16px;">All Leads<div>{{$NUMBER_OF_lEADS_FOR_THIS_EMPLOYEE}}</div></b><i style="float: right" class="fa fa-users fa-2x"  aria-hidden="true"></i></button></a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Follow_up']) }}"><button
            class="button button3"><b style="float: left;  font-size: 16px;">Follow Up<div>{{$NUMBER_OF_Follow_up_FOR_THIS_EMPLOYEE}}</div></b><i style="float: right" class="fa fa-phone fa-2x" aria-hidden="true"></i></button></a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Meeting']) }}"><button
                    class="button button4"><b style="float: left;  font-size: 16px;">Meeting<div>{{$NUMBER_OF_Meeting_FOR_THIS_EMPLOYEE}}</div></b></button></a>&emsp;

        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Deal']) }}">
            <button class="button button6">
                <b style="float: left;  font-size: 16px;">Deal <div>{{$NUMBER_OF_DEALS_FOR_THIS_EMPLOYEE}}</div></b>
                <i class='fas fa-handshake' style='float: right;font-size:24px'></i>
            </button>
        </a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'No_Unswer']) }}"><button class="button button1"><b style="float: left;  font-size: 16px;">No Unswer<div>{{$NUMBER_OF_No_Unswer_FOR_THIS_EMPLOYEE}}</div></b><i class='fas fa-phone-slash' style='float: right;font-size:16px'></i></button></a>&emsp;
        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Undefined']) }}"><button
                class="button button2"><b style="float: left;  font-size: 16px;">Undefined<div>{{$NUMBER_OF_Undefined_FOR_THIS_EMPLOYEE}}</div></b> <i style="float: right;font-size:24px" class='fas fa-calendar-times'></i></button></a>&emsp;


        <a href="{{ route('Leads.FilterLeadsByStatus', ['req' => 'Cold']) }}"><button
                class="button button5"><b style="float: left;  font-size: 16px;">junk<div>{{$NUMBER_OF_Cold_FOR_THIS_EMPLOYEE}}</div></b><i class='far fa-snowflake' style='float: right;font-size:24px'></i></button></a>&emsp;

    @endif


        <br>
        <br>

        @php
            $id_Result = 0;
        @endphp
        @if (Auth::user()->role != 3)
            <!-- DataTales Example -->
            {{-- <form action="{{ route('Leads.EnterEmployee') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="exampleFormControlInput1">Choose An Employee To Filter </label>
                <select class="form-control" name="employee_id">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach

                </select>
                <br>
                <button class="btn btn-primary" type="submit">Filter</button>
    </div>

    <br>
    </form> --}}
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6><br> --}}


            <span class="form-group">
                <div class="row">
                    <div style="padding-left: 10px">

                        {{-- @if (Auth::user()->role != 3) --}}

                            <div style="float: left;  font-size: 16px;" class="button01 button71">
                                <div class="row">&nbsp;&nbsp;
                                    <span style="float: left;"><h6><b style="font-size: 90%;">Filter By Platform</b></h6></span>&nbsp;&nbsp;&nbsp;&nbsp;

                                    {{-- <b style="color:rgb(255, 255, 255)"><i class='fab fa-keycdn' style='font-size:24px;'></i></b>&emsp;&emsp; --}}
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Facebook" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Facebook']) }}"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a> &nbsp;&nbsp;
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Instagram" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Instagram']) }}"
                                    > <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                                    height="20"  class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg></a> &nbsp;&nbsp;
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Telegram" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Telegram']) }}"
                                    > <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                                    height="20"  class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                    </svg></a> &nbsp;&nbsp;
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Twitter" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Twitter']) }}"
                                    > <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                                    height="20"  class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg></a> &nbsp;&nbsp;
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Tiktok" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Tiktok']) }}"
                                    ><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-tiktok" viewBox="0 0 16 16" >
                                    <path  d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                    </svg></a> &nbsp;&nbsp;
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By WhatsApp" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'WhatsApp']) }}"
                                    ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path  d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg></a>&nbsp;&nbsp;
                                    <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Gmail" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Gmail']) }}"
                                            ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg></a>&nbsp;&nbsp;&nbsp;
                                        <a style="color: white" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Other']) }}"> <i style="padding-top: 4px" class="fas fa-th-large fas-2x"></i></a>

                                    {{-- <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Other Source" href="{{ route('Leads.FilterLeadsBySource', ['req' => 'Other']) }}"
                                            ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                            class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                            <path  d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                                        </svg></a>&nbsp; --}}
                                </div>

                        </div>
                        {{-- @endif --}}

                    </div>
                    &nbsp;&nbsp;&nbsp;

                    <div style="padding-left: 10px">

                        @if (Auth::user()->role != 3)

                        {{-- <a type="button" id="FilterByEmployee"> --}}
                            <div style="float: left;  " class="button081 button71">

                                {{-- <div style="padding-left: 20px" class="row"> --}}



                                    <!-- DataTales Example -->
                                    <form  action="{{ url('/Leads/EnterEmployee/')}}" method="GET" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{-- @csrf --}}
                                        <div class="row" >&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i  class='fas fa-user-tie' style='font-size:17px;padding-top: 2px'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <h6><b style="font-size: 90%;padding-top: 4px">Filter By Employee</b></h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <select style="float: Right;width: 40%; height: 50%;padding: 0; " onchange="this.form.submit()" id="employee_id"  class="form-control" name="employee_id">
                                                <option value=""></option>
                                                @foreach ($employeesChoose as $employee)

                                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                                @endforeach

                                            </select>


                                        {{-- <button style="padding: 0;width: 20%"  class="btn btn-primary" type="submit" >Filter</button> --}}
                                        </div>


                                        <br>
                                    </form>
                                {{-- </div> --}}

                            </div>
                        {{-- </a> --}}
                        @endif

                    </div>

                    <div style="padding-left: 10px">

                        {{-- @if (Auth::user()->role != 3) --}}

                          <div style="float: left;  font-size: 16px;" class="button015 button71">
                            <form  action="{{ route('Leads.EnterDate') }}" method="GET" onchange="this.form.submit()" enctype="multipart/form-data">
                                @csrf
                                <div class="row">&nbsp;&nbsp;

                                    {{-- <h6><b>Filter By Date</b></h6>&nbsp;&nbsp; --}}
                                    <i class='fas fa-calendar-alt' style='font-size:20px;padding-top: 4px'></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input style="height: 50%;padding: 0;width: 25%;" type="date" name="first_date" class="form-control" id="myFirstDate" checked placeholder="10 Digits">&nbsp;&nbsp;&nbsp;
                                    <input style="height: 50%;padding: 0;width: 25%" type="date" name="second_date" class="form-control" id="mySecondDate" checked>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <button style="padding: 0;width: 20%"  class="btn btn-primary" type="submit" >Filter</button>
                            </div>

                            </form>
                        </div>
                        {{-- @endif --}}

                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                    {{-- <div class="card-body" > --}}

                    {{-- @if (Auth::user()->role != 3)
                        <div style="float: right;">
                            <h6><b>OtherFilter</b></h6>
                            <a class="container" href="/Leads/getPageFilter"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" fill="currentColor" class="bi bi-funnel-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                                </svg></a>&emsp;

                        </div>
                    @endif --}}

                </div>
            </span>

            {{-- </form> --}}

        </div>
        {{-- <div class="container">
                @if ($messages)
                <div class="alert alert-primary" role="alert">
                  {{$messages}}
                  </div>
                @endif

            </div> --}}
            {{-- <a style="width: 10em" class="nav-link"  data-bs-toggle="modal"
            data-bs-target="#addLeadModel">
            <button style="width: 10em" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add
                Lead</button></a> --}}

                   <!-- Modal -->
            <div class="modal fade" id="addLeadModel" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Lead INfo</h5>
                        <div id="successMessage"></div>
                        <div style="display: none;" id="errorMessageDialog">
                            <p id="errorMessage"></p>
                            </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="LeadForm">
                            {!! csrf_field() !!}
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">email</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" >
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">phone</label>
                                <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="10 Digits" >
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">address</label>
                                <input type="text" name="address" class="form-control" id="exampleFormControlInput1" >
                              </div>



                              <div class="form-group">
                                <label for="exampleFormControlInput1">Source</label>
                                <select class="form-control" name="source_id"
                                    id="exampleFormControlSelect1">
                                    @foreach ($sources as $source)
                                        <option value="{{ $source->id }}">{{ $source->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Service</label>
                                <select class="form-control" name="service_id"
                                    id="exampleFormControlSelect1">
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Campaign</label>
                                <select class="form-control" name="campaign_id"
                                    id="exampleFormControlSelect1">
                                    @foreach ($campaigns as $campaign)
                                        <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (Auth::user()->role != 3)
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Employee</label>
                                <select class="form-control" name="employee_id"
                                    id="exampleFormControlSelect1">
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            @if (Auth::user()->role == 3)
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Employee</label>
                                <input type="text" name="Employee" value="{{Auth::user()->name}}" class="form-control" id="exampleFormControlInput1" disabled>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Note</label>
                                <input type="text" name="description"  class="form-control">
                            </div>
                            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">state</label>
                                <select onclick="myFunction()" class="form-control"   name="state"   id="a">
                                    <option value="undefined">undefined</option>
                                    <option value="No_Unswer">No_Unswer</option>
                                    <option value="Meeting">Meeting</option>
                                    <option value="Follow_up">Follow_up</option>
                                    <option value="Cold">junk</option>
                                    <option value="Deal">Deal</option>
                                  </select>
                            </div>
                            {{-- @if () --}}
                            <div style="color: red"  class="ss hidden" >
                              {{-- <div > --}}
                                <label for="exampleFormControlInput1">profit_amount</label>
                                <input type="text" name="profit_amount" class="form-control" id="exampleFormControlInput1" placeholder="100 AED"  >
                              {{-- </div> --}}
                            </div>
                            <br>


                            <button onclick="AddLead()" class="btn btn-primary">ADD</button>
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
        {{-- <a style="width: 10em" class="nav-link" href="/Leads/create">
            <button style="width: 10em" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Lead</button></a> --}}
            @if (Auth::user()->role!=3 )
            <b style="padding-top: 9px">&emsp;<button  style="height: 2.4em;" class="btn btn-danger delete_all" data-url="{{ url('DeleteAllLeads') }}">Delete All Selected</button></b>
            @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            {{-- <th scope="col">email</th> --}}
                            <th scope="col">phone</th>
                            <th scope="col">state</th>
                            {{-- <th scope="col">address</th> --}}

                            <th scope="col">Responsible_employee</th>
                            <th scope="col">source</th>
                            <th scope="col">arrive_date</th>
                            {{-- <th scope="col">description</th> --}}
                            <th scope="col" style="color: red">profit_amount</th>
                            <th style="width: 7em" scope="col">Actions</th>
                            @if (Auth::user()->role!=3 )
                            <th style="width: 8em" scope="col">Delete Leads</th>
                            @endif
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            {{-- <th scope="col">email</th> --}}
                            <th scope="col">phone</th>
                            <th scope="col">state</th>
                            {{-- <th scope="col">address</th> --}}

                            <th scope="col">Responsible_employee</th>
                            <th scope="col">source</th>
                            <th scope="col">arrive_date</th>
                            {{-- <th scope="col">description</th> --}}
                            <th scope="col" style="color: red">profit_amount</th>
                            <th style="width: 7em" scope="col">Actions</th>
                            @if (Auth::user()->role!=3 )
                            <th style="width: 8em" scope="col">Delete Leads</th>
                            @endif
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($Leads as $item)
                            <tr>
                                <th scope="row">{{ $i++ }}  @if (Auth::user()->role != 3)   <input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></th>@endif
                                <td>{{ $item->name }}</td>
                                {{-- <td>{{ $item->email }}</td> --}}
                                <td>{{ $item->phone }}</td>
                                @if ($item->state=='Follow_up')
                                <td>  <span class="button0 button30"><b >Follow Up</b></span> </td>
                                @elseif ($item->state=='Deal')
                                <td>  <span class="button0 button60"><b >Deal</b></span> </td>
                                @elseif ($item->state=='Meeting')
                                <td>  <span class="button0 button40"><b >Meeting</b></span> </td>
                                @elseif ($item->state=='Cold')
                                <td>  <span class="button0 button50"><b >junk</b></span> </td>
                                @elseif ($item->state=='Undefined')
                                <td>  <span class="button0 button20"><b >Undefined</b></span> </td>
                                @elseif ($item->state=='No_Unswer')
                                <td>  <span class="button0 button10"><b >No Unswer</b></span> </td>
                                @else
                                <td style="color: #001e2c">{{ $item->state }}</td>
                                @endif
                                {{-- <td>{{ $item->address }}</td> --}}

                                @if ($item->employees==null)
                                <td>Not Found</td>
                                @else
                                <td>{{ $item->employees->name }}</td>
                                @endif
                                @if ($item->source->name=='Instagram')
                                <td>  <span style="color: rgb(216, 100, 64)"><svg xmlns="http://www.w3.org/2000/svg" width="26"
                                    height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg> </span></td>
                                @elseif ($item->source->name=='Telegram')
                                <td>  <span   style="color: #229ED9"> <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                    height="26" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                </svg></span> </td>
                                @elseif ($item->source->name=='Twitter')
                                <td>  <span style="color: #229ED9"> <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                    height="26" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></span> </td>
                                @elseif ($item->source->name=='Tiktok')
                                <td> <b> <span style="color: #4f4c4c"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path
                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                </svg></span> </b></td>
                                @elseif ($item->source->name=='WhatsApp')
                                <td>  <span style="color: #128C7E"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg></span> </td>
                                @elseif ($item->source->name=='Facebook')
                                <td>  <span style="color: blue" ><svg
                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></span> </td>
                                @elseif ($item->source->name=='Other')
                                <td>
                                    <i style="color:rgb(85, 85, 85)" class="fas fa-th-large fas-4x"> Other</i>
                                </td>
                                {{-- <td>  <span style="color:rgb(255, 114, 114)" ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                                </svg></a></span> </td> --}}
                                @else
                                <td ><span style="color:rgb(85, 85, 85)"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg></span></td>
                                @endif
                                <td>{{ $item->arrive_date }}</td>
                                <td style="color: red">{{ $item->profit_amount }} <b style="color: black">AED</b></td>

                                {{-- <td>{{ $item->description }}</td> --}}


                                <td>
                                    <a class="text-success" href="javascript:void(0)" id="show-Leads"
                                        data-url="{{ route('Leads.show', $item->id) }}"><i
                                            class="fas fa-2x fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <a class="text-success" href="{{ route('Leads.show', ['id' => $item->id]) }}"><i
                                                class="fas fa-2x fa-eye"></i></a>&nbsp;&nbsp; --}}

                                                <a type="button" id="edit_todo" data-id="{{ $item->id }}"><i
                                                    class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{-- <a href="{{ route('Leads.edit', ['id' => $item->id]) }}"><i
                                            class="fas fa-2x fa-edit"></i></a> --}}
                                </td>
                                @if (Auth::user()->role!=3 )
                                <td>
                                    {{-- <a class="text-danger" href="{{ route('Leads.destroy', ['id' => $item->id]) }}" data-toggle="modal"
                                            data-target="#exampleModal"><i
                                                class="fas fa-2x fa-trash-alt"></i></a> --}}

                                    {{-- <a class="text-danger" value="{{$item->id}}" data-toggle="modal"
                                                    data-target="#exampleModal"><i
                                                        class="fas fa-2x fa-trash-alt"></i></a> --}}

                                    <button type="button" class="btn btn-danger deleteLead" value="{{ $item->id }}"
                                        data-target="#deleteModel" data-toggle="modal">Delete</button>
                                    {{-- <i  class="fa fa-user-times deleteLead" value="{{$item->id}}" data-target="#deleteModel" data-toggle="modal" aria-hidden="true"></i> --}}
                                    {{-- <button  class="deleteLead"  value="{{$item->id}}" data-toggle="modal"
                                                            data-target="#deleteModel"><a style="color: red" class="fa fa-user-times fa-2x deleteLead"  ></a></button> --}}


                                    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">



                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ url('/Leads/destroy') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModel">Delete A Lead!</h5>
                                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name='lead_delete_id' id="lead_id">
                                                        <h5><b>Are you sure you want to delete this lead ?</b></h5>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                            {{-- </div> --}}
                                </td>
                                @endif
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <br>
            </div>
            <!-- The Modal by edit Lead-->
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
                                @if (Auth::user()->role==1)
                                            <label for="exampleFormControlInput1"><b style="color: #229ED9">Name</b></label>
                                            <input type="text" name="name" id="name_todo" class="form-control"
                                                placeholder="Enter todo ...">
                                                <span class="text-danger" id="nameErrorUpdate"></span><br>
                                            <label for="exampleFormControlInput1"><b style="color: #229ED9">Email</b></label>
                                            <input type="email" name="email" id="email_todo"
                                                class="form-control" placeholder="Enter email ...">
                                                <span class="text-danger" id="emailErrorUpdate"></span><br>
                                            <label for="exampleFormControlInput1"><b style="color: #229ED9">Phone</b></label>
                                            <input type="text" name="phone" id="phone_todo" class="form-control"
                                                placeholder="Enter phone ...">
                                                <span class="text-danger" id="phoneErrorUpdate"></span><br>
                                            <label for="exampleFormControlInput1"><b style="color: #229ED9">Address</b></label>
                                            <input type="text" name="address" id="address_todo" class="form-control"
                                                placeholder="Enter address ...">
                                                <span class="text-danger" id="addressErrorUpdate"></span><br>
                                @endif
                                @if (Auth::user()->role==1 || Auth::user()->role==3 )
                                            <label for="exampleFormControlInput1"><b style="color: #229ED9">Description</b></label>
                                            <input type="text" name="description" id="description_todo" class="form-control"
                                                placeholder="Enter description ..."><br>
                                @endif
                                @if (Auth::user()->role==1 || Auth::user()->role==2 )
                                    <label for="exampleFormControlInput1"><b style="color: #229ED9">Employee</b></label>
                                <select class="form-control" name="employee_id"  id="employee_id_todo">
                                    @foreach ($employeesChoose as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                                @endif

                                    {{-- @if () --}}


                                @if (Auth::user()->role==1)
                                <label for="exampleFormControlInput1"><b style="color: #229ED9">Service</b></label>
                                <select class="form-control" name="service_id" id="service_id_todo">
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select><br>
                                <label for="exampleFormControlInput1"><b style="color: #229ED9">Source</b></label>
                                <select class="form-control" name="source_id" id="source_id_todo"
                                    id="exampleFormControlSelect1">
                                    @foreach ($sources as $source)
                                        <option value="{{ $source->id }}">{{ $source->name }}</option>
                                    @endforeach
                                </select><br>
                                <label for="exampleFormControlInput1"><b style="color: #229ED9">Campaign</b></label>
                                <select class="form-control" name="campaign_id" id="campaign_id_todo">
                                    @foreach ($campaigns as $campaign)
                                        <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                                    @endforeach
                                </select><br>
                                {{-- <label for="exampleFormControlInput1"><b style="color: #229ED9">Seen</b></label>
                                <input type="text" name="seen" id="seen_todo" class="form-control"
                                    placeholder="Enter seen ..."><br> --}}
                                    {{-- @if (Auth::user()->role==1 || Auth::user()->role==3 ) --}}
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><b style="color: #229ED9">state</b></label>
                                        <select onclick="myFunction2()" class="form-control"    name="state"   id="aa">
                                            <option value="Undefined">undefined</option>
                                            <option value="No_Unswer">No_Unswer</option>
                                            <option value="Meeting">Meeting</option>
                                            <option value="Follow_up">Follow_up</option>
                                            <option value="Cold">junk</option>
                                            <option value="Deal">Deal</option>
                                          </select>
                                          <span class="text-danger" id="stateErrorUpdate"></span><br>
                                    </div>
                                    <div style="color: red"  class="sss" >
                                        {{-- <div > --}}
                                          <label for="exampleFormControlInput1">profit_amount</label>
                                          <input type="text" id="profit_amount_todo" name="profit_amount" class="form-control" id="exampleFormControlInput1" placeholder="100 AED"  >
                                        {{-- </div> --}}
                                      </div>
                                   <br>
                                   {{-- @endif --}}

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button  onclick="EditLead()" class="btn btn-info">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="LeadsShowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Show Lead</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong class="d">ID:</strong><b> <span id="Lead-id"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">Name:</strong> <b><span id="Lead-name"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">phone:</strong><b> <span id="Lead-phone"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">state:</strong> <b><span id="Lead-state"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">address:</strong><b> <span id="Lead-address"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">Responsible_employee:</strong> <b><span id="Lead-employees"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">source:</strong> <b><span id="Lead-source"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">arrive_date:</strong><b> <span id="Lead-arrive_date"></span></b></p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">profit_amount:</strong> <b><span id="Lead-profit_amount"></span></b>
                            </p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">campaign:</strong> <b><span id="Lead-campaign"></span></b>
                            </p>
                            <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                            <p><strong class="d">Note:</strong> <b><span id="Lead-description"></span></b>
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
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    $("body").on('click', '#ClickFilterByEmployee', function() {
    // function ClickFilterByEmployee() {
    // $("form").on('submit', function(e) {
        e.preventDefault();
        var id = $(this).data('employee_id_Filter');
        $.ajax({
            url: 'FilterByEmployee/'+ id ,
            data: $("#employee_id_Filter").serialize(),
            type: 'GET'
        }).done(function(res) {

            // alert(e);
            // window.location.reload();
            // location.reload();

            // if ($("#id").val()) {
            //     $("#row_todo_" + res.id).replaceWith(row);
            // } else {
            //     $("#list_todo").prepend(row);
            // }

            $("#form_FilterByEmployee").trigger('reset');
            $("#modal_todo").modal('hide');

        });

    });
// }
</script> --}}


<script type="text/javascript">



        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))
         {
            $(".sub_chk").prop('checked', true);
         } else {
            $(".sub_chk").prop('checked',false);
         }
        });


        $('.delete_all').on('click', function(e) {


            var allVals = [];
            $(".sub_chk:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });


            if(allVals.length <=0)
            {
                alert("Please select row.");
            }  else {


                var check = confirm("Are you sure you want to delete this row?");
                if(check == true){


                    var join_selected_values = allVals.join(",");


                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                location.reload();
                                $(".sub_chk:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                // alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }
            }
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

    $("body").on('click', '#FilterByDate', function() {
        // var id = $(this).data('id');
        $.get( 'FilterByDate', function(res) {
            $("#modal_title").html('FilterByDate');

            $("#modal_FilterDate").modal('show');
        });
    });

    $("body").on('click', '#FilterByEmployee', function() {
        // var id = $(this).data('id');
        // $.get( 'FilterByEmployee', function(res) {
            $("#modal_title").html('FilterByEmployee');
            // $("#employee_id_Filter").val(res.employee_id);
            $("#modal_FilterEmployee").modal('show');
        // });
    });


//     function FilterByEmployee() {
//     $("form").on('submit', function(e) {
//         e.preventDefault();
//         $.ajax({
//             url: "storeEmployeeForFilter",
//             data: $("#employee_id_Filter").serialize(),
//             type: 'POST'
//         }).done(function(res) {

//             // alert(e);
//             location.reload();

//             // if ($("#id").val()) {
//             //     $("#row_todo_" + res.id).replaceWith(row);
//             // } else {
//             //     $("#list_todo").prepend(row);
//             // }

//             $("#form_FilterByEmployee").trigger('reset');
//             $("#modal_todo").modal('hide');

//         });

//     });
// }

    $("#add_todo").on('click', function() {
        $("#form_todo").trigger('reset');
        $("#modal_title").html('Add todo');
        $("#modal_todo").modal('show');
        $("#id").val("");
    });

    $("body").on('click', '#edit_todo', function() {
        var id = $(this).data('id');
        $.get( + id + '/editLeads', function(res) {
            $("#modal_title").html('Edit Service');
            $("#id").val(res.id);
            $("#name_todo").val(res.name);
            $("#email_todo").val(res.email);
            $("#phone_todo").val(res.phone);
            $("#address_todo").val(res.address);
            $("#description_todo").val(res.description);
            $("#profit_amount_todo").val(res.profit_amount);
            $("#aa").val(res.state);
            // $("#arrive_date_todo").val(res.arrive_date);
            $("#service_id_todo").val(res.service_id);
            $("#source_id_todo").val(res.source_id);
            $("#campaign_id_todo").val(res.campaign_id);
            // $("#seen_todo").val(res.seen);
            $("#employee_id_todo").val(res.employee_id);
            $("#modal_todo").modal('show');
        });
    });

//     $(document).ready(function(){
//     function changeFunc(i) {
//      alert(i);
//    }
// });
// $(document).ready(function(){
//     function changeFunc(i){
//         $.ajax({
//             url: "/Leads/EnterEmployee/" + i + ,
//             type: 'GET',
//         }).done(function(res) {
//             console.log(res);
//         alert(res);
//             location.reload();

//             if ($("#id").val()) {
//                 $("#row_todo_" + res.id).replaceWith(row);
//             } else {
//                 $("#list_todo").prepend(row);
//             }

//             $("#form_todo").trigger('reset');
//             $("#modal_todo").modal('hide');

//         });
//     };
//     $("#cep").on("change", hi);
// });

    //save data
    // Edit Or Add
    function EditLead() {
    $("form").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "storeLeads",
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
                                $('#stateErrorUpdate').text(res.responseJSON.errors.state);
                                $('#addressErrorUpdate').text(res.responseJSON.errors.address);
            }

        });
    });
}

</script>

<script>
    function myFunction() {
    var status = document.getElementById("a");

if(status.value=='Deal'){
    $('.ss').removeClass("hidden");
}else{
    $('.ss').addClass("hidden");

}
}
function myFunction2() {
    var status = document.getElementById("aa");

if(status.value=='Deal'){
    $('.sss').removeClass("hidden");
}else{
    $('.sss').addClass("hidden");

}
}
</script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deleteLead', function(e) {
                e.preventDefault();
                var lead_id = $(this).val();
                $('#lead_id').val(lead_id);
                $('#deleteModel').modal('show')
            });
        });


        $(document).ready(function() {
            //
            $('body').on('click', '#show-Leads', function() {
                var userURL = $(this).data('url');
                //   var a = document.getElementById('a');Lead-Email
                $.get(userURL, function(data) {
                    $('#LeadsShowModal').modal('show');
                    $('#Lead-id').text(data.id);
                    $('#Lead-name').text(data.name);
                    $('#Lead-Email').text(data.email);
                    $('#Lead-phone').text(data.phone);
                    $('#Lead-state').text(data.state);
                    $('#Lead-address').text(data.address);
                    if(data.employees==null){
                        $('#Lead-employees').text('Not Found');
                    }
                    else{
                    $('#Lead-employees').text(data.employees.name);}
                    $('#Lead-source').text(data.source.name);
                    $('#Lead-arrive_date').text(data.arrive_date);
                    $('#Lead-profit_amount').text(data.profit_amount);
                    if(data.campaign==null){
                        $('#Lead-campaign').text('Not Found');}
                        else{
                    $('#Lead-campaign').text(data.campaign.name);}
                    $('#Lead-Service').text(data.service);
                    $('#Lead-description').text(data.description);

                    console.log(data);
                })
            });

        });
    </script>

<script type="text/javascript">
function AddLead() {
        $('#LeadForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "Leads/store",
                data: $('#LeadForm').serialize(),

                // dataType: "dataType",
                success: function(response) {
                    if (response) {

                        location.reload();
                        $("#LeadForm")[0].reset();
                        $("#addLeadModel").modal('hide');

                    }

                },
                error: function(error) {
                    console.log(error);
                    alert('The data is incorrect, Either there are required entries that you did not enter, or the name or email or phone already exists, or you used letters in the place of numbers, or numbers in the place of letters');
                }
            });
        });
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection



