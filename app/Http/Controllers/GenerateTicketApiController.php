<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;
use Illuminate\Support\Carbon;

class GenerateTicketApiController extends Controller
{

    public function index(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'not authorized']);
        }
        $userId = $request->user_id ?: Auth::id();

        $tickets = Tickets::with(['user', 'problemCategory'])->where('user_id', $userId)->get();

        $tickets->transform(function ($ticket) {
            $ticket->formatted_created_at = Carbon::parse($ticket->created_at)->format('d-m-Y g:i A');
            return $ticket;
        });

        return response()->json(['data' => $tickets]);
    }


    public function store(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'not authorized']);
        }
        $request->validate([
            'prob_cat_id' => 'required|exists:problem_categories,id',
            'description' => 'required|string|max:500',
            'attachment' => 'nullable|file|mimes:jpg,png,pdf,webp|max:2048',
        ]);

        // Generating a unique ticket number here:
        $ticketNumber = 'TKT-' . strtoupper(Str::random(8));

        $ticket = new Tickets();

        // Checking if the attachment is present and valid here:
        if ($request->hasFile('attachment') && $request->file('attachment')->isValid()) {
            $filename = time() . "." . $request->file('attachment')->extension();
            $request->file('attachment')->move(public_path("Problem_image"), $filename);
            $ticket->attachment = $filename;
        } else {
            $ticket->attachment = null;
        }

        $ticket->ticket_number = $ticketNumber;
        $ticket->user_id = $request->input('user_id') ?: Auth::id();
        $ticket->problem_category_id = $request->prob_cat_id;
        $ticket->description = $request->description;

        $ticket->save();

        return response()->json([
            "data" => $ticket,
            "success" => true,
            "msg" => "Your ticket generated successfully"
        ]);
    }


    // to view the specified tickets:
    public function show(int $id, Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'not authorized']);
        }
        // $userId = $request->query('user_id'); //getting user id from the ajax request

        $tickets = Tickets::where("id", $id)
            ->with("problemCategory", "user","messages")
            ->first();
        if ($tickets) {
            $tickets->formatted_created_at = Carbon::parse($tickets->created_at)->format('l, d-m-Y g:i A');
            return response()->json(["data" => $tickets, "success" => true]);
        } else {
            return response()->json(['success' => false, "msg" => "Tickets not found"]);
        }
    }


    // close a specific ticket:
    public function closeTicket($id)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'not authorized']);
        }
        $ticket = Tickets::findOrFail($id);
        if ($ticket->status === 'closed') {
            return response()->json(["error" => 'Ticket is already closed'], 400);
        }

        $ticket->status = 'closed';
        $ticket->save();

        return response()->json(["success" => true, "msg" => 'Ticket closed successfully!', "new_status" => $ticket->status]);
    }

    // get all the tickets for the admin panel:
    public function getAllTicketsAdminPanel(){
        $tickets = Tickets::all();
        return response()->json(["data" => $tickets, "success" => true]);
    }
}
