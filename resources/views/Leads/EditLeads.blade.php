@extends('LAYOUT')

@section('content')
    <div class="container" style="padding-top: 3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4">Edit Lead</h1>

                    <hr style="width:100%;text-align:left;margin-left:0">



                    </div>
                </div>

            </div>
            <div class="row">
                {{-- @php
              $varEmployee = 0;
          @endphp --}}
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="col">
                    <form action="{{ route('Leads.update', ['id' => $lead->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if (Auth::user()->role==1)

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" value="{{ $lead->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">email</label>
                            <input type="email" name="email" value="{{ $lead->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">phone</label>
                            <input type="text" name="phone" value="{{ $lead->phone }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">address</label>
                            <input type="text" name="address" value="{{ $lead->address }}" class="form-control">
                        </div>

                        @endif
                        @if (Auth::user()->role==1 || Auth::user()->role==3 )
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Note</label>
                            <input type="text" name="description" value="{{ $lead->description }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">state</label>
                            <select onclick="myFunction()" class="form-control"   name="state"   id="a" value="{{$lead->state}}" >
                                <option value="{{$lead->state}}"></option>
                                <option value="undefined">undefined</option>
                                <option value="No_Unswer">No_Unswer</option>
                                <option value="Meeting">Meeting</option>
                                <option value="Follow_up">Follow_up</option>
                                <option value="Cold">Cold</option>
                                <option value="Deal">Deal</option>
                              </select>
                            {{-- <input type="text" name="state" value="{{ $lead->state }}" class="form-control"> --}}
                        </div>
                        <div style="color: red"  class="ss hidden">
                            <label for="exampleFormControlInput1">profit_amount</label>
                            <input type="text" name="profit_amount" value="{{ $lead->profit_amount }}"
                                class="form-control">
                        </div>
                        @endif
                        @if (Auth::user()->role==1)
                        {{-- <div class="form-group">
                            <label for="exampleFormControlInput1">arrive_date</label>
                            <input type="text" name="arrive_date" value="{{ $lead->arrive_date }}" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Source</label>
                            <select class="form-control" name="source_id" value="{{ $lead->source_id }}"
                                id="exampleFormControlSelect1">
                                @foreach ($source as $source)
                                    <option value="{{ $source->id }}">{{ $source->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Service</label>
                            <select class="form-control" name="service_id" value="{{ $lead->service_id }}"
                                id="exampleFormControlSelect1">
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Campaign</label>
                            <select class="form-control" name="campaign_id" value="{{ $lead->campaign_id }}"
                                id="exampleFormControlSelect1">
                                @foreach ($campaigns as $campaign)
                                    <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleFormControlInput1">seen</label>
                            <input type="text" name="seen" value="{{ $lead->seen }}" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Employee</label>
                            <select class="form-control" name="employee_id"  value="{{ $lead->employee_id }}"
                                id="exampleFormControlSelect1">
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        @endif
                        <div class="row">
                        <div class="form-group">
                            <button class="btn btn-primary"  type="submit" >update</button>
                        </div>&emsp;


                    </form>
                    <div> <a class="btn btn-primary" onclick="history.go(-1)"  >Back</a></div>

                    </div>
                </div>
            </div>
        </div>


    @endsection

    @section('sicripts')
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function GoBackWithRefresh(event) {
    if ('referrer' in document) {
        window.location = document.referrer;
        /* OR */
        //location.replace(document.referrer);
    } else {
        window.history.back();
    }
}
</script>
<script  type="text/javascript">


function myFunction() {
    var status = document.getElementById("a");

if(status.value=='Deal'){
    $('.ss').removeClass("hidden");
}else{
    $('.ss').addClass("hidden");

}
}

</script>
@endsection
