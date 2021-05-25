<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ChatController extends Controller
{
    //

    public function rooms() {
        return ChatRoom::all();
    }
    public function messages(Request $request, $roomId) {
        return ChatMessage::where('chat_room_id',$roomId)
                ->with('user')
                ->orderBy('created_at','ASC')
                ->get();
    }
    public function newMessage(Request $request,$roomId) {
          return $newMessage=ChatMessage::create([
            'user_id'=>Auth::id(),
            'chat_room_id'=>$roomId,
            'message'=>$request->message,
        ]);
    }



}
