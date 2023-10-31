<!DOCTYPE html>
<html>

    <head>

        <title>
                Employee
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
         crossorigin="anonymous">
         <link rel="stylesheet" href="4/w3.css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
              crossorigin="anonymous">
        <link rel="stylesheet" href="4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
.display-4{
    font: italic bold 44px/30px Georgia, serif;
}
.display-5{
    font: italic bold 44px/30px Georgia, serif;
}
body{
    /*min-height: 80vh;*/
    /*background-image: url("images/000.jpg");*/
    /*min-height: 100%;*/
    /*min-width: 100%;*/
  /*  background-size: cover;*/
  /*  opacity: 0.5;*/
  /*  background-image: url("images/000.jpg");*/
  /*  background-color: c27c00;*/
    background-color: rgba(194,124,0,0.1);

}
/*body::before{*/

/*    !*opacity: 0.5;*!*/
/*    background-color: rgba(0,0,0,0.1);*
/*}*/
footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    /* position: fixed; */
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 0 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

 body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
    height: 100%;
    line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("../images/iii.jpg");
    min-height: 100%;
}

.w3-bar .w3-button {
    padding: 16px;
}

</style>

    </head>
    <body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-wide">CRM</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">

                {{-- <a href="{{ route('employee.location')}}" class="w3-bar-item w3-button">Address</a>
                <a href="{{ route('employee.showditels')}}" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Detiles Employees</a>
                <a href="{{ route('employee.workTime')}}" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Shifts</a>
                <a href="{{ route('absence')}}" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Asbance</a>
                <a href="{{ route('complaints')}}" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> Complaints</a> --}}
{{--                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>--}}

                <ul class="navbar-nav ml-auto" class="w3-bar-item w3-button">


                                                                <a  class="dropdown-item" href="{{ route('logout') }}" style="margin-top: 13px"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    <i class="fa fa-envelope"></i>
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>

                                                </ul>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>

            </nav>
        {{--<img src="![](../../images/audrey.jpg)">--}}
{{--        <div id="app">--}}
{{--            --}}{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
{{--                <div class="pos-f-t">--}}


{{--                    <nav class="navbar navbar-dark bg-dark">--}}
{{--                        <div class="container">--}}
{{--                            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                               <h1>IMDAL</h1>--}}
{{--                            </a>--}}




{{--                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                                <span class="navbar-toggler-icon"></span>--}}
{{--                            </button>--}}

{{--                            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                                <!-- Left Side Of Navbar -->--}}
{{--                                <ul class="navbar-nav mr-auto">--}}

{{--                                </ul>--}}

{{--                                <!-- Right Side Of Navbar -->--}}
{{--                                <ul class="navbar-nav ml-auto">--}}
{{--                                    <!-- Authentication Links -->--}}
{{--                                    @guest--}}
{{--                                        @if (Route::has('login'))--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}

{{--                                        @if (Route::has('register'))--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                    @else--}}
{{--                                        <li class="nav-item dropdown">--}}
{{--                                            <a style="float:right" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                                {{ Auth::user()->name }}--}}
{{--                                            </a>--}}

{{--                                            <div style="float:right" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                                <a  class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                                   onclick="event.preventDefault();--}}
{{--                                                                 document.getElementById('logout-form').submit();">--}}
{{--                                                    {{ __('Logout') }}--}}
{{--                                                </a>--}}

{{--                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                                    @csrf--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    @endguest--}}
{{--                                </ul>--}}
{{--                            </div>--}}


{{--                      </button>--}}
{{--                    </nav>--}}


{{--                </div>--}}






<br>
<br>

        <div class="container" style="padding-top: 3%">
            <div class="container">
                <div class="btn-group" style="padding-left: 20px">
                    {{-- <a  href="{{ route('employee')}}" data-toggle="tooltip" title="Detiles of All Employee in Company!">   <button type="button" class="w3-button w3-yellow w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" >All Employee</button></a>
                    <a href="{{ route('employee.trashed')}}" data-toggle="tooltip" title="Detiles of All Employee in Company!">  <button  class="w3-button w3-yellow w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" >Resigned employees</button></a>
                    <a href="{{ route('department')}}" data-toggle="tooltip" title="Detiles of All Employee in Company!">   <button  class="w3-button w3-yellow w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" >All departments</button></a>
                    <a href="{{ route('jop')}}" data-toggle="tooltip" title="Detiles of All Employee in Company!">  <button class="w3-button w3-yellow w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" >All jops</button></a> --}}

                    <a  class="w3-button w3-yellow w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" href="{{ route('home')}}" role="button" style="margin-left: 260px; background-color: rgba(255,255,255,0.03);" >Home</a>

                </div>
{{--        <a class="btn btn-primary" href="{{ route('employee')}}" role="button" >All Employee</a>--}}
{{--        <a class="btn btn-primary" href="{{ route('employee.showditels')}}" role="button" >Detiles Employees</a>--}}
{{--        <a class="btn btn-danger" href="{{ route('employee.trashed')}}" role="button">Resigned employees <i class="fas fa-trash"></i></a>--}}
{{--        <a class="btn btn-success" href="{{ route('department')}}" role="button">All departments</a>--}}
{{--        <a class="btn btn-warning" href="{{ route('jop')}}" role="button">All jops</a>--}}
{{--        <a class="btn btn-primary" href="{{ route('employee.workTime')}}" role="button">Shifts</i></a>--}}
{{--        <a class="btn btn-primary" href="{{ route('employee.location')}}" role="button">location</i></a>--}}
{{--                <a class="btn btn-primary" href="{{ route('absence')}}" role="button">asbance</i></a>--}}
            </div></div>



      @yield('content')<!-- fun by blade-->

      @php
          $varEmployee=0;
      @endphp


{{-- <footer>
    <p>
        Created with <i class="fa fa-heart"></i> by
        <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
        - Read how I created this and how you can join the challenge
        <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
    </p>
</footer> --}}


{{-- <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="default.html" target="_blank">w3.css</a></p>
  </footer> --}}

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
        <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    </body>
</html>
