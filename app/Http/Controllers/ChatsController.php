<?php

namespace App\Http\Controllers;

use App\Constants;
use Illuminate\Http\Request;
use App\Models\message;
use App\Models\User;
use App\Events\MessageSend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chats');
    }

    public function fetchMessages()
    {
        return message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $message = auth()->user()->messages()->create([
            'message' => $request->message
        ]);

        broadcast(new MessageSend($message->load('user')))->toOthers();

        return ['status' => 'success'];
    }

    public function deleteConversation()
    {
        if (Auth::user()->role == Constants::ADMIN_ID) {
            DB::table("messages")->delete();
            return redirect()->back()->with('messages', 'Done Delete');
        } else {
            return view('home');
        }
    }
}
