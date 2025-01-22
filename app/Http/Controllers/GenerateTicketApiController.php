<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class GenerateTicketApiController extends Controller
{
    public function store(Request $request){

        // generating unique ticket number here:
        $ticketNumber = 'TKT-' . strtoupper(Str::random(8));

        $ticket = new Tickets();
        $ticket->ticket_number = $ticketNumber;
        $ticket->user_id = $request->user_id;
        $ticket->problem_category_id = $request->prob_cat_id;
        $ticket->description = $request->description;
        $ticket->save();
    }

    public function index(){
        return response()->json(['data' => Tickets::all()]);
    }
}
