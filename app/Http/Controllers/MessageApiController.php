<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessageApiController extends Controller
{
    public function storeMessage(Request $request)
    {


        $message = new Messages();
        $message->ticket_id = $request->ticketId;
        $message->sender_id = $request->senderId;
        $message->sender_type = $request->senderType;
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
        $messages = Messages::where('ticket_id', $ticketId)
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json(["data" => $messages, "success" => true]);
    }
}
