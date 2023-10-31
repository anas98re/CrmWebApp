@extends('LAYOUT')

@section('content')
    {{-- <div id="app"> --}}
    <div class="container" id="app">

        <chats :user="{{ auth()->user() }}"></chats>
        <script src="js/app.js"></script>
    </div>
    <br>
    <br>
    <div class="container">
        @if (Auth::user()->role == 1)
            <a class="text-danger" href="{{ route('deleteConversation') }}"><i class="btn btn-danger">Delete
                    Conversation</i></a>
    </div>
    @endif
    <br>
    {{-- </div> --}}
@endsection
