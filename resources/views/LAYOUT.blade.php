<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRM</title>

    <!-- Custom fonts for this template-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('Tamplate/vendor2/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('Tamplate/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('Tamplate/vendor2/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


    <style>
        .vl {
            border-left: 2px solid rgb(87, 87, 87);
            height:80%;
            position: absolute;
            left: 50%;
            margin-left: -3px;
            top: 0;
        }

        .d {
            color: rgb(63, 63, 249);
        }

        .hidden {
            display: none;
        }

        .show {
            display: block;
        }
        .buttonCamaignSource {
            /* Green */
            border: none;
            color: white;
            padding: 0;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 4em;
            width: 40%;
        }
        .buttonVIlla {
            /* Green */
            border: none;
            color: white;
            padding: 0;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            height: 4em;
            width: 110%;
        }
        .buttonCamaign {
            /* Green */
            border: none;
            color: white;
            padding: 0;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            height: 4em;
            width: 120%;
        }
        .button {
            /* Green */
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            height: 8em;
            width: 12%;
        }

        .button1 {
            background-image: linear-gradient(orange, rgb(254, 206, 117)) ;
            border-radius: 9px;
        }

        .button2 {
            background-image: linear-gradient(rgb(0, 217, 255), rgb(176, 246, 253)) ;

            border-radius: 9px;
        }

        .button3 {
            background-image: linear-gradient(#165bef, rgb(152, 208, 253)) ;
            border-radius: 9px;
        }

        .button4 {
            background-image: linear-gradient(#0ba54b, rgb(60, 248, 116)) ;
            border-radius: 9px;
        }

        .button5 {
            background-image: linear-gradient(#ef1616, rgb(249, 125, 125)) ;
            border-radius: 9px;
        }

        .button6 {
            background-image: linear-gradient(rgb(6, 17, 35), rgb(128, 124, 124)) ;
            border-radius: 9px;
        }

        .button7 {
            background-image: linear-gradient(rgb(141, 140, 140), rgb(206, 206, 206)) ;
            border-radius: 9px;
        }


        .button0 {
            /* Green */
            /* border: none; */
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 4em;
            width: 100%;
        }
        .button30 {
            background-image: linear-gradient(#165bef, rgb(152, 208, 253)) ;
            border-radius: 9px;
        }
        .button60 {
            background-image: linear-gradient(rgb(6, 17, 35), rgb(128, 124, 124)) ;
            border-radius: 9px;
        }
        .button40 {
            background-image: linear-gradient(#0ba54b, rgb(60, 248, 116)) ;
            border-radius: 9px;
        }
        .button70 {
            background-image: linear-gradient(rgb(141, 140, 140), rgb(206, 206, 206)) ;
            border-radius: 9px;
        }
        .button10 {
            background-image: linear-gradient(orange, rgb(254, 206, 117)) ;
            border-radius: 9px;
        }

        .button20 {
            background-image: linear-gradient(rgb(0, 217, 255), rgb(176, 246, 253)) ;
            border-radius: 9px;
        }
        .button50 {
            background-image: linear-gradient(#ef1616, rgb(249, 125, 125)) ;

            border-radius: 9px;
        }

        .button71 {
            background-image: linear-gradient(rgb(146, 144, 144), rgb(166, 166, 166)) ;
            border-radius: 4px;
        }
        .button771 {
            background-image: linear-gradient(rgb(146, 144, 144), rgb(166, 166, 166)) ;
            border-radius: 8px;
        }
        .button011111 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 3em;
            width: 40%;
        }
        .button0222 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 3em;
            width: 25%;
        }
        .button01 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 3em;
            width: 103%;
        }
        .button015es {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 2.6em;
            width: 20em;
            /* width: 45%; */
        }
        .button015e {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 2.6em;
            width: 20em;
        }
        .button015 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 3em;
            width: 80%;
        }
        .button081 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 8em;
            width: 53em;
        }
        .button0815 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 7em;
            width: 20em;
        }
        .button0814 {
            /* Green */
            border: none;
            color: white;
            padding: 12px;
            /* position: relative; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 6px;
            margin: 4px 2px;
            /* cursor: pointer; */
            height: 7em;
            width: 30em;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        {{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> --}}
            <ul  class="navbar-nav bg-gradient-primary sidebar sidebar-dark toggled" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            @if (Auth::user()->role == 1)
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
                    <div class="sidebar-brand-text mx-3" style="padding-right: 65px; size:222px">CRM</div>
                </a>
            @endif
            @if (Auth::user()->role == 2)
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/homeByAdEmployee">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
                    <div class="sidebar-brand-text mx-3" style="padding-right: 65px; size:222px">CRM</div>
                </a>
            @endif
            @if (Auth::user()->role == 3)
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/homeBySalesEmployee">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
                    <div class="sidebar-brand-text mx-3" style="padding-right: 65px; size:222px">CRM</div>
                </a>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>



            <li class="nav-item">

                <a class="nav-link" href="/Leads">
                    <i class="fa fa-male"></i>
                    <span>Leads</span></a>
                @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                    <a class="nav-link" href="/Campaigns">
                        <i class="fa fa-qrcode"></i>
                        <span>Campaign</span></a>
                    <a class="nav-link" href="/Services">
                        <i class="fa fa-server"></i>
                        <span>Service & Project</span></a>
                @endif

                {{-- <a class="nav-link" href="/Leads/create">
                        <i class="fa fa-cart-plus"></i>
                        <span>Add Lead</span></a> --}}
                <a class="nav-link" href="/chats">
                    <i class="fa fa-comment"></i>
                    <span>Chat</span></a>
                <a class="nav-link" href="/getPageExcel">
                    <i class="fa fa-server"></i>
                    <span>Excel</span></a>
                    @if (Auth::user()->role == 1 || Auth::user()->role ==3 )
                    <a class="nav-link" href="/villas">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        <span>Villas & Apartments</span></a>
                @endif
                @if (Auth::user()->role == 1)
                    <a class="nav-link" href="/employees">
                        <i class="fa fa-users"></i>
                        <span>Employees</span></a>

                    {{-- <a class="nav-link" href="/employee/create">
                                <i class="fa fa-cart-plus"></i>
                                <span>Add Employee</span></a> --}}
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa fa-puzzle-piece"></i>
                        <span>Departments</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">DEPARTMENTS:</h6>
                            <a class="collapse-item"
                                href="{{ route('getAllEmployeesIntoAdminsDepartment', ['nameOfDepartment' => 'administration']) }}">administration</a>
                            <a class="collapse-item"
                                href="{{ route('getAllEmployeesIntoAdDepartment', ['nameOfDepartment' => 'Marketing']) }}">Marketing</a>
                            <a class="collapse-item"
                                href="{{ route('getAllEmployeesIntoSalesDepartment', ['nameOfDepartment' => 'Sales']) }}">Sales
                            </a>
                        </div>
                    </div>
                    </a>
                @endif

            </li>



            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            {{-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> --}}

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            {{-- <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"> --}}
                            {{-- <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div> --}}
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" style="color:black" href="#"
                                id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" style="color:black" href="#"
                                id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li> --}}

                        <div  class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" style="margin-top: 13px"
                                    onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                    <i class="fa fa-envelope"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Organizleads &copy; 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script>
            var w = window.innerWidth;
            if(w<900){
                alert("ERROR");
                window.location.href = '/error';
            }

            </script>
        <script src="{{ asset('Tamplate/vendor2/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('Tamplate/vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('Tamplate/vendor2/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('Tamplate/js/sb-admin-2.min.js') }}"></script>


        <script src="{{ asset('Tamplate/vendor2/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Tamplate/vendor2/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('Tamplate/js/demo/datatables-demo.js') }}"></script>
        @yield('sicripts')

    </div>





</body>

</html>
