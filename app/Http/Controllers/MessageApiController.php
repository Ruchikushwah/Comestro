<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Tickets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageApiController extends Controller
{
    public function storeMessage(Request $request)
    {
        if(!Auth::check()){
            return response()->json(['message' => 'not authorized']);
        }

        $validated = $request->validate([
            'ticketId' => 'required|integer',
            'senderId' => 'required|integer|exists:users,id',
            'message' => 'required|string',
        ]);

        $ticketStatus = Tickets::where('id',$request->ticketId)->value('status');
        if($ticketStatus === 'closed'){
            return response()->json(['success' => false, 'msg' => 'this ticket is closed, you cannot send messages.'], 403);
        }

        $senderType = User::where('id',$request->senderId)->value('isAdmin') == 1 ? 'admin' : 'user'; 

        $message = new Messages();
        $message->ticket_id = $request->ticketId;
        $message->sender_id = $request->senderId;
        $message->sender_type = $senderType;
        $message->message = $request->message;
        $message->save();

        return response()->json([
            "data" => $message,
            "success" => true,
            "msg" => 'Your message sent successfully'
        ]);
    }


    public function getMessage($ticketId)
    {
        if(!Auth::check()){
            return response()->json(['message' => 'not authorized']);
        }
        $messages = Messages::where('ticket_id', $ticketId)
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json(["data" => $messages, "success" => true]);
    }
}
