@extends('LAYOUT')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>Dashboard</b></h1>

            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}

        </div>

        <hr style="width:100%;text-align:left;margin-left:0">
        <h6 class="m-0 font-weight-bold text-primary"><b>GENERAL STATS</b></h6>
        <br>



        <!-- Content Row -->

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            &nbsp;&nbsp;&nbsp; <div style="height: 8em; width:15%">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Leads</div>
                                {{-- <div class="h5 mb-  0 font-weight-bold text-gray-800">{{$lead->profit_amount}}</div> --}}
                                <div class="h5 mb-  0 font-weight-bold text-gray-800">{{ $leads }}</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Earnings (Monthly) Card Example -->
            <div style="height: 8em; width:15%">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Active Campigns</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $CampaignsActive }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Earnings (Monthly) Card Example -->
            <div style="height: 8em; width:15%">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Percentage of DEALS
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{ $Percentage_of_customers_who_bought }}%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: {{ $Percentage_of_customers_who_bought }}%"
                                                aria-valuenow={{ $Percentage_of_customers_who_bought }} aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Pending Requests Card Example -->
            <div style="height: 8em; width:15%">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total DEALS Of Leads</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $THE_NUMBER_OF_LEADS_WHO_BUY }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                            {{-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Earnings (Monthly) Card Example -->
            <div style="height: 8em; width:15%">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Services</div>
                                {{-- <div class="h5 mb-  0 font-weight-bold text-gray-800">{{$lead->profit_amount}}</div> --}}
                                <div class="h5 mb-  0 font-weight-bold text-gray-800">{{ $Services }}</div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Earnings (Monthly) Card Example -->
            <div style="height: 8em; width:15%">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Top 3 social media sites</div>
                                {{-- 'Facebook', 'Instagram', 'Telegram', 'WhatsApp', 'Tiktok', 'Twitter','Gmail','Other' --}}
                                <div class="row">&nbsp;&nbsp;
                                    @if ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Facebook')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    @elseif ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Instagram')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg></a>
                                    @elseif ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Telegram')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                        </svg>
                                    @elseif ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'WhatsApp')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>
                                    @elseif ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Tiktok')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                            <path
                                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                        </svg>
                                    @elseif ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Twitter')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    @elseif ($THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Gmail')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>
                                    @else
                                    <i style="padding-top: 3px;" class="fa fa-th-large fa-2x" aria-hidden="true"></i>
                                    {{-- <i style="padding-top: 4px;width: :36em" class="fas fa-th-large fas-4x"></i>5 --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                                        </svg> --}}
                                    @endif
                                    &nbsp;&nbsp;&nbsp;
                                    {{-- --------------------------------------------------------------------------------- --}}
                                    @if ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Facebook')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    @elseif ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Instagram')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg></a>
                                    @elseif ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Telegram')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                        </svg>
                                    @elseif ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'WhatsApp')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>
                                    @elseif ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Tiktok')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                            <path
                                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                        </svg>
                                    @elseif ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Twitter')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    @elseif ($THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Gmail')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>
                                    @else
                                    <i style="padding-top: 3px;" class="fa fa-th-large fa-2x" aria-hidden="true"></i>
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                                        </svg> --}}
                                    @endif
                                    &nbsp;&nbsp;&nbsp;
                                    {{-- --------------------------------------------------------------------------------- --}}
                                    @if ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Facebook')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    @elseif ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Instagram')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg></a>
                                    @elseif ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Telegram')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                        </svg>
                                    @elseif ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'WhatsApp')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>
                                    @elseif ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Tiktok')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                            <path
                                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                        </svg>
                                    @elseif ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Twitter')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    @elseif ($THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS == 'Gmail')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>
                                    @else
                                    <i style="padding-top: 3px;" class="fa fa-th-large fa-2x" aria-hidden="true"></i>
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                                        </svg> --}}
                                    @endif
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-duotone fa-browser"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;
            <br><br><br>
            <!-- Earnings (Monthly) Card Example -->




        </div>





        <!-- Content Row -->

        <hr style="width:100%;text-align:left;margin-left:0">
        <h6 class="m-0 font-weight-bold text-primary"><b>THE LAST FIVE LEADS CAME</b></h6>

        <br>
        <div class="row">
            <div class="card-body" style="height: 6em">
                {{-- <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i> --}}
                <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                &nbsp;<b>{{ $THE_LAST_LEAD_CAME }}</b>
            </div>
            <div class="card-body" style="height: 6em">
                {{-- <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i> --}}
                <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                &nbsp;<b>{{ $THE_2LAST_LEAD_CAME }}</b>
            </div>
            <div class="card-body" style="height: 6em">
                {{-- <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i> --}}
                <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                &nbsp;<b>{{ $THE_3LAST_LEAD_CAME }}</b>
            </div>
            <div class="card-body" style="height: 6em">
                {{-- <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i> --}}
                <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                &nbsp;<b>{{ $THE_4LAST_LEAD_CAME }}</b>
            </div>
            <div class="card-body" style="height: 6em">
                {{-- <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i> --}}
                <i class="fa fa-user fa-1x" aria-hidden="true"></i>
                &nbsp;<b>{{ $THE_5LAST_LEAD_CAME }}</b>
            </div>

        </div>
        <b><a style="color: rgb(2, 178, 2)" href="{{ route('THE_LAST_TEN_LEADS_CAME') }}">More Leads <svg
                    xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg></a></b>


        <hr style="width:100%;text-align:left;margin-left:0">
        <h6 class="m-0 font-weight-bold text-primary"><b>THE NUMBER LEADS COMING FROMSOCIAL MEDIA,WITH THE PERCENTAGE OF
                THOSE WHO ARE DEAL</b></h6>
        <br>
        &nbsp;&nbsp;
        <div class="row">

            <!--facebook -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div> --}}
                                {{-- <div class="h5 mb-  0 font-weight-bold text-gray-800">{{$lead->profit_amount}}</div> --}}
                                <div class="h5 mb-  0 font-weight-bold text-gray-800"><b>{{ $facebook }}</b></div>

                            </div>
                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Facebook', 'req1' => 'Deal']) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>

                            {{-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> --}}
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $facebookPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $facebookPercent }}%; " aria-valuenow={{ $facebookPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Instagram -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div> --}}
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><b>{{ $Instagram }}</b></div>
                            </div>
                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Instagram', 'req1' => 'Deal']) }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $InstagramPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $InstagramPercent }}%; " aria-valuenow={{ $InstagramPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Telegram -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-info text-uppercase mb-1">The number of customers who buy
                                            </div> --}}
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <b>{{ $Telegram }}</b></div>
                                    </div>

                                </div>
                            </div>
                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Telegram', 'req1' => 'Deal']) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                                </svg></a>
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $TelegramPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $TelegramPercent }}%; " aria-valuenow={{ $TelegramPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Twitter -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                The Number Of Leads Who Buy</div> --}}
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><b>{{ $Twitter }}</b></div>
                            </div>

                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Twitter', 'req1' => 'Deal']) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></a>
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $TwitterPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $TwitterPercent }}%; " aria-valuenow={{ $TwitterPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br><br><br>

            <!-- Tiktok -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div> --}}
                                <div class="h5 mb-  0 font-weight-bold text-gray-800"><b>{{ $Tiktok }}</b></div>

                            </div>
                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Tiktok', 'req1' => 'Deal']) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path
                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                </svg></a>
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $TiktokPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $TiktokPercent }}%; " aria-valuenow={{ $TiktokPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;

            <!-- Whatsap -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">

                                <div class="h5 mb-0 font-weight-bold text-gray-800"><b>{{ $WhatsApp }}</b></div>
                            </div>
                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'WhatsApp', 'req1' => 'Deal']) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg></a>
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $WhatsAppPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $WhatsAppPercent }}%; " aria-valuenow={{ $WhatsAppPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;
            <!-- gmail -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-info text-uppercase mb-1">The number of customers who buy
                                            </div> --}}
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <b>{{ $Gmail }}</b></div>
                                    </div>

                                </div>
                            </div>
                            <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Gmail', 'req1' => 'Deal']) }}">
                                <b>Gmail</b> <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg></a>
                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $GmailPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $GmailPercent }}%; " aria-valuenow={{ $GmailPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;
            <!--Other -->
            <div style="height: 8em; width:22%">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                {{-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div> --}}
                                <div class="h5 mb-  0 font-weight-bold text-gray-800"><b>{{ $Other }}</b></div>

                            </div>
                            {{-- <a style="color: rgb(212, 11, 11)" href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Other', 'req1' => 'Deal']) }}"></i></a> --}}
                            <a href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Other', 'req1' => 'Deal']) }}"><b>Other </b><i class="fa fa-th-large fa-2x" aria-hidden="true"></i></a>
                            {{-- <a
                                href="{{ route('Leads.FilterLeadsBySourceAndByDeals', ['req' => 'Other', 'req1' => 'Deal']) }}">
                                <b>Other</b> <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z" />
                                </svg></a> --}}

                        </div>
                        <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $OtherPercent }}%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ $OtherPercent }}%; " aria-valuenow={{ $OtherPercent }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&nbsp;&nbsp;&nbsp;
            <br><br><br>
            <!-- Earnings (Monthly) Card Example -->




        </div>
        <br>
        <hr style="width:100%;text-align:left;margin-left:0">

        <!-- Content Row -->


        <br>
        <div class="row">

            <!-- Content Column -->

            <div class="col-lg-6 mb-4">
                <h6 class="m-0 font-weight-bold text-primary"><b>CAMPAIGNS STATS</b></h6>
                <br>

                <!-- Project Card Example -->
                <div style="height:25em ;" class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Campaigns</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">{{ $TheFirstCampaignWhoBringTheMostLeads }}

                            {{-- <span style="color: rgb(24, 83, 220);position: relative;"> <b>NumberLeads:{{$NumberLeadsByFirstCampaign}}</b>
                                        </span> --}}
                            <span class="float-right"><b style="color: rgb(24, 83, 220)">NumberLeads:
                                    {{ $NumberLeadsByFirstCampaign }}</b> |<b style="color: red">
                                    {{ $PercentLeadsDealByFirstCampaign }}%</b> <b>OF THEM DEALS</b></span>
                        </h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar"
                                style="width: {{ $PercentLeadsDealByFirstCampaign }}%"
                                aria-valuenow="{{ $PercentLeadsDealByFirstCampaign }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>


                        <h4 class="small font-weight-bold">{{ $TheSecondCampaignWhoBringTheMostLeads }}
                            <span class="float-right"><b style="color: rgb(24, 83, 220)">NumberLeads:
                                    {{ $NumberLeadsBySecondCampaign }}</b> |<b
                                    style="color: red">{{ $PercentLeadsDealBySecondCampaign }}%</b> <b>OF THEM
                                    DEALS</b></span>
                        </h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar"
                                style="width: {{ $PercentLeadsDealBySecondCampaign }}%"
                                aria-valuenow="{{ $PercentLeadsDealBySecondCampaign }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>


                        <h4 class="small font-weight-bold">{{ $TheThirdCampaignWhoBringTheMostLeads }}

                            <span class="float-right"><b style="color: rgb(24, 83, 220)">NumberLeads:
                                    {{ $NumberLeadsByThirdCampaign }}</b> | <b
                                    style="color: red">{{ $PercentLeadsDealByThirdCampaign }}%</b> <b>OF THEM
                                    DEALS</b></span>
                        </h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ $PercentLeadsDealByThirdCampaign }}%"
                                aria-valuenow="{{ $PercentLeadsDealByThirdCampaign }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">{{ $TheFourthCampaignWhoBringTheMostLeads }}
                            <span class="float-right"><b style="color: rgb(24, 83, 220)">NumberLeads:
                                    {{ $NumberLeadsByFourthCampaign }}</b> | <b
                                    style="color: red">{{ $PercentLeadsDealByFourthCampaign }}%</b> <b>OF THEM
                                    DEALS</b></span>
                        </h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar"
                                style="width: {{ $PercentLeadsDealByFourthCampaign }}%"
                                aria-valuenow="$PercentLeadsDealByFourthCampaign}}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">{{ $TheFifthCampaignWhoBringTheMostLeads }}
                            <span class="float-right"><b style="color: rgb(24, 83, 220)">NumberLeads:
                                    {{ $NumberLeadsByFifthCampaign }}</b> |<b style="color: red">
                                    {{ $PercentLeadsDealByFifthCampaign }}%</b> <b>OF THEM DEALS</b></span>
                        </h4>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: {{ $PercentLeadsDealByFifthCampaign }}%"
                                aria-valuenow="{{ $PercentLeadsDealByFifthCampaign }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col-lg-6 mb-4">
                <h6 class="m-0 font-weight-bold text-primary"><b>Top Services</b></h6>
                <br>
                {{-- <span style=" padding-bottom: 20em;color: rgb(24, 83, 220);"> <b>Most Requested Services</b>
                            </span> --}}
                <!-- Illustrations -->


                <div class="card shadow mb-4" style="height: 7em">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            First Service</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <b>{{ $TheFirstServiceWhoBringTheMostLeads }}</b>
                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4" style="height: 7em">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Second Service</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">

                            <b> {{ $TheSecondServiceWhoBringTheMostLeads }}</b>
                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4" style="height: 8em">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Third Service</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">

                            <b> {{ $TheThirdServiceWhoBringTheMostLeads }}</b>
                        </div>

                    </div>
                </div>

                <!-- Approach -->


            </div>
        </div>

        <hr style="width:100%;text-align:left;margin-left:0">
        <h6 class="m-0 font-weight-bold text-primary"><b>The Employees Who Bring The Most Leads</b></h6>
        <br>


        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="row">

                <div style=" width:30%" class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">First Employee</h6>

                        <div class="dropdown no-arrow">
                        </div>

                    </div>
                    <!-- Card Body -->
                    <div class="row">
                        <div class="card-body" style="height: 6em">
                            <i class="fa fa-user-secret fa-3x" aria-hidden="true"></i>
                            <b>{{ $TheFirstEmployeeWhoBringTheMostLeads }}    <b>   |</b></b>
                            <span style="color: rgb(24, 83, 220);"> <b></b></span> <b
                                style="color:rgb(0, 0, 0) ">{{ $NumberLeadsByFirstEmployee }}</b> <b
                                style="color:red ">Leads</b>
                        </div>
                    </div>

                </div>
                &nbsp;&nbsp;
                <div style=" width:30%" class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Second Employee</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body" style="height: 6em">
                        <i class="fa fa-user-secret fa-3x" aria-hidden="true"></i>
                        <b>{{ $TheSecondWhoBringTheMostLeads }}<b>   |</b></b>
                        <span style="color: rgb(24, 83, 220);"> <b></b></span> <b
                            style="color:rgb(0, 0, 0) ">{{ $NumberLeadsBySecondEmployee }}</b> <b
                            style="color:red ">Leads</b>
                    </div>
                </div>
                &nbsp;&nbsp;
                <div style=" width:30%" class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Third Employee</h6>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body" style="height: 6em">
                        <i class="fa fa-user-secret fa-3x" aria-hidden="true"></i>
                        <b>{{ $TheThirdEmployeeWhoBringTheMostLeads }}<b>   |</b></b>
                        <span style="color: rgb(24, 83, 220);"> <b></b></span> <b
                            style="color:rgb(0, 0, 0); ">{{ $NumberLeadsByThirdEmployee }}</b> <b
                            style="color:red ">Leads</b>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->



    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <script src="{{ asset('Tamplate/vendor2/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('Tamplate/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('Tamplate/js/demo/chart-pie-demo.js') }}"></script>
@endsection
