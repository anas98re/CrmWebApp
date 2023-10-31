@extends('LAYOUT')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="  font-family: 'Times New Roman', serif;"><b>Campaigns</b></h1>
        <div class="row">&nbsp;&nbsp;&nbsp;
            <div><a href="/Campaigns"><button class="buttonCamaign button771"><b style="font-size: 110%;" >All Campaigns</b></button></a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div style="float: left;  font-size: 16px;" class="button011111 button771">
                &nbsp;&nbsp;
                <span style="float: left;"><h6><b style="font-size: 90%;">Filter By Platform</b></h6></span>&nbsp;&nbsp;&nbsp;&nbsp;

                {{-- <b style="color:rgb(255, 255, 255)"><i class='fab fa-keycdn' style='font-size:24px;'></i></b>&emsp;&emsp; --}}
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Facebook" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Facebook']) }}"> <svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></a> &nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Instagram" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Instagram']) }}"
                > <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                height="20"  class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a> &nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Telegram" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Telegram']) }}"
                > <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                height="20"  class="bi bi-telegram" viewBox="0 0 16 16">
                <path  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                </svg></a> &nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Twitter" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Twitter']) }}"
                > <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                height="20"  class="bi bi-twitter" viewBox="0 0 16 16">
                <path  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a> &nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Tiktok" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Tiktok']) }}"
                ><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-tiktok" viewBox="0 0 16 16" >
                <path  d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                </svg></a> &nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By WhatsApp" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'WhatsApp']) }}"
                ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path  d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg></a>&nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Gmail" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Gmail']) }}"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg></a>&nbsp;&nbsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Other Source" href="{{ route('Campaigns.FilterCampaignsBySource', ['req' => 'Other']) }}"
                        ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                        <path  d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                    </svg></a>&nbsp;
            </div>&nbsp;&nbsp;
            <div style="float: left;  font-size: 16px;" class="button0222 button771">
                &nbsp;&nbsp;
                <span style="float: left;"><h6><b style="font-size: 90%;">Filter By State</b></h6></span>&nbsp;&nbsp;&nbsp;&nbsp;

                {{-- <b style="color:rgb(255, 255, 255)"><i class='fab fa-keycdn' style='font-size:24px;'></i></b>&emsp;&emsp; --}}
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Facebook" href="{{ route('Campaigns.FilterCampaignsByState', ['req' => 'pause']) }}"> <svg
                    xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                    fill="currentColor" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5zm3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5z" />
                </svg></a>&emsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Instagram" href="{{ route('Campaigns.FilterCampaignsByState', ['req' => 'active']) }}"
                > <svg xmlns="http://www.w3.org/2000/svg" width="26"
                height="26" fill="currentColor" class="bi bi-play-fill"
                viewBox="0 0 16 16">
                <path
                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
            </svg></a>&emsp;
                <a style="color:rgb(255, 255, 255)"  data-toggle="tooltip" data-theme="dark" title="Filter By Telegram" href="{{ route('Campaigns.FilterCampaignsByState', ['req' => 'stop']) }}"
                > <svg xmlns="http://www.w3.org/2000/svg" width="26"
                height="26" fill="currentColor" class="bi bi-sign-stop-fill"
                viewBox="0 0 16 16">
                <path
                    d="M10.371 8.277v-.553c0-.827-.422-1.234-.987-1.234-.572 0-.99.407-.99 1.234v.553c0 .83.418 1.237.99 1.237.565 0 .987-.408.987-1.237Zm2.586-.24c.463 0 .735-.272.735-.744s-.272-.741-.735-.741h-.774v1.485h.774Z" />
                <path fill-rule="evenodd"
                    d="M4.893 0a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146A.5.5 0 0 0 11.107 0H4.893ZM3.16 10.08c-.931 0-1.447-.493-1.494-1.132h.653c.065.346.396.583.891.583.524 0 .83-.246.83-.62 0-.303-.203-.467-.637-.572l-.656-.164c-.61-.147-.978-.51-.978-1.078 0-.706.597-1.184 1.444-1.184.853 0 1.386.475 1.436 1.087h-.645c-.064-.32-.352-.542-.797-.542-.472 0-.77.246-.77.6 0 .261.196.437.553.522l.654.161c.673.164 1.06.487 1.06 1.11 0 .736-.574 1.228-1.544 1.228Zm3.427-3.51V10h-.665V6.57H4.753V6h3.006v.568H6.587Zm4.458 1.16v.544c0 1.131-.636 1.805-1.661 1.805-1.026 0-1.664-.674-1.664-1.805V7.73c0-1.136.638-1.807 1.664-1.807 1.025 0 1.66.674 1.66 1.807ZM11.52 6h1.535c.82 0 1.316.55 1.316 1.292 0 .747-.501 1.289-1.321 1.289h-.865V10h-.665V6.001Z" />
            </svg></a>&emsp;

            </div>
    </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <a style="width: 10em" class="nav-link"  data-bs-toggle="modal"
                data-bs-target="#addCampaigneModel">
                <button style="width: 10em" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add
                    Campaign</button></a>


            <!-- Modal -->
            <div class="modal fade" id="addCampaigneModel" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Campaign INfo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="CampaignForm">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    <span class="text-danger" id="nameError"></span><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">start_date</label>
                                    <input type="date" name="start_date" class="form-control" id="start_date"
                                        placeholder="2-2-2022">
                                        <span class="text-danger" id="start_dateError"></span><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">end_date</label>
                                    <input type="date" name="end_date" class="form-control" id="end_date">
                                    <span class="text-danger" id="end_dateError"></span><br>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleFormControlInput1">state</label>
                                    <input type="text" name="state" class="form-control" id="state">
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">state</label>
                                    <select class="form-control" name="state" id="state">
                                        <option value="active">active</option>
                                        <option value="stop">stop</option>
                                        <option value="pause">pause</option>
                                        {{-- <option value="reactive">reactive</option> --}}
                                    </select>
                                    <span class="text-danger" id="stateError"></span><br>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Source</label>
                                    <select class="form-control" name="source_id" id="source_id">
                                        @foreach ($source as $source)
                                            <option value="{{ $source->id }}">{{ $source->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger" id="source_idError"></span><br>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Targert Leads</label>
                                    <input type="text" name="num_leads" class="form-control" id="num_leads">
                                    <span class="text-danger" id="num_leadsError"></span><br>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Service</label>
                                    <select class="form-control" name="service_id" id="service_id">
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger" id="service_idError"></span><br>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleFormControlInput1">service_id</label>
                                    <input type="text" name="service_id" class="form-control">
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Note</label>
                                    <input type="text" name="description" class="form-control" id="description">
                                </div>


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
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">start_date</th>
                                <th scope="col">end_date</th>
                                <th scope="col">num_leads</th>
                                {{-- <th scope="col">remaining_lead</th> --}}
                                {{-- <th scope="col">serviceName</th> --}}
                                <th scope="col">state</th>
                                {{-- <th scope="col">changeStatus</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">start_date</th>
                                <th scope="col">end_date</th>
                                <th scope="col">num_leads</th>
                                {{-- <th scope="col">remaining_lead</th> --}}
                                {{-- <th scope="col">serviceName</th> --}}
                                <th scope="col">state</th>
                                {{-- <th scope="col">changeStatus</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @php
                            $j = 1;
                        @endphp
                            @foreach ($Campaigns as $item)

                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->start_date}}</td>
                                    <td>{{$item->end_date}}</td>
                                    <td>{{$item->num_leads}}</td>
                                    {{-- <td>{{$item->remaining_lead}}</td> --}}
                                    {{-- <td>{{$item->service->name}}</td> --}}

                                    {{-- <td>{{$nameOfServices[$j]}}</td> --}}

                                    {{-- <td>{{$item->state}}</td> --}}
                                    @if ($item->state=='active')
                                <td>  <b style="color: green">active</b> </td>
                                @elseif ($item->state=='stop')
                                <td>  <b style="color: red" >stop</b></td>

                                @else
                                <td ><b style="color:blue">pause</b></td>
                                @endif
                                    {{-- <td>
                                      <a href="{{ route('changeStatusToPause', ['id' => $item->id]) }}">  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5zm3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5z"/>
                                          </svg></a>&emsp;
                                          <a href="{{ route('changeStatusToActive', ['id' => $item->id]) }}" style="color: green">  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                          </svg></a>&emsp;
                                          <a href="{{ route('changeStatusToStop', ['id' => $item->id]) }}" style="color: red"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-sign-stop-fill" viewBox="0 0 16 16">
                                            <path d="M10.371 8.277v-.553c0-.827-.422-1.234-.987-1.234-.572 0-.99.407-.99 1.234v.553c0 .83.418 1.237.99 1.237.565 0 .987-.408.987-1.237Zm2.586-.24c.463 0 .735-.272.735-.744s-.272-.741-.735-.741h-.774v1.485h.774Z"/>
                                            <path fill-rule="evenodd" d="M4.893 0a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146A.5.5 0 0 0 11.107 0H4.893ZM3.16 10.08c-.931 0-1.447-.493-1.494-1.132h.653c.065.346.396.583.891.583.524 0 .83-.246.83-.62 0-.303-.203-.467-.637-.572l-.656-.164c-.61-.147-.978-.51-.978-1.078 0-.706.597-1.184 1.444-1.184.853 0 1.386.475 1.436 1.087h-.645c-.064-.32-.352-.542-.797-.542-.472 0-.77.246-.77.6 0 .261.196.437.553.522l.654.161c.673.164 1.06.487 1.06 1.11 0 .736-.574 1.228-1.544 1.228Zm3.427-3.51V10h-.665V6.57H4.753V6h3.006v.568H6.587Zm4.458 1.16v.544c0 1.131-.636 1.805-1.661 1.805-1.026 0-1.664-.674-1.664-1.805V7.73c0-1.136.638-1.807 1.664-1.807 1.025 0 1.66.674 1.66 1.807ZM11.52 6h1.535c.82 0 1.316.55 1.316 1.292 0 .747-.501 1.289-1.321 1.289h-.865V10h-.665V6.001Z"/>
                                          </svg></a>&emsp;
                                          <a href="{{ route('changeStatusToReactive', ['id' => $item->id]) }}" style="color: rgb(174, 174, 0)"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                                          </svg></a>
                                    </td> --}}

                                    <td>

                                        <a class="text-success" href="javascript:void(0)" id="show-Campaign"
                                        data-url="{{ route('Campaign.show', $item->id) }}"><i
                                            class="fas fa-2x fa-eye"></i></a>&nbsp;&nbsp;
                                            <a type="button" id="Edit" data-id="{{ $item->id }}"><i
                                                class="fas fa-2x fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;


                                    </td>
                                </tr>
                                {{$j++}}
                            @endforeach

                        </tbody>
                    </table>
                </div>

  <!-- The Modal by edit service-->
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
                    <label for="exampleFormControlInput1"><b style="color: #229ED9">Name</b></label>
                    <input type="text" name="name" id="name_todo" class="form-control"
                        placeholder="Enter todo ..."><br>
                    <label for="exampleFormControlInput1"><b style="color: #229ED9">Start date</b></label>
                    <input type="date" name="start_date" id="start_date_todo"
                        class="form-control" placeholder="Enter email ..."><br>
                    <label for="exampleFormControlInput1"><b style="color: #229ED9">End date</b></label>
                    <input type="date" name="end_date" id="end_date_todo" class="form-control"
                        placeholder="Enter end_date ..."><br>
                    <label for="exampleFormControlInput1"><b style="color: #229ED9">State</b></label>
                    <select class="form-control" name="state" id="state_todo">
                        <option>active</option>
                        <option>stop</option>
                        <option>pause</option>
                    </select><br>
                    <label for="exampleFormControlInput1"><b style="color: #229ED9">Num leads</b></label>
                    <input type="text" name="num_leads" id="num_leads_todo" class="form-control"
                        placeholder="Enter description ..."><br>
                        <label for="exampleFormControlInput1"><b style="color: #229ED9">service</b></label>
                        <select class="form-control" name="service_id" id="service_id_todo">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select><br>
                        <label for="exampleFormControlInput1"><b style="color: #229ED9">description</b></label>
                    <input type="text" name="description" id="description_todo" class="form-control"
                        placeholder="Enter profit_amount ..."><br>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button  type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>

                 {{-- show --}}
                <div class="modal fade" id="CampaignsShowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Show Lead</b></h5>
                                {{-- <button type="button"
                                    ></button> --}}
                            </div>
                            <div class="modal-body">
                                <p><strong class="d">ID:</strong><b> <span id="Campaign-id"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">Name:</strong> <b><span id="Campaign-name"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">start_date:</strong><b> <span
                                            id="Campaign-start_date"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">end_date:</strong> <b><span id="Campaign-end_date"></span></b>
                                </p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">state:</strong><b> <span id="Campaign-state"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">num_leads:</strong> <b><span id="Campaign-num_leads"></span></b>
                                </p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">remaining_lead:</strong> <b><span
                                            id="Campaign-remaining_lead"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">services:</strong> <b><span id="Campaign-service"></span></b>
                                </p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                {{-- @foreach ($leads as $leads) --}}
                                <p><strong class="d">leads:</strong> <b><span id="Campaign-leads"></span></b></p>
                                {{-- @endforeach --}}
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">source:</strong> <b><span id="Campaign-source"></span></b></p>
                                <hr class="container" style="width:68%;text-align:left;margin-left:8%">
                                <p><strong class="d">Note:</strong> <b><span
                                            id="Campaign-description"></span></b>
                                </p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="window.location.reload();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('sicripts')
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

    $("body").on('click', '#Edit', function() {
        var id = $(this).data('id');
        $.get('Campaigns/' + id + '/editt', function(res) {
            $("#modal_title").html('Edit Campaign');
            $("#id").val(res.id);
            $("#name_todo").val(res.name);
            $("#start_date_todo").val(res.start_date);
            $("#end_date_todo").val(res.end_date);
            $("#state_todo").val(res.state);
            $("#num_leads_todo").val(res.num_leads);
            $("#remaining_lead_todo").val(res.remaining_lead);
            $("#service_id_todo").val(res.service_id);
            $("#description_todo").val(res.description);
            $("#modal_todo").modal('show');

        });
    });

    //save data
    // Edit Or Add
    $("form").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "Campaigns/storer",
            data: $("#form_todo").serialize(),
            type: 'POST'
        }).done(function(res) {

            location.reload();

            if ($("#id").val()) {
                $("#row_todo_" + res.id).replaceWith(row);
            } else {
                $("#list_todo").prepend(row);
            }

            $("#form_todo").trigger('reset');
            $("#modal_todo").modal('hide');

        });
    });
