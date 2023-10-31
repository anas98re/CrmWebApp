@extends('LAYOUT')

@section('content')
<style>
    /* .hidden{
        display: none;
    } */
    /* .show{
        display: block;
    } */
  .jops {
    font-family: "Courier New", Courier, monospace;
  }

  body {
    /*background-image: url("../images/audrey1.jpg");*/
    background-size: cover;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  function checkOnlyOne(b) {

    var x = document.getElementsByClassName('daychecks');
    var i;

    for (i = 0; i < x.length; i++) {
      if (x[i].value != b) x[i].checked = false;
    }
  }
</script>
<div class="container" style="padding-top: 3%">
  <div class="container">
    <div class="row">

      <div class="col">
        {{-- <a class="btn btn-success btn-lg" href="{{ route('home')}}" role="button" style="float: right">Home</a>--}}

        {{-- <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);"> --}}
            <h1 class="display-4">Add Lead</h1>

            <hr style="width:100%;text-align:left;margin-left:0">




        </div>
      </div>

    </div>
    <div class="row">

      @if (count($errors) > 0)
      <ul>
        @foreach ( $errors->all() as $item )
        <li style="color: red">
          {{$item}}
        </li>
        @endforeach
      </ul>
      @endif

      <div class="col">
        <form action="{{route('Leads.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
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
                @foreach ($source as $source)
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

        <div class="form-group">
            <label for="exampleFormControlInput1">Employee</label>
            <select class="form-control" name="employee_id"
                id="exampleFormControlSelect1">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
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
                <option value="Cold">Cold</option>
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



          <div class="form-group">
            <button class="btn btn-primary" type="submit">save</button>
            <a class="btn btn-primary" href="{{ route('Leads')}}" role="button">back</a>

          </div>
        </form>
      </div>
    </div>

  @endsection

  @section('sicripts')
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script  type="text/javascript">
// $(document).on('change', '.check', function() {
//   if (this.checked) {
//     $(this).siblings('input').prop('disabled', false);
//   } else {
//     $(this).siblings(".inputs").prop("disabled", true);
//   }
// });

function changeStatus()
{

  var status = document.getElementById("leadStatus");
if(status.value=="Deal"){
document.getElementById("wname").style.display = 'none';
}else{
document.getElementById("wname").style.visibility="visible";
}
};

function myFunction() {
    var status = document.getElementById("a");

if(status.value=='Deal'){
    $('.ss').removeClass("hidden");
}else{
    $('.ss').addClass("hidden");

}
}

            $('.leadStatus').change(function(){
                var responseID = $(this).val();
                if(responseID == "Deal"){
                    $('#wname').removeClass("hidden");
                    $('#wname').addClass("show");
                }else{
                    $('#wname').removeClass("show");
                    $('#wname').addClass("hidden");
                }
            });
            console.log(responseID);

</script>
@endsection