</script>

    <script>
        $(document).ready(function() {
            //
            $('body').on('click', '#show-Campaign', function() {
                var userURL = $(this).data('url');
                //   var a = document.getElementById('a');
                $.get(userURL, function(data) {
                    $('#CampaignsShowModal').modal('show');
                    $('#Campaign-id').text(data.id);
                    $('#Campaign-name').text(data.name);
                    $('#Campaign-start_date').text(data.start_date);
                    $('#Campaign-end_date').text(data.end_date);
                    $('#Campaign-state').text(data.state);
                    $('#Campaign-num_leads').text(data.num_leads);
                    $('#Campaign-remaining_lead').text(data.remaining_lead);
                    $('#Campaign-service').text(data.service.name);
                    data.leads.forEach((element)=>{
                        // $('#Campaign-leads').append('<option >'+element.name+'</option>');
                        $('#Campaign-leads').append(element.name);

                    });
                    data.source.forEach((element)=>{
                        $('#Campaign-source').append('<option value="'+element.id+'">'+element.name+'</option>');
                        // $('#Campaign-source').append(element.name);
                    });
                    // $('#Campaign-source').text(data.source);
                    $('#Campaign-description').text(data.description);

                    console.log(data);
                })
            });

        });
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#CampaignForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/Campaigns/store",
                    data: $('#CampaignForm').serialize(),

                    // dataType: "dataType",
                    success: function(response) {
                        // console.log(response);
                        // $('#addServiceModel').modal('hide')
                        // alert('Data Saved');
                        if (response) {
                            location.reload();
                            // $("#dataTable tbody").prepend(
                            //     '<tr><td>' + response.name +'</td><td>' + response.num_leads +'</td><td>'+ response.service_id + '</td><td>' + response.start_date +
                            //     '<tr><td>' + response.end_date +'</td><td>' + response.state +'</td><td>'+ response.employee_id + '</td><td>'
                            //     );
                            $("#CampaignForm")[0].reset();
                            $("#addCampaigneModel").modal('hide');
                        }
                    },
                    error: function(response) {
                        $('#nameError').text(response.responseJSON.errors.name);
                        $('#start_dateError').text(response.responseJSON.errors.start_date);
                        $('#end_dateError').text(response.responseJSON.errors.end_date);
                        $('#stateError').text(response.responseJSON.errors.state);
                        $('#num_leadsError').text(response.responseJSON.errors.num_leads);
                        $('#service_idError').text(response.responseJSON.errors.service_id);
                        $('#source_idError').text(response.responseJSON.errors.source_id);
                        // console.log(error);
                        // alert('The data is incorrect, Either there are required entries that you did not enter, or the name or email or phone already exists, or you used letters in the place of numbers, or numbers in the place of letters');
                    }

                });
            });
        });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
